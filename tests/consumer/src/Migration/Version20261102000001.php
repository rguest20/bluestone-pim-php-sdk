<?php

declare(strict_types=1);

namespace App\Migration;

use Youwe\BluestonePim\Migration\MigrationContext;
use Youwe\BluestonePim\Migration\MigrationInterface;

final class Version20261102000001 implements MigrationInterface
{
    public function description(): string
    {
        return 'Consumer migration discovery check';
    }

    public function up(MigrationContext $context): void
    {
    }
}
