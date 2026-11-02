<?php

declare(strict_types=1);

namespace App\Tests;

use Youwe\BluestonePim\Api\ApiRevisionContext;
use Youwe\BluestonePim\Api\BluestoneClient;
use Youwe\BluestonePim\Api\Connector\BulkOperationsConnector;
use Youwe\BluestonePim\Api\Connector\PimConnector;
use Youwe\BluestonePim\Api\OpenApiContractValidator;
use Youwe\BluestonePim\Api\OperationCatalog;
use Youwe\BluestonePim\Database\ConnectionFactory;
use Youwe\BluestonePim\Migration\MigrationContext;
use Youwe\BluestonePim\Migration\MigrationLock;
use Youwe\BluestonePim\Migration\MigrationStorage;
use Youwe\BluestonePim\Service\ApiOperationRunner;
use Youwe\BluestonePim\Service\BatchProcessor;
use Youwe\BluestonePim\Service\BulkOperationsJobRunner;
use Youwe\BluestonePim\Service\CursorPaginator;
use Youwe\BluestonePim\Service\PagePaginator;
use Youwe\BluestonePim\Service\PimJobRunner;
use Youwe\BluestonePim\Service\ProductCursorRunner;
use App\Tests\Fixtures\RecoveryTestClock;
use Doctrine\DBAL\Connection;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

final class WorkflowRecoveryTest extends TestCase
{
    private Connection $connection;
    private MigrationStorage $storage;
    private MigrationLock $lock;
    private MigrationContext $context;
    private ApiRevisionContext $revision;
    private OperationCatalog $catalog;

    protected function setUp(): void
    {
        $this->connection = ConnectionFactory::create('sqlite:///:memory:');
        $this->storage = new MigrationStorage($this->connection, 'test', 'https://api.test.bluestonepim.com');
        $this->storage->initialize();
        $this->lock = new MigrationLock($this->connection);
        $this->lock->acquire();
        $this->catalog = new OperationCatalog(dirname(__DIR__).'/resources/bluestone');
        $this->revision = new ApiRevisionContext();
        $this->revision->select($this->catalog->activeRevision());
        $this->context = new MigrationContext('20261028000001', $this->storage, $this->lock, $this->revision);
    }

    protected function tearDown(): void
    {
        $this->lock->release();
    }

    public function testCursorResumeSkipsCompletedPagesAndKeepsQueryAndContext(): void
    {
        $fetches = []; $processed = []; $fail = true;
        $source = ['operation' => 'typed-search', 'filter' => ['type' => 'SINGLE'], 'context' => 'en'];
        $fetch = static function (?string $cursor, array $query) use (&$fetches, $source): array {
            self::assertSame($source, $query);
            $fetches[] = $cursor;
            return ['items' => [$cursor ?? 'first'], 'next_cursor' => $cursor === null ? 'second' : null];
        };
        $process = static function (array $items) use (&$processed, &$fail): void {
            if ($items === ['second'] && $fail) throw new \RuntimeException('Interrupted page.');
            $processed[] = $items;
        };
        $paginator = new CursorPaginator();
        try {
            $paginator->traverse($this->context, 'cursor', $fetch, $process, queryContext: $source);
            self::fail('Expected the second page to fail.');
        } catch (\RuntimeException) {
            self::assertNotFalse($this->step('cursor-0'));
            self::assertFalse($this->step('cursor-1'));
        }
        $fail = false;
        self::assertSame(2, $paginator->traverse($this->context, 'cursor', $fetch, $process, queryContext: $source));
        self::assertSame([null, 'second', 'second'], $fetches);
        self::assertSame([['first'], ['second']], $processed);
        $before = count($fetches);
        try {
            $paginator->traverse($this->context, 'cursor', $fetch, $process, queryContext: $source + ['new-filter' => true]);
            self::fail('Changed query must be rejected.');
        } catch (\RuntimeException $error) {
            self::assertStringContainsString('changed', $error->getMessage());
            self::assertCount($before, $fetches);
        }
    }

