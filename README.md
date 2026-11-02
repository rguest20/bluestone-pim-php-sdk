# Bluestone PIM API migrations

A Symfony 7.4 / PHP 8.2+ console application for versioned changes to Bluestone PIM through its Management API. Migrations and runners are autowired Symfony services. A local tracking database records applied migrations, attempts, failures and completed steps.

Dedicated Symfony connectors cover all 16 API components in Bluestone's published specifications, with a local routing catalog for 547 documented operations. They support operation IDs, path/query parameters, JSON, raw/form/multipart bodies and endpoint-specific headers. The shared API runner also accepts complete Management API paths such as `/pim`, `/metadata` and `/media-bank`. Add specialised runner services for reusable business logic. See [API connectors](docs/api-connectors.md) for the component list and migration examples.

## Setup

Requirements: PHP 8.2+, Composer 2, and PDO with the driver for your tracking database (`pdo_sqlite` by default).

```sh
composer install
composer build:contracts
cp .env.local.example .env.local
```

The checked-in `resources/bluestone/revisions/` directory contains the pinned OpenAPI inputs and compiled routing catalogs. `composer build:contracts` uses those local snapshots to regenerate the revision-specific PHP DTOs, normalizers and operation facades under `generated/`. The build does not fetch API documentation. `generated/` is ignored by Git, so build it before running the app locally and include it in the release artifact deployed to production.

### Bootstrap or refresh the API contracts

If you are starting without a pinned snapshot, or intentionally refreshing the published API specifications, generate a new snapshot first:

```sh
php bin/update-api-catalog
```

This command downloads the public OpenAPI documents from Bluestone's documentation site, compiles the routing catalogs, stores both under a content-addressed `resources/bluestone/revisions/<revision>/` directory, generates the matching PHP contracts, and updates `resources/bluestone/current.json` only after the complete candidate set is ready. No tenant credentials or tenant API calls are used. To compile an already downloaded set of OpenAPI JSON files instead, pass its directory:

```sh
php bin/update-api-catalog --source-dir=/path/to/openapi-json
```

Review the new revision and active pointer before adopting it. Existing revisions must be retained while unfinished or historical migrations still reference them. Then regenerate all retained PHP contract artifacts and run the repository checks:

```sh
composer build:contracts
php bin/verify-generated-contracts
composer check
php bin/console app:api:coverage
```

The files have different roles:

| Path | How it is created | Purpose |
| --- | --- | --- |
| `resources/bluestone/revisions/<revision>/openapi/` | Downloaded by `bin/update-api-catalog` or read from `--source-dir` | Pinned upstream API schemas used for offline validation and regeneration. |
| `resources/bluestone/revisions/<revision>/catalog/` | Compiled by `bin/update-api-catalog` from those schemas | Runtime operation paths, methods and parameter metadata. |
| `resources/bluestone/current.json` | Updated by the snapshot activation step | Selects the default revision for new migrations. |
| `generated/R<revision>/` | Rebuilt by `composer build:contracts` | Generated DTOs, normalizers and named operation facades. |
| `resources/bluestone/fixtures/<revision>/` | Reviewed and maintained as fixture examples | Offline request/response and invalid-case examples. These are not produced by the contract generator. |
| `resources/bluestone/contract-evidence.json` | Updated alongside fixture evidence | Links fixture test results to exact revisions and file checksums. |

When adding fixture examples for a newly pinned revision, base them on that revision's OpenAPI schemas and update the matching operation evidence and checksums. A generated operation method or a schema-valid request alone does not count as fixture verification. The root-level component catalogs, such as `resources/bluestone/pim.json`, are retained for legacy/unpinned connector lookups; new pinned work uses the catalog under its revision directory.

Set `BLUESTONE_CLIENT_ID`, `BLUESTONE_CLIENT_SECRET` and a tenant/environment-specific `BLUESTONE_TARGET` in `.env.local`. The defaults point to Bluestone **test**. Management API credentials use OAuth2 client credentials; the read-only Public API key is a different integration.

