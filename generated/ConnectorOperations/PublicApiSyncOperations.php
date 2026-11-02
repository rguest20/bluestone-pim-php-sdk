<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\ConnectorOperations;

use Symfony\Contracts\HttpClient\ResponseInterface;

/** Operation-named connector methods generated from API revision 2c19c082ed473e21. */
trait PublicApiSyncOperations
{
    public function addProductsToSession(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\AddProductsToSessionRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addProductsToSession', func_get_args());
    }

    public function cancelSession(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('cancelSession', func_get_args());
    }

    public function changeProductState(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductStateChangeRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('changeProductState', func_get_args());
    }

    public function closeSession(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('closeSession', func_get_args());
    }

    public function createSession(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\SyncSessionRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createSession', func_get_args());
    }

    public function createSessionReportAssetFile(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\CreateSessionReportRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createSessionReportAssetFile', func_get_args());
    }

    public function createSessionReportFile(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\CreateSessionReportRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createSessionReportFile', func_get_args());
    }

    public function createSessionReportProductsFile(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\CreateSessionReportRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createSessionReportProductsFile', func_get_args());
    }

    public function getAssetIdsByIssueType(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\AssetsByIssueTypeCursorRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getAssetIdsByIssueType', func_get_args());
    }

    public function getProductIdsByIssueType(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductsByIssueTypeCursorRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getProductIdsByIssueType', func_get_args());
    }

    public function getSession(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getSession', func_get_args());
    }

    public function getSessionAssetsIssues(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getSessionAssetsIssues', func_get_args());
    }

    public function getSessionEntitiesIssues(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getSessionEntitiesIssues', func_get_args());
    }

    public function getSessionProductsIssues(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getSessionProductsIssues', func_get_args());
    }

    public function getSessionReport(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getSessionReport', func_get_args());
    }

    public function getSessionReportAssetLink(string $id, array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getSessionReportAssetLink', func_get_args());
    }

    public function getSessionReportLink(string $id, array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getSessionReportLink', func_get_args());
    }

    public function getSessionReportProductsLink(string $id, array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getSessionReportProductsLink', func_get_args());
    }

    public function searchCategoryStateByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\CategoryStateSearchListRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('searchCategoryStateByIds', func_get_args());
    }

    public function searchProductStateByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductStateSearchListRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('searchProductStateByIds', func_get_args());
    }

}
