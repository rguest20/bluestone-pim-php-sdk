<?php

declare(strict_types=1);

namespace App\Tests;

use App\Api\BluestoneClient;
use App\Api\Connector\AbstractConnector;
use App\Api\Connector\BulkOperationsConnector;
use App\Api\Connector\CompletenessScoreConnector;
use App\Api\Connector\ExternalNotificationsConnector;
use App\Api\Connector\GlobalSettingsConnector;
use App\Api\Connector\HistoryConnector;
use App\Api\Connector\IdpConnector;
use App\Api\Connector\LabelsConnector;
use App\Api\Connector\MediaBankConnector;
use App\Api\Connector\MetadataConnector;
use App\Api\Connector\PimConnector;
use App\Api\Connector\PublicApiConnector;
use App\Api\Connector\PublicApiSyncConnector;
use App\Api\Connector\QueryBuilderConnector;
use App\Api\Connector\SearchConnector;
use App\Api\Connector\TasksConnector;
use App\Api\Connector\UiSettingsConnector;
use App\Api\OperationCatalog;
use App\Database\ConnectionFactory;
use App\Migration\MigrationLock;
use App\Service\ApiOperationRunner;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

final class ApiConnectorsTest extends TestCase
{
    private MigrationLock $lock;
    private OperationCatalog $catalog;

    protected function setUp(): void
    {
        $this->lock = new MigrationLock(ConnectionFactory::create('sqlite:///:memory:'));
        $this->lock->acquire();
        $this->catalog = new OperationCatalog(dirname(__DIR__).'/resources/bluestone');
    }

    protected function tearDown(): void
    {
        $this->lock->release();
    }

    /** @param class-string<AbstractConnector> $class */
    #[DataProvider('components')]
    public function testEachConnectorDispatchesItsDocumentedOperationToTheConfiguredEnvironment(string $class, string $operation, array $parameters, string $method, string $path): void
    {
        $requests = [];
        $public = $class === PublicApiConnector::class;
        $http = new MockHttpClient(static function (string $verb, string $url, array $options) use (&$requests, $public): MockResponse {
            $requests[] = [$verb, $url, $options];

            return !$public && count($requests) === 1
                ? new MockResponse('{"access_token":"oauth-token","expires_in":3600}')
                : new MockResponse('{"ok":true}');
        });
        // Public API must work independently of Management API credentials.
        $client = new BluestoneClient($http, 'https://api.test.bluestonepim.com', 'https://idp.test.bluestonepim.com/op/token',
            $public ? '' : 'client', $public ? '' : 'secret', 'public-key');
        $connector = new $class(new ApiOperationRunner($client, $this->lock), $this->catalog);
        $response = $connector->execute($operation, $parameters, ['json' => ['example' => 'payload']]);

        self::assertSame(['ok' => true], $response->toArray());
        self::assertCount($public ? 1 : 2, $requests);
        $request = $requests[array_key_last($requests)];
        self::assertSame([$method, 'https://api.test.bluestonepim.com'.$path], array_slice($request, 0, 2));
        self::assertSame(['example' => 'payload'], json_decode($request[2]['body'], true));
        self::assertContains($public ? 'X-Api-Key: public-key' : 'Authorization: Bearer oauth-token', $request[2]['headers']);
        self::assertArrayHasKey($operation, $connector->operations());
    }

    public static function components(): iterable
    {
        yield 'PIM' => [PimConnector::class, 'partialUpdateCatalogNode', ['id' => 'node'], 'PATCH', '/pim/catalogs/nodes/node'];
        yield 'Media bank' => [MediaBankConnector::class, 'createAsset', [], 'POST', '/media-bank/upload'];
        yield 'Search' => [SearchConnector::class, 'productsSearch', [], 'POST', '/search/products/search'];
        yield 'Labels' => [LabelsConnector::class, 'update', ['id' => 'label'], 'PUT', '/labels/labels/label'];
        yield 'Global settings' => [GlobalSettingsConnector::class, 'get', ['id' => 'en'], 'GET', '/global-settings/context/en'];
        yield 'History' => [HistoryConnector::class, 'list_2', ['entityType' => 'PRODUCT', 'id' => 'product'], 'GET', '/history/history/PRODUCT/product'];
        yield 'Tasks' => [TasksConnector::class, 'addTaskComment', ['taskId' => 'task'], 'POST', '/tasks/comments/task'];
        yield 'Query builder' => [QueryBuilderConnector::class, 'CreatePersistedProductQuery', [], 'POST', '/query-builder/products/persistedQueries'];
        yield 'Public API sync' => [PublicApiSyncConnector::class, 'closeSession', ['id' => 'session'], 'PUT', '/papi-sync/session/session/done'];
        yield 'Public API' => [PublicApiConnector::class, 'FindProducts', [], 'POST', '/v1/products/list'];
        yield 'IDP' => [IdpConnector::class, 'GetAllAPIClients', [], 'GET', '/idp/clients'];
        yield 'External notifications' => [ExternalNotificationsConnector::class, 'getEmailMessage', ['messageId' => 'message'], 'GET', '/notification-external/messages/email/message'];
        yield 'Completeness score' => [CompletenessScoreConnector::class, 'update', ['requirementId' => 'requirement'], 'PUT', '/completeness-score/requirements/requirement'];
        yield 'Metadata' => [MetadataConnector::class, 'upsertMetadata', ['providerId' => 'provider'], 'POST', '/metadata/metadata/provider'];
        yield 'UI settings' => [UiSettingsConnector::class, 'GetColumnSetupByIdOfAnyUser', ['id' => 'setup'], 'GET', '/ui-settings/columnsSetups/all/setup'];
        yield 'Bulk operations' => [BulkOperationsConnector::class, 'upsertAttributesByNumbers', [], 'POST', '/bulk-operations/products/attributes/update/by-numbers'];
    }

