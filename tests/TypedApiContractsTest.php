<?php

declare(strict_types=1);

namespace App\Tests;

use Youwe\BluestonePim\Api\ApiContractException;
use Youwe\BluestonePim\Api\BluestoneApiException;
use Youwe\BluestonePim\Api\ApiRevisionContext;
use Youwe\BluestonePim\Api\BluestoneClient;
use Youwe\BluestonePim\Api\Connector\BulkOperationsConnector;
use Youwe\BluestonePim\Api\Connector\MediaBankConnector;
use Youwe\BluestonePim\Api\Connector\PimConnector;
use Youwe\BluestonePim\Api\Connector\PublicApiConnector;
use Youwe\BluestonePim\Api\Connector\QueryBuilderConnector;
use Youwe\BluestonePim\Api\Connector\IdpConnector;
use Youwe\BluestonePim\Api\OpenApiContractValidator;
use Youwe\BluestonePim\Api\OpenApiModelSerializer;
use Youwe\BluestonePim\Api\OperationCatalog;
use Youwe\BluestonePim\Api\TypedApiAdapterFactory;
use Youwe\BluestonePim\Database\ConnectionFactory;
use Youwe\BluestonePim\Migration\MigrationContext;
use Youwe\BluestonePim\Migration\MigrationLock;
use Youwe\BluestonePim\Migration\MigrationStorage;
use Youwe\BluestonePim\Service\ApiOperationRunner;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

final class TypedApiContractsTest extends TestCase
{
    private OperationCatalog $catalog;
    private ApiRevisionContext $revision;
    private MigrationLock $lock;
    private MigrationStorage $storage;

    protected function setUp(): void
    {
        $connection = ConnectionFactory::create('sqlite:///:memory:');
        $this->lock = new MigrationLock($connection);
        $this->lock->acquire();
        $this->storage = new MigrationStorage($connection, 'test', 'https://api.test.bluestonepim.com');
        $this->storage->initialize();
        $this->catalog = new OperationCatalog(dirname(__DIR__).'/resources/bluestone');
        $this->revision = new ApiRevisionContext();
        $this->revision->select($this->catalog->activeRevision());
    }

    protected function tearDown(): void
    {
        $this->lock->release();
    }

    public function testGeneratedPatchPreservesOmissionAndExplicitNullAndEmptyResponse(): void
    {
        $requests = [];
        $http = new MockHttpClient(static function (string $method, string $url, array $options) use (&$requests): MockResponse {
            $requests[] = [$method, $url, $options];
            return count($requests) === 1 ? new MockResponse('{"access_token":"oauth"}') : new MockResponse('', ['http_code' => 204]);
        });
        $namespace = 'Youwe\\BluestonePim\\Generated\\R'.$this->revision->current().'\\Pim\\Model\\';
        $requestClass = $namespace.'CategoryMetadataUpdateRequest';
        $valueClass = $namespace.'PropertyUpdateString';
        $request = (new $requestClass())->setName((new $valueClass())->setValue('Hardware'))->setDescription(null);
        $response = $this->factory($http)->forComponent('pim')->partialUpdateCatalogNode('node/one', $request, ['context' => 'en']);
        self::assertSame(204, $response->getStatusCode());
        self::assertSame('https://api.test.bluestonepim.com/pim/catalogs/nodes/node%2Fone', $requests[1][1]);
        self::assertSame(['description' => null, 'name' => ['value' => 'Hardware']], json_decode($requests[1][2]['body'], true));
        self::assertContains('Authorization: Bearer oauth', $requests[1][2]['headers']);
        self::assertSame(0, $requests[1][2]['max_redirects']);
    }

    public function testInvalidPatchNeverContactsOauthOrTenant(): void
    {
        $http = new MockHttpClient();
        try {
            $this->pim($http)->executeTyped('partialUpdateCatalogNode', ['id' => 'node'], ['json' => ['number' => ['secret-value']]]);
            self::fail('The number field must be a string or null.');
        } catch (ApiContractException $error) {
            self::assertStringContainsString('partialUpdateCatalogNode', $error->getMessage());
            self::assertStringContainsString('number', $error->getMessage());
            self::assertStringNotContainsString('secret-value', $error->getMessage());
            self::assertNull($error->getPrevious(), 'Validator exceptions can contain rejected values.');
            self::assertSame(0, $http->getRequestsCount());
        }
    }

