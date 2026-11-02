<?php

declare(strict_types=1);

namespace App\Service;

interface PollingClock
{
    public function now(): float;
    public function sleep(int $milliseconds): void;
}
