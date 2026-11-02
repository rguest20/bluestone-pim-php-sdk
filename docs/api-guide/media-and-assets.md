# Media and assets

This page lists every `2c19c082ed473e21` API operation in this function group (69 operations). It is generated from the pinned OpenAPI specification; regenerate it after changing the active API revision with `php bin/build-api-change-guide`.

For a step-by-step migration, use [How to add or change things in Bluestone PIM](../making-pim-changes.md) and its worked examples. Each row shows what the operation does, its exact SDK operation ID and route, required inputs, request schema fields and success/error response codes. `GET` reads data; `POST` may create, update, validate, search or submit work, so follow the summary and schema to see its purpose.

Pinned request schemas: [media-bank](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json) · [pim](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json).

## media-bank / Asset attributes

Call these with the `media-bank` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Add attribute to assets. | `POST /media-bank/assets/attributes/add/by-ids` | `addAttributeToAssets` | none | [AddAttributeToAssetsByIdsRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.AddAttributeToAssetsByIdsRequest) (application/json; required: `attributeDefinitionId`; fields: `assetIds`, `attributeDefinitionId`) | `204, 400, 404` |
| Upsert assets attribute. | `PUT /media-bank/assets/attributes/by-ids` | `addAttributeToAssets_1` | none | [SaveAttributeToAssetsByIdsRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.SaveAttributeToAssetsByIdsRequest) (application/json; required: `attributeDefinitionId`, `attributeValues`; fields: `assetIds`, `attributeDefinitionId`, `attributeValues`) | `204, 400, 404` |
| Append values to dictionary asset's attribute | `POST /media-bank/assets/attributes/dictionary/append/by-ids` | `appendAssetDictionaryAttributeValues` | none | [DictionaryAssetAttributeValuesRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.DictionaryAssetAttributeValuesRequest) (application/json; required: `assetIds`, `attributeDefinitionId`, `dictionaryValueIds`; fields: `attributeDefinitionId`, `assetIds`, `dictionaryValueIds`) | `204, 400, 404` |
| Append select/multiselect values to assets. | `POST /media-bank/assets/attributes/select/append/by-ids` | `appendSelectValues` | none | [AppendSelectValuesToAssetsAttributeParams](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.AppendSelectValuesToAssetsAttributeParams) (application/json; required: `assetsIds`, `attributeDefinitionId`, `selectValueIds`; fields: `attributeDefinitionId`, `assetsIds`, `selectValueIds`) | `204, 400, 404` |
| Assign attribute to asset. | `POST /media-bank/assets/{id}/attributes/{definitionId}` | `assignAttributeToAsset` | path: `id`, path: `definitionId` | none | `204, 400, 404, 409` |
| Deduct values to dictionary asset's attribute | `POST /media-bank/assets/attributes/dictionary/deduct/by-ids` | `deductAssetDictionaryAttributeValues` | none | [DictionaryAssetAttributeValuesRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.DictionaryAssetAttributeValuesRequest) (application/json; required: `assetIds`, `attributeDefinitionId`, `dictionaryValueIds`; fields: `attributeDefinitionId`, `assetIds`, `dictionaryValueIds`) | `204, 400, 404` |
| Deduct select/multiselect values from assets. | `POST /media-bank/assets/attributes/select/deduct/by-ids` | `deductSelectValues` | none | [DeductSelectValuesToAssetsAttributeParams](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.DeductSelectValuesToAssetsAttributeParams) (application/json; required: `assetsIds`, `attributeDefinitionId`, `selectValueIds`; fields: `attributeDefinitionId`, `assetsIds`, `selectValueIds`) | `204, 400, 404` |
| Unassign attribute from assets. | `DELETE /media-bank/assets/attributes` | `deleteAssetAttributes` | none | [DeleteProductsAttributesBulkRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.DeleteProductsAttributesBulkRequest) (application/json; required: `assetIds`, `attributeDefinitionId`; fields: `assetIds`, `attributeDefinitionId`) | `204, 400` |
| Get list of attributes associated to asset. | `GET /media-bank/assets/{id}/attributes` | `getAssetAttributes` | path: `id` | none | `200, 400, 404` |
| Unassign attribute from asset. | `DELETE /media-bank/assets/{id}/attributes/{definitionId}` | `unassignAttributeFromAsset` | path: `id`, path: `definitionId` | none | `204, 400, 404` |
| Set values to dictionary asset's attribute | `PUT /media-bank/assets/{id}/attributes/{definitionId}/dictionary` | `updateAssetDictionaryAttributeValues` | path: `id`, path: `definitionId` | [UpdateDictionaryAssetAttributeValuesRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.UpdateDictionaryAssetAttributeValuesRequest) (application/json; required: `dictionaryIds`; fields: `dictionaryIds`) | `204, 400, 404` |
| Set values to select asset's attribute | `PUT /media-bank/assets/{id}/attributes/{definitionId}/select` | `updateAssetSelectAttributeValues` | path: `id`, path: `definitionId` | [UpdateSelectAssetAttributeValuesRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.UpdateSelectAssetAttributeValuesRequest) (application/json; required: `selectIds`; fields: `selectIds`) | `204, 400, 404` |
| Set value to simple asset's attribute | `PUT /media-bank/assets/{id}/attributes/{definitionId}/simple` | `updateAssetSimpleAttributeValue` | path: `id`, path: `definitionId` | [UpdateSimpleAssetAttributeValueRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.UpdateSimpleAssetAttributeValueRequest) (application/json; required: `value`; fields: `value`) | `204, 400, 404` |
| Update assets attribute. | `POST /media-bank/assets/attributes/by-ids` | `updateAssetsAttribute` | none | [SaveAttributeToAssetsByIdsRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.SaveAttributeToAssetsByIdsRequest) (application/json; required: `attributeDefinitionId`, `attributeValues`; fields: `assetIds`, `attributeDefinitionId`, `attributeValues`) | `204, 400, 404` |
## media-bank / Assets

