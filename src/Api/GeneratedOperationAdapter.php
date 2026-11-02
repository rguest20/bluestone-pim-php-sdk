<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Api;

use Youwe\BluestonePim\Api\Connector\AbstractConnector;
use Symfony\Contracts\HttpClient\ResponseInterface;

/** Base class for revision-specific operation facades generated from OpenAPI documents. */
abstract class GeneratedOperationAdapter
{
    public function __construct(
        private readonly AbstractConnector $connector,
        private readonly OpenApiModelSerializer $models,
        private readonly ApiRevisionContext $revisionContext,
        private readonly OperationCatalog $catalog,
        private readonly string $component,
        private readonly string $revision,
    ) {
    }

    protected function dispatch(string $operationId, array $pathParameters, array $queryParameters, array $headerParameters,
        bool $hasBody, mixed $body, bool $jsonBody, bool $validateContract, ?string $contentType = null): ResponseInterface
    {
        $selected = $this->revisionContext->current();
        if ($selected === '') {
            throw new \LogicException('Generated operation adapters are not available for legacy migrations.');
        }
        if (($selected ?? $this->catalog->activeRevision()) !== $this->revision) {
            throw new \LogicException('Generated operation adapter does not match the migration API revision.');
        }

        $options = [];
        if ($queryParameters !== []) {
            $options['query'] = $queryParameters;
        }
        if ($headerParameters !== []) {
            $options['headers'] = $headerParameters;
        }
        if ($hasBody) {
            if ($jsonBody) {
                $options['json'] = $this->models->toValue($body, $this->component, $this->revision);
            } else {
                if ($contentType !== null && !isset($options['headers']['Content-Type'])) {
                    $options['headers']['Content-Type'] = $contentType;
                }
                $options['body'] = $body;
            }
        }

        return $validateContract
            ? $this->connector->executeTyped($operationId, $pathParameters, $options)
            : $this->connector->execute($operationId, $pathParameters, $options);
    }
}
