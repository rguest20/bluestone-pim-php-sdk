<?php

declare(strict_types=1);

namespace App\Service;

use App\Migration\MigrationContext;

/** Traverses numbered pages, checkpointing only after the complete page has been processed. */
final class PagePaginator
{
    /**
     * @param callable(int, array): array{items: list<mixed>, has_more: bool} $fetchPage
     * @param callable(array): void $processPage
     */
    public function traverse(MigrationContext $context, string $checkpointPrefix, callable $fetchPage, callable $processPage,
        int $firstPage = 0, int $maximumPages = 100000, array $queryContext = []): int
    {
        if ($checkpointPrefix === '' || $firstPage < 0 || $maximumPages < 1) {
            throw new \InvalidArgumentException('Provide a checkpoint prefix, non-negative first page and positive page limit.');
        }
        (new PaginationSource())->bind($context, $checkpointPrefix, $queryContext, ['protocol' => 'page', 'first_page' => $firstPage]);
        for ($offset = 0; $offset < $maximumPages; ++$offset) {
            $pageNumber = $firstPage + $offset;
            $result = $context->step($checkpointPrefix.'-'.$pageNumber, static function () use ($context, $pageNumber, $queryContext, $fetchPage, $processPage): array {
                $page = $fetchPage($pageNumber, $queryContext);
                if (!is_array($page['items'] ?? null) || !array_is_list($page['items']) || !is_bool($page['has_more'] ?? null)) {
                    throw new \UnexpectedValueException('Page callback must return a list of items and a boolean has_more value.');
                }
                $context->heartbeat();
                $processPage($page['items']);
                $context->heartbeat();
                return ['has_more' => $page['has_more']];
            });
            if (!is_array($result) || !is_bool($result['has_more'] ?? null)) {
                throw new \UnexpectedValueException('Stored page checkpoint has an invalid result envelope.');
            }
            if (!$result['has_more']) return $offset + 1;
        }
        throw new \RuntimeException(sprintf('Page traversal reached its %d-page safety limit.', $maximumPages));
    }
}