    public function testRepeatedCursorIsRejectedBeforeProcessingOrCheckpointingTheBadPage(): void
    {
        $processed = 0;
        try {
            (new CursorPaginator())->traverse($this->context, 'repeated', static fn (?string $cursor): array => ['items' => [1], 'next_cursor' => 'same'], static function () use (&$processed): void { ++$processed; });
            self::fail('A repeated cursor must stop traversal.');
        } catch (\RuntimeException $error) {
            self::assertStringContainsString('repeated a cursor', $error->getMessage());
            self::assertSame(1, $processed);
            self::assertFalse($this->step('repeated-1'));
        }
    }

    public function testProductCursorUsesThePinnedTypedPimProtocolAndFreezesItsInputs(): void
    {
        $requests = [];
        $http = new MockHttpClient(static function (string $method, string $url, array $options) use (&$requests): MockResponse {
            if (str_contains($url, '/op/token')) return new MockResponse('{"access_token":"oauth","expires_in":3600}');
            $requests[] = [$url, $options];
            $body = json_decode($options['body'], true, 512, JSON_THROW_ON_ERROR);
            $first = $body['cursor'] === null;
            return new MockResponse(json_encode(['data' => [['id' => $first ? 'first' : 'second']], 'nextCursor' => $first ? 'next' : null], JSON_THROW_ON_ERROR), ['response_headers' => ['Content-Type: application/json']]);
        });
        $api = new ApiOperationRunner(new BluestoneClient($http, 'https://api.test.bluestonepim.com', 'https://idp.test.bluestonepim.com/op/token', 'id', 'secret'), $this->lock);
        $runner = new ProductCursorRunner(new PimConnector($api, $this->catalog, $this->revision, new OpenApiContractValidator()), new CursorPaginator());
        $ids = [];
        self::assertSame(2, $runner->traverse($this->context, 'products', static function (array $items) use (&$ids): void { $ids[] = $items[0]['id']; }, pageSize: 2));
        self::assertSame(['first', 'second'], $ids);
        self::assertCount(2, $requests);
        self::assertSame(['count' => 2, 'cursor' => null, 'views' => []], json_decode($requests[0][1]['body'], true));
        self::assertSame(['count' => 2, 'cursor' => 'next', 'views' => []], json_decode($requests[1][1]['body'], true));
        self::assertContains('context: en', $requests[1][1]['headers']);
        self::assertStringEndsWith('?archiveState=active', $requests[1][0]);
        try {
            $runner->traverse($this->context, 'products', static fn () => null, pageSize: 2, languageContext: 'different');
            self::fail('A changed context must be rejected.');
        } catch (\RuntimeException $error) {
            self::assertStringContainsString('context or settings changed', $error->getMessage());
            self::assertCount(2, $requests);
        }
    }

    public function testNumberedPagesResumeAndEnforceTheOriginalPageSettings(): void
    {
        $fetches = []; $fail = true;
        $fetch = static function (int $page, array $query) use (&$fetches): array {
            self::assertEquals(['context' => 'en', 'page_size' => 2], $query);
            $fetches[] = $page;
            return ['items' => [$page], 'has_more' => $page < 2];
        };
        $process = static function (array $items) use (&$fail): void { if ($items === [2] && $fail) throw new \RuntimeException('Interrupted.'); };
        $paginator = new PagePaginator();
        try {
            $paginator->traverse($this->context, 'pages', $fetch, $process, firstPage: 1, queryContext: ['context' => 'en', 'page_size' => 2]);
            self::fail('Expected page 2 to fail.');
        } catch (\RuntimeException) {
            self::assertFalse($this->step('pages-2'));
        }
        $fail = false;
        self::assertSame(2, $paginator->traverse($this->context, 'pages', $fetch, $process, firstPage: 1, queryContext: ['page_size' => 2, 'context' => 'en']));
        self::assertSame([1, 2, 2], $fetches);
        $this->expectExceptionMessage('settings changed');
        $paginator->traverse($this->context, 'pages', $fetch, $process, firstPage: 0, queryContext: ['context' => 'en', 'page_size' => 2]);
    }

