<?php

declare(strict_types=1);

namespace App\Tests;

use Youwe\BluestonePim\Database\ConnectionFactory;
use Youwe\BluestonePim\Migration\MigrationLock;
use Youwe\BluestonePim\Migration\MigrationRegistry;
use Youwe\BluestonePim\Migration\MigrationStorage;
use Youwe\BluestonePim\Service\MigrationRunner;
use App\Tests\Fixtures\Version20260101000001;
use App\Tests\Fixtures\Version20260101000002;
use Doctrine\DBAL\Connection;
use PHPUnit\Framework\TestCase;

final class MigrationRunnerTest extends TestCase
{
    private Connection $connection;
    private MigrationStorage $storage;
    private MigrationLock $lock;
    private Version20260101000001 $first;
    private Version20260101000002 $second;
    private MigrationRunner $runner;

    protected function setUp(): void
    {
        $this->connection = ConnectionFactory::create('sqlite:///:memory:');
        $this->storage = new MigrationStorage($this->connection, 'tenant-test', 'https://api.test.bluestonepim.com');
        $this->lock = new MigrationLock($this->connection);
        $this->first = new Version20260101000001();
        $this->second = new Version20260101000002();
        // Deliberately reversed: migrations must execute in version order.
        $this->runner = new MigrationRunner(new MigrationRegistry([$this->second, $this->first]), $this->storage, $this->lock);
    }

    public function testPlanDoesNotExecuteCodeOrCreateTables(): void
    {
        self::assertSame(['pending', 'pending'], array_column($this->runner->plan(), 'status'));
        self::assertSame([], $this->connection->createSchemaManager()->listTableNames());
        self::assertSame(0, $this->first->completedStepCalls);
    }

    public function testSuccessfulMigrationsAreOrderedPersistedAndNeverRepeated(): void
    {
        $messages = [];
        self::assertSame(2, $this->runner->run(false, static function (string $message) use (&$messages): void { $messages[] = $message; }));
        self::assertStringContainsString('20260101000001', $messages[0]);
        self::assertSame(['applied', 'applied'], array_column($this->runner->plan(), 'status'));
        self::assertSame(0, $this->runner->run(false, static fn () => null));
        self::assertSame(1, $this->first->completedStepCalls);
        self::assertSame(1, $this->second->calls);
        self::assertSame(2, $this->runner->plan()[0]['steps']);
    }

    public function testFailureStopsLaterMigrationsAndRetryResumesSavedStepResults(): void
    {
        $this->first->shouldFail = true;
        try {
            $this->runner->run(false, static fn () => null);
            self::fail('Expected the first migration to fail.');
        } catch (\RuntimeException $error) {
            self::assertStringNotContainsString('secret-remote-response', $error->getMessage());
        }
        self::assertSame(['failed', 'pending'], array_column($this->runner->plan(), 'status'));
        self::assertSame(0, $this->second->calls);
        self::assertSame(1, $this->runner->plan()[0]['steps']);
        self::assertSame(\RuntimeException::class, $this->runner->plan()[0]['error']);
        try {
            $this->runner->run(false, static fn () => null);
            self::fail('Failed migrations require an explicit retry.');
        } catch (\RuntimeException $error) {
            self::assertStringContainsString('--retry', $error->getMessage());
        }
        $this->first->shouldFail = false;
        self::assertSame(2, $this->runner->run(true, static fn () => null));
        self::assertSame(1, $this->first->completedStepCalls);
        self::assertSame(2, $this->first->lastStepCalls);
        self::assertSame(['id' => 'saved-resource-id'], $this->first->resumedResult);
        self::assertSame(2, $this->runner->plan()[0]['attempts']);
    }

    public function testAnInterruptedMigrationRequiresExplicitRetry(): void
    {
        $this->storage->initialize();
        $definition = (new MigrationRegistry([$this->first]))->all()['20260101000001'];
        $this->storage->start($definition);
        self::assertSame('running', $this->runner->plan()[0]['status']);
        $this->expectExceptionMessage('--retry');
        $this->runner->run(false, static fn () => null);
    }

    public function testFailedMigrationCanBeCorrectedBeforeAnExplicitRetry(): void
    {
        $this->first->shouldFail = true;
        try {
            $this->runner->run(false, static fn () => null);
        } catch (\RuntimeException) {
        }
        // Simulate a file revision since the failed attempt.
        $this->connection->update('pim_migration', ['checksum' => str_repeat('0', 64)], ['version' => '20260101000001']);
        $this->first->shouldFail = false;
        self::assertSame(2, $this->runner->run(true, static fn () => null));
        self::assertSame(1, $this->first->completedStepCalls);
        self::assertSame('applied', $this->runner->plan()[0]['status']);
    }

    public function testChangedMigrationFilesAreRejected(): void
    {
        $this->runner->run(false, static fn () => null);
        $this->connection->update('pim_migration', ['checksum' => str_repeat('0', 64)], ['version' => '20260101000001']);
        $this->expectExceptionMessage('has changed');
        $this->runner->plan();
    }

    public function testRemovedMigrationFilesAreRejected(): void
    {
        $this->runner->run(false, static fn () => null);
        $runner = new MigrationRunner(new MigrationRegistry([$this->first]), $this->storage, $this->lock);
        $this->expectExceptionMessage('is missing');
        $runner->plan();
    }

    public function testAnEarlierMigrationCannotBeInsertedAfterLaterOnesRan(): void
    {
        $runner = new MigrationRunner(new MigrationRegistry([$this->second]), $this->storage, $this->lock);
        $runner->run(false, static fn () => null);
        $this->expectExceptionMessage('later than');
        $this->runner->plan();
    }

    public function testDatabaseCannotBeSilentlyReusedForAnotherTenantOrEnvironment(): void
    {
        $this->runner->run(false, static fn () => null);
        $otherStorage = new MigrationStorage($this->connection, 'tenant-production', 'https://api.bluestonepim.com');
        $this->expectExceptionMessage('different Bluestone target');
        $otherStorage->assertTarget();
    }

    public function testConcurrentRunnerCannotAcquireSameDatabaseLock(): void
    {
        $this->lock->acquire();
        try {
            $other = new MigrationLock($this->connection);
            try {
                $other->acquire();
                self::fail('Concurrent lock should be rejected.');
            } catch (\RuntimeException $error) {
                self::assertStringContainsString('Another migration runner', $error->getMessage());
            }
        } finally {
            $this->lock->release();
        }
        $other->acquire();
        $other->release();
        self::assertTrue(true);
    }

    public function testProgressSurvivesNewConnectionsAndRunnerInstances(): void
    {
        $file = tempnam(sys_get_temp_dir(), 'pim-ledger-');
        try {
            $connection = ConnectionFactory::create('sqlite:///'.$file);
            $storage = new MigrationStorage($connection, 'test', 'https://api.test.bluestonepim.com');
            $runner = new MigrationRunner(new MigrationRegistry([$this->first]), $storage, new MigrationLock($connection));
            $runner->run(false, static fn () => null);
            $connection->close();

            $newConnection = ConnectionFactory::create('sqlite:///'.$file);
            $newStorage = new MigrationStorage($newConnection, 'test', 'https://api.test.bluestonepim.com');
            $newRunner = new MigrationRunner(new MigrationRegistry([$this->first]), $newStorage, new MigrationLock($newConnection));
            self::assertSame('applied', $newRunner->plan()[0]['status']);
            self::assertSame(0, $newRunner->run(false, static fn () => null));
            self::assertSame(1, $this->first->completedStepCalls);
            $newConnection->close();
        } finally {
            unlink($file);
        }
    }
}
