<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\ConnectorOperations;

use Symfony\Contracts\HttpClient\ResponseInterface;

/** Operation-named connector methods generated from API revision 2c19c082ed473e21. */
trait MediaBankOperations
{
    public function addAttributeToAssets(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\AddAttributeToAssetsByIdsRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addAttributeToAssets', func_get_args());
    }

    public function addAttributeToAssets_1(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\SaveAttributeToAssetsByIdsRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addAttributeToAssets_1', func_get_args());
    }

    public function addLabelsToAsset(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetsLabelsAttributeRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addLabelsToAsset', func_get_args());
    }

    public function appendAssetDictionaryAttributeValues(array $queryParameters = [], array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DictionaryAssetAttributeValuesRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('appendAssetDictionaryAttributeValues', func_get_args());
    }

    public function appendSelectValues(array $queryParameters = [], array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\AppendSelectValuesToAssetsAttributeParams|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('appendSelectValues', func_get_args());
    }

    public function assignAttributeToAsset(string $id, string $definitionId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('assignAttributeToAsset', func_get_args());
    }

    public function bulkAddAssetsLabels(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\BulkAssetsLabelUpdateRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('bulkAddAssetsLabels', func_get_args());
    }

    public function bulkDeleteAssetsLabels(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\BulkAssetsLabelUpdateRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('bulkDeleteAssetsLabels', func_get_args());
    }

    public function bulkUpdateAssetPublished(array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\BulkAssetPublishedUpdateRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('bulkUpdateAssetPublished', func_get_args());
    }

    public function checkStatuses(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('checkStatuses', func_get_args());
    }

    public function completeAsset(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('completeAsset', func_get_args());
    }

    public function create(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DefaultMediaLabelRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('create', func_get_args());
    }

    public function createAsset(array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\CreateUploadAssetRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createAsset', func_get_args());
    }

    public function createType(string $type, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DefaultMediaLabelRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createType', func_get_args());
    }

    public function createVersionAsset(string $id, array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\CreateUploadAssetRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createVersionAsset', func_get_args());
    }

    public function deductAssetDictionaryAttributeValues(array $queryParameters = [], array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DictionaryAssetAttributeValuesRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deductAssetDictionaryAttributeValues', func_get_args());
    }

    public function deductSelectValues(array $queryParameters = [], array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DeductSelectValuesToAssetsAttributeParams|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deductSelectValues', func_get_args());
    }

    public function delete(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('delete', func_get_args());
    }

    public function deleteAsset(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteAsset', func_get_args());
    }

    public function deleteAssetAttributes(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DeleteProductsAttributesBulkRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteAssetAttributes', func_get_args());
    }

    public function deleteAssetUpload(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteAssetUpload', func_get_args());
    }

    public function deleteType(string $id, string $type): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteType', func_get_args());
    }

    public function describe(array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('describe', func_get_args());
    }

    public function describeAsset(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('describeAsset', func_get_args());
    }

    public function describeAssetUploads(array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('describeAssetUploads', func_get_args());
    }

    public function describeAssetVersions(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('describeAssetVersions', func_get_args());
    }

    public function duplicateAsset(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('duplicateAsset', func_get_args());
    }

    public function generateDownloadUrls(array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DownloadAssetsRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('generateDownloadUrls', func_get_args());
    }

    public function generateFixedLink(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('generateFixedLink', func_get_args());
    }

    public function getAssetAttributes(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getAssetAttributes', func_get_args());
    }

    public function getAssetViewsById(string $id, array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\WorkingAssetViewsRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getAssetViewsById', func_get_args());
    }

    public function getLabelById(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getLabelById', func_get_args());
    }

    public function list(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\ListMediaLabelRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('list', func_get_args());
    }

    public function listAssetViewsByIds(array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\WorkingAssetsViewsByIdsRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('listAssetViewsByIds', func_get_args());
    }

    public function listAssetsByIds(array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DescribeWorkingAssetsByIdsSearchRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('listAssetsByIds', func_get_args());
    }

    public function listAssetsByNumbers(array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\WorkingAssetsByNumbersRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('listAssetsByNumbers', func_get_args());
    }

    public function listWorkingAssetsWithCursor(array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\WorkingAssetCursorRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('listWorkingAssetsWithCursor', func_get_args());
    }

    public function presentVersion(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('presentVersion', func_get_args());
    }

    public function removeAssetsByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\BulkDeleteAssetsByIdsRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('removeAssetsByIds', func_get_args());
    }

    public function removeLabelFromAsset(string $id, string $labelId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('removeLabelFromAsset', func_get_args());
    }

    public function removeListOfAssets(array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('removeListOfAssets', func_get_args());
    }

    public function revertAsset(string $id, string $versionId, array $headerParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('revertAsset', func_get_args());
    }

    public function setLabelsToAsset(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetsLabelsAttributeRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('setLabelsToAsset', func_get_args());
    }

    public function unassignAttributeFromAsset(string $id, string $definitionId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('unassignAttributeFromAsset', func_get_args());
    }

    public function update(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DefaultMediaLabelRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('update', func_get_args());
    }

    public function updateAsset(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateUploadAssetRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateAsset', func_get_args());
    }

    public function updateAssetAlphaChannel(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetAttributeRequestBoolean|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateAssetAlphaChannel', func_get_args());
    }

    public function updateAssetClippingPath(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetAttributeRequestBoolean|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateAssetClippingPath', func_get_args());
    }

    public function updateAssetDescription(string $id, array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetAttributeRequestString|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateAssetDescription', func_get_args());
    }

    public function updateAssetDictionaryAttributeValues(string $id, string $definitionId, array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateDictionaryAssetAttributeValuesRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateAssetDictionaryAttributeValues', func_get_args());
    }

    public function updateAssetInternal(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetAttributeRequestBoolean|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateAssetInternal', func_get_args());
    }

    public function updateAssetName(string $id, array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetAttributeRequestString|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateAssetName', func_get_args());
    }

    public function updateAssetNumber(string $id, array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetAttributeRequestString|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateAssetNumber', func_get_args());
    }

    public function updateAssetPublished(string $id, array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetAttributeRequestBoolean|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateAssetPublished', func_get_args());
    }

    public function updateAssetSelectAttributeValues(string $id, string $definitionId, array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateSelectAssetAttributeValuesRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateAssetSelectAttributeValues', func_get_args());
    }

    public function updateAssetSimpleAttributeValue(string $id, string $definitionId, array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateSimpleAssetAttributeValueRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateAssetSimpleAttributeValue', func_get_args());
    }

    public function updateAssetsAttribute(array $queryParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\SaveAttributeToAssetsByIdsRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateAssetsAttribute', func_get_args());
    }

    public function updateType(string $id, string $type, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DefaultMediaLabelRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateType', func_get_args());
    }

}
