# Other functions

This page lists every `2c19c082ed473e21` API operation in this function group (22 operations). It is generated from the pinned OpenAPI specification; regenerate it after changing the active API revision with `php bin/build-api-change-guide`.

For a step-by-step migration, use [How to add or change things in Bluestone PIM](../making-pim-changes.md) and its worked examples. Each row shows what the operation does, its exact SDK operation ID and route, required inputs, request schema fields and success/error response codes. `GET` reads data; `POST` may create, update, validate, search or submit work, so follow the summary and schema to see its purpose.

Pinned request schemas: [search](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/search.json) · [history](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/history.json) · [labels](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/labels.json) · [pim](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/pim.json).

## search / Full-text search

Call these with the `search` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Execute the search query. | `GET /search/find` | `find` | none | none | `200, 400` |
## history / History

Call these with the `history` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Count events for given entity. | `GET /history/history/{entityType}/{id}/count` | `count` | path: `entityType`, path: `id` | none | `200, 400` |
| Retrieve history events. | `GET /history/history` | `list` | none | none | `200, 400` |
| Retrieve history events for given entity type. | `GET /history/history/{entityType}` | `list_1` | path: `entityType` | none | `200, 400` |
| Retrieve the history (audit log) events recorded for one specific entity instance. | `GET /history/history/{entityType}/{id}` | `list_2` | path: `entityType`, path: `id` | none | `200, 400` |
| Retrieve history events for a given entity type using Point-In-Time (PIT) search. Suitable for paginated access to large result sets. | `GET /history/history/{entityType}/scroll` | `scrollList` | path: `entityType` | none | `200, 400` |
| Retrieving the history of events for a given type of entities that have a value from the query. | `GET /history/history/search/{entityType}` | `search` | path: `entityType` | none | `200, 400` |
| Retrieve history events for given entity that have a value from the query. | `GET /history/history/search/{entityType}/{id}` | `search_1` | path: `entityType`, path: `id` | none | `200, 400` |
## labels / Labels

