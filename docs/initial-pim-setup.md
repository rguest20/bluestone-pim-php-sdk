# Guide: set up a starter Bluestone PIM catalog with migrations

This guide shows how to use this repository to create a small, repeatable PIM baseline: a top-level catalog, one child category, a simple text attribute definition and a product assigned to that category with an attribute value. It also shows a later migration that renames the category.

This is a starter pattern, not a tenant-specific production data model. It assumes the tenant, organization, user permissions and language context already exist. It does not configure organization-wide policies, create users or roles, migrate media, or decide what your product taxonomy and attributes should be.

## 1. Decide what the baseline should contain

Before writing PHP, agree on the desired state with the PIM owner and the systems that supply product data:

1. Choose the tenant and language context, usually `en` for the default context.
2. Decide which catalogs and categories are required and how products will be assigned to them.
3. Define each attribute's stable unique number, display name, data type, context behavior, restrictions and owning group.
4. Choose stable product numbers and decide which definitions each product needs.
5. Identify existing PIM objects the migration may rely on. Record their IDs in reviewed configuration or discover them by a documented stable identifier. Do not copy IDs from one tenant into another.
6. Check for existing catalog/category numbers, attribute numbers and product numbers before the first write. Bluestone requires these identifiers to be unique in their documented scope.

Create the prerequisite layers before the records that depend on them:

1. Catalog and category nodes.
2. Attribute definitions and any select/dictionary values or category-level configuration they need.
3. Products with category assignments and simple attribute values.
4. Product relations, bundles/variants, policies, labels, assets and other tenant-specific data.

The last group has different workflows and recovery needs. Add it only when the migration's source data and target tenant requirements are known. In particular, use the Media Bank section in [API connectors](api-connectors.md) for assets and [mutation recovery](mutation-recovery.md) for writes whose outcome could be uncertain.

