<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Operations;

use Youwe\BluestonePim\Api\GeneratedOperationAdapter;
use Symfony\Contracts\HttpClient\ResponseInterface;

/** Named request facade for completeness-score operations in OpenAPI revision 2c19c082ed473e21. */
final class CompletenessScoreOperations extends GeneratedOperationAdapter
{
    public function addExcludedCategory(string $requirementId, string $categoryId): ResponseInterface
    {
        return $this->dispatch('addExcludedCategory', ['requirementId' => $requirementId, 'categoryId' => $categoryId], [], [], false, null, false, true, NULL);
    }

    public function addIncludedCategory(string $requirementId, string $categoryId): ResponseInterface
    {
        return $this->dispatch('addIncludedCategory', ['requirementId' => $requirementId, 'categoryId' => $categoryId], [], [], false, null, false, true, NULL);
    }

    public function addIncludedProductType(string $requirementId, string $productType): ResponseInterface
    {
        return $this->dispatch('addIncludedProductType', ['requirementId' => $requirementId, 'productType' => $productType], [], [], false, null, false, true, NULL);
    }

    public function count(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementCountRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('count', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function create(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementCreateRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('create', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function delete(string $requirementId): ResponseInterface
    {
        return $this->dispatch('delete', ['requirementId' => $requirementId], [], [], false, null, false, true, NULL);
    }

    public function getBulkValidationIssues(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\BulkValidationRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('getBulkValidationIssues', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function getCalculationStatus(string $context): ResponseInterface
    {
        return $this->dispatch('getCalculationStatus', ['context' => $context], [], [], false, null, false, true, NULL);
    }

    public function getCategoryScores(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\CategoryScoreRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('getCategoryScores', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function getDetailedScoresForSingleEntity(string $entityId, string $context): ResponseInterface
    {
        return $this->dispatch('getDetailedScoresForSingleEntity', ['entityId' => $entityId, 'context' => $context], [], [], false, null, false, true, NULL);
    }

    public function getRequirementsForSingleEntity(string $entityId, string $context): ResponseInterface
    {
        return $this->dispatch('getRequirementsForSingleEntity', ['entityId' => $entityId, 'context' => $context], [], [], false, null, false, true, NULL);
    }

    public function getScores(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ScoreRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('getScores', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function getValidationIssues(string $entityId, string $context): ResponseInterface
    {
        return $this->dispatch('getValidationIssues', ['entityId' => $entityId, 'context' => $context], [], [], false, null, false, true, NULL);
    }

    public function list(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementListRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('list', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function recalculateForEntity(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RecalculateScoreForEntityRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('recalculateForEntity', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function removeExcludedCategory(string $requirementId, string $categoryId): ResponseInterface
    {
        return $this->dispatch('removeExcludedCategory', ['requirementId' => $requirementId, 'categoryId' => $categoryId], [], [], false, null, false, true, NULL);
    }

    public function removeIncludedCategory(string $requirementId, string $categoryId): ResponseInterface
    {
        return $this->dispatch('removeIncludedCategory', ['requirementId' => $requirementId, 'categoryId' => $categoryId], [], [], false, null, false, true, NULL);
    }

    public function removeIncludedProductType(string $requirementId, string $productType): ResponseInterface
    {
        return $this->dispatch('removeIncludedProductType', ['requirementId' => $requirementId, 'productType' => $productType], [], [], false, null, false, true, NULL);
    }

    public function scoresInvalidation(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\InvalidateScoresRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('scoresInvalidation', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function startCalculation(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RecalculateScoreStandardRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('startCalculation', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function stopCalculation(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RecalculateScoreStandardRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('stopCalculation', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function update(string $requirementId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementUpdateRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('update', ['requirementId' => $requirementId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function validateDefinitionValue(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\DefinitionValueValidationRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('validateDefinitionValue', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function validateProductAttribute(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ProductAttributeValidationRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('validateProductAttribute', [], [], [], true, $requestBody, true, true, 'application/json');
    }

}
