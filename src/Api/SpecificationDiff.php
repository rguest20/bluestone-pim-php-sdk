<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api;

final class SpecificationDiff
{
    private const METHODS = ['get', 'post', 'put', 'patch', 'delete', 'head', 'options', 'trace'];

    /** Compare operations and schema components without discarding either source spec. */
    public function compare(array $before, array $after): array
    {
        $old = $this->operations($before);
        $new = $this->operations($after);
        $added = array_diff_key($new, $old);
        $removed = array_diff_key($old, $new);
        $changed = [];
        foreach (array_intersect_key($new, $old) as $id => $operation) {
            $differences = [];
            foreach (['method', 'path', 'authentication', 'parameters', 'request', 'responses', 'deprecated', 'tags', 'required_request_fields'] as $field) {
                if ($this->canonical($old[$id][$field]) !== $this->canonical($operation[$field])) {
                    $differences[] = $field;
                }
            }
            if ($differences !== []) {
                $changed[$id] = $differences;
            }
        }
        $schemasBefore = $before['components']['schemas'] ?? [];
        $schemasAfter = $after['components']['schemas'] ?? [];
        $schemaNames = array_unique(array_merge(array_keys($schemasBefore), array_keys($schemasAfter)));
        $changedSchemas = [];
        foreach ($schemaNames as $name) {
            if (!isset($schemasBefore[$name]) || !isset($schemasAfter[$name])
                || $this->canonical($schemasBefore[$name]) !== $this->canonical($schemasAfter[$name])) {
                $changedSchemas[] = $name;
            }
        }
        sort($changedSchemas, SORT_STRING);
        ksort($added, SORT_STRING);
        ksort($removed, SORT_STRING);
        ksort($changed, SORT_STRING);

        $requiredChanges = [];
        foreach (array_intersect_key($new, $old) as $id => $operation) {
            $newRequired = array_values(array_diff($operation['required_request_fields'], $old[$id]['required_request_fields']));
            $removedRequired = array_values(array_diff($old[$id]['required_request_fields'], $operation['required_request_fields']));
            if ($newRequired !== [] || $removedRequired !== []) {
                $requiredChanges[$id] = ['added' => $newRequired, 'removed' => $removedRequired];
            }
        }

        return ['summary' => ['added' => count($added), 'removed' => count($removed), 'changed' => count($changed),
            'changed_schemas' => count($changedSchemas), 'operations_with_required_field_changes' => count($requiredChanges)],
            'added' => array_keys($added), 'removed' => array_keys($removed), 'changed' => $changed,
            'changed_schemas' => $changedSchemas, 'required_request_field_changes' => $requiredChanges];
    }

    private function operations(array $specification): array
    {
        $operations = [];
        foreach ($specification['paths'] ?? [] as $path => $pathItem) {
            foreach ($pathItem as $method => $operation) {
                if (!in_array($method, self::METHODS, true)) {
                    continue;
                }
                $id = $operation['operationId'] ?? $method.' '.$path;
                $operations[$id] = ['method' => strtoupper($method), 'path' => $path,
                    'authentication' => ['requirements' => $operation['security'] ?? $specification['security'] ?? [], 'schemes' => $specification['components']['securitySchemes'] ?? []],
                    'parameters' => array_map(fn (array $parameter): array => $this->resolve($parameter, $specification), array_merge($pathItem['parameters'] ?? [], $operation['parameters'] ?? [])),
                    'request' => $this->resolve($operation['requestBody'] ?? [], $specification), 'responses' => $operation['responses'] ?? [],
                    'required_request_fields' => $this->requiredRequestFields($operation['requestBody'] ?? [], $specification),
                    'deprecated' => (bool) ($operation['deprecated'] ?? false), 'tags' => $operation['tags'] ?? []];
            }
        }

        return $operations;
    }

    private function requiredRequestFields(array $requestBody, array $specification): array
    {
        $requestBody = $this->resolve($requestBody, $specification);
        $fields = [];
        foreach ($requestBody['content'] ?? [] as $mediaType) {
            $this->collectRequired($mediaType['schema'] ?? [], $specification, '', [], $fields);
        }
        $fields = array_values(array_unique($fields));
        sort($fields, SORT_STRING);

        return $fields;
    }

    private function collectRequired(array $schema, array $specification, string $prefix, array $seen, array &$fields): void
    {
        if (isset($schema['$ref']) && str_starts_with($schema['$ref'], '#/components/schemas/')) {
            $reference = $schema['$ref'];
            if (isset($seen[$reference])) {
                return;
            }
            $seen[$reference] = true;
            $schema = $this->resolve($schema, $specification);
            if (!is_array($schema)) {
                return;
            }
        }
        foreach ($schema['required'] ?? [] as $name) {
            if (is_string($name)) {
                $fields[] = $prefix === '' ? $name : $prefix.'.'.$name;
            }
        }
        foreach ($schema['properties'] ?? [] as $name => $property) {
            if (is_array($property)) {
                $this->collectRequired($property, $specification, $prefix === '' ? (string) $name : $prefix.'.'.$name, $seen, $fields);
            }
        }
        if (is_array($schema['items'] ?? null)) {
            $this->collectRequired($schema['items'], $specification, $prefix.'[]', $seen, $fields);
        }
        foreach (['allOf', 'oneOf', 'anyOf'] as $composition) {
            foreach ($schema[$composition] ?? [] as $part) {
                if (is_array($part)) {
                    $this->collectRequired($part, $specification, $prefix, $seen, $fields);
                }
            }
        }
    }

    private function resolve(array $value, array $specification): array
    {
        $seen = [];
        while (isset($value['$ref']) && str_starts_with($value['$ref'], '#/')) {
            $reference = $value['$ref'];
            if (isset($seen[$reference])) {
                return $value;
            }
            $seen[$reference] = true;
            $resolved = $specification;
            foreach (explode('/', substr($reference, 2)) as $part) {
                $resolved = $resolved[str_replace(['~1', '~0'], ['/', '~'], $part)] ?? null;
                if (!is_array($resolved)) {
                    throw new \RuntimeException('Cannot resolve a local specification reference.');
                }
            }
            $value = $resolved;
        }

        return $value;
    }

    private function canonical(mixed $value): string
    {
        if (!is_array($value)) {
            return json_encode($value, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
        }
        if (!array_is_list($value)) {
            ksort($value, SORT_STRING);
        }
        foreach ($value as $key => $item) {
            if (is_array($item)) {
                $value[$key] = json_decode($this->canonical($item), true, 512, JSON_THROW_ON_ERROR);
            }
        }

        return json_encode($value, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
    }
}
