# Settings and data quality

This page lists every `2c19c082ed473e21` API operation in this function group (66 operations). It is generated from the pinned OpenAPI specification; regenerate it after changing the active API revision with `php bin/build-api-change-guide`.

For a step-by-step migration, use [How to add or change things in Bluestone PIM](../making-pim-changes.md) and its worked examples. Each row shows what the operation does, its exact SDK operation ID and route, required inputs, request schema fields and success/error response codes. `GET` reads data; `POST` may create, update, validate, search or submit work, so follow the summary and schema to see its purpose.

Pinned request schemas: [ui-settings](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/ui-settings.json) · [global-settings](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/global-settings.json) · [metadata](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/metadata.json) · [query-builder](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/query-builder.json) · [completeness-score](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/completeness-score.json) · [pim](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json).

## ui-settings / Columns setups

Call these with the `ui-settings` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| This endpoint allows you to create column setup. | `POST /ui-settings/columnsSetups/all` | `CreateColumnsSetupOfAnyUser` | none | [ColumnSetupAllCreateRequestBody](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/ui-settings.json#components.schemas.ColumnSetupAllCreateRequestBody) (application/json; required: `columns`, `isPublic`, `name`, `service`, `entity`, `owner`; fields: `columns`, `isPublic`, `name`, `service`, `entity`, `sortConfig`, `owner`) | `200` |
| This endpoint allows you to delete column setup by id. | `DELETE /ui-settings/columnsSetups/all/{id}` | `DeleteColumnSetupByIdOfAnyUser` | path: `id` | none | `200` |
| Get all setups. | `GET /ui-settings/columnsSetups/all` | `GetAllColumnSetups` | none | none | `200` |
| This endpoint allows you to get column setup by id. | `GET /ui-settings/columnsSetups/all/{id}` | `GetColumnSetupByIdOfAnyUser` | path: `id` | none | `200` |
| This endpoint allows you to update column setup by id. | `PUT /ui-settings/columnsSetups/all/{id}` | `UpdateSetupByIdOfAnyUser` | path: `id` | [UpdateColumnSetupForAnyUserRequestBody](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/ui-settings.json#components.schemas.UpdateColumnSetupForAnyUserRequestBody) (application/json; fields: `columns`, `isPublic`, `name`, `service`, `entity`, `sortConfig`) | `200` |
## global-settings / Contexts

Call these with the `global-settings` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Archive context definition. | `DELETE /global-settings/context/{id}` | `archive` | path: `id` | none | `204, 400, 404` |
| Create context definition. | `POST /global-settings/context` | `create` | none | [ContextRequestDto](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/global-settings.json#components.schemas.ContextRequestDto) (application/json; fields: `name`, `locale`, `fallback`) | `201, 400, 409` |
| List context definitions for the current organization. | `GET /global-settings/context` | `find` | none | none | `200, 400` |
| List context definitions by names. | `POST /global-settings/context/list/by-names` | `findByNames` | none | [FindContextsByNamesRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/global-settings.json#components.schemas.FindContextsByNamesRequest) (application/json; fields: `names`) | `200, 400` |
| Get a single context definition by id. | `GET /global-settings/context/{id}` | `get` | path: `id` | none | `200, 400, 404` |
| Update context definition. | `PUT /global-settings/context/{id}` | `update` | path: `id` | [ContextRequestDto](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/global-settings.json#components.schemas.ContextRequestDto) (application/json; fields: `name`, `locale`, `fallback`) | `204, 400, 404, 409` |
## global-settings / Filters

Call these with the `global-settings` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Create new filter. | `POST /global-settings/filter` | `createFilter` | none | [FilterCreateRequestDto](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/global-settings.json#components.schemas.FilterCreateRequestDto) (application/json; fields: `name`, `service`, `entity`, `public`, `valid`, `filter`) | `201, 400, 409` |
| Delete filter using id. | `DELETE /global-settings/filter/{id}` | `deleteFilter` | path: `id` | none | `204, 400, 404` |
| Delete filter of any user. | `DELETE /global-settings/filter/all/{id}` | `deleteFilterFromAll` | path: `id` | none | `204, 400, 404` |
| List public and private filters using filtering criteria. | `POST /global-settings/filter/list/all` | `findAll` | none | [FilterSearchRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/global-settings.json#components.schemas.FilterSearchRequest) (application/json; fields: `ids`, `ownerId`, `name`, `service`, `entity`, `public`, `page`, `pageSize`) | `200, 400` |
| List filters using filtering criteria. | `POST /global-settings/filter/list` | `findFilter` | none | [FilterSearchRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/global-settings.json#components.schemas.FilterSearchRequest) (application/json; fields: `ids`, `ownerId`, `name`, `service`, `entity`, `public`, `page`, `pageSize`) | `200, 400` |
| Get filter by using id. | `GET /global-settings/filter/{id}` | `getFilter` | path: `id` | none | `200, 400, 404` |
| Lists users with filter permission. | `GET /global-settings/filter/{id}/user` | `getPermissions` | path: `id` | none | `200, 400, 404` |
| Grant or update filter permission to user. | `PUT /global-settings/filter/{id}/user/{userId}` | `grantPermission` | path: `id`, path: `userId` | [FilterPermissionUpdateRequestDto](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/global-settings.json#components.schemas.FilterPermissionUpdateRequestDto) (application/json; fields: `permissionType`) | `204, 400, 404` |
| Revoke filter permission from user. | `DELETE /global-settings/filter/{id}/user/{userId}` | `revokePermission` | path: `id`, path: `userId` | none | `204, 400, 404` |
| Update filter using id. | `PATCH /global-settings/filter/{id}` | `updateFilter` | path: `id` | [FilterUpdateRequestDto](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/global-settings.json#components.schemas.FilterUpdateRequestDto) (application/json; fields: `name`, `service`, `entity`, `public`, `valid`, `filter`) | `204, 400, 404, 409` |
| Update public and private filter | `PATCH /global-settings/filter/all/{id}` | `updatePublicFilter` | path: `id` | [FilterUpdateRequestDto](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/global-settings.json#components.schemas.FilterUpdateRequestDto) (application/json; fields: `name`, `service`, `entity`, `public`, `valid`, `filter`) | `204, 400, 404, 409` |
## metadata / Metadata

Call these with the `metadata` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Delete metadata for given provider. | `DELETE /metadata/metadata/{providerId}` | `deleteMetadata` | path: `providerId` | [DeleteMetadataRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/metadata.json#components.schemas.DeleteMetadataRequest) (application/json; required: `entityIds`; fields: `entityIds`) | `204, 400, 404` |
| Delete metadata for given provider by ids. | `DELETE /metadata/metadata/{providerId}/by-ids` | `deleteProviderMetadataByIds` | path: `providerId` | [DeleteProviderMetadataByIdsRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/metadata.json#components.schemas.DeleteProviderMetadataByIdsRequest) (application/json; required: `ids`; fields: `ids`) | `204, 400, 404` |
| Get metadata for given provider using cursor with details from given views. | `POST /metadata/metadata/{providerId}/cursor/views/all` | `findProviderMetadataWithCursorAndViewsByProviderId` | path: `providerId` | [MetadataWithCursorAndViewsByProviderIdRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/metadata.json#components.schemas.MetadataWithCursorAndViewsByProviderIdRequest) (application/json; required: `count`; fields: `views`, `count`, `cursor`) | `200, 400, 404` |
| Get metadata for entities for given provider. | `POST /metadata/metadata/{providerId}/by-entities` | `getMetadataForEntities` | path: `providerId` | [GetMetadataForEntitiesRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/metadata.json#components.schemas.GetMetadataForEntitiesRequest) (application/json; required: `contextId`, `entitiesIds`; fields: `entitiesIds`, `contextId`) | `200, 400` |
| Upsert metadata for given provider. | `POST /metadata/metadata/{providerId}` | `upsertMetadata` | path: `providerId` | [UpsertMetadataRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/metadata.json#components.schemas.UpsertMetadataRequest) (application/json; required: `data`; fields: `data`) | `204, 400, 404` |
## query-builder / Organization

Call these with the `query-builder` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Delete all data for an organization. This endpoint can only be called if the organization in the context of this request is archived and the user has the system role ORG_DELETE_ADMIN. | `DELETE /query-builder/organization` | `DeleteOrganization` | none | none | `200` |
## query-builder / Products

Call these with the `query-builder` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Create a new persisted product query. | `POST /query-builder/products/persistedQueries` | `CreatePersistedProductQuery` | none | [PersistedProductQueryInsertRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/query-builder.json#components.schemas.PersistedProductQueryInsertRequest) (application/json; required: `queryType`, `query`; fields: `queryType`, `query`, `queryId`, `useOnlyNewIndex`) | `200` |
| Delete persisted product query. | `DELETE /query-builder/products/persistedQueries` | `DeletePersistedProductQuery` | none | [PersistedProductQueryDeleteRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/query-builder.json#components.schemas.PersistedProductQueryDeleteRequest) (application/json; required: `queryType`, `queryId`; fields: `queryType`, `queryId`) | `200` |
| Get number of products for given query. | `POST /query-builder/products/count` | `GetCount` | none | [ProductsSearchRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/query-builder.json#components.schemas.ProductsSearchRequest) (application/json; required: `query`; fields: `query`, `sorting`, `paging`) | `200, 422` |
| List persisted product queries. | `POST /query-builder/products/persistedQueries/list` | `ListPersistedProductQueries` | none | [PersistedProductQueryListRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/query-builder.json#components.schemas.PersistedProductQueryListRequest) (application/json; required: `queryType`; fields: `queryType`, `paging`) | `200` |
| Scroll products for given query. | `POST /query-builder/products/scroll/search` | `ScrollSearch` | none | [ProductsScrollSearchRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/query-builder.json#components.schemas.ProductsScrollSearchRequest) (application/json) | `200` |
| Search for products for given query. | `POST /query-builder/products/search` | `Search` | none | [ProductsSearchRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/query-builder.json#components.schemas.ProductsSearchRequest) (application/json; required: `query`; fields: `query`, `sorting`, `paging`) | `200, 400, 422` |
| Search for persisted queries for given product. | `POST /query-builder/products/persistedQueries/search` | `SearchPersistedProductQueries` | none | [PersistedProductQuerySearchRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/query-builder.json#components.schemas.PersistedProductQuerySearchRequest) (application/json; required: `queryType`, `productId`; fields: `queryType`, `productId`, `paging`) | `200` |
| Update persisted product query. | `PUT /query-builder/products/persistedQueries` | `UpdatePersistedProductQuery` | none | [PersistedProductQueryUpdateRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/query-builder.json#components.schemas.PersistedProductQueryUpdateRequest) (application/json; required: `queryType`, `query`, `queryId`; fields: `queryType`, `query`, `queryId`) | `200` |
## metadata / Provider

Call these with the `metadata` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Get providers for organization. | `GET /metadata/provider` | `getRegisteredProviders` | none | none | `200, 400` |
| List providers by numbers. | `POST /metadata/provider/by-numbers` | `listProviders` | none | [ListProviderRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/metadata.json#components.schemas.ListProviderRequest) (application/json; required: `numbers`; fields: `numbers`) | `200, 400` |
## completeness-score / Requirements

Call these with the `completeness-score` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Add excluded category to requirement. | `PUT /completeness-score/requirements/{requirementId}/categories/{categoryId}/excluded` | `addExcludedCategory` | path: `requirementId`, path: `categoryId` | none | `200, 400, 404` |
| Add included category to requirement. | `PUT /completeness-score/requirements/{requirementId}/categories/{categoryId}/included` | `addIncludedCategory` | path: `requirementId`, path: `categoryId` | none | `200, 400, 404` |
| Add included product type to requirement. | `PUT /completeness-score/requirements/{requirementId}/productType/{productType}/included` | `addIncludedProductType` | path: `requirementId`, path: `productType` | none | `200, 400, 404` |
| Count requirements. | `POST /completeness-score/requirements/count` | `count` | none | [RequirementCountRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/completeness-score.json#components.schemas.RequirementCountRequest) (application/json; fields: `ids`, `types`) | `200, 400` |
| Create requirement. | `POST /completeness-score/requirements` | `create` | none | [RequirementCreateRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/completeness-score.json#components.schemas.RequirementCreateRequest) (application/json; fields: `requirementType`, `params`, `weight`, `includedProductTypes`) | `201, 400, 409` |
| Delete requirement. | `DELETE /completeness-score/requirements/{requirementId}` | `delete` | path: `requirementId` | none | `204, 400, 404` |
| Get requirements for single entity. | `GET /completeness-score/requirements/entity/{entityId}/{context}` | `getRequirementsForSingleEntity` | path: `entityId`, path: `context` | none | `200, 400, 404` |
| List requirements. | `POST /completeness-score/requirements/list` | `list` | none | [RequirementListRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/completeness-score.json#components.schemas.RequirementListRequest) (application/json; fields: `sort`, `ids`, `types`, `pageSize`, `page`) | `200, 400` |
| Remove excluded category to requirement. | `DELETE /completeness-score/requirements/{requirementId}/categories/{categoryId}/excluded` | `removeExcludedCategory` | path: `requirementId`, path: `categoryId` | none | `200, 400, 404` |
| Remove included category to requirement. | `DELETE /completeness-score/requirements/{requirementId}/categories/{categoryId}/included` | `removeIncludedCategory` | path: `requirementId`, path: `categoryId` | none | `200, 400, 404` |
| Remove included product type to requirement. | `DELETE /completeness-score/requirements/{requirementId}/productType/{productType}/included` | `removeIncludedProductType` | path: `requirementId`, path: `productType` | none | `200, 400, 404` |
| Update requirement. | `PUT /completeness-score/requirements/{requirementId}` | `update` | path: `requirementId` | [RequirementUpdateRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/completeness-score.json#components.schemas.RequirementUpdateRequest) (application/json; fields: `requirementType`, `params`, `weight`) | `200, 400, 404` |
## completeness-score / Scores

Call these with the `completeness-score` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Get calculation status. | `GET /completeness-score/scores/status/{context}` | `getCalculationStatus` | path: `context` | none | `200, 400, 404` |
| Get category scores. | `POST /completeness-score/scores/category/list` | `getCategoryScores` | none | [CategoryScoreRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/completeness-score.json#components.schemas.CategoryScoreRequest) (application/json; fields: `contexts`, `categoryIds`, `includeUnassigned`, `pageSize`, `page`) | `200, 400` |
| Get detailed scores for single entity. | `GET /completeness-score/scores/{entityId}/{context}` | `getDetailedScoresForSingleEntity` | path: `entityId`, path: `context` | none | `200, 400, 404` |
| Get scores. | `POST /completeness-score/scores/list` | `getScores` | none | [ScoreRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/completeness-score.json#components.schemas.ScoreRequest) (application/json; fields: `contexts`, `entityIds`, `pageSize`, `page`) | `200, 400` |
| Recalculate score for entities. | `POST /completeness-score/scores/calculation/recalculate/entity` | `recalculateForEntity` | none | [RecalculateScoreForEntityRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/completeness-score.json#components.schemas.RecalculateScoreForEntityRequest) (application/json; fields: `context`, `entityId`, `entityIds`) | `200, 400` |
| Invalidate scores. | `POST /completeness-score/scores/calculation/admin/invalidate` | `scoresInvalidation` | none | [InvalidateScoresRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/completeness-score.json#components.schemas.InvalidateScoresRequest) (application/json; fields: `context`) | `202, 400` |
| Start new calculation. | `POST /completeness-score/scores/calculation/start` | `startCalculation` | none | [RecalculateScoreStandardRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/completeness-score.json#components.schemas.RecalculateScoreStandardRequest) (application/json; fields: `context`) | `202, 400` |
| Stop ongoing calculation. | `POST /completeness-score/scores/calculation/stop` | `stopCalculation` | none | [RecalculateScoreStandardRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/completeness-score.json#components.schemas.RecalculateScoreStandardRequest) (application/json; fields: `context`) | `202, 400` |
## completeness-score / Validation

Call these with the `completeness-score` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Get validation issues for products by ids. | `POST /completeness-score/validations/by-ids` | `getBulkValidationIssues` | none | [BulkValidationRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/completeness-score.json#components.schemas.BulkValidationRequest) (application/json; required: `context`, `entityIds`; fields: `entityIds`, `context`) | `200, 400` |
| Get validation issues for product. | `GET /completeness-score/validations/{entityId}/{context}` | `getValidationIssues` | path: `entityId`, path: `context` | none | `200, 400, 404` |
## pim / Validation

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Validates attribute definitions. | `POST /pim/validate/definitions` | `validateAttribute` | none | [AttributeValidationRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.AttributeValidationRequest) (application/json; fields: `definitions`) | `200, 400` |
## completeness-score / Validation

Call these with the `completeness-score` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Validate definition value. | `POST /completeness-score/validations/definition/value` | `validateDefinitionValue` | none | [DefinitionValueValidationRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/completeness-score.json#components.schemas.DefinitionValueValidationRequest) (application/json; fields: `context`, `attribute`) | `200, 400` |
| Validate product attribute. | `POST /completeness-score/validations/product/attribute` | `validateProductAttribute` | none | [ProductAttributeValidationRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/completeness-score.json#components.schemas.ProductAttributeValidationRequest) (application/json; fields: `productId`, `context`, `attribute`) | `200, 400` |
## pim / Validation

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| [DEPRECATED; EOL 2026-12-20] Validates list of products. (deprecated) | `POST /pim/validate/product` | `validateProducts` | none | application/json | `200, 400` |
| Validates attribute value. | `POST /pim/validate/value` | `validateValue` | none | [ValueValidationRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json#components.schemas.ValueValidationRequest) (application/json; fields: `definitionId`, `value`) | `200, 400` |
## query-builder / savedView

Call these with the `query-builder` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Validate passed view | `POST /query-builder/savedViews/getValidView` | `GetValidView` | none | [ProductFiltersOrQuery](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/query-builder.json#components.schemas.ProductFiltersOrQuery) (application/json) | `200` |
