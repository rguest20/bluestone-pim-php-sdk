<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Migration;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Schema\Schema;

final class MigrationStorage
{
    private array $recordedOperations = [];

    public function __construct(private readonly Connection $connection, private readonly string $target, private readonly string $baseUrl)
    {
    }

    /** Called only after acquiring the shared database lock. */
    public function initialize(): void
    {
        $schema = new Schema();
        $migrations = $schema->createTable('pim_migration');
        $migrations->addColumn('version', 'string', ['length' => 14]);
        $migrations->addColumn('checksum', 'string', ['length' => 64]);
        $migrations->addColumn('status', 'string', ['length' => 16]);
        $migrations->addColumn('attempts', 'integer');
        $migrations->addColumn('started_at', 'string', ['length' => 32]);
        $migrations->addColumn('applied_at', 'string', ['length' => 32, 'notnull' => false]);
        $migrations->addColumn('error', 'text', ['notnull' => false]);
        $migrations->setPrimaryKey(['version']);

        $steps = $schema->createTable('pim_migration_step');
        $steps->addColumn('version', 'string', ['length' => 14]);
        $steps->addColumn('name', 'string', ['length' => 190]);
        $steps->addColumn('completed_at', 'string', ['length' => 32]);
        $steps->addColumn('result', 'text');
        $steps->setPrimaryKey(['version', 'name']);

        $target = $schema->createTable('pim_migration_target');
        $target->addColumn('id', 'integer');
        $target->addColumn('fingerprint', 'string', ['length' => 64]);
        $target->setPrimaryKey(['id']);

        $contracts = $schema->createTable('pim_migration_contract');
        $contracts->addColumn('version', 'string', ['length' => 14]);
        $contracts->addColumn('revision', 'string', ['length' => 16]);
        $contracts->setPrimaryKey(['version']);

        $operations = $schema->createTable('pim_migration_operation');
        $operations->addColumn('version', 'string', ['length' => 14]);
        $operations->addColumn('component', 'string', ['length' => 64]);
        $operations->addColumn('operation_id', 'string', ['length' => 190]);
        $operations->addColumn('revision', 'string', ['length' => 16]);
        $operations->setPrimaryKey(['version', 'component', 'operation_id']);

        $mutations = $schema->createTable('pim_migration_mutation');
        $mutations->addColumn('version', 'string', ['length' => 14]);
        $mutations->addColumn('name', 'string', ['length' => 190]);
        $mutations->addColumn('component', 'string', ['length' => 64]);
        $mutations->addColumn('operation_id', 'string', ['length' => 190]);
        $mutations->addColumn('revision', 'string', ['length' => 16]);
        $mutations->addColumn('request_hash', 'string', ['length' => 64]);
        $mutations->addColumn('status', 'string', ['length' => 16]);
        $mutations->addColumn('result', 'text', ['notnull' => false]);
        $mutations->addColumn('updated_at', 'string', ['length' => 32]);
        $mutations->setPrimaryKey(['version', 'name']);

        $manager = $this->connection->createSchemaManager();
        foreach ($schema->getTables() as $table) {
            if (!$manager->tablesExist([$table->getName()])) {
                $manager->createTable($table);
            }
        }
    }

    public function assertTarget(bool $bind = false): void
    {
        if (trim($this->target) === '') {
            throw new \RuntimeException('BLUESTONE_TARGET must identify the tenant and environment.');
        }
        if (!$this->connection->createSchemaManager()->tablesExist(['pim_migration_target'])) {
            return;
        }
        $fingerprint = hash('sha256', $this->target.'|'.rtrim($this->baseUrl, '/'));
        $stored = $this->connection->fetchOne('SELECT fingerprint FROM pim_migration_target WHERE id = 1');
        if ($stored !== false && !hash_equals($stored, $fingerprint)) {
            throw new \RuntimeException('This database tracks a different Bluestone target or API URL. Configure a separate BLUESTONE_MIGRATIONS_DATABASE_URL for this target.');
        }
        if ($stored === false && $bind) {
            $this->connection->insert('pim_migration_target', ['id' => 1, 'fingerprint' => $fingerprint]);
        }
    }

    public function history(): array
    {
        if (!$this->connection->createSchemaManager()->tablesExist(['pim_migration'])) {
            return [];
        }

        if (!$this->connection->createSchemaManager()->tablesExist(['pim_migration_contract'])) {
            return $this->connection->fetchAllAssociativeIndexed('SELECT migration.*, NULL AS contract_revision FROM pim_migration migration ORDER BY migration.version');
        }

        return $this->connection->fetchAllAssociativeIndexed('SELECT migration.*, contract.revision AS contract_revision FROM pim_migration migration LEFT JOIN pim_migration_contract contract ON contract.version = migration.version ORDER BY migration.version');
    }