    public function testBatchRetriesReconcileRecordsAndSkipCompletedBatches(): void
    {
        $written = []; $calls = []; $fail = true;
        $process = static function (string $id) use (&$written, &$calls, &$fail): void {
            if (isset($written[$id])) return; // Documented read/reconcile by the stable record ID.
            if ($id === 'd' && $fail) throw new \RuntimeException('Interrupted.');
            $calls[] = $id; $written[$id] = true;
        };
        $batches = new BatchProcessor();
        try {
            $batches->process($this->context, 'batch', ['a','b','c','d'], $process, 2);
            self::fail('Expected the second batch to fail.');
        } catch (\RuntimeException) {
            self::assertNotFalse($this->step('batch-0'));
            self::assertFalse($this->step('batch-1'));
        }
        $fail = false;
        self::assertSame(4, $batches->process($this->context, 'batch', ['a','b','c','d'], $process, 2));
        self::assertSame(['a','b','c','d'], $calls);
        $this->expectExceptionMessage('does not match');
        $batches->process($this->context, 'batch', ['changed','b','c','d'], $process, 2);
    }

    public function testPimPollingResumesSavedSubmissionAndThenSkipsCompletedWork(): void
    {
        $submissions = 0; $clock = new RecoveryTestClock();
        $clock->onSleep = static function (): void { throw new \RuntimeException('Interrupted wait.'); };
        $runner = $this->jobs('pim', ['WAITING'], $clock, $http);
        $submit = static function () use (&$submissions): string { ++$submissions; return 'saved-task'; };
        try {
            $runner->submitAndWait($this->context, 'pim-submit', $submit);
            self::fail('The wait should be interrupted.');
        } catch (\RuntimeException) {
            self::assertNotFalse($this->step('pim-submit'));
            self::assertFalse($this->step('pim-submit-completion'));
        }
        $runner = $this->jobs('pim', ['EXECUTING', 'COMPLETED'], new RecoveryTestClock(), $http);
        self::assertSame('COMPLETED', $runner->submitAndWait($this->context, 'pim-submit', $submit)['status']);
        self::assertSame(1, $submissions);
        $requests = $http->getRequestsCount();
        self::assertSame('COMPLETED', $runner->submitAndWait($this->context, 'pim-submit', $submit)['status']);
        self::assertSame($requests, $http->getRequestsCount());
        self::assertNotFalse($this->step('pim-submit-completion'));
    }

    public function testInterruptedBatchRejectsChangedInputBeforeProcessingAnyMoreRecords(): void
    {
        $batches = new BatchProcessor();
        try {
            $batches->process($this->context, 'interrupted-input', ['a','b'], static function (string $id): void {
                if ($id === 'b') throw new \RuntimeException('Interrupted after a.');
            }, 2);
            self::fail('Expected the first batch to be interrupted.');
        } catch (\RuntimeException) {
            self::assertNotFalse($this->step('interrupted-input-0-source'));
            self::assertFalse($this->step('interrupted-input-0'));
        }
        $processed = 0;
        try {
            $batches->process($this->context, 'interrupted-input', ['c','d'], static function () use (&$processed): void { ++$processed; }, 2);
            self::fail('Changed input must be rejected before processing.');
        } catch (\UnexpectedValueException $error) {
            self::assertStringContainsString('Restore the original records', $error->getMessage());
            self::assertSame(0, $processed);
            self::assertFalse($this->step('interrupted-input-0'));
        }
    }

