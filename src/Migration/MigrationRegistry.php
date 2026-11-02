<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Migration;

final class MigrationRegistry
{
    /** @var array<string, MigrationDefinition> */
    private array $definitions = [];

    /** @param iterable<MigrationInterface> $migrations */
    public function __construct(iterable $migrations)
    {
        foreach ($migrations as $migration) {
            $reflection = new \ReflectionClass($migration);
            if (!preg_match('/^Version([0-9]{14})$/', $reflection->getShortName(), $matches)) {
                throw new \InvalidArgumentException('Migration classes must be named VersionYYYYMMDDHHMMSS.');
            }
            $version = $matches[1];
            if (isset($this->definitions[$version])) {
                throw new \InvalidArgumentException('Duplicate migration version: '.$version);
            }
            $this->definitions[$version] = new MigrationDefinition($version, hash_file('sha256', $reflection->getFileName()), $migration);
        }
        ksort($this->definitions, SORT_STRING);
    }

    /** @return array<string, MigrationDefinition> */
    public function all(): array
    {
        return $this->definitions;
    }
}
