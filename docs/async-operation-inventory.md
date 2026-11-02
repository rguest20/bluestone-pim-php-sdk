# Asynchronous operation inventory

Run `php bin/console bluestone:api:async-inventory` to inspect the active pinned specification, or add `--json` for the per-operation report. Each candidate includes its component, operation ID, HTTP route, specification signals and assessment. The command examines each of the 16 pinned component specifications offline.

The inventory uses two supported polling protocols:

- `pim:getJobStatus` is handled by `PimJobRunner` and checkpoints a PIM task ID before polling.
- `bulk-operations:getJobStatus` is handled by `BulkOperationsJobRunner` and checkpoints a Bulk Operations job ID before polling.

Other operations with an HTTP 202 response, a status-like operation ID or a response header such as `Location` are marked `review_required` with a recovery-protocol gap. These signals do not prove that the remote operation requires polling. Keep the operation as a direct operation-named connector call (or use `executeTyped()`) until its documented completion protocol is understood and represented by a dedicated adapter or workflow. Never infer an endpoint, terminal state or retry policy from a status code alone.

For revision `2c19c082ed473e21`, the inventory reports 58 candidates: 2 supported status operations and 56 that need contract review. This is a specification-derived inventory, not live verification; tenant verification remains blocked until an explicit test target and disposable fixtures are configured.
