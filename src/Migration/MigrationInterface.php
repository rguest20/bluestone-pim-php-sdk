<?php

declare(strict_types=1);

namespace App\Migration;

/** Implementations in migrations/ are autowired Symfony services. */
interface MigrationInterface
{
    public function description(): string;

    public function up(MigrationContext $context): void;
}
