<?php

declare(strict_types=1);

namespace App\Api;

final class ApiContractException extends \RuntimeException
{
    public static function request(string $operationId, ?string $field = null): self
    {
        return new self('Request does not match the pinned OpenAPI contract for '.$operationId.($field === null ? '' : ' at field '.$field).'.');
    }

    public static function response(string $operationId, ?string $field = null): self
    {
        return new self('Response does not match the pinned OpenAPI contract for '.$operationId.($field === null ? '' : ' at field '.$field).'.');
    }
}
