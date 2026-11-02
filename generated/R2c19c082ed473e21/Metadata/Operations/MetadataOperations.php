<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Operations;

use Youwe\BluestonePim\Api\GeneratedOperationAdapter;
use Symfony\Contracts\HttpClient\ResponseInterface;

/** Named request facade for metadata operations in OpenAPI revision 2c19c082ed473e21. */
final class MetadataOperations extends GeneratedOperationAdapter
{
    public function deleteMetadata(string $providerId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\DeleteMetadataRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('deleteMetadata', ['providerId' => $providerId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function deleteProviderMetadataByIds(string $providerId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\DeleteProviderMetadataByIdsRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('deleteProviderMetadataByIds', ['providerId' => $providerId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function findProviderMetadataWithCursorAndViewsByProviderId(string $providerId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\MetadataWithCursorAndViewsByProviderIdRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('findProviderMetadataWithCursorAndViewsByProviderId', ['providerId' => $providerId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function getMetadataForEntities(string $providerId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\GetMetadataForEntitiesRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getMetadataForEntities', ['providerId' => $providerId], [], $headerParameters, true, $requestBody, true, true, 'application/json');
    }

    public function getRegisteredProviders(): ResponseInterface
    {
        return $this->dispatch('getRegisteredProviders', [], [], [], false, null, false, true, NULL);
    }

    public function listProviders(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\ListProviderRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('listProviders', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function upsertMetadata(string $providerId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\UpsertMetadataRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('upsertMetadata', ['providerId' => $providerId], [], [], true, $requestBody, true, true, 'application/json');
    }

}
