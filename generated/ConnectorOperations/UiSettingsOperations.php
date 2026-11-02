<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\ConnectorOperations;

use Symfony\Contracts\HttpClient\ResponseInterface;

/** Operation-named connector methods generated from API revision 2c19c082ed473e21. */
trait UiSettingsOperations
{
    public function CreateColumnsSetupOfAnyUser(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\ColumnSetupAllCreateRequestBody $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('CreateColumnsSetupOfAnyUser', func_get_args());
    }

    public function DeleteColumnSetupByIdOfAnyUser(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('DeleteColumnSetupByIdOfAnyUser', func_get_args());
    }

    public function GetAllColumnSetups(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetAllColumnSetups', func_get_args());
    }

    public function GetColumnSetupByIdOfAnyUser(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetColumnSetupByIdOfAnyUser', func_get_args());
    }

    public function UpdateSetupByIdOfAnyUser(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\UpdateColumnSetupForAnyUserRequestBody $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('UpdateSetupByIdOfAnyUser', func_get_args());
    }

}
