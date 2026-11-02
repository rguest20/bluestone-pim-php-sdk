<?php

declare(strict_types=1);

namespace App\Migration;

/** A mutation was started but did not reach a durable completed result. */
final class MutationInDoubtException extends \RuntimeException
{
    public function __construct(string $name, string $component, string $operationId)
    {
        parent::__construct(sprintf(
            'Mutation "%s" for %s.%s has an uncertain outcome. Reconcile remote state using stable identifiers; do not repeat it automatically.',
            $name,
            $component,
            $operationId,
        ));
    }
}
