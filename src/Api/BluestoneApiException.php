<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api;

final class BluestoneApiException extends \RuntimeException
{
    public function __construct(string $operation, public readonly int $statusCode)
    {
        // Do not include remote response bodies, credentials or request payloads.
        parent::__construct(sprintf('%s failed (HTTP %d).', $operation, $statusCode));
    }
}
