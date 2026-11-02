<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Service;

use Youwe\BluestonePim\Api\Connector\BulkOperationsConnector;
use Youwe\BluestonePim\Migration\MigrationContext;

/** Polls the Bulk Operations API's job protocol, which is distinct from PIM async tasks. */
final readonly class BulkOperationsJobRunner
{
    public function __construct(private BulkOperationsConnector $bulkOperations, private ?PollingClock $clock = null)
    {
    }

    /**
     * @return array The completed job, including any documented issues.
     */
    public function waitForCompletion(string $jobId, int $timeoutSeconds = 300, int $pollIntervalMilliseconds = 1000, ?MigrationContext $context = null): array
    {
        if ($jobId === '' || $timeoutSeconds < 1 || $pollIntervalMilliseconds < 1 || $pollIntervalMilliseconds > 60000) {
            throw new \InvalidArgumentException('Provide a job ID, positive timeout and polling interval of 1–60000 ms.');
        }
        $clock = $this->clock ?? new SystemPollingClock();
        $deadline = $clock->now() + $timeoutSeconds;
        do {
            $context?->heartbeat();
            $result = $this->bulkOperations->executeTyped('getJobStatus', ['jobId' => $jobId])->toArray();
            if ($clock->now() >= $deadline) {
                break;
            }
            $status = $result['status'] ?? '';
            if (in_array($status, ['COMPLETED', 'COMPLETED_WITH_ISSUES'], true)) {
                return $result;
            }
            if (!in_array($status, ['WAITING', 'EXECUTING'], true)) {
                throw new \RuntimeException('Bluestone Bulk Operations job did not complete successfully.');
            }
            $remaining = $deadline - $clock->now();
            if ($remaining <= 0) {
                break;
            }
            $clock->sleep(max(1, (int) min($pollIntervalMilliseconds, ceil($remaining * 1000))));
            $context?->heartbeat();
        } while ($clock->now() < $deadline);

        throw new \RuntimeException('Timed out waiting for the Bulk Operations job. Resume using the saved job ID; do not resubmit it.');
    }

    /** Save the submitted job ID before polling so a migration retry never resubmits the job. */
    public function submitAndWait(MigrationContext $context, string $submissionStep, callable $submit,
        int $timeoutSeconds = 300, int $pollIntervalMilliseconds = 1000): array
    {
        if ($timeoutSeconds < 1 || $pollIntervalMilliseconds < 1 || $pollIntervalMilliseconds > 60000 || strlen($submissionStep.'-completion') > 190) {
            throw new \InvalidArgumentException('Provide valid polling settings and a shorter submission checkpoint name.');
        }
        $jobId = $context->step($submissionStep, static function () use ($submit): string {
            $jobId = $submit();
            if (!is_string($jobId) || $jobId === '') {
                throw new \UnexpectedValueException('Bulk Operations submission callback must return a non-empty job ID.');
            }

            return $jobId;
        });
        if (!is_string($jobId) || $jobId === '') {
            throw new \UnexpectedValueException('Stored Bulk Operations checkpoint does not contain a job ID.');
        }

        return $context->step($submissionStep.'-completion', fn (): array => $this->waitForCompletion($jobId, $timeoutSeconds, $pollIntervalMilliseconds, $context));
    }
}
