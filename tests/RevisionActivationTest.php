<?php

declare(strict_types=1);

namespace App\Tests;

use App\Api\OperationCatalog;
use App\Api\RevisionActivation;
use PHPUnit\Framework\TestCase;

final class RevisionActivationTest extends TestCase
{
    private string $root;
    private string $directory;
    private const OLD = '1111111111111111';
    private const NEW = '2222222222222222';

    protected function setUp(): void
    {
        $this->root = sys_get_temp_dir().'/bluestone-activation-'.bin2hex(random_bytes(6));
        $this->directory = $this->root.'/resources/bluestone';
        mkdir($this->directory, 0775, true);
        $this->writeSpecifications(self::OLD);
        $this->writeSpecifications(self::NEW);
        $this->generate(self::OLD);
        file_put_contents($this->directory.'/current.json', json_encode(['revision' => self::OLD]));
    }

    protected function tearDown(): void
    {
        $remove = static function (string $path) use (&$remove): void {
            if (is_dir($path)) {
                foreach (scandir($path) as $entry) if ($entry !== '.' && $entry !== '..') $remove($path.'/'.$entry);
                rmdir($path);
            } else unlink($path);
        };
        $remove($this->root);
    }

    public function testComponentGenerationFailureKeepsThePreviousCompleteSetActive(): void
    {
        $before = $this->fingerprint($this->root.'/generated/R'.self::OLD);
        try {
            (new RevisionActivation($this->directory))->activate(self::NEW, fn () => $this->generate(self::NEW, 'labels'));
            self::fail('The injected component failure must propagate.');
        } catch (\RuntimeException $error) {
            self::assertSame('Injected labels component generation failure.', $error->getMessage());
        }
        $catalog = new OperationCatalog($this->directory);
        self::assertSame(self::OLD, $catalog->activeRevision());
        self::assertSame($before, $this->fingerprint($this->root.'/generated/R'.self::OLD));
        foreach (array_keys(OperationCatalog::COMPONENTS) as $component) {
            self::assertSame(self::OLD, $catalog->component($component)['specification_version']);
            self::assertFileExists($catalog->openApiPath($component));
        }
        self::assertSame([], glob($this->directory.'/.current-*'));
    }

    public function testIncompleteGeneratedSetCannotBeActivatedEvenIfGeneratorReturns(): void
    {
        $this->expectExceptionMessage('incomplete or stale');
        try {
            (new RevisionActivation($this->directory))->activate(self::NEW, function (): void {
                $this->generate(self::NEW);
                unlink($this->root.'/generated/R'.self::NEW.'/Labels/Model/Example.php');
            });
        } finally {
            self::assertSame(self::OLD, (new OperationCatalog($this->directory))->activeRevision());
        }
    }

    public function testSuccessSelectsOnlyTheCompleteCandidateAndRetainsTheOldRevision(): void
    {
        $previous = $this->fingerprint($this->root.'/generated/R'.self::OLD);
        (new RevisionActivation($this->directory))->activate(self::NEW, function (): void {
            self::assertSame(self::OLD, (new OperationCatalog($this->directory))->activeRevision());
            $this->generate(self::NEW);
        });
        $catalog = new OperationCatalog($this->directory);
        self::assertSame(self::NEW, $catalog->activeRevision());
        self::assertSame($previous, $this->fingerprint($this->root.'/generated/R'.self::OLD));
        foreach (array_keys(OperationCatalog::COMPONENTS) as $component) {
            self::assertSame(self::NEW, $catalog->component($component)['specification_version']);
            self::assertFileExists($catalog->openApiPath($component, self::OLD));
        }
    }

    private function writeSpecifications(string $revision): void
    {
        $root = $this->directory.'/revisions/'.$revision;
        mkdir($root.'/catalog', 0775, true); mkdir($root.'/openapi', 0775, true);
        $manifest = ['revision' => $revision, 'components' => []];
        foreach (OperationCatalog::COMPONENTS as $component => $file) {
            $source = json_encode(['openapi' => '3.0.3', 'info' => ['title' => $component, 'version' => $revision], 'paths' => new \stdClass()], JSON_THROW_ON_ERROR);
            $checksum = hash('sha256', $source);
            file_put_contents($root.'/openapi/'.$file.'.json', $source);
            file_put_contents($root.'/catalog/'.$component.'.json', json_encode(['schema_version' => 1, 'component' => $component, 'title' => $component,
                'specification_version' => $revision, 'source_sha256' => $checksum, 'operations' => ['example' => ['path' => '/example']]], JSON_THROW_ON_ERROR));
            $manifest['components'][$component] = ['openapi_sha256' => $checksum, 'operation_count' => 1];
        }
        file_put_contents($root.'/manifest.json', json_encode($manifest, JSON_THROW_ON_ERROR));
    }

    private function generate(string $revision, ?string $failAt = null): void
    {
        $root = $this->root.'/generated/R'.$revision;
        $manifest = ['revision' => $revision, 'components' => []];
        foreach (OperationCatalog::COMPONENTS as $component => $file) {
            if ($component === $failAt) throw new \RuntimeException('Injected '.$component.' component generation failure.');
            $class = str_replace(' ', '', ucwords(str_replace('-', ' ', $component)));
            mkdir($root.'/'.$class.'/Model', 0775, true); mkdir($root.'/'.$class.'/Operations', 0775, true);
            file_put_contents($root.'/'.$class.'/Model/Example.php', '<?php // '.$revision);
            file_put_contents($root.'/'.$class.'/Operations/'.$class.'Operations.php', "<?php\nfinal class {$class}Operations\n{\n    public function example(): void {}\n}\n");
            $manifest['components'][$component] = ['openapi_sha256' => hash_file('sha256', $this->directory.'/revisions/'.$revision.'/openapi/'.$file.'.json'), 'operation_count' => 1, 'model_count' => 1];
        }
        file_put_contents($root.'/manifest.json', json_encode($manifest, JSON_THROW_ON_ERROR));
    }

    private function fingerprint(string $directory): string
    {
        $files = [];
        foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($directory, \FilesystemIterator::SKIP_DOTS)) as $file) $files[$file->getPathname()] = hash_file('sha256', $file->getPathname());
        ksort($files);
        return hash('sha256', json_encode($files, JSON_THROW_ON_ERROR));
    }
}