```dotenv
BLUESTONE_TARGET=my-tenant-test
BLUESTONE_API_BASE_URL=https://api.test.bluestonepim.com
BLUESTONE_TOKEN_URL=https://idp.test.bluestonepim.com/op/token
BLUESTONE_CLIENT_ID=your-client-id
BLUESTONE_CLIENT_SECRET=your-client-secret
DATABASE_URL="sqlite:///%kernel.project_dir%/var/migrations.db"
```

SQLite's file and directory are created automatically. PostgreSQL and MySQL connection examples are in `.env.local.example`; create those databases first and install the matching PDO extension. Tables are initialized on the first real migration run.

Use a **separate persistent database for each Bluestone tenant/environment**. Keep its data between releases and back it up. The first run binds the ledger to `BLUESTONE_TARGET` and the API base URL; later runs reject a different configuration. This is a configuration guard, not validation of the organization associated with your credentials. Ensure those credentials belong to the configured target. Credential rotation does not reset the ledger.

### Run the console and MySQL with DDEV

This project currently provides a Symfony **console application**, not a browser-facing web UI. The checked-in DDEV config starts a PHP 8.3 container and MySQL 8.0, with the database URL pointed at DDEV's internal `db` service. `webserver_type: generic` keeps the repository root from being served as a website.

```sh
ddev start
ddev composer install
ddev composer build:contracts
ddev exec php bin/console list
ddev exec php bin/console app:migrations:status
ddev exec php bin/console app:migrations:migrate --dry-run
```

`ddev start` launches the local PHP and MySQL services. The dry run lists pending migrations without executing migration code or contacting Bluestone. To use the DDEV database from a host-side PHP process, set `DATABASE_URL` to the host connection shown by `ddev describe`; inside DDEV use the configured `db` hostname. DDEV's local database is for development only; keep production credentials and tracking databases separate. See the [DDEV configuration](https://ddev.readthedocs.io/en/stable/users/configuration/config/) and [database type reference](https://ddev.readthedocs.io/en/stable/users/extend/database-types/).

## Commands

```sh
php bin/console app:migrations:make "Rename a catalog node"
php bin/console app:migrations:status
php bin/console app:migrations:migrate --dry-run
php bin/console app:migrations:migrate
# After inspecting and reconciling a failed/interrupted operation:
php bin/console app:migrations:migrate --retry
```

`make` writes a timestamped class to `migrations/`. Implement its `up()` method and remove the generated guard before running it. The guard prevents an unfinished migration being recorded as successfully applied. Migration descriptions and constructors must have no side effects.

`status` shows each migration's state, attempt count, completed checkpoint count, applied timestamp and last exception type. `--dry-run` only lists the plan: it does not invoke `up()`, run API requests or insert tracking rows. Opening a new SQLite database can create an empty database file. The plan does not validate remote permissions, payloads or current PIM data.

Migrations run in ascending UTC timestamp order. Applied versions are skipped. The runner stops at the first failure and exits unsuccessfully. Retrying a failed or interrupted migration requires `--retry` and skips completed checkpoints. Migration file checksums prevent editing a version once it has been applied. You can correct a failed migration before retrying it; preserve its completed checkpoint names and behavior because they will remain skipped. Missing historical migrations and newly inserted versions older than the latest applied version are rejected. Keep historical migration files and add a later migration to change previously applied behavior.

Use the domain mutation runners for writes that may be repeated by migration retries. Their durable intent prevents automatic resubmission when a response was lost; see [mutation recovery](docs/mutation-recovery.md) for the reconciliation path.

For an end-to-end starter PIM setup and copyable migration examples, see the [initial PIM setup guide](docs/initial-pim-setup.md). The samples are kept outside `migrations/` so they are not auto-discovered or executed.

## Migrations and service runners

The application has two levels of runners:

