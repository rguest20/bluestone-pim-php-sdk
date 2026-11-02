<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Service;

use Youwe\BluestonePim\Api\Connector\PimConnector;
use Youwe\BluestonePim\Migration\MigrationContext;

/** Adapts the PIM product cursor protocol to durable page checkpoints. */
final readonly class ProductCursorRunner
{
    public function __construct(private PimConnector $pim, private CursorPaginator $paginator)
    {
    }

    public function traverse(MigrationContext $context, string $checkpointPrefix, callable $processPage,
        int $pageSize = 100, array $views = [], string $languageContext = 'en', string $archiveState = 'active'): int
    {
        if ($pageSize < 1 || $pageSize > 100 || $languageContext === '') {
            throw new \InvalidArgumentException('PIM product pages require a count of 1–100 and a language context.');
        }
        $source = ['operation' => 'pim:getProductsWithCursorAndViews', 'count' => $pageSize, 'views' => $views,
            'context' => $languageContext, 'archive_state' => $archiveState];
        return $this->paginator->traverse($context, $checkpointPrefix, function (?string $cursor, array $source): array {
            $response = $this->pim->getProductsWithCursorAndViews(
                ['count' => $source['count'], 'cursor' => $cursor, 'views' => $source['views']],
                ['archiveState' => $source['archive_state']],
                $source['context'],
            )->toArray();
            if (!array_key_exists('data', $response) || !array_key_exists('nextCursor', $response)) {
                throw new \UnexpectedValueException('PIM product cursor response omitted data or nextCursor; progress was not advanced.');
            }
            return ['items' => $response['data'], 'next_cursor' => $response['nextCursor']];
        }, $processPage, queryContext: $source);
    }
}
