<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Service;

use Youwe\BluestonePim\Api\Connector\PimConnector;
use Youwe\BluestonePim\Migration\MigrationContext;

/** Checkpointed typed product mutations with durable IDs and conservative lost-response recovery. */
final readonly class ProductMutationRunner
{
    public function __construct(private PimConnector $pim)
    {
    }

    public function create(MigrationContext $migration, string $mutationName, string $productNumber, array $request, string $context = 'en'): string
    {
        if ($productNumber === '' || ($request['number'] ?? null) !== $productNumber || !isset($request['name']) || !is_string($request['name']) || $request['name'] === '') {
            throw new \InvalidArgumentException('Product creation requires a stable product number that matches the request and a non-empty name.');
        }

        $result = $migration->mutation($mutationName, 'pim', 'createProduct', $request, function () use ($request, $context): array {
            $response = $this->pim->createProduct($request, $context);

            return ['product_id' => PimConnector::createdResourceId($response, 'a product'), 'product_number' => $request['number']];
        });

        return $result['product_id'];
    }

    public function update(MigrationContext $migration, string $mutationName, string $productId, array $request, string $context = 'en'): string
    {
        if ($productId === '' || $request === []) throw new \InvalidArgumentException('Product updates require a stable product ID and at least one field.');
        $result = $migration->mutation($mutationName, 'pim', 'updateProduct', ['id' => $productId, 'request' => $request], function () use ($productId, $request, $context): array {
            $this->pim->updateProduct($productId, $request, $context);

            return ['product_id' => $productId];
        });

        return $result['product_id'];
    }
}
