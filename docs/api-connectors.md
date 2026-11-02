# Bluestone API connectors

Each component in Bluestone's [published OpenAPI specifications](https://docs.api.bluestonepim.com/docs/generate-sdks-and-client-code-from-openapi) has an autowired service under `App\Api\Connector`. The checked-in routing catalog contains 547 operation IDs across 16 components.

For an end-to-end starter PIM catalog/product setup, prerequisite planning and copyable migration examples, see [Initial PIM setup](initial-pim-setup.md).

| Component | Connector | Operations | Service prefix |
| --- | --- | ---: | --- |
| PIM | `PimConnector` | 224 | `/pim` |
| Media bank | `MediaBankConnector` | 58 | `/media-bank` |
| Search | `SearchConnector` | 8 | `/search` |
| Labels | `LabelsConnector` | 6 | `/labels` |
| Global settings | `GlobalSettingsConnector` | 17 | `/global-settings` |
| History | `HistoryConnector` | 7 | `/history` |
| Tasks | `TasksConnector` | 28 | `/tasks` |
| Query builder | `QueryBuilderConnector` | 10 | `/query-builder` |
| Public API sync | `PublicApiSyncConnector` | 20 | `/papi-sync` |
| Public API | `PublicApiConnector` | 27 | `/v1` |
| IDP | `IdpConnector` | 72 | `/idp` |
| External notifications | `ExternalNotificationsConnector` | 32 | `/notification-external` |
| Completeness score | `CompletenessScoreConnector` | 24 | `/completeness-score` |
| Metadata | `MetadataConnector` | 7 | `/metadata` |
| UI settings | `UiSettingsConnector` | 5 | `/ui-settings` |
| Bulk Operations | `BulkOperationsConnector` | 2 | `/bulk-operations` |

The token exchange is handled by the shared `BluestoneClient`. Management components use OAuth2 client credentials. Public API operations use `BLUESTONE_PUBLIC_API_KEY` as an `x-api-key` header; its health operation needs no authentication. Public API sync uses OAuth2. `IdpConnector` calls the documented `/idp` API on the configured API host; the OAuth token URL is configured separately.

All destinations use `BLUESTONE_API_BASE_URL`, which defaults to the test environment. Production hosts in the OpenAPI specifications supply only service path prefixes to the catalog. Credentials and hosts cannot be overridden through connector request options. API execution requires the migration runner's active database lock.

## Discover operations

```sh
php bin/console app:api:list
php bin/console app:api:list pim
php bin/console app:api:list pim --tag="Catalog nodes"
php bin/console app:api:list media-bank --tag=Upload
```

These commands work offline without credentials or a tracking database. They display exact, case-sensitive operation IDs, HTTP methods, paths, authentication, tags and deprecation markers. A connector's `operations()` method exposes the same routing metadata, including required inputs and documented body content types.

## Inject connectors into migrations

```php
<?php

declare(strict_types=1);

namespace BluestoneMigrations;

use App\Api\Connector\PimConnector;
use App\Migration\MigrationContext;
use App\Migration\MigrationInterface;

final class Version20261028140000 implements MigrationInterface
{
    public function __construct(private readonly PimConnector $pim)
    {
    }

    public function description(): string
    {
        return 'Rename an existing catalog node';
    }

    public function up(MigrationContext $context): void
    {
        $context->step('rename-node', function (): void {
            $this->pim->execute('partialUpdateCatalogNode', ['id' => 'existing-node-id'], [
                'headers' => ['context' => 'en'],
                'json' => ['name' => ['value' => 'Hardware']],
            ]);
        });
    }
}
```

The common signature is:

```php
$response = $connector->execute($operationId, $pathParameters, $options);
```

New migrations can opt into offline request and response validation against the revision pinned to that migration:

```php
$this->pim->executeTyped('partialUpdateCatalogNode', ['id' => 'existing-node-id'], [
    'headers' => ['context' => 'en'],
    'json' => ['name' => ['value' => 'Hardware']],
]);
```

`executeTyped()` validates with the checked-in OpenAPI document before HTTP dispatch and validates the returned response before returning. It uses the shared connector, authentication, lock and transport path. Validation errors name the operation and schema-defined field without including rejected values, response content or the underlying validator exception. Typed validation requires a pinned full OpenAPI revision; legacy migrations that predate revision tracking must continue to use `execute()` until explicitly transitioned. Typed requests currently support JSON and string or scalar bodies; streaming and form/multipart request bodies should use `execute()` while their serializers are implemented.

