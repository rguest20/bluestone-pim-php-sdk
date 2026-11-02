<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\ConnectorOperations;

use Symfony\Contracts\HttpClient\ResponseInterface;

/** Operation-named connector methods generated from API revision 2c19c082ed473e21. */
trait HistoryOperations
{
    public function count(string $entityType, string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('count', func_get_args());
    }

    public function list(array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('list', func_get_args());
    }

    public function list_1(string $entityType, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('list_1', func_get_args());
    }

    public function list_2(string $entityType, string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('list_2', func_get_args());
    }

    public function scrollList(string $entityType, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('scrollList', func_get_args());
    }

    public function search(string $entityType, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('search', func_get_args());
    }

    public function search_1(string $entityType, string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('search_1', func_get_args());
    }

}
