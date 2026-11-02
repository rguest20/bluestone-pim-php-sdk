<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api;

/** Extracts routing contracts from Bluestone's OpenAPI files without embedding production hosts. */
final class SpecificationCompiler
{
    public function compile(string $component, array $specification, string $sourceUrl, string $sourceChecksum): array
    {
        $operations = [];
        foreach ($specification['paths'] ?? [] as $path => $item) {
            foreach ($item as $method => $operation) {
                if (!in_array($method, ['get', 'post', 'put', 'patch', 'delete', 'head', 'options', 'trace'], true)) {
                    continue;
                }
                $id = $operation['operationId'] ?? '';
                if (!is_string($id) || $id === '' || isset($operations[$id])) {
                    throw new \RuntimeException('Missing or duplicate operationId in '.$component);
                }
                $servers = $operation['servers'] ?? $item['servers'] ?? $specification['servers'] ?? [];
                $serverUrl = $servers[0]['url'] ?? '';
                $server = parse_url(str_contains($serverUrl, '://') ? $serverUrl : 'https://'.$serverUrl);
                if ($server === false || ($server['scheme'] ?? '') !== 'https'
                    || ($server['host'] ?? '') !== 'api.bluestonepim.com'
                    || isset($server['query']) || isset($server['fragment']) || str_contains($serverUrl, '{')) {
                    throw new \RuntimeException('Unsupported API server in '.$component.': '.$id);
                }
                if (!str_starts_with($path, '/') || str_starts_with($path, '//')) {
                    throw new \RuntimeException('Invalid API path in '.$component.': '.$id);
                }
                $parameters = [];
                foreach (array_merge($item['parameters'] ?? [], $operation['parameters'] ?? []) as $parameter) {
                    $parameter = $this->resolve($parameter, $specification);
                    if (!in_array($parameter['in'], ['path', 'query', 'header'], true)) {
                        throw new \RuntimeException('Unsupported parameter location in '.$component.': '.$id);
                    }
                    $parameters[$parameter['in'].':'.$parameter['name']] = [
                        'name' => $parameter['name'], 'in' => $parameter['in'],
                        'required' => (bool) ($parameter['required'] ?? false),
                        'style' => $parameter['style'] ?? ($parameter['in'] === 'query' ? 'form' : 'simple'),
                        'explode' => $parameter['explode'] ?? ($parameter['in'] === 'query'),
                    ];
                    if ($parameter['in'] === 'query' && ($parameters[$parameter['in'].':'.$parameter['name']]['style'] !== 'form'
                        || !$parameters[$parameter['in'].':'.$parameter['name']]['explode'])) {
                        throw new \RuntimeException('Unsupported query serialization in '.$component.': '.$id);
                    }
                }
                $body = $this->resolve($operation['requestBody'] ?? [], $specification);
                $operations[$id] = [
                    'method' => strtoupper($method),
                    'path' => rtrim($server['path'] ?? '', '/').$path,
                    'authentication' => $this->authentication($operation['security'] ?? $specification['security'] ?? [], $specification),
                    'parameters' => array_values($parameters),
                    'body_required' => (bool) ($body['required'] ?? false),
                    'content_types' => array_keys($body['content'] ?? []),
                    'tags' => $operation['tags'] ?? [],
                    'deprecated' => (bool) ($operation['deprecated'] ?? false),
                ];
            }
        }
        if ($operations === []) {
            throw new \RuntimeException('No API operations found for '.$component);
        }
        ksort($operations, SORT_STRING);

        return ['schema_version' => 1, 'component' => $component, 'title' => $specification['info']['title'],
            'specification_version' => $specification['info']['version'], 'source_url' => $sourceUrl,
            'source_sha256' => $sourceChecksum, 'operations' => $operations];
    }

    private function authentication(array $requirements, array $specification): string
    {
        if ($requirements === [] || in_array([], $requirements, true)) {
            return ApiAuthentication::None->value;
        }
        foreach ($requirements as $requirement) {
            if (count($requirement) !== 1) {
                continue;
            }
            $scheme = $specification['components']['securitySchemes'][array_key_first($requirement)] ?? [];
            if (($scheme['type'] ?? '') === 'oauth2') {
                return ApiAuthentication::OAuth2->value;
            }
            if (($scheme['type'] ?? '') === 'apiKey' && ($scheme['in'] ?? '') === 'header'
                && strtolower($scheme['name'] ?? '') === 'x-api-key') {
                return ApiAuthentication::ApiKey->value;
            }
        }
        throw new \RuntimeException('Unsupported OpenAPI authentication requirements.');
    }

    private function resolve(array $value, array $specification): array
    {
        if (!isset($value['$ref'])) {
            return $value;
        }
        if (!str_starts_with($value['$ref'], '#/')) {
            throw new \RuntimeException('External OpenAPI references are not supported.');
        }
        $resolved = $specification;
        foreach (explode('/', substr($value['$ref'], 2)) as $part) {
            $resolved = $resolved[str_replace(['~1', '~0'], ['/', '~'], $part)] ?? null;
            if (!is_array($resolved)) {
                throw new \RuntimeException('Unresolved OpenAPI reference.');
            }
        }

        return $resolved;
    }
}