    public function testMissingRequiredReferencedFieldFailsBeforeDispatch(): void
    {
        $http = new MockHttpClient();
        $connector = new MediaBankConnector($this->runner($http), $this->catalog, $this->revision, new OpenApiContractValidator());
        try {
            $connector->executeTyped('createAsset', [], ['json' => new \stdClass()]);
            self::fail('The fileName field is required.');
        } catch (ApiContractException $error) {
            self::assertStringContainsString('fileName', $error->getMessage());
            self::assertSame(0, $http->getRequestsCount());
        }
    }

    public function testSchemaInvalidResponseLeavesCheckpointIncompleteAndGenericAccessWorks(): void
    {
        $http = new MockHttpClient([
            new MockResponse('{"access_token":"oauth"}'),
            new MockResponse('{"status":"COMPLETED","count":"private-data"}', ['response_headers' => ['Content-Type: application/json']]),
        ]);
        $context = new MigrationContext('20261028000001', $this->storage, $this->lock, $this->revision);
        try {
            $context->step('job-completion', fn () => $this->pim($http)->executeTyped('getJobStatus', ['taskId' => 'task'])->toArray());
            self::fail('The count must be an integer.');
        } catch (ApiContractException $error) {
            self::assertStringNotContainsString('private-data', $error->getMessage());
            self::assertFalse($this->storage->step('20261028000001', 'job-completion'));
        }
        $generic = new MockHttpClient([new MockResponse('{"access_token":"oauth"}'), new MockResponse('{"count":"historical"}')]);
        self::assertSame(['count' => 'historical'], $this->pim($generic)->execute('getJobStatus', ['taskId' => 'task'])->toArray());
    }

    public function testJsonResponseDeserializesIntoThePinnedModel(): void
    {
        $http = new MockHttpClient([new MockResponse('{"access_token":"oauth"}'), new MockResponse('{"status":"COMPLETED","count":3}', ['response_headers' => ['Content-Type: application/json']])]);
        $response = $this->factory($http)->forComponent('pim')->getJobStatus('task');
        $class = 'Youwe\\BluestonePim\\Generated\\R'.$this->revision->current().'\\Pim\\Model\\JobStatusResponse';
        $model = (new OpenApiModelSerializer($this->catalog, $this->revision))->fromArray($response->toArray(), $class, 'pim', $this->revision->current());
        self::assertSame('COMPLETED', $model->getStatus());
        self::assertSame(3, $model->getCount());
    }

    public function testSameOperationIdInTwoComponentsUsesSeparateContracts(): void
    {
        $http = new MockHttpClient([new MockResponse('{"access_token":"oauth"}'),
            new MockResponse('{"status":"COMPLETED"}', ['response_headers' => ['Content-Type: application/json']]),
            new MockResponse('{"status":"COMPLETED_WITH_ISSUES"}', ['response_headers' => ['Content-Type: application/json']]),
        ]);
        $factory = $this->factory($http);
        self::assertStringContainsString('/pim/async/status/task', $factory->forComponent('pim')->getJobStatus('task')->getInfo('url'));
        self::assertStringContainsString('/bulk-operations/', $factory->forComponent('bulk-operations')->getJobStatus('job')->getInfo('url'));
    }

    public function testGeneratedFacadeWorksWithoutAMigrationLock(): void
    {
        $http = new MockHttpClient([
            new MockResponse('{"access_token":"test"}'),
            new MockResponse('{"status":"COMPLETED"}', ['response_headers' => ['Content-Type: application/json']]),
        ]);
        $this->lock->release();
        $this->factory($http)->forComponent('pim')->getJobStatus('task');
        self::assertSame(2, $http->getRequestsCount());
    }

    public function testPublicGeneratedCallsUseApiKeyIndependentlyOfOauthAndHealthUsesNeither(): void
    {
        $requests = [];
        $http = new MockHttpClient(static function (string $method, string $url, array $options) use (&$requests): MockResponse {
            $requests[] = [$url, $options];
            return count($requests) === 1 ? new MockResponse('', ['http_code' => 204])
                : new MockResponse('{"id":"one","type":"SINGLE","name":"Name","number":"N1"}', ['response_headers' => ['Content-Type: application/json']]);
        });
        $client = new BluestoneClient($http, 'https://api.test.bluestonepim.com', '', '', '', 'public-only-key');
        $connector = new PublicApiConnector(new ApiOperationRunner($client, $this->lock), $this->catalog, $this->revision, new OpenApiContractValidator());
        $factory = new TypedApiAdapterFactory([$connector], new OpenApiModelSerializer($this->catalog, $this->revision), $this->revision, $this->catalog, dirname(__DIR__));
        $public = $factory->forComponent('public-api');
        self::assertSame(204, $public->GetHealth()->getStatusCode());
        self::assertSame('one', $public->GetProduct('one')->toArray()['id']);
        self::assertCount(2, $requests);
        self::assertStringNotContainsString('Authorization:', implode('\n', $requests[0][1]['headers']));
        self::assertStringNotContainsString('X-Api-Key:', implode('\n', $requests[0][1]['headers']));
        self::assertContains('X-Api-Key: public-only-key', $requests[1][1]['headers']);
        self::assertStringNotContainsString('Authorization:', implode('\n', $requests[1][1]['headers']));
    }