    #[DataProvider('jobComponents')]
    public function testTimeoutRetainsSubmissionAndDoesNotCompleteTheStep(string $component): void
    {
        $runner = $this->jobs($component, ['WAITING'], new RecoveryTestClock(), $http);
        try {
            $runner->submitAndWait($this->context, 'timeout-submit', static fn (): string => 'saved-task', 1, 1000);
            self::fail('Polling must time out.');
        } catch (\RuntimeException $error) {
            self::assertStringContainsString('Timed out', $error->getMessage());
            self::assertNotFalse($this->step('timeout-submit'));
            self::assertFalse($this->step('timeout-submit-completion'));
            self::assertSame(2, $http->getRequestsCount());
        }
    }

    #[DataProvider('jobComponents')]
    public function testResponseArrivingAfterDeadlineCannotCompleteTheJobStep(string $component): void
    {
        $clock = new RecoveryTestClock();
        $runner = $this->jobs($component, ['COMPLETED'], $clock, $http, static function () use ($clock): void { $clock->elapsed += 2; });
        try {
            $runner->submitAndWait($this->context, 'late-response', static fn (): string => 'saved-job', 1);
            self::fail('A response after the deadline must leave completion unfinished.');
        } catch (\RuntimeException $error) {
            self::assertStringContainsString('Timed out', $error->getMessage());
            self::assertNotFalse($this->step('late-response'));
            self::assertFalse($this->step('late-response-completion'));
        }
    }

    public static function jobComponents(): iterable
    {
        yield ['pim'];
        yield ['bulk-operations'];
    }

    #[DataProvider('terminalStates')]
    public function testEachServiceUsesItsOwnTerminalStates(string $component, string $status, bool $success): void
    {
        $runner = $this->jobs($component, [$status], new RecoveryTestClock(), $http);
        if (!$success) {
            try {
                $runner->submitAndWait($this->context, 'terminal', static fn (): string => 'saved-id');
                self::fail('A failed or cancelled job must not complete.');
            } catch (\RuntimeException $error) {
                self::assertStringNotContainsString('private-error', $error->getMessage());
                self::assertNotFalse($this->step('terminal'));
                self::assertFalse($this->step('terminal-completion'));
            }
        } else {
            self::assertSame($status, $runner->submitAndWait($this->context, 'terminal', static fn (): string => 'saved-id')['status']);
            self::assertNotFalse($this->step('terminal-completion'));
        }
    }

    public static function terminalStates(): iterable
    {
        yield ['pim', 'COMPLETED', true];
        yield ['pim', 'ERROR', false];
        yield ['pim', 'CANCELLED', false];
        yield ['pim', 'COMPLETED_WITH_ISSUES', false];
        yield ['bulk-operations', 'COMPLETED', true];
        yield ['bulk-operations', 'COMPLETED_WITH_ISSUES', true];
        yield ['bulk-operations', 'ERROR', false];
        yield ['bulk-operations', 'EXPIRED', false];
    }

    public function testBulkPollingRetainsItsSubmissionOnRestart(): void
    {
        $clock = new RecoveryTestClock();
        $clock->onSleep = static function (): void { throw new \RuntimeException('Stopped.'); };
        $submitted = 0;
        $submit = static function () use (&$submitted): string { ++$submitted; return 'saved-bulk-job'; };
        try {
            $this->jobs('bulk-operations', ['WAITING'], $clock, $http)->submitAndWait($this->context, 'bulk', $submit);
        } catch (\RuntimeException) {
            self::assertFalse($this->step('bulk-completion'));
        }
        self::assertSame('COMPLETED_WITH_ISSUES', $this->jobs('bulk-operations', ['EXECUTING', 'COMPLETED_WITH_ISSUES'], new RecoveryTestClock(), $http)->submitAndWait($this->context, 'bulk', $submit)['status']);
        self::assertSame(1, $submitted);
    }

