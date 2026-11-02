<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\Normalizer\ValidatorTrait;
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
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AddProductVariantsRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AddProductVariantsRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AppendDictionaryValueRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AppendDictionaryValueRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AppendSelectValuesToProductsAttributeRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AppendSelectValuesToProductsAttributeRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AssetIdListViewsRequestDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AssetIdListViewsRequestDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AssetsFilteringViewsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AssetsFilteringViewsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AssignProductsToCategoryRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AssignProductsToCategoryRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AssociateProductAssetsRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AssociateProductAssetsRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionDeleteResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AttributeDefinitionDeleteResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionFilterDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AttributeDefinitionFilterDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionFilteringRequestDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AttributeDefinitionFilteringRequestDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionIdDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AttributeDefinitionIdDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionMetadataUpdateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AttributeDefinitionMetadataUpdateRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AttributeDefinitionResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionUpdateResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AttributeDefinitionUpdateResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeGroupRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AttributeGroupRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeGroupResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AttributeGroupResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeValidationData::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AttributeValidationDataNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeValidationIssue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AttributeValidationIssueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeValidationIssueDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AttributeValidationIssueDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeValidationRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AttributeValidationRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeValidationResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AttributeValidationResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeValueAll::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AttributeValueAllNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeValueFull::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AttributeValueFullNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeValueValues::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AttributeValueValuesNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributesFilteringViewsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\AttributesFilteringViewsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\BulkAssignGroupsRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\BulkAssignGroupsRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\BulkAttributeDefinitionPolicyRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\BulkAttributeDefinitionPolicyRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\BulkDeleteAttributeDefinitionPolicyRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\BulkDeleteAttributeDefinitionPolicyRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\BundlesFilteringViewsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\BundlesFilteringViewsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoriesFilteringViewsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoriesFilteringViewsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryAttributeBaseMetadataResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoryAttributeBaseMetadataResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryAttributeDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoryAttributeDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryAttributeMetadataResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoryAttributeMetadataResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryAttributeRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoryAttributeRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryBasicResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoryBasicResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryColumnAttributeRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoryColumnAttributeRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoryFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryFilteringRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoryFilteringRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryFilteringViewsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoryFilteringViewsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryFullResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoryFullResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryMatrixAttributeRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoryMatrixAttributeRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryMetadataUpdateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoryMetadataUpdateRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryProductRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoryProductRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryProductResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoryProductResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryReferenceRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoryReferenceRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryWithChildrenResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoryWithChildrenResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryWithCursorAndViewRequestDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoryWithCursorAndViewRequestDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryWithCursorAndViewResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoryWithCursorAndViewResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryWithCursorViewMetadata::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CategoryWithCursorViewMetadataNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ColumnAttributeDefinitionDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ColumnAttributeDefinitionDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ColumnAttributeValueAddRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ColumnAttributeValueAddRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ColumnAttributeValueDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ColumnAttributeValueDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ColumnRestrictionDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ColumnRestrictionDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ColumnRestrictionsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ColumnRestrictionsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CompoundAttributeDefinitionRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CompoundAttributeDefinitionRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CompoundAttributeDefinitionResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CompoundAttributeDefinitionResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CompoundAttributeSubDefinitionDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CompoundAttributeSubDefinitionDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ConflictingEntity::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ConflictingEntityNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ConnectionDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ConnectionDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CopyProductRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CopyProductRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CountDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CountDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CountableLong::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CountableLongNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CreateCategoryRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CreateCategoryRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CreateSimpleAttributeRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CreateSimpleAttributeRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CursorWithViewsRequestDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\CursorWithViewsRequestDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DeductDictionaryValueRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\DeductDictionaryValueRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DeductSelectValuesFromProductsAttributeRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\DeductSelectValuesFromProductsAttributeRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DeleteProductsAttributesBulkRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\DeleteProductsAttributesBulkRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DescriptionFilteringViewsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\DescriptionFilteringViewsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeCreateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\DictionaryAttributeCreateRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeDefinitionCreateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\DictionaryAttributeDefinitionCreateRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeDefinitionDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\DictionaryAttributeDefinitionDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeDefinitionUpdate::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\DictionaryAttributeDefinitionUpdateNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeFilterDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\DictionaryAttributeFilterDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeFilteringRequestDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\DictionaryAttributeFilteringRequestDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\DictionaryAttributeResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeUpdateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\DictionaryAttributeUpdateRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeValueAddRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\DictionaryAttributeValueAddRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryValueFilterDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\DictionaryValueFilterDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryValueFilterResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\DictionaryValueFilterResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryValueFilteringRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\DictionaryValueFilteringRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DuplicatedSelectValue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\DuplicatedSelectValueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ErrorDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ErrorDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ErrorResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ErrorResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\FilteringViewsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\FilteringViewsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\GroupedAttributeValuesDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\GroupedAttributeValuesDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\GroupsFilteringViewsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\GroupsFilteringViewsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\IdentifiableValueDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\IdentifiableValueDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\JobStatusResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\JobStatusResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\LabelReferenceRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\LabelReferenceRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\LabelsFilteringViewsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\LabelsFilteringViewsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\LimitExceededDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\LimitExceededDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableAttributeDefinitionResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableAttributeDefinitionResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableAttributeGroupResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableAttributeGroupResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableAttributeValueAll::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableAttributeValueAllNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableCategoryAttributeBaseMetadataResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableCategoryAttributeBaseMetadataResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableCategoryAttributeMetadataResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableCategoryAttributeMetadataResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableCategoryBasicResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableCategoryBasicResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableCategoryFullResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableCategoryFullResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableCategoryProductResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableCategoryProductResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableCompoundAttributeDefinitionResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableCompoundAttributeDefinitionResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableDictionaryAttributeResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableDictionaryAttributeResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableDictionaryValueFilterResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableDictionaryValueFilterResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableGroupedAttributeValuesDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableGroupedAttributeValuesDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableLocalCategoryAttributeDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableLocalCategoryAttributeDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListablePolicyDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListablePolicyDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableProductConnectionInfoResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableProductConnectionInfoResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableProductConnectionProductResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableProductConnectionProductResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableProductConnectionResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableProductConnectionResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableProductTemplateResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableProductTemplateResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableProductViewDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableProductViewDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableProductWithAttributeValuesResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableProductWithAttributeValuesResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableRelationResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableRelationResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableString::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableStringNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableWithCursorCategoryWithCursorAndViewResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableWithCursorCategoryWithCursorAndViewResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ListableWithCursorProductViewDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ListableWithCursorProductViewDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\LocalCategoryAttributeDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\LocalCategoryAttributeDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MatrixAttributeDefinitionDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\MatrixAttributeDefinitionDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MatrixAttributeValueAddRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\MatrixAttributeValueAddRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MatrixAttributeValueDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\MatrixAttributeValueDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MatrixRestrictionDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\MatrixRestrictionDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MatrixRestrictionsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\MatrixRestrictionsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MetadataFilteringViewsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\MetadataFilteringViewsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ModifyLabelInProductsRequestDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ModifyLabelInProductsRequestDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MoveCategoryRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\MoveCategoryRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MultiLanguageDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\MultiLanguageDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MultiLanguageListDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\MultiLanguageListDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PimVersion::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\PimVersionNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PolicyDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\PolicyDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PolicyRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\PolicyRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductAll::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductAllNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductArchiveStateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductArchiveStateRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductAttributeValue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductAttributeValueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductAttributeViewDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductAttributeViewDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductBundleDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductBundleDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductBundleRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductBundleRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductConnectionInfoResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductConnectionInfoResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductConnectionMetadata::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductConnectionMetadataNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductConnectionProductResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductConnectionProductResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductConnectionRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductConnectionRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductConnectionResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductConnectionResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductConnectionUpdateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductConnectionUpdateRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductConnectionsRemovalRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductConnectionsRemovalRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductConnectionsRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductConnectionsRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductCreateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductCreateRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductIdListViewsRequestDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductIdListViewsRequestDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductIdViewsRequestDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductIdViewsRequestDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductMetadataUpdateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductMetadataUpdateRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductMetadataViewDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductMetadataViewDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductNumberListViewsRequestDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductNumberListViewsRequestDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductOverviewDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductOverviewDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductTemplateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductTemplateRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductTemplateResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductTemplateResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductValidationIssueDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductValidationIssueDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductValidationIssueResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductValidationIssueResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductValidationRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductValidationRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductVariantAttributeDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductVariantAttributeDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductViewDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductViewDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductViewsByTypeRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductViewsByTypeRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductWithAttributeValuesResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ProductWithAttributeValuesResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PropertyUpdateInteger::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\PropertyUpdateIntegerNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PropertyUpdateString::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\PropertyUpdateStringNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RangeRestrictionsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\RangeRestrictionsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelatedCategoriesFilteringViewsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\RelatedCategoriesFilteringViewsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelatedProductsFilteringViewsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\RelatedProductsFilteringViewsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationDirectionUpdateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\RelationDirectionUpdateRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\RelationFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationFilteringRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\RelationFilteringRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationPartialUpdateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\RelationPartialUpdateRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\RelationRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\RelationResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RemoveLabelsFromProductRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\RemoveLabelsFromProductRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RenameAttributeGroupRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\RenameAttributeGroupRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RestrictionsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\RestrictionsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SaveProductsAttributesByIdsRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\SaveProductsAttributesByIdsRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SaveProductsVlaSettingsByIdsRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\SaveProductsVlaSettingsByIdsRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SelectAttributeValueDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\SelectAttributeValueDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SelectRestrictionsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\SelectRestrictionsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SelectValueIdDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\SelectValueIdDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SelectValueRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\SelectValueRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SetCategoryDictionaryAttributeValuesRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\SetCategoryDictionaryAttributeValuesRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SetDictionaryValuesRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\SetDictionaryValuesRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SetProductAssets::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\SetProductAssetsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SimpleAttributeDefinitionRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\SimpleAttributeDefinitionRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\TextRestrictionsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\TextRestrictionsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateAttributeDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\UpdateAttributeDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateAttributeGroupNumberRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\UpdateAttributeGroupNumberRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateCategoryAttributeRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\UpdateCategoryAttributeRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateCategoryColumnAttributeRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\UpdateCategoryColumnAttributeRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateCategoryMatrixAttributeRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\UpdateCategoryMatrixAttributeRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateCategoryRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\UpdateCategoryRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateContextAwareFlagRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\UpdateContextAwareFlagRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateDictionaryCategoryAttributeValuesRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\UpdateDictionaryCategoryAttributeValuesRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateSelectCategoryAttributeValuesRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\UpdateSelectCategoryAttributeValuesRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateSelectValueRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\UpdateSelectValueRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateSimpleCategoryAttributeValueRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\UpdateSimpleCategoryAttributeValueRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ValidableAttribute::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ValidableAttributeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ValueValidationIssue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ValueValidationIssueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ValueValidationRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ValueValidationRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ValueValidationResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\ValueValidationResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\VariantsFilteringViewsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer\VariantsFilteringViewsDtoNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\Normalizer\ReferenceNormalizer::class,
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