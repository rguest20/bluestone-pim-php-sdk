<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Migration;

final readonly class MigrationDefinition
{
    public function __construct(public string $version, public string $checksum, public MigrationInterface $migration, public ?string $legacyChecksum = null)
    {
    }
}