The repository also contains revision-specific Jane DTOs, normalizers and named methods for every operation ID. Generate them from the active offline snapshots with `php bin/generate-api-models`; the command pins them under `generated/R<revision>/`, removes Jane's independent HTTP clients, and atomically publishes the full component set. Inject `TypedApiAdapterFactory` into a migration and call `forComponent('pim')` (or another component key) to get the facade for that migration's pinned revision. Each named method accepts path values, grouped query/header values and generated request DTOs. Composed Query builder request bodies use unions of their generated models; IDP array bodies normalize each generated item. All 547 operations have mapped signatures, with no unresolved request-model references in this revision. Every request uses the shared connector, auth, lock and transport. Fixture verification remains separate from generation.

```php
use App\Api\TypedApiAdapterFactory;
use App\Migration\MigrationContext;

public function __construct(private readonly TypedApiAdapterFactory $apis)
{
}

public function up(MigrationContext $context): void
{
    $pim = $this->apis->forComponent('pim');
    $pim->partialUpdateCatalogNode('existing-node-id', $requestDto, ['context' => 'en']);
}
```

The exact required arguments vary by operation. Use `php bin/console app:api:list pim` for operation IDs and `php bin/console app:api:coverage --json` for each generated method's schema-gap status. Generated facades are scoped to the pinned revision selected for the migration; they reject a revision mismatch and cannot be used by legacy migrations without a pinned specification.

Generated Jane DTO normalizers preserve omitted fields separately from explicit null values. A migration can still construct those model classes directly from `$context->apiRevision()` when convenient:

```php
$revision = $context->apiRevision();
$requestClass = 'App\\Generated\\R'.$revision.'\\Pim\\Model\\CategoryMetadataUpdateRequest';
$valueClass = 'App\\Generated\\R'.$revision.'\\Pim\\Model\\PropertyUpdateString';
$name = new $valueClass();
$name->setValue('Hardware');
$request = new $requestClass();
$request->setName($name); // Other fields remain omitted.
$this->catalog->updateDetailsWithModelTyped('existing-node-id', $request, 'en');
```

`$pathParameters` maps placeholder names to strings or integers. Values are URL-encoded, and missing, extra or invalid placeholders are rejected. `$options` supports `query`, `headers`, `json` and `body`, following Symfony HttpClient conventions. Array query values use OpenAPI form/explode serialization (`ids=one&ids=two`) and boolean values become `true`/`false`. Required query/header parameters and required request bodies are checked before requests are sent. Generic `execute()` leaves payload schema validation to the migration; `executeTyped()` checks request and response schemas using the pinned upstream specification.

After a typed call returns a structured JSON response, use `OpenApiModelSerializer::fromArray()` to deserialize it into a generated response DTO. It rejects model classes from another component or revision. Empty, binary and acknowledgement responses remain Symfony responses and should not be forced into a JSON model.

Responses are Symfony `ResponseInterface` objects. Use `toArray()` for JSON, `getHeaders()` for resource/task IDs, or `getContent()` for other bodies. All responses are consumed before control returns, and non-2xx responses fail the migration. Authentication, response handling and retry behavior are shared with the existing API runner.

## Add domain runners

Put reusable workflows in `src/Service/` and inject a component connector into the runner. `CatalogRunner::updateDetailsTyped()` demonstrates a catalog update with pinned request/response validation; `updateDetails()` preserves generic dispatch. `PimJobRunner::waitForCompletionTyped()` polls and validates the PIM `getJobStatus` operation, while the original `waitForCompletion()` remains available to legacy migrations. `submitAndWait()` accepts a stable step name and a callback that submits work and returns its task ID; it checkpoints that ID before starting polling, so retry resumes polling without resubmitting.

Other services can have separate job protocols. For example, Bulk Operations also names an operation `getJobStatus`, but uses a different route and response contract. `BulkOperationsJobRunner` validates its status responses against the pinned contract and treats `COMPLETED` and `COMPLETED_WITH_ISSUES` as terminal; callers should inspect returned issues. Its `submitAndWait()` helper also checkpoints the ID first. Both job runners accept a `MigrationContext` to refresh the database lease while polling. HTTP acceptance alone does not mean a job has completed.

