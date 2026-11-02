## Purpose

Make API coverage measurable per operation so routing support, contract tests and real tenant verification cannot be confused.

## ADDED Requirements

### Requirement: Per-operation coverage evidence

The project SHALL maintain coverage records keyed by component, operation ID and pinned specification revision. Records SHALL distinguish routing, typed contracts, workflow support where applicable, and live verification. Missing evidence, deprecated operations and blocked cases SHALL be reported explicitly.

#### Scenario: Operation has only routing support
- **WHEN** an operation is dispatchable but has no typed or live verification evidence
- **THEN** the coverage report shows those gaps and does not label the operation fully verified

#### Scenario: Specification revision changes
- **WHEN** an operation's pinned contract changes
- **THEN** evidence for the old contract remains identifiable and the updated contract is marked as requiring revalidation

### Requirement: Offline contract checks

Default project checks SHALL run without tenant credentials or tenant requests. Contract fixtures SHALL exercise valid requests, meaningful invalid requests, documented response shapes and relevant failure cases for each operation.

#### Scenario: Default checks run without credentials
- **WHEN** a developer executes the default project check command without API credentials
- **THEN** contract and migration tests execute offline and report missing coverage separately from successful fixtures

### Requirement: Explicit test-tenant integration runs

Live verification SHALL require an explicitly selected test target and operation or fixture scope. It SHALL isolate and clean up disposable fixtures where supported, redact secrets, and record verified outcomes separately from skipped or blocked cases. Default checks SHALL NOT trigger live integration runs.

#### Scenario: Live environment is not configured
- **WHEN** a live test lacks its required test-tenant credentials or fixture prerequisites
- **THEN** it is reported as blocked or skipped with a reason and is not counted as verified

#### Scenario: Unselected operation has a broad side effect
- **WHEN** a live run is scoped to selected fixture operations
- **THEN** organization-wide or otherwise unselected operations are not executed implicitly
