# Public API

This page lists every `2c19c082ed473e21` API operation in this function group (27 operations). It is generated from the pinned OpenAPI specification; regenerate it after changing the active API revision with `php bin/build-api-change-guide`.

For a step-by-step migration, use [How to add or change things in Bluestone PIM](../making-pim-changes.md) and its worked examples. Each row shows what the operation does, its exact SDK operation ID and route, required inputs, request schema fields and success/error response codes. `GET` reads data; `POST` may create, update, validate, search or submit work, so follow the summary and schema to see its purpose.

Pinned request schemas: [public-api](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/page.json).

## public-api / Attributes

Call these with the `public-api` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Find Dictionary Values By Cursor | `POST /v1/attributes/dictionary/{attributeDefinitionId}/values/cursor/all` | `FindDictionaryValuesByCursor` | path: `attributeDefinitionId` | [CursorQuery](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/page.json#components.schemas.CursorQuery) (application/json; fields: `cursor`, `limit`) | `200` |
| Find P Attributes By Numbers | `POST /v1/attributes/by-numbers` | `FindPAttributesByNumbers` | none | [AttributesByNumbersRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/page.json#components.schemas.AttributesByNumbersRequest) (application/json; required: `numbers`; fields: `numbers`) | `200` |
| Describe the attributes available in the system. id - attribute id. itemsOnPage - items to be displayed on page. pageNo - page number to display. | `GET /v1/attributes` | `GetAttributes` | none | none | `200` |
## public-api / Categories

Call these with the `public-api` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Show list of categories filtered by numbers. | `POST /v1/categories/by-numbers` | `FindCategoriesByNumbers` | none | [CategoriesByNumbersRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/page.json#components.schemas.CategoriesByNumbersRequest) (application/json; required: `numbers`; fields: `numbers`) | `200` |
| Describe categories associated with given category. deep - deepness of sub categories to be retrieved. default 10. | `GET /v1/categories/{categoryId}/ancestors` | `GetAncestors` | path: `categoryId` | none | `200, 404` |
| Describe the root categories available in the system. name - category contains a name itemsOnPage - items to be displayed on page. pageNo - page number to display. | `GET /v1/categories` | `GetCategories` | none | none | `200` |
| [DEPRECATED; EOL 2027-01-15] undefined (deprecated) | `GET /v1/categories/{categoryId}` | `GetCategoryById` | path: `categoryId` | none | `200, 404` |
| Get a list of products for given category. subCategories - default false. Set to true provides products for all sub categories. withLabels - format "label1;label2" a set of labels products should contain. name - part of the name contained by the product itemsOnPage - items to be displayed on page. pageNo - page number to display. | `GET /v1/categories/{categoryId}/products` | `GetProducts` | path: `categoryId` | none | `200` |
| Get paginated flat list of categories: given category and its descendants. CategoryId is optional, if not provided all catalogs are listed. | `GET /v1/categories/scan` | `Scan` | none | none | `200, 404` |
## public-api / Contexts

Call these with the `public-api` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| lists currently available publications | `GET /v1/contexts` | `GetSegmentInfo` | none | none | `200` |
## public-api / Differences

Call these with the `public-api` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Return a set of differences done during last sync operation. diffType - filter returned values on difference type. itemsOnPage - items to be displayed on page. pageNo - page number to display. | `GET /v1/differences/attributes` | `GetAttributeDifferences` | none | none | `200` |
| Return a set of changed attributes with given sync id - sync id for which differences should be retrieved. diffType - filter returned values on difference type. itemsOnPage - amount of items to be retrieved. pageNo - page number. | `GET /v1/differences/sync/{id}/attributes` | `GetAttributeDifferencesOnSyncDeletes` | path: `id` | none | `200, 404` |
| Return a set of changed categories during last publish diffType - filter returned values on difference type. itemsOnPage - amount of items to be retrieved. pageNo - page number. | `GET /v1/differences/categories` | `GetCategoryDifferences` | none | none | `200` |
| Return a set of differences done with a given sync. id - sync id for which differences should be retrieved. itemsOnPage - items to be displayed on page. pageNo - page number to display. | `GET /v1/differences/sync/{id}/categories` | `GetCategoryDifferencesOnSyncDeletes` | path: `id` | none | `200, 404` |
| Return a set of differences done during last sync operation. diffType - filter returned values on difference type. itemsOnPage - items to be displayed on page. pageNo - page number to display. | `GET /v1/differences/products` | `GetProductDifferences` | none | none | `200` |
| Return a set of changed products with given sync id - sync id for which differences should be retrieved. diffType - filter returned values on difference type. itemsOnPage - amount of items to be retrieved. pageNo - page number. | `GET /v1/differences/sync/{id}/products` | `GetProductDifferencesOnSyncDeletes` | path: `id` | none | `200, 404` |
| Return a set of differences done during last sync operation. diffType - filter returned values on difference type. itemsOnPage - items to be displayed on page. pageNo - page number to display. | `GET /v1/differences/relations` | `GetRelationDifferences` | none | none | `200` |
| Return a set of changed relations with given sync id - sync id for which differences should be retrieved. diffType - filter returned values on difference type. itemsOnPage - amount of items to be retrieved. pageNo - page number. | `GET /v1/differences/sync/{id}/relations` | `GetRelationDifferencesOnSyncDeletes` | path: `id` | none | `200, 404` |
## public-api / Health

Call these with the `public-api` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| A Health check for PAPI service. | `GET /v1/health` | `GetHealth` | none | none | `204, 503` |
## public-api / Products

Call these with the `public-api` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Find products in PAPI. Note: For large-scale operations please use the '/products/cursor/all' endpoint. | `POST /v1/products/list` | `FindProducts` | none | [FilteringCriteriaRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/page.json#components.schemas.FilteringCriteriaRequest) (application/json; fields: `ids`, `names`, `numbers`, `labels`, `categories`, `attributes`, `attributeFilters`, `relations`, `productTypes`, `bundles`) | `200` |
| Find Products By Cursor | `POST /v1/products/cursor/all` | `FindProductsByCursor` | none | [CursorQuery](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/page.json#components.schemas.CursorQuery) (application/json; fields: `cursor`, `limit`) | `200` |
| Show list of products filtered by ids. | `POST /v1/products/by-ids` | `FindProductsByIds` | none | [ProductsByIdsRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/page.json#components.schemas.ProductsByIdsRequest) (application/json; required: `ids`; fields: `ids`) | `200` |
| Show list of products filtered by numbers. | `POST /v1/products/by-numbers` | `FindProductsByNumbers` | none | [ProductsByNumbersRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/page.json#components.schemas.ProductsByNumbersRequest) (application/json; required: `numbers`; fields: `numbers`) | `200` |
| Get the product with given id | `GET /v1/products/{id}` | `GetProduct` | path: `id` | none | `200, 404` |
## public-api / Relations

Call these with the `public-api` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Describe the relations available in the system. | `GET /v1/relations` | `GetRelations` | none | none | `200` |
## public-api / Syncs

Call these with the `public-api` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Retrieves the information about given PublishInfo environment. | `GET /v1/syncs/{id}` | `GetPublishInfo` | path: `id` | none | `201, 404` |
| Retrieves a collection of publish info for given tenant. | `GET /v1/syncs` | `GetPublishInfos` | none | none | `200` |
