<?php

declare(strict_types=1);

namespace App\Api\Connector;

use App\Api\ApiAuthentication;
use App\Api\OperationCatalog;
use App\Service\ApiOperationRunner;
use Symfony\Contracts\HttpClient\ResponseInterface;

abstract class AbstractConnector
{
    public const COMPONENT = '';

    public function __construct(
        private readonly ApiOperationRunner $runner,
        private readonly OperationCatalog $catalog,
        private readonly ?\App\Api\ApiRevisionContext $revisionContext = null,
        private readonly ?\App\Api\OpenApiContractValidator $contractValidator = null,
    ) {
    }

    /** @return array<string, array> Operation IDs mapped to their documented routing contracts. */
    final public function operations(): array
    {
        return $this->catalog->component(static::COMPONENT, $this->revisionContext?->current())['operations'];
    }

    /**
     * Execute a documented operation with query/json/body/headers HttpClient options.
     * Request and response schemas remain the responsibility of the calling runner.
     *
     * @param array<string, string|int> $pathParameters
     */
    final public function execute(string $operationId, array $pathParameters = [], array $options = []): ResponseInterface
    {
        return $this->executeOperation($operationId, $pathParameters, $options, false);
    }

    /** Execute an operation with request and response validation against the pinned OpenAPI revision. */
    final public function executeTyped(string $operationId, array $pathParameters = [], array $options = []): ResponseInterface
    {
        return $this->executeOperation($operationId, $pathParameters, $options, true);
    }

    private function executeOperation(string $operationId, array $pathParameters, array $options, bool $typed): ResponseInterface
    {
        $revision = $this->revisionContext?->current();
        $operation = $this->catalog->operation(static::COMPONENT, $operationId, $revision);
        preg_match_all('/\{([^{}]+)\}/', $operation['path'], $matches);
        $names = array_unique($matches[1]);
        if (array_diff(array_keys($pathParameters), $names) !== []) {
            throw new \InvalidArgumentException('Unknown path parameter for '.$operationId);
        }
        $path = $operation['path'];
        foreach ($names as $name) {
            $value = $pathParameters[$name] ?? null;
            if ((!is_string($value) && !is_int($value)) || (string) $value === '' || in_array((string) $value, ['.', '..'], true)) {
                throw new \InvalidArgumentException('Missing or invalid path parameter: '.$name);
            }
            $path = str_replace('{'.$name.'}', rawurlencode((string) $value), $path);
        }
        $headers = $this->headerNames($options['headers'] ?? []);
        foreach ($operation['parameters'] as $parameter) {
            if (!$parameter['required'] || $parameter['in'] === 'path') {
                continue;
            }
            $exists = $parameter['in'] === 'header'
                ? isset($headers[strtolower($parameter['name'])])
                : isset($options['query'][$parameter['name']]);
            if (!$exists) {
                throw new \InvalidArgumentException('Missing required '.$parameter['in'].' parameter: '.$parameter['name']);
            }
        }
        if ($operation['body_required'] && !array_key_exists('json', $options) && !array_key_exists('body', $options)) {
            throw new \InvalidArgumentException('A request body is required for '.$operationId);
        }
        $queryParameters = $options['query'] ?? [];
        if (isset($options['query'])) {
            if (!is_array($options['query'])) {
                throw new \InvalidArgumentException('Query parameters must be an array.');
            }
            $query = $this->queryString($options['query']);
            $path .= $query === '' ? '' : '?'.$query;
            unset($options['query']);
        }

        $authentication = ApiAuthentication::from($operation['authentication']);
        if (!$typed) {
            return $this->runner->run($operation['method'], $path, $options, $authentication, static::COMPONENT, $operationId);
        }
        if ($this->contractValidator === null) {
            throw new \LogicException('OpenAPI contract validation is not configured.');
        }
        $specPath = $this->catalog->openApiPath(static::COMPONENT, $revision);
        $this->contractValidator->validateRequest(static::COMPONENT, $operationId, $specPath, $operation['path'], $operation['method'], $path, $options, $authentication, $queryParameters);
        $response = $this->runner->run($operation['method'], $path, $options, $authentication, static::COMPONENT, $operationId);
        $this->contractValidator->validateResponse(static::COMPONENT, $operationId, $specPath, $operation['method'], $operation['path'], $response);

        return $response;
    }

    private function headerNames(array $headers): array
    {
        $names = [];
        foreach ($headers as $name => $value) {
            $name = is_int($name) ? explode(':', (string) $value, 2)[0] : $name;
            $names[strtolower(trim($name))] = true;
        }

        return $names;
    }

    /** OpenAPI form/explode: array query values repeat the key, booleans use true/false. */
    private function queryString(array $query): string
    {
        $pairs = [];
        foreach ($query as $name => $values) {
            foreach (is_array($values) ? $values : [$values] as $value) {
                if ($value === null) {
                    continue;
                }
                if (!is_scalar($value)) {
                    throw new \InvalidArgumentException('Query values must be scalars or lists of scalars.');
                }
                $value = is_bool($value) ? ($value ? 'true' : 'false') : (string) $value;
                $pairs[] = rawurlencode((string) $name).'='.rawurlencode($value);
            }
        }

        return implode('&', $pairs);
    }
}