    /** A migration keeps the contract revision it first used, including after a failed attempt. */
    public function start(MigrationDefinition $definition, ?string $currentRevision = null): string
    {
        return $this->connection->transactional(function () use ($definition, $currentRevision): string {
            $attempts = $this->connection->fetchOne('SELECT attempts FROM pim_migration WHERE version = ?', [$definition->version]);
            $revision = $this->connection->fetchOne('SELECT revision FROM pim_migration_contract WHERE version = ?', [$definition->version]);
            if ($revision === false) {
                // A row without a revision predates snapshot pinning; keep it on the legacy catalog.
                $revision = $attempts === false ? ($currentRevision ?? 'legacy') : 'legacy';
                $this->connection->insert('pim_migration_contract', ['version' => $definition->version, 'revision' => $revision]);
            }
            $values = ['checksum' => $definition->checksum, 'status' => 'running', 'attempts' => (int) $attempts + 1,
                'started_at' => $this->now(), 'applied_at' => null, 'error' => null];
            if ($attempts === false) {
                $this->connection->insert('pim_migration', ['version' => $definition->version] + $values);
            } else {
                $this->connection->update('pim_migration', $values, ['version' => $definition->version]);
            }

            return $revision === 'legacy' ? '' : $revision;
        });
    }

    public function applied(string $version): void
    {
        $this->connection->update('pim_migration', ['status' => 'applied', 'applied_at' => $this->now(), 'error' => null], ['version' => $version]);
    }

    public function failed(string $version, \Throwable $error): void
    {
        // Exception messages can contain API bodies/secrets. Persist only the exception type.
        $this->connection->update('pim_migration', ['status' => 'failed', 'error' => $error::class], ['version' => $version]);
    }

    public function step(string $version, string $name): array|false
    {
        return $this->connection->fetchAssociative('SELECT result FROM pim_migration_step WHERE version = ? AND name = ?', [$version, $name]);
    }

    public function completeStep(string $version, string $name, mixed $result): void
    {
        $this->connection->insert('pim_migration_step', ['version' => $version, 'name' => $name,
            'completed_at' => $this->now(), 'result' => json_encode($result, JSON_THROW_ON_ERROR)]);
    }

    /** Persist a mutation intent before dispatch; a leftover intent is never submitted twice automatically. */
    public function beginMutation(string $version, string $name, string $component, string $operationId, string $revision, string $requestHash): array|false
    {
        return $this->connection->transactional(function () use ($version, $name, $component, $operationId, $revision, $requestHash): array|false {
            $existing = $this->connection->fetchAssociative('SELECT component, operation_id, revision, request_hash, status, result FROM pim_migration_mutation WHERE version = ? AND name = ?', [$version, $name]);
            if ($existing !== false) {
                if ($existing['component'] !== $component || $existing['operation_id'] !== $operationId || $existing['revision'] !== $revision || !hash_equals($existing['request_hash'], $requestHash)) {
                    throw new \LogicException('A persisted mutation name cannot be reused with different API identity or request data.');
                }
                if ($existing['status'] === 'completed') {
                    return ['result' => json_decode($existing['result'], true, 512, JSON_THROW_ON_ERROR)];
                }

                throw new MutationInDoubtException($name, $component, $operationId);
            }
            $this->connection->insert('pim_migration_mutation', [
                'version' => $version, 'name' => $name, 'component' => $component, 'operation_id' => $operationId,
                'revision' => $revision, 'request_hash' => $requestHash, 'status' => 'pending', 'result' => null,
                'updated_at' => $this->now(),
            ]);

            return false;
        });
    }

    public function completeMutation(string $version, string $name, mixed $result): void
    {
        $changed = $this->connection->update('pim_migration_mutation', [
            'status' => 'completed', 'result' => json_encode($result, JSON_THROW_ON_ERROR), 'updated_at' => $this->now(),
        ], ['version' => $version, 'name' => $name, 'status' => 'pending']);
        if ($changed !== 1) throw new \RuntimeException('The persisted mutation intent could not be completed.');
    }

    public function markMutationUncertain(string $version, string $name): void
    {
        $this->connection->update('pim_migration_mutation', ['status' => 'uncertain', 'updated_at' => $this->now()],
            ['version' => $version, 'name' => $name, 'status' => 'pending']);
    }

    public function completedStepCount(string $version): int
    {
        return (int) $this->connection->fetchOne('SELECT COUNT(*) FROM pim_migration_step WHERE version = ?', [$version]);
    }

    public function recordOperation(string $version, string $component, string $operationId, string $revision): void
    {
        $key = $version."\0".$component."\0".$operationId;
        if (isset($this->recordedOperations[$key])) {
            return;
        }
        $exists = $this->connection->fetchOne('SELECT operation_id FROM pim_migration_operation WHERE version = ? AND component = ? AND operation_id = ?', [$version, $component, $operationId]);
        if ($exists === false) {
            $this->connection->insert('pim_migration_operation', ['version' => $version, 'component' => $component,
                'operation_id' => $operationId, 'revision' => $revision]);
        }
        $this->recordedOperations[$key] = true;
    }

    public function operationsInUnfinishedMigrations(): array
    {
        if (!$this->connection->createSchemaManager()->tablesExist(['pim_migration_operation', 'pim_migration'])) {
            return [];
        }

        return $this->connection->fetchAllAssociative("SELECT operation.version, migration.status, operation.component, operation.operation_id, operation.revision FROM pim_migration_operation operation JOIN pim_migration migration ON migration.version = operation.version WHERE migration.status <> 'applied' ORDER BY operation.version, operation.component, operation.operation_id");
    }

    public function operationTrackingAvailable(): bool
    {
        return $this->connection->createSchemaManager()->tablesExist(['pim_migration_operation']);
    }

    private function now(): string
    {
        return gmdate('Y-m-d\TH:i:s\Z');
    }
}
