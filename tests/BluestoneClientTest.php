<?php

declare(strict_types=1);

namespace App\Tests;

use Youwe\BluestonePim\Api\BluestoneApiException;
use Youwe\BluestonePim\Api\BluestoneClient;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

final class BluestoneClientTest extends TestCase
{
    public function testOauthTokenIsCachedAndDocumentedPathsAndPayloadsAreForwarded(): void
    {
        $requests = [];
        $http = new MockHttpClient(static function (string $method, string $url, array $options) use (&$requests): MockResponse {
            $requests[] = [$method, $url, $options];
            if (count($requests) === 1) {
                return new MockResponse('{"access_token":"test-token","expires_in":3600}');
            }

            return new MockResponse('', ['http_code' => 204]);
        });
        $client = $this->client($http);
        self::assertSame(204, $client->request('PATCH', '/pim/catalogs/nodes/example', [
            'json' => ['name' => ['value' => 'Updated']], 'headers' => ['context' => 'en'],
        ])->getStatusCode());
        $client->request('DELETE', '/metadata/providers/example', ['query' => ['id' => '123']]);

        self::assertCount(3, $requests);
        self::assertSame(['POST', 'https://idp.test.bluestonepim.com/op/token'], array_slice($requests[0], 0, 2));
        parse_str($requests[0][2]['body'], $form);
        self::assertSame(['grant_type' => 'client_credentials', 'client_id' => 'client-id', 'client_secret' => 'client-secret'], $form);
        self::assertSame('https://api.test.bluestonepim.com/pim/catalogs/nodes/example', $requests[1][1]);
        self::assertContains('Authorization: Bearer test-token', $requests[1][2]['headers']);
        self::assertSame(['name' => ['value' => 'Updated']], json_decode($requests[1][2]['body'], true));
        self::assertSame(0, $requests[1][2]['max_redirects']);
        self::assertSame(60.0, $requests[1][2]['max_duration']);
        self::assertStringContainsString('id=123', $requests[2][1]);
    }

    public function testExpiredTokensAreRenewedBeforeNextRequest(): void
    {
        $http = new MockHttpClient([
            new MockResponse('{"access_token":"old","expires_in":0}'),
            new MockResponse('{}'),
            new MockResponse('{"access_token":"new","expires_in":3600}'),
            new MockResponse('{}'),
        ]);
        $client = $this->client($http);
        $client->request('GET', '/pim/example');
        $client->request('GET', '/pim/example');
        self::assertSame(4, $http->getRequestsCount());
    }

    public function testFailedWriteIsNotAutomaticallyRetriedAndErrorBodyIsNotExposed(): void
    {
        $http = new MockHttpClient([
            new MockResponse('{"access_token":"test","expires_in":3600}'),
            new MockResponse('{"error":"sensitive-body"}', ['http_code' => 429]),
        ]);
        try {
            $this->client($http)->request('POST', '/pim/example', ['json' => ['number' => 'unique']]);
            self::fail('Expected an API exception.');
        } catch (BluestoneApiException $error) {
            self::assertSame(429, $error->statusCode);
            self::assertStringNotContainsString('sensitive-body', $error->getMessage());
            self::assertSame(2, $http->getRequestsCount());
        }
    }

    public function testRedirectsAreNotTreatedAsSuccessfulWrites(): void
    {
        $http = new MockHttpClient([
            new MockResponse('{"access_token":"test"}'),
            new MockResponse('', ['http_code' => 302, 'response_headers' => ['location: https://other.example']]),
        ]);
        $this->expectException(BluestoneApiException::class);
        $this->client($http)->request('POST', '/pim/example');
    }

    public function testAbsolutePathsAndAuthOverridesAreRejectedBeforeAnyRequest(): void
    {
        $http = new MockHttpClient();
        $client = $this->client($http);
        foreach ([
            ['https://other.example', []], ['//other.example', []], ['/\\other.example', []],
            ['/pim/example', ['headers' => ['Authorization' => 'Bearer other']]],
            ['/pim/example', ['headers' => ['Host: other.example']]],
            ['/pim/example', ['headers' => ['x-api-key' => 'other-key']]],
            ['/pim/example', ['auth_bearer' => 'other']],
        ] as [$path, $options]) {
            try {
                $client->request('GET', $path, $options);
                self::fail('Expected invalid options to be rejected.');
            } catch (\InvalidArgumentException) {
                self::assertSame(0, $http->getRequestsCount());
            }
        }
    }

    public function testAuthenticationFailureDoesNotExposeCredentialsOrResponse(): void
    {
        $http = new MockHttpClient(new MockResponse('client-secret', ['http_code' => 401]));
        $this->expectExceptionMessage('Bluestone authentication failed (HTTP 401).');
        $this->client($http)->request('GET', '/pim/example');
    }

    private function client(MockHttpClient $http): BluestoneClient
    {
        return new BluestoneClient($http, 'https://api.test.bluestonepim.com', 'https://idp.test.bluestonepim.com/op/token', 'client-id', 'client-secret');
    }
}