Call these with the `media-bank` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Adds labels to asset's labels. | `POST /media-bank/assets/{id}/labels` | `addLabelsToAsset` | path: `id` | [UpdateAssetsLabelsAttributeRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.UpdateAssetsLabelsAttributeRequest) (application/json; required: `labelIds`; fields: `labelIds`) | `200, 400, 404` |
| Bulk add assets label. | `POST /media-bank/assets/labels/by-ids` | `bulkAddAssetsLabels` | none | [BulkAssetsLabelUpdateRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.BulkAssetsLabelUpdateRequest) (application/json; required: `assetIds`, `labelId`; fields: `assetIds`, `labelId`) | `204, 400` |
| Bulk delete assets label. | `DELETE /media-bank/assets/labels/by-ids` | `bulkDeleteAssetsLabels` | none | [BulkAssetsLabelUpdateRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.BulkAssetsLabelUpdateRequest) (application/json; required: `assetIds`, `labelId`; fields: `assetIds`, `labelId`) | `204, 400` |
| Bulk update of asset published flag. | `PUT /media-bank/assets/published` | `bulkUpdateAssetPublished` | none | [BulkAssetPublishedUpdateRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.BulkAssetPublishedUpdateRequest) (application/json; required: `data`; fields: `data`, `force`) | `200, 400` |
| Mark current asset as deleted. | `DELETE /media-bank/assets/{id}` | `deleteAsset` | path: `id` | none | `204, 400, 403, 404, 409` |
| [DEPRECATED; EOL 2026-07-30] Describe asset. (deprecated) | `GET /media-bank/assets/{id}` | `describeAsset` | path: `id` | none | `200, 400, 404` |
| Describe working asset versions. | `GET /media-bank/assets/{id}/versions` | `describeAssetVersions` | path: `id` | none | `200, 400, 404` |
| Duplicate the asset. | `POST /media-bank/assets/{id}/duplicate` | `duplicateAsset` | path: `id` | none | `200, 400, 404` |
| Generate presigned download URLs for assets. | `POST /media-bank/assets/download` | `generateDownloadUrls` | none | [DownloadAssetsRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.DownloadAssetsRequest) (application/json; required: `assetIds`; fields: `assetIds`, `expiresInMinutes`) | `200, 400, 404` |
| Generate fixed link for latest version of asset. Full url follows the scheme: [pms-host]/latest/{url} | `PUT /media-bank/assets/{id}/generate-fixed-link` | `generateFixedLink` | path: `id` | none | `200, 400, 404` |
| Show assets filtered by id with view. | `POST /media-bank/assets/{id}/views` | `getAssetViewsById` | path: `id` | [WorkingAssetViewsRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.WorkingAssetViewsRequest) (application/json; fields: `views`) | `200, 400` |
| Show list of assets filtered by ids with details from given views. | `POST /media-bank/assets/views/by-ids` | `listAssetViewsByIds` | none | [WorkingAssetsViewsByIdsRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.WorkingAssetsViewsByIdsRequest) (application/json; fields: `ids`, `views`) | `200, 400` |
| [DEPRECATED; EOL 2026-07-30] Describe working assets. Search enabled by assetIds with paging. (deprecated) | `POST /media-bank/assets/search/by-ids` | `listAssetsByIds` | none | [DescribeWorkingAssetsByIdsSearchRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.DescribeWorkingAssetsByIdsSearchRequest) (application/json; required: `assetIds`; fields: `assetIds`, `order`, `page`, `resultsPerPage`) | `200, 400` |
| Describe working assets. Search enabled with query parameters. | `POST /media-bank/assets/search/by-numbers` | `listAssetsByNumbers` | none | [WorkingAssetsByNumbersRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.WorkingAssetsByNumbersRequest) (application/json; fields: `page`, `resultsPerPage`, `numbers`) | `200, 400` |
| List working asset using cursor. | `POST /media-bank/assets/cursor/all` | `listWorkingAssetsWithCursor` | none | [WorkingAssetCursorRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.WorkingAssetCursorRequest) (application/json; required: `count`; fields: `cursor`, `count`) | `200, 400` |
| Bulk delete assets by IDs. | `POST /media-bank/assets/delete/by-ids` | `removeAssetsByIds` | none | [BulkDeleteAssetsByIdsRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.BulkDeleteAssetsByIdsRequest) (application/json; fields: `ids`) | `204, 400, 404` |
| Removes given label from the asset's labels. | `DELETE /media-bank/assets/{id}/labels/{labelId}` | `removeLabelFromAsset` | path: `id`, path: `labelId` | none | `200, 400, 404` |
| [DEPRECATED; EOL 2027-01-03] Bulk delete operation for list of assets. (deprecated) | `DELETE /media-bank/assets/delete` | `removeListOfAssets` | query: `ids` | none | `200, 400` |
| Revert version of asset. | `POST /media-bank/assets/{id}/versions/{versionId}/revert` | `revertAsset` | path: `id`, path: `versionId` | none | `204, 400, 403, 404` |
| Sets the assets labels attribute. | `PUT /media-bank/assets/{id}/labels` | `setLabelsToAsset` | path: `id` | [UpdateAssetsLabelsAttributeRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.UpdateAssetsLabelsAttributeRequest) (application/json; required: `labelIds`; fields: `labelIds`) | `200, 400, 404` |
| Update asset alpha channel flag. | `PUT /media-bank/assets/{id}/alpha-channel` | `updateAssetAlphaChannel` | path: `id` | [UpdateAssetAttributeRequestBoolean](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.UpdateAssetAttributeRequestBoolean) (application/json; required: `value`; fields: `value`) | `200, 400, 404` |
| Update asset clipping path. | `PUT /media-bank/assets/{id}/clipping-path` | `updateAssetClippingPath` | path: `id` | [UpdateAssetAttributeRequestBoolean](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.UpdateAssetAttributeRequestBoolean) (application/json; required: `value`; fields: `value`) | `200, 400, 404` |
| Update asset description. | `PUT /media-bank/assets/{id}/description` | `updateAssetDescription` | path: `id` | [UpdateAssetAttributeRequestString](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.UpdateAssetAttributeRequestString) (application/json; required: `value`; fields: `value`) | `200, 400, 404` |
| Update asset internal flag. | `PUT /media-bank/assets/{id}/internal` | `updateAssetInternal` | path: `id` | [UpdateAssetAttributeRequestBoolean](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.UpdateAssetAttributeRequestBoolean) (application/json; required: `value`; fields: `value`) | `200, 400, 404, 409` |
| Update asset name. | `PUT /media-bank/assets/{id}/name` | `updateAssetName` | path: `id` | [UpdateAssetAttributeRequestString](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.UpdateAssetAttributeRequestString) (application/json; required: `value`; fields: `value`) | `200, 400, 404` |
| Update asset number. | `PUT /media-bank/assets/{id}/number` | `updateAssetNumber` | path: `id` | [UpdateAssetAttributeRequestString](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.UpdateAssetAttributeRequestString) (application/json; required: `value`; fields: `value`) | `200, 400, 404, 409` |
| Update asset published flag. | `PUT /media-bank/assets/{id}/published` | `updateAssetPublished` | path: `id` | [UpdateAssetAttributeRequestBoolean](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.UpdateAssetAttributeRequestBoolean) (application/json; required: `value`; fields: `value`) | `200, 400, 404, 409` |
## pim / Catalog node assets

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Associate asset with category. | `POST /pim/catalogs/nodes/{id}/assets/{assetId}` | `associateAssetWithCategory` | path: `id`, path: `assetId` | none | `204, 400, 404` |
| Disassociate asset from category. | `DELETE /pim/catalogs/nodes/{id}/assets/{assetId}` | `disassociateAssetFromCategory` | path: `id`, path: `assetId` | none | `204, 400, 404` |
| List categories associated with asset. | `GET /pim/catalogs/nodes/assets/{id}` | `getCategoriesByAssetId` | path: `id` | none | `200, 400` |
| List assets associated with category. | `GET /pim/catalogs/nodes/{id}/assets` | `getCategoryAssets` | path: `id` | none | `200, 400, 404` |
| Change asset's order. | `PUT /pim/catalogs/nodes/{id}/assets/{assetId}` | `moveCategoryAsset` | path: `id`, path: `assetId`, query: `targetPosition` | none | `204, 400, 404` |
## media-bank / Labels

