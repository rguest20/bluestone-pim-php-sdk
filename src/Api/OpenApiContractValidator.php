<?php

declare(strict_types=1);

namespace App\Api;

use League\OpenAPIValidation\PSR7\OperationAddress;
use League\OpenAPIValidation\PSR7\ValidatorBuilder;
use Nyholm\Psr7\Response;
use Nyholm\Psr7\ServerRequest;
use Nyholm\Psr7\Stream;

/** Validates explicitly typed connector calls against the migration's pinned OpenAPI revision. */
final class OpenApiContractValidator
{
    private array $validators = [];
    private array $specifications = [];

    public function validateRequest(string $component, string $operationId, string $specPath, string $openApiPath, string $method, string $path, array $options, ApiAuthentication $authentication, array $queryParameters = []): void
    {
        $headers = $this->headers($options['headers'] ?? []);
        if ($authentication === ApiAuthentication::OAuth2) {
            $headers['Authorization'] = 'Bearer contract-validation-token';
        } elseif ($authentication === ApiAuthentication::ApiKey) {
            $headers['X-Api-Key'] = 'contract-validation-key';
        }
        $body = '';
        if (array_key_exists('json', $options)) {
            try {
                $body = json_encode($options['json'], JSON_THROW_ON_ERROR);
            } catch (\JsonException $exception) {
                throw ApiContractException::request($operationId);
            }
            $headers['Content-Type'] ??= 'application/json';
        } elseif (isset($options['body'])) {
            if (!is_string($options['body']) && !is_numeric($options['body'])) {
                throw ApiContractException::request($operationId);
            }
            $body = (string) $options['body'];
        }
        try {
            $request = (new ServerRequest(strtoupper($method), 'https://api.bluestonepim.com'.$path, $headers, Stream::create($body)))
                ->withQueryParams($queryParameters);
            $this->requestValidator($component, $specPath)->validate($this->address($specPath, $operationId, $method), $request);
        } catch (\Throwable $error) {
            throw ApiContractException::request($operationId, $this->field($error, $specPath));
        }
    }

    public function validateResponse(string $component, string $operationId, string $specPath, string $method, string $openApiPath, \Symfony\Contracts\HttpClient\ResponseInterface $response): void
    {
        try {
            $headers = $response->getHeaders(false);
            $message = new Response($response->getStatusCode(), $headers, $response->getContent(false));
            $this->responseValidator($component, $specPath)->validate($this->address($specPath, $operationId, $method), $message);
        } catch (\Throwable $error) {
            throw ApiContractException::response($operationId, $this->field($error, $specPath));
        }
    }

    private function specification(string $path): array
    {
        return $this->specifications[$path] ??= json_decode(file_get_contents($path), true, 512, JSON_THROW_ON_ERROR);
    }

    private function address(string $specPath, string $operationId, string $method): OperationAddress
    {
        foreach ($this->specification($specPath)['paths'] ?? [] as $path => $item) {
            $operation = $item[strtolower($method)] ?? [];
            if (($operation['operationId'] ?? null) === $operationId) {
                // Addresses use source paths and lowercase verbs; the runtime route includes the server prefix.
                return new OperationAddress($path, strtolower($method));
            }
        }

        throw new \LogicException('The operation is absent from its pinned OpenAPI document.');
    }

    /** Only expose schema-defined field identifiers, never validator messages or rejected data. */
    private function field(\Throwable $error, string $specPath): ?string
    {
        $allowed = [];
        $collect = static function (array $value) use (&$collect, &$allowed): void {
            foreach (array_keys($value['properties'] ?? []) as $name) {
                $allowed[(string) $name] = true;
            }
            if (isset($value['name'], $value['in']) && is_string($value['name'])) {
                $allowed[$value['name']] = true;
            }
            foreach ($value as $child) {
                if (is_array($child)) {
                    $collect($child);
                }
            }
        };
        try {
            $collect($this->specification($specPath));
        } catch (\Throwable) {
            return null;
        }
        do {
            if ($error instanceof \League\OpenAPIValidation\Schema\Exception\SchemaMismatch) {
                $parts = $error->dataBreadCrumb()?->buildChain() ?? [];
                $safe = array_filter($parts, static fn ($part): bool => is_string($part) && isset($allowed[$part]));
                if ($safe !== []) {
                    return implode('.', $safe);
                }
            }
            if (($error instanceof \League\OpenAPIValidation\PSR7\Exception\Validation\InvalidParameter
                || $error instanceof \League\OpenAPIValidation\PSR7\Exception\Validation\RequiredParameterMissing)
                && isset($allowed[$error->name()])) {
                return $error->name();
            }
            $error = $error->getPrevious();
        } while ($error !== null);

        return null;
    }

    private function requestValidator(string $component, string $specPath): \League\OpenAPIValidation\PSR7\RoutedServerRequestValidator
    {
        return $this->validators[$component][$specPath]['request'] ??= (new ValidatorBuilder())->fromJsonFile($specPath)->getRoutedRequestValidator();
    }

    private function responseValidator(string $component, string $specPath): \League\OpenAPIValidation\PSR7\ResponseValidator
    {
        return $this->validators[$component][$specPath]['response'] ??= (new ValidatorBuilder())->fromJsonFile($specPath)->getResponseValidator();
    }

    private function headers(array $headers): array
    {
        $normalized = [];
        foreach ($headers as $name => $value) {
            if (is_int($name)) {
                [$name, $value] = array_pad(explode(':', (string) $value, 2), 2, '');
            }
            if (!is_scalar($value) && !is_array($value)) {
                throw new \InvalidArgumentException('Invalid HTTP header value.');
            }
            $normalized[trim((string) $name)] = $value;
        }

        return $normalized;
    }
}
