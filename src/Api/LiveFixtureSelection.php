<?php

declare(strict_types=1);

namespace App\Api;

/** Builds an explicit, no-network live-test scope from the reviewed fixture policy. */
final readonly class LiveFixtureSelection
{
    public function __construct(private string $policyFile, private string $statusFile)
    {
    }

    /** @param list<string> $groups @param list<string> $operations component:operationId pairs */
    public function plan(?string $target, array $groups, array $operations, bool $allowBroadEffect = false): array
    {
        if ($target === null || trim($target) === '') {
            throw new \InvalidArgumentException('Pass an explicit --target for a live-test plan.');
        }
        if ($groups === [] || $operations === []) {
            throw new \InvalidArgumentException('Select at least one --group and one component-qualified --operation; no fixtures are selected by default.');
        }
        $policy = json_decode(file_get_contents($this->policyFile), true, 512, JSON_THROW_ON_ERROR);
        $allowedOperations = [];
        $selectedGroups = [];
        foreach (array_values(array_unique($groups)) as $groupId) {
            $group = $policy['groups'][$groupId] ?? throw new \InvalidArgumentException('Unknown live fixture group: '.$groupId.'.');
            if (($group['broad_effect_opt_in'] ?? false) && !$allowBroadEffect) {
                throw new \InvalidArgumentException('Live fixture group '.$groupId.' requires the separate --allow-broad-effect option.');
            }
            foreach ($group['operations'] as $operationId) {
                $allowedOperations[$group['component'].':'.$operationId] = $groupId;
            }
            $selectedGroups[] = ['id' => $groupId] + $group;
        }

        $selectedOperations = [];
        foreach (array_values(array_unique($operations)) as $operation) {
            $groupId = $allowedOperations[$operation] ?? null;
            if ($groupId === null) {
                throw new \InvalidArgumentException('Operation '.$operation.' is not part of an explicitly selected fixture group.');
            }
            [$component, $operationId] = explode(':', $operation, 2);
            $selectedOperations[] = ['group' => $groupId, 'component' => $component, 'operation_id' => $operationId];
        }

        $status = is_file($this->statusFile)
            ? json_decode(file_get_contents($this->statusFile), true, 512, JSON_THROW_ON_ERROR)
            : ['status' => 'unconfigured', 'reason' => 'No live verification status is configured.'];

        return [
            'mode' => 'plan_only',
            'target' => $target,
            'execution_allowed' => ($status['status'] ?? null) === 'ready',
            'live_status' => $status,
            'groups' => $selectedGroups,
            'operations' => $selectedOperations,
        ];
    }
}
