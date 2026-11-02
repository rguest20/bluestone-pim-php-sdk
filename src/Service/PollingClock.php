<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Service;

interface PollingClock
{
    public function now(): float;
    public function sleep(int $milliseconds): void;
}
