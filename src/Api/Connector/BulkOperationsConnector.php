<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api\Connector;

use Symfony\Contracts\HttpClient\ResponseInterface;
use Youwe\BluestonePim\Generated\ConnectorOperations\BulkOperationsOperations;

final class BulkOperationsConnector extends AbstractConnector
{
    use BulkOperationsOperations;

    public const COMPONENT = 'bulk-operations';

    public function getJobStatus(string $jobId): ResponseInterface
    {
        return $this->executeTyped('getJobStatus', ['jobId' => $jobId]);
    }
}