Call these with the `media-bank` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Create a custom type of media label. | `POST /media-bank/labels` | `create` | none | [DefaultMediaLabelRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.DefaultMediaLabelRequest) (application/json; required: `name`; fields: `name`, `mediaType`) | `200, 400` |
| Create a specified type of media label. | `POST /media-bank/labels/type/{type}` | `createType` | path: `type` | [DefaultMediaLabelRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.DefaultMediaLabelRequest) (application/json; required: `name`; fields: `name`, `mediaType`) | `200, 400` |
| Delete a custom type of media label. | `DELETE /media-bank/labels/{id}` | `delete` | path: `id` | none | `204, 400, 404, 409` |
| Delete a specified type of media label. | `DELETE /media-bank/labels/type/{type}/{id}` | `deleteType` | path: `id`, path: `type` | none | `204, 400, 404, 409` |
| Lists labels. | `GET /media-bank/labels` | `describe` | none | none | `200, 400` |
| Get label with given id. | `GET /media-bank/labels/{id}` | `getLabelById` | path: `id` | none | `200, 400, 404` |
| List specified type of media labels. | `POST /media-bank/labels/list` | `list` | none | [ListMediaLabelRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.ListMediaLabelRequest) (application/json; fields: `labelTypes`, `mediaTypes`, `page`, `pageSize`) | `200, 400, 404` |
| Update a custom type of media label. | `PUT /media-bank/labels/{id}` | `update` | path: `id` | [DefaultMediaLabelRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.DefaultMediaLabelRequest) (application/json; required: `name`; fields: `name`, `mediaType`) | `200, 400, 404` |
| Update a specified type of media label. | `PUT /media-bank/labels/type/{type}/{id}` | `updateType` | path: `id`, path: `type` | [DefaultMediaLabelRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.DefaultMediaLabelRequest) (application/json; required: `name`; fields: `name`, `mediaType`) | `200, 400, 404` |
## pim / Products assets

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Attach a single existing asset to a product, identified by asset ID in the path. | `POST /pim/products/{id}/assets/{assetId}` | `associateAssetWithProduct` | path: `id`, path: `assetId` | none | `204, 400, 404` |
| Attach several existing assets to a product in one call. | `POST /pim/products/{id}/assets` | `associateAssets` | path: `id` | [AssociateProductAssetsRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.AssociateProductAssetsRequest) (application/json; fields: `assets`) | `204, 400, 404` |
| Detach an asset from a product, removing only the link between them. | `DELETE /pim/products/{id}/assets/{assetId}` | `disassociateAssetFromProduct` | path: `id`, path: `assetId` | none | `204, 400, 404` |
| Retrieve the IDs of the assets associated with a product, in their display order and paginated. | `GET /pim/products/{id}/assets` | `getProductAssets` | path: `id` | none | `200, 400, 404` |
| Move an asset within a product. | `PUT /pim/products/{id}/assets/{assetId}` | `moveProductAsset` | path: `id`, path: `assetId`, query: `targetPosition` | none | `204, 400, 404` |
| Set assets for a product. | `PUT /pim/products/{id}/assets` | `setProductAssets` | path: `id` | [SetProductAssets](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.SetProductAssets) (application/json; fields: `assets`) | `204, 400, 404` |
## media-bank / Technical

