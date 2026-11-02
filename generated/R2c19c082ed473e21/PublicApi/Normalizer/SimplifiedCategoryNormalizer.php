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
class SimplifiedCategoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\SimplifiedCategory::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\SimplifiedCategory::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\SimplifiedCategory();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('order', $data) && \is_int($data['order'])) {
            $data['order'] = (float) $data['order'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Validator\SimplifiedCategoryConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('parentId', $data)) {
            $object->setParentId($data['parentId']);
        }
        if (\array_key_exists('order', $data)) {
            $object->setOrder($data['order']);
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
        if (\array_key_exists('media', $data)) {
            $values = [];
            foreach ($data['media'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CategoryMediaAsset::class, 'json', $context);
            }
            $object->setMedia($values);
        }
        if (\array_key_exists('attributes', $data)) {
            $values_1 = [];
            foreach ($data['attributes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\Attribute::class, 'json', $context);
            }
            $object->setAttributes($values_1);
        }
        if (\array_key_exists('categoryAttributes', $data)) {
            $values_2 = [];
            foreach ($data['categoryAttributes'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CategoryAttribute::class, 'json', $context);
            }
            $object->setCategoryAttributes($values_2);
        }
        if (\array_key_exists('metaData', $data)) {
            $values_3 = [];
            foreach ($data['metaData'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\MetaData::class, 'json', $context);
            }
            $object->setMetaData($values_3);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('parentId')) {
            $dataArray['parentId'] = $data->getParentId();
        }
        if ($data->isInitialized('order')) {
            $dataArray['order'] = $data->getOrder();
        }
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('number')) {
            $dataArray['number'] = $data->getNumber();
        }
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('media')) {
            $values = [];
            foreach ($data->getMedia() as $value) {
                $values[] = $value === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['media'] = $values;
        }
        if ($data->isInitialized('attributes')) {
            $values_1 = [];
            foreach ($data->getAttributes() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['attributes'] = $values_1;
        }
        if ($data->isInitialized('categoryAttributes')) {
            $values_2 = [];
            foreach ($data->getCategoryAttributes() as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['categoryAttributes'] = $values_2;
        }
        if ($data->isInitialized('metaData')) {
            $values_3 = [];
            foreach ($data->getMetaData() as $value_3) {
                $values_3[] = $value_3 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['metaData'] = $values_3;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Validator\SimplifiedCategoryConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\SimplifiedCategory::class => false];
    }
}