<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Labels\Operations;

use Youwe\BluestonePim\Api\GeneratedOperationAdapter;
use Symfony\Contracts\HttpClient\ResponseInterface;

/** Named request facade for labels operations in OpenAPI revision 2c19c082ed473e21. */
final class LabelsOperations extends GeneratedOperationAdapter
{
    public function create(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Labels\Model\LabelRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('create', [], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function delete(string $id): ResponseInterface
    {
        return $this->dispatch('delete', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function find(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('find', ['id' => $id], [], $headerParameters, false, null, false, true, NULL);
    }

    public function findByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Labels\Model\LabelsByIdsRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('findByIds', [], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function list(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('list', [], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function update(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Labels\Model\LabelRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('update', ['id' => $id], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

}
