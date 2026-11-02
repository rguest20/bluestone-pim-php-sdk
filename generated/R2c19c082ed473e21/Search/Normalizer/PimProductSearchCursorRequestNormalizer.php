<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PimProductSearchCursorRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequest();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Validator\PimProductSearchCursorRequestConstraint());
        }
        if (\array_key_exists('count', $data)) {
            $object->setCount($data['count']);
            unset($data['count']);
        }
        if (\array_key_exists('cursor', $data) && $data['cursor'] !== null) {
            $object->setCursor($data['cursor']);
            unset($data['cursor']);
        }
        elseif (\array_key_exists('cursor', $data) && $data['cursor'] === null) {
            $object->setCursor(null);
            unset($data['cursor']);
        }
        if (\array_key_exists('typeFilter', $data) && $data['typeFilter'] !== null) {
            $object->setTypeFilter($this->denormalizer->denormalize($data['typeFilter'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequestTypeFilter::class, 'json', $context));
            unset($data['typeFilter']);
        }
        elseif (\array_key_exists('typeFilter', $data) && $data['typeFilter'] === null) {
            $object->setTypeFilter(null);
            unset($data['typeFilter']);
        }
        if (\array_key_exists('typesFilter', $data) && $data['typesFilter'] !== null) {
            $object->setTypesFilter($this->denormalizer->denormalize($data['typesFilter'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequestTypesFilter::class, 'json', $context));
            unset($data['typesFilter']);
        }
        elseif (\array_key_exists('typesFilter', $data) && $data['typesFilter'] === null) {
            $object->setTypesFilter(null);
            unset($data['typesFilter']);
        }
        if (\array_key_exists('productCreateDateFilter', $data) && $data['productCreateDateFilter'] !== null) {
            $values = [];
            foreach ($data['productCreateDateFilter'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\CreateDateFilter::class, 'json', $context);
            }
            $object->setProductCreateDateFilter($values);
            unset($data['productCreateDateFilter']);
        }
        elseif (\array_key_exists('productCreateDateFilter', $data) && $data['productCreateDateFilter'] === null) {
            $object->setProductCreateDateFilter(null);
            unset($data['productCreateDateFilter']);
        }
        if (\array_key_exists('productCreateDateRelativeFilter', $data) && $data['productCreateDateRelativeFilter'] !== null) {
            $values_1 = [];
            foreach ($data['productCreateDateRelativeFilter'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\CreateDateRelativeFilter::class, 'json', $context);
            }
            $object->setProductCreateDateRelativeFilter($values_1);
            unset($data['productCreateDateRelativeFilter']);
        }
        elseif (\array_key_exists('productCreateDateRelativeFilter', $data) && $data['productCreateDateRelativeFilter'] === null) {
            $object->setProductCreateDateRelativeFilter(null);
            unset($data['productCreateDateRelativeFilter']);
        }
        if (\array_key_exists('productLastUpdateFilter', $data) && $data['productLastUpdateFilter'] !== null) {
            $values_2 = [];
            foreach ($data['productLastUpdateFilter'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\LastUpdateFilter::class, 'json', $context);
            }
            $object->setProductLastUpdateFilter($values_2);
            unset($data['productLastUpdateFilter']);
        }
        elseif (\array_key_exists('productLastUpdateFilter', $data) && $data['productLastUpdateFilter'] === null) {
            $object->setProductLastUpdateFilter(null);
            unset($data['productLastUpdateFilter']);
        }
        if (\array_key_exists('productLastUpdateRelativeFilter', $data) && $data['productLastUpdateRelativeFilter'] !== null) {
            $values_3 = [];
            foreach ($data['productLastUpdateRelativeFilter'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\LastUpdateRelativeFilter::class, 'json', $context);
            }
            $object->setProductLastUpdateRelativeFilter($values_3);
            unset($data['productLastUpdateRelativeFilter']);
        }
        elseif (\array_key_exists('productLastUpdateRelativeFilter', $data) && $data['productLastUpdateRelativeFilter'] === null) {
            $object->setProductLastUpdateRelativeFilter(null);
            unset($data['productLastUpdateRelativeFilter']);
        }
        if (\array_key_exists('baseFilters', $data) && $data['baseFilters'] !== null) {
            $values_4 = [];
            foreach ($data['baseFilters'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\BaseFilter::class, 'json', $context);
            }
            $object->setBaseFilters($values_4);
            unset($data['baseFilters']);
        }
        elseif (\array_key_exists('baseFilters', $data) && $data['baseFilters'] === null) {
            $object->setBaseFilters(null);
            unset($data['baseFilters']);
        }
        if (\array_key_exists('publishStateFilter', $data) && $data['publishStateFilter'] !== null) {
            $object->setPublishStateFilter($this->denormalizer->denormalize($data['publishStateFilter'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequestPublishStateFilter::class, 'json', $context));
            unset($data['publishStateFilter']);
        }
        elseif (\array_key_exists('publishStateFilter', $data) && $data['publishStateFilter'] === null) {
            $object->setPublishStateFilter(null);
            unset($data['publishStateFilter']);
        }
        if (\array_key_exists('validationStatusFilter', $data) && $data['validationStatusFilter'] !== null) {
            $object->setValidationStatusFilter($this->denormalizer->denormalize($data['validationStatusFilter'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequestValidationStatusFilter::class, 'json', $context));
            unset($data['validationStatusFilter']);
        }
        elseif (\array_key_exists('validationStatusFilter', $data) && $data['validationStatusFilter'] === null) {
            $object->setValidationStatusFilter(null);
            unset($data['validationStatusFilter']);
        }
        if (\array_key_exists('attributeFilters', $data) && $data['attributeFilters'] !== null) {
            $values_5 = [];
            foreach ($data['attributeFilters'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AttributeFilter::class, 'json', $context);
            }
            $object->setAttributeFilters($values_5);
            unset($data['attributeFilters']);
        }
        elseif (\array_key_exists('attributeFilters', $data) && $data['attributeFilters'] === null) {
            $object->setAttributeFilters(null);
            unset($data['attributeFilters']);
        }
        if (\array_key_exists('labelFilters', $data) && $data['labelFilters'] !== null) {
            $values_6 = [];
            foreach ($data['labelFilters'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\LabelFilter::class, 'json', $context);
            }
            $object->setLabelFilters($values_6);
            unset($data['labelFilters']);
        }
        elseif (\array_key_exists('labelFilters', $data) && $data['labelFilters'] === null) {
            $object->setLabelFilters(null);
            unset($data['labelFilters']);
        }
        if (\array_key_exists('relationsFilter', $data) && $data['relationsFilter'] !== null) {
            $object->setRelationsFilter($this->denormalizer->denormalize($data['relationsFilter'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequestRelationsFilter::class, 'json', $context));
            unset($data['relationsFilter']);
        }
        elseif (\array_key_exists('relationsFilter', $data) && $data['relationsFilter'] === null) {
            $object->setRelationsFilter(null);
            unset($data['relationsFilter']);
        }
        if (\array_key_exists('assetFilters', $data) && $data['assetFilters'] !== null) {
            $values_7 = [];
            foreach ($data['assetFilters'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetFilter::class, 'json', $context);
            }
            $object->setAssetFilters($values_7);
            unset($data['assetFilters']);
        }
        elseif (\array_key_exists('assetFilters', $data) && $data['assetFilters'] === null) {
            $object->setAssetFilters(null);
            unset($data['assetFilters']);
        }
        if (\array_key_exists('variantFilters', $data) && $data['variantFilters'] !== null) {
            $values_8 = [];
            foreach ($data['variantFilters'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\VariantFilter::class, 'json', $context);
            }
            $object->setVariantFilters($values_8);
            unset($data['variantFilters']);
        }
        elseif (\array_key_exists('variantFilters', $data) && $data['variantFilters'] === null) {
            $object->setVariantFilters(null);
            unset($data['variantFilters']);
        }
        if (\array_key_exists('bundleFilters', $data) && $data['bundleFilters'] !== null) {
            $values_9 = [];
            foreach ($data['bundleFilters'] as $value_9) {
                $values_9[] = $this->denormalizer->denormalize($value_9, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\BundleFilter::class, 'json', $context);
            }
            $object->setBundleFilters($values_9);
            unset($data['bundleFilters']);
        }
        elseif (\array_key_exists('bundleFilters', $data) && $data['bundleFilters'] === null) {
            $object->setBundleFilters(null);
            unset($data['bundleFilters']);
        }
        if (\array_key_exists('categoryFilters', $data) && $data['categoryFilters'] !== null) {
            $values_10 = [];
            foreach ($data['categoryFilters'] as $value_10) {
                $values_10[] = $this->denormalizer->denormalize($value_10, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\CategoryFilter::class, 'json', $context);
            }
            $object->setCategoryFilters($values_10);
            unset($data['categoryFilters']);
        }
        elseif (\array_key_exists('categoryFilters', $data) && $data['categoryFilters'] === null) {
            $object->setCategoryFilters(null);
            unset($data['categoryFilters']);
        }
        if (\array_key_exists('scoreFilter', $data) && $data['scoreFilter'] !== null) {
            $object->setScoreFilter($this->denormalizer->denormalize($data['scoreFilter'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequestScoreFilter::class, 'json', $context));
            unset($data['scoreFilter']);
        }
        elseif (\array_key_exists('scoreFilter', $data) && $data['scoreFilter'] === null) {
            $object->setScoreFilter(null);
            unset($data['scoreFilter']);
        }
        if (\array_key_exists('scoreRequirementResultFilters', $data) && $data['scoreRequirementResultFilters'] !== null) {
            $values_11 = [];
            foreach ($data['scoreRequirementResultFilters'] as $value_11) {
                $values_11[] = $this->denormalizer->denormalize($value_11, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\ScoreRequirementResultFilter::class, 'json', $context);
            }
            $object->setScoreRequirementResultFilters($values_11);
            unset($data['scoreRequirementResultFilters']);
        }
        elseif (\array_key_exists('scoreRequirementResultFilters', $data) && $data['scoreRequirementResultFilters'] === null) {
            $object->setScoreRequirementResultFilters(null);
            unset($data['scoreRequirementResultFilters']);
        }
        if (\array_key_exists('outOfSyncFilter', $data) && $data['outOfSyncFilter'] !== null) {
            $object->setOutOfSyncFilter($this->denormalizer->denormalize($data['outOfSyncFilter'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequestOutOfSyncFilter::class, 'json', $context));
            unset($data['outOfSyncFilter']);
        }
        elseif (\array_key_exists('outOfSyncFilter', $data) && $data['outOfSyncFilter'] === null) {
            $object->setOutOfSyncFilter(null);
            unset($data['outOfSyncFilter']);
        }
        if (\array_key_exists('lastSyncStateFilter', $data) && $data['lastSyncStateFilter'] !== null) {
            $object->setLastSyncStateFilter($this->denormalizer->denormalize($data['lastSyncStateFilter'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequestLastSyncStateFilter::class, 'json', $context));
            unset($data['lastSyncStateFilter']);
        }
        elseif (\array_key_exists('lastSyncStateFilter', $data) && $data['lastSyncStateFilter'] === null) {
            $object->setLastSyncStateFilter(null);
            unset($data['lastSyncStateFilter']);
        }
        if (\array_key_exists('groupFilters', $data) && $data['groupFilters'] !== null) {
            $values_12 = [];
            foreach ($data['groupFilters'] as $value_12) {
                $values_12[] = $this->denormalizer->denormalize($value_12, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\GroupFilter::class, 'json', $context);
            }
            $object->setGroupFilters($values_12);
            unset($data['groupFilters']);
        }
        elseif (\array_key_exists('groupFilters', $data) && $data['groupFilters'] === null) {
            $object->setGroupFilters(null);
            unset($data['groupFilters']);
        }
        foreach ($data as $key => $value_13) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_13;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['count'] = $data->getCount();
        if ($data->isInitialized('cursor')) {
            $dataArray['cursor'] = $data->getCursor();
        }
        if ($data->isInitialized('typeFilter')) {
            $dataArray['typeFilter'] = $data->getTypeFilter() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getTypeFilter(), 'json', $context));
        }
        if ($data->isInitialized('typesFilter')) {
            $dataArray['typesFilter'] = $data->getTypesFilter() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getTypesFilter(), 'json', $context));
        }
        if ($data->isInitialized('productCreateDateFilter')) {
            $values = [];
            foreach ($data->getProductCreateDateFilter() as $value) {
                $values[] = $value === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['productCreateDateFilter'] = $values;
        }
        if ($data->isInitialized('productCreateDateRelativeFilter')) {
            $values_1 = [];
            foreach ($data->getProductCreateDateRelativeFilter() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['productCreateDateRelativeFilter'] = $values_1;
        }
        if ($data->isInitialized('productLastUpdateFilter')) {
            $values_2 = [];
            foreach ($data->getProductLastUpdateFilter() as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['productLastUpdateFilter'] = $values_2;
        }
        if ($data->isInitialized('productLastUpdateRelativeFilter')) {
            $values_3 = [];
            foreach ($data->getProductLastUpdateRelativeFilter() as $value_3) {
                $values_3[] = $value_3 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['productLastUpdateRelativeFilter'] = $values_3;
        }
        if ($data->isInitialized('baseFilters')) {
            $values_4 = [];
            foreach ($data->getBaseFilters() as $value_4) {
                $values_4[] = $value_4 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['baseFilters'] = $values_4;
        }
        if ($data->isInitialized('publishStateFilter')) {
            $dataArray['publishStateFilter'] = $data->getPublishStateFilter() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getPublishStateFilter(), 'json', $context));
        }
        if ($data->isInitialized('validationStatusFilter')) {
            $dataArray['validationStatusFilter'] = $data->getValidationStatusFilter() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getValidationStatusFilter(), 'json', $context));
        }
        if ($data->isInitialized('attributeFilters')) {
            $values_5 = [];
            foreach ($data->getAttributeFilters() as $value_5) {
                $values_5[] = $value_5 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['attributeFilters'] = $values_5;
        }
        if ($data->isInitialized('labelFilters')) {
            $values_6 = [];
            foreach ($data->getLabelFilters() as $value_6) {
                $values_6[] = $value_6 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($value_6, 'json', $context));
            }
            $dataArray['labelFilters'] = $values_6;
        }
        if ($data->isInitialized('relationsFilter')) {
            $dataArray['relationsFilter'] = $data->getRelationsFilter() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getRelationsFilter(), 'json', $context));
        }
        if ($data->isInitialized('assetFilters')) {
            $values_7 = [];
            foreach ($data->getAssetFilters() as $value_7) {
                $values_7[] = $value_7 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($value_7, 'json', $context));
            }
            $dataArray['assetFilters'] = $values_7;
        }
        if ($data->isInitialized('variantFilters')) {
            $values_8 = [];
            foreach ($data->getVariantFilters() as $value_8) {
                $values_8[] = $value_8 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($value_8, 'json', $context));
            }
            $dataArray['variantFilters'] = $values_8;
        }
        if ($data->isInitialized('bundleFilters')) {
            $values_9 = [];
            foreach ($data->getBundleFilters() as $value_9) {
                $values_9[] = $value_9 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($value_9, 'json', $context));
            }
            $dataArray['bundleFilters'] = $values_9;
        }
        if ($data->isInitialized('categoryFilters')) {
            $values_10 = [];
            foreach ($data->getCategoryFilters() as $value_10) {
                $values_10[] = $value_10 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($value_10, 'json', $context));
            }
            $dataArray['categoryFilters'] = $values_10;
        }
        if ($data->isInitialized('scoreFilter')) {
            $dataArray['scoreFilter'] = $data->getScoreFilter() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getScoreFilter(), 'json', $context));
        }
        if ($data->isInitialized('scoreRequirementResultFilters')) {
            $values_11 = [];
            foreach ($data->getScoreRequirementResultFilters() as $value_11) {
                $values_11[] = $value_11 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($value_11, 'json', $context));
            }
            $dataArray['scoreRequirementResultFilters'] = $values_11;
        }
        if ($data->isInitialized('outOfSyncFilter')) {
            $dataArray['outOfSyncFilter'] = $data->getOutOfSyncFilter() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getOutOfSyncFilter(), 'json', $context));
        }
        if ($data->isInitialized('lastSyncStateFilter')) {
            $dataArray['lastSyncStateFilter'] = $data->getLastSyncStateFilter() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getLastSyncStateFilter(), 'json', $context));
        }
        if ($data->isInitialized('groupFilters')) {
            $values_12 = [];
            foreach ($data->getGroupFilters() as $value_12) {
                $values_12[] = $value_12 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($value_12, 'json', $context));
            }
            $dataArray['groupFilters'] = $values_12;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_13) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_13;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Validator\PimProductSearchCursorRequestConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\PimProductSearchCursorRequest::class => false];
    }
}