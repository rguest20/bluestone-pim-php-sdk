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
class ProductNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\Product::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\Product::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\Product();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('lastUpdate', $data) && \is_int($data['lastUpdate'])) {
            $data['lastUpdate'] = (float) $data['lastUpdate'];
        }
        if (\array_key_exists('createDate', $data) && \is_int($data['createDate'])) {
            $data['createDate'] = (float) $data['createDate'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Validator\ProductConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('attributes', $data)) {
            $values = [];
            foreach ($data['attributes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\Attribute::class, 'json', $context);
            }
            $object->setAttributes($values);
        }
        if (\array_key_exists('media', $data)) {
            $values_1 = [];
            foreach ($data['media'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\ProductMediaAsset::class, 'json', $context);
            }
            $object->setMedia($values_1);
        }
        if (\array_key_exists('labels', $data)) {
            $values_2 = [];
            foreach ($data['labels'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setLabels($values_2);
        }
        if (\array_key_exists('categories', $data)) {
            $values_3 = [];
            foreach ($data['categories'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setCategories($values_3);
        }
        if (\array_key_exists('relations', $data)) {
            $values_4 = [];
            foreach ($data['relations'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\ProductRelation::class, 'json', $context);
            }
            $object->setRelations($values_4);
        }
        if (\array_key_exists('metadata', $data)) {
            $values_5 = [];
            foreach ($data['metadata'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\MetaData::class, 'json', $context);
            }
            $object->setMetadata($values_5);
        }
        if (\array_key_exists('lastUpdate', $data)) {
            $object->setLastUpdate($data['lastUpdate']);
        }
        if (\array_key_exists('createDate', $data)) {
            $object->setCreateDate($data['createDate']);
        }
        if (\array_key_exists('bundles', $data)) {
            $values_6 = [];
            foreach ($data['bundles'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\ProductBundle::class, 'json', $context);
            }
            $object->setBundles($values_6);
        }
        if (\array_key_exists('variants', $data)) {
            $values_7 = [];
            foreach ($data['variants'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setVariants($values_7);
        }
        if (\array_key_exists('groups', $data)) {
            $values_8 = [];
            foreach ($data['groups'] as $value_8) {
                $values_8[] = $value_8;
            }
            $object->setGroups($values_8);
        }
        if (\array_key_exists('variantParentId', $data)) {
            $object->setVariantParentId($data['variantParentId']);
        }
        if (\array_key_exists('groupParentId', $data)) {
            $object->setGroupParentId($data['groupParentId']);
        }
        if (\array_key_exists('relatedProductsRelationSortingOrderSource', $data)) {
            $object->setRelatedProductsRelationSortingOrderSource($data['relatedProductsRelationSortingOrderSource']);
        }
        if (\array_key_exists('publishInfoId', $data)) {
            $object->setPublishInfoId($data['publishInfoId']);
        }
        if (\array_key_exists('contextId', $data)) {
            $object->setContextId($data['contextId']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['type'] = $data->getType();
        $dataArray['name'] = $data->getName();
        $dataArray['number'] = $data->getNumber();
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('attributes')) {
            $values = [];
            foreach ($data->getAttributes() as $value) {
                $values[] = $value === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['attributes'] = $values;
        }
        if ($data->isInitialized('media')) {
            $values_1 = [];
            foreach ($data->getMedia() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['media'] = $values_1;
        }
        if ($data->isInitialized('labels')) {
            $values_2 = [];
            foreach ($data->getLabels() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['labels'] = $values_2;
        }
        if ($data->isInitialized('categories')) {
            $values_3 = [];
            foreach ($data->getCategories() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['categories'] = $values_3;
        }
        if ($data->isInitialized('relations')) {
            $values_4 = [];
            foreach ($data->getRelations() as $value_4) {
                $values_4[] = $value_4 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['relations'] = $values_4;
        }
        if ($data->isInitialized('metadata')) {
            $values_5 = [];
            foreach ($data->getMetadata() as $value_5) {
                $values_5[] = $value_5 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['metadata'] = $values_5;
        }
        if ($data->isInitialized('lastUpdate')) {
            $dataArray['lastUpdate'] = $data->getLastUpdate();
        }
        if ($data->isInitialized('createDate')) {
            $dataArray['createDate'] = $data->getCreateDate();
        }
        if ($data->isInitialized('bundles')) {
            $values_6 = [];
            foreach ($data->getBundles() as $value_6) {
                $values_6[] = $value_6 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\JsonObject($this->normalizer->normalize($value_6, 'json', $context));
            }
            $dataArray['bundles'] = $values_6;
        }
        if ($data->isInitialized('variants')) {
            $values_7 = [];
            foreach ($data->getVariants() as $value_7) {
                $values_7[] = $value_7;
            }
            $dataArray['variants'] = $values_7;
        }
        if ($data->isInitialized('groups')) {
            $values_8 = [];
            foreach ($data->getGroups() as $value_8) {
                $values_8[] = $value_8;
            }
            $dataArray['groups'] = $values_8;
        }
        if ($data->isInitialized('variantParentId')) {
            $dataArray['variantParentId'] = $data->getVariantParentId();
        }
        if ($data->isInitialized('groupParentId')) {
            $dataArray['groupParentId'] = $data->getGroupParentId();
        }
        if ($data->isInitialized('relatedProductsRelationSortingOrderSource')) {
            $dataArray['relatedProductsRelationSortingOrderSource'] = $data->getRelatedProductsRelationSortingOrderSource();
        }
        if ($data->isInitialized('publishInfoId')) {
            $dataArray['publishInfoId'] = $data->getPublishInfoId();
        }
        if ($data->isInitialized('contextId')) {
            $dataArray['contextId'] = $data->getContextId();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Validator\ProductConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\Product::class => false];
    }
}