<?php

declare(strict_types=1);

namespace App\Api;

final class CoverageInventory
{
    public function build(array $catalogs, string $revision): array
    {
        $components = [];
        $operations = [];
        foreach ($catalogs as $component => $catalog) {
            $counts = ['routed' => 0, 'adapter_generated' => 0, 'schema_gaps' => 0, 'typed' => 0, 'fixture_verified' => 0, 'workflow_verified' => 0, 'live_verified' => 0, 'deprecated' => 0];
            foreach ($catalog['operations'] as $operationId => $operation) {
                $operations[$component.':'.$operationId] = [
                    'component' => $component,
                    'operation_id' => $operationId,
                    'revision' => $revision,
                    'routing' => 'available',
                    'operation_adapter' => 'missing',
                    'schema_gaps' => [],
                    'typed_contract' => 'missing',
                    'fixtures' => 'missing',
                    'workflow' => 'unassessed',
                    'live_verification' => 'unverified',
                    'deprecated' => $operation['deprecated'],
                ];
                ++$counts['routed'];
                $counts['deprecated'] += (int) $operation['deprecated'];
            }
            $components[$component] = ['title' => $catalog['title'], 'revision' => $revision, 'counts' => $counts];
        }
        ksort($operations, SORT_STRING);
        ksort($components, SORT_STRING);

        return ['schema_version' => 1, 'revision' => $revision, 'components' => $components, 'operations' => $operations];
    }
}
