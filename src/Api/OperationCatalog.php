<?php

declare(strict_types=1);

namespace App\Api;

final class OperationCatalog
{
    /** Component names and their upstream OpenAPI file names. */
    public const COMPONENTS = [
        'pim' => 'pim', 'media-bank' => 'media-bank', 'search' => 'search', 'labels' => 'labels',
        'global-settings' => 'global-settings', 'history' => 'history', 'tasks' => 'tasks',
        'query-builder' => 'query-builder', 'public-api-sync' => 'public-api-sync', 'public-api' => 'page',
        'idp' => 'idp', 'external-notifications' => 'external-notifications',
        'completeness-score' => 'completeness-score', 'metadata' => 'metadata',
        'ui-settings' => 'ui-settings', 'bulk-operations' => 'bulk-operations',
    ];

    private array $components = [];

    public function __construct(private readonly string $directory)
    {
    }

    public function activeRevision(): ?string
    {
        $pointer = $this->directory.'/current.json';
        if (!is_file($pointer)) {
            return null;
        }
        $data = json_decode(file_get_contents($pointer), true, 512, JSON_THROW_ON_ERROR);
        $revision = $data['revision'] ?? null;
        if (!is_string($revision) || !preg_match('/^[a-f0-9]{16}$/', $revision)) {
            throw new \RuntimeException('The API catalog revision pointer is invalid.');
        }

        return $revision;
    }

    public function component(string $component, ?string $revision = null): array
    {
        if (!isset(self::COMPONENTS[$component])) {
            throw new \InvalidArgumentException('Unknown API component: '.$component);
        }
        $revision ??= $this->activeRevision();
        if ($revision !== null && $revision !== '' && $revision !== 'legacy' && !preg_match('/^[a-f0-9]{16}$/', $revision)) {
            throw new \InvalidArgumentException('Invalid API catalog revision.');
        }
        if (!isset($this->components[$component][$revision ?? 'current'])) {
            $file = $revision === null || $revision === '' || $revision === 'legacy'
                ? $this->directory.'/'.$component.'.json'
                : $this->directory.'/revisions/'.$revision.'/catalog/'.$component.'.json';
            if (!is_file($file)) {
                throw new \RuntimeException('Missing API catalog. Run php bin/update-api-catalog.');
            }
            $data = json_decode(file_get_contents($file), true, 512, JSON_THROW_ON_ERROR);
            if (($data['schema_version'] ?? null) !== 1 || ($data['component'] ?? null) !== $component || !is_array($data['operations'] ?? null)) {
                throw new \RuntimeException('Invalid API catalog for '.$component);
            }
            $this->components[$component][$revision ?? 'current'] = $data;
        }

        return $this->components[$component][$revision ?? 'current'];
    }

    public function coverage(): array
    {
        $revision = $this->activeRevision();
        if ($revision !== null) {
            $file = $this->directory.'/revisions/'.$revision.'/coverage.json';
            if (!is_file($file)) {
                throw new \RuntimeException('Missing API coverage data for revision '.$revision);
            }

            $coverage = $this->includeGeneratedAdapters(json_decode(file_get_contents($file), true, 512, JSON_THROW_ON_ERROR), $revision);
            $evidenceFile = $this->directory.'/contract-evidence.json';
            $records = is_file($evidenceFile) ? json_decode(file_get_contents($evidenceFile), true, 512, JSON_THROW_ON_ERROR)['operations'] ?? [] : [];
            $checksums = [];
            foreach (array_keys($coverage['components']) as $component) $checksums[$component] = $this->component($component, $revision)['source_sha256'];

            $coverage = (new CoverageEvidence())->apply($coverage, $records, $checksums);
            $liveStatusFile = $this->directory.'/live-verification-status.json';
            $coverage['live_verification_prerequisites'] = is_file($liveStatusFile)
                ? json_decode(file_get_contents($liveStatusFile), true, 512, JSON_THROW_ON_ERROR)
                : ['status' => 'unconfigured', 'reason' => 'Configure a dedicated test target and explicit fixture scope.'];

            return $coverage;
        }

        $catalogs = [];
        foreach (array_keys(self::COMPONENTS) as $component) {
            $catalogs[$component] = $this->component($component);
        }
        $checksums = [];
        foreach ($catalogs as $component => $catalog) {
            $checksums[$component] = $catalog['source_sha256'] ?? hash('sha256', json_encode($catalog, JSON_THROW_ON_ERROR));
        }

        return (new CoverageInventory())->build($catalogs, substr(hash('sha256', json_encode($checksums, JSON_THROW_ON_ERROR)), 0, 16));
    }

