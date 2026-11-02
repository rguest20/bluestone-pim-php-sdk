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
class ProductAllNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductAll::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductAll::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductAll();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('quantity', $data) && \is_int($data['quantity'])) {
            $data['quantity'] = (float) $data['quantity'];
        }
        if (\array_key_exists('archived', $data) && \is_int($data['archived'])) {
            $data['archived'] = (bool) $data['archived'];
        }
        if (\array_key_exists('readOnly', $data) && \is_int($data['readOnly'])) {
            $data['readOnly'] = (bool) $data['readOnly'];
        }
        if (\array_key_exists('toBeRemoved', $data) && \is_int($data['toBeRemoved'])) {
            $data['toBeRemoved'] = (bool) $data['toBeRemoved'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\ProductAllConstraint());
        }
        if (\array_key_exists('archived', $data) && $data['archived'] !== null) {
            $object->setArchived($data['archived']);
            unset($data['archived']);
        }
        elseif (\array_key_exists('archived', $data) && $data['archived'] === null) {
            $object->setArchived(null);
            unset($data['archived']);
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
                $values_1[] = $this->denormalizer->denormalize($value_1, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeValueFull::class, 'json', $context);
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
        if (\array_key_exists('createDate', $data) && $data['createDate'] !== null) {
            $object->setCreateDate($data['createDate']);
            unset($data['createDate']);
        }
        elseif (\array_key_exists('createDate', $data) && $data['createDate'] === null) {
            $object->setCreateDate(null);
            unset($data['createDate']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
            unset($data['description']);
        }
        if (\array_key_exists('groupParentId', $data) && $data['groupParentId'] !== null) {
            $object->setGroupParentId($data['groupParentId']);
            unset($data['groupParentId']);
        }
        elseif (\array_key_exists('groupParentId', $data) && $data['groupParentId'] === null) {
            $object->setGroupParentId(null);
            unset($data['groupParentId']);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
            unset($data['id']);
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
        if (\array_key_exists('lastUpdate', $data) && $data['lastUpdate'] !== null) {
            $object->setLastUpdate($data['lastUpdate']);
            unset($data['lastUpdate']);
        }
        elseif (\array_key_exists('lastUpdate', $data) && $data['lastUpdate'] === null) {
            $object->setLastUpdate(null);
            unset($data['lastUpdate']);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
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
        if (\array_key_exists('productBundles', $data) && $data['productBundles'] !== null) {
            $values_4 = [];
            foreach ($data['productBundles'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductBundleDto::class, 'json', $context);
            }
            $object->setProductBundles($values_4);
            unset($data['productBundles']);
        }
        elseif (\array_key_exists('productBundles', $data) && $data['productBundles'] === null) {
            $object->setProductBundles(null);
            unset($data['productBundles']);
        }
        if (\array_key_exists('productGroups', $data) && $data['productGroups'] !== null) {
            $values_5 = [];
            foreach ($data['productGroups'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setProductGroups($values_5);
            unset($data['productGroups']);
        }
        elseif (\array_key_exists('productGroups', $data) && $data['productGroups'] === null) {
            $object->setProductGroups(null);
            unset($data['productGroups']);
        }
        if (\array_key_exists('productVariants', $data) && $data['productVariants'] !== null) {
            $values_6 = [];
            foreach ($data['productVariants'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setProductVariants($values_6);
            unset($data['productVariants']);
        }
        elseif (\array_key_exists('productVariants', $data) && $data['productVariants'] === null) {
            $object->setProductVariants(null);
            unset($data['productVariants']);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
            unset($data['quantity']);
        }
        if (\array_key_exists('readOnly', $data) && $data['readOnly'] !== null) {
            $object->setReadOnly($data['readOnly']);
            unset($data['readOnly']);
        }
        elseif (\array_key_exists('readOnly', $data) && $data['readOnly'] === null) {
            $object->setReadOnly(null);
            unset($data['readOnly']);
        }
        if (\array_key_exists('relatedCategories', $data) && $data['relatedCategories'] !== null) {
            $values_7 = [];
            foreach ($data['relatedCategories'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ConnectionDto::class, 'json', $context);
            }
            $object->setRelatedCategories($values_7);
            unset($data['relatedCategories']);
        }
        elseif (\array_key_exists('relatedCategories', $data) && $data['relatedCategories'] === null) {
            $object->setRelatedCategories(null);
            unset($data['relatedCategories']);
        }
        if (\array_key_exists('relatedProducts', $data) && $data['relatedProducts'] !== null) {
            $values_8 = [];
            foreach ($data['relatedProducts'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ConnectionDto::class, 'json', $context);
            }
            $object->setRelatedProducts($values_8);
            unset($data['relatedProducts']);
        }
        elseif (\array_key_exists('relatedProducts', $data) && $data['relatedProducts'] === null) {
            $object->setRelatedProducts(null);
            unset($data['relatedProducts']);
        }
        if (\array_key_exists('relatedProductsRelationSortingOrderSource', $data) && $data['relatedProductsRelationSortingOrderSource'] !== null) {
            $object->setRelatedProductsRelationSortingOrderSource($data['relatedProductsRelationSortingOrderSource']);
            unset($data['relatedProductsRelationSortingOrderSource']);
        }
        elseif (\array_key_exists('relatedProductsRelationSortingOrderSource', $data) && $data['relatedProductsRelationSortingOrderSource'] === null) {
            $object->setRelatedProductsRelationSortingOrderSource(null);
            unset($data['relatedProductsRelationSortingOrderSource']);
        }
        if (\array_key_exists('toBeRemoved', $data) && $data['toBeRemoved'] !== null) {
            $object->setToBeRemoved($data['toBeRemoved']);
            unset($data['toBeRemoved']);
        }
        elseif (\array_key_exists('toBeRemoved', $data) && $data['toBeRemoved'] === null) {
            $object->setToBeRemoved(null);
            unset($data['toBeRemoved']);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
            unset($data['type']);
        }
        if (\array_key_exists('variantParentId', $data) && $data['variantParentId'] !== null) {
            $object->setVariantParentId($data['variantParentId']);
            unset($data['variantParentId']);
        }
        elseif (\array_key_exists('variantParentId', $data) && $data['variantParentId'] === null) {
            $object->setVariantParentId(null);
            unset($data['variantParentId']);
        }
        foreach ($data as $key => $value_9) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_9;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('archived')) {
            $dataArray['archived'] = $data->getArchived();
        }
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
        if ($data->isInitialized('createDate')) {
            $dataArray['createDate'] = $data->getCreateDate();
        }
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('groupParentId')) {
            $dataArray['groupParentId'] = $data->getGroupParentId();
        }
        if ($data->isInitialized('id')) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('labels')) {
            $values_3 = [];
            foreach ($data->getLabels() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['labels'] = $values_3;
        }
        if ($data->isInitialized('lastUpdate')) {
            $dataArray['lastUpdate'] = $data->getLastUpdate();
        }
        if ($data->isInitialized('name')) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('number')) {
            $dataArray['number'] = $data->getNumber();
        }
        if ($data->isInitialized('productBundles')) {
            $values_4 = [];
            foreach ($data->getProductBundles() as $value_4) {
                $values_4[] = $value_4 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['productBundles'] = $values_4;
        }
        if ($data->isInitialized('productGroups')) {
            $values_5 = [];
            foreach ($data->getProductGroups() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['productGroups'] = $values_5;
        }
        if ($data->isInitialized('productVariants')) {
            $values_6 = [];
            foreach ($data->getProductVariants() as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['productVariants'] = $values_6;
        }
        if ($data->isInitialized('quantity')) {
            $dataArray['quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('readOnly')) {
            $dataArray['readOnly'] = $data->getReadOnly();
        }
        if ($data->isInitialized('relatedCategories')) {
            $values_7 = [];
            foreach ($data->getRelatedCategories() as $value_7) {
                $values_7[] = $value_7 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($value_7, 'json', $context));
            }
            $dataArray['relatedCategories'] = $values_7;
        }
        if ($data->isInitialized('relatedProducts')) {
            $values_8 = [];
            foreach ($data->getRelatedProducts() as $value_8) {
                $values_8[] = $value_8 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($value_8, 'json', $context));
            }
            $dataArray['relatedProducts'] = $values_8;
        }
        if ($data->isInitialized('relatedProductsRelationSortingOrderSource')) {
            $dataArray['relatedProductsRelationSortingOrderSource'] = $data->getRelatedProductsRelationSortingOrderSource();
        }
        if ($data->isInitialized('toBeRemoved')) {
            $dataArray['toBeRemoved'] = $data->getToBeRemoved();
        }
        if ($data->isInitialized('type')) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('variantParentId')) {
            $dataArray['variantParentId'] = $data->getVariantParentId();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_9) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_9;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\ProductAllConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductAll::class => false];
    }
}