<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api;

/** Merges reviewed evidence without transferring passes between specification revisions. */
final class CoverageEvidence
{
    private const LAYERS = ['fixtures' => 'fixture_verified', 'workflow' => 'workflow_verified', 'live_verification' => 'live_verified'];
    private const STATUSES = ['verified', 'partial', 'missing', 'unassessed', 'unverified', 'failed', 'skipped', 'blocked', 'not_applicable'];

    public function apply(array $coverage, array $records, array $checksums): array
    {
        $indexed = [];
        foreach ($records as $record) {
            foreach (['component', 'operation_id', 'revision', 'openapi_sha256'] as $field) {
                if (!is_string($record[$field] ?? null) || $record[$field] === '') throw new \RuntimeException('Coverage evidence is missing '.$field.'.');
            }
            $key = $record['component'].':'.$record['operation_id'];
            $identity = $key.':'.$record['revision'];
            if (isset($indexed[$identity])) throw new \RuntimeException('Duplicate coverage evidence for '.$identity.'.');
            $indexed[$identity] = $record;
        }
        foreach ($coverage['components'] as &$component) {
            foreach (array_merge(array_values(self::LAYERS), ['stale', 'skipped', 'blocked']) as $count) $component['counts'][$count] = 0;
            $component['counts'] += ['adapter_generated' => 0, 'schema_gaps' => 0];
        }
        unset($component);
        $used = [];
        foreach ($coverage['operations'] as $key => &$operation) {
            $component = $operation['component'];
            $operation['openapi_sha256'] = $checksums[$component] ?? null;
            $operation += ['operation_adapter' => 'missing', 'schema_gaps' => []];
            $operation['evidence'] = [];
            $operation['remaining_actions'] = [];
            $record = $indexed[$key.':'.$coverage['revision']] ?? null;
            if ($record === null) {
                foreach ($indexed as $identity => $candidate) {
                    if ($candidate['component'] === $component && $candidate['operation_id'] === $operation['operation_id']) {
                        $record = $candidate;
                        break;
                    }
                }
            }
            $stale = $record !== null && ($record['revision'] !== $coverage['revision'] || $record['openapi_sha256'] !== $operation['openapi_sha256']);
            if ($record !== null) $used[$record['component'].':'.$record['operation_id'].':'.$record['revision']] = true;
            foreach (self::LAYERS as $layer => $counter) {
                $evidence = $record[$layer] ?? null;
                if ($evidence !== null) {
                    $status = $evidence['status'] ?? '';
                    if (!in_array($status, self::STATUSES, true)) throw new \RuntimeException('Invalid '.$layer.' evidence status for '.$key.'.');
                    if ($status === 'verified' && (!is_array($evidence['cases'] ?? null) || $evidence['cases'] === [])) {
                        throw new \RuntimeException('Verified coverage requires named evidence cases for '.$key.'.');
                    }
                    if (in_array($status, ['partial', 'failed', 'skipped', 'blocked'], true) && trim($evidence['reason'] ?? '') === '') {
                        throw new \RuntimeException('Incomplete coverage requires an actionable reason for '.$key.'.');
                    }
                    $operation['evidence'][$layer] = $evidence + ['revision' => $record['revision'], 'openapi_sha256' => $record['openapi_sha256']];
                    $operation[$layer] = $stale && !in_array($status, ['missing', 'unassessed', 'unverified'], true) ? 'stale' : $status;
                }
                if ($operation[$layer] === 'verified') ++$coverage['components'][$component]['counts'][$counter];
                if (!in_array($operation[$layer], ['verified', 'not_applicable'], true)) {
                    $operation['remaining_actions'][$layer] = $operation[$layer] === 'stale'
                        ? 'Revalidate '.$layer.' against the selected revision and component checksum.'
                        : ($evidence['reason'] ?? match ($layer) {
                            'fixtures' => 'Add valid and invalid request/response fixtures for '.$key.'.',
                            'workflow' => 'Assess the pagination, job, mutation and media protocols applicable to '.$key.'.',
                            'live_verification' => 'Select a disposable fixture for '.$key.' in an explicit test-tenant run.',
                        });
                }
            }
            if ($operation['typed_contract'] === 'missing' || $operation['schema_gaps'] !== []) {
                $operation['remaining_actions']['typed_contract'] = $operation['schema_gaps'] !== []
                    ? 'Resolve the request model reference or composed schema in '.$key.' and regenerate its method signature.'
                    : 'Generate the named operation contract for '.$key.'.';
            }
            foreach (['stale', 'skipped', 'blocked'] as $status) {
                foreach (array_keys(self::LAYERS) as $layer) {
                    if ($operation[$layer] === $status) { ++$coverage['components'][$component]['counts'][$status]; break; }
                }
            }
        }
        unset($operation);
        $coverage['historical_or_orphaned_evidence'] = array_values(array_diff_key($indexed, $used));

        return $coverage;
    }
}
