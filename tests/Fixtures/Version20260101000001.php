<?php

declare(strict_types=1);

namespace App\Tests\Fixtures;

use App\Migration\MigrationContext;
use App\Migration\MigrationInterface;

final class Version20260101000001 implements MigrationInterface
{
    public int $completedStepCalls = 0;
    public int $lastStepCalls = 0;
    public bool $shouldFail = false;
    public mixed $resumedResult = null;

    public function description(): string
    {
        return 'Test a checkpointed migration';
    }

    public function up(MigrationContext $context): void
    {
        $this->resumedResult = $context->step('first', function (): array {
            ++$this->completedStepCalls;

            return ['id' => 'saved-resource-id'];
        });
        $context->step('last', function (): void {
            ++$this->lastStepCalls;
            if ($this->shouldFail) {
                throw new \RuntimeException('secret-remote-response');
            }
        });
    }
}
