# Recoverable PIM mutations

Use the domain runners for writes that need a stable outcome across migration retries:

```php
$productId = $productMutations->create(
    $context,
    'create-summer-product',
    'SUMMER-001',
    ['number' => 'SUMMER-001', 'name' => 'Summer product'],
);

$catalogNodeId = $catalogRunner->updateDetailsOnce(
    $context,
    'rename-summer-category',
    'existing-node-id',
    ['name' => ['value' => 'Summer collection']],
);
```

Product creation uses Bluestone's unique `NUMBER` validation and requires the number in the request to match the stable migration identifier. Attribute definition creation similarly requires its unique number. Updates use the stable resource ID. Successful calls save returned resource IDs (or the known update ID) in the migration database, so a completed mutation name returns the saved result without another request.

Before dispatch, the runner stores a mutation intent containing the migration version, stable name, API component and operation, pinned contract revision, request hash and status. It does not store the request body. After success it stores the small result. A local validation or configuration failure known to occur before the business request is sent is recorded as `not_sent`; retry can safely dispatch it again, and the original exception is preserved. If a process stops after dispatch or the outcome is otherwise uncertain, a retry raises `MutationInDoubtException` with the original cause attached and does not issue the write again. Reconcile the remote state using the stable product number or resource ID before deciding how to proceed; never delete an uncertain intent merely to force a retry.

The global migration lease must be held before calling a mutation. Mutation names and inputs are immutable within a migration: changing the request requires a new migration version or name after the previous outcome is understood. The API operation itself remains subject to the migration's pinned OpenAPI request/response validation.

Applied migration integrity checks use normalized PHP tokens rather than raw file bytes, so comments and formatting can change without changing the recorded checksum. Executable changes remain blocked. After upgrading from a release that used raw-file checksums, run the migration command once with the applied migration files unchanged so their checksums can be rebased safely under the lock.
