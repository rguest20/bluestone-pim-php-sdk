<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api;

use Youwe\BluestonePim\Api\Connector\AbstractConnector;

/** Resolves the generated operation facade for the migration's pinned specification revision. */
final class TypedApiAdapterFactory
{
    /** @var array<string, AbstractConnector> */
    private array $connectors = [];

    public function __construct(
        iterable $connectors,
        private readonly OpenApiModelSerializer $models,
        private readonly ApiRevisionContext $revisionContext,
        private readonly OperationCatalog $catalog,
        private readonly string $sdkRoot,
    ) {
        foreach ($connectors as $connector) {
            $this->connectors[$connector::COMPONENT] = $connector;
        }
    }

    public function forComponent(string $component): GeneratedOperationAdapter
    {
        $revision = $this->revisionContext->current();
        if ($revision === '') {
            throw new \LogicException('Generated operation adapters are unavailable for legacy migrations.');
        }
        $revision ??= $this->catalog->activeRevision();
        if ($revision === null) {
            throw new \LogicException('No active OpenAPI revision is available.');
        }
        $connector = $this->connectors[$component] ?? throw new \InvalidArgumentException('No connector is registered for '.$component.'.');
        $manifestPath = $this->sdkRoot.'/generated/R'.$revision.'/manifest.json';
        if (!is_file($manifestPath)) {
            throw new \RuntimeException('Generated API models are missing for revision '.$revision.'. Run php bin/generate-api-models.');
        }
        $manifest = json_decode(file_get_contents($manifestPath), true, 512, JSON_THROW_ON_ERROR);
        if (($manifest['revision'] ?? null) !== $revision || !isset($manifest['components'][$component]['operation_count'])) {
            throw new \RuntimeException('Generated API adapter manifest does not match '.$component.' revision '.$revision.'.');
        }
        $entry = $manifest['components'][$component];
        if (($entry['openapi_sha256'] ?? null) !== hash_file('sha256', $this->catalog->openApiPath($component, $revision))
            || $entry['operation_count'] !== count($this->catalog->component($component, $revision)['operations'])) {
            throw new \RuntimeException('Generated API adapter contracts are stale for '.$component.' revision '.$revision.'.');
        }

        $componentClass = str_replace(' ', '', ucwords(str_replace(['-', '_', '/'], ' ', $component)));
        $class = '\\Youwe\\BluestonePim\\Generated\\R'.$revision.'\\'.$componentClass.'\\Operations\\'.$componentClass.'Operations';
        if (!class_exists($class)) {
            throw new \RuntimeException('Generated operation facade is missing: '.$class);
        }

        return new $class($connector, $this->models, $this->revisionContext, $this->catalog, $component, $revision);
    }
}
