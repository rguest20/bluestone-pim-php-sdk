<?php

declare(strict_types=1);

namespace App\Tests\Fixtures;

use App\Service\PollingClock;

final class RecoveryTestClock implements PollingClock
{
    public float $elapsed = 0;
    public ?\Closure $onSleep = null;

    public function now(): float
    {
        return $this->elapsed;
    }

    public function sleep(int $milliseconds): void
    {
        $this->elapsed += $milliseconds / 1000;
        ($this->onSleep ?? static fn () => null)();
    }
}