    public function testTypedWritesAreNotRetriedAndCannotOverrideCredentialsOrHost(): void
    {
        $http = new MockHttpClient([new MockResponse('{"access_token":"oauth"}'), new MockResponse('private-error', ['http_code' => 429])]);
        try {
            $this->pim($http)->executeTyped('partialUpdateCatalogNode', ['id' => 'one'], ['json' => ['number' => 'N1']]);
            self::fail('The failed write must propagate.');
        } catch (BluestoneApiException $error) {
            self::assertSame(429, $error->statusCode);
            self::assertStringNotContainsString('private-error', $error->getMessage());
            self::assertSame(2, $http->getRequestsCount());
        }
        foreach (['Authorization' => 'Bearer private-token', 'Host' => 'evil.example', 'x-api-key' => 'private-key'] as $name => $value) {
            $http = new MockHttpClient();
            try {
                $this->pim($http)->executeTyped('getJobStatus', ['taskId' => 'task'], ['headers' => [$name => $value]]);
                self::fail('Header overrides must be rejected.');
            } catch (\InvalidArgumentException) {
                self::assertSame(0, $http->getRequestsCount());
            }
        }
    }

    public function testMediaUploadAcknowledgementRetainsResourceHeadersAndFormContract(): void
    {
        $http = new MockHttpClient([new MockResponse('{"access_token":"oauth"}'), new MockResponse(
            '{"id":"asset-1","actionUrl":"https://upload.example/","parameters":[]}',
            ['http_code' => 201, 'response_headers' => ['Content-Type: application/json', 'Resource-Id: asset-1', 'Location: /media-bank/upload/asset-1']])]);
        $connector = new MediaBankConnector($this->runner($http), $this->catalog, $this->revision, new OpenApiContractValidator());
        $response = $connector->executeTyped('createAsset', [], ['json' => ['fileName' => 'example.png', 'contentType' => 'image/png']]);
        self::assertSame('asset-1', $response->toArray()['id']);
        self::assertSame(['asset-1'], $response->getHeaders()['resource-id']);
        self::assertSame(['/media-bank/upload/asset-1'], $response->getHeaders()['location']);
    }

    public function testPatchRejectsAnUndocumentedSuccessResponse(): void
    {
        $http = new MockHttpClient([new MockResponse('{"access_token":"oauth"}'), new MockResponse('{}', ['http_code' => 200, 'response_headers' => ['Content-Type: application/json']])]);
        $this->expectException(ApiContractException::class);
        $this->pim($http)->executeTyped('partialUpdateCatalogNode', ['id' => 'node'], ['json' => ['number' => 'N1']]);
    }

    public function testMediaAcknowledgementCannotOmitItsUploadId(): void
    {
        $http = new MockHttpClient([new MockResponse('{"access_token":"oauth"}'), new MockResponse('{"actionUrl":"https://upload.example/","parameters":[]}', ['http_code' => 201, 'response_headers' => ['Content-Type: application/json']])]);
        $connector = new MediaBankConnector($this->runner($http), $this->catalog, $this->revision, new OpenApiContractValidator());
        $this->expectExceptionMessage('field id');
        $connector->executeTyped('createAsset', [], ['json' => ['fileName' => 'example.png']]);
    }

    public function testEmptyTaskIdIsRejectedBeforeAnyRequest(): void
    {
        $http = new MockHttpClient();
        try {
            $this->pim($http)->executeTyped('getJobStatus', ['taskId' => '']);
            self::fail('An empty task ID must fail locally.');
        } catch (\InvalidArgumentException) {
            self::assertSame(0, $http->getRequestsCount());
        }
    }