    public function testPathValuesAreEncodedWithoutChangingTheHostOrPathStructure(): void
    {
        $http = new MockHttpClient([
            new MockResponse('{"access_token":"token"}'), new MockResponse('{}'),
        ]);
        $response = $this->connector(PimConnector::class, $http)->execute('getNode', ['id' => 'a/b ?#']);
        self::assertSame('https://api.test.bluestonepim.com/pim/catalogs/nodes/a%2Fb%20%3F%23', $response->getInfo('url'));
    }

    public function testQueryArraysRepeatKeysAndBooleansUseOpenApiValues(): void
    {
        $http = new MockHttpClient([
            new MockResponse('{"access_token":"token"}'), new MockResponse('{}'),
        ]);
        $response = $this->connector(MediaBankConnector::class, $http)->execute('removeListOfAssets', [], [
            'query' => ['ids' => ['first/id', 'second id'], 'force' => false, 'unused' => null],
        ]);
        self::assertStringEndsWith('?ids=first%2Fid&ids=second%20id&force=false', $response->getInfo('url'));
    }

    public function testUnknownOperationsAndMissingRequiredInputsNeverSendRequests(): void
    {
        $http = new MockHttpClient();
        foreach ([
            [PimConnector::class, 'inventedOperation', [], []],
            [PimConnector::class, 'getNode', [], []],
            [PimConnector::class, 'getNode', ['id' => '..'], []],
            [PimConnector::class, 'getNode', ['id' => 'node', 'typo' => 'value'], []],
            [PimConnector::class, 'partialUpdateCatalogNode', ['id' => 'node'], []],
            [MediaBankConnector::class, 'removeListOfAssets', [], []],
        ] as [$class, $operation, $parameters, $options]) {
            try {
                $this->connector($class, $http)->execute($operation, $parameters, $options);
                self::fail('Expected invalid inputs to be rejected.');
            } catch (\InvalidArgumentException) {
                self::assertSame(0, $http->getRequestsCount());
            }
        }
    }

    public function testPublicHealthRequiresNeitherApiKeyNorOauthCredentials(): void
    {
        $requests = [];
        $http = new MockHttpClient(static function (string $method, string $url, array $options) use (&$requests): MockResponse {
            $requests[] = $options;

            return new MockResponse('{}');
        });
        $client = new BluestoneClient($http, 'https://api.test.bluestonepim.com', '', '', '');
        (new PublicApiConnector(new ApiOperationRunner($client, $this->lock), $this->catalog))->execute('GetHealth');
        self::assertCount(1, $requests);
        self::assertStringNotContainsString('Authorization:', implode("\n", $requests[0]['headers']));
        self::assertStringNotContainsString('X-Api-Key:', implode("\n", $requests[0]['headers']));
    }

    public function testSecuredPublicOperationsRequireTheirOwnKey(): void
    {
        $http = new MockHttpClient();
        $this->expectExceptionMessage('BLUESTONE_PUBLIC_API_KEY');
        $this->connector(PublicApiConnector::class, $http)->execute('GetProduct', ['id' => 'product']);
    }

    public function testRawMediaBodiesAndContentTypesArePreserved(): void
    {
        $requests = [];
        $http = new MockHttpClient(static function (string $method, string $url, array $options) use (&$requests): MockResponse {
            $requests[] = $options;

            return count($requests) === 1 ? new MockResponse('{"access_token":"token"}') : new MockResponse('{}');
        });
        $this->connector(MediaBankConnector::class, $http)->execute('createAsset', [], [
            'body' => 'example-raw-body', 'headers' => ['Content-Type' => 'application/octet-stream'],
        ]);
        self::assertSame('example-raw-body', $requests[1]['body']);
        self::assertContains('Content-Type: application/octet-stream', $requests[1]['headers']);
    }

    /** @param class-string<AbstractConnector> $class */
    private function connector(string $class, MockHttpClient $http): AbstractConnector
    {
        $client = new BluestoneClient($http, 'https://api.test.bluestonepim.com', 'https://idp.test.bluestonepim.com/op/token', 'client', 'secret');

        return new $class(new ApiOperationRunner($client, $this->lock), $this->catalog);
    }
}
