## Why

All 547 operations in the current 16-component snapshot can be dispatched, but migration authors still construct untyped payloads and implement most pagination, asynchronous completion and recovery behavior themselves. We need a tracked path from this routing foundation to connectors whose contracts and workflows are verified for real migration use.

## What Changes

- Preserve full, pinned OpenAPI contracts and add reproducible generation and drift reporting alongside the existing routing catalog.
- Add named, typed operation interfaces and request/response validation for each component while preserving generic `execute()` compatibility.
- Add reusable services for pagination, asynchronous work, media workflows and retry-safe mutations, retaining database checkpoints and locking.
- Track routing, typed-contract, workflow and live-verification coverage separately for every operation.
- Add offline contract tests and an opt-in test-tenant integration suite. Record unsupported, deprecated or externally blocked cases explicitly.
- Prioritise contract tooling first, workflow services second, and completion of live verification third. This change records planned implementation; it does not execute tenant operations.

## Capabilities

### New Capabilities

- `api-contracts`: Reproducible typed operation interfaces and schema validation across all documented components, using the existing transport.
- `api-workflows`: Checkpoint-aware pagination, asynchronous completion, media handling and mutation recovery services.
- `api-coverage`: Per-operation contract and integration evidence, with offline defaults and explicit live-test selection.
- `api-specification-updates`: Pinned full specifications, deterministic generation, drift reports and compatibility review for historical migrations.

### Modified Capabilities

None. No existing capability specifications have been established in this repository; the new specifications extend the implemented connector foundation.

## Impact

- Affects `src/Api/`, `src/Service/`, `resources/bluestone/`, generation tooling, tests and connector documentation during implementation.
- Adds full specification fixtures, generated types and operation coverage records; generator and validator dependencies must support PHP 8.2 and reuse Symfony's existing HTTP transport.
- Retains the 16 connector services, existing generic calls, API authentication, migration ledger and checkpoint semantics.
- Live verification requires a dedicated Bluestone test tenant, appropriately scoped credentials and disposable fixtures. Its execution and evidence remain separate from offline test results.
- Node 22 has been configured in `.nvmrc` for development tooling. The application runtime remains PHP.
