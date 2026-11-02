<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Migration;

use Youwe\BluestonePim\Api\Connector\PimConnector;

/** Base migration with checkpointed helpers for common PIM mutations. */
abstract class AbstractPimMigration implements MigrationInterface
{
    public function __construct(protected readonly PimConnector $pim)
    {
    }

    /**
     * Create a catalog or category and persist its resource ID for safe retries.
     *
     * @param array{name: string, number: string, parentId?: string} $request
     */
    protected function createCategory(MigrationContext $context, string $mutationName, array $request, string $languageContext = 'en'): string
    {
        $result = $context->mutation($mutationName, 'pim', 'createCategory', $request, function () use ($request, $languageContext): array {
            $response = $this->pim->createCategory($request, $languageContext);

            return ['node_id' => PimConnector::createdResourceId($response, 'a catalog/category')];
        });

        return $result['node_id'];
    }
}
