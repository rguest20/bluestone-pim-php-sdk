<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\ConnectorOperations;

use Symfony\Contracts\HttpClient\ResponseInterface;

/** Operation-named connector methods generated from API revision 2c19c082ed473e21. */
trait PublicApiOperations
{
    public function FindCategoriesByNumbers(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CategoriesByNumbersRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('FindCategoriesByNumbers', func_get_args());
    }

    public function FindDictionaryValuesByCursor(string $attributeDefinitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CursorQuery $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('FindDictionaryValuesByCursor', func_get_args());
    }

    public function FindPAttributesByNumbers(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\AttributesByNumbersRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('FindPAttributesByNumbers', func_get_args());
    }

    public function FindProducts(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\FilteringCriteriaRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('FindProducts', func_get_args());
    }

    public function FindProductsByCursor(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CursorQuery $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('FindProductsByCursor', func_get_args());
    }

    public function FindProductsByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\ProductsByIdsRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('FindProductsByIds', func_get_args());
    }

    public function FindProductsByNumbers(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\ProductsByNumbersRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('FindProductsByNumbers', func_get_args());
    }

    public function GetAncestors(string $categoryId, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetAncestors', func_get_args());
    }

    public function GetAttributeDifferences(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetAttributeDifferences', func_get_args());
    }

    public function GetAttributeDifferencesOnSyncDeletes(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetAttributeDifferencesOnSyncDeletes', func_get_args());
    }

    public function GetAttributes(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetAttributes', func_get_args());
    }

    public function GetCategories(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetCategories', func_get_args());
    }

    public function GetCategoryById(string $categoryId, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetCategoryById', func_get_args());
    }

    public function GetCategoryDifferences(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetCategoryDifferences', func_get_args());
    }

    public function GetCategoryDifferencesOnSyncDeletes(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetCategoryDifferencesOnSyncDeletes', func_get_args());
    }

    public function GetHealth(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetHealth', func_get_args());
    }

    public function GetProduct(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetProduct', func_get_args());
    }

    public function GetProductDifferences(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetProductDifferences', func_get_args());
    }

    public function GetProductDifferencesOnSyncDeletes(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetProductDifferencesOnSyncDeletes', func_get_args());
    }

    public function GetProducts(string $categoryId, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetProducts', func_get_args());
    }

    public function GetPublishInfo(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetPublishInfo', func_get_args());
    }

    public function GetPublishInfos(array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetPublishInfos', func_get_args());
    }

    public function GetRelationDifferences(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetRelationDifferences', func_get_args());
    }

    public function GetRelationDifferencesOnSyncDeletes(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetRelationDifferencesOnSyncDeletes', func_get_args());
    }

    public function GetRelations(array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetRelations', func_get_args());
    }

    public function GetSegmentInfo(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetSegmentInfo', func_get_args());
    }

    public function Scan(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('Scan', func_get_args());
    }

}
