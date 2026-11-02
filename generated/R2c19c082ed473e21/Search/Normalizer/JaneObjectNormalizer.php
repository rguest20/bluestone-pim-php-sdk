<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\Normalizer\ValidatorTrait;
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
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\AssetFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AttributeFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\AttributeFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\BaseFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\BaseFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\BundleFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\BundleFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\CategoryFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\CategoryFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\CreateDateFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\CreateDateFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\CreateDateRelativeFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\CreateDateRelativeFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\GroupFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\GroupFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\LabelFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\LabelFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\LastSyncStateFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\LastSyncStateFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\LastUpdateFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\LastUpdateFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\LastUpdateRelativeFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\LastUpdateRelativeFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\OutOfSyncFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\OutOfSyncFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchRequestTypeFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchRequestTypeFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchRequestTypesFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchRequestTypesFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchRequestPublishStateFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchRequestPublishStateFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchRequestValidationStatusFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchRequestValidationStatusFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchRequestRelationsFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchRequestRelationsFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchRequestScoreFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchRequestScoreFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchRequestOutOfSyncFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchRequestOutOfSyncFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchRequestLastSyncStateFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchRequestLastSyncStateFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PublishStateFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PublishStateFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\RelationsFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\RelationsFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\ScoreFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\ScoreFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\ScoreRequirementResultFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\ScoreRequirementResultFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\TypeFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\TypeFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\TypesFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\TypesFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\ValidationStatusFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\ValidationStatusFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\VariantFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\VariantFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MatchedProduct::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MatchedProductNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\ProductSearchResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\ProductSearchResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchScrollRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchScrollRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchScrollRequestTypeFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchScrollRequestTypeFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchScrollRequestTypesFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchScrollRequestTypesFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchScrollRequestPublishStateFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchScrollRequestPublishStateFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchScrollRequestValidationStatusFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchScrollRequestValidationStatusFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchScrollRequestRelationsFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchScrollRequestRelationsFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchScrollRequestScoreFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchScrollRequestScoreFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchScrollRequestOutOfSyncFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchScrollRequestOutOfSyncFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchScrollRequestLastSyncStateFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchScrollRequestLastSyncStateFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\ProductSearchScrollResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\ProductSearchScrollResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchCursorRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequestTypeFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchCursorRequestTypeFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequestTypesFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchCursorRequestTypesFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequestPublishStateFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchCursorRequestPublishStateFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequestValidationStatusFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchCursorRequestValidationStatusFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequestRelationsFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchCursorRequestRelationsFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequestScoreFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchCursorRequestScoreFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequestOutOfSyncFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchCursorRequestOutOfSyncFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequestLastSyncStateFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductSearchCursorRequestLastSyncStateFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\ProductSearchCursorResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\ProductSearchCursorResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductCountRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductCountRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductCountRequestTypeFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductCountRequestTypeFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductCountRequestTypesFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductCountRequestTypesFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductCountRequestPublishStateFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductCountRequestPublishStateFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductCountRequestValidationStatusFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductCountRequestValidationStatusFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductCountRequestRelationsFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductCountRequestRelationsFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductCountRequestScoreFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductCountRequestScoreFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductCountRequestOutOfSyncFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductCountRequestOutOfSyncFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductCountRequestLastSyncStateFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\PimProductCountRequestLastSyncStateFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\ProductCountResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\ProductCountResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetIdsParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\AssetIdsParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetsCategoriesParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\AssetsCategoriesParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetsCreatedAtParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\AssetsCreatedAtParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetsCreatedRelative::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\AssetsCreatedRelativeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetsDescriptionParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\AssetsDescriptionParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetsFileParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\AssetsFileParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetsLabelsParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\AssetsLabelsParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetsNameParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\AssetsNameParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetsNumbersParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\AssetsNumbersParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetsProductsParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\AssetsProductsParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetsUpdatedAtParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\AssetsUpdatedAtParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetsUpdatedRelative::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\AssetsUpdatedRelativeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetSearchRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchRequestAsset::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetSearchRequestAssetNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchRequestMediaInfo::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetSearchRequestMediaInfoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetsParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsIdsParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetsParamsIdsParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsNumbersParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetsParamsNumbersParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsNameParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetsParamsNameParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsDescriptionParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetsParamsDescriptionParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsProductsParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetsParamsProductsParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsCategoriesParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetsParamsCategoriesParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsLabelsParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetsParamsLabelsParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsFileParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetsParamsFileParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsCreated::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetsParamsCreatedNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsUpdated::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetsParamsUpdatedNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsCreatedRelative::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetsParamsCreatedRelativeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsUpdatedRelative::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetsParamsUpdatedRelativeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankMediaInfoParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankMediaInfoParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetSearchResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\AssetSearchResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MatchedAsset::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MatchedAssetNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchCursorRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetSearchCursorRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchCursorRequestAsset::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetSearchCursorRequestAssetNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchCursorRequestMediaInfo::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetSearchCursorRequestMediaInfoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetSearchCursorResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\AssetSearchCursorResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetCountRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetCountRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetCountRequestAsset::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetCountRequestAssetNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetCountRequestMediaInfo::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\MediabankAssetCountRequestMediaInfoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetCountResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\AssetCountResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\FindResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\FindResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\FindResponseList::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\FindResponseListNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\HighlightResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\HighlightResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\ErrorResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\ErrorResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\ErrorDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\ErrorDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\ConflictingEntity::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\ConflictingEntityNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\LimitExceededDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer\LimitExceededDetailsNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\Normalizer\ReferenceNormalizer::class,
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