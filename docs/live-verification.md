# Live tenant verification prerequisites

The default test suite is offline and must not call a Bluestone tenant. The selected OpenSpec change records live verification as blocked until a dedicated test tenant, credentials and disposable fixtures are available. The date in that record is a planning note; it does not enable tests automatically.

`resources/bluestone/live-fixture-policy.json` is the reviewed fixture policy. Its `default_groups` list is empty. Every group requires an explicit selection and declares its expected effect, prerequisites and cleanup behavior. Policy tests verify that read, media, webhook and IDP groups are not implicitly selected. This policy is preparation only: it does not claim that any group has been run or remotely verified.

Use `php bin/console app:api:live-plan --target=<tenant> --group=<group> --operation=<component:operationId>` to validate a proposed scope. Repeat `--group` and `--operation` for additional selections. The command is plan-only and never sends API requests. The current status is `blocked`, and the plan reports `execution_allowed: false`. IDP administrative groups also require `--allow-broad-effect` in the plan.

## Broad-effect and externally visible operations

The IDP policy lifecycle group is excluded from ordinary verification. It requires a dedicated organization, an isolated administrator account, scoped permissions, a unique policy name and readback to resolve the identifier because `CreatePolicy` returns no body or resource header. Cleanup may archive only the policy created by that isolated fixture. Other IDP writes, user/role changes and organization-wide operations stay outside a general run unless a separately reviewed fixture names them.

The webhook ping group requires an endpoint controlled by the test owner and a short-lived secret. The secret must be supplied through local secret configuration. The test fixture uses synthetic values and verifies that contract diagnostics omit rejected values.

The media roundtrip group requires a disposable local file, a dedicated tenant, an exact upload host allowlist, an isolated tracking database and a stable encryption key. Cleanup must delete or reconcile the created upload after both successful and failed runs.

## Enabling a future run

Before implementing or selecting an executable live fixture, the owner must provide:

- a named Bluestone test tenant and API base URL;
- credentials with only the permissions needed by the selected fixture;
- stable fixture identifiers or a safe creation and cleanup sequence;
- an isolated tracking database bound to that exact target;
- explicit component, operation and fixture-group selection;
- a reviewed cleanup plan for every reversible write.

The harness must report missing credentials, permissions or fixtures as blocked. It must retain blocked, skipped and passed results separately. Broad-effect groups must require a separate explicit opt-in. Do not change `resources/bluestone/live-verification-status.json` from `blocked` until those prerequisites are actually configured and the owner explicitly resumes live work.
