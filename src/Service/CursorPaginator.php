<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Service;

use Youwe\BluestonePim\Migration\MigrationContext;

/** Checkpoint-aware cursor traversal for endpoints with a stable next-cursor contract. */
final class CursorPaginator
{
    /**
     * @param callable(?string, array): array{items: array, next_cursor: ?string} $fetchPage
     * @param callable(array): void $processPage
     * @return int Number of pages completed, including pages restored from checkpoints.
     */
    public function traverse(MigrationContext $context, string $checkpointPrefix, callable $fetchPage, callable $processPage, int $maximumPages = 100000, array $queryContext = []): int
    {
        if ($checkpointPrefix === '' || $maximumPages < 1) {
            throw new \InvalidArgumentException('Provide a checkpoint prefix and a positive page limit.');
        }
        (new PaginationSource())->bind($context, $checkpointPrefix, $queryContext, ['protocol' => 'cursor']);
        $cursor = null;
        $seenCursors = [];
        $pageNumber = 0;
        while ($pageNumber < $maximumPages) {
            $context->heartbeat();
            $stepName = $checkpointPrefix.'-'.$pageNumber;
            if (strlen($stepName) > 190) {
                throw new \InvalidArgumentException('Cursor paginator checkpoint names exceed the 190-byte limit.');
            }
            $result = $context->step($stepName, function () use ($context, $fetchPage, $processPage, $cursor, $seenCursors, $queryContext): array {
                $page = $fetchPage($cursor, $queryContext);
                if (!array_key_exists('items', $page) || !array_key_exists('next_cursor', $page)
                    || !is_array($page['items']) || !array_is_list($page['items'])
                    || (!is_string($page['next_cursor'] ?? null) && ($page['next_cursor'] ?? null) !== null)) {
                    throw new \UnexpectedValueException('Cursor page callback returned an invalid page envelope.');
                }
                $next = $page['next_cursor'];
                if ($next !== null && $next !== '' && ($next === $cursor || isset($seenCursors[$next]))) {
                    throw new \RuntimeException('The API repeated a cursor. Stop and reconcile the page source before retrying.');
                }
                $context->heartbeat();
                $processPage($page['items']);
                $context->heartbeat();

                return ['next_cursor' => $page['next_cursor'] ?? null];
            });
            ++$pageNumber;
            if (!is_array($result) || !array_key_exists('next_cursor', $result)
                || (!is_string($result['next_cursor']) && $result['next_cursor'] !== null)) {
                throw new \UnexpectedValueException('Stored cursor checkpoint has an invalid result envelope.');
            }
            $nextCursor = $result['next_cursor'];
            if ($nextCursor === null || $nextCursor === '') {
                return $pageNumber;
            }
            if ($nextCursor === $cursor || isset($seenCursors[$nextCursor])) {
                throw new \RuntimeException('The API repeated a cursor. Stop and reconcile the page source before retrying.');
            }
            $seenCursors[$nextCursor] = true;
            $cursor = $nextCursor;
        }

        throw new \RuntimeException(sprintf('Cursor traversal reached its %d-page safety limit.', $maximumPages));
    }
}
