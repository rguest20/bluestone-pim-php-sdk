## 1. P1 — Establish pinned contracts and an honest coverage baseline

- [x] 1.1 Create a component/operation/revision coverage inventory from the current snapshot; verify all 16 components and 547 operation IDs are represented and that unverified layers are reported as gaps.
- [x] 1.2 Preserve full upstream OpenAPI inputs with provenance and checksums; verify schemas and references can be loaded offline for every component.
- [x] 1.3 Add a specification diff report for operations, authentication, parameters, schemas and deprecations; verify fixtures detect additions, removals and a newly required request field.
- [x] 1.4 Stage and publish compatible artifact sets together, retaining the previous revision; verify an injected component-generation failure leaves the active set unchanged.
- [x] 1.5 Define how unfinished migrations select a compatible contract revision; verify a refresh removing an operation reports affected work without rerunning already applied versions.

## 2. P1 — Prove typed generation and validation

- [x] 2.1 Select and pin generation tooling, templates and a PHP 8.2-compatible OpenAPI validator; verify representative composed, nullable and referenced schemas compile and validate without using an independent HTTP client.
- [x] 2.2 Implement typed request serialization, including omitted versus explicit-null fields; verify PATCH fixtures preserve that distinction and invalid payloads fail before HTTP dispatch.
- [x] 2.3 Implement typed response handling and validation; verify documented JSON, empty, binary and asynchronous acknowledgement responses, plus a schema-invalid response that leaves its checkpoint incomplete.
- [x] 2.4 Add component adapters that delegate to the shared connector/runner; verify OAuth2, Public API key selection, host restrictions, locking and explicit write retries retain their existing behavior.
- [x] 2.5 Add generic-interface regression fixtures; verify existing operation-ID calls and response access still work after adding typed adapters.
- [x] 2.6 Make pinned generation reproducible; verify two offline runs produce identical artifacts with no hand edits to generated output.

## 3. P1 — Complete typed contracts and offline evidence by component

- [x] 3.1 Generate PIM operation signatures and models; verify every PIM operation has a typed mapping and record schema gaps explicitly.
- [x] 3.2 Add PIM catalog, product and variant request/response fixtures; verify valid examples, documented validation failures and response failures for each operation in these groups.
- [x] 3.3 Add PIM attribute, dictionary, relation, policy and remaining operation fixtures; verify the coverage report has no unexplained PIM contract-test gaps.
- [x] 3.4 Generate and verify Media bank contracts; cover upload acknowledgements, resource headers and documented non-JSON responses in offline fixtures.
- [x] 3.5 Generate and verify Search and Query builder contracts; cover search filters, saved views, persisted queries and their documented validation failures.
- [x] 3.6 Generate and verify Labels and Global settings contracts; cover context-dependent values and partial/optional fields with offline fixtures.
- [x] 3.7 Generate and verify History and Tasks contracts; cover list filters, task mutations, comments and documented empty responses.
- [x] 3.8 Generate and verify Public API sync and Public API contracts; verify session operations, API-key independence and unauthenticated health behavior.
- [x] 3.9 Generate and verify IDP contracts; cover administrative operations offline without executing organization-wide changes.
- [x] 3.10 Generate and verify External notifications contracts; cover subscription/webhook payloads and required query inputs without exposing secrets in diagnostics.
- [x] 3.11 Generate and verify Completeness score and Metadata contracts; cover requirement definitions, metadata provider operations and documented schema constraints.
- [x] 3.12 Generate and verify UI settings and Bulk Operations contracts; verify their operation mappings and the distinction between Bulk Operations and PIM job contracts.
- [x] 3.13 Reconcile the complete typed/fixture inventory against all pinned operation IDs; verify every gap is actionable and that routing success alone never satisfies contract coverage.

## 4. P2 — Add pagination and asynchronous workflows

