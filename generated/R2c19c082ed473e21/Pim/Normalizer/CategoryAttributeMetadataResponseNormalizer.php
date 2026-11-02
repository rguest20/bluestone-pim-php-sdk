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
class CategoryAttributeMetadataResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryAttributeMetadataResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryAttributeMetadataResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryAttributeMetadataResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('readOnly', $data) && \is_int($data['readOnly'])) {
            $data['readOnly'] = (bool) $data['readOnly'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\CategoryAttributeMetadataResponseConstraint());
        }
        if (\array_key_exists('assignedOn', $data) && $data['assignedOn'] !== null) {
            $object->setAssignedOn($data['assignedOn']);
            unset($data['assignedOn']);
        }
        elseif (\array_key_exists('assignedOn', $data) && $data['assignedOn'] === null) {
            $object->setAssignedOn(null);
            unset($data['assignedOn']);
        }
        if (\array_key_exists('attributeDefinitionId', $data)) {
            $object->setAttributeDefinitionId($data['attributeDefinitionId']);
            unset($data['attributeDefinitionId']);
        }
        if (\array_key_exists('attributeDefinitionName', $data) && $data['attributeDefinitionName'] !== null) {
            $object->setAttributeDefinitionName($data['attributeDefinitionName']);
            unset($data['attributeDefinitionName']);
        }
        elseif (\array_key_exists('attributeDefinitionName', $data) && $data['attributeDefinitionName'] === null) {
            $object->setAttributeDefinitionName(null);
            unset($data['attributeDefinitionName']);
        }
        if (\array_key_exists('attributeValue', $data) && $data['attributeValue'] !== null) {
            $object->setAttributeValue($data['attributeValue']);
            unset($data['attributeValue']);
        }
        elseif (\array_key_exists('attributeValue', $data) && $data['attributeValue'] === null) {
            $object->setAttributeValue(null);
            unset($data['attributeValue']);
        }
        if (\array_key_exists('column', $data) && $data['column'] !== null) {
            $values = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
            foreach ($data['column'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setColumn($values);
            unset($data['column']);
        }
        elseif (\array_key_exists('column', $data) && $data['column'] === null) {
            $object->setColumn(null);
            unset($data['column']);
        }
        if (\array_key_exists('copySetOn', $data) && $data['copySetOn'] !== null) {
            $object->setCopySetOn($data['copySetOn']);
            unset($data['copySetOn']);
        }
        elseif (\array_key_exists('copySetOn', $data) && $data['copySetOn'] === null) {
            $object->setCopySetOn(null);
            unset($data['copySetOn']);
        }
        if (\array_key_exists('dictionary', $data) && $data['dictionary'] !== null) {
            $values_1 = [];
            foreach ($data['dictionary'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setDictionary($values_1);
            unset($data['dictionary']);
        }
        elseif (\array_key_exists('dictionary', $data) && $data['dictionary'] === null) {
            $object->setDictionary(null);
            unset($data['dictionary']);
        }
        if (\array_key_exists('lockedSetOn', $data) && $data['lockedSetOn'] !== null) {
            $object->setLockedSetOn($data['lockedSetOn']);
            unset($data['lockedSetOn']);
        }
        elseif (\array_key_exists('lockedSetOn', $data) && $data['lockedSetOn'] === null) {
            $object->setLockedSetOn(null);
            unset($data['lockedSetOn']);
        }
        if (\array_key_exists('mandatorySetOn', $data) && $data['mandatorySetOn'] !== null) {
            $object->setMandatorySetOn($data['mandatorySetOn']);
            unset($data['mandatorySetOn']);
        }
        elseif (\array_key_exists('mandatorySetOn', $data) && $data['mandatorySetOn'] === null) {
            $object->setMandatorySetOn(null);
            unset($data['mandatorySetOn']);
        }
        if (\array_key_exists('matrix', $data) && $data['matrix'] !== null) {
            $values_2 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
            foreach ($data['matrix'] as $key_1 => $value_2) {
                $values_3 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                foreach ($value_2 as $key_2 => $value_3) {
                    $values_3[$key_2] = $value_3;
                }
                $values_2[$key_1] = $values_3;
            }
            $object->setMatrix($values_2);
            unset($data['matrix']);
        }
        elseif (\array_key_exists('matrix', $data) && $data['matrix'] === null) {
            $object->setMatrix(null);
            unset($data['matrix']);
        }
        if (\array_key_exists('readOnly', $data)) {
            $object->setReadOnly($data['readOnly']);
            unset($data['readOnly']);
        }
        foreach ($data as $key_3 => $value_4) {
            if (preg_match('/.*/', (string) $key_3)) {
                $object[$key_3] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('assignedOn')) {
            $dataArray['assignedOn'] = $data->getAssignedOn();
        }
        if ($data->isInitialized('attributeDefinitionId')) {
            $dataArray['attributeDefinitionId'] = $data->getAttributeDefinitionId();
        }
        if ($data->isInitialized('attributeDefinitionName')) {
            $dataArray['attributeDefinitionName'] = $data->getAttributeDefinitionName();
        }
        if ($data->isInitialized('attributeValue')) {
            $dataArray['attributeValue'] = $data->getAttributeValue();
        }
        if ($data->isInitialized('column')) {
            $values = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
            foreach ($data->getColumn() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['column'] = $values;
        }
        if ($data->isInitialized('copySetOn')) {
            $dataArray['copySetOn'] = $data->getCopySetOn();
        }
        if ($data->isInitialized('dictionary')) {
            $values_1 = [];
            foreach ($data->getDictionary() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['dictionary'] = $values_1;
        }
        if ($data->isInitialized('lockedSetOn')) {
            $dataArray['lockedSetOn'] = $data->getLockedSetOn();
        }
        if ($data->isInitialized('mandatorySetOn')) {
            $dataArray['mandatorySetOn'] = $data->getMandatorySetOn();
        }
        if ($data->isInitialized('matrix')) {
            $values_2 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
            foreach ($data->getMatrix() as $key_1 => $value_2) {
                $values_3 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                foreach ($value_2 as $key_2 => $value_3) {
                    $values_3[$key_2] = $value_3;
                }
                $values_2[$key_1] = $values_3;
            }
            $dataArray['matrix'] = $values_2;
        }
        if ($data->isInitialized('readOnly')) {
            $dataArray['readOnly'] = $data->getReadOnly();
        }
        foreach ($data->additionalPropertyEntries() as $key_3 => $value_4) {
            if (preg_match('/.*/', (string) $key_3)) {
                $dataArray[$key_3] = $value_4;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\CategoryAttributeMetadataResponseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryAttributeMetadataResponse::class => false];
    }
}