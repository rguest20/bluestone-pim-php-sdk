<?php

declare(strict_types=1);

namespace App\Tests\DatabaseIntegration;

use App\Api\ApiRevisionContext;
use App\Api\OperationCatalog;
use App\Database\ConnectionFactory;
use App\Migration\MigrationContext;
use App\Migration\MigrationLock;
use App\Migration\MigrationRegistry;
use App\Migration\MigrationStorage;
use App\Migration\MutationInDoubtException;
use App\Service\MigrationRunner;
use App\Tests\Fixtures\Version20260101000001;
use Doctrine\DBAL\Connection;
use PHPUnit\Framework\TestCase;

/** Only run against a disposable database selected by bin/check-database-matrix. */
final class TrackingDatabaseTest extends TestCase
{
    private const TABLES = ['pim_migration_mutation', 'pim_migration_step', 'pim_migration_operation', 'pim_migration_contract', 'pim_migration_target', 'pim_migration', 'pim_migration_lock'];
    private string $url;
    private Connection $connection;
    private MigrationStorage $storage;
    private MigrationLock $lock;

    protected function setUp(): void
    {
        $this->url = getenv('DATABASE_TEST_URL') ?: '';
        if ($this->url === '') $this->markTestSkipped('DATABASE_TEST_URL is not configured; no database integration evidence was obtained.');
        $this->connection = ConnectionFactory::create($this->url);
        $params = $this->connection->getParams();
        $database = $params['dbname'] ?? basename($params['path'] ?? '');
        if (!preg_match('/^bluestone_migration_test_[a-z0-9_.]+$/', $database)) {
            throw new \RuntimeException('Database integration checks require a disposable bluestone_migration_test_* database.');
        }
        $manager = $this->connection->createSchemaManager();
        foreach (self::TABLES as $table) if ($manager->tablesExist([$table])) $manager->dropTable($table);
        $this->storage = $this->storage($this->connection);
        $this->lock = new MigrationLock($this->connection);
    }

    protected function tearDown(): void
    {
        if (isset($this->lock)) $this->lock->release();
        if (isset($this->connection)) $this->connection->close();
    }

    public function testInitializationIsRepeatableOnTheSelectedDatabase(): void
    {
        $this->lock->acquire();
        $this->storage->initialize();
        $this->storage->initialize();
        $tables = $this->connection->createSchemaManager()->listTableNames();
        foreach (self::TABLES as $table) self::assertContains($table, $tables);
        self::assertSame([], $this->storage->history());
    }

    public function testFailedMigrationResumesAfterConnectionReplacementAndNeverRepeatsAppliedWork(): void
    {
        $catalog = new OperationCatalog(dirname(__DIR__, 2).'/resources/bluestone');
        $first = new Version20260101000001();
        $first->shouldFail = true;
        $runner = new MigrationRunner(new MigrationRegistry([$first]), $this->storage, $this->lock, $catalog, new ApiRevisionContext());
        try {
            $runner->run(false, static fn () => null);
            self::fail('Expected an interrupted migration.');
        } catch (\RuntimeException) {
            self::assertSame('failed', $runner->plan()[0]['status']);
            self::assertSame(1, $this->storage->completedStepCount('20260101000001'));
        }
        $this->connection->close();
        $replacement = ConnectionFactory::create($this->url);
        $storage = $this->storage($replacement);
        $second = new Version20260101000001();
        $runner = new MigrationRunner(new MigrationRegistry([$second]), $storage, new MigrationLock($replacement), $catalog, new ApiRevisionContext());
        try {
            self::assertSame($catalog->activeRevision(), $runner->plan()[0]['contract_revision']);
            try {
                $runner->run(false, static fn () => null);
                self::fail('A failed migration needs an explicit retry.');
            } catch (\RuntimeException $error) {
                self::assertStringContainsString('--retry', $error->getMessage());
            }
            self::assertSame(1, $runner->run(true, static fn () => null));
            self::assertSame(0, $second->completedStepCalls);
            self::assertSame(['id' => 'saved-resource-id'], $second->resumedResult);
            self::assertSame(2, (int) $runner->plan()[0]['attempts']);
            self::assertSame('applied', $runner->plan()[0]['status']);
            self::assertSame(0, $runner->run(false, static fn () => null));
        } finally {
            $replacement->close();
        }
    }

    public function testIndependentConnectionsCannotOwnTheLeaseConcurrently(): void
    {
        $other = ConnectionFactory::create($this->url);
        $otherLock = new MigrationLock($other);
        $this->lock->acquire();
        try {
            try {
                $otherLock->acquire();
                self::fail('The second connection must not acquire the lease.');
            } catch (\RuntimeException $error) {
                self::assertStringContainsString('Another migration runner', $error->getMessage());
            }
            $this->lock->release();
            $otherLock->acquire();
            $otherLock->refresh();
            self::assertTrue(true);
        } finally {
            $otherLock->release();
            $other->close();
        }
    }

    public function testExpiredLeaseCanBeReplacedAndTheOldOwnerCannotChangeProgress(): void
    {
        $this->lock->acquire();
        $this->storage->initialize();
        $this->connection->executeStatement('UPDATE pim_migration_lock SET key_expiration = 0');
        $other = ConnectionFactory::create($this->url);
        $newOwner = new MigrationLock($other);
        $newOwner->acquire();
        try {
            $context = new MigrationContext('20260101000001', $this->storage, $this->lock);
            $called = false;
            try {
                $context->step('lost-owner', static function () use (&$called): void { $called = true; });
                self::fail('The old owner must stop before running a step.');
            } catch (\Throwable $error) {
                self::assertNotInstanceOf(\PHPUnit\Framework\AssertionFailedError::class, $error);
                self::assertFalse($called);
                self::assertFalse($this->storage->step('20260101000001', 'lost-owner'));
            }
            $this->lock->release();
            $newOwner->refresh();
            self::assertTrue(true, 'The old owner releasing its lease must not release the new owner.');
        } finally {
            $newOwner->release();
            $other->close();
        }
    }