    public function testComposedQueryRequestUsesGeneratedUnionModelsAndPreservesAnEmptyObject(): void
    {
        $requests = [];
        $http = new MockHttpClient(static function (string $method, string $url, array $options) use (&$requests): MockResponse {
            if (str_contains($url, '/op/token')) return new MockResponse('{"access_token":"oauth","expires_in":3600}');
            $requests[] = $options['body'];
            return new MockResponse('{"filter":{},"isOriginalValid":true}', ['response_headers' => ['Content-Type: application/json']]);
        });
        $namespace = 'Youwe\\BluestonePim\\Generated\\R'.$this->revision->current().'\\QueryBuilder\\Model\\';
        $filtersClass = $namespace.'PureProductFilters';
        $queryClass = $namespace.'MainQueryGroup';
        $adapter = $this->factory($http)->forComponent('query-builder');
        self::assertTrue($adapter->GetValidView(new $filtersClass())->toArray()['isOriginalValid']);
        self::assertTrue($adapter->GetValidView((new $queryClass())->setMatchRule('all')->setChildren([]))->toArray()['isOriginalValid']);
        self::assertSame('{}', $requests[0], 'An empty generated object must not become a JSON array.');
        self::assertSame(['matchRule' => 'all', 'children' => []], json_decode($requests[1], true));
        $bodyType = (new \ReflectionMethod($adapter, 'GetValidView'))->getParameters()[0]->getType();
        self::assertInstanceOf(\ReflectionUnionType::class, $bodyType);
        self::assertCount(2, $bodyType->getTypes());
    }

    public function testArrayRequestSerializesEachGeneratedItemThroughThePinnedNormalizer(): void
    {
        $requests = [];
        $http = new MockHttpClient(static function (string $method, string $url, array $options) use (&$requests): MockResponse {
            if (str_contains($url, '/op/token')) return new MockResponse('{"access_token":"oauth","expires_in":3600}');
            $requests[] = [$url, $options['body']];
            return new MockResponse('', ['http_code' => 204]);
        });
        $class = 'Youwe\\BluestonePim\\Generated\\R'.$this->revision->current().'\\Idp\\Model\\RoleSinglePluginPermission';
        $permission = (new $class())->setModule('PRODUCTS')->setActionName('READ');
        $response = $this->factory($http)->forComponent('idp')->UpdatePluginPermissions('role', 'plugin', [$permission]);
        self::assertSame(204, $response->getStatusCode());
        self::assertSame([['module' => 'PRODUCTS', 'actionName' => 'READ']], json_decode($requests[0][1], true));
        self::assertStringContainsString('/idp/', $requests[0][0]);
    }

    public function testNestedEmptyDtoKeepsObjectShapeWhileEmptyListsStayLists(): void
    {
        $requests = [];
        $http = new MockHttpClient(static function (string $method, string $url, array $options) use (&$requests): MockResponse {
            if (str_contains($url, '/op/token')) return new MockResponse('{"access_token":"oauth"}');
            $requests[] = $options['body'];
            return new MockResponse('', ['http_code' => 204]);
        });
        $namespace = 'Youwe\\BluestonePim\\Generated\\R'.$this->revision->current().'\\Pim\\Model\\';
        $requestClass = $namespace.'CategoryMetadataUpdateRequest';
        $nameClass = $namespace.'PropertyUpdateString';
        $request = (new $requestClass())->setName(new $nameClass());
        $this->factory($http)->forComponent('pim')->partialUpdateCatalogNode('node', $request);
        self::assertSame('{"name":{}}', $requests[0]);
    }

    public function testScrollSearchAcceptsBothGeneratedInitiationAndContinuationModels(): void
    {
        $requests = [];
        $http = new MockHttpClient(static function (string $method, string $url, array $options) use (&$requests): MockResponse {
            if (str_contains($url, '/op/token')) return new MockResponse('{"access_token":"oauth","expires_in":3600}');
            $requests[] = json_decode($options['body'], true, 512, JSON_THROW_ON_ERROR);
            return new MockResponse('{"data":[],"scrollId":"next-scroll"}', ['response_headers' => ['Content-Type: application/json']]);
        });
        $namespace = 'Youwe\\BluestonePim\\Generated\\R'.$this->revision->current().'\\QueryBuilder\\Model\\';
        $queryClass = $namespace.'MainQueryGroup';
        $initialClass = $namespace.'ProductsScrollSearchRequestInitiation';
        $continuationClass = $namespace.'ProductsScrollSearchRequestScrolling';
        $pagingClass = $namespace.'ScrollPagingScrolling';
        $adapter = $this->factory($http)->forComponent('query-builder');
        $initial = (new $initialClass())->setQuery((new $queryClass())->setMatchRule('all')->setChildren([]));
        $next = (new $continuationClass())->setPaging((new $pagingClass())->setScrollId('next-scroll'));
        self::assertSame('next-scroll', $adapter->ScrollSearch($initial)->toArray()['scrollId']);
        self::assertSame([], $adapter->ScrollSearch($next)->toArray()['data']);
        self::assertSame(['query' => ['matchRule' => 'all', 'children' => []]], $requests[0]);
        self::assertSame(['paging' => ['scrollId' => 'next-scroll']], $requests[1]);
    }

