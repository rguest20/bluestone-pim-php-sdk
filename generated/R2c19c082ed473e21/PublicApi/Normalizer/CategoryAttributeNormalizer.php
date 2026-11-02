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
class CategoryAttributeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CategoryAttribute::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CategoryAttribute::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CategoryAttribute();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Validator\CategoryAttributeConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
        }
        if (\array_key_exists('unit', $data)) {
            $object->setUnit($data['unit']);
        }
        if (\array_key_exists('groupName', $data)) {
            $object->setGroupName($data['groupName']);
        }
        if (\array_key_exists('groupNumber', $data)) {
            $object->setGroupNumber($data['groupNumber']);
        }
        if (\array_key_exists('dataType', $data)) {
            $object->setDataType($data['dataType']);
        }
        if (\array_key_exists('contentType', $data)) {
            $object->setContentType($data['contentType']);
        }
        if (\array_key_exists('valueType', $data)) {
            $object->setValueType($data['valueType']);
        }
        if (\array_key_exists('values', $data)) {
            $values = [];
            foreach ($data['values'] as $value) {
                $values[] = $value;
            }
            $object->setValues($values);
        }
        if (\array_key_exists('select', $data)) {
            $values_1 = [];
            foreach ($data['select'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\SelectValue::class, 'json', $context);
            }
            $object->setSelect($values_1);
        }
        if (\array_key_exists('dictionary', $data)) {
            $values_2 = [];
            foreach ($data['dictionary'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\DictionaryValue::class, 'json', $context);
            }
            $object->setDictionary($values_2);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('name')) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('number')) {
            $dataArray['number'] = $data->getNumber();
        }
        if ($data->isInitialized('unit')) {
            $dataArray['unit'] = $data->getUnit();
        }
        if ($data->isInitialized('groupName')) {
            $dataArray['groupName'] = $data->getGroupName();
        }
        if ($data->isInitialized('groupNumber')) {
            $dataArray['groupNumber'] = $data->getGroupNumber();
        }
        if ($data->isInitialized('dataType')) {
            $dataArray['dataType'] = $data->getDataType();
        }
        if ($data->isInitialized('contentType')) {
            $dataArray['contentType'] = $data->getContentType();
        }
        if ($data->isInitialized('valueType')) {
            $dataArray['valueType'] = $data->getValueType();
        }
        $values = [];
        foreach ($data->getValues() as $value) {
            $values[] = $value;
        }
        $dataArray['values'] = $values;
        if ($data->isInitialized('select')) {
            $values_1 = [];
            foreach ($data->getSelect() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['select'] = $values_1;
        }
        if ($data->isInitialized('dictionary')) {
            $values_2 = [];
            foreach ($data->getDictionary() as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['dictionary'] = $values_2;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Validator\CategoryAttributeConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CategoryAttribute::class => false];
    }
}