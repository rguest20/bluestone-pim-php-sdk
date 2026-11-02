<?php

declare(strict_types=1);

namespace App\Api;

/** Selects a snapshot only after all matching generated contracts are ready. */
final readonly class RevisionActivation
{
    public function __construct(private string $directory)
    {
    }

    public function activate(string $revision, callable $prepareContracts): void
    {
        if (!preg_match('/^[a-f0-9]{16}$/', $revision)) throw new \InvalidArgumentException('Invalid API revision.');
        $prepareContracts();
        $this->assertPrepared($revision);
        $pointer = json_encode(['revision' => $revision], JSON_THROW_ON_ERROR)."\n";
        $temporary = tempnam($this->directory, '.current-');
        if ($temporary === false) throw new \RuntimeException('Could not stage the API revision pointer.');
        try {
            if (file_put_contents($temporary, $pointer) !== strlen($pointer) || !rename($temporary, $this->directory.'/current.json')) {
                throw new \RuntimeException('Could not switch the active API revision.');
            }
        } finally {
            if (is_file($temporary)) unlink($temporary);
        }
    }

    private function assertPrepared(string $revision): void
    {
        $catalog = new OperationCatalog($this->directory);
        $generatedRoot = dirname($this->directory, 2).'/generated/R'.$revision;
        $manifestFile = $generatedRoot.'/manifest.json';
        $manifest = is_file($manifestFile) ? json_decode(file_get_contents($manifestFile), true, 512, JSON_THROW_ON_ERROR) : [];
        if (($manifest['revision'] ?? null) !== $revision) throw new \RuntimeException('The candidate generated contract set is incomplete.');
        foreach (array_keys(OperationCatalog::COMPONENTS) as $component) {
            $source = $catalog->openApiPath($component, $revision);
            $routes = $catalog->component($component, $revision);
            $generated = $manifest['components'][$component] ?? [];
            $class = str_replace(' ', '', ucwords(str_replace('-', ' ', $component)));
            $facadePath = $generatedRoot.'/'.$class.'/Operations/'.$class.'Operations.php';
            $facade = is_file($facadePath) ? file_get_contents($facadePath) : false;
            if (($generated['openapi_sha256'] ?? null) !== hash_file('sha256', $source)
                || ($generated['operation_count'] ?? null) !== count($routes['operations'])
                || ($generated['model_count'] ?? 0) < 1
                || count(glob($generatedRoot.'/'.$class.'/Model/*.php') ?: []) !== $generated['model_count']
                || !is_string($facade)
                || preg_match_all('/^    public function /m', $facade) !== count($routes['operations'])) {
                throw new \RuntimeException('The candidate generated contracts are incomplete or stale for '.$component.'.');
            }
        }
    }
}