| Service | Purpose |
| --- | --- |
| `MigrationRunner` | Orders migrations, owns the database lock, and records progress. |
| `ApiOperationRunner` | Executes any documented Management API request with authenticated HTTP and a lock heartbeat. |
| `App\Api\Connector\*Connector` | Component services that dispatch published operation IDs using the local specification catalog. |
| `CatalogRunner` | Checkpointed typed catalog-node updates. |
| `ProductMutationRunner` | Checkpointed product creation and updates with stable identifiers and saved resource IDs. |
| `AttributeDefinitionMutationRunner` | Checkpointed attribute-definition creation using a stable unique number. |
| `PimJobRunner` | Polls the PIM asynchronous task endpoint; `waitForCompletionTyped()` validates against the pinned PIM contract. |
| `BulkOperationsJobRunner` | Polls the separate Bulk Operations job endpoint and returns completed issue details. |
| `CursorPaginator` | Traverses cursor-based endpoints while checkpointing each completed page. |
| `BatchProcessor` | Processes stable ordered input in bounded batches with checkpoint fingerprints. |

Inject specialised runners into migration constructors. Symfony discovers migration services automatically through `MigrationInterface`. Runners in `src/Service/` are also autowired automatically.

```php
<?php

declare(strict_types=1);

namespace BluestoneMigrations;

use App\Migration\MigrationContext;
use App\Migration\MigrationInterface;
use App\Service\CatalogRunner;

final class Version20261028130000 implements MigrationInterface
{
    public function __construct(private readonly CatalogRunner $catalogs)
    {
    }

    public function description(): string
    {
        return 'Rename the hardware catalog node';
    }

    public function up(MigrationContext $context): void
    {
        $this->catalogs->updateDetailsOnce($context, 'rename-hardware-node', 'your-existing-node-id', [
            'name' => ['value' => 'Hardware'],
        ], 'en');
    }
}
```

For an endpoint without a specialised runner, inject `ApiOperationRunner` and call:

```php
$this->api->run('PATCH', '/pim/catalogs/nodes/'.rawurlencode($nodeId), [
    'headers' => ['context' => 'en'],
    'json' => ['name' => ['value' => 'Hardware']],
]);
```

Use the endpoint's documented method, complete service path, request shape and headers. `run()` returns Symfony's `ResponseInterface`, so callers can inspect headers, parse JSON or read binary responses. It consumes the response before returning and rejects all non-2xx responses. JSON is optional; for uploads supply the documented content type and a raw, multipart or stream `body`. Responses are currently buffered in memory; this is a migration client, not a streaming bulk-download tool. Credentials and host headers are managed by the client; absolute URLs and redirects are rejected.

For asynchronous operations, put submission and completion polling in **separate checkpoints**. Return the task ID from the submission checkpoint, then pass it to `PimJobRunner::waitForCompletion()` in the second checkpoint. On retry the saved task ID is returned without resubmitting the operation. The operation's documentation specifies where its task ID is returned (often the `resource-id` header).

```php
$taskId = $context->step('submit-operation', function (): string {
    $response = $this->api->run(/* documented method, path and options */);

    return $response->getHeaders()['resource-id'][0];
});
$context->step('wait-for-operation', fn () => $this->jobs->waitForCompletionTyped($taskId, context: $context));
```

`PimJobRunner` polls `/pim/async/status/{taskId}`. `BulkOperationsJobRunner` handles the separate Bulk Operations status contract and returns `COMPLETED_WITH_ISSUES` details for the migration to inspect. Both refresh the migration lock during polling when given the context. A successful HTTP submission alone does not prove an asynchronous change has finished.

## Recovery and progress storage

The tracking database uses six tables:

| Table | Contents |
| --- | --- |
| `pim_migration` | Version, SHA-256 checksum, running/failed/applied state, attempts and UTC timestamps. |
| `pim_migration_contract` | The immutable API specification revision selected when a migration first starts. |
| `pim_migration_operation` | Cataloged connector operations used by each migration and the revision they used. |
| `pim_migration_step` | Completed step names, timestamps and JSON-serializable return values. |
| `pim_migration_target` | Binding to the configured tenant/environment label and API base URL. |
| `pim_migration_lock` | Shared database lease preventing concurrent runners against this ledger. |

There is no atomic transaction spanning Bluestone and the tracking database. If the remote operation succeeds but the process dies before recording it, that operation can run again. Write retry-safe changes: use stable identifiers, inspect existing state before creating records, and use an idempotency key only if the endpoint documents support for one. Checkpoints reduce repeated work; they do not guarantee exactly-once execution. Reconcile an uncertain operation in Bluestone before `--retry`.

