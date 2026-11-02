<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\ConnectorOperations;

use Symfony\Contracts\HttpClient\ResponseInterface;

/** Operation-named connector methods generated from API revision 2c19c082ed473e21. */
trait CompletenessScoreOperations
{
    public function addExcludedCategory(string $requirementId, string $categoryId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addExcludedCategory', func_get_args());
    }

    public function addIncludedCategory(string $requirementId, string $categoryId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addIncludedCategory', func_get_args());
    }

    public function addIncludedProductType(string $requirementId, string $productType): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addIncludedProductType', func_get_args());
    }

    public function count(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementCountRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('count', func_get_args());
    }

    public function create(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementCreateRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('create', func_get_args());
    }

    public function delete(string $requirementId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('delete', func_get_args());
    }

    public function getBulkValidationIssues(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\BulkValidationRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getBulkValidationIssues', func_get_args());
    }

    public function getCalculationStatus(string $context): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getCalculationStatus', func_get_args());
    }

    public function getCategoryScores(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\CategoryScoreRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getCategoryScores', func_get_args());
    }

    public function getDetailedScoresForSingleEntity(string $entityId, string $context): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getDetailedScoresForSingleEntity', func_get_args());
    }

    public function getRequirementsForSingleEntity(string $entityId, string $context): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getRequirementsForSingleEntity', func_get_args());
    }

    public function getScores(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ScoreRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getScores', func_get_args());
    }

    public function getValidationIssues(string $entityId, string $context): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getValidationIssues', func_get_args());
    }

    public function list(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementListRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('list', func_get_args());
    }

    public function recalculateForEntity(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RecalculateScoreForEntityRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('recalculateForEntity', func_get_args());
    }

    public function removeExcludedCategory(string $requirementId, string $categoryId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('removeExcludedCategory', func_get_args());
    }

    public function removeIncludedCategory(string $requirementId, string $categoryId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('removeIncludedCategory', func_get_args());
    }

    public function removeIncludedProductType(string $requirementId, string $productType): ResponseInterface
    {
        return $this->invokeGeneratedOperation('removeIncludedProductType', func_get_args());
    }

    public function scoresInvalidation(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\InvalidateScoresRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('scoresInvalidation', func_get_args());
    }

    public function startCalculation(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RecalculateScoreStandardRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('startCalculation', func_get_args());
    }

    public function stopCalculation(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RecalculateScoreStandardRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('stopCalculation', func_get_args());
    }

    public function update(string $requirementId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementUpdateRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('update', func_get_args());
    }

    public function validateDefinitionValue(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\DefinitionValueValidationRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('validateDefinitionValue', func_get_args());
    }

    public function validateProductAttribute(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ProductAttributeValidationRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('validateProductAttribute', func_get_args());
    }

}
