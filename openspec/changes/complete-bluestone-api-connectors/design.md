## Context

See [proposal.md](proposal.md) for motivation and the four capability deltas under `specs/` for the behavior contracts.

The repository is currently a Symfony console migration application with 16 component connectors, 547 generated named operations, pinned OpenAPI revisions, fixture evidence, shared HTTP authentication, persistent migration checkpoints and reusable PIM/media workflows. The Composer root is still a `project`, public classes use the application namespace, and generated PHP contracts live under an ignored build directory. The runtime consumes pinned local contracts; there is no live endpoint verification evidence.

Node 22 is selected through `.nvmrc`. It supports development tools; generated application artifacts must remain compatible with PHP 8.2 and Symfony 7.4.

## Goals / Non-Goals

**Goals:**

- Add a typed contract layer that delegates execution to the existing connectors and runner.
- Make full specifications, generated output and coverage evidence reproducible as a compatible revision set.
- Keep multi-request workflows resumable without changing the meaning of completed checkpoints.
- Distinguish offline contract checks from evidence obtained through a test tenant.
- Deliver the reusable API and migration capabilities as a company-maintained Composer SDK that company PHP applications can install and use.

**Non-Goals:**

- Replacing Symfony, the current tracking database or generic operation dispatch.
- Automatically executing every operation against a tenant or running production migrations during installation.
- Promising atomic transactions or exactly-once execution across HTTP and database writes.
- Building business-specific import transformations before their source data and desired changes are defined.
- Publishing an official Bluestone-maintained or public Packagist SDK.

## Decisions

### 1. Preserve full specifications and publish compatible artifact sets

Keep the full OpenAPI inputs alongside source metadata and checksums. Generate routing contracts, types and a coverage inventory from the same revision. Build all outputs in a temporary location, validate them together, then switch the active revision only after the set is complete. Retain the prior revision for rollback and unfinished migrations.

The existing route-only snapshots are insufficient for schema validation. Fetching schemas at runtime would make a migration's behavior depend on upstream documentation changes, so runtime remains offline with respect to documentation.

### 2. Generate contract models and operation signatures; retain the shared transport

Use a pinned OpenAPI generation tool for request/response models and named operation signatures. Integrate the generated contracts through project-owned component adapters whose only execution path is the current connector and `ApiOperationRunner`. Pin the generator, templates and any schema validator in development/dependency configuration. The initial implementation task proves PHP 8.2 compatibility, schema support and transport delegation on representative operations before expanding generation to all components.

A separately generated HTTP client would duplicate OAuth handling, bypass lock heartbeats and introduce a second retry policy. Hand-writing 547 operation contracts would make regeneration and drift review costly. Generated code is kept in a separate directory and receives changes through generation inputs rather than manual patches.

### 3. Make validation additive and preserve generic-call compatibility

Typed calls validate parameters and bodies before dispatch, then validate declared structured responses before a checkpoint can complete. Models distinguish an absent field from explicit null for partial updates. Validation follows the actual OpenAPI version, including references, composition and documented additional-property rules. Empty and binary responses use their declared response forms rather than forced JSON decoding.

Existing generic calls retain their current return objects and behavior. Add a separate explicit typed API on each component; do not silently enable strict payload validation on historical generic migrations. Validation diagnostics contain operation and field identifiers, without raw credentials, signed URLs or rejected values.

### 4. Build workflow services over typed operations and stable checkpoints

Add services for the pagination and asynchronous protocols actually present in the pinned specifications. Share mechanisms only when their contracts match. PIM and Bulk Operations job status methods must have distinct decoders and terminal-state handling despite sharing an operation ID.

Persist query/context identifiers and the last completed page or batch, not entire product datasets. A page advances only after its work completes; record-level changes within an interrupted page must tolerate retries through stable identifiers or reconciliation. Persist submission IDs before polling and retain them after polling failure. Refresh the migration lease between requests and during waits.

Media workflows model submission, transfer and completion as separate stages. If the documented protocol uses external upload URLs, use a restricted transfer client with validated destinations and upload-specific authorization. The Management API token and Public API key remain confined to the configured API host.

### 5. Track evidence for each operation and each contract revision

Maintain a machine-readable inventory keyed by component, operation ID and contract checksum. Track typed mapping, request/response contract fixtures, applicable workflow coverage, deprecation and live verification independently. A report must show missing or stale evidence, not infer full verification from routability or total test count.

Offline fixture tests exercise actual schema constraints and meaningful failures. Shared transport tests verify auth, redirects, deadlines and locking without repeating identical assertions for every generated method. Retain representative dispatch tests for every component and add cross-operation checks where IDs overlap.

### 6. Keep live verification explicitly scoped and independently reportable

