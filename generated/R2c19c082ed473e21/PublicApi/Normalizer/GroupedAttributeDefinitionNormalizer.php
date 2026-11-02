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
class GroupedAttributeDefinitionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\GroupedAttributeDefinition::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\GroupedAttributeDefinition::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\GroupedAttributeDefinition();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('sortingOrder', $data) && \is_int($data['sortingOrder'])) {
            $data['sortingOrder'] = (float) $data['sortingOrder'];
        }
        if (\array_key_exists('order', $data) && \is_int($data['order'])) {
            $data['order'] = (float) $data['order'];
        }
        if (\array_key_exists('groupOrder', $data) && \is_int($data['groupOrder'])) {
            $data['groupOrder'] = (float) $data['groupOrder'];
        }
        if (\array_key_exists('isCompound', $data) && \is_int($data['isCompound'])) {
            $data['isCompound'] = (bool) $data['isCompound'];
        }
        if (\array_key_exists('contextAware', $data) && \is_int($data['contextAware'])) {
            $data['contextAware'] = (bool) $data['contextAware'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Validator\GroupedAttributeDefinitionConstraint());
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
        if (\array_key_exists('dataType', $data)) {
            $object->setDataType($data['dataType']);
        }
        if (\array_key_exists('sortingOrder', $data)) {
            $object->setSortingOrder($data['sortingOrder']);
        }
        if (\array_key_exists('groupId', $data)) {
            $object->setGroupId($data['groupId']);
        }
        if (\array_key_exists('groupName', $data)) {
            $object->setGroupName($data['groupName']);
        }
        if (\array_key_exists('groupNumber', $data)) {
            $object->setGroupNumber($data['groupNumber']);
        }
        if (\array_key_exists('columns', $data)) {
            $values = [];
            foreach ($data['columns'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\ColumnAttributeDefinitionValue::class, 'json', $context);
            }
            $object->setColumns($values);
        }
        if (\array_key_exists('rows', $data)) {
            $values_1 = [];
            foreach ($data['rows'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\RowAttributeDefinitionValue::class, 'json', $context);
            }
            $object->setRows($values_1);
        }
        if (\array_key_exists('isCompound', $data)) {
            $object->setIsCompound($data['isCompound']);
        }
        if (\array_key_exists('subDefinitions', $data)) {
            $values_2 = [];
            foreach ($data['subDefinitions'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CompoundAttributeSubDefinition::class, 'json', $context);
            }
            $object->setSubDefinitions($values_2);
        }
        if (\array_key_exists('format', $data)) {
            $values_3 = [];
            foreach ($data['format'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setFormat($values_3);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('contentType', $data)) {
            $object->setContentType($data['contentType']);
        }
        if (\array_key_exists('valueType', $data)) {
            $object->setValueType($data['valueType']);
        }
        if (\array_key_exists('contextAware', $data)) {
            $object->setContextAware($data['contextAware']);
        }
        if (\array_key_exists('order', $data)) {
            $object->setOrder($data['order']);
        }
        if (\array_key_exists('groupOrder', $data)) {
            $object->setGroupOrder($data['groupOrder']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('number')) {
            $dataArray['number'] = $data->getNumber();
        }
        if ($data->isInitialized('unit')) {
            $dataArray['unit'] = $data->getUnit();
        }
        if ($data->isInitialized('dataType')) {
            $dataArray['dataType'] = $data->getDataType();
        }
        $dataArray['sortingOrder'] = $data->getSortingOrder();
        $dataArray['groupId'] = $data->getGroupId();
        $dataArray['groupName'] = $data->getGroupName();
        if ($data->isInitialized('groupNumber')) {
            $dataArray['groupNumber'] = $data->getGroupNumber();
        }
        if ($data->isInitialized('columns')) {
            $values = [];
            foreach ($data->getColumns() as $value) {
                $values[] = $value === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['columns'] = $values;
        }
        if ($data->isInitialized('rows')) {
            $values_1 = [];
            foreach ($data->getRows() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['rows'] = $values_1;
        }
        if ($data->isInitialized('isCompound')) {
            $dataArray['isCompound'] = $data->getIsCompound();
        }
        if ($data->isInitialized('subDefinitions')) {
            $values_2 = [];
            foreach ($data->getSubDefinitions() as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['subDefinitions'] = $values_2;
        }
        if ($data->isInitialized('format')) {
            $values_3 = [];
            foreach ($data->getFormat() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['format'] = $values_3;
        }
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('contentType')) {
            $dataArray['contentType'] = $data->getContentType();
        }
        if ($data->isInitialized('valueType')) {
            $dataArray['valueType'] = $data->getValueType();
        }
        if ($data->isInitialized('contextAware')) {
            $dataArray['contextAware'] = $data->getContextAware();
        }
        $dataArray['order'] = $data->getOrder();
        $dataArray['groupOrder'] = $data->getGroupOrder();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Validator\GroupedAttributeDefinitionConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\GroupedAttributeDefinition::class => false];
    }
}