    private function includeGeneratedAdapters(array $coverage, string $revision): array
    {
        $manifestPath = dirname($this->directory, 2).'/generated/R'.$revision.'/manifest.json';
        if (!is_file($manifestPath)) {
            return $coverage;
        }
        $manifest = json_decode(file_get_contents($manifestPath), true, 512, JSON_THROW_ON_ERROR);
        if (($manifest['revision'] ?? null) !== $revision) {
            return $coverage;
        }
        foreach ($coverage['components'] as $component => &$componentData) {
            $generated = $manifest['components'][$component] ?? null;
            $catalog = $this->component($component, $revision);
            if (!is_array($generated)
                || ($generated['openapi_sha256'] ?? null) !== ($catalog['source_sha256'] ?? null)
                || ($generated['operation_count'] ?? null) !== count($catalog['operations'])) {
                continue;
            }
            $componentClass = str_replace(' ', '', ucwords(str_replace(['-', '_', '/'], ' ', $component)));
            $facade = dirname($this->directory, 2).'/generated/R'.$revision.'/'.$componentClass.'/Operations/'.$componentClass.'Operations.php';
            $facadeSource = is_file($facade) ? file_get_contents($facade) : false;
            if (!is_string($facadeSource) || preg_match_all('/^    public function /m', $facadeSource) !== count($catalog['operations'])) {
                continue;
            }
            $gaps = array_fill_keys($generated['missing_request_models'] ?? [], true);
            $componentData['counts']['adapter_generated'] = count($catalog['operations']);
            $componentData['counts']['schema_gaps'] = count($gaps);
            $componentData['counts']['typed'] = count($catalog['operations']) - count($gaps);
            foreach ($catalog['operations'] as $operationId => $_operation) {
                $key = $component.':'.$operationId;
                if (!isset($coverage['operations'][$key])) {
                    continue;
                }
                $status = isset($gaps[$operationId]) ? 'generated_schema_gap' : 'generated';
                $coverage['operations'][$key]['operation_adapter'] = $status;
                $coverage['operations'][$key]['typed_contract'] = $status;
                if (isset($gaps[$operationId])) {
                    $coverage['operations'][$key]['schema_gaps'] = ['request_model_reference_unresolved'];
                }
            }
        }
        unset($componentData);

        return $coverage;
    }

    public function operation(string $component, string $operationId, ?string $revision = null): array
    {
        return $this->component($component, $revision)['operations'][$operationId]
            ?? throw new \InvalidArgumentException(sprintf('Unknown %s operation: %s. Use app:api:list %s to inspect available IDs.', $component, $operationId, $component));
    }

    public function openApiPath(string $component, ?string $revision = null): string
    {
        if (!isset(self::COMPONENTS[$component])) {
            throw new \InvalidArgumentException('Unknown API component: '.$component);
        }
        $revision ??= $this->activeRevision();
        if ($revision === null || $revision === '' || $revision === 'legacy') {
            throw new \RuntimeException('This migration has no pinned OpenAPI revision; typed validation is unavailable.');
        }
        if (!preg_match('/^[a-f0-9]{16}$/', $revision)) {
            throw new \InvalidArgumentException('Invalid OpenAPI revision.');
        }
        $manifestFile = $this->directory.'/revisions/'.$revision.'/manifest.json';
        $manifest = is_file($manifestFile) ? json_decode(file_get_contents($manifestFile), true, 512, JSON_THROW_ON_ERROR) : null;
        $entry = is_array($manifest) ? ($manifest['components'][$component] ?? null) : null;
        $path = $this->directory.'/revisions/'.$revision.'/openapi/'.self::COMPONENTS[$component].'.json';
        $checksum = is_file($path) ? hash_file('sha256', $path) : false;
        if (!is_array($entry) || !is_string($checksum) || !hash_equals((string) ($entry['openapi_sha256'] ?? ''), $checksum)) {
            throw new \RuntimeException('The pinned OpenAPI specification is missing or failed its checksum.');
        }

        return $path;
    }
}
