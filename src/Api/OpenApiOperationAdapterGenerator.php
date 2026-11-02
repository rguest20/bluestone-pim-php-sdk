<?php

declare(strict_types=1);

namespace App\Api;

/** Emits named operation facades that route every request through a shared component connector. */
final class OpenApiOperationAdapterGenerator
{
    public function generate(string $component, string $revision, array $specification, array $catalog, string $directory): array
    {
        $componentClass = $this->className($component);
        $operations = $catalog['operations'] ?? [];
        $usedNames = [];
        $missingModels = [];
        $code = "<?php\n\ndeclare(strict_types=1);\n\nnamespace App\\Generated\\R{$revision}\\{$componentClass}\\Operations;\n\n"
            ."use App\\Api\\GeneratedOperationAdapter;\n"
            ."use Symfony\\Contracts\\HttpClient\\ResponseInterface;\n\n"
            ."/** Named request facade for {$component} operations in OpenAPI revision {$revision}. */\n"
            ."final class {$componentClass}Operations extends GeneratedOperationAdapter\n{\n";

        foreach ($operations as $operationId => $route) {
            $method = (string) $operationId;
            if (!preg_match('/^[A-Za-z_][A-Za-z0-9_]*$/', $method) || isset($usedNames[strtolower($method)])) {
                throw new \RuntimeException('Operation IDs cannot be represented as unique PHP methods: '.$component.':'.$operationId);
            }
            $usedNames[strtolower($method)] = true;
            $openApiOperation = $this->findOperation($specification, $operationId);
            $pathParameters = [];
            $queryParameters = [];
            $headerParameters = [];
            $parameterDefinitions = array_merge(
                $openApiOperation['path_parameters'] ?? [],
                $openApiOperation['operation']['parameters'] ?? [],
            );
            foreach ($parameterDefinitions as $parameter) {
                $parameter = $this->resolve($parameter, $specification);
                if (!is_array($parameter) || !isset($parameter['name'], $parameter['in'])) {
                    continue;
                }
                if ($parameter['in'] === 'path') {
                    $pathParameters[$parameter['name']] = [
                        'variable' => $this->variable($parameter['name']),
                        'schema' => $this->resolve($parameter['schema'] ?? [], $specification),
                    ];
                } elseif ($parameter['in'] === 'query') {
                    $queryParameters[] = $parameter;
                } elseif ($parameter['in'] === 'header') {
                    $headerParameters[] = $parameter;
                }
            }
            $requiredParameters = [];
            $optionalParameters = [];
            $pathMap = [];
            foreach ($pathParameters as $name => $pathParameter) {
                $variable = $pathParameter['variable'];
                $pathMap[] = var_export($name, true).' => $'.$variable;
                $requiredParameters[] = $this->parameterType($pathParameter['schema'], true).' $'.$variable;
            }
            $queryRequired = array_filter($queryParameters, static fn (array $parameter): bool => ($parameter['required'] ?? false) === true) !== [];
            $headerRequired = array_filter($headerParameters, static fn (array $parameter): bool => ($parameter['required'] ?? false) === true) !== [];
            if ($queryParameters !== []) {
                if ($queryRequired) {
                    $requiredParameters[] = 'array $queryParameters';
                } else {
                    $optionalParameters[] = 'array $queryParameters = []';
                }
            }
            if ($headerParameters !== []) {
                if ($headerRequired) {
                    $requiredParameters[] = 'array $headerParameters';
                } else {
                    $optionalParameters[] = 'array $headerParameters = []';
                }
            }

            $requestBody = $this->resolve($openApiOperation['operation']['requestBody'] ?? [], $specification);
            $bodySchema = $this->requestSchema($requestBody);
            $hasBody = $requestBody !== [];
            $bodyType = $hasBody ? $this->requestType($bodySchema, $specification, $component, $revision, $directory) : null;
            if ($hasBody && $bodyType === null && isset($bodySchema['$ref'])) {
                $missingModels[] = $operationId;
            }
            $contentTypes = array_keys($requestBody['content'] ?? []);
            $contentType = $contentTypes[0] ?? null;
            $jsonBody = $hasBody && $this->isJson($contentTypes);
            $validate = !$hasBody || !array_filter($contentTypes, static fn (string $type): bool => str_contains(strtolower($type), 'multipart/form-data') || str_contains(strtolower($type), 'application/x-www-form-urlencoded'));
            if ($hasBody) {
                $required = (bool) ($requestBody['required'] ?? false);
                $bodyType ??= $this->schemaType($this->resolve($bodySchema, $specification));
                $nullable = (bool) ($this->resolve($bodySchema, $specification)['nullable'] ?? false) || !$required;
                if ($nullable && $bodyType !== 'mixed') {
                    $bodyType = implode('|', array_unique(array_merge(explode('|', $bodyType), ['null'])));
                }
                if ($required) {
                    $requiredParameters[] = $bodyType.' $requestBody';
                } else {
                    $optionalParameters[] = $bodyType.' $requestBody = null';
                }
            }

            $parameters = array_merge($requiredParameters, $optionalParameters);

            $queryArg = $queryParameters === [] ? '[]' : '$queryParameters';
            $headerArg = $headerParameters === [] ? '[]' : '$headerParameters';
            $bodyRequired = (bool) ($requestBody['required'] ?? false);
            $bodyPresentExpr = !$hasBody ? 'false' : ($bodyRequired ? 'true' : '$requestBody !== null');
            $bodyArg = $hasBody ? '$requestBody' : 'null';
            $pathExpr = '['.implode(', ', $pathMap).']';
            $code .= '    public function '.$method.'('.implode(', ', $parameters).'): ResponseInterface'."\n    {\n";
            $code .= '        return $this->dispatch('.var_export($operationId, true).', '.$pathExpr.', '.$queryArg.', '.$headerArg.", {$bodyPresentExpr}, {$bodyArg}, ".($jsonBody ? 'true' : 'false').', '.($validate ? 'true' : 'false').', '.var_export($contentType, true).');' . "\n";
            $code .= "    }\n\n";
        }
        $code .= "}\n";

        $operationDirectory = $directory.'/Operations';
        if (!is_dir($operationDirectory) && !mkdir($operationDirectory, 0775, true) && !is_dir($operationDirectory)) {
            throw new \RuntimeException('Cannot create generated operation facade directory.');
        }
        $file = $operationDirectory.'/'.$componentClass.'Operations.php';
        if (file_put_contents($file, $code) !== strlen($code)) {
            throw new \RuntimeException('Cannot write generated operation facades.');
        }

        return ['operation_count' => count($operations), 'missing_request_models' => $missingModels];
    }

