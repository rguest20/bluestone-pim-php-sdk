<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\ConnectorOperations;

use Symfony\Contracts\HttpClient\ResponseInterface;

/** Operation-named connector methods generated from API revision 2c19c082ed473e21. */
trait BulkOperationsOperations
{
    public function getJobStatus(string $jobId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getJobStatus', func_get_args());
    }

    public function upsertAttributesByNumbers(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Model\BulkUpsertByNumbersRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('upsertAttributesByNumbers', func_get_args());
    }

}
