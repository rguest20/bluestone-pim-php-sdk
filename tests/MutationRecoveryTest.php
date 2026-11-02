<?php

declare(strict_types=1);

namespace App\Tests;

use Youwe\BluestonePim\Api\ApiRevisionContext;
use Youwe\BluestonePim\Database\ConnectionFactory;
use Youwe\BluestonePim\Migration\MigrationContext;
use Youwe\BluestonePim\Migration\MigrationLock;
use Youwe\BluestonePim\Migration\MigrationStorage;
use Youwe\BluestonePim\Migration\MutationInDoubtException;
use Doctrine\DBAL\Connection;
use PHPUnit\Framework\TestCase;

final class MutationRecoveryTest extends TestCase
{
    private MigrationLock $lock;
    private MigrationStorage $storage;
    private MigrationContext $context;
    private Connection $connection;

    protected function setUp(): void
    {
        $this->connection = ConnectionFactory::create('sqlite:///:memory:');
        $this->lock = new MigrationLock($this->connection);
        $this->lock->acquire();
        $this->storage = new MigrationStorage($this->connection, 'tenant-test', 'https://api.test.bluestonepim.com');
        $this->storage->initialize();
        $revision = new ApiRevisionContext();
        $revision->select('2c19c082ed473e21');
        $this->context = new MigrationContext('20261031000001', $this->storage, $this->lock, $revision);
    }

    protected function tearDown(): void
    {
        $this->lock->release();
    }

    public function testSuccessfulMutationPersistsItsResultAndSkipsTheCallbackOnRetry(): void
    {
        $submissions = 0;
        $request = ['number' => 'fixture-product-1'];
        $first = $this->context->mutation('create-fixture-product', 'pim', 'createProduct', $request, static function () use (&$submissions): array {
            ++$submissions;
            return ['resource_id' => 'fixture-id-1'];
        });
        $second = $this->context->mutation('create-fixture-product', 'pim', 'createProduct', $request, static function () use (&$submissions): array {
            ++$submissions;
            return ['resource_id' => 'unexpected-second-id'];
        });

        self::assertSame(['resource_id' => 'fixture-id-1'], $first);
        self::assertSame($first, $second);
        self::assertSame(1, $submissions);
        self::assertSame('completed', $this->storageStatus('create-fixture-product'));
        self::assertSame('2c19c082ed473e21', $this->storageRevision('create-fixture-product'));
    }

    public function testUncertainMutationIsNeverResubmittedAndDiagnosticsDoNotExposeRemoteData(): void
    {
        $submissions = 0;
        try {
            $this->context->mutation('create-fixture-product', 'pim', 'createProduct', ['number' => 'fixture-product-1'], static function () use (&$submissions): never {
                ++$submissions;
                throw new \RuntimeException('secret remote response body');
            });
            self::fail('An interrupted mutation must be reported as uncertain.');
        } catch (MutationInDoubtException $error) {
            self::assertStringNotContainsString('secret remote response body', $error->getMessage());
        }
        try {
            $this->context->mutation('create-fixture-product', 'pim', 'createProduct', ['number' => 'fixture-product-1'], static function () use (&$submissions): never {
                ++$submissions;
                throw new \LogicException('This callback must not run.');
            });
            self::fail('Retrying an uncertain mutation must stop for reconciliation.');
        } catch (MutationInDoubtException $error) {
            self::assertStringContainsString('do not repeat it automatically', $error->getMessage());
        }
        self::assertSame(1, $submissions);
        self::assertSame('uncertain', $this->storageStatus('create-fixture-product'));
    }

    public function testStableMutationNameCannotBeReusedWithDifferentInput(): void
    {
        $this->context->mutation('create-fixture-product', 'pim', 'createProduct', ['number' => 'fixture-product-1'], static fn (): array => ['resource_id' => 'fixture-id-1']);
        try {
            $this->context->mutation('create-fixture-product', 'pim', 'createProduct', ['number' => 'fixture-product-2'], static fn (): array => ['resource_id' => 'unexpected']);
            self::fail('Changed request data must not reuse the same persistent mutation name.');
        } catch (\LogicException $error) {
            self::assertStringContainsString('different API identity or request data', $error->getMessage());
        }
    }

    private function storageStatus(string $name): string
    {
        return (string) $this->connection->fetchOne('SELECT status FROM pim_migration_mutation WHERE version = ? AND name = ?', ['20261031000001', $name]);
    }

    private function storageRevision(string $name): string
    {
        return (string) $this->connection->fetchOne('SELECT revision FROM pim_migration_mutation WHERE version = ? AND name = ?', ['20261031000001', $name]);
    }
}
