<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\Normalizer;

use RuntimeException;
class InvalidDateException extends RuntimeException
{
    public function __construct(mixed $value, string $format)
    {
        parent::__construct(sprintf('Invalid date value "%s": does not match the expected format "%s".', is_scalar($value) ? (string) $value : get_debug_type($value), $format));
    }
}