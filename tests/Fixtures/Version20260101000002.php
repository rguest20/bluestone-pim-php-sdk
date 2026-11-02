<?php

declare(strict_types=1);

namespace App\Tests\Fixtures;

use App\Migration\MigrationContext;
use App\Migration\MigrationInterface;

final class Version20260101000002 implements MigrationInterface
{
    public int $calls = 0;

    public function description(): string
    {
        return 'Test a later migration';
    }

    public function up(MigrationContext $context): void
    {
        ++$this->calls;
    }
}
