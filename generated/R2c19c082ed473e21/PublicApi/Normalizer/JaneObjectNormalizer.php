<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\Normalizer\ValidatorTrait;
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
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\ColumnAttribute::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\ColumnAttributeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\MatrixAttributeRow::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\MatrixAttributeRowNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\MatrixAttributeColumn::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\MatrixAttributeColumnNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\SelectValue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\SelectValueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\DictionaryValue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\DictionaryValueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\Attribute::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\AttributeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\AssetAttribute::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\AssetAttributeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\ProductMediaAsset::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\ProductMediaAssetNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\ProductRelation::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\ProductRelationNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\MetaData::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\MetaDataNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\ProductBundle::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\ProductBundleNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\Product::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\ProductNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\PaginatedProduct::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\PaginatedProductNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\AttributeFilter::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\AttributeFilterNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\FilteringCriteriaRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\FilteringCriteriaRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\ProductResults::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\ProductResultsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\ProductsByIdsRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\ProductsByIdsRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\ProductsByNumbersRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\ProductsByNumbersRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CursorPageProduct::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\CursorPageProductNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CursorQuery::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\CursorQueryNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\StatusPapiError::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\StatusPapiErrorNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\EntitiesPapiError::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\EntitiesPapiErrorNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\EntityPapiError::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\EntityPapiErrorNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CategoryMediaAsset::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\CategoryMediaAssetNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CategoryAttribute::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\CategoryAttributeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\SimplifiedCategory::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\SimplifiedCategoryNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\PaginatedSimplifiedCategory::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\PaginatedSimplifiedCategoryNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\Category::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\CategoryNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CategoriesByNumbersRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\CategoriesByNumbersRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\PublishInfo::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\PublishInfoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\DiffResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\DiffResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\SegmentContextRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\SegmentContextRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\RelationDefinitionDto::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\RelationDefinitionDtoNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\RelationDefinition::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\RelationDefinitionNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\ColumnAttributeDefinitionValue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\ColumnAttributeDefinitionValueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\RowAttributeDefinitionValue::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\RowAttributeDefinitionValueNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CompoundAttributeSubDefinition::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\CompoundAttributeSubDefinitionNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\GroupedAttributeDefinition::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\GroupedAttributeDefinitionNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\PaginatedAttribute::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\PaginatedAttributeNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\AttributeResults::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\AttributeResultsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\AttributesByNumbersRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\AttributesByNumbersRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\DictionaryValueDefinition::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\DictionaryValueDefinitionNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\DictionaryAttributeCursorResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer\DictionaryAttributeCursorResponseNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\Normalizer\ReferenceNormalizer::class,
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