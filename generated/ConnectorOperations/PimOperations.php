<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\ConnectorOperations;

use Symfony\Contracts\HttpClient\ResponseInterface;

/** Operation-named connector methods generated from API revision 2c19c082ed473e21. */
trait PimOperations
{
    public function addAttributesByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SaveProductsAttributesByIdsRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addAttributesByIds', func_get_args());
    }

    public function addCategoryProducts(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryProductRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addCategoryProducts', func_get_args());
    }

    public function addColumnAttribute(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ColumnAttributeValueAddRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addColumnAttribute', func_get_args());
    }

    public function addDictionaryAttribute(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeValueAddRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addDictionaryAttribute', func_get_args());
    }

    public function addLabelToProducts(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ModifyLabelInProductsRequestDto $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addLabelToProducts', func_get_args());
    }

    public function addLabelsToProduct(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\LabelReferenceRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addLabelsToProduct', func_get_args());
    }

    public function addMatrixAttribute(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MatrixAttributeValueAddRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addMatrixAttribute', func_get_args());
    }

    public function addPolicyToAttributeDefinition(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PolicyRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addPolicyToAttributeDefinition', func_get_args());
    }

    public function addPolicyToAttributeDefinitions(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\BulkAttributeDefinitionPolicyRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addPolicyToAttributeDefinitions', func_get_args());
    }

    public function addPolicyToCategory(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PolicyRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addPolicyToCategory', func_get_args());
    }

    public function addPolicyToCategoryNode(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PolicyRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addPolicyToCategoryNode', func_get_args());
    }

    public function addPolicyToProductsForCategoryId(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PolicyRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addPolicyToProductsForCategoryId', func_get_args());
    }

    public function addPolicyToProductsForCategoryNodeId(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PolicyRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addPolicyToProductsForCategoryNodeId', func_get_args());
    }

    public function addPolicyToRelation(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PolicyRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addPolicyToRelation', func_get_args());
    }

    public function addProductAttribute(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CreateSimpleAttributeRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addProductAttribute', func_get_args());
    }

    public function addProductGroups(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\BulkAssignGroupsRequest $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addProductGroups', func_get_args());
    }

    public function addProductToBundle(string $id, string $complementaryProductId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductBundleRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addProductToBundle', func_get_args());
    }

    public function addProductToCategories(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryReferenceRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addProductToCategories', func_get_args());
    }

    public function addProductVariant(string $id, string $variantProductId, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addProductVariant', func_get_args());
    }

    public function addProductVariants(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AddProductVariantsRequest $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addProductVariants', func_get_args());
    }

    public function appendDictionaryValues(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AppendDictionaryValueRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('appendDictionaryValues', func_get_args());
    }

    public function appendSelectValues(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AppendSelectValuesToProductsAttributeRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('appendSelectValues', func_get_args());
    }

    public function archive(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('archive', func_get_args());
    }

    public function archiveProductsByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductArchiveStateRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('archiveProductsByIds', func_get_args());
    }

    public function assignDefinitionToCategory(string $id, string $definitionId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('assignDefinitionToCategory', func_get_args());
    }

    public function assignProductsToCategory(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AssignProductsToCategoryRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('assignProductsToCategory', func_get_args());
    }

    public function associateAssetWithCategory(string $id, string $assetId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('associateAssetWithCategory', func_get_args());
    }

    public function associateAssetWithProduct(string $id, string $assetId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('associateAssetWithProduct', func_get_args());
    }

    public function associateAssets(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AssociateProductAssetsRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('associateAssets', func_get_args());
    }

    public function bulkDeletePolicyFromAttributeDefinitions(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\BulkDeleteAttributeDefinitionPolicyRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('bulkDeletePolicyFromAttributeDefinitions', func_get_args());
    }

    public function convertToProductFamily(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('convertToProductFamily', func_get_args());
    }

    public function copyAndUpdateProduct(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CopyProductRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('copyAndUpdateProduct', func_get_args());
    }

    public function copyProduct(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('copyProduct', func_get_args());
    }

    public function countDictionaryAttributes(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeFilteringRequestDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('countDictionaryAttributes', func_get_args());
    }

    public function createAttributeDefinition(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SimpleAttributeDefinitionRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createAttributeDefinition', func_get_args());
    }

    public function createAttributeGroup(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeGroupRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createAttributeGroup', func_get_args());
    }

    public function createCatalogNodeAttribute(string $id, string $attributeDefinitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryAttributeRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createCatalogNodeAttribute', func_get_args());
    }

    public function createCatalogNodeAttributeColumn(string $id, string $attributeDefinitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryColumnAttributeRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createCatalogNodeAttributeColumn', func_get_args());
    }

    public function createCatalogNodeAttributeCompound(string $id, string $attributeDefinitionId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createCatalogNodeAttributeCompound', func_get_args());
    }

    public function createCatalogNodeAttributeDictionary(string $id, string $attributeDefinitionId, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createCatalogNodeAttributeDictionary', func_get_args());
    }

    public function createCatalogNodeAttributeMatrix(string $id, string $attributeDefinitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryMatrixAttributeRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createCatalogNodeAttributeMatrix', func_get_args());
    }

    public function createCategory(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CreateCategoryRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createCategory', func_get_args());
    }

    public function createColumnDefinition(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ColumnAttributeDefinitionDto $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createColumnDefinition', func_get_args());
    }

    public function createCompoundDefinition(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CompoundAttributeDefinitionRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createCompoundDefinition', func_get_args());
    }

    public function createDictionaryAttribute(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeCreateRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createDictionaryAttribute', func_get_args());
    }

    public function createDictionaryDefinition(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeDefinitionCreateRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createDictionaryDefinition', func_get_args());
    }

    public function createDictionaryValueFilter(string $id, string $valueId, string $parentValueId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createDictionaryValueFilter', func_get_args());
    }

    public function createMatrixDefinition(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MatrixAttributeDefinitionDto $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createMatrixDefinition', func_get_args());
    }

    public function createProduct(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductCreateRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createProduct', func_get_args());
    }

    public function createProductBundle(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createProductBundle', func_get_args());
    }

    public function createProductConnection(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductConnectionRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createProductConnection', func_get_args());
    }

    public function createProductConnections(string $id, string $relationId, array $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createProductConnections', func_get_args());
    }

    public function createProductTemplate(string $productId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductTemplateRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createProductTemplate', func_get_args());
    }

    public function createRelation(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createRelation', func_get_args());
    }

    public function createSelectValue(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SelectValueRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createSelectValue', func_get_args());
    }

    public function deductDictionaryValues(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DeductDictionaryValueRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deductDictionaryValues', func_get_args());
    }

    public function deductSelectValues(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DeductSelectValuesFromProductsAttributeRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deductSelectValues', func_get_args());
    }

    public function delete(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('delete', func_get_args());
    }

    public function deleteAttributeDefinition(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteAttributeDefinition', func_get_args());
    }

    public function deleteAttributeFromNode(string $id, string $attributeDefinitionId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteAttributeFromNode', func_get_args());
    }

    public function deleteAttributeGroup(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteAttributeGroup', func_get_args());
    }

    public function deleteCategoryNode(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteCategoryNode', func_get_args());
    }

    public function deleteCategoryProducts(string $id, string $productId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteCategoryProducts', func_get_args());
    }

    public function deleteCompoundDefinition(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteCompoundDefinition', func_get_args());
    }

    public function deleteDictionaryAttribute(string $id, string $valueId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteDictionaryAttribute', func_get_args());
    }

    public function deleteDictionaryFilter(string $id, string $valueId, string $parentValueId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteDictionaryFilter', func_get_args());
    }

    public function deleteDictionaryParent(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteDictionaryParent', func_get_args());
    }

    public function deleteDryRun(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteDryRun', func_get_args());
    }

    public function deleteManyProductConnections(string $id, string $relationId, array $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteManyProductConnections', func_get_args());
    }

    public function deletePolicyByCategoryAndPolicyId(string $id, string $policyId, string $policyType): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deletePolicyByCategoryAndPolicyId', func_get_args());
    }

    public function deletePolicyByCategoryNodeAndPolicyId(string $id, string $policyId, string $policyType): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deletePolicyByCategoryNodeAndPolicyId', func_get_args());
    }

    public function deletePolicyForAttributeDefinition(string $id, string $policyId, string $policyType): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deletePolicyForAttributeDefinition', func_get_args());
    }

    public function deletePolicyForRelation(string $id, string $policyId, string $policyType): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deletePolicyForRelation', func_get_args());
    }

    public function deletePolicyFromProductsForCategoryId(string $id, string $policyId, string $policyType): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deletePolicyFromProductsForCategoryId', func_get_args());
    }

    public function deletePolicyFromProductsForCategoryNodeId(string $id, string $policyId, string $policyType): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deletePolicyFromProductsForCategoryNodeId', func_get_args());
    }

    public function deleteProductAttribute(string $id, string $definitionId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteProductAttribute', func_get_args());
    }

    public function deleteProductConnection(string $id, string $relationId, string $connectedProductId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteProductConnection', func_get_args());
    }

    public function deleteProductConnectionsByRelation(string $id, string $relationId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteProductConnectionsByRelation', func_get_args());
    }

    public function deleteProductFromBundle(string $id, string $complementaryProductId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteProductFromBundle', func_get_args());
    }

    public function deleteProductTemplate(string $productId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteProductTemplate', func_get_args());
    }

    public function deleteProductsAttribute(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DeleteProductsAttributesBulkRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteProductsAttribute', func_get_args());
    }

    public function deleteSelectValue(string $id, string $valueId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteSelectValue', func_get_args());
    }

    public function disassociateAssetFromCategory(string $id, string $assetId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('disassociateAssetFromCategory', func_get_args());
    }

    public function disassociateAssetFromProduct(string $id, string $assetId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('disassociateAssetFromProduct', func_get_args());
    }

    public function findAllAttributeDefinitions(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findAllAttributeDefinitions', func_get_args());
    }

    public function findAllCompoundDefinitions(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findAllCompoundDefinitions', func_get_args());
    }

    public function findAttributeGroups(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findAttributeGroups', func_get_args());
    }

    public function findByCategoryLevelAttributes(string $attributeDefinitionId, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findByCategoryLevelAttributes', func_get_args());
    }

    public function findBySubDefinitions(string $attributeDefinitionId, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findBySubDefinitions', func_get_args());
    }

    public function findDefinitionsInGroup(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findDefinitionsInGroup', func_get_args());
    }

    public function findDefinitionsWithoutGroup(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findDefinitionsWithoutGroup', func_get_args());
    }

    public function findFilteredAttributeDefinitions(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionFilteringRequestDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findFilteredAttributeDefinitions', func_get_args());
    }

    public function findFilteredDictionaryAttributes(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryValueFilteringRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findFilteredDictionaryAttributes', func_get_args());
    }

    public function findFilteredDictionaryDefinitions(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeFilteringRequestDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findFilteredDictionaryDefinitions', func_get_args());
    }

    public function findOne(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findOne', func_get_args());
    }

    public function findProductTemplates(array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findProductTemplates', func_get_args());
    }

    public function findProductViewsById(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductIdViewsRequestDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findProductViewsById', func_get_args());
    }

    public function findProducts(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findProducts', func_get_args());
    }

    public function findRelations(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findRelations', func_get_args());
    }

    public function findSimple(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findSimple', func_get_args());
    }

    public function getAttributeDefinition(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getAttributeDefinition', func_get_args());
    }

    public function getAttributeDefinitionsByPolicyId(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getAttributeDefinitionsByPolicyId', func_get_args());
    }

    public function getAttributeRootGroup(array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getAttributeRootGroup', func_get_args());
    }

    public function getAttributesAssociatedToCategory(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getAttributesAssociatedToCategory', func_get_args());
    }

    public function getByCategoryNodeId(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getByCategoryNodeId', func_get_args());
    }

    public function getByDefinitionId(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getByDefinitionId', func_get_args());
    }

    public function getByRelationId(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getByRelationId', func_get_args());
    }

    public function getCatalogByPolicyId(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getCatalogByPolicyId', func_get_args());
    }

    public function getCatalogNodeByPolicyId(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getCatalogNodeByPolicyId', func_get_args());
    }

    public function getCatalogNodeChildren(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getCatalogNodeChildren', func_get_args());
    }

    public function getCategoriesByAssetId(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getCategoriesByAssetId', func_get_args());
    }

    public function getCategoriesByPolicyId(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getCategoriesByPolicyId', func_get_args());
    }

    public function getCategoriesNodeByPolicyId(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getCategoriesNodeByPolicyId', func_get_args());
    }

    public function getCategoryAssets(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getCategoryAssets', func_get_args());
    }

    public function getCategoryProducts(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getCategoryProducts', func_get_args());
    }

    public function getCategoryTree(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getCategoryTree', func_get_args());
    }

    public function getCategoryView(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryWithCursorAndViewRequestDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getCategoryView', func_get_args());
    }

    public function getCompoundDefinition(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getCompoundDefinition', func_get_args());
    }

    public function getDictionaryAttribute(string $id, string $valueId, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getDictionaryAttribute', func_get_args());
    }

    public function getFilteredNodes(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryFilteringRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getFilteredNodes', func_get_args());
    }

    public function getFilteredRelations(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationFilteringRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getFilteredRelations', func_get_args());
    }

    public function getGroupedProductAttributes(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getGroupedProductAttributes', func_get_args());
    }

    public function getJobStatus(string $taskId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getJobStatus', func_get_args());
    }

    public function getNode(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getNode', func_get_args());
    }

    public function getPathToNode(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getPathToNode', func_get_args());
    }

    public function getPoliciesByCategoryId(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getPoliciesByCategoryId', func_get_args());
    }

    public function getPolicyByCategoryId(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getPolicyByCategoryId', func_get_args());
    }

    public function getPolicyByCategoryNodeId(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getPolicyByCategoryNodeId', func_get_args());
    }

    public function getProduct(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getProduct', func_get_args());
    }

    public function getProductAssets(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getProductAssets', func_get_args());
    }

    public function getProductAttributes(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getProductAttributes', func_get_args());
    }

    public function getProductConnectionsByRelationId(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getProductConnectionsByRelationId', func_get_args());
    }

    public function getProductForRelation(string $id, string $relationId, array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getProductForRelation', func_get_args());
    }

    public function getProductGroupAttribute(string $id, string $definitionId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getProductGroupAttribute', func_get_args());
    }

    public function getProductRelations(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getProductRelations', func_get_args());
    }

    public function getProductTemplate(string $productId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getProductTemplate', func_get_args());
    }

    public function getProductVariantAttribute(string $id, string $definitionId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getProductVariantAttribute', func_get_args());
    }

    public function getProductsCategories(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getProductsCategories', func_get_args());
    }

    public function getProductsLabels(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getProductsLabels', func_get_args());
    }

    public function getProductsWithCursorAndViews(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CursorWithViewsRequestDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getProductsWithCursorAndViews', func_get_args());
    }

    public function getRelationsByPolicyId(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getRelationsByPolicyId', func_get_args());
    }

    public function getVersion(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getVersion', func_get_args());
    }

    public function list(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('list', func_get_args());
    }

    public function listAttributesAttachedToGivenNode(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('listAttributesAttachedToGivenNode', func_get_args());
    }

    public function listCatalogs(array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('listCatalogs', func_get_args());
    }

    public function listProductsViewsByAssets(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AssetIdListViewsRequestDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('listProductsViewsByAssets', func_get_args());
    }

    public function listProductsViewsByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductIdListViewsRequestDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('listProductsViewsByIds', func_get_args());
    }

    public function listProductsViewsByNumbers(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductNumberListViewsRequestDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('listProductsViewsByNumbers', func_get_args());
    }

    public function listProductsViewsByTypes(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductViewsByTypeRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('listProductsViewsByTypes', func_get_args());
    }

    public function moveAttributeDefinition(string $id, string $definitionId, array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('moveAttributeDefinition', func_get_args());
    }

    public function moveAttributeDefinitionInGroup(string $definitionId, array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('moveAttributeDefinitionInGroup', func_get_args());
    }

    public function moveCatalogNode(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MoveCategoryRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('moveCatalogNode', func_get_args());
    }

    public function moveCategoryAsset(string $id, string $assetId, array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('moveCategoryAsset', func_get_args());
    }

    public function moveGroup(string $id, array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('moveGroup', func_get_args());
    }

    public function moveProductAsset(string $id, string $assetId, array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('moveProductAsset', func_get_args());
    }

    public function moveProductGroup(string $id, string $groupId, array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('moveProductGroup', func_get_args());
    }

    public function moveProductInBundle(string $id, string $complementaryProductId, array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('moveProductInBundle', func_get_args());
    }

    public function moveProductVariant(string $id, string $variantProductId, array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('moveProductVariant', func_get_args());
    }

    public function partialUpdateCatalogNode(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryMetadataUpdateRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('partialUpdateCatalogNode', func_get_args());
    }

    public function partialUpdateRelation(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationPartialUpdateRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('partialUpdateRelation', func_get_args());
    }

    public function patchUpdate(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeDefinitionUpdate $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('patchUpdate', func_get_args());
    }

    public function productOverview(string $id, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('productOverview', func_get_args());
    }

    public function removeLabelFromProduct(string $id, string $labelId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('removeLabelFromProduct', func_get_args());
    }

    public function removeLabelFromProducts(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ModifyLabelInProductsRequestDto $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('removeLabelFromProducts', func_get_args());
    }

    public function removeLabelsFromProduct(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RemoveLabelsFromProductRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('removeLabelsFromProduct', func_get_args());
    }

    public function removeProductFromCategory(string $id, string $categoryId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('removeProductFromCategory', func_get_args());
    }

    public function rename(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RenameAttributeGroupRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('rename', func_get_args());
    }

    public function reorderSelectValue(string $id, string $valueId, array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('reorderSelectValue', func_get_args());
    }

    public function setDefinitionsOrderStrategyInGroup(string $id, array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('setDefinitionsOrderStrategyInGroup', func_get_args());
    }

    public function setDictionaryAttributeValuesForCategory(string $id, string $attributeDefinitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SetCategoryDictionaryAttributeValuesRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('setDictionaryAttributeValuesForCategory', func_get_args());
    }

    public function setDictionaryAttributeValuesForProduct(string $id, string $definitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SetDictionaryValuesRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('setDictionaryAttributeValuesForProduct', func_get_args());
    }

    public function setDictionaryDefinitionValue(string $id, string $definitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateDictionaryCategoryAttributeValuesRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('setDictionaryDefinitionValue', func_get_args());
    }

    public function setDictionaryParent(string $id, string $parentDefinitionId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('setDictionaryParent', func_get_args());
    }

    public function setOtherDefinitionsOrderStrategy(array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('setOtherDefinitionsOrderStrategy', func_get_args());
    }

    public function setProductAssets(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SetProductAssets $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('setProductAssets', func_get_args());
    }

    public function setProductGroup(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('setProductGroup', func_get_args());
    }

    public function setSelectDefinitionValue(string $id, string $definitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateSelectCategoryAttributeValuesRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('setSelectDefinitionValue', func_get_args());
    }

    public function setSimpleDefinitionValue(string $id, string $definitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateSimpleCategoryAttributeValueRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('setSimpleDefinitionValue', func_get_args());
    }

    public function unarchive(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('unarchive', func_get_args());
    }

    public function unarchiveProductsByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductArchiveStateRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('unarchiveProductsByIds', func_get_args());
    }

    public function unassignDefinitionFromCategory(string $id, string $definitionId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('unassignDefinitionFromCategory', func_get_args());
    }

    public function unassignProductGroup(string $id, string $groupId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('unassignProductGroup', func_get_args());
    }

    public function unassignProductVariant(string $id, string $variantProductId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('unassignProductVariant', func_get_args());
    }

    public function updateAttributeDefinition(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SimpleAttributeDefinitionRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateAttributeDefinition', func_get_args());
    }

    public function updateAttributeDefinitionDryRun(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SimpleAttributeDefinitionRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateAttributeDefinitionDryRun', func_get_args());
    }

    public function updateAttributesByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SaveProductsAttributesByIdsRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateAttributesByIds', func_get_args());
    }

    public function updateCatalogNode(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateCategoryRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateCatalogNode', func_get_args());
    }

    public function updateCatalogNodeOrder(string $id, array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateCatalogNodeOrder', func_get_args());
    }

    public function updateColumnAttribute(string $id, string $definitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ColumnAttributeValueDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateColumnAttribute', func_get_args());
    }

    public function updateColumnDefinition(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ColumnAttributeDefinitionDto $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateColumnDefinition', func_get_args());
    }

    public function updateColumnDefinitionDryRun(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ColumnAttributeDefinitionDto $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateColumnDefinitionDryRun', func_get_args());
    }

    public function updateCompoundDefinition(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CompoundAttributeDefinitionRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateCompoundDefinition', func_get_args());
    }

    public function updateConnectionQuantity(string $id, string $rightProductId, string $relationId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductConnectionUpdateRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateConnectionQuantity', func_get_args());
    }

    public function updateContextAware(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateContextAwareFlagRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateContextAware', func_get_args());
    }

    public function updateDictionaryAttribute(string $id, string $valueId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeUpdateRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateDictionaryAttribute', func_get_args());
    }

    public function updateDictionaryDefinition(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeDefinitionDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateDictionaryDefinition', func_get_args());
    }

    public function updateMatrixAttribute(string $id, string $definitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MatrixAttributeValueDto $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateMatrixAttribute', func_get_args());
    }

    public function updateMatrixDefinition(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MatrixAttributeDefinitionDto $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateMatrixDefinition', func_get_args());
    }

    public function updateMatrixDefinitionDryRun(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MatrixAttributeDefinitionDto $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateMatrixDefinitionDryRun', func_get_args());
    }

    public function updateMetadata(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionMetadataUpdateRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateMetadata', func_get_args());
    }

    public function updateName(string $productId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductTemplateRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateName', func_get_args());
    }

    public function updateNodeAttributeColumnValue(string $id, string $attributeDefinitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateCategoryColumnAttributeRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateNodeAttributeColumnValue', func_get_args());
    }

    public function updateNodeAttributeMatrixValue(string $id, string $attributeDefinitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateCategoryMatrixAttributeRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateNodeAttributeMatrixValue', func_get_args());
    }

    public function updateNodeAttributeValue(string $id, string $attributeDefinitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateCategoryAttributeRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateNodeAttributeValue', func_get_args());
    }

    public function updateNumber(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateAttributeGroupNumberRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateNumber', func_get_args());
    }

    public function updateOrderProductConnections(string $id, string $relationId, string $connectedProductId, array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateOrderProductConnections', func_get_args());
    }

    public function updateOrderProductRelation(string $id, string $relationId, array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateOrderProductRelation', func_get_args());
    }

    public function updateOrderRelation(string $id, array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateOrderRelation', func_get_args());
    }

    public function updateProduct(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductMetadataUpdateRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateProduct', func_get_args());
    }

    public function updateProductAttribute(string $id, string $definitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeValueValues $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateProductAttribute', func_get_args());
    }

    public function updateProductAttributes(string $id, array $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateProductAttributes', func_get_args());
    }

    public function updateProductBundleQuantity(string $id, string $complementaryProductId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductBundleRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateProductBundleQuantity', func_get_args());
    }

    public function updateProductGroupAttribute(string $id, string $definitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductVariantAttributeDto $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateProductGroupAttribute', func_get_args());
    }

    public function updateProductGroupsAttributeVlaSettings(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SaveProductsVlaSettingsByIdsRequest $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateProductGroupsAttributeVlaSettings', func_get_args());
    }

    public function updateProductVariantAttribute(string $id, string $definitionId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductVariantAttributeDto $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateProductVariantAttribute', func_get_args());
    }

    public function updateProductVariantsAttributeVlaSettings(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SaveProductsVlaSettingsByIdsRequest $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateProductVariantsAttributeVlaSettings', func_get_args());
    }

    public function updateRelatedProductsRelationSortingOrderSource(string $id, string $sortingOrderSource): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateRelatedProductsRelationSortingOrderSource', func_get_args());
    }

    public function updateRelation(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateRelation', func_get_args());
    }

    public function updateRelationDirection(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationDirectionUpdateRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateRelationDirection', func_get_args());
    }

    public function updateSelectValue(string $id, string $valueId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateSelectValueRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateSelectValue', func_get_args());
    }

    public function upsertAttributesByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SaveProductsAttributesByIdsRequest $requestBody, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('upsertAttributesByIds', func_get_args());
    }

    public function validateAttribute(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeValidationRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('validateAttribute', func_get_args());
    }

    public function validateProducts(array $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('validateProducts', func_get_args());
    }

    public function validateValue(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ValueValidationRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('validateValue', func_get_args());
    }

}
