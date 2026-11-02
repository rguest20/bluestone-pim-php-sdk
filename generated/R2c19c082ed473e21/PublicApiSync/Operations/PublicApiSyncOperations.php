<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Operations;

use Youwe\BluestonePim\Api\GeneratedOperationAdapter;
use Symfony\Contracts\HttpClient\ResponseInterface;

/** Named request facade for public-api-sync operations in OpenAPI revision 2c19c082ed473e21. */
final class PublicApiSyncOperations extends GeneratedOperationAdapter
{
    public function addProductsToSession(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\AddProductsToSessionRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('addProductsToSession', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function cancelSession(string $id): ResponseInterface
    {
        return $this->dispatch('cancelSession', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function changeProductState(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductStateChangeRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('changeProductState', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function closeSession(string $id): ResponseInterface
    {
        return $this->dispatch('closeSession', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function createSession(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\SyncSessionRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('createSession', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function createSessionReportAssetFile(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\CreateSessionReportRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('createSessionReportAssetFile', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function createSessionReportFile(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\CreateSessionReportRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('createSessionReportFile', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function createSessionReportProductsFile(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\CreateSessionReportRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('createSessionReportProductsFile', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function getAssetIdsByIssueType(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\AssetsByIssueTypeCursorRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('getAssetIdsByIssueType', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function getProductIdsByIssueType(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductsByIssueTypeCursorRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('getProductIdsByIssueType', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function getSession(string $id): ResponseInterface
    {
        return $this->dispatch('getSession', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function getSessionAssetsIssues(string $id): ResponseInterface
    {
        return $this->dispatch('getSessionAssetsIssues', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function getSessionEntitiesIssues(string $id): ResponseInterface
    {
        return $this->dispatch('getSessionEntitiesIssues', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function getSessionProductsIssues(string $id): ResponseInterface
    {
        return $this->dispatch('getSessionProductsIssues', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function getSessionReport(string $id): ResponseInterface
    {
        return $this->dispatch('getSessionReport', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function getSessionReportAssetLink(string $id, array $queryParameters): ResponseInterface
    {
        return $this->dispatch('getSessionReportAssetLink', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function getSessionReportLink(string $id, array $queryParameters): ResponseInterface
    {
        return $this->dispatch('getSessionReportLink', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function getSessionReportProductsLink(string $id, array $queryParameters): ResponseInterface
    {
        return $this->dispatch('getSessionReportProductsLink', ['id' => $id], $queryParameters, [], false, null, false, true, NULL);
    }

    public function searchCategoryStateByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\CategoryStateSearchListRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('searchCategoryStateByIds', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function searchProductStateByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductStateSearchListRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('searchProductStateByIds', [], [], [], true, $requestBody, true, true, 'application/json');
    }

}
