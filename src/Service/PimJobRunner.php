<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Service;

use Youwe\BluestonePim\Api\Connector\PimConnector;
use Youwe\BluestonePim\Migration\MigrationContext;

/** Poll PIM asynchronous operations before marking their migration applied. */
final readonly class PimJobRunner
{
    public function __construct(private PimConnector $pim, private ?PollingClock $clock = null)
    {
    }

    public function waitForCompletion(string $taskId, int $timeoutSeconds = 300, int $pollIntervalMilliseconds = 1000, ?MigrationContext $context = null): array
    {
        return $this->poll($taskId, $timeoutSeconds, $pollIntervalMilliseconds, $context, false);
    }

    /** Poll with request and response validation against the pinned PIM contract. */
    public function waitForCompletionTyped(string $taskId, int $timeoutSeconds = 300, int $pollIntervalMilliseconds = 1000, ?MigrationContext $context = null): array
    {
        return $this->poll($taskId, $timeoutSeconds, $pollIntervalMilliseconds, $context, true);
    }

    /** Save the submitted task ID before polling so a migration retry never resubmits the work. */
    public function submitAndWait(MigrationContext $context, string $submissionStep, callable $submit,
        int $timeoutSeconds = 300, int $pollIntervalMilliseconds = 1000): array
    {
        if ($timeoutSeconds < 1 || $pollIntervalMilliseconds < 1 || $pollIntervalMilliseconds > 60000 || strlen($submissionStep.'-completion') > 190) {
            throw new \InvalidArgumentException('Provide valid polling settings and a shorter submission checkpoint name.');
        }
        $taskId = $context->step($submissionStep, static function () use ($submit): string {
            $taskId = $submit();
            if (!is_string($taskId) || $taskId === '') {
                throw new \UnexpectedValueException('PIM submission callback must return a non-empty task ID.');
            }

            return $taskId;
        });
        if (!is_string($taskId) || $taskId === '') {
            throw new \UnexpectedValueException('Stored PIM submission checkpoint does not contain a task ID.');
        }

        return $context->step($submissionStep.'-completion', fn (): array => $this->waitForCompletionTyped($taskId, $timeoutSeconds, $pollIntervalMilliseconds, $context));
    }

    private function poll(string $taskId, int $timeoutSeconds, int $pollIntervalMilliseconds, ?MigrationContext $context, bool $typed): array
    {
        if ($taskId === '' || $timeoutSeconds < 1 || $pollIntervalMilliseconds < 1 || $pollIntervalMilliseconds > 60000) {
            throw new \InvalidArgumentException('Provide a task ID, positive timeout and polling interval of 1–60000 ms.');
        }
        $clock = $this->clock ?? new SystemPollingClock();
        $deadline = $clock->now() + $timeoutSeconds;
        do {
            $context?->heartbeat();
            $response = $typed
                ? $this->pim->executeTyped('getJobStatus', ['taskId' => $taskId])
                : $this->pim->execute('getJobStatus', ['taskId' => $taskId]);
            $result = $response->toArray();
            if ($clock->now() >= $deadline) {
                break;
            }
            $status = $result['status'] ?? '';
            if ($status === 'COMPLETED') {
                return $result;
            }
            if (!in_array($status, ['WAITING', 'EXECUTING'], true)) {
                // Do not include the remote errorMessage, which can contain PIM data.
                throw new \RuntimeException('Bluestone PIM task did not complete successfully.');
            }
            $remaining = $deadline - $clock->now();
            if ($remaining <= 0) {
                break;
            }
            $clock->sleep(max(1, (int) min($pollIntervalMilliseconds, ceil($remaining * 1000))));
            $context?->heartbeat();
        } while ($clock->now() < $deadline);

        throw new \RuntimeException('Timed out waiting for the Bluestone PIM task. Resume using the saved task ID; do not resubmit it.');
    }
}
