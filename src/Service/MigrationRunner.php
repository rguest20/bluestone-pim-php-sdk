<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Service;

use Youwe\BluestonePim\Api\BluestoneApiException;
use Youwe\BluestonePim\Api\BluestoneClient;
use Youwe\BluestonePim\Migration\MigrationContext;
use Youwe\BluestonePim\Migration\MigrationLock;
use Youwe\BluestonePim\Migration\MigrationRegistry;
use Youwe\BluestonePim\Migration\MigrationStorage;
use Youwe\BluestonePim\Api\ApiRevisionContext;
use Youwe\BluestonePim\Api\OperationCatalog;

final class MigrationRunner
{
    public function __construct(
        private readonly MigrationRegistry $registry,
        private readonly MigrationStorage $storage,
        private readonly MigrationLock $lock,
        private readonly ?OperationCatalog $catalog = null,
        private readonly ?ApiRevisionContext $revisionContext = null,
        private readonly ?BluestoneClient $client = null,
    ) {
    }

    /** Reads the plan without initializing tables or contacting Bluestone. */
    public function plan(): array
    {
        $this->storage->assertTarget();
        $history = $this->storage->history();
        $definitions = $this->registry->all();
        foreach ($history as $version => $row) {
            if (!isset($definitions[$version])) {
                throw new \RuntimeException(sprintf('Previously started migration %s is missing from the repository.', $version));
            }
            $definition = $definitions[$version];
            $checksumMatches = hash_equals($row['checksum'], $definition->checksum)
                || ($definition->legacyChecksum !== null && hash_equals($row['checksum'], $definition->legacyChecksum));
            if ($row['status'] === 'applied' && !$checksumMatches) {
                throw new \RuntimeException(sprintf('Migration %s has changed after it was applied. Restore the original and create a new migration.', $version));
            }
        }
        $lastApplied = '';
        foreach ($history as $version => $row) {
            if ($row['status'] === 'applied') {
                $lastApplied = max($lastApplied, (string) $version);
            }
        }
        $plan = [];
        foreach ($definitions as $definition) {
            $row = $history[$definition->version] ?? null;
            if (($row['status'] ?? 'pending') !== 'applied' && strcmp($definition->version, $lastApplied) < 0) {
                throw new \RuntimeException('New migrations must have versions later than the last applied migration: '.$lastApplied);
            }
            $plan[] = ['version' => $definition->version, 'description' => $definition->migration->description(),
                'status' => $row['status'] ?? 'pending', 'attempts' => $row['attempts'] ?? 0,
                'steps' => $row === null ? 0 : $this->storage->completedStepCount($definition->version),
                'contract_revision' => $row['contract_revision'] ?? null,
                'applied_at' => $row['applied_at'] ?? '', 'error' => $row['error'] ?? ''];
        }

        return $plan;
    }

    /** @param callable(string): void $report */
    public function run(bool $retry, callable $report): int
    {
        $this->lock->acquire();
        try {
            $this->storage->initialize();
            // Check the ledger target before making even checksum-only metadata updates.
            $this->storage->assertTarget();
            $this->upgradeLegacyChecksums();
            $plan = $this->plan();
            $this->storage->assertTarget(true);
            $count = 0;
            foreach ($plan as $row) {
                if ($row['status'] === 'applied') {
                    continue;
                }
                $version = $row['version'];
                if ($row['status'] !== 'pending' && !$retry) {
                    throw new \RuntimeException(sprintf('Migration %s is %s. Reconcile any incomplete API operation, then use --retry to resume.', $version, $row['status']));
                }
                $definition = $this->registry->all()[$version];
                $this->lock->refresh();
                $report('Running '.$version.': '.$row['description']);
                $revision = $this->storage->start($definition, $this->catalog?->activeRevision());
                $this->revisionContext?->select($revision, $version);
                try {
                    $definition->migration->up(new MigrationContext($version, $this->storage, $this->lock, $this->revisionContext, $this->client));
                    $this->lock->refresh();
                    $this->storage->applied($version);
                } catch (\Throwable $error) {
                    // A runner that lost its lease must not overwrite the new owner's state.
                    $this->lock->refresh();
                    $this->storage->failed($version, $error);
                    $detail = $error instanceof BluestoneApiException ? $error->getMessage() : $error::class;
                    throw new \RuntimeException(sprintf('Migration %s failed (%s). Later migrations were not run. Reconcile and use --retry.', $version, $detail), 0, $error);
                } finally {
                    $this->revisionContext?->select(null);
                }
                ++$count;
                $report('Applied '.$version);
            }

            return $count;
        } finally {
            $this->lock->release();
        }
    }

    /** Move legacy raw-file checksums only when the current source is byte-for-byte unchanged. */
    private function upgradeLegacyChecksums(): void
    {
        $history = $this->storage->history();
        foreach ($this->registry->all() as $version => $definition) {
            $row = $history[$version] ?? null;
            if ($row === null || $row['status'] !== 'applied' || $definition->legacyChecksum === null) {
                continue;
            }
            if (hash_equals($definition->legacyChecksum, $row['checksum'])) {
                $this->storage->upgradeAppliedChecksum($version, $definition->legacyChecksum, $definition->checksum);
            }
        }
    }
}