Checkpoint names must be stable and unique within their migration. Return only small, non-sensitive JSON values such as resource IDs or task IDs; those values are persisted in the database. The runner stores exception types, rather than potentially sensitive remote response bodies. Exceptions deliberately report limited detail; diagnose API failures using a controlled reproduction and the endpoint documentation.

HTTP requests have a 60-second maximum duration and there are no automatic write retries, including on 401, 429 or 5xx responses. Access tokens are cached in memory and renewed before expiry. The database lock expires after 300 seconds if a process crashes and is refreshed around requests and checkpoints. Long-running loops, custom HTTP work or waits must call `$context->heartbeat()` at least every 60 seconds. All processes for the same target must use the same tracking database; separate ledgers cannot coordinate locks.

The runner is forward-only. Undo a PIM change through a new corrective migration. A database rollback cannot undo an HTTP request. Changes to injected runner implementations can affect older migrations and retries, so preserve their historical behavior or version the runner logic where necessary. `app:api:migration-compatibility` compares operation records for unfinished migrations with the active OpenAPI revision; it excludes applied migrations and never changes migration state.

## Checks and running elsewhere

```sh
composer check
```

This validates Composer metadata, lints Symfony's service container, verifies generated contracts against PHP 8.2 syntax and the pinned specifications, and runs PHPUnit tests with mocked HTTP and real SQLite persistence. No credentials or live Bluestone instance are required for those checks.

Use `php bin/console app:api:list` to browse API components, or `php bin/console app:api:list pim --tag="Catalog nodes"` to list operations in one area. Discovery reads local files and makes no API calls. To refresh from Bluestone's public specifications, run `php bin/update-api-catalog`. It builds the candidate snapshot and matching DTOs/facades before switching the active revision pointer. Review the changes, then run `composer check`. Run `php bin/generate-api-models` separately to reproduce generated files from the currently active offline snapshot.

`php bin/console app:api:coverage` reports routing, typed contracts, fixtures, workflows and live verification separately. Add `--json` for the per-operation inventory. `php bin/console app:api:async-inventory` finds operations with response signals that may indicate asynchronous work. After importing a new specification revision, compare it with `php bin/diff-api-specifications --before=OLD_REV --after=NEW_REV --component=pim`.

For production, supply secrets through environment variables, use `APP_ENV=prod` and `APP_DEBUG=0`, retain the tracking database and run `php bin/console cache:clear --env=prod` whenever the migration set changes. This rebuilds the service container so new migration classes are registered. Run the migration command explicitly as part of your release process; the repository does not trigger a deployment or call Bluestone automatically during installation.

## OpenSpec planning

Development tooling uses Node 22. Run `nvm use` from this directory before running the installed OpenSpec CLI.

The broader connector proposal is tracked in [complete-bluestone-api-connectors](openspec/changes/complete-bluestone-api-connectors/proposal.md), with [implementation tasks](openspec/changes/complete-bluestone-api-connectors/tasks.md), a technical design and four capability specifications. All 547 operation methods are generated. Contract tooling, pagination, job recovery and coverage evidence have offline checks; broader per-operation fixtures, mutation/media workflows and tenant verification remain open. See [implementation evidence](docs/implementation-evidence.md) for the current verification scope.

```sh
openspec status --change complete-bluestone-api-connectors
openspec validate complete-bluestone-api-connectors --strict
```

## API documentation

- [Management API authentication](https://docs.api.bluestonepim.com/docs/authentication)
- [Environments and base URLs](https://docs.api.bluestonepim.com/docs/environments)
- [Complete documentation and endpoint index](https://docs.api.bluestonepim.com/llms.txt)
- [Catalog node partial update](https://docs.api.bluestonepim.com/reference/partialupdatecatalognode)
- [PIM asynchronous task status](https://docs.api.bluestonepim.com/reference/getjobstatus)
- [OpenAPI specifications and SDK generation](https://docs.api.bluestonepim.com/docs/generate-sdks-and-client-code-from-openapi)
