<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Operations;

use Youwe\BluestonePim\Api\GeneratedOperationAdapter;
use Symfony\Contracts\HttpClient\ResponseInterface;

/** Named request facade for media-bank operations in OpenAPI revision 2c19c082ed473e21. */
final class MediaBankOperations extends GeneratedOperationAdapter
{
    public function addAttributeToAssets(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\AddAttributeToAssetsByIdsRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('addAttributeToAssets', [], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function addAttributeToAssets_1(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\SaveAttributeToAssetsByIdsRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('addAttributeToAssets_1', [], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function addLabelsToAsset(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetsLabelsAttributeRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('addLabelsToAsset', ['id' => $id], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function appendAssetDictionaryAttributeValues(array $queryParameters = [], array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DictionaryAssetAttributeValuesRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('appendAssetDictionaryAttributeValues', [], $queryParameters, $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function appendSelectValues(array $queryParameters = [], array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\AppendSelectValuesToAssetsAttributeParams|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('appendSelectValues', [], $queryParameters, $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function assignAttributeToAsset(string $id, string $definitionId): ResponseInterface
    {
        return $this->dispatch('assignAttributeToAsset', ['id' => $id, 'definitionId' => $definitionId], [], [], false, null, false, true, NULL);
    }

    public function bulkAddAssetsLabels(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\BulkAssetsLabelUpdateRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('bulkAddAssetsLabels', [], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function bulkDeleteAssetsLabels(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\BulkAssetsLabelUpdateRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('bulkDeleteAssetsLabels', [], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function bulkUpdateAssetPublished(array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\BulkAssetPublishedUpdateRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('bulkUpdateAssetPublished', [], [], $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function checkStatuses(): ResponseInterface
    {
        return $this->dispatch('checkStatuses', [], [], [], false, null, false, true, NULL);
    }

    public function completeAsset(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('completeAsset', ['id' => $id], [], $headerParameters, false, null, false, true, NULL);
    }

    public function create(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DefaultMediaLabelRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('create', [], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function createAsset(array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\CreateUploadAssetRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('createAsset', [], [], $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function createType(string $type, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DefaultMediaLabelRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('createType', ['type' => $type], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function createVersionAsset(string $id, array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\CreateUploadAssetRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('createVersionAsset', ['id' => $id], [], $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function deductAssetDictionaryAttributeValues(array $queryParameters = [], array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DictionaryAssetAttributeValuesRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('deductAssetDictionaryAttributeValues', [], $queryParameters, $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function deductSelectValues(array $queryParameters = [], array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DeductSelectValuesToAssetsAttributeParams|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('deductSelectValues', [], $queryParameters, $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function delete(string $id): ResponseInterface
    {
        return $this->dispatch('delete', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function deleteAsset(string $id): ResponseInterface
    {
        return $this->dispatch('deleteAsset', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function deleteAssetAttributes(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DeleteProductsAttributesBulkRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('deleteAssetAttributes', [], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function deleteAssetUpload(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('deleteAssetUpload', ['id' => $id], [], $headerParameters, false, null, false, true, NULL);
    }

    public function deleteType(string $id, string $type): ResponseInterface
    {
        return $this->dispatch('deleteType', ['id' => $id, 'type' => $type], [], [], false, null, false, true, NULL);
    }

    public function describe(array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('describe', [], $queryParameters, [], false, null, false, true, NULL);
    }

    public function describeAsset(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('describeAsset', ['id' => $id], [], $headerParameters, false, null, false, true, NULL);
    }

    public function describeAssetUploads(array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('describeAssetUploads', [], [], $headerParameters, false, null, false, true, NULL);
    }

    public function describeAssetVersions(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('describeAssetVersions', ['id' => $id], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function duplicateAsset(string $id): ResponseInterface
    {
        return $this->dispatch('duplicateAsset', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function generateDownloadUrls(array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DownloadAssetsRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('generateDownloadUrls', [], [], $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function generateFixedLink(string $id, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('generateFixedLink', ['id' => $id], [], $headerParameters, false, null, false, true, NULL);
    }

    public function getAssetAttributes(string $id, array $queryParameters = [], array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('getAssetAttributes', ['id' => $id], $queryParameters, $headerParameters, false, null, false, true, NULL);
    }

    public function getAssetViewsById(string $id, array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\WorkingAssetViewsRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('getAssetViewsById', ['id' => $id], [], $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function getLabelById(string $id): ResponseInterface
    {
        return $this->dispatch('getLabelById', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function list(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\ListMediaLabelRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('list', [], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function listAssetViewsByIds(array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\WorkingAssetsViewsByIdsRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('listAssetViewsByIds', [], [], $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function listAssetsByIds(array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DescribeWorkingAssetsByIdsSearchRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('listAssetsByIds', [], [], $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function listAssetsByNumbers(array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\WorkingAssetsByNumbersRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('listAssetsByNumbers', [], [], $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function listWorkingAssetsWithCursor(array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\WorkingAssetCursorRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('listWorkingAssetsWithCursor', [], [], $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function presentVersion(): ResponseInterface
    {
        return $this->dispatch('presentVersion', [], [], [], false, null, false, true, NULL);
    }

    public function removeAssetsByIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\BulkDeleteAssetsByIdsRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('removeAssetsByIds', [], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function removeLabelFromAsset(string $id, string $labelId): ResponseInterface
    {
        return $this->dispatch('removeLabelFromAsset', ['id' => $id, 'labelId' => $labelId], [], [], false, null, false, true, NULL);
    }

    public function removeListOfAssets(array $queryParameters): ResponseInterface
    {
        return $this->dispatch('removeListOfAssets', [], $queryParameters, [], false, null, false, true, NULL);
    }

    public function revertAsset(string $id, string $versionId, array $headerParameters = []): ResponseInterface
    {
        return $this->dispatch('revertAsset', ['id' => $id, 'versionId' => $versionId], [], $headerParameters, false, null, false, true, NULL);
    }

    public function setLabelsToAsset(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetsLabelsAttributeRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('setLabelsToAsset', ['id' => $id], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function unassignAttributeFromAsset(string $id, string $definitionId): ResponseInterface
    {
        return $this->dispatch('unassignAttributeFromAsset', ['id' => $id, 'definitionId' => $definitionId], [], [], false, null, false, true, NULL);
    }

    public function update(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DefaultMediaLabelRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('update', ['id' => $id], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function updateAsset(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateUploadAssetRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('updateAsset', ['id' => $id], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function updateAssetAlphaChannel(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetAttributeRequestBoolean|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('updateAssetAlphaChannel', ['id' => $id], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function updateAssetClippingPath(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetAttributeRequestBoolean|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('updateAssetClippingPath', ['id' => $id], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function updateAssetDescription(string $id, array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetAttributeRequestString|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('updateAssetDescription', ['id' => $id], [], $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function updateAssetDictionaryAttributeValues(string $id, string $definitionId, array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateDictionaryAssetAttributeValuesRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('updateAssetDictionaryAttributeValues', ['id' => $id, 'definitionId' => $definitionId], [], $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function updateAssetInternal(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetAttributeRequestBoolean|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('updateAssetInternal', ['id' => $id], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function updateAssetName(string $id, array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetAttributeRequestString|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('updateAssetName', ['id' => $id], [], $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function updateAssetNumber(string $id, array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetAttributeRequestString|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('updateAssetNumber', ['id' => $id], [], $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function updateAssetPublished(string $id, array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetAttributeRequestBoolean|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('updateAssetPublished', ['id' => $id], [], $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function updateAssetSelectAttributeValues(string $id, string $definitionId, array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateSelectAssetAttributeValuesRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('updateAssetSelectAttributeValues', ['id' => $id, 'definitionId' => $definitionId], [], $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function updateAssetSimpleAttributeValue(string $id, string $definitionId, array $headerParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateSimpleAssetAttributeValueRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('updateAssetSimpleAttributeValue', ['id' => $id, 'definitionId' => $definitionId], [], $headerParameters, $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function updateAssetsAttribute(array $queryParameters = [], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\SaveAttributeToAssetsByIdsRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('updateAssetsAttribute', [], $queryParameters, [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function updateType(string $id, string $type, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DefaultMediaLabelRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('updateType', ['id' => $id, 'type' => $type], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

}
