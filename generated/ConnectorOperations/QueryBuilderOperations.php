<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\ConnectorOperations;

use Symfony\Contracts\HttpClient\ResponseInterface;

/** Operation-named connector methods generated from API revision 2c19c082ed473e21. */
trait QueryBuilderOperations
{
    public function CreatePersistedProductQuery(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQueryInsertRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('CreatePersistedProductQuery', func_get_args());
    }

    public function DeleteOrganization(array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('DeleteOrganization', func_get_args());
    }

    public function DeletePersistedProductQuery(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQueryDeleteRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('DeletePersistedProductQuery', func_get_args());
    }

    public function GetCount(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsSearchRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetCount', func_get_args());
    }

    public function GetValidView(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PureProductFilters|\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\MainQueryGroup $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetValidView', func_get_args());
    }

    public function ListPersistedProductQueries(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQueryListRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('ListPersistedProductQueries', func_get_args());
    }

    public function ScrollSearch(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsScrollSearchRequestInitiation|\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsScrollSearchRequestScrolling $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('ScrollSearch', func_get_args());
    }

    public function Search(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsSearchRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('Search', func_get_args());
    }

    public function SearchPersistedProductQueries(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQuerySearchRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('SearchPersistedProductQueries', func_get_args());
    }

    public function UpdatePersistedProductQuery(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQueryUpdateRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('UpdatePersistedProductQuery', func_get_args());
    }

}
