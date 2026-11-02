<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\AttributeHasValueRequirementParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\AttributeHasValueRequirementParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\AttributePercentageRequirementParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\AttributePercentageRequirementParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\AttributesInGroupHaveValuesRequirementParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\AttributesInGroupHaveValuesRequirementParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ImageDeepEtchRequirementParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\ImageDeepEtchRequirementParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ImageDensityRequirementParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\ImageDensityRequirementParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ImageResolutionRequirementParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\ImageResolutionRequirementParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\MinimumRelationConnectionsRequirementParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\MinimumRelationConnectionsRequirementParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\NumberOfMediaWithLabelRequirementParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\NumberOfMediaWithLabelRequirementParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ProductAddedToCategoryRequirementParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\ProductAddedToCategoryRequirementParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementUpdateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\RequirementUpdateRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementUpdateRequestParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\RequirementUpdateRequestParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\AttributeDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\AttributeDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ProductAttributeValidationRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\ProductAttributeValidationRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\AttributeDefinitionRequirementIssue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\AttributeDefinitionRequirementIssueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\AttributeDefinitionValidationDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\AttributeDefinitionValidationDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\AttributeValueValidationIssuesListResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\AttributeValueValidationIssuesListResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\AttributeValueValidationIssuesResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\AttributeValueValidationIssuesResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\CategoryAttributesValidationDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\CategoryAttributesValidationDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\CompoundAttributeDefinitionValidationDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\CompoundAttributeDefinitionValidationDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\DictionaryValueFilterValidationDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\DictionaryValueFilterValidationDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ValidationDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\ValidationDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\VariantAttributesValidationDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\VariantAttributesValidationDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\DefinitionValueValidationRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\DefinitionValueValidationRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\SimpleAttributeDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\SimpleAttributeDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\DefinitionValueValidationIssuesListResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\DefinitionValueValidationIssuesListResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\DefinitionValueValidationIssuesResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\DefinitionValueValidationIssuesResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\BulkValidationRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\BulkValidationRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\BulkValidationListResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\BulkValidationListResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\BulkValidationResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\BulkValidationResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ProductValidationIssuesResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\ProductValidationIssuesResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ScoreRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\ScoreRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ScoreListResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\ScoreListResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ScoreResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\ScoreResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\CategoryScoreRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\CategoryScoreRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\CategoryScoreListResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\CategoryScoreListResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\CategoryScoreResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\CategoryScoreResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RecalculateScoreStandardRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\RecalculateScoreStandardRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\CalculationResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\CalculationResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RecalculateScoreForEntityRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\RecalculateScoreForEntityRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\InvalidateScoresRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\InvalidateScoresRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementCreateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\RequirementCreateRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementListRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\RequirementListRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementListRequestSort::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\RequirementListRequestSortNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementSortingProperties::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\RequirementSortingPropertiesNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementListResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\RequirementListResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\RequirementResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementCountRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\RequirementCountRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementCountResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\RequirementCountResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ProductValidationIssuesListResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\ProductValidationIssuesListResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementResult::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\RequirementResultNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ScoreDetailedResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\ScoreDetailedResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ScoreCompletenessStateResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\ScoreCompletenessStateResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ErrorResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\ErrorResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ErrorDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\ErrorDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ConflictingEntity::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\ConflictingEntityNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\LimitExceededDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer\LimitExceededDetailsNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }
}