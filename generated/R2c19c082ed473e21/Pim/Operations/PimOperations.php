<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Operations;

use Youwe\BluestonePim\Api\GeneratedOperationAdapter;
use Symfony\Contracts\HttpClient\ResponseInterface;

/** Named request facade for pim operations in OpenAPI revision 2c19c082ed473e21. */
final class PimOperations extends GeneratedOperationAdapter
{
    public function addAttributesByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SaveProductsAttributesByIdsRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('addAttributesByIds', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function addCategoryProducts(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryProductRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('addCategoryProducts', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function addColumnAttribute(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ColumnAttributeValueAddRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('addColumnAttribute', ['id' => $id], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function addDictionaryAttribute(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeValueAddRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('addDictionaryAttribute', ['id' => $id], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function addLabelToProducts(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ModifyLabelInProductsRequestDto $requestBody): ResponseInterface
    {
        return $this->dispatch('addLabelToProducts', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function addLabelsToProduct(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\LabelReferenceRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('addLabelsToProduct', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function addMatrixAttribute(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MatrixAttributeValueAddRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('addMatrixAttribute', ['id' => $id], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function addPolicyToAttributeDefinition(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PolicyRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('addPolicyToAttributeDefinition', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function addPolicyToAttributeDefinitions(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\BulkAttributeDefinitionPolicyRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('addPolicyToAttributeDefinitions', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function addPolicyToCategory(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PolicyRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('addPolicyToCategory', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function addPolicyToCategoryNode(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PolicyRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('addPolicyToCategoryNode', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function addPolicyToProductsForCategoryId(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PolicyRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('addPolicyToProductsForCategoryId', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function addPolicyToProductsForCategoryNodeId(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PolicyRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('addPolicyToProductsForCategoryNodeId', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function addPolicyToRelation(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PolicyRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('addPolicyToRelation', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function addProductAttribute(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CreateSimpleAttributeRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('addProductAttribute', ['id' => $id], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function addProductGroups(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\BulkAssignGroupsRequest $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('addProductGroups', [], $queryParameters, [], true, $requestBody, true, true, 'application/json');
    }

    public function addProductToBundle(string $id, string $complementaryProductId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductBundleRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('addProductToBundle', ['id' => $id, 'complementaryProductId' => $complementaryProductId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function addProductToCategories(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryReferenceRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('addProductToCategories', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function addProductVariant(string $id, string $variantProductId, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('addProductVariant', ['id' => $id, 'variantProductId' => $variantProductId], $queryParameters, [], false, null, false, true, NULL);
    }

    public function addProductVariants(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AddProductVariantsRequest $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('addProductVariants', [], $queryParameters, [], true, $requestBody, true, true, 'application/json');
    }

    public function appendDictionaryValues(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AppendDictionaryValueRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('appendDictionaryValues', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function appendSelectValues(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AppendSelectValuesToProductsAttributeRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('appendSelectValues', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function archive(string $id): ResponseInterface
    {
        return $this->dispatch('archive', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function archiveProductsByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductArchiveStateRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('archiveProductsByIds', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function assignDefinitionToCategory(string $id, string $definitionId): ResponseInterface
    {
        return $this->dispatch('assignDefinitionToCategory', ['id' => $id, 'definitionId' => $definitionId], [], [], false, null, false, true, NULL);
    }

    public function assignProductsToCategory(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AssignProductsToCategoryRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('assignProductsToCategory', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function associateAssetWithCategory(string $id, string $assetId): ResponseInterface
    {
        return $this->dispatch('associateAssetWithCategory', ['id' => $id, 'assetId' => $assetId], [], [], false, null, false, true, NULL);
    }

    public function associateAssetWithProduct(string $id, string $assetId): ResponseInterface
    {
        return $this->dispatch('associateAssetWithProduct', ['id' => $id, 'assetId' => $assetId], [], [], false, null, false, true, NULL);
    }

    public function associateAssets(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AssociateProductAssetsRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('associateAssets', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function bulkDeletePolicyFromAttributeDefinitions(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\BulkDeleteAttributeDefinitionPolicyRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('bulkDeletePolicyFromAttributeDefinitions', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function convertToProductFamily(string $id): ResponseInterface
    {
        return $this->dispatch('convertToProductFamily', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function copyAndUpdateProduct(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CopyProductRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('copyAndUpdateProduct', [], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function copyProduct(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('copyProduct', ['id' => $id], [], $headerParameters, false, null, false, true, NULL);
    }

    public function countDictionaryAttributes(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeFilteringRequestDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('countDictionaryAttributes', ['id' => $id], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function createAttributeDefinition(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SimpleAttributeDefinitionRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('createAttributeDefinition', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function createAttributeGroup(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeGroupRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('createAttributeGroup', [], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function createCatalogNodeAttribute(string $id, string $attributeDefinitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryAttributeRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('createCatalogNodeAttribute', ['id' => $id, 'attributeDefinitionId' => $attributeDefinitionId], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function createCatalogNodeAttributeColumn(string $id, string $attributeDefinitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryColumnAttributeRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('createCatalogNodeAttributeColumn', ['id' => $id, 'attributeDefinitionId' => $attributeDefinitionId], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function createCatalogNodeAttributeCompound(string $id, string $attributeDefinitionId): ResponseInterface
    {
        return $this->dispatch('createCatalogNodeAttributeCompound', ['id' => $id, 'attributeDefinitionId' => $attributeDefinitionId], [], [], false, null, false, true, NULL);
    }

    public function createCatalogNodeAttributeDictionary(string $id, string $attributeDefinitionId, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('createCatalogNodeAttributeDictionary', ['id' => $id, 'attributeDefinitionId' => $attributeDefinitionId], [], $headerParameters, false, null, false, true, NULL);
    }

    public function createCatalogNodeAttributeMatrix(string $id, string $attributeDefinitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryMatrixAttributeRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('createCatalogNodeAttributeMatrix', ['id' => $id, 'attributeDefinitionId' => $attributeDefinitionId], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function createCategory(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CreateCategoryRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('createCategory', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function createColumnDefinition(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ColumnAttributeDefinitionDto $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('createColumnDefinition', [], $queryParameters, [], true, $requestBody, true, true, 'application/json');
    }

    public function createCompoundDefinition(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CompoundAttributeDefinitionRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('createCompoundDefinition', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function createDictionaryAttribute(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeCreateRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('createDictionaryAttribute', ['id' => $id], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function createDictionaryDefinition(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeDefinitionCreateRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('createDictionaryDefinition', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function createDictionaryValueFilter(string $id, string $valueId, string $parentValueId): ResponseInterface
    {
        return $this->dispatch('createDictionaryValueFilter', ['id' => $id, 'valueId' => $valueId, 'parentValueId' => $parentValueId], [], [], false, null, false, true, NULL);
    }

    public function createMatrixDefinition(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MatrixAttributeDefinitionDto $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('createMatrixDefinition', [], $queryParameters, [], true, $requestBody, true, true, 'application/json');
    }

    public function createProduct(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductCreateRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('createProduct', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function createProductBundle(string $id): ResponseInterface
    {
        return $this->dispatch('createProductBundle', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function createProductConnection(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductConnectionRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('createProductConnection', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function createProductConnections(string $id, string $relationId, array $requestBody): ResponseInterface
    {
        return $this->dispatch('createProductConnections', ['id' => $id, 'relationId' => $relationId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function createProductTemplate(string $productId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductTemplateRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('createProductTemplate', ['productId' => $productId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function createRelation(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('createRelation', [], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function createSelectValue(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SelectValueRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('createSelectValue', ['id' => $id], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function deductDictionaryValues(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DeductDictionaryValueRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('deductDictionaryValues', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function deductSelectValues(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DeductSelectValuesFromProductsAttributeRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('deductSelectValues', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function delete(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('delete', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function deleteAttributeDefinition(string $id): ResponseInterface
    {
        return $this->dispatch('deleteAttributeDefinition', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function deleteAttributeFromNode(string $id, string $attributeDefinitionId): ResponseInterface
    {
        return $this->dispatch('deleteAttributeFromNode', ['id' => $id, 'attributeDefinitionId' => $attributeDefinitionId], [], [], false, null, false, true, NULL);
    }

    public function deleteAttributeGroup(string $id): ResponseInterface
    {
        return $this->dispatch('deleteAttributeGroup', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function deleteCategoryNode(string $id): ResponseInterface
    {
        return $this->dispatch('deleteCategoryNode', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function deleteCategoryProducts(string $id, string $productId): ResponseInterface
    {
        return $this->dispatch('deleteCategoryProducts', ['id' => $id, 'productId' => $productId], [], [], false, null, false, true, NULL);
    }

    public function deleteCompoundDefinition(string $id): ResponseInterface
    {
        return $this->dispatch('deleteCompoundDefinition', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function deleteDictionaryAttribute(string $id, string $valueId): ResponseInterface
    {
        return $this->dispatch('deleteDictionaryAttribute', ['id' => $id, 'valueId' => $valueId], [], [], false, null, false, true, NULL);
    }

    public function deleteDictionaryFilter(string $id, string $valueId, string $parentValueId): ResponseInterface
    {
        return $this->dispatch('deleteDictionaryFilter', ['id' => $id, 'valueId' => $valueId, 'parentValueId' => $parentValueId], [], [], false, null, false, true, NULL);
    }

    public function deleteDictionaryParent(string $id): ResponseInterface
    {
        return $this->dispatch('deleteDictionaryParent', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function deleteDryRun(string $id): ResponseInterface
    {
        return $this->dispatch('deleteDryRun', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function deleteManyProductConnections(string $id, string $relationId, array $requestBody): ResponseInterface
    {
        return $this->dispatch('deleteManyProductConnections', ['id' => $id, 'relationId' => $relationId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function deletePolicyByCategoryAndPolicyId(string $id, string $policyId, string $policyType): ResponseInterface
    {
        return $this->dispatch('deletePolicyByCategoryAndPolicyId', ['id' => $id, 'policyId' => $policyId, 'policyType' => $policyType], [], [], false, null, false, true, NULL);
    }

    public function deletePolicyByCategoryNodeAndPolicyId(string $id, string $policyId, string $policyType): ResponseInterface
    {
        return $this->dispatch('deletePolicyByCategoryNodeAndPolicyId', ['id' => $id, 'policyId' => $policyId, 'policyType' => $policyType], [], [], false, null, false, true, NULL);
    }

    public function deletePolicyForAttributeDefinition(string $id, string $policyId, string $policyType): ResponseInterface
    {
        return $this->dispatch('deletePolicyForAttributeDefinition', ['id' => $id, 'policyId' => $policyId, 'policyType' => $policyType], [], [], false, null, false, true, NULL);
    }

    public function deletePolicyForRelation(string $id, string $policyId, string $policyType): ResponseInterface
    {
        return $this->dispatch('deletePolicyForRelation', ['id' => $id, 'policyId' => $policyId, 'policyType' => $policyType], [], [], false, null, false, true, NULL);
    }

    public function deletePolicyFromProductsForCategoryId(string $id, string $policyId, string $policyType): ResponseInterface
    {
        return $this->dispatch('deletePolicyFromProductsForCategoryId', ['id' => $id, 'policyId' => $policyId, 'policyType' => $policyType], [], [], false, null, false, true, NULL);
    }

    public function deletePolicyFromProductsForCategoryNodeId(string $id, string $policyId, string $policyType): ResponseInterface
    {
        return $this->dispatch('deletePolicyFromProductsForCategoryNodeId', ['id' => $id, 'policyId' => $policyId, 'policyType' => $policyType], [], [], false, null, false, true, NULL);
    }

    public function deleteProductAttribute(string $id, string $definitionId): ResponseInterface
    {
        return $this->dispatch('deleteProductAttribute', ['id' => $id, 'definitionId' => $definitionId], [], [], false, null, false, true, NULL);
    }

    public function deleteProductConnection(string $id, string $relationId, string $connectedProductId): ResponseInterface
    {
        return $this->dispatch('deleteProductConnection', ['id' => $id, 'relationId' => $relationId, 'connectedProductId' => $connectedProductId], [], [], false, null, false, true, NULL);
    }

    public function deleteProductConnectionsByRelation(string $id, string $relationId): ResponseInterface
    {
        return $this->dispatch('deleteProductConnectionsByRelation', ['id' => $id, 'relationId' => $relationId], [], [], false, null, false, true, NULL);
    }

    public function deleteProductFromBundle(string $id, string $complementaryProductId): ResponseInterface
    {
        return $this->dispatch('deleteProductFromBundle', ['id' => $id, 'complementaryProductId' => $complementaryProductId], [], [], false, null, false, true, NULL);
    }

    public function deleteProductTemplate(string $productId): ResponseInterface
    {
        return $this->dispatch('deleteProductTemplate', ['productId' => $productId], [], [], false, null, false, true, NULL);
    }

    public function deleteProductsAttribute(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DeleteProductsAttributesBulkRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('deleteProductsAttribute', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function deleteSelectValue(string $id, string $valueId): ResponseInterface
    {
        return $this->dispatch('deleteSelectValue', ['id' => $id, 'valueId' => $valueId], [], [], false, null, false, true, NULL);
    }

    public function disassociateAssetFromCategory(string $id, string $assetId): ResponseInterface
    {
        return $this->dispatch('disassociateAssetFromCategory', ['id' => $id, 'assetId' => $assetId], [], [], false, null, false, true, NULL);
    }

    public function disassociateAssetFromProduct(string $id, string $assetId): ResponseInterface
    {
        return $this->dispatch('disassociateAssetFromProduct', ['id' => $id, 'assetId' => $assetId], [], [], false, null, false, true, NULL);
    }

    public function findAllAttributeDefinitions(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('findAllAttributeDefinitions', [], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function findAllCompoundDefinitions(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('findAllCompoundDefinitions', [], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function findAttributeGroups(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('findAttributeGroups', [], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function findByCategoryLevelAttributes(string $attributeDefinitionId, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('findByCategoryLevelAttributes', ['attributeDefinitionId' => $attributeDefinitionId], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function findBySubDefinitions(string $attributeDefinitionId, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('findBySubDefinitions', ['attributeDefinitionId' => $attributeDefinitionId], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function findDefinitionsInGroup(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('findDefinitionsInGroup', ['id' => $id], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function findDefinitionsWithoutGroup(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('findDefinitionsWithoutGroup', [], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function findFilteredAttributeDefinitions(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionFilteringRequestDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('findFilteredAttributeDefinitions', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function findFilteredDictionaryAttributes(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryValueFilteringRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('findFilteredDictionaryAttributes', ['id' => $id], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function findFilteredDictionaryDefinitions(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeFilteringRequestDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('findFilteredDictionaryDefinitions', ['id' => $id], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function findOne(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('findOne', ['id' => $id], [], $headerParameters, false, null, false, true, NULL);
    }

    public function findProductTemplates(array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('findProductTemplates', [], $queryParameters, [], false, null, false, true, NULL);
    }

    public function findProductViewsById(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductIdViewsRequestDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('findProductViewsById', ['id' => $id], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function findProducts(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('findProducts', ['id' => $id], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function findRelations(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('findRelations', [], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function findSimple(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('findSimple', [], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function getAttributeDefinition(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getAttributeDefinition', ['id' => $id], [], $headerParameters, false, null, false, true, NULL);
    }

    public function getAttributeDefinitionsByPolicyId(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getAttributeDefinitionsByPolicyId', ['id' => $id], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function getAttributeRootGroup(array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getAttributeRootGroup', [], [], $headerParameters, false, null, false, true, NULL);
    }

    public function getAttributesAssociatedToCategory(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getAttributesAssociatedToCategory', ['id' => $id], [], $headerParameters, false, null, false, true, NULL);
    }

    public function getByCategoryNodeId(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('getByCategoryNodeId', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function getByDefinitionId(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('getByDefinitionId', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function getByRelationId(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('getByRelationId', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function getCatalogByPolicyId(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getCatalogByPolicyId', ['id' => $id], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function getCatalogNodeByPolicyId(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getCatalogNodeByPolicyId', ['id' => $id], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function getCatalogNodeChildren(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getCatalogNodeChildren', ['id' => $id], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function getCategoriesByAssetId(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('getCategoriesByAssetId', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function getCategoriesByPolicyId(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getCategoriesByPolicyId', ['id' => $id], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function getCategoriesNodeByPolicyId(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getCategoriesNodeByPolicyId', ['id' => $id], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function getCategoryAssets(string $id): ResponseInterface
    {
        return $this->dispatch('getCategoryAssets', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function getCategoryProducts(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getCategoryProducts', ['id' => $id], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function getCategoryTree(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getCategoryTree', ['id' => $id], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function getCategoryView(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryWithCursorAndViewRequestDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getCategoryView', ['id' => $id], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function getCompoundDefinition(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getCompoundDefinition', ['id' => $id], [], $headerParameters, false, null, false, true, NULL);
    }

    public function getDictionaryAttribute(string $id, string $valueId, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getDictionaryAttribute', ['id' => $id, 'valueId' => $valueId], [], $headerParameters, false, null, false, true, NULL);
    }

    public function getFilteredNodes(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryFilteringRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getFilteredNodes', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function getFilteredRelations(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationFilteringRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getFilteredRelations', [], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function getGroupedProductAttributes(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getGroupedProductAttributes', ['id' => $id], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function getJobStatus(string $taskId): ResponseInterface
    {
        return $this->dispatch('getJobStatus', ['taskId' => $taskId], [], [], false, null, false, true, NULL);
    }

    public function getNode(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getNode', ['id' => $id], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function getPathToNode(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('getPathToNode', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function getPoliciesByCategoryId(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('getPoliciesByCategoryId', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function getPolicyByCategoryId(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('getPolicyByCategoryId', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function getPolicyByCategoryNodeId(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('getPolicyByCategoryNodeId', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function getProduct(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getProduct', ['id' => $id], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function getProductAssets(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('getProductAssets', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function getProductAttributes(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getProductAttributes', ['id' => $id], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function getProductConnectionsByRelationId(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getProductConnectionsByRelationId', ['id' => $id], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function getProductForRelation(string $id, string $relationId, array $queryParameters): ResponseInterface
    {
        return $this->dispatch('getProductForRelation', ['id' => $id, 'relationId' => $relationId], $queryParameters, [], false, null, false, true, NULL);
    }

    public function getProductGroupAttribute(string $id, string $definitionId): ResponseInterface
    {
        return $this->dispatch('getProductGroupAttribute', ['id' => $id, 'definitionId' => $definitionId], [], [], false, null, false, true, NULL);
    }

    public function getProductRelations(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('getProductRelations', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function getProductTemplate(string $productId): ResponseInterface
    {
        return $this->dispatch('getProductTemplate', ['productId' => $productId], [], [], false, null, false, true, NULL);
    }

    public function getProductVariantAttribute(string $id, string $definitionId): ResponseInterface
    {
        return $this->dispatch('getProductVariantAttribute', ['id' => $id, 'definitionId' => $definitionId], [], [], false, null, false, true, NULL);
    }

    public function getProductsCategories(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('getProductsCategories', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function getProductsLabels(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('getProductsLabels', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function getProductsWithCursorAndViews(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CursorWithViewsRequestDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getProductsWithCursorAndViews', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function getRelationsByPolicyId(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getRelationsByPolicyId', ['id' => $id], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function getVersion(): ResponseInterface
    {
        return $this->dispatch('getVersion', [], [], [], false, null, false, true, NULL);
    }

    public function list(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('list', [], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function listAttributesAttachedToGivenNode(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('listAttributesAttachedToGivenNode', ['id' => $id], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function listCatalogs(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('listCatalogs', [], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function listProductsViewsByAssets(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AssetIdListViewsRequestDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('listProductsViewsByAssets', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function listProductsViewsByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductIdListViewsRequestDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('listProductsViewsByIds', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function listProductsViewsByNumbers(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductNumberListViewsRequestDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('listProductsViewsByNumbers', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function listProductsViewsByTypes(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductViewsByTypeRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('listProductsViewsByTypes', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function moveAttributeDefinition(string $id, string $definitionId, array $queryParameters): ResponseInterface
    {
        return $this->dispatch('moveAttributeDefinition', ['id' => $id, 'definitionId' => $definitionId], $queryParameters, [], false, null, false, true, NULL);
    }

    public function moveAttributeDefinitionInGroup(string $definitionId, array $queryParameters): ResponseInterface
    {
        return $this->dispatch('moveAttributeDefinitionInGroup', ['definitionId' => $definitionId], $queryParameters, [], false, null, false, true, NULL);
    }

    public function moveCatalogNode(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MoveCategoryRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('moveCatalogNode', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function moveCategoryAsset(string $id, string $assetId, array $queryParameters): ResponseInterface
    {
        return $this->dispatch('moveCategoryAsset', ['id' => $id, 'assetId' => $assetId], $queryParameters, [], false, null, false, true, NULL);
    }

    public function moveGroup(string $id, array $queryParameters): ResponseInterface
    {
        return $this->dispatch('moveGroup', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function moveProductAsset(string $id, string $assetId, array $queryParameters): ResponseInterface
    {
        return $this->dispatch('moveProductAsset', ['id' => $id, 'assetId' => $assetId], $queryParameters, [], false, null, false, true, NULL);
    }

    public function moveProductGroup(string $id, string $groupId, array $queryParameters): ResponseInterface
    {
        return $this->dispatch('moveProductGroup', ['id' => $id, 'groupId' => $groupId], $queryParameters, [], false, null, false, true, NULL);
    }

    public function moveProductInBundle(string $id, string $complementaryProductId, array $queryParameters): ResponseInterface
    {
        return $this->dispatch('moveProductInBundle', ['id' => $id, 'complementaryProductId' => $complementaryProductId], $queryParameters, [], false, null, false, true, NULL);
    }

    public function moveProductVariant(string $id, string $variantProductId, array $queryParameters): ResponseInterface
    {
        return $this->dispatch('moveProductVariant', ['id' => $id, 'variantProductId' => $variantProductId], $queryParameters, [], false, null, false, true, NULL);
    }

    public function partialUpdateCatalogNode(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryMetadataUpdateRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('partialUpdateCatalogNode', ['id' => $id], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function partialUpdateRelation(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationPartialUpdateRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('partialUpdateRelation', ['id' => $id], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function patchUpdate(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeDefinitionUpdate $requestBody): ResponseInterface
    {
        return $this->dispatch('patchUpdate', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function productOverview(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('productOverview', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function removeLabelFromProduct(string $id, string $labelId): ResponseInterface
    {
        return $this->dispatch('removeLabelFromProduct', ['id' => $id, 'labelId' => $labelId], [], [], false, null, false, true, NULL);
    }

    public function removeLabelFromProducts(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ModifyLabelInProductsRequestDto $requestBody): ResponseInterface
    {
        return $this->dispatch('removeLabelFromProducts', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function removeLabelsFromProduct(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RemoveLabelsFromProductRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('removeLabelsFromProduct', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function removeProductFromCategory(string $id, string $categoryId): ResponseInterface
    {
        return $this->dispatch('removeProductFromCategory', ['id' => $id, 'categoryId' => $categoryId], [], [], false, null, false, true, NULL);
    }

    public function rename(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RenameAttributeGroupRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('rename', ['id' => $id], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function reorderSelectValue(string $id, string $valueId, array $queryParameters): ResponseInterface
    {
        return $this->dispatch('reorderSelectValue', ['id' => $id, 'valueId' => $valueId], $queryParameters, [], false, null, false, true, NULL);
    }

    public function setDefinitionsOrderStrategyInGroup(string $id, array $queryParameters): ResponseInterface
    {
        return $this->dispatch('setDefinitionsOrderStrategyInGroup', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function setDictionaryAttributeValuesForCategory(string $id, string $attributeDefinitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SetCategoryDictionaryAttributeValuesRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('setDictionaryAttributeValuesForCategory', ['id' => $id, 'attributeDefinitionId' => $attributeDefinitionId], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function setDictionaryAttributeValuesForProduct(string $id, string $definitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SetDictionaryValuesRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('setDictionaryAttributeValuesForProduct', ['id' => $id, 'definitionId' => $definitionId], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function setDictionaryDefinitionValue(string $id, string $definitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateDictionaryCategoryAttributeValuesRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('setDictionaryDefinitionValue', ['id' => $id, 'definitionId' => $definitionId], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function setDictionaryParent(string $id, string $parentDefinitionId): ResponseInterface
    {
        return $this->dispatch('setDictionaryParent', ['id' => $id, 'parentDefinitionId' => $parentDefinitionId], [], [], false, null, false, true, NULL);
    }

    public function setOtherDefinitionsOrderStrategy(array $queryParameters): ResponseInterface
    {
        return $this->dispatch('setOtherDefinitionsOrderStrategy', [], $queryParameters, [], false, null, false, true, NULL);
    }

    public function setProductAssets(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SetProductAssets $requestBody): ResponseInterface
    {
        return $this->dispatch('setProductAssets', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function setProductGroup(string $id): ResponseInterface
    {
        return $this->dispatch('setProductGroup', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function setSelectDefinitionValue(string $id, string $definitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateSelectCategoryAttributeValuesRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('setSelectDefinitionValue', ['id' => $id, 'definitionId' => $definitionId], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function setSimpleDefinitionValue(string $id, string $definitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateSimpleCategoryAttributeValueRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('setSimpleDefinitionValue', ['id' => $id, 'definitionId' => $definitionId], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function unarchive(string $id): ResponseInterface
    {
        return $this->dispatch('unarchive', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function unarchiveProductsByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductArchiveStateRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('unarchiveProductsByIds', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function unassignDefinitionFromCategory(string $id, string $definitionId): ResponseInterface
    {
        return $this->dispatch('unassignDefinitionFromCategory', ['id' => $id, 'definitionId' => $definitionId], [], [], false, null, false, true, NULL);
    }

    public function unassignProductGroup(string $id, string $groupId): ResponseInterface
    {
        return $this->dispatch('unassignProductGroup', ['id' => $id, 'groupId' => $groupId], [], [], false, null, false, true, NULL);
    }

    public function unassignProductVariant(string $id, string $variantProductId): ResponseInterface
    {
        return $this->dispatch('unassignProductVariant', ['id' => $id, 'variantProductId' => $variantProductId], [], [], false, null, false, true, NULL);
    }

    public function updateAttributeDefinition(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SimpleAttributeDefinitionRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('updateAttributeDefinition', ['id' => $id], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function updateAttributeDefinitionDryRun(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SimpleAttributeDefinitionRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('updateAttributeDefinitionDryRun', ['id' => $id], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function updateAttributesByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SaveProductsAttributesByIdsRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('updateAttributesByIds', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function updateCatalogNode(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateCategoryRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('updateCatalogNode', ['id' => $id], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function updateCatalogNodeOrder(string $id, array $queryParameters): ResponseInterface
    {
        return $this->dispatch('updateCatalogNodeOrder', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function updateColumnAttribute(string $id, string $definitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ColumnAttributeValueDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('updateColumnAttribute', ['id' => $id, 'definitionId' => $definitionId], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function updateColumnDefinition(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ColumnAttributeDefinitionDto $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('updateColumnDefinition', ['id' => $id], $queryParameters, [], true, $requestBody, true, true, 'application/json');
    }

    public function updateColumnDefinitionDryRun(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ColumnAttributeDefinitionDto $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('updateColumnDefinitionDryRun', ['id' => $id], $queryParameters, [], true, $requestBody, true, true, 'application/json');
    }

    public function updateCompoundDefinition(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CompoundAttributeDefinitionRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('updateCompoundDefinition', ['id' => $id], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function updateConnectionQuantity(string $id, string $rightProductId, string $relationId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductConnectionUpdateRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('updateConnectionQuantity', ['id' => $id, 'rightProductId' => $rightProductId, 'relationId' => $relationId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function updateContextAware(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateContextAwareFlagRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('updateContextAware', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function updateDictionaryAttribute(string $id, string $valueId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeUpdateRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('updateDictionaryAttribute', ['id' => $id, 'valueId' => $valueId], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function updateDictionaryDefinition(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeDefinitionDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('updateDictionaryDefinition', ['id' => $id], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function updateMatrixAttribute(string $id, string $definitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MatrixAttributeValueDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('updateMatrixAttribute', ['id' => $id, 'definitionId' => $definitionId], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function updateMatrixDefinition(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MatrixAttributeDefinitionDto $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('updateMatrixDefinition', ['id' => $id], $queryParameters, [], true, $requestBody, true, true, 'application/json');
    }

    public function updateMatrixDefinitionDryRun(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MatrixAttributeDefinitionDto $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('updateMatrixDefinitionDryRun', ['id' => $id], $queryParameters, [], true, $requestBody, true, true, 'application/json');
    }

    public function updateMetadata(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionMetadataUpdateRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('updateMetadata', ['id' => $id], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function updateName(string $productId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductTemplateRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('updateName', ['productId' => $productId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function updateNodeAttributeColumnValue(string $id, string $attributeDefinitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateCategoryColumnAttributeRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('updateNodeAttributeColumnValue', ['id' => $id, 'attributeDefinitionId' => $attributeDefinitionId], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function updateNodeAttributeMatrixValue(string $id, string $attributeDefinitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateCategoryMatrixAttributeRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('updateNodeAttributeMatrixValue', ['id' => $id, 'attributeDefinitionId' => $attributeDefinitionId], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function updateNodeAttributeValue(string $id, string $attributeDefinitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateCategoryAttributeRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('updateNodeAttributeValue', ['id' => $id, 'attributeDefinitionId' => $attributeDefinitionId], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function updateNumber(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateAttributeGroupNumberRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('updateNumber', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function updateOrderProductConnections(string $id, string $relationId, string $connectedProductId, array $queryParameters): ResponseInterface
    {
        return $this->dispatch('updateOrderProductConnections', ['id' => $id, 'relationId' => $relationId, 'connectedProductId' => $connectedProductId], $queryParameters, [], false, null, false, true, NULL);
    }

    public function updateOrderProductRelation(string $id, string $relationId, array $queryParameters): ResponseInterface
    {
        return $this->dispatch('updateOrderProductRelation', ['id' => $id, 'relationId' => $relationId], $queryParameters, [], false, null, false, true, NULL);
    }

    public function updateOrderRelation(string $id, array $queryParameters): ResponseInterface
    {
        return $this->dispatch('updateOrderRelation', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function updateProduct(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductMetadataUpdateRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('updateProduct', ['id' => $id], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function updateProductAttribute(string $id, string $definitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeValueValues $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('updateProductAttribute', ['id' => $id, 'definitionId' => $definitionId], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function updateProductAttributes(string $id, array $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('updateProductAttributes', ['id' => $id], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function updateProductBundleQuantity(string $id, string $complementaryProductId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductBundleRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('updateProductBundleQuantity', ['id' => $id, 'complementaryProductId' => $complementaryProductId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function updateProductGroupAttribute(string $id, string $definitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductVariantAttributeDto $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('updateProductGroupAttribute', ['id' => $id, 'definitionId' => $definitionId], $queryParameters, [], true, $requestBody, true, true, 'application/json');
    }

    public function updateProductGroupsAttributeVlaSettings(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SaveProductsVlaSettingsByIdsRequest $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('updateProductGroupsAttributeVlaSettings', [], $queryParameters, [], true, $requestBody, true, true, 'application/json');
    }

    public function updateProductVariantAttribute(string $id, string $definitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductVariantAttributeDto $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('updateProductVariantAttribute', ['id' => $id, 'definitionId' => $definitionId], $queryParameters, [], true, $requestBody, true, true, 'application/json');
    }

    public function updateProductVariantsAttributeVlaSettings(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SaveProductsVlaSettingsByIdsRequest $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('updateProductVariantsAttributeVlaSettings', [], $queryParameters, [], true, $requestBody, true, true, 'application/json');
    }

    public function updateRelatedProductsRelationSortingOrderSource(string $id, string $sortingOrderSource): ResponseInterface
    {
        return $this->dispatch('updateRelatedProductsRelationSortingOrderSource', ['id' => $id, 'sortingOrderSource' => $sortingOrderSource], [], [], false, null, false, true, NULL);
    }

    public function updateRelation(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('updateRelation', ['id' => $id], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function updateRelationDirection(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationDirectionUpdateRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('updateRelationDirection', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function updateSelectValue(string $id, string $valueId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateSelectValueRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('updateSelectValue', ['id' => $id, 'valueId' => $valueId], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function upsertAttributesByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SaveProductsAttributesByIdsRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('upsertAttributesByIds', [], $queryParameters, $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function validateAttribute(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeValidationRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('validateAttribute', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function validateProducts(array $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('validateProducts', [], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function validateValue(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ValueValidationRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('validateValue', [], [], [], true, $requestBody, true, true, 'application/json');
    }

}
