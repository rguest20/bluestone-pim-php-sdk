<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Operations;

use Youwe\BluestonePim\Api\GeneratedOperationAdapter;
use Symfony\Contracts\HttpClient\ResponseInterface;

/** Named request facade for ui-settings operations in OpenAPI revision 2c19c082ed473e21. */
final class UiSettingsOperations extends GeneratedOperationAdapter
{
    public function CreateColumnsSetupOfAnyUser(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\ColumnSetupAllCreateRequestBody $requestBody): ResponseInterface
    {
        return $this->dispatch('CreateColumnsSetupOfAnyUser', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function DeleteColumnSetupByIdOfAnyUser(string $id): ResponseInterface
    {
        return $this->dispatch('DeleteColumnSetupByIdOfAnyUser', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function GetAllColumnSetups(): ResponseInterface
    {
        return $this->dispatch('GetAllColumnSetups', [], [], [], false, null, false, true, NULL);
    }

    public function GetColumnSetupByIdOfAnyUser(string $id): ResponseInterface
    {
        return $this->dispatch('GetColumnSetupByIdOfAnyUser', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function UpdateSetupByIdOfAnyUser(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\UpdateColumnSetupForAnyUserRequestBody $requestBody): ResponseInterface
    {
        return $this->dispatch('UpdateSetupByIdOfAnyUser', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

}
