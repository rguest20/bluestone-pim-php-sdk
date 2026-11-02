<?php

declare(strict_types=1);

namespace App\Api;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

/** Serializes generated DTOs from the same immutable revision used by a migration. */
final class OpenApiModelSerializer
{
    private array $serializers = [];

    public function __construct(private readonly OperationCatalog $catalog, private readonly ?ApiRevisionContext $revisionContext = null)
    {
    }

    public function toArray(object $model, string $component, ?string $revision = null): array
    {
        if (!isset(OperationCatalog::COMPONENTS[$component])) {
            throw new \InvalidArgumentException('Unknown API component: '.$component);
        }
        $revision ??= $this->catalog->activeRevision();
        if ($revision === null || !preg_match('/^[a-f0-9]{16}$/', $revision)) {
            throw new \RuntimeException('A pinned API revision is required to serialize generated models.');
        }
        $this->assertSelectedRevision($revision);
        $namespace = $this->namespace($component, $revision);
        if (!str_starts_with($model::class, $namespace.'\\Model\\')) {
            throw new \InvalidArgumentException('The generated model does not match the migration component and API revision.');
        }
        $serializer = $this->serializer($component, $revision, $namespace);
        $data = $serializer->normalize($model, 'json');
        if (!is_array($data)) {
            throw new \RuntimeException('Generated request model did not serialize to a JSON object.');
        }

        return (array) $this->preserveObjectShapes($data, $model, $namespace);
    }

    /** Normalize JSON arrays containing generated DTOs as well as individual request models. */
    public function toValue(mixed $value, string $component, ?string $revision = null): mixed
    {
        if ($value instanceof \stdClass) {
            return (object) $this->toValue(get_object_vars($value), $component, $revision);
        }
        if (is_object($value)) return (object) $this->toArray($value, $component, $revision);
        if (is_array($value)) {
            foreach ($value as $key => $item) $value[$key] = $this->toValue($item, $component, $revision);
        }
        return $value;
    }

    /** Convert a validated JSON response into a DTO from the same component and revision. */
    public function fromArray(array $data, string $modelClass, string $component, ?string $revision = null): object
    {
        $revision ??= $this->catalog->activeRevision();
        if ($revision === null || !preg_match('/^[a-f0-9]{16}$/', $revision)) {
            throw new \RuntimeException('A pinned API revision is required to deserialize generated models.');
        }
        $this->assertSelectedRevision($revision);
        $namespace = $this->namespace($component, $revision);
        $modelClass = ltrim($modelClass, '\\');
        if (!str_starts_with($modelClass, $namespace.'\\Model\\') || !class_exists($modelClass)) {
            throw new \InvalidArgumentException('The response model does not match the migration component and API revision.');
        }
        $model = $this->serializer($component, $revision, $namespace)->denormalize($data, $modelClass, 'json');
        if (!is_object($model)) {
            throw new \RuntimeException('Generated response data did not deserialize to a DTO.');
        }

        return $model;
    }

    private function namespace(string $component, string $revision): string
    {
        if (!isset(OperationCatalog::COMPONENTS[$component])) {
            throw new \InvalidArgumentException('Unknown API component: '.$component);
        }
        $componentName = str_replace(' ', '', ucwords(str_replace('-', ' ', $component)));

        return 'App\\Generated\\R'.$revision.'\\'.$componentName;
    }

    private function assertSelectedRevision(string $revision): void
    {
        $selected = $this->revisionContext?->current();
        if ($selected === '') {
            throw new \LogicException('Generated models are unavailable for legacy migrations.');
        }
        if ($selected !== null && $selected !== $revision) {
            throw new \LogicException('Generated model revision does not match the migration API revision.');
        }
    }

    /** Jane represents empty objects as arrays; retain their object shape without changing real lists. */
    private function preserveObjectShapes(mixed $normalized, mixed $original, string $namespace): mixed
    {
        if (is_object($original) && str_starts_with($original::class, $namespace.'\\Model\\') && is_array($normalized)) {
            $properties = method_exists($original, 'definedProperties') ? $original->definedProperties() : [];
            if ($properties === []) {
                foreach ((new \ReflectionClass($original))->getProperties() as $property) {
                    $name = $property->getName();
                    $getter = 'get'.ucfirst($name);
                    if (method_exists($original, $getter)) $properties[$name] = [$name, $getter];
                }
            }
            foreach ($properties as $jsonName => [$property, $getter]) {
                if (array_key_exists($jsonName, $normalized) && $original->isInitialized($property)) {
                    $normalized[$jsonName] = $this->preserveObjectShapes($normalized[$jsonName], $original->$getter(), $namespace);
                }
            }
            return (object) $normalized;
        }
        if (is_array($original) && is_array($normalized)) {
            foreach ($normalized as $key => $value) {
                if (array_key_exists($key, $original)) $normalized[$key] = $this->preserveObjectShapes($value, $original[$key], $namespace);
            }
        }
        return $normalized;
    }

    private function serializer(string $component, string $revision, string $namespace): Serializer
    {
        $normalizerClass = $namespace.'\\Normalizer\\JaneObjectNormalizer';
        if (!class_exists($normalizerClass)) {
            throw new \RuntimeException('Generated models are missing for '.$component.' at revision '.$revision.'. Run php bin/generate-api-models --component='.$component.'.');
        }

        return $this->serializers[$normalizerClass] ??= new Serializer([new ArrayDenormalizer(), new $normalizerClass()], [new JsonEncoder()]);
    }
}
