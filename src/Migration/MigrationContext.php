<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Migration;

use Youwe\BluestonePim\Api\ApiRevisionContext;

final readonly class MigrationContext
{
    public function __construct(private string $version, private MigrationStorage $storage, private MigrationLock $lock, private ?ApiRevisionContext $revisionContext = null)
    {
    }

    /** The immutable OpenAPI revision selected for this migration, or null for legacy runs. */
    public function apiRevision(): ?string
    {
        return $this->revisionContext?->current();
    }

    /**
     * A named step is skipped on retry once completed. Keep the name stable.
     * Return JSON-serializable IDs/results if later steps need them on resume.
     * These results are persisted; do not return secrets or response objects.
     */
    public function step(string $name, callable $operation): mixed
    {
        if ($name === '' || strlen($name) > 190) {
            throw new \InvalidArgumentException('Step names must contain 1–190 bytes.');
        }
        $this->heartbeat();
        $stored = $this->storage->step($this->version, $name);
        if ($stored !== false) {
            return json_decode($stored['result'], true, 512, JSON_THROW_ON_ERROR);
        }
        $result = $operation();
        $this->heartbeat();
        $this->storage->completeStep($this->version, $name, $result);

        return $result;
    }

    /**
     * Execute a side-effecting API operation once and persist its small result (usually a remote ID).
     * If a process stops after dispatch but before saving the result, retries stop for reconciliation.
     */
    public function mutation(string $name, string $component, string $operationId, mixed $request, callable $operation): mixed
    {
        if ($name === '' || strlen($name) > 190 || $component === '' || strlen($component) > 64 || $operationId === '' || strlen($operationId) > 190) {
            throw new \InvalidArgumentException('Provide a stable mutation name, API component and operation ID within their supported lengths.');
        }
        $requestHash = hash('sha256', json_encode($request, JSON_THROW_ON_ERROR | JSON_PRESERVE_ZERO_FRACTION));
        $this->heartbeat();
        $stored = $this->storage->beginMutation($this->version, $name, $component, $operationId, $this->apiRevision() ?? 'legacy', $requestHash);
        if ($stored !== false) return $stored['result'];

        try {
            $result = $operation();
            $this->heartbeat();
            $this->storage->completeMutation($this->version, $name, $result);

            return $result;
        } catch (\Throwable) {
            $this->storage->markMutationUncertain($this->version, $name);
            throw new MutationInDoubtException($name, $component, $operationId);
        }
    }

    /** Call during long loops or job polling, at least once every 60 seconds. */
    public function heartbeat(): void
    {
        $this->lock->refresh();
    }
}
