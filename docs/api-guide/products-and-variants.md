# Products and variants

This page lists every `2c19c082ed473e21` API operation in this function group (84 operations). It is generated from the pinned OpenAPI specification; regenerate it after changing the active API revision with `php bin/build-api-change-guide`.

For a step-by-step migration, use [How to add or change things in Bluestone PIM](../making-pim-changes.md) and its worked examples. Each row shows what the operation does, its exact SDK operation ID and route, required inputs, request schema fields and success/error response codes. `GET` reads data; `POST` may create, update, validate, search or submit work, so follow the summary and schema to see its purpose.

Pinned request schemas: [pim](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json).

## pim / Bulk

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Delete products attributes. | `DELETE /pim/products/attributes` | `deleteProductsAttribute` | none | [DeleteProductsAttributesBulkRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.DeleteProductsAttributesBulkRequest) (application/json; required: `productIds`; fields: `attributeDefinitionId`, `productIds`) | `202, 400` |
| Read the status of a background task. | `GET /pim/async/status/{taskId}` | `getJobStatus` | path: `taskId` | none | `200, 400, 404` |
## pim / Product groups

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Assign multiple product variants groups to a variant family. | `POST /pim/products/groups/append/by-ids` | `addProductGroups` | none | [BulkAssignGroupsRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.BulkAssignGroupsRequest) (application/json; required: `familyVariantId`, `productIds`; fields: `familyVariantId`, `productIds`) | `204, 400, 404` |
| Create variant family. | `POST /pim/products/{id}/groups` | `convertToProductFamily` | path: `id` | none | `201, 400, 404, 409` |
| Retrieve group level attribute. | `GET /pim/products/{id}/groups/attributes/{definitionId}` | `getProductGroupAttribute` | path: `id`, path: `definitionId` | none | `200, 400, 404` |
| Update product group order. | `PUT /pim/products/{id}/groups/{groupId}/order` | `moveProductGroup` | path: `id`, path: `groupId`, query: `position` | none | `200, 400, 404` |
| Unassign product group from variant family. | `DELETE /pim/products/{id}/groups/{groupId}` | `unassignProductGroup` | path: `id`, path: `groupId` | none | `204, 400, 404` |
| Update group level attribute (VLA). | `PUT /pim/products/{id}/groups/attributes/{definitionId}` | `updateProductGroupAttribute` | path: `id`, path: `definitionId` | [ProductVariantAttributeDto](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.ProductVariantAttributeDto) (application/json; fields: `copy`, `definingAttributes`, `locked`, `mandatory`) | `204, 400, 404` |
| Update group level attribute (VLA) for multiple products. | `PUT /pim/products/groups/attributes/vla/by-ids` | `updateProductGroupsAttributeVlaSettings` | none | [SaveProductsVlaSettingsByIdsRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.SaveProductsVlaSettingsByIdsRequest) (application/json; required: `attributeDefinitionId`, `productIds`; fields: `attributeDefinitionId`, `copy`, `definingAttributes`, `locked`, `mandatory`, `productIds`) | `200, 400, 404` |
## pim / Product policy

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Add policy to products for category id. | `POST /pim/catalogs/{id}/products/policy` | `addPolicyToProductsForCategoryId` | path: `id` | [PolicyRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.PolicyRequest) (application/json; required: `readOnly`; fields: `policyId`, `readOnly`) | `202, 400` |
| Add policy to products for category node id. | `POST /pim/catalogs/nodes/{id}/products/policy` | `addPolicyToProductsForCategoryNodeId` | path: `id` | [PolicyRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.PolicyRequest) (application/json; required: `readOnly`; fields: `policyId`, `readOnly`) | `202, 400` |
| Delete policy from products for category id. | `DELETE /pim/catalogs/{id}/products/policy/{policyId}/{policyType}` | `deletePolicyFromProductsForCategoryId` | path: `id`, path: `policyId`, path: `policyType` | none | `202, 400` |
| Delete policy from products for category node id. | `DELETE /pim/catalogs/nodes/{id}/products/policy/{policyId}/{policyType}` | `deletePolicyFromProductsForCategoryNodeId` | path: `id`, path: `policyId`, path: `policyType` | none | `202, 400` |
| Get categories by policy id. | `GET /pim/policy/{id}/catalogs/products` | `getCatalogByPolicyId` | path: `id` | none | `200, 400, 404` |
| Get catalog node by policy id. | `GET /pim/policy/{id}/catalogs/nodes/products` | `getCatalogNodeByPolicyId` | path: `id` | none | `200, 400, 404` |
| Get policy by category id. | `GET /pim/catalogs/{id}/products/policy` | `getPolicyByCategoryId` | path: `id` | none | `200, 400, 404` |
| Get policy by category node id. | `GET /pim/catalogs/nodes/{id}/products/policy` | `getPolicyByCategoryNodeId` | path: `id` | none | `200, 400, 404` |
## pim / Product variants

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Assign product variant. | `PUT /pim/products/{id}/variants/{variantProductId}` | `addProductVariant` | path: `id`, path: `variantProductId` | none | `204, 400, 404, 409` |
| Assign multiple product variants to a variant group. | `POST /pim/products/variants/append/by-ids` | `addProductVariants` | none | [AddProductVariantsRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.AddProductVariantsRequest) (application/json; required: `productIds`, `variantGroupId`; fields: `productIds`, `variantGroupId`) | `204, 400, 404` |
| Retrieve variant level attribute (VLA). | `GET /pim/products/{id}/variants/attributes/{definitionId}` | `getProductVariantAttribute` | path: `id`, path: `definitionId` | none | `200, 400, 404` |
| Update product variant order. | `PUT /pim/products/{id}/variants/{variantProductId}/order` | `moveProductVariant` | path: `id`, path: `variantProductId`, query: `targetPosition` | none | `200, 400, 404` |
| Create variant group. | `POST /pim/products/{id}/variants` | `setProductGroup` | path: `id` | none | `201, 400, 404, 409` |
| Unassign product variant. | `DELETE /pim/products/{id}/variants/{variantProductId}` | `unassignProductVariant` | path: `id`, path: `variantProductId` | none | `204, 400, 404` |
| Update variant level attribute (VLA). | `PUT /pim/products/{id}/variants/attributes/{definitionId}` | `updateProductVariantAttribute` | path: `id`, path: `definitionId` | [ProductVariantAttributeDto](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.ProductVariantAttributeDto) (application/json; fields: `copy`, `definingAttributes`, `locked`, `mandatory`) | `204, 400, 404` |
| Update variant level attribute (VLA) for multiple products. | `PUT /pim/products/variants/attributes/vla/by-ids` | `updateProductVariantsAttributeVlaSettings` | none | [SaveProductsVlaSettingsByIdsRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.SaveProductsVlaSettingsByIdsRequest) (application/json; required: `attributeDefinitionId`, `productIds`; fields: `attributeDefinitionId`, `copy`, `definingAttributes`, `locked`, `mandatory`, `productIds`) | `200, 400, 404` |
## pim / Products

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Archive products by IDs. | `PUT /pim/products/archive/by-ids` | `archiveProductsByIds` | none | [ProductArchiveStateRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.ProductArchiveStateRequest) (application/json; fields: `ids`) | `202, 400` |
| Create a copy of product. | `POST /pim/products/copy` | `copyAndUpdateProduct` | none | [CopyProductRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.CopyProductRequest) (application/json; required: `name`; fields: `id`, `name`, `number`) | `200, 400` |
| Create a copy of product. | `POST /pim/products/{id}/copy` | `copyProduct` | path: `id` | none | `201, 400, 404, 409` |
| Create new product. | `POST /pim/products` | `createProduct` | none | [ProductCreateRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.ProductCreateRequest) (application/json; required: `name`; fields: `assets`, `attributes`, `categories`, `description`, `labels`, `name`, `number`, `relatedProductsRelationSortingOrderSource`, `type`) | `201, 400, 409` |
| Show product filtered by id with view. | `POST /pim/products/{id}/get/views` | `findProductViewsById` | path: `id` | [ProductIdViewsRequestDto](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.ProductIdViewsRequestDto) (application/json; fields: `views`) | `200, 400, 404` |
| Show product details. | `GET /pim/products/{id}` | `getProduct` | path: `id` | none | `200, 400, 404` |
| Get products using cursor with details from given views. | `POST /pim/products/cursor/views/all` | `getProductsWithCursorAndViews` | none | [CursorWithViewsRequestDto](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.CursorWithViewsRequestDto) (application/json; fields: `count`, `cursor`, `views`) | `200, 400` |
| Show list of products filtered by asset ids with details from given views. | `POST /pim/products/list/views/by-assets` | `listProductsViewsByAssets` | none | [AssetIdListViewsRequestDto](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.AssetIdListViewsRequestDto) (application/json; required: `assetIds`; fields: `assetIds`, `page`, `pageSize`, `views`) | `200, 400` |
| Show list of products filtered by ids with details from given views. | `POST /pim/products/list/views/by-ids` | `listProductsViewsByIds` | none | [ProductIdListViewsRequestDto](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.ProductIdListViewsRequestDto) (application/json; required: `ids`; fields: `ids`, `views`) | `200, 400` |
| Show list of products filtered by numbers with details from given views. | `POST /pim/products/list/views/by-numbers` | `listProductsViewsByNumbers` | none | [ProductNumberListViewsRequestDto](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.ProductNumberListViewsRequestDto) (application/json; fields: `numbers`, `page`, `pageSize`, `views`) | `200, 400` |
| Show list of products filtered by type with details from given views. | `POST /pim/products/cursor/views/by-types` | `listProductsViewsByTypes` | none | [ProductViewsByTypeRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.ProductViewsByTypeRequest) (application/json; required: `types`; fields: `count`, `cursor`, `types`, `views`) | `200, 400` |
| Show product overview. | `GET /pim/products/{id}/overview` | `productOverview` | path: `id` | none | `200, 400, 404` |
| Unarchive products by ids. | `PUT /pim/products/unarchive/by-ids` | `unarchiveProductsByIds` | none | [ProductArchiveStateRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.ProductArchiveStateRequest) (application/json; fields: `ids`) | `200, 400, 409` |
| Update product main details, supports partial update. | `PATCH /pim/products/{id}` | `updateProduct` | path: `id` | [ProductMetadataUpdateRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.ProductMetadataUpdateRequest) (application/json; fields: `description`, `name`, `number`) | `204, 400, 404, 409` |
## pim / Products bundles

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Add product to bundle. | `POST /pim/products/{id}/bundles/{complementaryProductId}` | `addProductToBundle` | path: `id`, path: `complementaryProductId` | [ProductBundleRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.ProductBundleRequest) (application/json; fields: `quantity`) | `204, 400, 404` |
| Create product bundle. | `POST /pim/products/{id}/bundles` | `createProductBundle` | path: `id` | none | `204, 400, 404` |
| Delete product from bundle. | `DELETE /pim/products/{id}/bundles/{complementaryProductId}` | `deleteProductFromBundle` | path: `id`, path: `complementaryProductId` | none | `204, 400, 404` |
| Change a product's position in a bundle. | `PUT /pim/products/{id}/bundles/{complementaryProductId}/order` | `moveProductInBundle` | path: `id`, path: `complementaryProductId`, query: `targetPosition` | none | `204, 400, 404` |
| Update the quantity of a product included in a bundle. | `PUT /pim/products/{id}/bundles/{complementaryProductId}` | `updateProductBundleQuantity` | path: `id`, path: `complementaryProductId` | [ProductBundleRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.ProductBundleRequest) (application/json; fields: `quantity`) | `204, 400, 404` |
## pim / Products categories

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Assigns an existing product to one or more existing catalog categories. | `POST /pim/products/{id}/categories` | `addProductToCategories` | path: `id` | [CategoryReferenceRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.CategoryReferenceRequest) (application/json; required: `categoryIds`; fields: `categoryIds`) | `204, 400, 404` |
| Add products as children of category. | `POST /pim/products/categories/by-ids` | `assignProductsToCategory` | none | [AssignProductsToCategoryRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.AssignProductsToCategoryRequest) (application/json; fields: `categoryId`, `productIds`) | `204, 400, 404` |
| List of category IDs the product resides in. | `GET /pim/products/{id}/categories` | `getProductsCategories` | path: `id` | none | `200, 400, 404` |
| Unassigns a product from a single catalog category. | `DELETE /pim/products/{id}/categories/{categoryId}` | `removeProductFromCategory` | path: `id`, path: `categoryId` | none | `204, 400, 404` |
## pim / Products labels

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Add product label to the set of products. | `POST /pim/products/labels/by-ids` | `addLabelToProducts` | none | [ModifyLabelInProductsRequestDto](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.ModifyLabelInProductsRequestDto) (application/json; required: `labelId`; fields: `labelId`, `productIds`) | `204, 400, 404` |
| Add product labels to a product. | `POST /pim/products/{id}/labels` | `addLabelsToProduct` | path: `id` | [LabelReferenceRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.LabelReferenceRequest) (application/json; fields: `labelIds`) | `204, 400, 404` |
| Retrieve product labels. | `GET /pim/products/{id}/labels` | `getProductsLabels` | path: `id` | none | `200, 400, 404` |
| Remove product label from product. | `DELETE /pim/products/{id}/labels/{labelId}` | `removeLabelFromProduct` | path: `id`, path: `labelId` | none | `204, 400, 404` |
| Remove product label from the set of products. | `DELETE /pim/products/labels/by-ids` | `removeLabelFromProducts` | none | [ModifyLabelInProductsRequestDto](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.ModifyLabelInProductsRequestDto) (application/json; required: `labelId`; fields: `labelId`, `productIds`) | `204, 400` |
| Remove a set of labels from a product. | `DELETE /pim/products/{id}/labels` | `removeLabelsFromProduct` | path: `id` | [RemoveLabelsFromProductRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.RemoveLabelsFromProductRequest) (application/json; required: `labelIds`; fields: `labelIds`) | `204, 400` |
## pim / Products relations

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Relate a product to another product under a relation definition. | `POST /pim/products/{id}/connections/products` | `createProductConnection` | path: `id` | [ProductConnectionRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.ProductConnectionRequest) (application/json; fields: `quantity`, `relationId`, `to`) | `204, 400, 404` |
| Relate a product to several other products at once under one relation definition. | `POST /pim/products/{id}/connections/products/{relationId}` | `createProductConnections` | path: `id`, path: `relationId` | application/json | `204, 400, 404` |
| Remove multiple product relations from a specified product and relation. | `DELETE /pim/products/{id}/connections/products/{relationId}/bulk` | `deleteManyProductConnections` | path: `id`, path: `relationId` | application/json | `204, 400, 404` |
| Delete relation between two products. | `DELETE /pim/products/{id}/connections/products/{relationId}/{connectedProductId}` | `deleteProductConnection` | path: `id`, path: `relationId`, path: `connectedProductId` | none | `204, 400, 404` |
| Remove every relation of one relation definition from a product. | `DELETE /pim/products/{id}/connections/products/{relationId}` | `deleteProductConnectionsByRelation` | path: `id`, path: `relationId` | none | `204, 400, 404` |
| Retrieve related products for given product and relation. | `GET /pim/products/{id}/connections/products/{relationId}` | `getProductForRelation` | path: `id`, path: `relationId`, query: `direction` | none | `200, 400, 404` |
| List the relation definitions a product participates in, each with its direction(s). | `GET /pim/products/{id}/connections` | `getProductRelations` | path: `id` | none | `200, 400, 404` |
| Update connection quantity. | `PUT /pim/products/{id}/connections/{rightProductId}/{relationId}` | `updateConnectionQuantity` | path: `id`, path: `rightProductId`, path: `relationId` | [ProductConnectionUpdateRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.ProductConnectionUpdateRequest) (application/json; fields: `quantity`) | `204, 400, 404` |
| Update the order of products in a product relation. | `PUT /pim/products/{id}/connections/products/{relationId}/{connectedProductId}/order` | `updateOrderProductConnections` | path: `id`, path: `relationId`, path: `connectedProductId`, query: `targetPosition`, query: `direction` | none | `204, 400, 404` |
| Update the order of relation definitions on product. | `PUT /pim/products/{id}/connections/products/{relationId}/order` | `updateOrderProductRelation` | path: `id`, path: `relationId`, query: `targetPosition` | none | `204, 400, 404` |
| Update a product relations sorting order source. | `PUT /pim/products/{id}/connections/products/order/relations/sortingOrderSource/{sortingOrderSource}` | `updateRelatedProductsRelationSortingOrderSource` | path: `id`, path: `sortingOrderSource` | none | `204, 400, 404` |
## pim / Products templates

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Create product template. | `POST /pim/products/templates/{productId}` | `createProductTemplate` | path: `productId` | [ProductTemplateRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.ProductTemplateRequest) (application/json; required: `name`; fields: `name`) | `201, 400, 404, 409` |
| Delete product template. | `DELETE /pim/products/templates/{productId}` | `deleteProductTemplate` | path: `productId` | none | `204, 400, 404` |
| List all product templates. | `GET /pim/products/templates` | `findProductTemplates` | none | none | `200, 400` |
| Show details of product template. | `GET /pim/products/templates/{productId}` | `getProductTemplate` | path: `productId` | none | `200, 400, 404` |
| Update product template name. | `PUT /pim/products/templates/{productId}` | `updateName` | path: `productId` | [ProductTemplateRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.ProductTemplateRequest) (application/json; required: `name`; fields: `name`) | `204, 400, 404, 409` |
## pim / Relation policy

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Add policy to the relation. | `POST /pim/relations/{id}/policy` | `addPolicyToRelation` | path: `id` | [PolicyRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.PolicyRequest) (application/json; required: `readOnly`; fields: `policyId`, `readOnly`) | `204, 400, 404` |
| Delete policy. | `DELETE /pim/relations/{id}/policy/{policyId}/{policyType}` | `deletePolicyForRelation` | path: `id`, path: `policyId`, path: `policyType` | none | `204, 400, 404` |
| Get relation policies. | `GET /pim/relations/{id}/policy` | `getByRelationId` | path: `id` | none | `200, 400, 404` |
| Get relations by policy ID. | `GET /pim/policy/{id}/relations` | `getRelationsByPolicyId` | path: `id` | none | `200, 400, 404` |
## pim / Relations

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Create new relation definition. | `POST /pim/relations` | `createRelation` | none | [RelationRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.RelationRequest) (application/json; required: `name`; fields: `description`, `direction`, `name`, `number`, `quantityEnabled`, `reverseName`) | `201, 400, 409` |
| Delete relation definition. | `DELETE /pim/relations/{id}` | `delete` | path: `id` | none | `204, 400, 404` |
| Show relation definition details. | `GET /pim/relations/{id}` | `findOne` | path: `id` | none | `200, 400, 404` |
| Show all relation definitions. | `GET /pim/relations` | `findRelations` | none | none | `200, 400` |
| Filter relation definitions. | `POST /pim/relations/list` | `getFilteredRelations` | none | [RelationFilteringRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.RelationFilteringRequest) (application/json; fields: `filters`, `page`, `pageSize`) | `200, 400` |
| Show all product relations using relation definition. | `GET /pim/relations/{id}/products/connections` | `getProductConnectionsByRelationId` | path: `id` | none | `200, 400` |
| Partially update relation definition. | `PATCH /pim/relations/{id}` | `partialUpdateRelation` | path: `id` | [RelationPartialUpdateRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.RelationPartialUpdateRequest) (application/json; fields: `description`, `name`, `number`, `quantityEnabled`, `reverseName`) | `204, 400, 404, 409` |
| Update relation definition order. | `PUT /pim/relations/{id}/order` | `updateOrderRelation` | path: `id`, query: `targetPosition` | none | `204, 400, 404` |
| [DEPRECATED; EOL 2027-06-09] Update relation definition. (deprecated) | `PUT /pim/relations/{id}` | `updateRelation` | path: `id` | [RelationRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.RelationRequest) (application/json; required: `name`; fields: `description`, `direction`, `name`, `number`, `quantityEnabled`, `reverseName`) | `204, 400, 404, 409` |
| Update relation definition direction. | `POST /pim/relations/{id}/direction` | `updateRelationDirection` | path: `id` | [RelationDirectionUpdateRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.RelationDirectionUpdateRequest) (application/json; required: `direction`; fields: `direction`) | `200, 400, 404, 409` |
