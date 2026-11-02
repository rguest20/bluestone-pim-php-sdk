<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\Normalizer\ValidatorTrait;
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
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\AssetFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\AssetFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\AssetLabelsFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\AssetLabelsFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\AttributeFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\AttributeFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\BaseFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\BaseFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\CategoryFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\CategoryFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductCreateDateFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\ProductCreateDateFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductUpdateDateFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\ProductUpdateDateFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\RelativeDateFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\RelativeDateFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\LabelFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\LabelFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PublishStateFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\PublishStateFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ValidationStatusFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\ValidationStatusFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\RelationsFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\RelationsFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ScoreFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\ScoreFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ScoreRequirementResultFilters::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\ScoreRequirementResultFiltersNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\TypeFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\TypeFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\TypesFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\TypesFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\OutOfSyncFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\OutOfSyncFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\LastSyncStateFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\LastSyncStateFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\VariantFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\VariantFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\BundleFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\BundleFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PureProductFilters::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\PureProductFiltersNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryGroup::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryGroupNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermIdIs::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermIdIsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermIdIn::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermIdInNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermNameIs::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermNameIsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermNameContains::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermNameContainsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermNameStartsWith::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermNameStartsWithNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermNameEndsWith::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermNameEndsWithNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermNameDefined::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermNameDefinedNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermNumberContains::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermNumberContainsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermNumberStartsWith::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermNumberStartsWithNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermNumberEndsWith::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermNumberEndsWithNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermNumberIs::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermNumberIsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermNumberIn::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermNumberInNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermDescriptionContains::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermDescriptionContainsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermDescriptionStartsWith::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermDescriptionStartsWithNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermDescriptionEndsWith::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermDescriptionEndsWithNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermDescriptionIs::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermDescriptionIsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermDescriptionDefined::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermDescriptionDefinedNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermStateIn::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermStateInNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermProductTypeIn::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermProductTypeInNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermValidationStatusIs::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermValidationStatusIsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermPapiOutOfSyncIs::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermPapiOutOfSyncIsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermLastModifiedByIs::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermLastModifiedByIsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermLastModifiedByCurrentUser::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermLastModifiedByCurrentUserNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermLastSyncStateIs::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermLastSyncStateIsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermCreatedDateBetween::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermCreatedDateBetweenNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermUpdatedDateBetween::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermUpdatedDateBetweenNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermProductLabelsDoesHaveAll::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermProductLabelsDoesHaveAllNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermProductLabelsDoesHaveSome::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermProductLabelsDoesHaveSomeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermProductLabelsDoesHaveNone::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermProductLabelsDoesHaveNoneNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermCategoryDoesHaveSome::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermCategoryDoesHaveSomeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermCategoryDoesHaveSomeWithChildren::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermCategoryDoesHaveSomeWithChildrenNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermCategoryDoesHaveAll::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermCategoryDoesHaveAllNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermCategoryDoesHaveAllWithChildren::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermCategoryDoesHaveAllWithChildrenNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermCategoryDoesHaveNone::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermCategoryDoesHaveNoneNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeTextNonValue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeTextNonValueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeTextContains::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeTextContainsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeTextIn::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeTextInNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeTextEquals::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeTextEqualsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeTextStartsWith::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeTextStartsWithNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeTextEndsWith::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeTextEndsWithNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeIntegerNonValue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeIntegerNonValueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeIntegerOpenedRange::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeIntegerOpenedRangeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeIntegerClosedRange::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeIntegerClosedRangeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeIntegerEquals::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeIntegerEqualsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeIntegerSubset::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeIntegerSubsetNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeIntegerDoesHaveSome::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeIntegerDoesHaveSomeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDecimalNonValue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeDecimalNonValueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDecimalOpenedRange::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeDecimalOpenedRangeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDecimalClosedRange::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeDecimalClosedRangeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDecimalEquals::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeDecimalEqualsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDecimalSubset::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeDecimalSubsetNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDecimalDoesHaveSome::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeDecimalDoesHaveSomeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeFormattedTextNonValue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeFormattedTextNonValueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeFormattedTextContains::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeFormattedTextContainsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeFormattedTextStartWith::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeFormattedTextStartWithNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeFormattedTextEndsWith::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeFormattedTextEndsWithNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeFormattedTextEquals::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeFormattedTextEqualsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributePatternNonValue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributePatternNonValueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributePatternContains::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributePatternContainsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributePatternEquals::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributePatternEqualsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeMultilineNonValue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeMultilineNonValueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeMultilineContains::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeMultilineContainsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeMultilineStartsWith::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeMultilineStartsWithNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeMultilineEndsWith::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeMultilineEndsWithNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeMultilineEquals::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeMultilineEqualsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeMultilineIn::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeMultilineInNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeBooleanNonValue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeBooleanNonValueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeBooleanEquals::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeBooleanEqualsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeMatrixAssigned::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeMatrixAssignedNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeColumnAssigned::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeColumnAssignedNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDateNonValue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeDateNonValueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDateBetween::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeDateBetweenNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDateEquals::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeDateEqualsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDateTimeNonValue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeDateTimeNonValueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDateTimeBetween::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeDateTimeBetweenNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDateTimeEquals::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeDateTimeEqualsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeTimeNonValue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeTimeNonValueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeTimeClosedRange::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeTimeClosedRangeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeTimeEquals::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeTimeEqualsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDictionaryAssigned::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeDictionaryAssignedNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDictionaryDefined::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeDictionaryDefinedNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDictionaryDoesHaveAll::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeDictionaryDoesHaveAllNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDictionaryDoesHaveSome::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeDictionaryDoesHaveSomeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDictionaryIs::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeDictionaryIsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeSingleSelectAssigned::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeSingleSelectAssignedNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeSingleSelectDefined::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeSingleSelectDefinedNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeSingleSelectDoesHaveSome::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeSingleSelectDoesHaveSomeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeSingleSelectIs::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeSingleSelectIsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeMultiselectAssigned::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeMultiselectAssignedNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeMultiselectDefined::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeMultiselectDefinedNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeMultiselectDoesHaveAll::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeMultiselectDoesHaveAllNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeMultiselectDoesHaveSome::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeMultiselectDoesHaveSomeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeMultiselectIs::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeMultiselectIsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAssignedAssetsMoreThan::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAssignedAssetsMoreThanNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAssignedAssetsLessThan::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAssignedAssetsLessThanNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAssignedAssetsAny::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAssignedAssetsAnyNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAssignedAssetsNone::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAssignedAssetsNoneNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAssignedVariantsMoreThan::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAssignedVariantsMoreThanNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAssignedVariantsLessThan::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAssignedVariantsLessThanNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAssignedVariantsAny::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAssignedVariantsAnyNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAssignedVariantsNone::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAssignedVariantsNoneNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAssignedAssetLabelsSome::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAssignedAssetLabelsSomeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermRelationsBaseIs::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermRelationsBaseIsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermRelationsBaseHaveWithProducts::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermRelationsBaseHaveWithProductsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermRelationsBaseNoRelations::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermRelationsBaseNoRelationsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermCompletenessRequirementsNotMeetAll::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermCompletenessRequirementsNotMeetAllNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermCompletenessScoreBetween::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermCompletenessScoreBetweenNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermBundleMoreThan::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermBundleMoreThanNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermBundleLessThan::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermBundleLessThanNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermBundleAny::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermBundleAnyNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermBundleNone::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermBundleNoneNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermCreatedDateRelative::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermCreatedDateRelativeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermUpdatedDateRelative::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermUpdatedDateRelativeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDateRelative::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeDateRelativeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDateTimeRelative::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryTermAttributeDateTimeRelativeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryGroupWithAssociation::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\QueryGroupWithAssociationNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\MainQueryGroup::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\MainQueryGroupNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\GetValidFilterResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\GetValidFilterResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQueryStatusBase::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\PersistedProductQueryStatusBaseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQueryInsertResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\PersistedProductQueryInsertResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQueryInsertResponseData::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\PersistedProductQueryInsertResponseDataNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\StaticQueryGroup::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\StaticQueryGroupNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\MainStaticQueryGroup::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\MainStaticQueryGroupNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQueryInsertRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\PersistedProductQueryInsertRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQueryResponseBase::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\PersistedProductQueryResponseBaseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQueryUpdateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\PersistedProductQueryUpdateRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQueryDeleteRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\PersistedProductQueryDeleteRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQueryListResponseItem::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\PersistedProductQueryListResponseItemNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQueryListResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\PersistedProductQueryListResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\Paging::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\PagingNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQueryListRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\PersistedProductQueryListRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQuerySearchResponseItem::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\PersistedProductQuerySearchResponseItemNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQuerySearchResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\PersistedProductQuerySearchResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PersistedProductQuerySearchRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\PersistedProductQuerySearchRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductSearchQueryError::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\ProductSearchQueryErrorNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsSearchResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\ProductsSearchResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsSearchResponseDataItem::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\ProductsSearchResponseDataItemNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\SortingAttribute::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\SortingAttributeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\SortingBasicFields::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\SortingBasicFieldsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsSearchRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\ProductsSearchRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsCountResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\ProductsCountResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsScrollSearchResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\ProductsScrollSearchResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsScrollSearchResponseDataItem::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\ProductsScrollSearchResponseDataItemNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ScrollPagingInitiation::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\ScrollPagingInitiationNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsScrollSearchRequestInitiation::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\ProductsScrollSearchRequestInitiationNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ScrollPagingScrolling::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\ScrollPagingScrollingNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsScrollSearchRequestScrolling::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\ProductsScrollSearchRequestScrollingNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\DeleteReport::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\DeleteReportNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\DeleteReportResultItem::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer\DeleteReportResultItemNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\Normalizer\ReferenceNormalizer::class,
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