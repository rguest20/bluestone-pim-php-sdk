<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Service;

use Youwe\BluestonePim\Api\Connector\PimConnector;
use Youwe\BluestonePim\Migration\MigrationContext;

/** Poll PIM asynchronous operations before marking their migration applied. */
final readonly class PimJobRunner
{
    use PollsAsyncJobs;

    private const SUBJECT = 'Bluestone PIM task';

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
        return $this->submitJobAndWait($context, $submissionStep, $submit,
            fn (string $taskId): array => $this->waitForCompletionTyped($taskId, $timeoutSeconds, $pollIntervalMilliseconds, $context),
            self::SUBJECT, 'task', $timeoutSeconds, $pollIntervalMilliseconds);
    }

    private function poll(string $taskId, int $timeoutSeconds, int $pollIntervalMilliseconds, ?MigrationContext $context, bool $typed): array
    {
        $fetch = fn (): array => ($typed
            ? $this->pim->getJobStatus($taskId)
            : $this->pim->execute('getJobStatus', ['taskId' => $taskId]))->toArray();

        return $this->pollJob($fetch, $taskId, self::SUBJECT, 'task', ['COMPLETED'], $timeoutSeconds, $pollIntervalMilliseconds, $context, $this->clock);
    }
}
