# Company Bluestone PIM SDK

This repository builds the company-owned Symfony bundle `youwe/bluestone-pim-sdk`. Its stable PHP namespace is `Youwe\BluestonePim\`. It contains the shared authenticated HTTP client, all component connectors and typed operations, pinned OpenAPI contracts and generated DTOs, resumable migration interfaces and tracking services, reusable PIM/media workflows, and Symfony console commands. The executable Symfony kernel, tests and example migrations are reference-host concerns and are not part of the SDK package artifact. DDEV configuration belongs in the consuming application.

## Supported platform

- PHP 8.2 or newer
- Symfony 7.4
- Doctrine DBAL 4.3 or newer and PDO with the selected database driver
- Composer 2

Each SDK release pins its own OpenAPI revision. Use the SDK version recorded in your application lockfile and keep that version fixed for the duration of a migration rollout. The package does not fetch documentation or generated classes at runtime.

## Install in a company application

The SDK includes its own Composer executable, so a consumer does not need Symfony Flex or an SDK bundle entry in `config/bundles.php` to run migration commands. The company Composer repository still needs to be available to Composer, usually through the company Symfony project template. Set `BLUESTONE_TARGET` and the Bluestone credentials in the app environment first, then install the SDK and initialize its tracking tables:

```sh
composer require youwe/bluestone-pim-sdk:^1.0
vendor/bin/bluestone bluestone:migrations:install
```

The executable boots the consuming app's Symfony configuration and service definitions, then enables the SDK bundle for this CLI process. The ledger uses `BLUESTONE_MIGRATIONS_DATABASE_URL` or defaults to `var/bluestone-migrations.db` (SQLite), leaving the host app's `DATABASE_URL` untouched. The API base URL defaults to Bluestone test. `BLUESTONE_TARGET` has no default; set it and the credentials in the application's environment or secret manager before installing or applying migrations. Installing the package and creating the local tables make no Bluestone API requests.

Create and run a migration:

```sh
vendor/bin/bluestone bluestone:migrations:make "Create starter catalog"
vendor/bin/bluestone bluestone:migrations:status
vendor/bin/bluestone bluestone:migrations:migrate --dry-run
vendor/bin/bluestone bluestone:migrations:migrate
```

Use the normal Symfony `App\` service scan for migrations under `src/Migration/`; standard Symfony skeletons already scan `src/`. The package command automatically loads the SDK services and sees migrations registered by the consuming application's service configuration. Migration authors can extend `AbstractPimMigration` to use the checkpointed typed helper below, or inject any typed component connector/workflow service directly.

```php
$catalogId = $this->createCategory($context, 'starter-catalog', [
    'name' => 'Starter catalog',
    'number' => 'EXAMPLE-CATALOG-001',
]);
```

The helper uses the pinned typed PIM operation, stores the returned resource ID in the migration ledger and will not repeat an uncertain write automatically.

During package development, a local checkout can be used as a Composer path repository:

```json
{
  "repositories": [
    { "type": "path", "url": "../bluestone-pim-sdk/build/sdk/package" }
  ],
  "require": { "youwe/bluestone-pim-sdk": "@dev" }
}
```

`vendor/bin/bluestone` provides migration creation, tracking setup, status, dry-run, retry and local API inspection commands. For a regular Symfony console, the app can also register `BluestonePimBundle` in `config/bundles.php` and run the same commands through `bin/console`. That optional integration can be added manually or through a company Flex recipe; it is not needed by the package executable.

See [initial PIM setup examples](initial-pim-setup.md) for complete migrations and the [API changes guide](api-guide/index.md) for all operations organized by function.

## Build and publish a release

Generated PHP classes are committed so direct Composer installs from Git include the typed models and operation facades. After changing the pinned OpenAPI revision, regenerate and commit them, then build and verify the package:

```sh
composer install
composer build:contracts
php bin/build-sdk-package
```

The offline build regenerates and checks the typed artifacts, then stages `composer.json`, `bin/bluestone`, SDK source, pinned Bluestone resources and the matching `generated/R<revision>` tree in `build/sdk/package`. Publish that staged package through the company-controlled Composer distribution process. Never publish only the source tree without its matching generated contracts.

For a contract refresh, run `php bin/update-api-catalog`, review the new revision and provenance, regenerate offline contracts, resolve any generated schema gaps, update fixtures and evidence, run `composer check`, then build a new SDK release. Keep previous revisions in published SDK versions while applications may still have migrations pinned to them.

## Release compatibility

Use semantic versioning for the public package API: patch releases fix behavior without removing supported calls; minor releases may add public APIs and may select a newer pinned Bluestone contract; major releases may remove or change public PHP APIs or raise the supported PHP/Symfony baseline. Record the package version, pinned OpenAPI revision, generation-tool version and compatibility notes in each release. Applications should upgrade deliberately and review the active contract revision before running new migrations.

## Consumer integration check

The repository includes a Composer consumer project that installs the staged package without copying SDK source, compiles its Symfony services, discovers a sample migration and performs a typed operation through mocked HTTP. Run its existing integration check after building:

```sh
composer update --working-dir=tests/consumer
php tests/consumer/verify.php
```

It confirms the package autoloads without the host's `App\` SDK classes, selects the generated artifacts matching its pinned OpenAPI revision, and performs a typed health operation through mocked HTTP. The standalone executable can also be invoked from the consumer project as `vendor/bin/bluestone`; a Flex recipe can still be published separately for teams that want automatic bundle registration in the host application's regular `bin/console`.