    public function testLeaseLossAfterWorkPreventsCheckpointCompletion(): void
    {
        $this->lock->acquire();
        $this->storage->initialize();
        $context = new MigrationContext('20260101000001', $this->storage, $this->lock);
        try {
            $context->step('lost-after-work', function (): string {
                $this->connection->executeStatement("UPDATE pim_migration_lock SET key_token = 'replacement-owner'");
                return 'must-not-be-saved';
            });
            self::fail('Checkpoint completion must require the same lease owner.');
        } catch (\Throwable $error) {
            self::assertNotInstanceOf(\PHPUnit\Framework\AssertionFailedError::class, $error);
            self::assertFalse($this->storage->step('20260101000001', 'lost-after-work'));
        }
    }

    public function testDatabaseBindingCannotBeReusedForAnotherTarget(): void
    {
        $this->lock->acquire();
        $this->storage->initialize();
        $this->storage->assertTarget(true);
        $other = new MigrationStorage($this->connection, 'another-target', 'https://api.test.bluestonepim.com');
        $this->expectExceptionMessage('different Bluestone target');
        $other->assertTarget();
    }

    public function testOperationHistoryAndErrorRedactionSurviveNewStorageInstances(): void
    {
        $this->lock->acquire();
        $this->storage->initialize();
        $definition = (new MigrationRegistry([new Version20260101000001()]))->all()['20260101000001'];
        $revision = '1111111111111111';
        self::assertSame($revision, $this->storage->start($definition, $revision));
        $this->storage->recordOperation($definition->version, 'pim', 'getJobStatus', $revision);
        $this->storage->failed($definition->version, new \RuntimeException('private-remote-data'));
        $replacement = $this->storage($this->connection);
        $replacement->recordOperation($definition->version, 'pim', 'getJobStatus', $revision);
        self::assertSame(1, (int) $this->connection->fetchOne('SELECT COUNT(*) FROM pim_migration_operation'));
        self::assertSame(\RuntimeException::class, $replacement->history()[$definition->version]['error']);
        self::assertCount(1, $replacement->operationsInUnfinishedMigrations());
        self::assertSame($revision, $replacement->start($definition, '2222222222222222'));
        self::assertSame(2, (int) $replacement->history()[$definition->version]['attempts']);
        $replacement->applied($definition->version);
        self::assertSame([], $replacement->operationsInUnfinishedMigrations());
    }

    public function testMutationIntentAndSavedResultSurviveASeparateConnection(): void
    {
        $this->lock->acquire();
        $this->storage->initialize();
        $revision = new ApiRevisionContext();
        $revision->select('1111111111111111');
        $firstContext = new MigrationContext('20260101000001', $this->storage, $this->lock, $revision);
        $calls = 0;
        self::assertSame(['resource_id' => 'durable-id'], $firstContext->mutation(
            'create-durable-item', 'pim', 'createProduct', ['number' => 'durable-1'],
            static function () use (&$calls): array { ++$calls; return ['resource_id' => 'durable-id']; },
        ));
        $ambiguousCalls = 0;
        try {
            $firstContext->mutation('ambiguous-item', 'pim', 'createProduct', ['number' => 'ambiguous-1'], static function () use (&$ambiguousCalls): never {
                ++$ambiguousCalls;
                throw new \RuntimeException('simulated lost response');
            });
            self::fail('A simulated lost response must leave a durable uncertain intent.');
        } catch (MutationInDoubtException) {
            self::assertSame(1, $ambiguousCalls);
        }
        $this->lock->release();
        $this->connection->close();

        $this->connection = ConnectionFactory::create($this->url);
        $this->storage = $this->storage($this->connection);
        $this->lock = new MigrationLock($this->connection);
        $this->lock->acquire();
        $this->storage->initialize();
        $secondContext = new MigrationContext('20260101000001', $this->storage, $this->lock, $revision);
        self::assertSame(['resource_id' => 'durable-id'], $secondContext->mutation(
            'create-durable-item', 'pim', 'createProduct', ['number' => 'durable-1'],
            static function () use (&$calls): array { ++$calls; return ['resource_id' => 'duplicate-id']; },
        ));
        self::assertSame(1, $calls);
        self::assertSame('completed', $this->connection->fetchOne('SELECT status FROM pim_migration_mutation WHERE version = ? AND name = ?', ['20260101000001', 'create-durable-item']));
        try {
            $secondContext->mutation('ambiguous-item', 'pim', 'createProduct', ['number' => 'ambiguous-1'], static function () use (&$ambiguousCalls): never {
                ++$ambiguousCalls;
                throw new \LogicException('The uncertain operation must never be repeated.');
            });
            self::fail('A restarted runner must stop rather than repeat an uncertain mutation.');
        } catch (MutationInDoubtException) {
            self::assertSame(1, $ambiguousCalls);
        }
        self::assertSame('uncertain', $this->connection->fetchOne('SELECT status FROM pim_migration_mutation WHERE version = ? AND name = ?', ['20260101000001', 'ambiguous-item']));
    }

    private function storage(Connection $connection): MigrationStorage
    {
        return new MigrationStorage($connection, 'disposable-database-test', 'https://api.test.bluestonepim.com');
    }
}
