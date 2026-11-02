## Purpose

Give migration authors typed, validated access to the documented API operations while preserving existing operation dispatch and transport behavior.

## ADDED Requirements

### Requirement: Typed operation coverage

The system SHALL expose a named, typed call for every operation in the pinned component specifications and SHALL preserve existing generic operation-ID calls. Coverage SHALL identify the component and operation ID independently, including duplicate IDs across components.

#### Scenario: Existing migration continues to work
- **WHEN** a migration uses its existing generic operation call after typed calls are added
- **THEN** its method, path, authentication and response access remain compatible

#### Scenario: Same operation ID appears in different components
- **WHEN** callers select an operation ID that exists in multiple components
- **THEN** each typed call uses the contract and destination path of its selected component

### Requirement: Request contract validation

Typed calls SHALL validate documented parameters, content types and request schemas before sending a request. Validation errors SHALL identify the operation and invalid field without disclosing credentials or sensitive field values.

#### Scenario: Invalid request is rejected locally
- **WHEN** a typed request violates a documented required field, type or enum constraint
- **THEN** the caller receives a field-specific validation error and no remote request is sent

#### Scenario: Partial update distinguishes omission from null
- **WHEN** a caller omits one optional field and explicitly supplies null for another nullable field
- **THEN** serialization preserves that distinction according to the pinned operation schema

### Requirement: Response contract handling

Typed calls SHALL expose documented successful responses and validate structured bodies against their declared schemas. Empty, binary and asynchronous acknowledgement responses SHALL retain their documented meanings. Unspecified schema details SHALL remain explicitly unmodelled rather than acquiring invented constraints.

#### Scenario: Unexpected structured response
- **WHEN** a response violates a documented response constraint
- **THEN** the caller receives a contract error and the affected migration step is not recorded as completed

#### Scenario: Empty successful response
- **WHEN** an operation returns its documented empty success response
- **THEN** the typed call succeeds without attempting to decode an empty body as JSON

### Requirement: Shared execution guarantees

Typed calls SHALL retain the configured environment, authentication and explicit write-retry policy of existing connector calls. When invoked inside a migration, calls SHALL refresh the active migration lease and preserve operation/checkpoint tracking. When invoked by an ordinary application service outside migration execution, calls SHALL remain available through the same connector and authenticated transport without requiring or creating a migration lock/checkpoint.

The shared runner SHALL retry HTTP 429 responses with bounded backoff while respecting `Retry-After`. It SHALL retry 502, 503 and 504 only for idempotent GET and PUT operations. Other methods SHALL NOT be retried automatically for 5xx responses.

#### Scenario: Application service calls the SDK
- **WHEN** an application service invokes a typed operation outside a migration
- **THEN** the request uses configured authentication and host restrictions without requiring a migration lock or checkpoint

#### Scenario: Migration call refreshes execution lock
- **WHEN** a typed operation is invoked inside an active migration
- **THEN** the runner refreshes the held lease and records the operation against that migration before dispatch

#### Scenario: Rate-limited API request
- **WHEN** Bluestone returns HTTP 429 with or without `Retry-After`
- **THEN** the runner makes only bounded retries, never retries before the requested delay, and leaves an exhausted mutation safely retryable

#### Scenario: Temporary server error
- **WHEN** Bluestone returns HTTP 502, 503 or 504
- **THEN** the runner retries only GET and PUT operations and does not automatically resubmit other methods

### Requirement: Company Composer SDK distribution

The typed API surface and migration support SHALL be consumable by company PHP applications as a company-maintained Composer dependency, without requiring consumers to copy source files. The installed package SHALL provide the generated operations and the matching pinned contract revision needed by those operations, and SHALL preserve the documented migration execution safeguards when used for migrations.

#### Scenario: Company application installs a pinned SDK release
- **WHEN** a supported company PHP application installs a released SDK version through Composer
- **THEN** it can load the typed component operations and their matching revision-specific contracts from the installed package

#### Scenario: Contract artifacts are unavailable or mismatched
- **WHEN** a consumer attempts to use a typed operation whose generated artifacts do not match its pinned specification revision
- **THEN** the SDK fails clearly before dispatch and does not fetch replacement specifications at runtime

#### Scenario: SDK is used by a migration runner
- **WHEN** a migration invokes a packaged typed operation
- **THEN** the call retains configured authentication, host restrictions, locking, checkpoint and explicit retry behavior

### Requirement: Ready-to-use Symfony installation

The SDK SHALL ship a Composer-installed executable that boots a consuming Symfony application's configuration and exposes migration and contract-inspection commands without requiring Symfony Flex or SDK bundle registration in the host. SDK commands SHALL use the `bluestone:` prefix to avoid collisions with host application commands. The command set SHALL include explicit tracking-table installation and conventional migration creation/status/run commands. The install command SHALL create and target-bind the ledger without contacting a tenant. The SDK SHALL use a dedicated tracking connection configured by `BLUESTONE_MIGRATIONS_DATABASE_URL`, with a local SQLite default, and SHALL NOT register or override the host application's `Doctrine\DBAL\Connection` or `DATABASE_URL`. `BLUESTONE_TARGET` SHALL be explicitly configured before ledger installation or migration execution. The executable SHALL use Bluestone test-host defaults when the consumer has not configured API URLs, while leaving tenant credentials to the application. Consumer migrations SHALL be discoverable under `src/Migration` with the `App\Migration` namespace when the standard Symfony service scan is configured. The SDK SHALL expose reusable migration helpers that execute pinned typed operations through the shared authenticated transport and persist results through migration checkpoints. A Flex recipe MAY provide optional registration for commands exposed through the host application's own console. Package installation SHALL NOT execute migrations or contact a tenant.

#### Scenario: Symfony consumer installs the SDK
- **WHEN** a Symfony application installs the SDK through Composer and runs the package executable without Flex
- **THEN** the package commands load the consumer configuration, create and bind the tracking ledger on request, and use the configured migration services without contacting Bluestone during package installation

#### Scenario: Migration uses the checkpointed catalog helper
- **WHEN** a migration extends the SDK migration base and creates a catalog/category
- **THEN** its named mutation uses the pinned typed operation, saves the returned resource ID, and does not automatically resubmit an uncertain write

#### Scenario: Local install has no tenant secrets
- **WHEN** the package is installed but tenant credentials have not been configured
- **THEN** local status and dry-run commands remain available, while any tenant request fails clearly before network dispatch
