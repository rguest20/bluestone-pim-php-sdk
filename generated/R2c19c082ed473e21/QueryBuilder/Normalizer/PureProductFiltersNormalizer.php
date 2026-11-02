<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PureProductFiltersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PureProductFilters::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PureProductFilters::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PureProductFilters();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Validator\PureProductFiltersConstraint());
        }
        if (\array_key_exists('assetFilters', $data)) {
            $values = [];
            foreach ($data['assetFilters'] as $value) {
                $value_1 = $value;
                if (is_array($value) and (\array_key_exists('type', $value) and ($value['type'] == 'HAVE_NONE' or $value['type'] == 'HAVE_ANY' or $value['type'] == 'HAVE_MORE_THAN' or $value['type'] == 'HAVE_LESS_THAN' or $value['type'] == 'ASSIGNED_TO_ANY' or $value['type'] == 'ASSIGNED_TO_ALL' or $value['type'] == 'DO_NOT_FILTER'))) {
                    $value_1 = $this->denormalizer->denormalize($value, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\AssetFilter::class, 'json', $context);
                } elseif (is_array($value) and (\array_key_exists('type', $value) and ($value['type'] == 'NOT_HAVE_LABEL' or $value['type'] == 'HAVE_LABEL' or $value['type'] == 'DO_NOT_FILTER'))) {
                    $value_1 = $this->denormalizer->denormalize($value, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\AssetLabelsFilter::class, 'json', $context);
                }
                $values[] = $value_1;
            }
            $object->setAssetFilters($values);
        }
        if (\array_key_exists('attributeFilters', $data)) {
            $values_1 = [];
            foreach ($data['attributeFilters'] as $value_2) {
                $values_1[] = $this->denormalizer->denormalize($value_2, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\AttributeFilter::class, 'json', $context);
            }
            $object->setAttributeFilters($values_1);
        }
        if (\array_key_exists('attributeIdToSortBy', $data)) {
            $object->setAttributeIdToSortBy($data['attributeIdToSortBy']);
        }
        if (\array_key_exists('baseFilters', $data)) {
            $values_2 = [];
            foreach ($data['baseFilters'] as $value_3) {
                $values_2[] = $this->denormalizer->denormalize($value_3, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\BaseFilter::class, 'json', $context);
            }
            $object->setBaseFilters($values_2);
        }
        if (\array_key_exists('categoryFilters', $data)) {
            $values_3 = [];
            foreach ($data['categoryFilters'] as $value_4) {
                $values_3[] = $this->denormalizer->denormalize($value_4, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\CategoryFilter::class, 'json', $context);
            }
            $object->setCategoryFilters($values_3);
        }
        if (\array_key_exists('column', $data)) {
            $object->setColumn($data['column']);
        }
        if (\array_key_exists('productCreateDateFilter', $data)) {
            $values_4 = [];
            foreach ($data['productCreateDateFilter'] as $value_5) {
                $values_4[] = $this->denormalizer->denormalize($value_5, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductCreateDateFilter::class, 'json', $context);
            }
            $object->setProductCreateDateFilter($values_4);
        }
        if (\array_key_exists('productLastUpdateFilter', $data)) {
            $values_5 = [];
            foreach ($data['productLastUpdateFilter'] as $value_6) {
                $values_5[] = $this->denormalizer->denormalize($value_6, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductUpdateDateFilter::class, 'json', $context);
            }
            $object->setProductLastUpdateFilter($values_5);
        }
        if (\array_key_exists('productLastUpdateRelativeFilter', $data)) {
            $values_6 = [];
            foreach ($data['productLastUpdateRelativeFilter'] as $value_7) {
                $values_6[] = $this->denormalizer->denormalize($value_7, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\RelativeDateFilter::class, 'json', $context);
            }
            $object->setProductLastUpdateRelativeFilter($values_6);
        }
        if (\array_key_exists('productCreateDateRelativeFilter', $data)) {
            $values_7 = [];
            foreach ($data['productCreateDateRelativeFilter'] as $value_8) {
                $values_7[] = $this->denormalizer->denormalize($value_8, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\RelativeDateFilter::class, 'json', $context);
            }
            $object->setProductCreateDateRelativeFilter($values_7);
        }
        if (\array_key_exists('labelFilters', $data)) {
            $values_8 = [];
            foreach ($data['labelFilters'] as $value_9) {
                $values_8[] = $this->denormalizer->denormalize($value_9, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\LabelFilter::class, 'json', $context);
            }
            $object->setLabelFilters($values_8);
        }
        if (\array_key_exists('publishStateFilter', $data)) {
            $object->setPublishStateFilter($this->denormalizer->denormalize($data['publishStateFilter'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PublishStateFilter::class, 'json', $context));
        }
        if (\array_key_exists('validationStatusFilter', $data)) {
            $object->setValidationStatusFilter($this->denormalizer->denormalize($data['validationStatusFilter'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ValidationStatusFilter::class, 'json', $context));
        }
        if (\array_key_exists('relationsFilter', $data)) {
            $object->setRelationsFilter($this->denormalizer->denormalize($data['relationsFilter'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\RelationsFilter::class, 'json', $context));
        }
        if (\array_key_exists('scoreFilter', $data)) {
            $object->setScoreFilter($this->denormalizer->denormalize($data['scoreFilter'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ScoreFilter::class, 'json', $context));
        }
        if (\array_key_exists('scoreRequirementResultFilters', $data)) {
            $values_9 = [];
            foreach ($data['scoreRequirementResultFilters'] as $value_10) {
                $values_9[] = $this->denormalizer->denormalize($value_10, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ScoreRequirementResultFilters::class, 'json', $context);
            }
            $object->setScoreRequirementResultFilters($values_9);
        }
        if (\array_key_exists('sortDirection', $data)) {
            $object->setSortDirection($data['sortDirection']);
        }
        if (\array_key_exists('typeFilter', $data)) {
            $object->setTypeFilter($this->denormalizer->denormalize($data['typeFilter'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\TypeFilter::class, 'json', $context));
        }
        if (\array_key_exists('typesFilter', $data)) {
            $object->setTypesFilter($this->denormalizer->denormalize($data['typesFilter'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\TypesFilter::class, 'json', $context));
        }
        if (\array_key_exists('outOfSyncFilter', $data)) {
            $object->setOutOfSyncFilter($this->denormalizer->denormalize($data['outOfSyncFilter'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\OutOfSyncFilter::class, 'json', $context));
        }
        if (\array_key_exists('lastSyncStateFilter', $data)) {
            $object->setLastSyncStateFilter($this->denormalizer->denormalize($data['lastSyncStateFilter'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\LastSyncStateFilter::class, 'json', $context));
        }
        if (\array_key_exists('variantFilters', $data)) {
            $values_10 = [];
            foreach ($data['variantFilters'] as $value_11) {
                $values_10[] = $this->denormalizer->denormalize($value_11, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\VariantFilter::class, 'json', $context);
            }
            $object->setVariantFilters($values_10);
        }
        if (\array_key_exists('bundleFilters', $data)) {
            $values_11 = [];
            foreach ($data['bundleFilters'] as $value_12) {
                $values_11[] = $this->denormalizer->denormalize($value_12, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\BundleFilter::class, 'json', $context);
            }
            $object->setBundleFilters($values_11);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('assetFilters')) {
            $values = [];
            foreach ($data->getAssetFilters() as $value) {
                $value_1 = $value;
                if (is_object($value)) {
                    $value_1 = $value === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
                } elseif (is_object($value)) {
                    $value_1 = $value === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
                }
                $values[] = $value_1;
            }
            $dataArray['assetFilters'] = $values;
        }
        if ($data->isInitialized('attributeFilters')) {
            $values_1 = [];
            foreach ($data->getAttributeFilters() as $value_2) {
                $values_1[] = $value_2 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['attributeFilters'] = $values_1;
        }
        if ($data->isInitialized('attributeIdToSortBy')) {
            $dataArray['attributeIdToSortBy'] = $data->getAttributeIdToSortBy();
        }
        if ($data->isInitialized('baseFilters')) {
            $values_2 = [];
            foreach ($data->getBaseFilters() as $value_3) {
                $values_2[] = $value_3 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['baseFilters'] = $values_2;
        }
        if ($data->isInitialized('categoryFilters')) {
            $values_3 = [];
            foreach ($data->getCategoryFilters() as $value_4) {
                $values_3[] = $value_4 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['categoryFilters'] = $values_3;
        }
        if ($data->isInitialized('column')) {
            $dataArray['column'] = $data->getColumn();
        }
        if ($data->isInitialized('productCreateDateFilter')) {
            $values_4 = [];
            foreach ($data->getProductCreateDateFilter() as $value_5) {
                $values_4[] = $value_5 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['productCreateDateFilter'] = $values_4;
        }
        if ($data->isInitialized('productLastUpdateFilter')) {
            $values_5 = [];
            foreach ($data->getProductLastUpdateFilter() as $value_6) {
                $values_5[] = $value_6 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($value_6, 'json', $context));
            }
            $dataArray['productLastUpdateFilter'] = $values_5;
        }
        if ($data->isInitialized('productLastUpdateRelativeFilter')) {
            $values_6 = [];
            foreach ($data->getProductLastUpdateRelativeFilter() as $value_7) {
                $values_6[] = $value_7 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($value_7, 'json', $context));
            }
            $dataArray['productLastUpdateRelativeFilter'] = $values_6;
        }
        if ($data->isInitialized('productCreateDateRelativeFilter')) {
            $values_7 = [];
            foreach ($data->getProductCreateDateRelativeFilter() as $value_8) {
                $values_7[] = $value_8 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($value_8, 'json', $context));
            }
            $dataArray['productCreateDateRelativeFilter'] = $values_7;
        }
        if ($data->isInitialized('labelFilters')) {
            $values_8 = [];
            foreach ($data->getLabelFilters() as $value_9) {
                $values_8[] = $value_9 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($value_9, 'json', $context));
            }
            $dataArray['labelFilters'] = $values_8;
        }
        if ($data->isInitialized('publishStateFilter')) {
            $dataArray['publishStateFilter'] = $data->getPublishStateFilter() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($data->getPublishStateFilter(), 'json', $context));
        }
        if ($data->isInitialized('validationStatusFilter')) {
            $dataArray['validationStatusFilter'] = $data->getValidationStatusFilter() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($data->getValidationStatusFilter(), 'json', $context));
        }
        if ($data->isInitialized('relationsFilter')) {
            $dataArray['relationsFilter'] = $data->getRelationsFilter() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($data->getRelationsFilter(), 'json', $context));
        }
        if ($data->isInitialized('scoreFilter')) {
            $dataArray['scoreFilter'] = $data->getScoreFilter() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($data->getScoreFilter(), 'json', $context));
        }
        if ($data->isInitialized('scoreRequirementResultFilters')) {
            $values_9 = [];
            foreach ($data->getScoreRequirementResultFilters() as $value_10) {
                $values_9[] = $value_10 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($value_10, 'json', $context));
            }
            $dataArray['scoreRequirementResultFilters'] = $values_9;
        }
        if ($data->isInitialized('sortDirection')) {
            $dataArray['sortDirection'] = $data->getSortDirection();
        }
        if ($data->isInitialized('typeFilter')) {
            $dataArray['typeFilter'] = $data->getTypeFilter() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($data->getTypeFilter(), 'json', $context));
        }
        if ($data->isInitialized('typesFilter')) {
            $dataArray['typesFilter'] = $data->getTypesFilter() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($data->getTypesFilter(), 'json', $context));
        }
        if ($data->isInitialized('outOfSyncFilter')) {
            $dataArray['outOfSyncFilter'] = $data->getOutOfSyncFilter() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($data->getOutOfSyncFilter(), 'json', $context));
        }
        if ($data->isInitialized('lastSyncStateFilter')) {
            $dataArray['lastSyncStateFilter'] = $data->getLastSyncStateFilter() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($data->getLastSyncStateFilter(), 'json', $context));
        }
        if ($data->isInitialized('variantFilters')) {
            $values_10 = [];
            foreach ($data->getVariantFilters() as $value_11) {
                $values_10[] = $value_11 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($value_11, 'json', $context));
            }
            $dataArray['variantFilters'] = $values_10;
        }
        if ($data->isInitialized('bundleFilters')) {
            $values_11 = [];
            foreach ($data->getBundleFilters() as $value_12) {
                $values_11[] = $value_12 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($value_12, 'json', $context));
            }
            $dataArray['bundleFilters'] = $values_11;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Validator\PureProductFiltersConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PureProductFilters::class => false];
    }
}