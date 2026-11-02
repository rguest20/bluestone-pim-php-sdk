<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Operations;

use Youwe\BluestonePim\Api\GeneratedOperationAdapter;
use Symfony\Contracts\HttpClient\ResponseInterface;

/** Named request facade for history operations in OpenAPI revision 2c19c082ed473e21. */
final class HistoryOperations extends GeneratedOperationAdapter
{
    public function count(string $entityType, string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('count', ['entityType' => $entityType, 'id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function list(array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('list', [], $queryParameters, [], false, null, false, true, NULL);
    }

    public function list_1(string $entityType, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('list_1', ['entityType' => $entityType], $queryParameters, [], false, null, false, true, NULL);
    }

    public function list_2(string $entityType, string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('list_2', ['entityType' => $entityType, 'id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function scrollList(string $entityType, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('scrollList', ['entityType' => $entityType], $queryParameters, [], false, null, false, true, NULL);
    }

    public function search(string $entityType, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('search', ['entityType' => $entityType], $queryParameters, [], false, null, false, true, NULL);
    }

    public function search_1(string $entityType, string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('search_1', ['entityType' => $entityType, 'id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

}
