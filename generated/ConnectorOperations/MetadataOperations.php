<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\ConnectorOperations;

use Symfony\Contracts\HttpClient\ResponseInterface;

/** Operation-named connector methods generated from API revision 2c19c082ed473e21. */
trait MetadataOperations
{
    public function deleteMetadata(string $providerId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\DeleteMetadataRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteMetadata', func_get_args());
    }

    public function deleteProviderMetadataByIds(string $providerId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\DeleteProviderMetadataByIdsRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteProviderMetadataByIds', func_get_args());
    }

    public function findProviderMetadataWithCursorAndViewsByProviderId(string $providerId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\MetadataWithCursorAndViewsByProviderIdRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findProviderMetadataWithCursorAndViewsByProviderId', func_get_args());
    }

    public function getMetadataForEntities(string $providerId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\GetMetadataForEntitiesRequest $requestBody, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getMetadataForEntities', func_get_args());
    }

    public function getRegisteredProviders(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getRegisteredProviders', func_get_args());
    }

    public function listProviders(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\ListProviderRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('listProviders', func_get_args());
    }

    public function upsertMetadata(string $providerId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model\UpsertMetadataRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('upsertMetadata', func_get_args());
    }

}