`CursorPaginator` accepts page-fetch and page-processing callbacks. It saves each completed page's next cursor in a named migration step, skips completed pages on retry, and stops on repeated cursors or a configurable page limit. Pass the operation, query and context in `queryContext`; a persisted fingerprint rejects changed inputs before fetching on retry. The fetch callback receives both the cursor and this source array. Make processing safe to repeat because a failed page is fetched and processed again before its checkpoint completes.

`ProductCursorRunner` supplies this adapter for PIM's typed `getProductsWithCursorAndViews` operation. It freezes page size, views, language context and archive state, and accepts a callback to process each product page. `PagePaginator` provides the same checkpoint semantics for numbered pages; its fetch callback returns `items` and a boolean `has_more` and receives the page number and source array.

```php
$this->products->traverse($context, 'scan-products', function (array $products): void {
    foreach ($products as $product) {
        // Reconcile updates by the product's stable ID before repeating a write.
        $this->processProduct($product['id']);
    }
}, pageSize: 100, languageContext: 'en');
```

Both job runners persist `<submission-step>-completion` separately from the submitted ID. A timeout or failed job leaves only the submission checkpoint; a completed job is skipped on the next retry. Polling uses a monotonic clock and refreshes the execution lease before and after each wait. If ownership is lost, the next request and checkpoint are rejected.

`BatchProcessor` walks a repeatable, stable ordered iterable and saves each batch's input fingerprint before processing starts. It rejects changed input on retry even when the previous batch was interrupted, bounds memory to the configured batch size, and records completion only after every record in the batch finishes. A failed batch is retried as a whole, so record mutations need stable identifiers and reconciliation or idempotent behavior.

`MediaUploadRunner` implements the Media Bank upload sequence with stable checkpoints. It calls typed `createAsset`, saves the returned asset ID and encrypts the signed URL/form fields before persisting them, streams the source file to the transfer host, then calls typed `completeAsset`. Retry skips completed stages and reuses the same asset ID and upload instructions. If the final write has an uncertain outcome, the mutation ledger blocks an automatic duplicate completion call for reconciliation.

The transfer client receives no Bluestone credentials. Before dispatch, it requires `BLUESTONE_MEDIA_TRANSFER_KEY` (a base64 Sodium secretbox key) and `BLUESTONE_MEDIA_UPLOAD_HOSTS` (a comma-separated exact hostname allowlist). It accepts HTTPS only, rejects credentials, fragments, non-standard ports and unlisted hosts, and does not follow redirects. Upload progress refreshes the migration lock periodically. A 401/403 transfer response is reported as a possibly expired signed destination without printing the URL or form fields. The upload ID remains in the tracking database; reconcile the pending asset before restarting with a new mutation name. Keep the encryption key stable while a migration has an unfinished upload, and store it in the local secret manager or `.env.local`, never in migration source.

```php
$assetId = $this->mediaUploads->upload(
    $context,
    'hero-image-v1',
    $projectDir.'/var/import/hero.png',
    'image/png',
    'en',
);
```

`upload()` requires a readable local file with a filename accepted by the pinned `CreateUploadAssetRequest` contract. The runner fingerprints the bytes when the migration starts and again before transfer; a changed file is rejected. The multipart file part includes the filename and the requested or signed content type. If those content types disagree, the runner stops before transfer. Transfer request failures do not complete the transfer checkpoint. A retry can therefore reuse the saved submission and retry that stage. The external upload protocol uses multipart form fields returned by Bluestone plus the file field.

## Component workflow selection

Use a domain runner when the operation sequence has persistent progress or a retry protocol; use the generated typed method for a single documented operation. No workflow is inferred from an HTTP 202 response or an operation name alone.

