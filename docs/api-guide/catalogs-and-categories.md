# Catalogs and categories

This page lists every `2c19c082ed473e21` API operation in this function group (45 operations). It is generated from the pinned OpenAPI specification; regenerate it after changing the active API revision with `php bin/build-api-change-guide`.

For a step-by-step migration, use [How to add or change things in Bluestone PIM](../making-pim-changes.md) and its worked examples. Each row shows what the operation does, its exact SDK operation ID and route, required inputs, request schema fields and success/error response codes. `GET` reads data; `POST` may create, update, validate, search or submit work, so follow the summary and schema to see its purpose.

Pinned request schemas: [pim](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json).

## pim / Catalog nodes

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Add product to the catalog node/category. | `POST /pim/catalogs/nodes/{id}/products` | `addCategoryProducts` | path: `id` | [CategoryProductRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.CategoryProductRequest) (application/json; fields: `productId`) | `204, 400, 404` |
| Create a catalog node (category) or a top-level catalog. | `POST /pim/catalogs/nodes` | `createCategory` | none | [CreateCategoryRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.CreateCategoryRequest) (application/json; required: `name`; fields: `name`, `number`, `parentId`) | `201, 400, 409` |
| Delete a catalog node (category) and its entire subtree. | `DELETE /pim/catalogs/nodes/{id}` | `deleteCategoryNode` | path: `id` | none | `202, 400, 404` |
| Remove product from the catalog node/category. | `DELETE /pim/catalogs/nodes/{id}/products/{productId}` | `deleteCategoryProducts` | path: `id`, path: `productId` | none | `204, 400, 404` |
| List all catalog nodes/categories that use the attribute definition in a Category Level Attribute (CLA). | `GET /pim/catalogs/nodes/attributeDefinition/{attributeDefinitionId}` | `findByCategoryLevelAttributes` | path: `attributeDefinitionId` | none | `200, 400, 404` |
| List the direct child nodes (categories) of a catalog node. | `GET /pim/catalogs/nodes/{id}/children` | `getCatalogNodeChildren` | path: `id` | none | `200, 400, 404` |
| List catalog node/category products. | `GET /pim/catalogs/nodes/{id}/products` | `getCategoryProducts` | path: `id` | none | `200, 400, 404` |
| Describe catalog nodes/categories. | `POST /pim/catalogs/nodes/list` | `getFilteredNodes` | none | [CategoryFilteringRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.CategoryFilteringRequest) (application/json; fields: `filters`, `page`, `pageSize`) | `200, 400` |
| Describe catalog node/category. | `GET /pim/catalogs/nodes/{id}` | `getNode` | path: `id` | none | `200, 400, 404` |
| List catalog node/category path to root. | `GET /pim/catalogs/nodes/{id}/path` | `getPathToNode` | path: `id` | none | `200, 400, 404` |
| Move catalog node/category to new parent. | `PUT /pim/catalogs/nodes/{id}/move` | `moveCatalogNode` | path: `id` | [MoveCategoryRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.MoveCategoryRequest) (application/json; fields: `parentId`) | `204, 400, 404` |
| Partially update a catalog node's (category's) main details. | `PATCH /pim/catalogs/nodes/{id}` | `partialUpdateCatalogNode` | path: `id` | [CategoryMetadataUpdateRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.CategoryMetadataUpdateRequest) (application/json; fields: `description`, `name`, `number`) | `204, 400, 404, 409` |
| Update catalog node/category. | `PUT /pim/catalogs/nodes/{id}` | `updateCatalogNode` | path: `id` | [UpdateCategoryRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.UpdateCategoryRequest) (application/json; fields: `description`, `name`, `number`) | `204, 400, 404, 409` |
| Change category order. | `PUT /pim/catalogs/nodes/{id}/order` | `updateCatalogNodeOrder` | path: `id`, query: `targetPosition` | none | `204, 400, 404` |
## pim / Catalogs

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Archive catalog. | `DELETE /pim/catalogs/{id}` | `archive` | path: `id` | none | `202, 400, 404` |
| List all nodes/categories from catalog. | `GET /pim/catalogs/{id}/nodes` | `getCategoryTree` | path: `id` | none | `200, 400, 404` |
| Get categories with view and cursor

