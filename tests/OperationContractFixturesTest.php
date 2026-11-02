<?php

declare(strict_types=1);

namespace App\Tests;

use Youwe\BluestonePim\Api\ApiContractException;
use Youwe\BluestonePim\Api\ApiRevisionContext;
use Youwe\BluestonePim\Api\BluestoneApiException;
use Youwe\BluestonePim\Api\BluestoneClient;
use Youwe\BluestonePim\Api\Connector\AbstractConnector;
use Youwe\BluestonePim\Api\OpenApiContractValidator;
use Youwe\BluestonePim\Api\OpenApiModelSerializer;
use Youwe\BluestonePim\Api\OperationCatalog;
use Youwe\BluestonePim\Api\TypedApiAdapterFactory;
use Youwe\BluestonePim\Database\ConnectionFactory;
use Youwe\BluestonePim\Migration\MigrationLock;
use Youwe\BluestonePim\Service\ApiOperationRunner;
use App\Tests\Support\ContractFixtures;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class OperationContractFixturesTest extends TestCase
{
    private MigrationLock $lock;
    private OperationCatalog $catalog;
    private ApiRevisionContext $revision;
    private OpenApiModelSerializer $models;
    private array $requests = [];

    protected function setUp(): void
    {
        $this->lock = new MigrationLock(ConnectionFactory::create('sqlite:///:memory:'));
        $this->lock->acquire();
        $this->catalog = new OperationCatalog(dirname(__DIR__).'/resources/bluestone');
        $this->revision = new ApiRevisionContext();
        $this->models = new OpenApiModelSerializer($this->catalog, $this->revision);
    }

    protected function tearDown(): void
    {
        $this->lock->release();
    }

    public static function validCases(): iterable { return ContractFixtures::cases('valid'); }
    public static function invalidRequests(): iterable { return ContractFixtures::cases('invalid_requests'); }
    public static function invalidResponses(): iterable { return ContractFixtures::cases('invalid_responses'); }
    public static function remoteErrors(): iterable { return ContractFixtures::cases('remote_errors'); }

    #[DataProvider('validCases')]
    public function testValidNamedOperationRequestAndResponse(\stdClass $document, string $operationId): void
    {
        $operation = $document->operations->{$operationId};
        $request = ContractFixtures::materialize($operation->request, $document);
        $expected = ContractFixtures::materialize($operation->response, $document);
        [$connector, $factory] = $this->environment($document, $expected, $http);
        $response = $this->named($factory, $document, $operationId, $request);
        self::assertSame($expected->status, $response->getStatusCode());
        self::assertCount(1, $this->requests);
        self::assertSame([$operation->method, 'https://api.test.bluestonepim.com'.$request->expected_path], array_slice($this->requests[0], 0, 2));
        if (property_exists($request, 'json')) self::assertEquals($request->json, json_decode($this->requests[0][2]['body'], false, 512, JSON_THROW_ON_ERROR));
        foreach ($request->headers ?? [] as $name => $value) self::assertContains($name.': '.(is_bool($value) ? ($value ? '1' : '') : $value), $this->requests[0][2]['headers']);
        if (property_exists($expected, 'json')) self::assertEquals($expected->json, json_decode($response->getContent(), false, 512, JSON_THROW_ON_ERROR));
        else self::assertSame($expected->body ?? '', $response->getContent());
        foreach ($expected->headers ?? [] as $name => $value) self::assertSame([(string) $value], $response->getHeaders()[strtolower($name)]);
    }

    #[DataProvider('invalidRequests')]
    public function testInvalidRequestFailsBeforeAuthenticationOrTenantDispatch(\stdClass $document, string $operationId, \stdClass $change): void
    {
        self::assertNotEmpty($change->reason);
        $operation = $document->operations->{$operationId};
        $request = ContractFixtures::mutate(ContractFixtures::materialize($operation->request, $document), $change);
        [$connector] = $this->environment($document, ContractFixtures::materialize($operation->response, $document), $http);
        try {
            $connector->executeTyped($operationId, (array) ($request->path_parameters ?? []), $this->options($request));
            self::fail('The documented constraint must reject this request: '.$change->reason);
        } catch (ApiContractException|\InvalidArgumentException $error) {
            self::assertStringNotContainsString('PRIVATE_FIXTURE_VALUE', $error->getMessage());
            self::assertSame(0, $http->getRequestsCount());
        }
    }

    #[DataProvider('invalidResponses')]
    public function testInvalidSuccessfulResponseFailsItsOperationContract(\stdClass $document, string $operationId, \stdClass $change): void
    {
        self::assertNotEmpty($change->reason);
        $operation = $document->operations->{$operationId};
        $response = ContractFixtures::mutate(ContractFixtures::materialize($operation->response, $document), $change);
        [, $factory] = $this->environment($document, $response, $http);
        try {
            $this->named($factory, $document, $operationId, ContractFixtures::materialize($operation->request, $document));
            self::fail('The documented response constraint must fail: '.$change->reason);
        } catch (ApiContractException $error) {
            self::assertStringStartsWith('Response does not match', $error->getMessage());
            self::assertStringNotContainsString('PRIVATE_FIXTURE_VALUE', $error->getMessage());
            self::assertCount(1, $this->requests, 'Response failure must follow the operation request.');
        }
    }

    #[DataProvider('remoteErrors')]
    public function testDocumentedHttpFailureIsSanitizedAndNeverRetried(\stdClass $document, string $operationId, int $status): void
    {
        $operation = $document->operations->{$operationId};
        [, $factory] = $this->environment($document, (object) ['status' => $status, 'json' => (object) ['error' => 'PRIVATE_FIXTURE_VALUE']], $http);
        try {
            $this->named($factory, $document, $operationId, ContractFixtures::materialize($operation->request, $document));
            self::fail('A documented HTTP failure must fail the call.');
        } catch (BluestoneApiException $error) {
            self::assertSame($status, $error->statusCode);
            self::assertStringNotContainsString('PRIVATE_FIXTURE_VALUE', $error->getMessage());
            self::assertCount(1, $this->requests);
        }
    }

    public function testFixtureDocumentsReconcileTheirDeclaredComponentsAndConstraints(): void
    {
        $documents = 0;
        $evidence = json_decode(file_get_contents(dirname(__DIR__).'/resources/bluestone/contract-evidence.json'), true, 512, JSON_THROW_ON_ERROR)['operations'];
        $evidenceByOperation = [];
        foreach ($evidence as $record) $evidenceByOperation[$record['component'].':'.$record['operation_id'].':'.$record['revision']] = $record;
        foreach (ContractFixtures::documents() as $document) {
            ++$documents;
            $fixturePath = dirname(__DIR__).'/'.$document->fixture_file;
            $fixtureSha256 = hash_file('sha256', $fixturePath);
            $specPath = $this->catalog->openApiPath($document->component, $document->revision);
            self::assertSame(hash_file('sha256', $specPath), $document->openapi_sha256);
            $routes = $this->catalog->component($document->component, $document->revision)['operations'];
            $specification = json_decode(file_get_contents($specPath), true, 512, JSON_THROW_ON_ERROR);
            $fixtureIds = array_keys((array) $document->operations);
            if ($document->complete_component ?? false) {
                $expected = array_keys($routes); sort($expected); sort($fixtureIds);
                self::assertSame($expected, $fixtureIds);
            }
            foreach ($document->operations as $id => $operation) {
                self::assertArrayHasKey($id, $routes);
                self::assertSame($routes[$id]['method'], $operation->method);
                self::assertNotEmpty($operation->invalid_responses);
                $record = $evidenceByOperation[$document->component.':'.$id.':'.$document->revision] ?? null;
                self::assertNotNull($record, 'Every fixture operation needs a revision-specific coverage evidence record.');
                self::assertSame('verified', $record['fixtures']['status'] ?? null);
                self::assertSame($document->fixture_file, $record['fixtures']['fixture_document'] ?? null);
                self::assertSame($fixtureSha256, $record['fixtures']['fixture_sha256'] ?? null);
                if (($operation->invalid_requests ?? []) === []) {
                    self::assertNotEmpty($operation->invalid_request_not_applicable ?? '');
                    self::assertSame([], $routes[$id]['parameters']);
                    self::assertSame([], $routes[$id]['content_types']);
                }
                $documentedErrors = [];
                foreach ($specification['paths'] as $item) foreach ($item as $specOperation) {
                    if (is_array($specOperation) && ($specOperation['operationId'] ?? null) === $id) {
                        foreach (array_keys($specOperation['responses']) as $status) if (is_numeric($status) && (int) $status >= 400) $documentedErrors[] = (int) $status;
                    }
                }
                $fixtureErrors = $operation->remote_errors ?? []; sort($documentedErrors); sort($fixtureErrors);
                self::assertSame($documentedErrors, $fixtureErrors, 'Every documented HTTP failure needs an explicit fixture.');
            }
        }
        self::assertGreaterThan(0, $documents);
    }

    private function environment(\stdClass $document, \stdClass $reply, ?MockHttpClient &$http): array
    {
        $this->revision->select($document->revision);
        $http = new MockHttpClient(function (string $method, string $url, array $options) use ($reply): MockResponse {
            if (str_contains($url, '/op/token')) return new MockResponse('{"access_token":"fixture-token","expires_in":3600}');
            $this->requests[] = [$method, $url, $options];
            $headers = [];
            foreach ($reply->headers ?? [] as $name => $value) $headers[] = $name.': '.$value;
            $body = $reply->body ?? '';
            if (property_exists($reply, 'json')) { $body = json_encode($reply->json, JSON_THROW_ON_ERROR); $headers[] = 'Content-Type: application/json'; }
            return new MockResponse($body, ['http_code' => $reply->status, 'response_headers' => $headers]);
        });
        $client = new BluestoneClient($http, 'https://api.test.bluestonepim.com', 'https://idp.test.bluestonepim.com/op/token', 'fixture-client', 'fixture-secret', 'fixture-public-key');
        $name = str_replace(' ', '', ucwords(str_replace('-', ' ', $document->component)));
        $class = 'Youwe\\BluestonePim\\Api\\Connector\\'.$name.'Connector';
        $connector = new $class(new ApiOperationRunner($client, $this->lock), $this->catalog, $this->revision, new OpenApiContractValidator());
        $factory = new TypedApiAdapterFactory([$connector], $this->models, $this->revision, $this->catalog, dirname(__DIR__));
        return [$connector, $factory];
    }

    private function named(TypedApiAdapterFactory $factory, \stdClass $document, string $operationId, \stdClass $request): ResponseInterface
    {
        $adapter = $factory->forComponent($document->component);
        $method = new \ReflectionMethod($adapter, $operationId);
        $arguments = [];
        foreach ($method->getParameters() as $parameter) {
            $name = $parameter->getName();
            if ($name === 'queryParameters') $arguments[] = (array) ($request->query ?? []);
            elseif ($name === 'headerParameters') $arguments[] = (array) ($request->headers ?? []);
            elseif ($name === 'requestBody') {
                $body = $request->json ?? $request->body ?? null;
                $types = $parameter->getType() instanceof \ReflectionUnionType ? $parameter->getType()->getTypes() : [$parameter->getType()];
                $models = array_values(array_filter($types, static fn ($type): bool => $type instanceof \ReflectionNamedType && str_contains($type->getName(), '\\Model\\')));
                if ($models !== [] && $body !== null) {
                    $selected = $document->operations->{$operationId}->request_model ?? null;
                    $model = count($models) === 1 ? $models[0]->getName() : null;
                    foreach ($models as $candidate) if ($selected !== null && str_ends_with($candidate->getName(), '\\'.$selected)) $model = $candidate->getName();
                    if ($model === null) throw new \RuntimeException('A composed fixture request must select its generated model.');
                    $body = $this->models->fromArray(json_decode(json_encode($body, JSON_THROW_ON_ERROR), true, 512, JSON_THROW_ON_ERROR), $model, $document->component, $document->revision);
                }
                $arguments[] = $body;
            } else {
                $paths = (array) ($request->path_parameters ?? []);
                $found = false;
                foreach ($paths as $key => $value) if (preg_replace('/[^A-Za-z0-9_]/', '_', $key) === $name) { $arguments[] = $value; $found = true; break; }
                if (!$found) throw new \RuntimeException('Fixture omitted generated method path argument '.$name.'.');
            }
        }
        return $method->invokeArgs($adapter, $arguments);
    }

    private function options(\stdClass $request): array
    {
        $options = [];
        foreach (['query', 'headers'] as $name) if (property_exists($request, $name)) $options[$name] = (array) $request->{$name};
        foreach (['json', 'body'] as $name) if (property_exists($request, $name)) $options[$name] = $request->{$name};
        return $options;
    }
}
