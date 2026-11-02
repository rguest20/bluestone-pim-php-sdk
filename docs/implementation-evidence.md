# Implementation evidence

Recorded on 2026-10-31 for OpenAPI revision `2c19c082ed473e21`.

## Current scope

| Layer | Evidence |
| --- | --- |
| Routing and named methods | 547 operations across all 16 components |
| Generated request signatures | 547 mapped operations; zero unresolved request-model references |
| Complete fixture component sets | 11: every operation in Bulk Operations, Completeness Score, Global Settings, History, Labels, Metadata, PIM, Query Builder, Search, Tasks and UI Settings |
| Fixture-verified operations | 351 of 547, including all 224 PIM catalog/product/variant/attribute/dictionary/relation/policy and remaining operations, Media Bank upload and empty 204 cases, Public API health/product, Public API Sync session lifecycle, offline IDP policy/role requests and External Notifications subscriptions/webhook cases |
| Verified workflows | 5 operation records across 4 workflows: PIM product cursor traversal, PIM job polling, Bulk Operations job polling, and Media Bank upload/complete |
| Other operation fixture evidence | Partial cases are recorded separately with remaining actions |
| Live tenant verification | 0; no tenant calls executed; blocked at the user's request |
| Asynchronous protocol inventory | 2 supported pollers (PIM and Bulk Operations); 56 specification-signal candidates remain explicitly marked for review |
| Tracking database engines | SQLite 3.53.4, PostgreSQL 16.13 and MySQL 8.0.45, all verified with the disposable database suite |

`resources/bluestone/contract-evidence.json` identifies the exact test methods, revision and component checksums supporting each operation. `app:api:coverage --json` reconciles the inventory and supplies an action for each remaining gap. Old-revision or changed-checksum evidence becomes stale; blocked and skipped outcomes cannot contribute to verified counts.

## Checks performed

- `tests/OperationContractFixturesTest.php` passed: **1,626 tests, 8,650 assertions**. `composer check` passed: **1,761 tests, 13,689 assertions**, Composer validation, Symfony container validation, and generated contract verification.
- `composer check:databases` passed: **8 tests and 41 assertions per engine** on SQLite, PostgreSQL and MySQL, with no skipped tests. The suite also verifies durable completed and uncertain mutation outcomes across separate connections. See [database verification](database-verification.md) and its [evidence report](evidence/database-matrix-2026-10-31.json).
- Two consecutive `composer build:contracts` runs rebuilt all retained revisions offline from pinned source files; each generated-tree SHA-256 inventory was `7b8eb70d60e6216273252dc248f0366eb0aac2d69267c37379bb0e0affa43332`.
- `composer dump-autoload --optimize --strict-psr` passed with no class mapping warnings.
- `APP_ENV=prod APP_DEBUG=0 php bin/console lint:container` passed.
- `php bin/verify-generated-contracts` parsed **2,756 PHP files using PHP 8.2 syntax**, reconciled all named methods, recompiled the routing catalogs from the stored source documents, and checked the model/normalizer sets and absence of independent generated HTTP clients.
- `openspec validate complete-bluestone-api-connectors --strict` passed under Node **22.23.2**.
- `php bin/update-api-catalog --source-dir=resources/bluestone/revisions/2c19c082ed473e21/openapi` passed using local inputs and retained the same active revision.
- UI settings, Bulk Operations, Labels, Global Settings, Metadata, Completeness Score, History, Tasks, Search, Query Builder and PIM fixture documents contain valid/invalid request and response examples for every operation in those components. PIM's complete 224-operation fixture document is generated from the pinned OpenAPI schemas, then verified with valid request/response, invalid request/response and remote-error tests. Fixture document hashes and named test providers are recorded per operation in `resources/bluestone/contract-evidence.json`.
- `php bin/console app:api:async-inventory --json` classified all 58 specification-signal candidates: two map to the implemented component-specific pollers and 56 have explicit protocol-review gaps. It makes no live calls and does not infer polling from HTTP 202 alone.

Tests ran on **PHP 8.5.5**. Dependencies are resolved for the Composer PHP 8.2 platform, and generated files pass the PHP 8.2 parser; an actual PHP 8.2 runtime run has not been performed.

## What the tests establish

- Typed calls resolve source OpenAPI paths and verbs correctly while requests use the configured test-host service prefixes.
- Referenced, composed and nullable schemas validate locally. Generated union and array request models serialize through the shared connector. Omitted fields, explicit nulls, empty objects and empty lists retain their distinct JSON forms.
- JSON and empty responses are exercised against pinned Bluestone contracts. Additional schema fixtures exercise binary and HTTP 202 acknowledgement forms. Invalid responses prevent checkpoint completion.
- Management OAuth, independent Public API keys, unauthenticated Public API health, header restrictions, request deadlines, lock ownership and absence of automatic write retries retain their shared behavior.
- A failed migration keeps its original contract revision when an upstream operation is removed. Compatibility reporting identifies unfinished work and excludes applied migrations.
- Injected component-generation failures and incomplete generated artifacts leave the old active revision selected and intact.
- Cursor and numbered-page traversal skip completed pages, reject changed query/context settings, and stop repeated cursors before recording the bad page. Batch recovery reconciles interrupted records by stable identifiers and rejects changed batch input before processing resumes.
- PIM now has offline schema-derived request and response fixtures for every one of its 224 operations, including invalid-request, invalid-success-response and documented remote-error cases where applicable. They validate against the pinned contract; they do not establish tenant behavior or permissions. PIM and Bulk Operations use distinct terminal-state contracts. Submission IDs survive timeouts and interruptions; completion is recorded separately. A response arriving after the polling deadline cannot complete the checkpoint. Lease loss during waits, cursor traversal, numbered pages or batches stops further work before another request or checkpoint.
- Product create/update, attribute-definition create and catalog-node update runners use typed operation contracts and a durable mutation intent ledger. It stores a request hash and pinned revision, persists IDs after success, and prevents automatic resubmission after an uncertain response. The request body is not persisted in the intent table.
- Media Bank upload submission, external transfer and completion use separate stable checkpoints. The signed URL and form fields are encrypted before persistence, transfer uses an exact HTTPS host allowlist without Bluestone credentials or redirects, source bytes are fingerprinted before transfer, lock heartbeats run during transfer progress, and a rejected signed URL is reported without logging its contents. Mocked failure/retry cases confirm completed submission is not repeated and transfer resumes with the stored asset ID.
- External Notifications fixtures validate required webhook subscription/query inputs and verify that diagnostics do not disclose synthetic secret-shaped values. IDP fixtures use local mocked writes only; no organization-wide operation has been executed.
- `app:api:live-plan` requires an explicit target, fixture group and component-qualified operation list, rejects operations outside the selected groups, and requires separate opt-in for broad IDP effects. It is plan-only; the separate live executor and disposable fixture cleanup suite remain unfinished.

## Remaining evidence and implementation

The unchecked OpenSpec tasks remain authoritative. PIM has complete offline fixture coverage for all 224 pinned operations. The explicit live fixture executor and isolated cleanup suite are not complete. The reviewed selection policy has no default live groups and keeps IDP administrative writes separately scoped. Live verification remains blocked at the user's request until a dedicated tenant, credentials and disposable fixtures are configured.

No live API reads or writes, remote Git actions, deployments or Git staging were performed during these checks.
