<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Service;

use Youwe\BluestonePim\Api\Connector\PimConnector;
use Youwe\BluestonePim\Migration\MigrationContext;

/** Creates uniquely numbered attribute definitions and saves their returned resource IDs. */
final readonly class AttributeDefinitionMutationRunner
{
    public function __construct(private PimConnector $pim)
    {
    }

    public function create(MigrationContext $migration, string $mutationName, string $number, array $request, string $context = 'en'): string
    {
        if ($number === '' || ($request['number'] ?? null) !== $number || !isset($request['name']) || !is_string($request['name']) || $request['name'] === '') {
            throw new \InvalidArgumentException('Attribute definition creation requires a stable unique number that matches the request and a non-empty name.');
        }

        $result = $migration->mutation($mutationName, 'pim', 'createAttributeDefinition', $request, function () use ($request, $context): array {
            $response = $this->pim->executeTyped('createAttributeDefinition', [], ['headers' => ['context' => $context], 'json' => $request]);
            $resourceId = $response->getHeaders(false)['resource-id'][0] ?? '';
            if (!is_string($resourceId) || $resourceId === '') {
                throw new \UnexpectedValueException('Bluestone did not return an attribute definition resource ID.');
            }

            return ['definition_id' => $resourceId, 'number' => $request['number']];
        });

        return $result['definition_id'];
    }
}
