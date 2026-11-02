<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Operations;

use Youwe\BluestonePim\Api\GeneratedOperationAdapter;
use Symfony\Contracts\HttpClient\ResponseInterface;

/** Named request facade for global-settings operations in OpenAPI revision 2c19c082ed473e21. */
final class GlobalSettingsOperations extends GeneratedOperationAdapter
{
    public function archive(string $id): ResponseInterface
    {
        return $this->dispatch('archive', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function create(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\ContextRequestDto $requestBody): ResponseInterface
    {
        return $this->dispatch('create', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function createFilter(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterCreateRequestDto $requestBody): ResponseInterface
    {
        return $this->dispatch('createFilter', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function deleteFilter(string $id): ResponseInterface
    {
        return $this->dispatch('deleteFilter', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function deleteFilterFromAll(string $id): ResponseInterface
    {
        return $this->dispatch('deleteFilterFromAll', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function find(array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('find', [], $queryParameters, [], false, null, false, true, NULL);
    }

    public function findAll(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterSearchRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('findAll', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function findByNames(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FindContextsByNamesRequest $requestBody, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('findByNames', [], $queryParameters, [], true, $requestBody, true, true, 'application/json');
    }

    public function findFilter(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterSearchRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('findFilter', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function get(string $id): ResponseInterface
    {
        return $this->dispatch('get', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function getFilter(string $id): ResponseInterface
    {
        return $this->dispatch('getFilter', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function getPermissions(string $id): ResponseInterface
    {
        return $this->dispatch('getPermissions', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function grantPermission(string $id, string $userId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterPermissionUpdateRequestDto $requestBody): ResponseInterface
    {
        return $this->dispatch('grantPermission', ['id' => $id, 'userId' => $userId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function revokePermission(string $id, string $userId): ResponseInterface
    {
        return $this->dispatch('revokePermission', ['id' => $id, 'userId' => $userId], [], [], false, null, false, true, NULL);
    }

    public function update(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\ContextRequestDto $requestBody): ResponseInterface
    {
        return $this->dispatch('update', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function updateFilter(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterUpdateRequestDto $requestBody): ResponseInterface
    {
        return $this->dispatch('updateFilter', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function updatePublicFilter(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterUpdateRequestDto $requestBody): ResponseInterface
    {
        return $this->dispatch('updatePublicFilter', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

}
