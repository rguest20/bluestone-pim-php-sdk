<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Service;

use Youwe\BluestonePim\Migration\MigrationContext;

/** Binds page checkpoints to the original query, context and pagination settings. */
final class PaginationSource
{
    public function bind(MigrationContext $context, string $prefix, array $queryContext, array $settings = []): void
    {
        $sort = static function (array $value) use (&$sort): array {
            if (!array_is_list($value)) ksort($value, SORT_STRING);
            foreach ($value as &$item) if (is_array($item)) $item = $sort($item);
            unset($item);
            return $value;
        };
        $fingerprint = hash('sha256', json_encode($sort(['query_context' => $queryContext, 'settings' => $settings, 'revision' => $context->apiRevision()]), JSON_THROW_ON_ERROR));
        $stored = $context->step($prefix.'-source', static fn (): array => ['fingerprint' => $fingerprint]);
        if (!is_array($stored) || !is_string($stored['fingerprint'] ?? null) || !hash_equals($fingerprint, $stored['fingerprint'])) {
            throw new \RuntimeException('Pagination query, context or settings changed. Restore the original source before retrying.');
        }
    }
}
