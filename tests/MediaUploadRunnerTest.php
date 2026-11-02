<?php

declare(strict_types=1);

namespace App\Tests;

use App\Api\ApiRevisionContext;
use App\Api\BluestoneClient;
use App\Api\Connector\MediaBankConnector;
use App\Api\OpenApiContractValidator;
use App\Api\OperationCatalog;
use App\Database\ConnectionFactory;
use App\Migration\MigrationContext;
use App\Migration\MigrationLock;
use App\Migration\MigrationStorage;
use App\Migration\MutationInDoubtException;
use App\Service\ApiOperationRunner;
use App\Service\MediaUploadRunner;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

final class MediaUploadRunnerTest extends TestCase
{
    private MigrationLock $lock;
    private MigrationStorage $storage;
    private MigrationContext $migration;
    private OperationCatalog $catalog;
    private ApiRevisionContext $revision;
    private string $file;
    private array $apiRequests = [];
    private array $transferRequests = [];

    protected function setUp(): void
    {
        $connection = ConnectionFactory::create('sqlite:///:memory:');
        $this->lock = new MigrationLock($connection);
        $this->lock->acquire();
        $this->storage = new MigrationStorage($connection, 'tenant-test', 'https://api.test.bluestonepim.com');
        $this->storage->initialize();
        $this->revision = new ApiRevisionContext();
        $this->catalog = new OperationCatalog(dirname(__DIR__).'/resources/bluestone');
        $this->revision->select($this->catalog->activeRevision());
        $this->migration = new MigrationContext('20261031000009', $this->storage, $this->lock, $this->revision);
        $temporaryFile = tempnam(sys_get_temp_dir(), 'bluestone-media-');
        $this->file = $temporaryFile.'.png';
        rename($temporaryFile, $this->file);
        file_put_contents($this->file, 'fixture image bytes');
    }

    protected function tearDown(): void
    {
        @unlink($this->file);
        $this->lock->release();
    }

    public function testUploadKeepsCredentialsOnApiHostAndEncryptsResumableTransferData(): void
    {
        $runner = $this->runner([204]);

        self::assertSame('asset-id-1', $runner->upload($this->migration, 'fixture-image', $this->file, 'image/png'));
        self::assertSame('asset-id-1', $runner->upload($this->migration, 'fixture-image', $this->file, 'image/png'));
        self::assertCount(2, $this->apiRequests);
        self::assertSame('POST', $this->apiRequests[0]['method']);
        self::assertStringEndsWith('/media-bank/upload', $this->apiRequests[0]['url']);
        self::assertSame('POST', $this->apiRequests[1]['method']);
        self::assertStringEndsWith('/media-bank/upload/asset-id-1/done', $this->apiRequests[1]['url']);
        self::assertCount(1, $this->transferRequests);
        self::assertSame('https://uploads.example.test/signed-form', $this->transferRequests[0]['url']);
        self::assertArrayNotHasKey('auth_bearer', $this->transferRequests[0]['options']);
        self::assertArrayNotHasKey('Authorization', $this->transferRequests[0]['options']['headers'] ?? []);
        self::assertIsCallable($this->transferRequests[0]['options']['body']);
        self::assertIsCallable($this->transferRequests[0]['options']['on_progress']);
        self::assertStringContainsString('multipart/form-data', strtolower(implode(' ', $this->transferRequests[0]['options']['headers'] ?? [])));

        $stored = (string) $this->storageConnection()->fetchOne('SELECT result FROM pim_migration_mutation WHERE version = ? AND name = ?', ['20261031000009', 'fixture-image:submit']);
        self::assertStringNotContainsString('uploads.example.test', $stored);
        self::assertStringNotContainsString('fixture-policy', $stored);
        self::assertStringContainsString('asset-id-1', $stored);
    }

    public function testFailedTransferRetriesSameSubmissionAndDoesNotRepeatCompletedApiCreation(): void
    {
        $runner = $this->runner([500, 204]);
        try {
            $runner->upload($this->migration, 'fixture-image', $this->file);
            self::fail('The injected transfer failure should be surfaced.');
        } catch (\RuntimeException $error) {
            self::assertStringNotContainsString('signed-form', $error->getMessage());
        }

        self::assertSame('asset-id-1', $runner->upload($this->migration, 'fixture-image', $this->file));
        self::assertCount(1, array_filter($this->apiRequests, static fn (array $request): bool => str_ends_with($request['url'], '/media-bank/upload')));
        self::assertCount(2, $this->transferRequests);
        self::assertCount(1, array_filter($this->apiRequests, static fn (array $request): bool => str_ends_with($request['url'], '/media-bank/upload/asset-id-1/done')));
    }

