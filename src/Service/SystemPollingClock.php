<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Service;

final class SystemPollingClock implements PollingClock
{
    public function now(): float
    {
        return hrtime(true) / 1_000_000_000;
    }

    public function sleep(int $milliseconds): void
    {
        usleep($milliseconds * 1000);
    }
}
