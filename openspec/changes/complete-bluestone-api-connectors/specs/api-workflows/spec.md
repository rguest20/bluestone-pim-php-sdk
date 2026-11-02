## Purpose

Provide reusable API workflows that make large or asynchronous PIM changes resumable through persistent migration checkpoints.

## ADDED Requirements

### Requirement: Resumable pagination

The system SHALL support the pagination protocols present in the pinned contracts, including cursor and page-based traversal. Workflow progress SHALL advance only after processing the corresponding page or batch successfully, and retry SHALL preserve the original query and context.

#### Scenario: Later page fails
- **WHEN** an error interrupts processing after earlier pages have been completed
- **THEN** retry resumes from the persisted position and skips completed work

#### Scenario: Cursor stops advancing
- **WHEN** a service returns a nonterminal cursor that repeats without advancing
- **THEN** traversal fails with an explicit progress error instead of looping indefinitely

### Requirement: Service-specific asynchronous completion

The system SHALL poll asynchronous operations using each service's documented status contract. Submission identifiers SHALL be saved separately from completion checkpoints. Acceptance SHALL NOT be treated as completion, and polling SHALL preserve the migration execution lease.

#### Scenario: Interrupted polling
- **WHEN** a submitted job has a saved identifier and polling is interrupted
- **THEN** retry polls that job without resubmitting the operation

#### Scenario: Terminal failure or timeout
- **WHEN** a job enters a documented failure state or exceeds its polling deadline
- **THEN** the completion step remains incomplete, later migrations stop, and the saved submission identifier remains available for reconciliation

### Requirement: Recoverable mutations

Mutation workflows SHALL use stable resource identifiers or documented idempotency support where available. Failures identified before the business request is dispatched SHALL leave the mutation safely retryable and preserve the original exception. Once dispatch may have occurred, an uncertain remote outcome SHALL preserve the original cause and require reconciliation before another write.

#### Scenario: Request validation fails before dispatch
- **WHEN** local validation rejects a mutation before its business request is sent
- **THEN** the mutation is marked `not_sent`, the original validation error is surfaced, and retry may safely dispatch the same immutable request

#### Scenario: Response is lost after remote acceptance
- **WHEN** a create request has an uncertain outcome following a connection failure
- **THEN** the original exception remains available as the cause and retry checks for the intended resource or uses documented idempotency support before creating another resource, otherwise stopping for reconciliation

### Requirement: Applied migration integrity

The runner SHALL reject executable changes to applied migrations while allowing changes limited to comments and formatting. Existing raw-file checksums SHALL be upgraded only when the current applied migration source still matches the legacy checksum byte-for-byte.

#### Scenario: Comment or formatting change after checksum upgrade
- **WHEN** an applied migration has the normalized checksum and only comments or formatting change
- **THEN** the runner accepts the migration as unchanged

#### Scenario: Executable migration change
- **WHEN** executable tokens in an applied migration change
- **THEN** the runner rejects the version and requires a new corrective migration

### Requirement: Media workflow support

Media workflows SHALL implement the documented submission, content transfer, completion and failure handling required by their supported operations. They SHALL preserve resumable upload identifiers and SHALL NOT send API credentials to an external transfer destination.

#### Scenario: Transfer completes but completion call fails
- **WHEN** content transfer succeeds and the final API completion operation fails
- **THEN** retry resumes the unfinished stage using saved identifiers where the protocol permits it

#### Scenario: External content transfer
- **WHEN** a documented upload protocol requires a separate transfer destination
- **THEN** only a validated destination receives the transfer and no Management API bearer token or Public API key is forwarded

### Requirement: Reusable domain workflows

Migration authors SHALL be able to invoke component-specific services for recurring PIM changes using stable checkpoints. Supported workflows and their recovery behavior SHALL be documented for each component; direct typed calls SHALL remain available for operations without a multi-step workflow.

#### Scenario: Completed domain operation is retried
- **WHEN** a migration resumes after a domain operation's checkpoint was completed
- **THEN** the completed mutation is skipped and any saved result identifier remains available to subsequent steps