    public function testUnlistedTransferDestinationIsRejectedBeforeExternalRequest(): void
    {
        $runner = $this->runner([204], 'evil.example.test');
        try {
            $runner->upload($this->migration, 'fixture-image', $this->file);
            self::fail('An unlisted destination must be rejected.');
        } catch (\UnexpectedValueException $error) {
            self::assertStringNotContainsString('signed-form', $error->getMessage());
        }
        self::assertSame([], $this->transferRequests);
    }

    public function testRejectedSignedDestinationReportsPossibleExpiryWithoutExposingItsUrl(): void
    {
        $runner = $this->runner([403]);
        try {
            $runner->upload($this->migration, 'fixture-image', $this->file);
            self::fail('A rejected signed destination must stop before completion.');
        } catch (\RuntimeException $error) {
            self::assertStringContainsString('may have expired', $error->getMessage());
            self::assertStringNotContainsString('signed-form', $error->getMessage());
        }
        self::assertCount(1, $this->apiRequests);
        self::assertStringEndsWith('/media-bank/upload', $this->apiRequests[0]['url']);
    }

    public function testContentTypeMismatchStopsBeforeExternalTransfer(): void
    {
        $runner = $this->runner([204], 'uploads.example.test', 'image/jpeg');
        try {
            $runner->upload($this->migration, 'fixture-image', $this->file, 'image/png');
            self::fail('A content type mismatch must stop before upload.');
        } catch (\UnexpectedValueException $error) {
            self::assertStringContainsString('does not match', $error->getMessage());
        }
        self::assertSame([], $this->transferRequests);
    }

    public function testUncertainCompletionDoesNotRepeatTheSuccessfulTransfer(): void
    {
        $runner = $this->runner([204], 'uploads.example.test', null, 500);
        try {
            $runner->upload($this->migration, 'fixture-image', $this->file);
            self::fail('An uncertain completion outcome must require reconciliation.');
        } catch (MutationInDoubtException) {
        }
        try {
            $runner->upload($this->migration, 'fixture-image', $this->file);
            self::fail('An uncertain completion must not be submitted automatically again.');
        } catch (MutationInDoubtException) {
        }
        self::assertCount(1, $this->transferRequests);
        self::assertCount(2, $this->apiRequests);
        self::assertStringEndsWith('/media-bank/upload/asset-id-1/done', $this->apiRequests[1]['url']);
    }

    private function runner(array $transferStatuses, string $uploadHost = 'uploads.example.test', ?string $signedContentType = null,
        int $completionStatus = 200): MediaUploadRunner
    {
        $this->apiRequests = [];
        $this->transferRequests = [];
        $apiHttp = new MockHttpClient(function (string $method, string $url, array $options) use ($uploadHost, $signedContentType, $completionStatus): MockResponse {
            if (str_contains($url, '/op/token')) {
                return new MockResponse('{"access_token":"fixture-token"}');
            }
            $this->apiRequests[] = ['method' => $method, 'url' => $url, 'options' => $options];
            if (str_ends_with($url, '/media-bank/upload')) {
                return new MockResponse(json_encode([
                    'id' => 'asset-id-1',
                    'actionUrl' => 'https://'.$uploadHost.'/signed-form',
                'parameters' => array_merge([['key' => 'policy', 'value' => 'fixture-policy']],
                    $signedContentType === null ? [] : [['key' => 'Content-Type', 'value' => $signedContentType]]),
                ], JSON_THROW_ON_ERROR), ['http_code' => 201, 'response_headers' => ['Content-Type: application/json']]);
            }
            return new MockResponse('{}', ['http_code' => str_ends_with($url, '/done') ? $completionStatus : 200, 'response_headers' => ['Content-Type: application/json']]);
        });
        $client = new BluestoneClient($apiHttp, 'https://api.test.bluestonepim.com', 'https://idp.test.bluestonepim.com/op/token', 'client', 'secret');
        $connector = new MediaBankConnector(new ApiOperationRunner($client, $this->lock), $this->catalog, $this->revision, new OpenApiContractValidator());
        $next = 0;
        $transferHttp = new MockHttpClient(function (string $method, string $url, array $options) use ($transferStatuses, &$next): MockResponse {
            $this->transferRequests[] = ['method' => $method, 'url' => $url, 'options' => $options];
            $status = $transferStatuses[$next++] ?? 204;
            return new MockResponse('', ['http_code' => $status]);
        });

        return new MediaUploadRunner($connector, $transferHttp, base64_encode(str_repeat('k', 32)), 'uploads.example.test');
    }

    private function storageConnection(): \Doctrine\DBAL\Connection
    {
        $reflection = new \ReflectionProperty($this->storage, 'connection');
        return $reflection->getValue($this->storage);
    }
}