| Components | Workflow support | Other operations |
| --- | --- | --- |
| PIM | Product cursor traversal, product/attribute/catalog mutations, PIM job polling | Direct typed calls for other operations; asynchronous candidates are listed in `app:api:async-inventory` for contract review |
| Media bank | `MediaUploadRunner` for create, external transfer and completion | Direct typed calls for asset metadata, labels, attributes and reads |
| Bulk Operations | Separate Bulk Operations job polling with its own terminal-state contract | Direct typed calls for job submission and other operations |
| Search | Cursor/page traversal primitives can be composed with typed search methods | Direct typed calls unless the migration needs checkpointed multi-page processing |
| Public API, Public API Sync | Direct typed methods; API key remains isolated to Public API operations | No additional multi-step workflow is inferred |
| Labels, Global Settings, History, Tasks, Query Builder, Metadata, Completeness Score, UI Settings, IDP, External Notifications | Direct typed methods | Add a runner only when a documented multi-request protocol or stable recovery requirement exists |

The async inventory currently contains 58 specification-signal candidates: the PIM and Bulk Operations pollers are supported; the remaining 56 are marked for protocol review. Review their actual contract before building a service. IDP administrative calls are not included implicitly in a general test run.

## Refresh specifications

Each immutable revision in `resources/bluestone/revisions/<revision>/` stores the full upstream OpenAPI JSON, source URL and SHA-256, extracted routes and per-operation coverage inventory. `resources/bluestone/current.json` selects the active set for new migrations. The tracking database stores the revision first selected by each migration; failed or interrupted migrations keep using their original revision on retry. Runtime requests use these local files and never fetch documentation. Older revisions are retained for comparison and recovery.

```sh
# Download and compile all published Production documentation specs.
# This reads public documentation and does not access a Bluestone tenant.
php bin/update-api-catalog
php bin/verify-generated-contracts
php bin/console app:api:coverage
php bin/console app:api:async-inventory
php bin/console app:api:migration-compatibility

# Compare two saved component specifications, including newly required request fields:
php bin/diff-api-specifications --before=OLD_REV --after=NEW_REV --component=pim

# Alternatively, compile previously downloaded OpenAPI JSON files offline:
php bin/update-api-catalog --source-dir=/path/to/openapi-json
```

The updater reads and validates all components before staging a new revision, verifies the staged checksums and catalog counts, generates the matching revision-specific models and operation facades, then atomically changes the active revision pointer. If generation fails, the previous active revision remains selected. Older revisions remain available. Unknown authentication, query serialization, unexpected server hosts and duplicate operation IDs fail regeneration. The route compiler is stable for the same source inputs; Jane and its template version are pinned for DTO generation and byte-for-byte reproducibility is checked offline. Review catalog changes before using them with existing migrations, particularly changes to paths, operation IDs and required inputs. Use `bin/diff-api-specifications` to compare saved revisions. Clear Symfony's production cache after changing connector service classes.

`bin/generate-api-models` uses the pinned Jane 7.14.4 OpenAPI 3.0 generator against the stored inputs and publishes models under the matching revision namespace. Generated HTTP clients and endpoint code are discarded, so API execution continues through the shared runner.

The coverage inventory counts generated methods separately from fixture and workflow evidence. `resources/bluestone/contract-evidence.json` records test cases against the component, operation ID, revision and OpenAPI checksum. Evidence becomes stale when either revision or checksum differs. Partial, missing, stale, skipped, blocked and verified outcomes remain distinct; each incomplete row includes an action needed to close its gap. The current evidence contains complete fixture sets for eleven components and verifies 351 individual operations, including all 224 PIM operations, plus workflow evidence for five operations. Other tested cases remain partial where request or response fixtures are missing, and every live operation remains unverified. `executeTyped()` validation alone does not count as fixture verification. `app:api:async-inventory` lists operations whose specs contain asynchronous signals for review; an HTTP 202 response alone does not prove that polling is needed. Deprecated routes retain their published flag.

The reviewed offline fixture selection policy and live prerequisites are documented in [live verification](live-verification.md). The policy has no default live groups; do not treat it as evidence that a tenant fixture has run.

`php bin/verify-generated-contracts` parses all generated files using PHP 8.2 syntax, reconciles every method with its pinned routing catalog, recompiles those routes from the saved sources, checks model/normalizer sets and rejects independent generated HTTP clients. The refresh command runs this gate before changing the active revision. The [implementation evidence](implementation-evidence.md) records the latest checks and remaining limits.

Deprecated operations remain visible with their published deprecation flag; check their current availability before selecting one. The connectors provide operation dispatch and input-presence checks. Verify actual payloads and permissions against your Bluestone test tenant before running a new migration against production.
