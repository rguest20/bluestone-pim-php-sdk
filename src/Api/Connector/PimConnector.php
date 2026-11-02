<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api\Connector;

use Symfony\Contracts\HttpClient\ResponseInterface;
use Youwe\BluestonePim\Generated\ConnectorOperations\PimOperations;

final class PimConnector extends AbstractConnector
{
    use PimOperations;

    public const COMPONENT = 'pim';

    public function createCategory(array $request, string $context = 'en', string $validation = 'NAME'): ResponseInterface
    {
        return $this->executeJson('createCategory', [], $request, $context, ['validation' => $validation]);
    }

    public function createProduct(array $request, string $context = 'en', string $validation = 'NUMBER'): ResponseInterface
    {
        return $this->executeJson('createProduct', [], $request, $context, ['validation' => $validation]);
    }

    public function createAttributeDefinition(array $request, string $context = 'en'): ResponseInterface
    {
        return $this->executeJson('createAttributeDefinition', [], $request, $context);
    }

    public function createAttributeGroup(array $request, string $context = 'en'): ResponseInterface
    {
        return $this->executeJson('createAttributeGroup', [], $request, $context);
    }

    public function createSelectValue(string $definitionId, array $request, string $context = 'en'): ResponseInterface
    {
        return $this->executeJson('createSelectValue', ['id' => $definitionId], $request, $context);
    }

    public function updateMetadata(string $definitionId, array $changes, string $context = 'en'): ResponseInterface
    {
        return $this->executeJson('updateMetadata', ['id' => $definitionId], $changes, $context);
    }

    public function updateCatalogNode(string $nodeId, array $changes, string $context = 'en'): ResponseInterface
    {
        return $this->executeJson('partialUpdateCatalogNode', ['id' => $nodeId], $changes, $context);
    }

    public function updateProduct(string $productId, array $changes, string $context = 'en'): ResponseInterface
    {
        return $this->executeJson('updateProduct', ['id' => $productId], $changes, $context);
    }

    public function getJobStatus(string $taskId): ResponseInterface
    {
        return $this->executeTyped('getJobStatus', ['taskId' => $taskId]);
    }

    public function getProductsWithCursorAndViews(array $request, array $query = [], string $context = 'en'): ResponseInterface
    {
        return $this->executeJson('getProductsWithCursorAndViews', [], $request, $context, $query);
    }

    public function createCatalogNodeAttribute(string $nodeId, string $definitionId, array $request, string $context = 'en'): ResponseInterface
    {
        return $this->executeJson('createCatalogNodeAttribute', [
            'id' => $nodeId,
            'attributeDefinitionId' => $definitionId,
        ], $request, $context);
    }

    public function updateNodeAttributeValue(string $nodeId, string $definitionId, array $settings): ResponseInterface
    {
        return $this->executeJson('updateNodeAttributeValue', [
            'id' => $nodeId,
            'attributeDefinitionId' => $definitionId,
        ], $settings);
    }

    public function addProductAttribute(string $productId, array $request, string $context = 'en'): ResponseInterface
    {
        return $this->executeJson('addProductAttribute', ['id' => $productId], $request, $context);
    }

    public function updateProductAttribute(string $productId, string $definitionId, array $changes, string $context = 'en'): ResponseInterface
    {
        return $this->executeJson('updateProductAttribute', [
            'id' => $productId,
            'definitionId' => $definitionId,
        ], $changes, $context);
    }

    public function addProductToCategories(string $productId, array $categoryIds): ResponseInterface
    {
        return $this->executeJson('addProductToCategories', ['id' => $productId], ['categoryIds' => $categoryIds]);
    }

    public function setProductGroup(string $productId): ResponseInterface
    {
        return $this->executeTyped('setProductGroup', ['id' => $productId]);
    }

    public function addProductVariant(string $groupId, string $variantProductId): ResponseInterface
    {
        return $this->executeTyped('addProductVariant', ['id' => $groupId, 'variantProductId' => $variantProductId]);
    }

    public function updateProductVariantAttribute(string $groupId, string $definitionId, array $settings): ResponseInterface
    {
        return $this->executeJson('updateProductVariantAttribute', [
            'id' => $groupId,
            'definitionId' => $definitionId,
        ], $settings);
    }

    public function updateProductVariantsAttributeVlaSettings(array $settings): ResponseInterface
    {
        return $this->executeJson('updateProductVariantsAttributeVlaSettings', [], $settings);
    }

    private function executeJson(string $operationId, array $pathParameters, array $request, ?string $context = null, array $query = []): ResponseInterface
    {
        $options = ['json' => $request];
        if ($context !== null) {
            $options['headers'] = ['context' => $context];
        }
        if ($query !== []) {
            $options['query'] = $query;
        }

        return $this->executeTyped($operationId, $pathParameters, $options);
    }
}