    public function testFactoryRejectsAStaleGeneratedChecksumBeforeDispatch(): void
    {
        $root = sys_get_temp_dir().'/stale-adapter-'.bin2hex(random_bytes(6));
        $directory = $root.'/generated/R'.$this->revision->current();
        mkdir($directory, 0775, true);
        file_put_contents($directory.'/manifest.json', json_encode(['revision' => $this->revision->current(), 'components' => ['pim' => [
            'operation_count' => 224, 'openapi_sha256' => str_repeat('0', 64),
        ]]], JSON_THROW_ON_ERROR));
        $http = new MockHttpClient();
        try {
            $factory = new TypedApiAdapterFactory([$this->pim($http)], new OpenApiModelSerializer($this->catalog, $this->revision), $this->revision, $this->catalog, $root);
            $factory->forComponent('pim');
            self::fail('A stale generated contract set must not be used.');
        } catch (\RuntimeException $error) {
            self::assertStringContainsString('stale', $error->getMessage());
            self::assertSame(0, $http->getRequestsCount());
        } finally {
            unlink($directory.'/manifest.json'); rmdir($directory); rmdir($root.'/generated'); rmdir($root);
        }
    }

    #[DataProvider('invalidReadResponses')]
    public function testPublicAndBulkReadsRejectInvalidSuccessfulResponses(string $component, string $operation, array $path, string $body): void
    {
        $http = new MockHttpClient(static fn (string $method, string $url): MockResponse => str_contains($url, '/op/token')
            ? new MockResponse('{"access_token":"oauth"}') : new MockResponse($body, ['response_headers' => ['Content-Type: application/json']]));
        $client = new BluestoneClient($http, 'https://api.test.bluestonepim.com', 'https://idp.test.bluestonepim.com/op/token', 'id', 'secret', 'public-key');
        $class = $component === 'public-api' ? PublicApiConnector::class : BulkOperationsConnector::class;
        $connector = new $class(new ApiOperationRunner($client, $this->lock), $this->catalog, $this->revision, new OpenApiContractValidator());
        try {
            $connector->executeTyped($operation, $path);
            self::fail('An undocumented status or enum must fail response validation.');
        } catch (ApiContractException $error) {
            self::assertStringContainsString($operation, $error->getMessage());
            self::assertStringNotContainsString('PRIVATE_UNSUPPORTED', $error->getMessage());
        }
    }

    public static function invalidReadResponses(): iterable
    {
        yield ['public-api', 'GetHealth', [], '{}'];
        yield ['public-api', 'GetProduct', ['id' => 'one'], '{"id":"one","type":"PRIVATE_UNSUPPORTED","name":"Name","number":"N1"}'];
        yield ['bulk-operations', 'getJobStatus', ['jobId' => 'job'], '{"status":"PRIVATE_UNSUPPORTED"}'];
    }

    public function testPublicAndBulkRequiredIdsFailBeforeDispatch(): void
    {
        foreach ([[PublicApiConnector::class, 'GetProduct', 'id'], [BulkOperationsConnector::class, 'getJobStatus', 'jobId']] as [$class, $operation, $name]) {
            $http = new MockHttpClient();
            $connector = new $class($this->runner($http), $this->catalog, $this->revision, new OpenApiContractValidator());
            try {
                $connector->executeTyped($operation, [$name => '']);
                self::fail('A required resource ID must fail locally.');
            } catch (\InvalidArgumentException) {
                self::assertSame(0, $http->getRequestsCount());
            }
        }
    }

    private function runner(MockHttpClient $http): ApiOperationRunner
    {
        return new ApiOperationRunner(new BluestoneClient($http, 'https://api.test.bluestonepim.com', 'https://idp.test.bluestonepim.com/op/token', 'client', 'secret'), $this->lock);
    }

    private function pim(MockHttpClient $http): PimConnector
    {
        return new PimConnector($this->runner($http), $this->catalog, $this->revision, new OpenApiContractValidator());
    }

    private function factory(MockHttpClient $http): TypedApiAdapterFactory
    {
        $runner = $this->runner($http);
        return new TypedApiAdapterFactory([new PimConnector($runner, $this->catalog, $this->revision, new OpenApiContractValidator()), new BulkOperationsConnector($runner, $this->catalog, $this->revision, new OpenApiContractValidator()),
            new QueryBuilderConnector($runner, $this->catalog, $this->revision, new OpenApiContractValidator()), new IdpConnector($runner, $this->catalog, $this->revision, new OpenApiContractValidator())],
            new OpenApiModelSerializer($this->catalog, $this->revision), $this->revision, $this->catalog, dirname(__DIR__));
    }
}