Retrieve a paginated list of child categories from the specified catalog using cursor-based pagination and
view filtering. | `POST /pim/catalogs/{id}/nodes/cursor/view` | `getCategoryView` | path: `id` | [CategoryWithCursorAndViewRequestDto](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.CategoryWithCursorAndViewRequestDto) (application/json; fields: `count`, `cursor`, `views`) | `200, 400, 404` |
| List top-level catalogs. | `GET /pim/catalogs` | `listCatalogs` | none | none | `200, 400` |
| Unarchive catalog. | `PUT /pim/catalogs/{id}` | `unarchive` | path: `id` | none | `204, 400, 404` |
## pim / Category attributes

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Assigns an attribute to Catalog/Category. | `POST /pim/catalogs/nodes/{id}/category-attributes/{definitionId}` | `assignDefinitionToCategory` | path: `id`, path: `definitionId` | none | `204, 400, 404, 409` |
| List all Catalog or Category attributes. | `GET /pim/catalogs/nodes/{id}/category-attributes` | `getAttributesAssociatedToCategory` | path: `id` | none | `200, 400, 404` |
| Sets the value of a dictionary Catalog or Category attribute. | `PUT /pim/catalogs/nodes/{id}/category-attributes/{definitionId}/dictionary` | `setDictionaryDefinitionValue` | path: `id`, path: `definitionId` | [UpdateDictionaryCategoryAttributeValuesRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.UpdateDictionaryCategoryAttributeValuesRequest) (application/json; required: `dictionaryIds`; fields: `dictionaryIds`) | `204, 400, 404, 409` |
| Sets the value of a select/multiselect Catalog or Category attribute. | `PUT /pim/catalogs/nodes/{id}/category-attributes/{definitionId}/select` | `setSelectDefinitionValue` | path: `id`, path: `definitionId` | [UpdateSelectCategoryAttributeValuesRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.UpdateSelectCategoryAttributeValuesRequest) (application/json; required: `selectIds`; fields: `selectIds`) | `204, 400, 404, 409` |
| Sets the value of a simple Catalog or Category attribute. | `PUT /pim/catalogs/nodes/{id}/category-attributes/{definitionId}/simple` | `setSimpleDefinitionValue` | path: `id`, path: `definitionId` | [UpdateSimpleCategoryAttributeValueRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.UpdateSimpleCategoryAttributeValueRequest) (application/json; required: `value`; fields: `value`) | `204, 400, 404` |
| Unassigns an attribute from Catalog/Category. | `DELETE /pim/catalogs/nodes/{id}/category-attributes/{definitionId}` | `unassignDefinitionFromCategory` | path: `id`, path: `definitionId` | none | `204, 400, 404` |
## pim / Category level attributes

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Create a simple Category Level Attribute (CLA) and schedule propagation task. | `POST /pim/catalogs/nodes/{id}/attributes/{attributeDefinitionId}` | `createCatalogNodeAttribute` | path: `id`, path: `attributeDefinitionId` | [CategoryAttributeRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.CategoryAttributeRequest) (application/json; fields: `value`) | `202, 400, 404` |
| Create column Category Level Attribute (CLA) and schedule propagation task. | `POST /pim/catalogs/nodes/{id}/attributes/{attributeDefinitionId}/column` | `createCatalogNodeAttributeColumn` | path: `id`, path: `attributeDefinitionId` | [CategoryColumnAttributeRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.CategoryColumnAttributeRequest) (application/json; fields: `column`) | `202, 400, 404` |
| Create compound Category Level Attribute (CLA) and schedule propagation task. | `POST /pim/catalogs/nodes/{id}/attributes/{attributeDefinitionId}/compound` | `createCatalogNodeAttributeCompound` | path: `id`, path: `attributeDefinitionId` | none | `202, 400, 404` |
| Create dictionary Category Level Attribute (CLA) and schedule propagation task. | `POST /pim/catalogs/nodes/{id}/attributes/{attributeDefinitionId}/dictionary` | `createCatalogNodeAttributeDictionary` | path: `id`, path: `attributeDefinitionId` | none | `202, 400, 404` |
| Create matrix Category Level Attribute (CLA) and schedule propagation task. | `POST /pim/catalogs/nodes/{id}/attributes/{attributeDefinitionId}/matrix` | `createCatalogNodeAttributeMatrix` | path: `id`, path: `attributeDefinitionId` | [CategoryMatrixAttributeRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.CategoryMatrixAttributeRequest) (application/json; fields: `matrix`) | `202, 400, 404` |
| Delete Category Level Attribute (CLA) from catalog node/category. | `DELETE /pim/catalogs/nodes/{id}/attributes/{attributeDefinitionId}` | `deleteAttributeFromNode` | path: `id`, path: `attributeDefinitionId` | none | `204, 400, 404` |
| List Category Level Attributes (CLA) across all catalog nodes/categories. | `GET /pim/catalogs/nodes/attributes` | `list` | none | none | `200, 400` |
| List the Category Level Attributes (CLA) of one catalog node/category. | `GET /pim/catalogs/nodes/{id}/attributes` | `listAttributesAttachedToGivenNode` | path: `id` | none | `200, 400, 404` |
| Set values for dictionary Category Level Attribute (CLA) and schedule propagation task. | `POST /pim/catalogs/nodes/{id}/attributes/{attributeDefinitionId}/dictionary/values` | `setDictionaryAttributeValuesForCategory` | path: `id`, path: `attributeDefinitionId` | [SetCategoryDictionaryAttributeValuesRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.SetCategoryDictionaryAttributeValuesRequest) (application/json; fields: `valueIds`) | `202, 400, 404` |
| Update column Category Level Attribute (CLA) and schedule propagation task. | `PUT /pim/catalogs/nodes/{id}/attributes/{attributeDefinitionId}/column` | `updateNodeAttributeColumnValue` | path: `id`, path: `attributeDefinitionId` | [UpdateCategoryColumnAttributeRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.UpdateCategoryColumnAttributeRequest) (application/json; fields: `column`, `copyAttribute`, `locked`, `mandatory`) | `202, 400, 404` |
| Update matrix Category Level Attribute (CLA) and schedule propagation task. | `PUT /pim/catalogs/nodes/{id}/attributes/{attributeDefinitionId}/matrix` | `updateNodeAttributeMatrixValue` | path: `id`, path: `attributeDefinitionId` | [UpdateCategoryMatrixAttributeRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.UpdateCategoryMatrixAttributeRequest) (application/json; fields: `copyAttribute`, `locked`, `mandatory`, `matrix`) | `202, 400, 404` |
| Update the value or the propagation, lock and mandatory flags of a Category Level Attribute (CLA) and schedule
propagation task. | `PATCH /pim/catalogs/nodes/{id}/attributes/{attributeDefinitionId}` | `updateNodeAttributeValue` | path: `id`, path: `attributeDefinitionId` | [UpdateCategoryAttributeRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.UpdateCategoryAttributeRequest) (application/json; fields: `attributeValue`, `copyAttribute`, `locked`, `mandatory`) | `202, 400, 404` |
## pim / Category policy

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Add policy to category. | `POST /pim/catalogs/{id}/policy` | `addPolicyToCategory` | path: `id` | [PolicyRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.PolicyRequest) (application/json; required: `readOnly`; fields: `policyId`, `readOnly`) | `204, 400, 404, 409` |
| Add policy to category node. | `POST /pim/catalogs/nodes/{id}/policy` | `addPolicyToCategoryNode` | path: `id` | [PolicyRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.PolicyRequest) (application/json; required: `readOnly`; fields: `policyId`, `readOnly`) | `204, 400, 404, 409` |
| Delete policy by category and policy id. | `DELETE /pim/catalogs/{id}/policy/{policyId}/{policyType}` | `deletePolicyByCategoryAndPolicyId` | path: `id`, path: `policyId`, path: `policyType` | none | `204, 400, 404` |
| Delete policy by category node and policy id. | `DELETE /pim/catalogs/nodes/{id}/policy/{policyId}/{policyType}` | `deletePolicyByCategoryNodeAndPolicyId` | path: `id`, path: `policyId`, path: `policyType` | none | `204, 400, 404` |
| Get policies by category node id. | `GET /pim/catalogs/nodes/{id}/policy` | `getByCategoryNodeId` | path: `id` | none | `200, 400, 404` |
| Get categories by policy id. | `GET /pim/policy/{id}/catalogs` | `getCategoriesByPolicyId` | path: `id` | none | `200, 400, 404` |
| Get categories node by policy id. | `GET /pim/policy/{id}/catalogs/nodes` | `getCategoriesNodeByPolicyId` | path: `id` | none | `200, 400, 404` |
| Get policies by category id. | `GET /pim/catalogs/{id}/policy` | `getPoliciesByCategoryId` | path: `id` | none | `200, 400, 404` |
