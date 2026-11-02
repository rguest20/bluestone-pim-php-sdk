<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Operations;

use Youwe\BluestonePim\Api\GeneratedOperationAdapter;
use Symfony\Contracts\HttpClient\ResponseInterface;

/** Named request facade for bulk-operations operations in OpenAPI revision 2c19c082ed473e21. */
final class BulkOperationsOperations extends GeneratedOperationAdapter
{
    public function getJobStatus(string $jobId): ResponseInterface
    {
        return $this->dispatch('getJobStatus', ['jobId' => $jobId], [], [], false, null, false, true, NULL);
    }

    public function upsertAttributesByNumbers(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Model\BulkUpsertByNumbersRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('upsertAttributesByNumbers', [], [], [], true, $requestBody, true, true, 'application/json');
    }

}