- [x] 4.1 Implement checkpoint-aware cursor traversal over supported typed operations; verify page failure/resume, exhausted cursors, repeated-cursor detection and unchanged query/context on retry.
- [x] 4.2 Implement page-based traversal and bounded batch processing; verify progress advances only after a completed batch and interrupted records can be reconciled on retry.
- [x] 4.3 Extend the existing PIM polling service to typed contracts and saved submission IDs; verify timeout, cancellation, terminal failure and resumed polling without resubmission.
- [x] 4.4 Implement a separate Bulk Operations job service using its documented status contract; verify all documented terminal states and restart behavior independently of PIM status handling.
- [x] 4.5 Inventory other asynchronous protocols in the pinned specs and implement their applicable workflow adapters; verify every asynchronous operation is mapped to a supported protocol or an explicit remaining gap.
- [x] 4.6 Verify lease renewal across pagination, polling and waits; use failure injection to show a runner that loses ownership stops before another request or progress update.

## 5. P2 — Add recoverable domain and media services

- [x] 5.1 Add reusable product, attribute and catalog mutation services over typed operations; verify stable identifiers, saved result IDs and completed-step skipping using migration fixtures.
- [x] 5.2 Add services for other recurring component workflows identified in the coverage inventory; verify each component documents which operations need a workflow and which use a direct typed call.
- [x] 5.3 Implement mutation reconciliation for uncertain create/update outcomes; verify a lost response cannot cause an automatic duplicate create and unsupported reconciliation stops with a clear recovery instruction.
- [x] 5.4 Implement documented media submission, transfer and completion stages; verify retry at each stage preserves usable upload identifiers and resumes only incomplete work.
- [x] 5.5 Add restricted external content transfer if required by the media protocol; verify destination validation, expiry handling and absence of API credentials or signed URL secrets in logs and forwarded headers.

## 6. P3 — Establish live verification and deployment evidence

- [ ] 6.1 Add a separate test-tenant integration harness requiring explicit target and operation/fixture selection; verify default project checks never contact a tenant and unselected operations never run.
- [ ] 6.2 Add isolated fixtures and cleanup for read and reversible-write cases; verify cleanup after success and failure, with unmet credentials/permissions reported as blocked rather than passed.
- [ ] 6.3 Execute selected read-only test-tenant groups when credentials and fixtures are available; record operation/revision-specific evidence and leave unavailable cases explicitly unverified.
- [ ] 6.4 Execute selected mutation, asynchronous and media groups against disposable fixtures when their prerequisites are available; verify remote outcomes, checkpoint recovery and cleanup, and record remaining blocked cases.
- [x] 6.5 Define dedicated fixture prerequisites for IDP and other broad-effect operations; verify these cases cannot be included implicitly in a general live run and leave them unverified until explicitly exercised.
- [x] 6.6 Verify tracking persistence, concurrency and failure recovery on PostgreSQL and MySQL in addition to SQLite before claiming those deployment combinations supported by integration evidence.

## 7. P3 — Publish usage and completion evidence

- [x] 7.1 Document typed calls, domain services, pagination, polling, media recovery and specification refresh; verify examples reference generated interfaces and documented operation contracts.
- [x] 7.2 Publish the per-operation coverage report with stale, deprecated, skipped and blocked cases separated from passes; verify its totals reconcile with the active pinned specification set.
- [x] 7.3 Run `composer check`, production container validation and deterministic offline regeneration; record results together with separately scoped integration evidence and keep any unverified tasks unchecked.

## 8. P1 — Package the company Bluestone SDK for Composer consumers

