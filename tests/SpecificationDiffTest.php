<?php

declare(strict_types=1);

namespace App\Tests;

use App\Api\SpecificationDiff;
use PHPUnit\Framework\TestCase;

final class SpecificationDiffTest extends TestCase
{
    public function testReportsAddedRemovedChangedAndNewlyRequiredReferencedFields(): void
    {
        $before = $this->specification();
        $after = $before;
        unset($after['paths']['/removed']);
        $after['paths']['/added']['get'] = ['operationId' => 'added'];
        $after['paths']['/items']['post']['deprecated'] = true;
        $after['paths']['/items']['post']['security'] = [];
        $after['paths']['/items']['post']['parameters'][] = ['name' => 'context', 'in' => 'header', 'required' => true];
        $after['paths']['/items']['post']['responses']['201'] = ['description' => 'Created'];
        $after['components']['schemas']['Payload']['required'][] = 'number';
        $diff = (new SpecificationDiff())->compare($before, $after);
        self::assertSame(['added'], $diff['added']);
        self::assertSame(['removed'], $diff['removed']);
        self::assertSame(['authentication', 'parameters', 'responses', 'deprecated', 'required_request_fields'], $diff['changed']['create']);
        self::assertSame(['Payload'], $diff['changed_schemas']);
        self::assertSame(['added' => ['number'], 'removed' => []], $diff['required_request_field_changes']['create']);
        self::assertSame(1, $diff['summary']['operations_with_required_field_changes']);
    }

    public function testIdenticalSpecificationsAndObjectKeyOrderingHaveNoDrift(): void
    {
        $before = $this->specification();
        $after = $before;
        $after['components']['schemas']['Payload']['properties'] = array_reverse($after['components']['schemas']['Payload']['properties'], true);
        $diff = (new SpecificationDiff())->compare($before, $after);
        self::assertSame(['added' => 0, 'removed' => 0, 'changed' => 0, 'changed_schemas' => 0, 'operations_with_required_field_changes' => 0], $diff['summary']);
    }

    public function testRequiredFieldChangesInsideEscapedAndComposedReferencesAreDetected(): void
    {
        $before = $this->specification();
        $before['components']['schemas']['Payload'] = ['allOf' => [['$ref' => '#/components/schemas/Shared~1Fields']]];
        $before['components']['schemas']['Shared/Fields'] = ['type' => 'object', 'properties' => ['code' => ['type' => 'string']]];
        $after = $before;
        $after['components']['schemas']['Shared/Fields']['required'] = ['code'];
        $diff = (new SpecificationDiff())->compare($before, $after);
        self::assertSame(['code'], $diff['required_request_field_changes']['create']['added']);
    }

    private function specification(): array
    {
        return ['security' => [['oauth' => []]], 'paths' => [
            '/items' => ['post' => ['operationId' => 'create', 'requestBody' => ['$ref' => '#/components/requestBodies/Payload'], 'responses' => ['200' => ['description' => 'OK']]]],
            '/removed' => ['get' => ['operationId' => 'removed']],
        ], 'components' => [
            'requestBodies' => ['Payload' => ['content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/Payload']]]]],
            'schemas' => ['Payload' => ['type' => 'object', 'required' => ['name'], 'properties' => ['name' => ['type' => 'string'], 'number' => ['type' => 'string']]]],
        ]];
    }
}
