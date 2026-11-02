<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProductCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductCreateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductCreateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductCreateRequest();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\ProductCreateRequestConstraint());
        }
        if (\array_key_exists('assets', $data) && $data['assets'] !== null) {
            $values = [];
            foreach ($data['assets'] as $value) {
                $values[] = $value;
            }
            $object->setAssets($values);
            unset($data['assets']);
        }
        elseif (\array_key_exists('assets', $data) && $data['assets'] === null) {
            $object->setAssets(null);
            unset($data['assets']);
        }
        if (\array_key_exists('attributes', $data) && $data['attributes'] !== null) {
            $values_1 = [];
            foreach ($data['attributes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductAttributeValue::class, 'json', $context);
            }
            $object->setAttributes($values_1);
            unset($data['attributes']);
        }
        elseif (\array_key_exists('attributes', $data) && $data['attributes'] === null) {
            $object->setAttributes(null);
            unset($data['attributes']);
        }
        if (\array_key_exists('categories', $data) && $data['categories'] !== null) {
            $values_2 = [];
            foreach ($data['categories'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCategories($values_2);
            unset($data['categories']);
        }
        elseif (\array_key_exists('categories', $data) && $data['categories'] === null) {
            $object->setCategories(null);
            unset($data['categories']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
            unset($data['description']);
        }
        if (\array_key_exists('labels', $data) && $data['labels'] !== null) {
            $values_3 = [];
            foreach ($data['labels'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setLabels($values_3);
            unset($data['labels']);
        }
        elseif (\array_key_exists('labels', $data) && $data['labels'] === null) {
            $object->setLabels(null);
            unset($data['labels']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('number', $data) && $data['number'] !== null) {
            $object->setNumber($data['number']);
            unset($data['number']);
        }
        elseif (\array_key_exists('number', $data) && $data['number'] === null) {
            $object->setNumber(null);
            unset($data['number']);
        }
        if (\array_key_exists('relatedProductsRelationSortingOrderSource', $data) && $data['relatedProductsRelationSortingOrderSource'] !== null) {
            $object->setRelatedProductsRelationSortingOrderSource($data['relatedProductsRelationSortingOrderSource']);
            unset($data['relatedProductsRelationSortingOrderSource']);
        }
        elseif (\array_key_exists('relatedProductsRelationSortingOrderSource', $data) && $data['relatedProductsRelationSortingOrderSource'] === null) {
            $object->setRelatedProductsRelationSortingOrderSource(null);
            unset($data['relatedProductsRelationSortingOrderSource']);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
            unset($data['type']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('assets')) {
            $values = [];
            foreach ($data->getAssets() as $value) {
                $values[] = $value;
            }
            $dataArray['assets'] = $values;
        }
        if ($data->isInitialized('attributes')) {
            $values_1 = [];
            foreach ($data->getAttributes() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['attributes'] = $values_1;
        }
        if ($data->isInitialized('categories')) {
            $values_2 = [];
            foreach ($data->getCategories() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['categories'] = $values_2;
        }
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('labels')) {
            $values_3 = [];
            foreach ($data->getLabels() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['labels'] = $values_3;
        }
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('number')) {
            $dataArray['number'] = $data->getNumber();
        }
        if ($data->isInitialized('relatedProductsRelationSortingOrderSource')) {
            $dataArray['relatedProductsRelationSortingOrderSource'] = $data->getRelatedProductsRelationSortingOrderSource();
        }
        if ($data->isInitialized('type')) {
            $dataArray['type'] = $data->getType();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\ProductCreateRequestConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductCreateRequest::class => false];
    }
}