Provide a separate integration suite requiring a named test target and selected operation/fixture groups. Use isolated fixtures and cleanup where supported. Administrative or broad-effect operations require their own scoped fixtures and are never swept into a generic run. Record unmet permissions or tenant features as blocked, and record skips separately from successful verification.

No tenant writes are part of this planning change. Default `composer check` remains offline. PostgreSQL/MySQL ledger checks are additional targeted integration checks before claiming those deployment combinations verified.

### 7. Make this repository the source for the company Composer SDK

Treat this repository as the source of a company-maintained PHP Composer SDK/toolkit, with the current migration console as its development host and reference integration. Do not require a new repository as part of the package work. Publish one library package named `youwe/bluestone-pim-sdk` and use `Youwe\BluestonePim\` for SDK classes. Migration classes remain in the consuming application's namespace and directory; the SDK supplies the interface, runner and Symfony service configuration.

The package surface covers typed component operations, transport/authentication, pinned contract revision data, generated DTOs/facades, validation, migration tracking, reusable workflow services and reusable migration/inspection console commands. Keep the migration ledger and its HTTP lock guarantees intact. The console kernel, tests and sample migrations remain development/reference-host concerns; they are not part of the SDK's public API. DDEV belongs in the consuming host application's repository and is not shipped from this SDK repository.

Release artifacts must contain generated code matching the packaged OpenAPI revision. Keep generated PHP out of the source repository and produce a complete package artifact through a deterministic offline build. A clean consumer installation must prove that Composer autoloading, service registration, pinned revision selection and offline typed calls work without source copying. Keep the package under company-controlled distribution; this change does not assume a public registry.

### 8. Make the Composer package usable without Symfony Flex

Ship the SDK as a `symfony-bundle` package with a Composer `bin` executable that boots the consuming Symfony application's configuration and enables the SDK bundle for that CLI process. The consumer can install the package and run `vendor/bin/bluestone bluestone:migrations:install` without editing `config/bundles.php`. SDK commands use the `bluestone:` namespace. The install command creates the tracking tables and binds them to the explicitly configured target without making API calls. Use a dedicated `BLUESTONE_MIGRATIONS_DATABASE_URL` connection with a local SQLite default; never replace the host application's DBAL connection or `DATABASE_URL`. Require an explicit target label before binding the ledger, and use Bluestone test-host defaults for API URLs. Give non-secret optional credentials and media settings empty service defaults so the SDK bundle can load alongside host application services. Discover and generate migrations under `src/Migration` and `App\Migration`. Provide reusable helpers such as `AbstractPimMigration::createCategory()` so migrations can call typed, checkpointed operations in concise domain language. Flex registration remains an optional convenience for exposing SDK commands through the application's own `bin/console`; private recipes can be published separately.

Mutation callbacks distinguish explicit pre-dispatch validation/configuration failures from failures after dispatch may have begun. Persist a `not_sent` state for the former so a retry can safely submit the unchanged request; preserve the original exception as the cause for uncertain outcomes and continue to stop automatic retries.

## Risks / Trade-offs

- **Specification gaps or incorrect schemas** → Keep source provenance, record gaps, add verified fixtures, and avoid inventing undocumented field constraints.
- **Generator does not support a required schema construct** → Prove representative constructs first; fail generation with an explicit gap until supported, rather than emit an inaccurate typed contract.
- **Large generated surface** → Separate generated artifacts from handwritten workflows and require deterministic regeneration.
- **New validation rejects old generic migrations** → Keep strict validation on the additive typed interface and regression-test the generic interface.
- **API side effect succeeds before progress is persisted** → Reconcile on retry and retain documented idempotency semantics; checkpoints cannot eliminate this window.
- **Contract refresh invalidates unfinished work** → Retain compatible pinned revisions and require an explicit transition for unfinished migrations.
- **Permissions or deprecated endpoints prevent live testing** → Report blocked cases and their prerequisites; do not count them as verified.

## Migration Plan

1. Establish the per-operation inventory and full pinned specification inputs.
2. Prove and pin generation/validation tooling; generate typed adapters and models in component-sized increments with offline fixtures.
3. Add and verify workflow services, preserving existing generic calls and checkpoint records.
4. Add the scoped integration harness and execute only the selected test-tenant fixtures once their prerequisites are available.
5. Resolve the SDK/application package boundary, establish stable package metadata and namespace, and prove installation from a clean company consumer.
6. Publish SDK installation/update documentation and the coverage report, including outstanding live-verification gaps. Rebuild the production service container before using newly added services.

Rollback selects the previous compatible application/contract artifact set and retains the tracking database. It does not roll back API side effects; changes already applied to Bluestone require reconciliation or a forward corrective migration.
