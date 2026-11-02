<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Service;

use Youwe\BluestonePim\Api\Connector\BulkOperationsConnector;
use Youwe\BluestonePim\Migration\MigrationContext;

/** Polls the Bulk Operations API's job protocol, which is distinct from PIM async tasks. */
final readonly class BulkOperationsJobRunner
{
    use PollsAsyncJobs;

    private const SUBJECT = 'Bluestone Bulk Operations job';

    public function __construct(private BulkOperationsConnector $bulkOperations, private ?PollingClock $clock = null)
    {
    }

    /**
     * @return array The completed job, including any documented issues.
     */
    public function waitForCompletion(string $jobId, int $timeoutSeconds = 300, int $pollIntervalMilliseconds = 1000, ?MigrationContext $context = null): array
    {
        return $this->pollJob(
            fn (): array => $this->bulkOperations->executeTyped('getJobStatus', ['jobId' => $jobId])->toArray(),
            $jobId, self::SUBJECT, 'job', ['COMPLETED', 'COMPLETED_WITH_ISSUES'], $timeoutSeconds, $pollIntervalMilliseconds, $context, $this->clock,
        );
    }

    /** Save the submitted job ID before polling so a migration retry never resubmits the job. */
    public function submitAndWait(MigrationContext $context, string $submissionStep, callable $submit,
        int $timeoutSeconds = 300, int $pollIntervalMilliseconds = 1000): array
    {
        return $this->submitJobAndWait($context, $submissionStep, $submit,
            fn (string $jobId): array => $this->waitForCompletion($jobId, $timeoutSeconds, $pollIntervalMilliseconds, $context),
            self::SUBJECT, 'job', $timeoutSeconds, $pollIntervalMilliseconds);
    }
}
