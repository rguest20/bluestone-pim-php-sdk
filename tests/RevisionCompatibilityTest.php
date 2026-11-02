<?php

declare(strict_types=1);

namespace App\Tests;

use Youwe\BluestonePim\Api\ApiRevisionContext;
use Youwe\BluestonePim\Api\BluestoneClient;
use Youwe\BluestonePim\Api\Connector\PimConnector;
use Youwe\BluestonePim\Api\OperationCatalog;
use Youwe\BluestonePim\Api\SpecificationCompiler;
use Youwe\BluestonePim\Command\ApiMigrationCompatibilityCommand;
use Youwe\BluestonePim\Database\ConnectionFactory;
use Youwe\BluestonePim\Migration\MigrationLock;
use Youwe\BluestonePim\Migration\MigrationRegistry;
use Youwe\BluestonePim\Migration\MigrationStorage;
use Youwe\BluestonePim\Service\ApiOperationRunner;
use Youwe\BluestonePim\Service\MigrationRunner;
use App\Tests\Fixtures\Version20260101000001;
use App\Tests\Fixtures\Version20261028000003;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

final class RevisionCompatibilityTest extends TestCase
{
    private string $directory;

    protected function setUp(): void
    {
        $this->directory = sys_get_temp_dir().'/bluestone-revision-'.bin2hex(random_bytes(6));
        mkdir($this->directory, 0775, true);
    }

    protected function tearDown(): void
    {
        $remove = static function (string $path) use (&$remove): void {
            if (is_dir($path)) {
                foreach (scandir($path) as $entry) if ($entry !== '.' && $entry !== '..') $remove($path.'/'.$entry);
                rmdir($path);
            } else {
                unlink($path);
            }
        };
        $remove($this->directory);
    }

    public function testRemovedOperationIsReportedAndFailedMigrationRetriesItsPinnedRevision(): void
    {
        $old = '1111111111111111'; $new = '2222222222222222';
        $this->writeRevision($old, 'historicalOperation', '/historical');
        $this->writeRevision($new, 'replacementOperation', '/replacement');
        file_put_contents($this->directory.'/current.json', json_encode(['revision' => $old]));
        $catalog = new OperationCatalog($this->directory);
        $connection = ConnectionFactory::create('sqlite:///:memory:');
        $storage = new MigrationStorage($connection, 'test', 'https://api.test.bluestonepim.com');
        $lock = new MigrationLock($connection);
        $revision = new ApiRevisionContext();
        $urls = [];
        $http = new MockHttpClient(static function (string $method, string $url) use (&$urls): MockResponse {
            $urls[] = $url;
            return str_contains($url, '/op/token') ? new MockResponse('{"access_token":"oauth","expires_in":3600}') : new MockResponse('{}');
        });
        $client = new BluestoneClient($http, 'https://api.test.bluestonepim.com', 'https://idp.test.bluestonepim.com/op/token', 'id', 'secret');
        $pim = new PimConnector(new ApiOperationRunner($client, $lock, $storage, $revision), $catalog, $revision);
        $applied = new Version20260101000001();
        $unfinished = new Version20261028000003($pim);
        $runner = new MigrationRunner(new MigrationRegistry([$applied, $unfinished]), $storage, $lock, $catalog, $revision);
        try {
            $runner->run(false, static fn () => null);
            self::fail('The last migration should be interrupted.');
        } catch (\RuntimeException) {
            self::assertSame(['applied', 'failed'], array_column($runner->plan(), 'status'));
        }
        $storage->recordOperation('20260101000001', 'pim', 'historicalOperation', $old);
        file_put_contents($this->directory.'/current.json', json_encode(['revision' => $new]));
        $command = new CommandTester(new ApiMigrationCompatibilityCommand($storage, $catalog));
        self::assertSame(1, $command->execute(['--json' => true]));
        $report = json_decode($command->getDisplay(), true, 512, JSON_THROW_ON_ERROR);
        self::assertTrue($report['tracking_available']);
        self::assertCount(1, $report['findings']);
        self::assertSame('20261028000003', (string) $report['findings'][0]['version']);
        self::assertSame($old, $report['findings'][0]['revision']);
        self::assertSame($new, $report['active_revision']);
        self::assertSame('failed', $runner->plan()[1]['status'], 'Reporting must not mutate the ledger.');
        self::assertFileExists($catalog->openApiPath('pim', $old));

        $unfinished->shouldFail = false;
        self::assertSame(1, $runner->run(true, static fn () => null));
        self::assertSame([$old, $old], $unfinished->observedRevisions);
        self::assertSame(1, $applied->completedStepCalls);
        self::assertSame(['applied', 'applied'], array_column($runner->plan(), 'status'));
        self::assertSame(2, count(array_filter($urls, static fn (string $url): bool => str_ends_with($url, '/pim/historical'))));
        self::assertNull($revision->current());
        self::assertSame(0, $command->execute(['--json' => true]));
    }

    private function writeRevision(string $revision, string $operation, string $path): void
    {
        $directory = $this->directory.'/revisions/'.$revision;
        mkdir($directory.'/catalog', 0775, true); mkdir($directory.'/openapi', 0775, true);
        $spec = ['openapi' => '3.0.3', 'info' => ['title' => 'Pinned PIM', 'version' => '1'], 'servers' => [['url' => 'https://api.bluestonepim.com/pim']],
            'paths' => [$path => ['get' => ['operationId' => $operation, 'responses' => ['200' => ['description' => 'OK']]]]]];
        $json = json_encode($spec, JSON_THROW_ON_ERROR);
        $checksum = hash('sha256', $json);
        file_put_contents($directory.'/openapi/pim.json', $json);
        file_put_contents($directory.'/catalog/pim.json', json_encode((new SpecificationCompiler())->compile('pim', $spec, 'https://docs.api.bluestonepim.com/openapi/pim.json', $checksum), JSON_THROW_ON_ERROR));
        file_put_contents($directory.'/manifest.json', json_encode(['components' => ['pim' => ['openapi_sha256' => $checksum]]], JSON_THROW_ON_ERROR));
    }
}
