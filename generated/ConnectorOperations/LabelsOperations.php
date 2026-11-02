<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\ConnectorOperations;

use Symfony\Contracts\HttpClient\ResponseInterface;

/** Operation-named connector methods generated from API revision 2c19c082ed473e21. */
trait LabelsOperations
{
    public function create(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Labels\Model\LabelRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('create', func_get_args());
    }

    public function delete(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('delete', func_get_args());
    }

    public function find(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('find', func_get_args());
    }

    public function findByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Labels\Model\LabelsByIdsRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findByIds', func_get_args());
    }

    public function list(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('list', func_get_args());
    }

    public function update(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Labels\Model\LabelRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('update', func_get_args());
    }

}
