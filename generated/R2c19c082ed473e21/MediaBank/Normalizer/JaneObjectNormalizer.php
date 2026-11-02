<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\Normalizer\ValidatorTrait;
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
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\ErrorResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\ErrorResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\ErrorDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\ErrorDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\QuotaLimitExceededDetails::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\QuotaLimitExceededDetailsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\CheckResult::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\CheckResultNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DescribeMediaLabelResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\DescribeMediaLabelResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DefaultMediaLabelRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\DefaultMediaLabelRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\ListMediaLabelResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\ListMediaLabelResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\ListMediaLabelRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\ListMediaLabelRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DescribeMediaInfoUploadAssetResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\DescribeMediaInfoUploadAssetResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DescribeUploadAssetResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\DescribeUploadAssetResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\Parameter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\ParameterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UploadAssetResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\UploadAssetResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\CreateUploadAssetRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\CreateUploadAssetRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateUploadAssetRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\UpdateUploadAssetRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\AddAttributeToAssetsByIdsRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\AddAttributeToAssetsByIdsRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\SaveAttributeToAssetsByIdsRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\SaveAttributeToAssetsByIdsRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DictionaryAssetAttributeValuesRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\DictionaryAssetAttributeValuesRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\AppendSelectValuesToAssetsAttributeParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\AppendSelectValuesToAssetsAttributeParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DeductSelectValuesToAssetsAttributeParams::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\DeductSelectValuesToAssetsAttributeParamsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DeleteProductsAttributesBulkRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\DeleteProductsAttributesBulkRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\AssetAttributeResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\AssetAttributeResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\ListableAssetAttributesResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\ListableAssetAttributesResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateDictionaryAssetAttributeValuesRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\UpdateDictionaryAssetAttributeValuesRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateSelectAssetAttributeValuesRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\UpdateSelectAssetAttributeValuesRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateSimpleAssetAttributeValueRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\UpdateSimpleAssetAttributeValueRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DescribeMediaInfoWorkingAssetResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\DescribeMediaInfoWorkingAssetResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DescribeWorkingAssetResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\DescribeWorkingAssetResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetsLabelsAttributeRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\UpdateAssetsLabelsAttributeRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\BulkAssetsLabelUpdateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\BulkAssetsLabelUpdateRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\BulkAssetPublishedUpdateResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\BulkAssetPublishedUpdateResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\BulkAssetPublishedUpdateResponseData::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\BulkAssetPublishedUpdateResponseDataNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\BulkAssetPublishedUpdateRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\BulkAssetPublishedUpdateRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\BulkAssetPublishedUpdateRequestData::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\BulkAssetPublishedUpdateRequestDataNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DescribeMediaVersionAssetResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\DescribeMediaVersionAssetResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\ListableDescribeMediaVersionAssetResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\ListableDescribeMediaVersionAssetResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DownloadAssetPresignedUrlResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\DownloadAssetPresignedUrlResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DownloadAssetsResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\DownloadAssetsResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DownloadAssetsRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\DownloadAssetsRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\RedirectionGenerationResult::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\RedirectionGenerationResultNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\AssetAttribute::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\AssetAttributeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\WorkingAssetMetadataDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\WorkingAssetMetadataDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\WorkingAssetViewResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\WorkingAssetViewResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\AttributesFilteringViewsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\AttributesFilteringViewsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\FilteringViewsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\FilteringViewsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\LabelsFilteringViewsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\LabelsFilteringViewsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\MediainfoFilteringViewsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\MediainfoFilteringViewsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\MetadataFilteringViewsDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\MetadataFilteringViewsDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\WorkingAssetViewsRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\WorkingAssetViewsRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\WorkingAssetViewListResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\WorkingAssetViewListResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\WorkingAssetsViewsByIdsRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\WorkingAssetsViewsByIdsRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\MediaInfo::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\MediaInfoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\WorkingAssetPaginatedResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\WorkingAssetPaginatedResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\WorkingAssetResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\WorkingAssetResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DescribeWorkingAssetListResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\DescribeWorkingAssetListResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DescribeWorkingAssetsByIdsSearchRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\DescribeWorkingAssetsByIdsSearchRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\WorkingAssetsByNumbersRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\WorkingAssetsByNumbersRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\WorkingAssetCursorResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\WorkingAssetCursorResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\WorkingAssetCursorRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\WorkingAssetCursorRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\BulkDeleteAssetsByIdsRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\BulkDeleteAssetsByIdsRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\BatchOperationApiResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\BatchOperationApiResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetAttributeRequestBoolean::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\UpdateAssetAttributeRequestBooleanNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\UpdateAssetAttributeRequestString::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer\UpdateAssetAttributeRequestStringNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\Normalizer\ReferenceNormalizer::class,
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