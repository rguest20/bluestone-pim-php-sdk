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

Typed calls SHALL retain the configured environment, authentication, concurrency protection and explicit write-retry policy of existing connector calls. They SHALL NOT introduce an independent credential store or bypass migration locking.

#### Scenario: Missing execution lock
- **WHEN** a typed operation is invoked without an active migration execution lock
- **THEN** execution is rejected before contacting the tenant
