<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Migration;

use Doctrine\DBAL\Connection;
use Symfony\Component\Lock\LockFactory;
use Symfony\Component\Lock\LockInterface;
use Symfony\Component\Lock\Store\DoctrineDbalStore;

final class MigrationLock
{
    private ?LockInterface $lock = null;

    public function __construct(private readonly Connection $connection)
    {
    }

    public function acquire(): void
    {
        $store = new DoctrineDbalStore($this->connection, ['db_table' => 'pim_migration_lock']);
        if (!$this->connection->createSchemaManager()->tablesExist(['pim_migration_lock'])) {
            try {
                $store->createTable();
            } catch (\Throwable $error) {
                if (!$this->connection->createSchemaManager()->tablesExist(['pim_migration_lock'])) {
                    throw $error;
                }
            }
        }
        $this->lock = (new LockFactory($store))->createLock('bluestone-api-migrations', 300);
        if (!$this->lock->acquire()) {
            $this->lock = null;
            throw new \RuntimeException('Another migration runner holds the database lock. Retry after it finishes (or after its 300-second crash lease expires).');
        }
    }

    public function refresh(): void
    {
        if ($this->lock === null) {
            throw new \RuntimeException('API runners must be invoked inside an active migration run.');
        }
        $this->lock->refresh();
    }

    public function release(): void
    {
        $this->lock?->release();
        $this->lock = null;
    }
}
