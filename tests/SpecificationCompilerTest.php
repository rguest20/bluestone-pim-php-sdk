<?php

declare(strict_types=1);

namespace App\Tests;

use Youwe\BluestonePim\Api\SpecificationCompiler;
use PHPUnit\Framework\TestCase;

final class SpecificationCompilerTest extends TestCase
{
    public function testCompilerHonoursOpenApiInheritanceOverridesReferencesAndProvenance(): void
    {
        $spec = $this->specification();
        $spec['paths']['/things/{id}']['parameters'] = [
            ['name' => 'id', 'in' => 'path', 'required' => true],
            ['name' => 'page', 'in' => 'query', 'required' => true],
        ];
        $spec['components']['parameters']['Page'] = ['name' => 'page', 'in' => 'query', 'required' => false];
        $spec['components']['requestBodies']['Update'] = ['required' => true, 'content' => ['application/json' => []]];
        $spec['paths']['/things/{id}']['patch'] = [
            'operationId' => 'updateThing',
            'servers' => [['url' => 'https://api.bluestonepim.com/other-service']],
            'security' => [],
            'parameters' => [['$ref' => '#/components/parameters/Page']],
            'requestBody' => ['$ref' => '#/components/requestBodies/Update'],
            'deprecated' => true,
        ];
        $catalog = (new SpecificationCompiler())->compile('example', $spec, 'https://docs.example/spec.json', str_repeat('a', 64));
        $get = $catalog['operations']['getThing'];
        $patch = $catalog['operations']['updateThing'];
        self::assertSame('/pim/things/{id}', $get['path']);
        self::assertSame('oauth2', $get['authentication']);
        self::assertSame('/other-service/things/{id}', $patch['path']);
        self::assertSame('none', $patch['authentication']);
        self::assertFalse($patch['parameters'][1]['required']);
        self::assertTrue($patch['body_required']);
        self::assertTrue($patch['deprecated']);
        self::assertSame(['application/json'], $patch['content_types']);
        self::assertSame(str_repeat('a', 64), $catalog['source_sha256']);
    }

    public function testApiKeySecuritySchemeIsKeptSeparateFromOauth(): void
    {
        $spec = $this->specification();
        $spec['security'] = [['public' => []]];
        $spec['components']['securitySchemes']['public'] = ['type' => 'apiKey', 'in' => 'header', 'name' => 'x-api-key'];
        $result = (new SpecificationCompiler())->compile('example', $spec, 'source', 'hash');
        self::assertSame('api_key', $result['operations']['getThing']['authentication']);
    }

    public function testUnknownAuthenticationFailsRegenerationInsteadOfDroppingCredentials(): void
    {
        $spec = $this->specification();
        $spec['security'] = [['unknown' => []]];
        $this->expectExceptionMessage('Unsupported OpenAPI authentication');
        (new SpecificationCompiler())->compile('example', $spec, 'source', 'hash');
    }

    public function testUnexpectedServerFailsRegenerationInsteadOfChangingDestinations(): void
    {
        $spec = $this->specification();
        $spec['servers'][0]['url'] = 'https://unexpected.example/pim';
        $this->expectExceptionMessage('Unsupported API server');
        (new SpecificationCompiler())->compile('example', $spec, 'source', 'hash');
    }

    public function testDuplicateOperationIdsCannotSilentlyOverwriteRoutes(): void
    {
        $spec = $this->specification();
        $spec['paths']['/another-path']['get'] = ['operationId' => 'getThing'];
        $this->expectExceptionMessage('duplicate operationId');
        (new SpecificationCompiler())->compile('example', $spec, 'source', 'hash');
    }

    public function testUnsupportedQueryStylesFailRegenerationInsteadOfSendingWrongParameters(): void
    {
        $spec = $this->specification();
        $spec['paths']['/things/{id}']['get']['parameters'] = [
            ['name' => 'filter', 'in' => 'query', 'style' => 'deepObject'],
        ];
        $this->expectExceptionMessage('Unsupported query serialization');
        (new SpecificationCompiler())->compile('example', $spec, 'source', 'hash');
    }

    private function specification(): array
    {
        return [
            'info' => ['title' => 'Example API', 'version' => '1'],
            'servers' => [['url' => 'api.bluestonepim.com/pim']],
            'security' => [['oauth' => []]],
            'components' => ['securitySchemes' => ['oauth' => ['type' => 'oauth2']]],
            'paths' => ['/things/{id}' => ['get' => ['operationId' => 'getThing']]],
        ];
    }
}
