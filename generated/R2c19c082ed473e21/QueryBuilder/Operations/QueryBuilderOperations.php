<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Operations;

use Youwe\BluestonePim\Api\GeneratedOperationAdapter;
use Symfony\Contracts\HttpClient\ResponseInterface;

/** Named request facade for query-builder operations in OpenAPI revision 2c19c082ed473e21. */
final class QueryBuilderOperations extends GeneratedOperationAdapter
{
    public function CreatePersistedProductQuery(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQueryInsertRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('CreatePersistedProductQuery', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function DeleteOrganization(array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('DeleteOrganization', [], $queryParameters, [], false, null, false, true, NULL);
    }

    public function DeletePersistedProductQuery(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQueryDeleteRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('DeletePersistedProductQuery', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function GetCount(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsSearchRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('GetCount', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function GetValidView(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PureProductFilters|\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\MainQueryGroup $requestBody): ResponseInterface
    {
        return $this->dispatch('GetValidView', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function ListPersistedProductQueries(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQueryListRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('ListPersistedProductQueries', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function ScrollSearch(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsScrollSearchRequestInitiation|\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsScrollSearchRequestScrolling $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('ScrollSearch', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function Search(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsSearchRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('Search', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function SearchPersistedProductQueries(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQuerySearchRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('SearchPersistedProductQueries', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function UpdatePersistedProductQuery(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQueryUpdateRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('UpdatePersistedProductQuery', [], [], [], true, $requestBody, true, true, 'application/json');
    }

}