Call these with the `media-bank` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Health checks. | `GET /media-bank/healthcheck` | `checkStatuses` | none | none | `200, 400` |
| Show service version. | `GET /media-bank/technical/version` | `presentVersion` | none | none | `200, 400` |
## media-bank / Upload

Call these with the `media-bank` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Complete asset creation. The asset will be moved to \assets path. | `POST /media-bank/upload/{id}/done` | `completeAsset` | path: `id` | none | `200, 400, 404` |
| Create new empty asset. The asset will not be available for other users until done operation is completed. | `POST /media-bank/upload` | `createAsset` | none | [CreateUploadAssetRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.CreateUploadAssetRequest) (application/json; required: `fileName`; fields: `fileName`, `contentType`) | `201, 400` |
| Create new version for existing asset. The new asset version will not be available for other users until done operation is completed. | `POST /media-bank/upload/{id}` | `createVersionAsset` | path: `id` | [CreateUploadAssetRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.CreateUploadAssetRequest) (application/json; required: `fileName`; fields: `fileName`, `contentType`) | `201, 400, 404` |
| Cancel asset's creation. Any uploaded file and asset will be removed. | `DELETE /media-bank/upload/{id}` | `deleteAssetUpload` | path: `id` | none | `204, 400, 404` |
| Lists assets in upload phase for current user. | `GET /media-bank/upload` | `describeAssetUploads` | none | none | `200, 400` |
| Update the asset's information to be uploaded. | `PUT /media-bank/upload/{id}` | `updateAsset` | path: `id` | [UpdateUploadAssetRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/media-bank.json#components.schemas.UpdateUploadAssetRequest) (application/json; fields: `name`, `number`, `description`, `labels`, `internal`) | `200, 400, 404` |
