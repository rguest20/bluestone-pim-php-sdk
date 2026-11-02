<?php

declare(strict_types=1);

namespace App\Tests;

use App\Api\ApiRevisionContext;
use App\Api\BluestoneClient;
use App\Api\Connector\PimConnector;
use App\Api\OpenApiContractValidator;
use App\Api\OperationCatalog;
use App\Database\ConnectionFactory;
use App\Migration\MigrationContext;
use App\Migration\MigrationLock;
use App\Migration\MigrationStorage;
use App\Service\AttributeDefinitionMutationRunner;
use App\Service\ApiOperationRunner;
use App\Service\CatalogRunner;
use App\Service\ProductMutationRunner;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

final class MutationServicesTest extends TestCase
{
    private MigrationLock $lock;
    private MigrationStorage $storage;
    private OperationCatalog $catalog;
    private ApiRevisionContext $revision;
    private array $requests = [];

    protected function setUp(): void
    {
        $connection = ConnectionFactory::create('sqlite:///:memory:');
        $this->lock = new MigrationLock($connection);
        $this->lock->acquire();
        $this->storage = new MigrationStorage($connection, 'tenant-test', 'https://api.test.bluestonepim.com');
        $this->storage->initialize();
        $this->catalog = new OperationCatalog(dirname(__DIR__).'/resources/bluestone');
        $this->revision = new ApiRevisionContext();
        $this->revision->select($this->catalog->activeRevision());
    }

    protected function tearDown(): void
    {
        $this->lock->release();
    }

    public function testProductCreateUsesStableNumberAndPersistsResourceIdForRetry(): void
    {
        $runner = $this->pimRunner(201, ['Resource-Id: product-id-1', 'Location: https://api.test.bluestonepim.com/products/product-id-1']);
        $migration = $this->migration('20261031000002');
        $request = ['name' => 'Fixture product', 'number' => 'FIXTURE-P-1'];
        $id = $runner->create($migration, 'create-fixture-product', 'FIXTURE-P-1', $request);
        self::assertSame($id, $runner->create($migration, 'create-fixture-product', 'FIXTURE-P-1', $request));
        self::assertSame('product-id-1', $id);
        self::assertCount(1, $this->requests);
        self::assertSame('POST', $this->requests[0]['method']);
        self::assertStringContainsString('/pim/products?validation=NUMBER', $this->requests[0]['url']);
        self::assertSame($request, json_decode($this->requests[0]['options']['body'], true, 512, JSON_THROW_ON_ERROR));
    }

    public function testAttributeDefinitionCreatePersistsItsRemoteId(): void
    {
        $connector = $this->connector(201, ['Resource-Id: definition-id-1']);
        $runner = new AttributeDefinitionMutationRunner($connector);
        $request = ['name' => 'Fixture attribute', 'number' => 'FIXTURE-A-1'];
        $migration = $this->migration('20261031000003');
        $id = $runner->create($migration, 'create-fixture-attribute', 'FIXTURE-A-1', $request);
        self::assertSame($id, $runner->create($migration, 'create-fixture-attribute', 'FIXTURE-A-1', $request));
        self::assertSame('definition-id-1', $id);
        self::assertCount(1, $this->requests);
        self::assertStringEndsWith('/definitions', $this->requests[0]['url']);
    }

    public function testCatalogUpdatePersistsStableNodeIdAndSkipsCompletedWrite(): void
    {
        $connector = $this->connector(204);
        $runner = new CatalogRunner($connector);
        $migration = $this->migration('20261031000004');
        $details = ['name' => ['value' => 'Fixture category']];
        $id = $runner->updateDetailsOnce($migration, 'update-fixture-category', 'node-id-1', $details);
        self::assertSame($id, $runner->updateDetailsOnce($migration, 'update-fixture-category', 'node-id-1', $details));
        self::assertSame('node-id-1', $id);
        self::assertCount(1, $this->requests);
        self::assertSame('PATCH', $this->requests[0]['method']);
        self::assertStringEndsWith('/catalogs/nodes/node-id-1', $this->requests[0]['url']);
    }

    private function migration(string $version): MigrationContext
    {
        return new MigrationContext($version, $this->storage, $this->lock, $this->revision);
    }

    private function pimRunner(int $status, array $headers = []): ProductMutationRunner
    {
        return new ProductMutationRunner($this->connector($status, $headers));
    }

    private function connector(int $status, array $headers = []): PimConnector
    {
        $this->requests = [];
        $http = new MockHttpClient(function (string $method, string $url, array $options) use ($status, $headers): MockResponse {
            if (str_contains($url, '/op/token')) return new MockResponse('{"access_token":"mutation-test-token"}');
            $this->requests[] = ['method' => $method, 'url' => $url, 'options' => $options];
            return new MockResponse('', ['http_code' => $status, 'response_headers' => $headers]);
        });
        $client = new BluestoneClient($http, 'https://api.test.bluestonepim.com', 'https://idp.test.bluestonepim.com/op/token', 'client', 'secret');
        $connector = new PimConnector(new ApiOperationRunner($client, $this->lock), $this->catalog, $this->revision, new OpenApiContractValidator());
        return $connector;
    }
}
