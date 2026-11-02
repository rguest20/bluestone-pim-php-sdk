<?php

declare(strict_types=1);

namespace App\Tests;

use Youwe\BluestonePim\Api\BluestoneApiException;
use Youwe\BluestonePim\Api\BluestoneClient;
use Youwe\BluestonePim\Api\Connector\PimConnector;
use Youwe\BluestonePim\Api\OperationCatalog;
use Youwe\BluestonePim\Database\ConnectionFactory;
use Youwe\BluestonePim\Migration\MigrationLock;
use Youwe\BluestonePim\Service\ApiOperationRunner;
use Youwe\BluestonePim\Service\CatalogRunner;
use Youwe\BluestonePim\Service\PimJobRunner;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

final class ServiceRunnersTest extends TestCase
{
    private MigrationLock $lock;

    protected function setUp(): void
    {
        $this->lock = new MigrationLock(ConnectionFactory::create('sqlite:///:memory:'));
        $this->lock->acquire();
    }

    protected function tearDown(): void
    {
        $this->lock->release();
    }

    public function testCatalogRunnerUsesDocumentedPatchShapeAndEncodesIds(): void
    {
        $requests = [];
        $http = new MockHttpClient(static function (string $method, string $url, array $options) use (&$requests): MockResponse {
            $requests[] = [$method, $url, $options];

            return count($requests) === 1 ? new MockResponse('{"access_token":"test"}') : new MockResponse('', ['http_code' => 204]);
        });
        (new CatalogRunner($this->pim($http)))->updateDetails('id/with slash', ['name' => ['value' => 'New name']], 'en');
        self::assertSame('PATCH', $requests[1][0]);
        self::assertStringEndsWith('/pim/catalogs/nodes/id%2Fwith%20slash', $requests[1][1]);
        self::assertContains('context: en', $requests[1][2]['headers']);
        self::assertSame(['name' => ['value' => 'New name']], json_decode($requests[1][2]['body'], true));
    }

    public function testAsyncTasksArePolledUntilCompleted(): void
    {
        $http = new MockHttpClient([
            new MockResponse('{"access_token":"test"}'),
            new MockResponse('{"status":"WAITING"}'),
            new MockResponse('{"status":"EXECUTING"}'),
            new MockResponse('{"status":"COMPLETED","count":12}'),
        ]);
        $result = (new PimJobRunner($this->pim($http)))->waitForCompletion('task-id', 5, 1);
        self::assertSame(['status' => 'COMPLETED', 'count' => 12], $result);
        self::assertSame(4, $http->getRequestsCount());
    }

    public function testAsyncErrorsDoNotCountAsCompletion(): void
    {
        $http = new MockHttpClient([
            new MockResponse('{"access_token":"test"}'),
            new MockResponse('{"status":"ERROR","errorMessage":"sensitive-pim-data"}'),
        ]);
        $this->expectExceptionMessage('did not complete successfully');
        (new PimJobRunner($this->pim($http)))->waitForCompletion('task-id', 5, 1);
    }

    public function testApiRunnerWorksWithoutAMigrationLock(): void
    {
        $http = new MockHttpClient([new MockResponse('{"access_token":"test"}'), new MockResponse('{}')]);
        $this->lock->release();
        self::assertSame(200, $this->api($http)->run('GET', '/pim/example')->getStatusCode());
    }

    public function testRateLimitedRequestsAreRetried(): void
    {
        $http = new MockHttpClient([
            new MockResponse('{"access_token":"test"}'),
            new MockResponse('', ['http_code' => 429, 'response_headers' => ['Retry-After: 0']]),
            new MockResponse('{}'),
        ]);
        self::assertSame(200, $this->api($http)->run('POST', '/pim/example', ['json' => []])->getStatusCode());
        self::assertSame(3, $http->getRequestsCount());
    }

    public function testServerErrorsAreNotRetriedForNonIdempotentMethods(): void
    {
        $http = new MockHttpClient([new MockResponse('{"access_token":"test"}'), new MockResponse('', ['http_code' => 503])]);
        try {
            $this->api($http)->run('POST', '/pim/example', ['json' => []]);
            self::fail('A 503 POST must not be retried.');
        } catch (BluestoneApiException $error) {
            self::assertSame(503, $error->statusCode);
            self::assertSame(2, $http->getRequestsCount());
        }
    }

    private function api(MockHttpClient $http): ApiOperationRunner
    {
        return new ApiOperationRunner(new BluestoneClient($http, 'https://api.test.bluestonepim.com', 'https://idp.test.bluestonepim.com/op/token', 'id', 'secret'), $this->lock);
    }

    private function pim(MockHttpClient $http): PimConnector
    {
        return new PimConnector($this->api($http), new OperationCatalog(dirname(__DIR__).'/resources/bluestone'));
    }
}
