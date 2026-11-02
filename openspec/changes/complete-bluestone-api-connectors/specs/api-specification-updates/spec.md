## Purpose

Keep connector generation reproducible and make upstream contract changes visible before they affect unfinished or historical migrations.

## ADDED Requirements

### Requirement: Pinned full specifications

The project SHALL retain the full contracts required for type generation and validation, with source URLs, versions and checksums. Normal generation and runtime operation SHALL work from pinned local inputs without fetching documentation.

#### Scenario: Reproduce generated artifacts offline
- **WHEN** generation is repeated with the same pinned inputs and tool versions
- **THEN** generated contracts and routing artifacts are identical and require no network access

### Requirement: Reviewable specification refresh

A requested upstream refresh SHALL report added, removed and changed operations, including authentication, required inputs, schema and deprecation changes. Unsupported contract features SHALL produce a clear failure before the refreshed artifact set is accepted.

#### Scenario: Required request field is added upstream
- **WHEN** a refresh finds a newly required field in an existing operation
- **THEN** the change is surfaced as a compatibility concern and is linked to affected generation and coverage records

#### Scenario: Refresh cannot compile every component
- **WHEN** an unsupported contract feature prevents one component from compiling
- **THEN** the active pinned artifact set remains usable without mixing old and new component revisions

### Requirement: Migration compatibility during updates

The project SHALL preserve a reproducible contract revision for unfinished migrations and SHALL document the compatibility decision before replacing a contract used by them. A contract refresh SHALL NOT silently turn a previously recorded successful migration into work that runs again.

#### Scenario: Upstream operation is removed during an interrupted migration
- **WHEN** an unfinished migration references an operation removed from a refreshed specification
- **THEN** the update reports the dependency and retains a usable pinned revision until the migration is reconciled or an explicit transition is made
