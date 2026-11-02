<?php

declare(strict_types=1);

namespace App\Service;

use App\Migration\MigrationContext;

/** Processes a stable iterable in bounded, checkpointed batches. */
final class BatchProcessor
{
    /**
     * @param iterable<mixed> $records The iterable must produce the same records in the same order on retry.
     * @param callable(mixed): void $processRecord Record operations should be idempotent or reconciled on retry.
     * @return int Number of records in completed batches.
     */
    public function process(MigrationContext $context, string $checkpointPrefix, iterable $records, callable $processRecord, int $batchSize = 100): int
    {
        if ($checkpointPrefix === '' || $batchSize < 1) {
            throw new \InvalidArgumentException('Provide a checkpoint prefix and a positive batch size.');
        }
        $batch = [];
        $batchNumber = 0;
        $processed = 0;
        foreach ($records as $record) {
            $batch[] = $record;
            if (count($batch) === $batchSize) {
                $processed += $this->runBatch($context, $checkpointPrefix, $batchNumber++, $batch, $processRecord);
                $batch = [];
            }
        }
        if ($batch !== []) {
            $processed += $this->runBatch($context, $checkpointPrefix, $batchNumber, $batch, $processRecord);
        }

        return $processed;
    }

    private function runBatch(MigrationContext $context, string $checkpointPrefix, int $batchNumber, array $batch, callable $processRecord): int
    {
        $step = $checkpointPrefix.'-'.$batchNumber;
        if (strlen($step.'-source') > 190) {
            throw new \InvalidArgumentException('Batch processor checkpoint names exceed the 190-byte limit.');
        }
        $fingerprint = hash('sha256', json_encode($batch, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES));
        $source = $context->step($step.'-source', static fn (): array => ['fingerprint' => $fingerprint]);
        if (!is_array($source) || !is_string($source['fingerprint'] ?? null) || !hash_equals($fingerprint, $source['fingerprint'])) {
            throw new \UnexpectedValueException('Stored batch source does not match the current batch. Restore the original records before retrying.');
        }
        $result = $context->step($step, static function () use ($context, $batch, $processRecord, $fingerprint): array {
            foreach ($batch as $record) {
                $context->heartbeat();
                $processRecord($record);
            }

            return ['count' => count($batch), 'fingerprint' => $fingerprint];
        });
        if (!is_array($result) || !is_int($result['count'] ?? null) || $result['count'] !== count($batch)
            || !hash_equals($fingerprint, (string) ($result['fingerprint'] ?? ''))) {
            throw new \UnexpectedValueException('Stored batch checkpoint does not match the current batch.');
        }

        return $result['count'];
    }
}