    public function testInvalidPollingSettingsDoNotSubmitRemoteWork(): void
    {
        $runner = $this->jobs('pim', [], new RecoveryTestClock(), $http);
        $submitted = false;
        try {
            $runner->submitAndWait($this->context, 'invalid', static function () use (&$submitted): string { $submitted = true; return 'id'; }, 0);
            self::fail('Invalid timing must fail before submission.');
        } catch (\InvalidArgumentException) {
            self::assertFalse($submitted);
            self::assertSame(0, $http->getRequestsCount());
        }
    }

    public function testLeaseLossDuringAPollingWaitStopsBeforeAnotherRequestOrCheckpoint(): void
    {
        $clock = new RecoveryTestClock();
        $clock->onSleep = fn () => $this->stealLease();
        $runner = $this->jobs('pim', ['WAITING', 'COMPLETED'], $clock, $http);
        try {
            $runner->submitAndWait($this->context, 'lost-poll', static fn (): string => 'saved-id');
            self::fail('The old owner must stop.');
        } catch (\Throwable $error) {
            self::assertNotInstanceOf(\PHPUnit\Framework\AssertionFailedError::class, $error);
            self::assertSame(2, $http->getRequestsCount());
            self::assertFalse($this->step('lost-poll-completion'));
        }
    }

    #[DataProvider('checkpointWorkflows')]
    public function testLeaseLossDuringPaginationStopsBeforeProgressIsSaved(string $protocol): void
    {
        $pages = 0;
        $process = function () use (&$pages): void { ++$pages; $this->stealLease(); };
        try {
            match ($protocol) {
                'page' => (new PagePaginator())->traverse($this->context, 'lost-page', static fn (): array => ['items' => ['one'], 'has_more' => true], $process),
                'cursor' => (new CursorPaginator())->traverse($this->context, 'lost-page', static fn (): array => ['items' => ['one'], 'next_cursor' => 'next'], $process),
                'batch' => (new BatchProcessor())->process($this->context, 'lost-page', ['one','two'], $process, 1),
            };
            self::fail('The old owner must stop.');
        } catch (\Throwable $error) {
            self::assertNotInstanceOf(\PHPUnit\Framework\AssertionFailedError::class, $error);
            self::assertSame(1, $pages);
            self::assertFalse($this->step('lost-page-0'));
        }
    }

    public static function checkpointWorkflows(): iterable
    {
        yield ['page'];
        yield ['cursor'];
        yield ['batch'];
    }

    private function stealLease(): void
    {
        $this->connection->executeStatement("UPDATE pim_migration_lock SET key_token = 'another-owner'");
    }

    private function step(string $name): array|false
    {
        return $this->storage->step('20261028000001', $name);
    }

    private function jobs(string $component, array $statuses, RecoveryTestClock $clock, ?MockHttpClient &$http, ?\Closure $onRequest = null): PimJobRunner|BulkOperationsJobRunner
    {
        $http = new MockHttpClient(static function (string $method, string $url) use (&$statuses, $onRequest): MockResponse {
            if (str_contains($url, '/op/token')) return new MockResponse('{"access_token":"oauth","expires_in":3600}');
            $onRequest?->__invoke();
            $status = array_shift($statuses) ?? throw new \RuntimeException('Unexpected extra poll.');
            return new MockResponse(json_encode(['status' => $status, 'errorMessage' => 'private-error'], JSON_THROW_ON_ERROR), ['response_headers' => ['Content-Type: application/json']]);
        });
        $api = new ApiOperationRunner(new BluestoneClient($http, 'https://api.test.bluestonepim.com', 'https://idp.test.bluestonepim.com/op/token', 'id', 'secret'), $this->lock);
        if ($component === 'pim') return new PimJobRunner(new PimConnector($api, $this->catalog, $this->revision, new OpenApiContractValidator()), $clock);
        return new BulkOperationsJobRunner(new BulkOperationsConnector($api, $this->catalog, $this->revision, new OpenApiContractValidator()), $clock);
    }
}
