<?php

declare(strict_types=1);

namespace App\Service;

use App\Api\Connector\PimConnector;
use App\Api\ApiRevisionContext;
use App\Api\OpenApiModelSerializer;
use App\Migration\MigrationContext;

/** Example domain runner; add similar services for other documented PIM areas. */
final readonly class CatalogRunner
{
    public function __construct(private PimConnector $pim, private ?OpenApiModelSerializer $modelSerializer = null, private ?ApiRevisionContext $revisionContext = null)
    {
    }

    /**
     * @param array{name?: array{value: string}|null, description?: array{value: string}|null, number?: string|null} $details
     */
    public function updateDetails(string $nodeId, array $details, string $context = 'en'): void
    {
        $this->updateDetailsOperation($nodeId, $details, $context, false);
    }

    /** Apply the same domain operation with request/response validation against the migration's pinned contract. */
    public function updateDetailsTyped(string $nodeId, array $details, string $context = 'en'): void
    {
        $this->updateDetailsOperation($nodeId, $details, $context, true);
    }

    /** @param object $details A Jane-generated PIM request model for the same pinned revision. */
    public function updateDetailsWithModelTyped(string $nodeId, object $details, string $context = 'en'): void
    {
        if ($nodeId === '' || $this->modelSerializer === null) {
            throw new \InvalidArgumentException('Provide a catalog node ID and generated PIM model serializer.');
        }
        $payload = $this->modelSerializer->toArray($details, 'pim', $this->revisionContext?->current());
        $this->pim->executeTyped('partialUpdateCatalogNode', ['id' => $nodeId], [
            'headers' => ['context' => $context], 'json' => $payload,
        ]);
    }

    /** Apply and checkpoint a catalog update so retries cannot repeat an uncertain write. */
    public function updateDetailsOnce(MigrationContext $migration, string $mutationName, string $nodeId, array $details, string $context = 'en'): string
    {
        $result = $migration->mutation($mutationName, 'pim', 'partialUpdateCatalogNode', [
            'node_id' => $nodeId, 'details' => $details, 'context' => $context,
        ], function () use ($nodeId, $details, $context): array {
            $this->updateDetailsTyped($nodeId, $details, $context);

            return ['node_id' => $nodeId];
        });

        return $result['node_id'];
    }

    private function updateDetailsOperation(string $nodeId, array $details, string $context, bool $typed): void
    {
        if ($nodeId === '' || $details === [] || array_diff(array_keys($details), ['name', 'description', 'number']) !== []) {
            throw new \InvalidArgumentException('Provide a catalog node ID and documented name, description or number fields.');
        }
        $options = ['headers' => ['context' => $context], 'json' => $details];
        if ($typed) {
            $this->pim->executeTyped('partialUpdateCatalogNode', ['id' => $nodeId], $options);

            return;
        }
        $this->pim->execute('partialUpdateCatalogNode', ['id' => $nodeId], $options);
    }
}
