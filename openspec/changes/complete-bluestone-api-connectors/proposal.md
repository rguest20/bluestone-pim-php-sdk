## Why

The project is intended to become the company's reusable Bluestone PIM PHP SDK and migration toolkit, not only a one-off migration application. It needs a supported Composer package surface that lets company PHP applications reuse the typed API contracts, pinned revisions and recovery-aware workflows without copying source code.

## What Changes

- Preserve full, pinned OpenAPI contracts and add reproducible generation and drift reporting alongside the existing routing catalog.
- Add named, typed operation interfaces and request/response validation for each component while preserving generic `execute()` compatibility.
- Add reusable services for pagination, asynchronous work, media workflows and retry-safe mutations, retaining database checkpoints and locking.
- Track routing, typed-contract, workflow and live-verification coverage separately for every operation.
- Add offline contract tests and an opt-in test-tenant integration suite. Record unsupported, deprecated or externally blocked cases explicitly.
- Package the reusable API and migration toolkit as a company-maintained Composer dependency, with stable namespaces, revision-matched generated artifacts and a documented consumer path.
- Make the package usable without Symfony Flex through a Composer-installed executable, safe local defaults, an explicit tracking-database setup command and reusable migration helpers.
- Prioritise contract tooling first, workflow services second, and completion of live verification third. This change records planned implementation; it does not execute tenant operations.

## Capabilities

### New Capabilities

- `api-contracts`: Reproducible, distributable typed operation interfaces and schema validation across all documented components, using the existing transport.
- `api-workflows`: Checkpoint-aware pagination, asynchronous completion, media handling and mutation recovery services.
- `api-coverage`: Per-operation contract and integration evidence, with offline defaults and explicit live-test selection.
- `api-specification-updates`: Pinned full specifications, deterministic generation, drift reports and compatibility review for historical migrations.

### Modified Capabilities

None. No existing capability specifications have been established in this repository; the new specifications extend the implemented connector foundation.

## Impact

- Affects `src/Api/`, `src/Service/`, `resources/bluestone/`, generation tooling, tests and connector documentation during implementation.
- Adds Composer package metadata, a stable consumer-facing namespace and a package build/consumption path; the package boundary between reusable SDK code and the executable migration host must be resolved.
- Adds full specification fixtures, generated types and operation coverage records; generator and validator dependencies must support PHP 8.2 and reuse Symfony's existing HTTP transport.
- Retains the 16 connector services, existing generic calls, API authentication, migration ledger and checkpoint semantics.
- Live verification requires a dedicated Bluestone test tenant, appropriately scoped credentials and disposable fixtures. Its execution and evidence remain separate from offline test results.
- Node 22 has been configured in `.nvmrc` for development tooling. The application runtime remains PHP.
