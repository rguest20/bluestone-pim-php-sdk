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

Before dispatch, the runner stores a mutation intent containing the migration version, stable name, API component and operation, pinned contract revision, request hash and status. It does not store the request body. After success it stores the small result. If a process stops after the intent is recorded and the outcome is not durably saved, a retry raises `MutationInDoubtException` and does not issue the write again. Reconcile the remote state using the stable product number or resource ID before deciding how to proceed; never delete an uncertain intent merely to force a retry.

The global migration lease must be held before calling a mutation. Mutation names and inputs are immutable within a migration: changing the request requires a new migration version or name after the previous outcome is understood. The API operation itself remains subject to the migration's pinned OpenAPI request/response validation.
