<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Service;

use Youwe\BluestonePim\Migration\MigrationContext;

/** Shared submit-once and polling protocol for Bluestone asynchronous task/job endpoints. */
trait PollsAsyncJobs
{
    /**
     * @param callable(): array $fetchStatus
     * @param list<string> $completedStatuses
     */
    private function pollJob(callable $fetchStatus, string $jobId, string $subject, string $idNoun, array $completedStatuses,
        int $timeoutSeconds, int $pollIntervalMilliseconds, ?MigrationContext $context, ?PollingClock $clock): array
    {
        if ($jobId === '' || $timeoutSeconds < 1 || $pollIntervalMilliseconds < 1 || $pollIntervalMilliseconds > 60000) {
            throw new \InvalidArgumentException(sprintf('Provide a %s ID, positive timeout and polling interval of 1–60000 ms.', $idNoun));
        }
        $clock ??= new SystemPollingClock();
        $deadline = $clock->now() + $timeoutSeconds;
        do {
            $context?->heartbeat();
            $result = $fetchStatus();
            if ($clock->now() >= $deadline) {
                break;
            }
            $status = $result['status'] ?? '';
            if (in_array($status, $completedStatuses, true)) {
                return $result;
            }
            if (!in_array($status, ['WAITING', 'EXECUTING'], true)) {
                // Do not include the remote error message, which can contain PIM data.
                throw new \RuntimeException(sprintf('%s did not complete successfully.', $subject));
            }
            $remaining = $deadline - $clock->now();
            if ($remaining <= 0) {
                break;
            }
            $clock->sleep(max(1, (int) min($pollIntervalMilliseconds, ceil($remaining * 1000))));
            $context?->heartbeat();
        } while ($clock->now() < $deadline);

        throw new \RuntimeException(sprintf('Timed out waiting for the %s. Resume using the saved %s ID; do not resubmit it.', $subject, $idNoun));
    }

    /**
     * Save the submitted ID before polling so a migration retry never resubmits the work.
     *
     * @param callable(): mixed $submit
     * @param callable(string): array $wait
     */
    private function submitJobAndWait(MigrationContext $context, string $submissionStep, callable $submit, callable $wait,
        string $subject, string $idNoun, int $timeoutSeconds, int $pollIntervalMilliseconds): array
    {
        if ($timeoutSeconds < 1 || $pollIntervalMilliseconds < 1 || $pollIntervalMilliseconds > 60000 || strlen($submissionStep.'-completion') > 190) {
            throw new \InvalidArgumentException('Provide valid polling settings and a shorter submission checkpoint name.');
        }
        $jobId = $context->step($submissionStep, static function () use ($submit, $subject, $idNoun): string {
            $jobId = $submit();
            if (!is_string($jobId) || $jobId === '') {
                throw new \UnexpectedValueException(sprintf('%s submission callback must return a non-empty %s ID.', $subject, $idNoun));
            }

            return $jobId;
        });
        if (!is_string($jobId) || $jobId === '') {
            throw new \UnexpectedValueException(sprintf('Stored %s submission checkpoint does not contain a %s ID.', $subject, $idNoun));
        }

        return $context->step($submissionStep.'-completion', static fn (): array => $wait($jobId));
    }
}
