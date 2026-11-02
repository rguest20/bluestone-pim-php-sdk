# Bluestone API changes by function

New to the API? Start with [How to add or change things in Bluestone PIM](../making-pim-changes.md): it explains migrations, stable write names, tenant IDs and the safe request pattern. Then choose the kind of thing you want to change below.

These pages cover all 547 operations in pinned API revision `2c19c082ed473e21` across 16 components. They are grouped by task, not by endpoint knowledge. Each row gives the operation ID to call, an OpenAPI summary, exact path, inputs and body shape. An operation ID is used with the corresponding connector, for example `$this->pim->executeTyped('createProduct', [], ['json' => $request])`.

`GET` reads data; `POST`, `PUT`, `PATCH` and `DELETE` change data or perform actions. A `POST` may also validate, search or submit background work, so read its summary. The operation's full body constraints and nested fields are in the pinned OpenAPI schema.

| I want to change... | Operations |
| --- | ---: |
| [Catalogs and categories](catalogs-and-categories.md) | 45 |
| [Products and variants](products-and-variants.md) | 84 |
| [Attributes](attributes.md) | 80 |
| [Media and assets](media-and-assets.md) | 69 |
| [Settings and data quality](settings-and-data-quality.md) | 66 |
| [Users and permissions](users-and-permissions.md) | 72 |
| [Integrations and workflows](integrations-and-workflows.md) | 82 |
| [Public API](public-api.md) | 27 |
| [Other functions](other-functions.md) | 22 |

## How to use a page

1. Find the operation by its plain-language summary.
2. Use its operation ID and path parameters with the connector named by the component section. For example, component `pim` uses `PimConnector`; `media-bank` uses `MediaBankConnector`.
3. Build the body using the listed schema fields. The complete constraints and nested fields are in `resources/bluestone/revisions/2c19c082ed473e21/openapi/<component>.json` under `components.schemas.<schema>`.
4. Copy the SDK calling pattern from the [cookbook](../making-pim-changes.md). For background operations, save the returned task ID and poll with the matching job runner.

Operation lists are generated with `php bin/build-api-change-guide`. The generator fails if a component or PIM function tag has no page mapping, so a refreshed API revision cannot silently drop a group.
