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
class AttributeDefinitionResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('contextAware', $data) && \is_int($data['contextAware'])) {
            $data['contextAware'] = (bool) $data['contextAware'];
        }
        if (\array_key_exists('externalSource', $data) && \is_int($data['externalSource'])) {
            $data['externalSource'] = (bool) $data['externalSource'];
        }
        if (\array_key_exists('internal', $data) && \is_int($data['internal'])) {
            $data['internal'] = (bool) $data['internal'];
        }
        if (\array_key_exists('isCompound', $data) && \is_int($data['isCompound'])) {
            $data['isCompound'] = (bool) $data['isCompound'];
        }
        if (\array_key_exists('readOnly', $data) && \is_int($data['readOnly'])) {
            $data['readOnly'] = (bool) $data['readOnly'];
        }
        if (\array_key_exists('toBeRemoved', $data) && \is_int($data['toBeRemoved'])) {
            $data['toBeRemoved'] = (bool) $data['toBeRemoved'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\AttributeDefinitionResponseConstraint());
        }
        if (\array_key_exists('charset', $data) && $data['charset'] !== null) {
            $object->setCharset($data['charset']);
            unset($data['charset']);
        }
        elseif (\array_key_exists('charset', $data) && $data['charset'] === null) {
            $object->setCharset(null);
            unset($data['charset']);
        }
        if (\array_key_exists('contentType', $data) && $data['contentType'] !== null) {
            $object->setContentType($data['contentType']);
            unset($data['contentType']);
        }
        elseif (\array_key_exists('contentType', $data) && $data['contentType'] === null) {
            $object->setContentType(null);
            unset($data['contentType']);
        }
        if (\array_key_exists('contextAware', $data) && $data['contextAware'] !== null) {
            $object->setContextAware($data['contextAware']);
            unset($data['contextAware']);
        }
        elseif (\array_key_exists('contextAware', $data) && $data['contextAware'] === null) {
            $object->setContextAware(null);
            unset($data['contextAware']);
        }
        if (\array_key_exists('dataType', $data) && $data['dataType'] !== null) {
            $object->setDataType($data['dataType']);
            unset($data['dataType']);
        }
        elseif (\array_key_exists('dataType', $data) && $data['dataType'] === null) {
            $object->setDataType(null);
            unset($data['dataType']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
            unset($data['description']);
        }
        if (\array_key_exists('dictionaryMetadataType', $data) && $data['dictionaryMetadataType'] !== null) {
            $object->setDictionaryMetadataType($data['dictionaryMetadataType']);
            unset($data['dictionaryMetadataType']);
        }
        elseif (\array_key_exists('dictionaryMetadataType', $data) && $data['dictionaryMetadataType'] === null) {
            $object->setDictionaryMetadataType(null);
            unset($data['dictionaryMetadataType']);
        }
        if (\array_key_exists('externalSource', $data) && $data['externalSource'] !== null) {
            $object->setExternalSource($data['externalSource']);
            unset($data['externalSource']);
        }
        elseif (\array_key_exists('externalSource', $data) && $data['externalSource'] === null) {
            $object->setExternalSource(null);
            unset($data['externalSource']);
        }
        if (\array_key_exists('filterParentDefinitionId', $data) && $data['filterParentDefinitionId'] !== null) {
            $object->setFilterParentDefinitionId($data['filterParentDefinitionId']);
            unset($data['filterParentDefinitionId']);
        }
        elseif (\array_key_exists('filterParentDefinitionId', $data) && $data['filterParentDefinitionId'] === null) {
            $object->setFilterParentDefinitionId(null);
            unset($data['filterParentDefinitionId']);
        }
        if (\array_key_exists('group', $data) && $data['group'] !== null) {
            $object->setGroup($data['group']);
            unset($data['group']);
        }
        elseif (\array_key_exists('group', $data) && $data['group'] === null) {
            $object->setGroup(null);
            unset($data['group']);
        }
        if (\array_key_exists('groupId', $data) && $data['groupId'] !== null) {
            $object->setGroupId($data['groupId']);
            unset($data['groupId']);
        }
        elseif (\array_key_exists('groupId', $data) && $data['groupId'] === null) {
            $object->setGroupId(null);
            unset($data['groupId']);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
            unset($data['id']);
        }
        if (\array_key_exists('internal', $data) && $data['internal'] !== null) {
            $object->setInternal($data['internal']);
            unset($data['internal']);
        }
        elseif (\array_key_exists('internal', $data) && $data['internal'] === null) {
            $object->setInternal(null);
            unset($data['internal']);
        }
        if (\array_key_exists('isCompound', $data) && $data['isCompound'] !== null) {
            $object->setIsCompound($data['isCompound']);
            unset($data['isCompound']);
        }
        elseif (\array_key_exists('isCompound', $data) && $data['isCompound'] === null) {
            $object->setIsCompound(null);
            unset($data['isCompound']);
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
        if (\array_key_exists('readOnly', $data)) {
            $object->setReadOnly($data['readOnly']);
            unset($data['readOnly']);
        }
        if (\array_key_exists('restrictions', $data) && $data['restrictions'] !== null) {
            $object->setRestrictions($this->denormalizer->denormalize($data['restrictions'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RestrictionsDto::class, 'json', $context));
            unset($data['restrictions']);
        }
        elseif (\array_key_exists('restrictions', $data) && $data['restrictions'] === null) {
            $object->setRestrictions(null);
            unset($data['restrictions']);
        }
        if (\array_key_exists('selectedValuesLimit', $data) && $data['selectedValuesLimit'] !== null) {
            $object->setSelectedValuesLimit($data['selectedValuesLimit']);
            unset($data['selectedValuesLimit']);
        }
        elseif (\array_key_exists('selectedValuesLimit', $data) && $data['selectedValuesLimit'] === null) {
            $object->setSelectedValuesLimit(null);
            unset($data['selectedValuesLimit']);
        }
        if (\array_key_exists('toBeRemoved', $data) && $data['toBeRemoved'] !== null) {
            $object->setToBeRemoved($data['toBeRemoved']);
            unset($data['toBeRemoved']);
        }
        elseif (\array_key_exists('toBeRemoved', $data) && $data['toBeRemoved'] === null) {
            $object->setToBeRemoved(null);
            unset($data['toBeRemoved']);
        }
        if (\array_key_exists('unit', $data) && $data['unit'] !== null) {
            $object->setUnit($data['unit']);
            unset($data['unit']);
        }
        elseif (\array_key_exists('unit', $data) && $data['unit'] === null) {
            $object->setUnit(null);
            unset($data['unit']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('charset')) {
            $dataArray['charset'] = $data->getCharset();
        }
        if ($data->isInitialized('contentType')) {
            $dataArray['contentType'] = $data->getContentType();
        }
        if ($data->isInitialized('contextAware')) {
            $dataArray['contextAware'] = $data->getContextAware();
        }
        if ($data->isInitialized('dataType')) {
            $dataArray['dataType'] = $data->getDataType();
        }
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('dictionaryMetadataType')) {
            $dataArray['dictionaryMetadataType'] = $data->getDictionaryMetadataType();
        }
        if ($data->isInitialized('externalSource')) {
            $dataArray['externalSource'] = $data->getExternalSource();
        }
        if ($data->isInitialized('filterParentDefinitionId')) {
            $dataArray['filterParentDefinitionId'] = $data->getFilterParentDefinitionId();
        }
        if ($data->isInitialized('group')) {
            $dataArray['group'] = $data->getGroup();
        }
        if ($data->isInitialized('groupId')) {
            $dataArray['groupId'] = $data->getGroupId();
        }
        if ($data->isInitialized('id')) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('internal')) {
            $dataArray['internal'] = $data->getInternal();
        }
        if ($data->isInitialized('isCompound')) {
            $dataArray['isCompound'] = $data->getIsCompound();
        }
        if ($data->isInitialized('name')) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('number')) {
            $dataArray['number'] = $data->getNumber();
        }
        if ($data->isInitialized('readOnly')) {
            $dataArray['readOnly'] = $data->getReadOnly();
        }
        if ($data->isInitialized('restrictions')) {
            $dataArray['restrictions'] = $data->getRestrictions() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getRestrictions(), 'json', $context));
        }
        if ($data->isInitialized('selectedValuesLimit')) {
            $dataArray['selectedValuesLimit'] = $data->getSelectedValuesLimit();
        }
        if ($data->isInitialized('toBeRemoved')) {
            $dataArray['toBeRemoved'] = $data->getToBeRemoved();
        }
        if ($data->isInitialized('unit')) {
            $dataArray['unit'] = $data->getUnit();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\AttributeDefinitionResponseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionResponse::class => false];
    }
}