- [x] 8.1 Define the supported package surface, stable public namespace and boundary between reusable API/workflow services and the executable migration host; verify the decision is recorded in the design and keeps migration execution safeguards intact.
- [x] 8.2 Convert Composer metadata, autoloading and Symfony service registration to a company-maintained installable package; verify strict Composer validation and that internal `App\` classes are not required by SDK consumers.
- [x] 8.3 Include revision-matched OpenAPI data and generated PHP artifacts in the package or provide a deterministic offline package build; verify a clean install can load typed operations without runtime documentation access.
- [x] 8.4 Add a minimal company consumer integration that installs the package through Composer and exercises a typed operation through mocked HTTP; verify it needs no copied SDK source and selects the matching pinned revision.
- [x] 8.5 Document the company distribution/install path, supported PHP/Symfony versions, SDK release compatibility and contract refresh process; verify a clean consumer can follow the instructions.
- [x] 8.6 Ship migration and contract-inspection Symfony commands in the SDK bundle, including migration creation/status/dry-run/retry; verify a consumer sees them after bundle registration.
- [x] 8.7 Discover conventional consumer migrations under `src/Migration` and generate new migration classes there; verify the clean consumer service scan finds and tags an `App\Migration` implementation without SDK source copies.
- [x] 8.8 Ship a Composer `bin` executable that boots the consuming Symfony app without Flex bundle registration, applies safe local database/test-host defaults, and adds `bluestone:migrations:install` to create and target-bind the tracking schema without API calls; verify install/status/migrate commands in a clean consumer.
- [x] 8.9 Provide reusable typed, checkpointed migration helpers such as `AbstractPimMigration::createCategory()` and document the Composer install, tracking setup, migration authoring and optional Flex integration; verify a consumer migration extending the base class is discovered and produces a dry-run plan without tenant calls.
- [ ] 8.10 Classify failures known to occur before API dispatch as retryable `not_sent` mutation intents, retain original exceptions on uncertain outcomes, and verify request/schema validation errors can retry while post-dispatch failures still require reconciliation.
- [ ] 8.11 Use a dedicated `BLUESTONE_MIGRATIONS_DATABASE_URL` DBAL service, preserve the host `Doctrine\DBAL\Connection` and `DATABASE_URL`, provide safe optional env defaults, and require an explicit target; verify coexistence with a DoctrineBundle host app and a host database URL that remains unchanged.
- [ ] 8.12 Allow connector calls from ordinary application services without a migration lock while preserving lock refresh/checkpoints during migrations; rename SDK commands with the `bluestone:` prefix and verify they do not collide with host `app:` commands.
- [ ] 8.13 Retry 429 responses with bounded backoff and `Retry-After` handling, retry 502/503/504 only for GET/PUT, and verify exhausted rate limits remain safely retryable while other write errors remain uncertain.
- [ ] 8.14 Normalize applied migration checksums to PHP executable tokens so comment/format edits do not block runs, preserve rejection of executable changes, and safely upgrade old raw-file checksums only when source bytes still match.

## Live verification prerequisite

On 2026-10-31 the user requested that live tenant verification remain blocked until a dedicated test tenant, credentials and disposable fixtures are available, no earlier than Monday, 2026-11-02. Tasks 6.3 and 6.4 remain unchecked. Offline implementation and harness preparation continue; the date alone does not authorize or enable tenant calls. See `resources/bluestone/live-verification-status.json`.

## Offline progress checkpoint

On 2026-10-31, OpenSpec reported 40 of 44 implementation tasks complete. On 2026-11-02, SDK packaging and install-experience tasks were added. The install direction now uses the Composer executable and explicit ledger setup, with Flex treated as optional. Tasks 8.6–8.9 are complete. A clean Symfony 7.4 consumer without Symfony Flex installed the staged Composer path package, listed SDK commands, created and target-bound the SQLite ledger, discovered a migration extending `AbstractPimMigration`, and produced a dry-run plan without tenant calls. Tasks 8.10–8.14 now track mutation failure classification, database isolation, standalone SDK access, command naming, safe transient retries and checksum normalization pending verification. The four live harness/execution tasks remain unchecked pending a dedicated tenant and disposable fixtures. The active pinned revision has fixture evidence for 351 of 547 operations across 16 components, with no orphaned evidence. Eleven components have complete operation fixture sets, including all 224 PIM operations. The Media Bank upload/transfer/completion workflow is covered offline, and Public API Sync, IDP and External Notifications have additional literal request/response fixtures. The offline suite passes with 1,860 tests and 13,821 assertions. The Composer consumer check builds and installs the staged SDK package offline, compiles its Symfony bundle, discovers a conventional consumer migration and performs a mocked typed call against revision `2c19c082ed473e21`; details are recorded in `docs/implementation-evidence.md`. The database matrix remains 8 tests and 41 assertions on each of SQLite, PostgreSQL and MySQL. Live execution remains blocked as described above.
