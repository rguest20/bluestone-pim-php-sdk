<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FilteringCriteriaRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\FilteringCriteriaRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\FilteringCriteriaRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\FilteringCriteriaRequest();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Validator\FilteringCriteriaRequestConstraint());
        }
        if (\array_key_exists('ids', $data)) {
            $values = [];
            foreach ($data['ids'] as $value) {
                $values[] = $value;
            }
            $object->setIds($values);
        }
        if (\array_key_exists('names', $data)) {
            $values_1 = [];
            foreach ($data['names'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setNames($values_1);
        }
        if (\array_key_exists('numbers', $data)) {
            $values_2 = [];
            foreach ($data['numbers'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setNumbers($values_2);
        }
        if (\array_key_exists('labels', $data)) {
            $values_3 = [];
            foreach ($data['labels'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setLabels($values_3);
        }
        if (\array_key_exists('categories', $data)) {
            $values_4 = [];
            foreach ($data['categories'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setCategories($values_4);
        }
        if (\array_key_exists('attributes', $data)) {
            $values_5 = [];
            foreach ($data['attributes'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setAttributes($values_5);
        }
        if (\array_key_exists('attributeFilters', $data)) {
            $values_6 = [];
            foreach ($data['attributeFilters'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\AttributeFilter::class, 'json', $context);
            }
            $object->setAttributeFilters($values_6);
        }
        if (\array_key_exists('relations', $data)) {
            $values_7 = [];
            foreach ($data['relations'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setRelations($values_7);
        }
        if (\array_key_exists('productTypes', $data)) {
            $values_8 = [];
            foreach ($data['productTypes'] as $value_8) {
                $values_8[] = $value_8;
            }
            $object->setProductTypes($values_8);
        }
        if (\array_key_exists('bundles', $data)) {
            $values_9 = [];
            foreach ($data['bundles'] as $value_9) {
                $values_9[] = $value_9;
            }
            $object->setBundles($values_9);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('ids')) {
            $values = [];
            foreach ($data->getIds() as $value) {
                $values[] = $value;
            }
            $dataArray['ids'] = $values;
        }
        if ($data->isInitialized('names')) {
            $values_1 = [];
            foreach ($data->getNames() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['names'] = $values_1;
        }
        if ($data->isInitialized('numbers')) {
            $values_2 = [];
            foreach ($data->getNumbers() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['numbers'] = $values_2;
        }
        if ($data->isInitialized('labels')) {
            $values_3 = [];
            foreach ($data->getLabels() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['labels'] = $values_3;
        }
        if ($data->isInitialized('categories')) {
            $values_4 = [];
            foreach ($data->getCategories() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['categories'] = $values_4;
        }
        if ($data->isInitialized('attributes')) {
            $values_5 = [];
            foreach ($data->getAttributes() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['attributes'] = $values_5;
        }
        if ($data->isInitialized('attributeFilters')) {
            $values_6 = [];
            foreach ($data->getAttributeFilters() as $value_6) {
                $values_6[] = $value_6 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\JsonObject($this->normalizer->normalize($value_6, 'json', $context));
            }
            $dataArray['attributeFilters'] = $values_6;
        }
        if ($data->isInitialized('relations')) {
            $values_7 = [];
            foreach ($data->getRelations() as $value_7) {
                $values_7[] = $value_7;
            }
            $dataArray['relations'] = $values_7;
        }
        if ($data->isInitialized('productTypes')) {
            $values_8 = [];
            foreach ($data->getProductTypes() as $value_8) {
                $values_8[] = $value_8;
            }
            $dataArray['productTypes'] = $values_8;
        }
        if ($data->isInitialized('bundles')) {
            $values_9 = [];
            foreach ($data->getBundles() as $value_9) {
                $values_9[] = $value_9;
            }
            $dataArray['bundles'] = $values_9;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Validator\FilteringCriteriaRequestConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\FilteringCriteriaRequest::class => false];
    }
}