<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class BluestoneClient
{
    private const REQUEST_LIMITS = ['max_redirects' => 0, 'timeout' => 30, 'max_duration' => 60];

    private ?string $accessToken = null;
    private float $expiresAt = 0;
    private int $dispatchedRequests = 0;

    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly string $baseUrl,
        private readonly string $tokenUrl,
        private readonly string $clientId,
        #[\SensitiveParameter] private readonly string $clientSecret,
        #[\SensitiveParameter] private readonly string $publicApiKey = '',
    ) {
    }

    /**
     * Supports HttpClient's query, json, body (including streams), and headers options.
     * The host, authentication, redirect policy and request deadlines are fixed here.
     */
    public function request(string $method, string $path, array $options = [], ApiAuthentication $authentication = ApiAuthentication::OAuth2): ResponseInterface
    {
        if (!str_starts_with($path, '/') || str_starts_with($path, '//') || str_contains($path, '\\')) {
            throw new \InvalidArgumentException('Use an API path starting with a single slash, not an absolute URL.');
        }
        $unsupported = array_diff(array_keys($options), ['query', 'json', 'body', 'headers']);
        if ($unsupported !== []) {
            throw new \InvalidArgumentException('Unsupported request options: '.implode(', ', $unsupported));
        }
        foreach ($options['headers'] ?? [] as $name => $value) {
            $header = is_int($name) ? explode(':', (string) $value, 2)[0] : $name;
            if (in_array(strtolower(trim($header)), ['authorization', 'host', 'proxy-authorization', 'x-api-key'], true)) {
                throw new \InvalidArgumentException('Authentication and host headers are managed by BluestoneClient.');
            }
        }
        $this->validateConfiguration($authentication);
        if ($authentication === ApiAuthentication::OAuth2) {
            $options['auth_bearer'] = $this->token();
        } elseif ($authentication === ApiAuthentication::ApiKey) {
            $options['headers'][] = 'X-Api-Key: '.$this->publicApiKey;
        }

        ++$this->dispatchedRequests;
        $response = $this->httpClient->request(strtoupper($method), rtrim($this->baseUrl, '/').$path, array_replace($options, self::REQUEST_LIMITS));
        try {
            $this->assertSuccessful($response, 'Bluestone API request');
        } catch (BluestoneApiException $error) {
            if ($error->statusCode === 429) {
                // A rate-limited request was rejected without being processed.
                --$this->dispatchedRequests;
            } elseif ($error->statusCode === 401) {
                $this->accessToken = null;
            }
            throw $error;
        }

        return $response;
    }

    /** Number of API requests that may have changed remote state; local rejections and HTTP 429 are excluded. */
    public function dispatchedRequests(): int
    {
        return $this->dispatchedRequests;
    }

    private function token(): string
    {
        if ($this->accessToken !== null && microtime(true) < $this->expiresAt) {
            return $this->accessToken;
        }
        $response = $this->httpClient->request('POST', $this->tokenUrl, [
            'body' => [
                'grant_type' => 'client_credentials',
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
            ],
        ] + self::REQUEST_LIMITS);
        $this->assertSuccessful($response, 'Bluestone authentication');
        $data = $response->toArray();
        if (!is_string($data['access_token'] ?? null) || $data['access_token'] === '') {
            throw new \RuntimeException('Bluestone authentication did not return an access token.');
        }
        $this->accessToken = $data['access_token'];
        $this->expiresAt = microtime(true) + max(0, (int) ($data['expires_in'] ?? 60) - 30);

        return $this->accessToken;
    }

    private function assertSuccessful(ResponseInterface $response, string $operation): void
    {
        $status = $response->getStatusCode();
        $retryAfter = $response->getHeaders(false)['retry-after'][0] ?? null;
        // Consume the response now: a migration must not be marked applied before I/O finishes.
        $response->getContent(false);
        if ($status < 200 || $status >= 300) {
            throw new BluestoneApiException($operation, $status, is_string($retryAfter) ? $retryAfter : null);
        }
    }

    private function validateConfiguration(ApiAuthentication $authentication): void
    {
        if ($authentication === ApiAuthentication::OAuth2 && ($this->clientId === '' || $this->clientSecret === '')) {
            throw new \RuntimeException('Configure BLUESTONE_CLIENT_ID and BLUESTONE_CLIENT_SECRET in .env.local.');
        }
        if ($authentication === ApiAuthentication::ApiKey && $this->publicApiKey === '') {
            throw new \RuntimeException('Configure BLUESTONE_PUBLIC_API_KEY for the Public API connector.');
        }
        $urls = $authentication === ApiAuthentication::OAuth2 ? [$this->baseUrl, $this->tokenUrl] : [$this->baseUrl];
        foreach ($urls as $url) {
            if (parse_url($url, PHP_URL_SCHEME) !== 'https' || !parse_url($url, PHP_URL_HOST)
                || parse_url($url, PHP_URL_USER) !== null || parse_url($url, PHP_URL_PASS) !== null) {
                throw new \RuntimeException('Bluestone API and token URLs must use HTTPS without embedded credentials.');
            }
        }
    }
}