Call these with the `labels` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Create a new label. | `POST /labels/labels` | `create` | none | [LabelRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/labels.json#components.schemas.LabelRequest) (application/json; required: `name`; fields: `name`) | `201, 400, 409` |
| Delete a label. | `DELETE /labels/labels/{id}` | `delete` | path: `id` | none | `204, 400, 404` |
| Get a label. | `GET /labels/labels/{id}` | `find` | path: `id` | none | `200, 400, 404` |
| List labels by ids. | `POST /labels/labels/by-ids` | `findByIds` | none | [LabelsByIdsRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/labels.json#components.schemas.LabelsByIdsRequest) (application/json; required: `ids`; fields: `ids`) | `200, 400` |
| List labels. | `GET /labels/labels` | `list` | none | none | `200, 400` |
| Update a label. | `PUT /labels/labels/{id}` | `update` | path: `id` | [LabelRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/labels.json#components.schemas.LabelRequest) (application/json; required: `name`; fields: `name`) | `204, 400, 404, 409` |
## search / Search

Call these with the `search` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Count for assets using an Elasticsearch query. | `POST /search/assets/count` | `assetsCount` | none | [MediabankAssetCountRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/search.json#components.schemas.MediabankAssetCountRequest) (application/json; fields: `quickSearch`, `asset`, `mediaInfo`) | `200, 400` |
| Search for assets using an Elasticsearch query. | `POST /search/assets/search` | `assetsSearch` | none | [MediabankAssetSearchRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/search.json#components.schemas.MediabankAssetSearchRequest) (application/json; required: `page`, `resultsPerPage`; fields: `page`, `resultsPerPage`, `sortField`, `attributeIdToSortBy`, `sortOrder`, `quickSearch`, `asset`, `mediaInfo`) | `200, 400` |
| Search for assets using cursor-based pagination. | `POST /search/assets/cursor` | `assetsSearchWithCursor` | none | [MediabankAssetSearchCursorRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/search.json#components.schemas.MediabankAssetSearchCursorRequest) (application/json; required: `count`; fields: `count`, `cursor`, `quickSearch`, `asset`, `mediaInfo`) | `200, 400` |
| Count for products using an Elasticsearch query. | `POST /search/products/count` | `productsCount` | none | [PimProductCountRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/search.json#components.schemas.PimProductCountRequest) (application/json; fields: `typeFilter`, `typesFilter`, `productCreateDateFilter`, `productCreateDateRelativeFilter`, `productLastUpdateFilter`, `productLastUpdateRelativeFilter`, `baseFilters`, `publishStateFilter`, `validationStatusFilter`, `attributeFilters`, `labelFilters`, `relationsFilter`, `assetFilters`, `variantFilters`, `bundleFilters`, `categoryFilters`, `scoreFilter`, `scoreRequirementResultFilters`, `outOfSyncFilter`, `lastSyncStateFilter`, `groupFilters`) | `200, 400` |
| Search for products using an Elasticsearch query. | `POST /search/products/search` | `productsSearch` | none | [PimProductSearchRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/search.json#components.schemas.PimProductSearchRequest) (application/json; required: `page`, `pageSize`; fields: `page`, `pageSize`, `column`, `sortDirection`, `attributeIdToSortBy`, `typeFilter`, `typesFilter`, `productCreateDateFilter`, `productCreateDateRelativeFilter`, `productLastUpdateFilter`, `productLastUpdateRelativeFilter`, `baseFilters`, `publishStateFilter`, `validationStatusFilter`, `attributeFilters`, `labelFilters`, `relationsFilter`, `assetFilters`, `variantFilters`, `bundleFilters`, `categoryFilters`, `scoreFilter`, `scoreRequirementResultFilters`, `outOfSyncFilter`, `lastSyncStateFilter`, `groupFilters`) | `200, 400` |
| Search for products using cursor-based pagination with default sorting. | `POST /search/products/cursor` | `productsSearchWithCursor` | none | [PimProductSearchCursorRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/search.json#components.schemas.PimProductSearchCursorRequest) (application/json; required: `count`; fields: `count`, `cursor`, `typeFilter`, `typesFilter`, `productCreateDateFilter`, `productCreateDateRelativeFilter`, `productLastUpdateFilter`, `productLastUpdateRelativeFilter`, `baseFilters`, `publishStateFilter`, `validationStatusFilter`, `attributeFilters`, `labelFilters`, `relationsFilter`, `assetFilters`, `variantFilters`, `bundleFilters`, `categoryFilters`, `scoreFilter`, `scoreRequirementResultFilters`, `outOfSyncFilter`, `lastSyncStateFilter`, `groupFilters`) | `200, 400` |
| Search for products using an Elasticsearch query and scroll. Prefer using POST products/cursor instead. | `POST /search/products/scroll/search` | `productsSearchWithScroll` | none | [PimProductSearchScrollRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/search.json#components.schemas.PimProductSearchScrollRequest) (application/json; required: `pageSize`; fields: `pageSize`, `scrollId`, `column`, `sortDirection`, `attributeIdToSortBy`, `typeFilter`, `typesFilter`, `productCreateDateFilter`, `productCreateDateRelativeFilter`, `productLastUpdateFilter`, `productLastUpdateRelativeFilter`, `baseFilters`, `publishStateFilter`, `validationStatusFilter`, `attributeFilters`, `labelFilters`, `relationsFilter`, `assetFilters`, `variantFilters`, `bundleFilters`, `categoryFilters`, `scoreFilter`, `scoreRequirementResultFilters`, `outOfSyncFilter`, `lastSyncStateFilter`, `groupFilters`) | `200, 400` |
## pim / Technical

Call these with the `pim` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Show service version. | `GET /pim/technical/version` | `getVersion` | none | none | `200, 400` |
