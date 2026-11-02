<?php

declare(strict_types=1);

namespace App\Tests;

use App\Api\ApiAuthentication;
use App\Api\ApiContractException;
use App\Api\OpenApiContractValidator;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

final class OpenApiValidationFormatsTest extends TestCase
{
    private string $specPath;
    private OpenApiContractValidator $validator;

    protected function setUp(): void
    {
        $this->specPath = tempnam(sys_get_temp_dir(), 'openapi-formats-');
        $payload = ['allOf' => [['$ref' => '#/components/schemas/Name'], ['type' => 'object', 'properties' => ['description' => ['type' => 'string', 'nullable' => true]]]]];
        $spec = ['openapi' => '3.0.3', 'info' => ['title' => 'Validation fixtures', 'version' => '1'], 'paths' => [
            '/contract' => ['patch' => ['operationId' => 'patchContract', 'requestBody' => ['required' => true, 'content' => ['application/json' => ['schema' => $payload]]], 'responses' => ['204' => ['description' => 'No content']]]],
            '/json' => ['get' => ['operationId' => 'jsonResult', 'responses' => ['200' => ['description' => 'JSON', 'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/Name']]]]]]],
            '/binary' => ['get' => ['operationId' => 'binaryResult', 'responses' => ['200' => ['description' => 'File', 'content' => ['application/octet-stream' => ['schema' => ['type' => 'string', 'format' => 'binary']]]]]]],
            '/accepted' => ['post' => ['operationId' => 'acceptedResult', 'responses' => ['202' => ['description' => 'Accepted', 'content' => ['application/json' => ['schema' => ['type' => 'object', 'required' => ['taskId'], 'properties' => ['taskId' => ['type' => 'string']]]]]]]]],
        ], 'components' => ['schemas' => ['Name' => ['type' => 'object', 'required' => ['name'], 'properties' => ['name' => ['type' => 'string', 'enum' => ['valid']]]]]]];
        file_put_contents($this->specPath, json_encode($spec, JSON_THROW_ON_ERROR));
        $this->validator = new OpenApiContractValidator();
    }

    protected function tearDown(): void
    {
        unlink($this->specPath);
    }

    public function testReferencedComposedNullableRequestIsValidated(): void
    {
        $this->validator->validateRequest('pim', 'patchContract', $this->specPath, '/contract', 'PATCH', '/contract', ['json' => ['name' => 'valid', 'description' => null]], ApiAuthentication::None);
        self::expectNotToPerformAssertions();
    }

    public function testComposedRequestRejectsAnInvalidReferencedEnum(): void
    {
        $this->expectException(ApiContractException::class);
        $this->validator->validateRequest('pim', 'patchContract', $this->specPath, '/contract', 'PATCH', '/contract', ['json' => ['name' => 'invalid-secret']], ApiAuthentication::None);
    }

    public function testJsonEmptyBinaryAndAsyncAcknowledgementResponsesKeepTheirForms(): void
    {
        foreach ([
            ['jsonResult', 'GET', '/json', 200, 'application/json', '{"name":"valid"}'],
            ['patchContract', 'PATCH', '/contract', 204, null, ''],
            ['binaryResult', 'GET', '/binary', 200, 'application/octet-stream', "\0binary\xff"],
            ['acceptedResult', 'POST', '/accepted', 202, 'application/json', '{"taskId":"task-1"}'],
        ] as [$operation, $method, $path, $status, $contentType, $body]) {
            $response = (new MockHttpClient(new MockResponse($body, ['http_code' => $status, 'response_headers' => $contentType === null ? [] : ['Content-Type: '.$contentType]])))->request($method, 'https://fixture.invalid'.$path);
            $this->validator->validateResponse('pim', $operation, $this->specPath, $method, $path, $response);
            self::assertSame($body, $response->getContent(false));
            self::assertSame($status, $response->getStatusCode());
        }
    }

    public function testAcknowledgementCannotOmitItsDocumentedTaskId(): void
    {
        $response = (new MockHttpClient(new MockResponse('{}', ['http_code' => 202, 'response_headers' => ['Content-Type: application/json']])))->request('POST', 'https://fixture.invalid/accepted');
        $this->expectExceptionMessage('taskId');
        $this->validator->validateResponse('pim', 'acceptedResult', $this->specPath, 'POST', '/accepted', $response);
    }
}