    private function findOperation(array $specification, string $operationId): array
    {
        foreach ($specification['paths'] ?? [] as $pathItem) {
            foreach ($pathItem as $method => $operation) {
                if (is_array($operation) && ($operation['operationId'] ?? null) === $operationId) {
                    return ['path_parameters' => $pathItem['parameters'] ?? [], 'operation' => $operation];
                }
            }
        }

        throw new \RuntimeException('Operation missing from its source OpenAPI document: '.$operationId);
    }

    private function requestSchema(array $requestBody): array
    {
        foreach ($requestBody['content'] ?? [] as $mediaType) {
            if (is_array($mediaType['schema'] ?? null)) {
                return $mediaType['schema'];
            }
        }

        return [];
    }

    private function modelClass(array $schema, string $component, string $revision, string $directory): ?string
    {
        $reference = $schema['$ref'] ?? '';
        if (!is_string($reference) || !str_starts_with($reference, '#/components/schemas/')) {
            return null;
        }
        $name = substr($reference, strlen('#/components/schemas/'));
        $model = $this->className(str_replace('~1', '/', str_replace('~0', '~', $name)));
        if (!is_file($directory.'/Model/'.$model.'.php')) {
            return null;
        }

        return '\\App\\Generated\\R'.$revision.'\\'.$this->className($component).'\\Model\\'.$model;
    }

    private function requestType(array $schema, array $specification, string $component, string $revision, string $directory, array $seen = []): ?string
    {
        $model = $this->modelClass($schema, $component, $revision, $directory);
        if ($model !== null) return $model;
        if (isset($schema['$ref'])) {
            if (isset($seen[$schema['$ref']])) return null;
            $seen[$schema['$ref']] = true;
            $schema = $this->resolve($schema, $specification);
        }
        foreach (['oneOf', 'anyOf'] as $composition) {
            if (!isset($schema[$composition])) continue;
            $types = [];
            foreach ($schema[$composition] as $branch) {
                $type = $this->requestType($branch, $specification, $component, $revision, $directory, $seen);
                if ($type === null || $type === 'mixed') return null;
                $types = array_merge($types, explode('|', $type));
            }
            return $types === [] ? null : implode('|', array_unique($types));
        }

        return isset($schema['type']) ? $this->schemaType($schema) : null;
    }

    private function parameterType(array $schema, bool $required): string
    {
        return $this->schemaType($schema);
    }

    private function schemaType(array $schema): string
    {
        return match ($schema['type'] ?? null) {
            'string' => 'string', 'integer' => 'int', 'number' => 'float', 'boolean' => 'bool', 'array', 'object' => 'array', default => 'mixed',
        };
    }

    private function isJson(array $contentTypes): bool
    {
        foreach ($contentTypes as $type) {
            $type = strtolower($type);
            if ($type === 'application/json' || str_ends_with($type, '+json')) {
                return true;
            }
        }

        return false;
    }

    private function resolve(array $value, array $specification): array
    {
        if (!isset($value['$ref']) || !str_starts_with($value['$ref'], '#/')) {
            return $value;
        }
        $resolved = $specification;
        foreach (explode('/', substr($value['$ref'], 2)) as $part) {
            $resolved = $resolved[str_replace(['~1', '~0'], ['/', '~'], $part)] ?? null;
            if (!is_array($resolved)) {
                return [];
            }
        }

        return $resolved;
    }

    private function variable(string $name): string
    {
        $variable = preg_replace('/[^A-Za-z0-9_]/', '_', $name) ?: 'parameter';
        if (ctype_digit($variable[0])) {
            $variable = 'parameter_'.$variable;
        }

        return $variable;
    }

    private function className(string $name): string
    {
        $normalized = str_replace(' ', '', ucwords(str_replace(['-', '_', '/'], ' ', $name)));
        if ($normalized === '' || ctype_digit($normalized[0])) {
            return 'Model'.$normalized;
        }

        return $normalized;
    }
}
