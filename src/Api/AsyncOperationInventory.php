<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api;

/** Discovers operations whose specs suggest acceptance, task polling or asynchronous completion. */
final class AsyncOperationInventory
{
    private const SUPPORTED_PROTOCOLS = [
        'pim:getJobStatus' => 'pim-job-runner',
        'bulk-operations:getJobStatus' => 'bulk-operations-job-runner',
    ];

    public function discover(array $specification, array $catalog): array
    {
        $candidates = [];
        foreach ($specification['paths'] ?? [] as $path => $item) {
            foreach ($item as $method => $operation) {
                if (!is_array($operation) || !isset($operation['operationId'])) {
                    continue;
                }
                $signals = [];
                foreach ($operation['responses'] ?? [] as $status => $response) {
                    if (str_starts_with((string) $status, '202')) {
                        $signals[] = 'http-202';
                    }
                    foreach (array_keys($response['headers'] ?? []) as $header) {
                        if (in_array(strtolower($header), ['location', 'resource-id', 'task-id', 'job-id'], true)) {
                            $signals[] = 'response-header:'.strtolower($header);
                        }
                    }
                }
                $operationId = $operation['operationId'];
                if (str_contains(strtolower($operationId), 'jobstatus') || str_contains(strtolower($operationId), 'taskstatus')) {
                    $signals[] = 'status-operation-name';
                }
                if ($signals !== [] && isset($catalog['operations'][$operationId])) {
                    $route = $catalog['operations'][$operationId];
                    $protocol = self::SUPPORTED_PROTOCOLS[($catalog['component'] ?? '').':'.$operationId] ?? null;
                    $assessment = $protocol === null ? [
                        'status' => 'review_required',
                        'reason' => 'OpenAPI signals suggest asynchronous behavior, but no matching recovery protocol is implemented. Confirm whether this operation is synchronous, event-driven or requires a distinct poller.',
                    ] : ['status' => 'supported', 'protocol' => $protocol];
                    $candidates[$operationId] = ['operation_id' => $operationId, 'method' => $route['method'],
                        'path' => $route['path'], 'signals' => array_values(array_unique($signals)),
                        'deprecated' => $route['deprecated']] + $assessment;
                }
            }
        }
        ksort($candidates, SORT_STRING);

        return $candidates;
    }
}
