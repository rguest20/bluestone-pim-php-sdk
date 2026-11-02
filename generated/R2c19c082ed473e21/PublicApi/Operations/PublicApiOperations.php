<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Operations;

use Youwe\BluestonePim\Api\GeneratedOperationAdapter;
use Symfony\Contracts\HttpClient\ResponseInterface;

/** Named request facade for public-api operations in OpenAPI revision 2c19c082ed473e21. */
final class PublicApiOperations extends GeneratedOperationAdapter
{
    public function FindCategoriesByNumbers(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CategoriesByNumbersRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('FindCategoriesByNumbers', [], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function FindDictionaryValuesByCursor(string $attributeDefinitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CursorQuery $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('FindDictionaryValuesByCursor', ['attributeDefinitionId' => $attributeDefinitionId], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function FindPAttributesByNumbers(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\AttributesByNumbersRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('FindPAttributesByNumbers', [], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function FindProducts(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\FilteringCriteriaRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('FindProducts', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function FindProductsByCursor(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CursorQuery $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('FindProductsByCursor', [], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function FindProductsByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\ProductsByIdsRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('FindProductsByIds', [], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function FindProductsByNumbers(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\ProductsByNumbersRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('FindProductsByNumbers', [], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function GetAncestors(string $categoryId, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('GetAncestors', ['categoryId' => $categoryId], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function GetAttributeDifferences(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('GetAttributeDifferences', [], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function GetAttributeDifferencesOnSyncDeletes(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('GetAttributeDifferencesOnSyncDeletes', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function GetAttributes(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('GetAttributes', [], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function GetCategories(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('GetCategories', [], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function GetCategoryById(string $categoryId, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('GetCategoryById', ['categoryId' => $categoryId], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function GetCategoryDifferences(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('GetCategoryDifferences', [], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function GetCategoryDifferencesOnSyncDeletes(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('GetCategoryDifferencesOnSyncDeletes', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function GetHealth(): ResponseInterface
    {
        return $this->dispatch('GetHealth', [], [], [], false, null, false, true, NULL);
    }

    public function GetProduct(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('GetProduct', ['id' => $id], [], $headerParameters, false, null, false, true, NULL);
    }

    public function GetProductDifferences(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('GetProductDifferences', [], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function GetProductDifferencesOnSyncDeletes(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('GetProductDifferencesOnSyncDeletes', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function GetProducts(string $categoryId, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('GetProducts', ['categoryId' => $categoryId], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function GetPublishInfo(string $id): ResponseInterface
    {
        return $this->dispatch('GetPublishInfo', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function GetPublishInfos(array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('GetPublishInfos', [], $queryParameters, [], false, null, false, true, NULL);
    }

    public function GetRelationDifferences(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('GetRelationDifferences', [], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function GetRelationDifferencesOnSyncDeletes(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('GetRelationDifferencesOnSyncDeletes', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function GetRelations(array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('GetRelations', [], [], $headerParameters, false, null, false, true, NULL);
    }

    public function GetSegmentInfo(): ResponseInterface
    {
        return $this->dispatch('GetSegmentInfo', [], [], [], false, null, false, true, NULL);
    }

    public function Scan(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('Scan', [], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

}
