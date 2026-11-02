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
class CategoryAttributeDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryAttributeDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryAttributeDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryAttributeDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isCopyAttribute', $data) && \is_int($data['isCopyAttribute'])) {
            $data['isCopyAttribute'] = (bool) $data['isCopyAttribute'];
        }
        if (\array_key_exists('isLocked', $data) && \is_int($data['isLocked'])) {
            $data['isLocked'] = (bool) $data['isLocked'];
        }
        if (\array_key_exists('isMandatory', $data) && \is_int($data['isMandatory'])) {
            $data['isMandatory'] = (bool) $data['isMandatory'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\CategoryAttributeDtoConstraint());
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
        if (\array_key_exists('definitionId', $data)) {
            $object->setDefinitionId($data['definitionId']);
            unset($data['definitionId']);
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
        if (\array_key_exists('isCopyAttribute', $data) && $data['isCopyAttribute'] !== null) {
            $object->setIsCopyAttribute($data['isCopyAttribute']);
            unset($data['isCopyAttribute']);
        }
        elseif (\array_key_exists('isCopyAttribute', $data) && $data['isCopyAttribute'] === null) {
            $object->setIsCopyAttribute(null);
            unset($data['isCopyAttribute']);
        }
        if (\array_key_exists('isLocked', $data) && $data['isLocked'] !== null) {
            $object->setIsLocked($data['isLocked']);
            unset($data['isLocked']);
        }
        elseif (\array_key_exists('isLocked', $data) && $data['isLocked'] === null) {
            $object->setIsLocked(null);
            unset($data['isLocked']);
        }
        if (\array_key_exists('isMandatory', $data) && $data['isMandatory'] !== null) {
            $object->setIsMandatory($data['isMandatory']);
            unset($data['isMandatory']);
        }
        elseif (\array_key_exists('isMandatory', $data) && $data['isMandatory'] === null) {
            $object->setIsMandatory(null);
            unset($data['isMandatory']);
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
        if (\array_key_exists('select', $data) && $data['select'] !== null) {
            $values_4 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
            foreach ($data['select'] as $key_3 => $value_4) {
                $values_5 = [];
                foreach ($value_4 as $value_5) {
                    $values_5[] = $value_5;
                }
                $values_4[$key_3] = $values_5;
            }
            $object->setSelect($values_4);
            unset($data['select']);
        }
        elseif (\array_key_exists('select', $data) && $data['select'] === null) {
            $object->setSelect(null);
            unset($data['select']);
        }
        if (\array_key_exists('value', $data) && $data['value'] !== null) {
            $object->setValue($data['value']);
            unset($data['value']);
        }
        elseif (\array_key_exists('value', $data) && $data['value'] === null) {
            $object->setValue(null);
            unset($data['value']);
        }
        foreach ($data as $key_4 => $value_6) {
            if (preg_match('/.*/', (string) $key_4)) {
                $object[$key_4] = $value_6;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('column')) {
            $values = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
            foreach ($data->getColumn() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['column'] = $values;
        }
        if ($data->isInitialized('definitionId')) {
            $dataArray['definitionId'] = $data->getDefinitionId();
        }
        if ($data->isInitialized('dictionary')) {
            $values_1 = [];
            foreach ($data->getDictionary() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['dictionary'] = $values_1;
        }
        if ($data->isInitialized('isCopyAttribute')) {
            $dataArray['isCopyAttribute'] = $data->getIsCopyAttribute();
        }
        if ($data->isInitialized('isLocked')) {
            $dataArray['isLocked'] = $data->getIsLocked();
        }
        if ($data->isInitialized('isMandatory')) {
            $dataArray['isMandatory'] = $data->getIsMandatory();
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
        if ($data->isInitialized('select')) {
            $values_4 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
            foreach ($data->getSelect() as $key_3 => $value_4) {
                $values_5 = [];
                foreach ($value_4 as $value_5) {
                    $values_5[] = $value_5;
                }
                $values_4[$key_3] = $values_5;
            }
            $dataArray['select'] = $values_4;
        }
        if ($data->isInitialized('value')) {
            $dataArray['value'] = $data->getValue();
        }
        foreach ($data->additionalPropertyEntries() as $key_4 => $value_6) {
            if (preg_match('/.*/', (string) $key_4)) {
                $dataArray[$key_4] = $value_6;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\CategoryAttributeDtoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryAttributeDto::class => false];
    }
}