The Management API documents `createCategory` as creating a top-level catalog when `parentId` is omitted, or a child node when it is supplied. It returns the generated ID in `resource-id`. [Create category/catalog reference](https://docs.api.bluestonepim.com/reference/createcategory). Product creation accepts categories and attribute values in its request; product numbers are unique and its ID is also returned in `resource-id`. [Create product reference](https://docs.api.bluestonepim.com/reference/createproduct). Attribute values refer to definition IDs. Check the relevant [product attribute reference](https://docs.api.bluestonepim.com/reference/addproductattribute) and the pinned OpenAPI schema before adapting payloads.

## 2. Configure an isolated local environment

Follow the [README setup](../README.md#setup) and keep credentials in `.env.local`. Use a dedicated test tenant and a tracking database that is used only for that tenant/environment. Keep the same database across deployments so applied versions and checkpoints persist. In a consuming Symfony app, install the Composer package and create the ledger with `vendor/bin/bluestone bluestone:migrations:install` before applying migrations.

```dotenv
BLUESTONE_TARGET=your-dedicated-test-tenant
BLUESTONE_API_BASE_URL=https://api.test.bluestonepim.com
BLUESTONE_TOKEN_URL=https://idp.test.bluestonepim.com/op/token
BLUESTONE_CLIENT_ID=your-client-id
BLUESTONE_CLIENT_SECRET=your-client-secret
BLUESTONE_MIGRATIONS_DATABASE_URL="sqlite:///%kernel.project_dir%/var/bluestone-migrations.db"
```

Do not put credentials, tenant-specific secrets or generated IDs in migration source control. Stable *business identifiers* such as category, attribute and product numbers belong in migration source only when they are approved, unique and intended to be the same in every target. Keep resource IDs in tenant-specific configuration or discover them from that tenant.

## 3. Create a migration file

Use the command to generate a timestamped migration skeleton. In this repository, run:

```sh
php bin/console bluestone:migrations:make "Create starter product catalog"
```

It writes a class under `migrations/`, where the application auto-discovers it. In a normal consumer app, use `vendor/bin/bluestone bluestone:migrations:make ...` to write under `src/Migration/`. Remove the generated guard only after implementing and reviewing `up()`. Migration constructors should inject services only; do not make API calls in constructors or `description()`.

The files in [`examples/migrations/`](../examples/migrations/) end in `.php.example`, live outside the discovered `migrations/` directory and are not executable migrations. Use them as references: create a fresh migration with the command, then adapt the example code into that file. Do not move the examples into `migrations/` unchanged.

### Example A: bootstrap a minimal catalog and product

[`Version20261102090000_BootstrapStarterPim.php.example`](../examples/migrations/Version20261102090000_BootstrapStarterPim.php.example) demonstrates these steps in dependency order:

- create a uniquely numbered top-level catalog;
- create a uniquely numbered child category under it;
- create a simple text attribute definition with a unique number;
- create a product with its own unique number, the category ID and an attribute value.

It uses typed PIM requests and the existing `AttributeDefinitionMutationRunner` and `ProductMutationRunner`. Category creation uses `MigrationContext::mutation()` and stores the returned `resource-id`. Later steps in the same migration use that saved ID. Each write has a stable mutation name and immutable input, so a completed result is reused on retry; an uncertain outcome stops for reconciliation instead of resending the write automatically.

Review and replace the example catalog, category, attribute and product numbers, names, context and sample value before copying it. The numbers in the example are illustrative and may already exist in your tenant. A `409` conflict or uncertain mutation should be reconciled against the tenant before retrying; do not delete its tracking record just to force another create.

### Example B: make a later catalog change

[`Version20261102100000_RenameStarterCategory.php.example`](../examples/migrations/Version20261102100000_RenameStarterCategory.php.example) uses `CatalogRunner::updateDetailsOnce()` for a forward-only change. Replace the example category ID with the ID from the target tenant before creating the migration. Once applied, do not edit that version; make future changes in a new migration.

These two samples are deliberately small. For product batches, cursor/page traversal, asynchronous jobs and media, use the corresponding runners described in [API connectors](api-connectors.md). Keep each checkpoint name and mutation input stable across retries.

## 4. Review and apply the migrations

Run the local checks before any tenant request:

```sh
composer check
php bin/console bluestone:migrations:status
php bin/console bluestone:migrations:migrate --dry-run
```

`composer check` uses offline fixtures and does not contact Bluestone. `--dry-run` lists the pending plan; it does **not** validate the remote tenant, permissions, IDs, payload semantics or current data. Review the migration source and target/database configuration separately.

When the dedicated test tenant and its credentials are available, apply the planned migrations explicitly:

```sh
php bin/console bluestone:migrations:migrate
php bin/console bluestone:migrations:status
```

Inspect the resulting catalog, category, product and value in that tenant before preparing a production run. Do not point a test ledger at production or reuse one ledger for multiple targets. A live run is always explicit; installation and normal project checks do not call Bluestone.

If a migration fails, inspect its completed steps and the tenant state before using `--retry`. Steps already marked complete are skipped. An API call may succeed remotely and fail before the local checkpoint is recorded; the runner cannot provide a transaction across Bluestone and the tracking database. For uncertain writes, find the resource by its stable number, reconcile it, then follow the recovery guidance in [mutation recovery](mutation-recovery.md). Roll back PIM state with a new corrective migration, not by deleting the tracking database.

## 5. Extend the starter baseline safely

- Keep migration versions immutable after application. Add a later migration for every change.
- Use stable, unique product, category and definition numbers. Do not generate new numbers during each retry.
- Use `executeTyped()` or a typed domain runner for requests with a pinned contract. Confirm the current `bluestone:api:coverage` report; generated methods and fixture verification are separate evidence.
- Use one named step or mutation for each independently recoverable action. Persist only small IDs or other non-sensitive values.
- Split asynchronous submission from polling and retain the returned task ID before waiting.
- Reconcile uncertain creates/updates by a documented stable identifier before any manual retry.
- Add schema-specific offline fixtures when introducing a new operation. Current fixture coverage is not proof of live tenant behavior.
- Keep destructive, broad-effect, policy, permission and tenant-wide changes in separately reviewed migrations with their own explicit prerequisites and recovery plan.

The full set of operation IDs and generated signatures is available through `php bin/console bluestone:api:list pim`; use the pinned OpenAPI JSON and the official endpoint documentation to confirm each request's actual semantics. The examples here have not been executed against a live Bluestone tenant.
