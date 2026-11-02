<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\ConnectorOperations;

use Symfony\Contracts\HttpClient\ResponseInterface;

/** Operation-named connector methods generated from API revision 2c19c082ed473e21. */
trait GlobalSettingsOperations
{
    public function archive(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('archive', func_get_args());
    }

    public function create(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\ContextRequestDto $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('create', func_get_args());
    }

    public function createFilter(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterCreateRequestDto $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createFilter', func_get_args());
    }

    public function deleteFilter(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteFilter', func_get_args());
    }

    public function deleteFilterFromAll(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteFilterFromAll', func_get_args());
    }

    public function find(array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('find', func_get_args());
    }

    public function findAll(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterSearchRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findAll', func_get_args());
    }

    public function findByNames(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FindContextsByNamesRequest $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findByNames', func_get_args());
    }

    public function findFilter(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterSearchRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findFilter', func_get_args());
    }

    public function get(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('get', func_get_args());
    }

    public function getFilter(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getFilter', func_get_args());
    }

    public function getPermissions(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getPermissions', func_get_args());
    }

    public function grantPermission(string $id, string $userId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterPermissionUpdateRequestDto $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('grantPermission', func_get_args());
    }

    public function revokePermission(string $id, string $userId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('revokePermission', func_get_args());
    }

    public function update(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\ContextRequestDto $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('update', func_get_args());
    }

    public function updateFilter(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterUpdateRequestDto $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateFilter', func_get_args());
    }

    public function updatePublicFilter(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterUpdateRequestDto $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updatePublicFilter', func_get_args());
    }

}
