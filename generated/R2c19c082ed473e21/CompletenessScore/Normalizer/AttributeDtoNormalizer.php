<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AttributeDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\AttributeDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\AttributeDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\AttributeDto();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Validator\AttributeDtoConstraint());
        }
        if (\array_key_exists('definitionId', $data)) {
            $object->setDefinitionId($data['definitionId']);
            unset($data['definitionId']);
        }
        if (\array_key_exists('value', $data) && $data['value'] !== null) {
            $object->setValue($data['value']);
            unset($data['value']);
        }
        elseif (\array_key_exists('value', $data) && $data['value'] === null) {
            $object->setValue(null);
            unset($data['value']);
        }
        if (\array_key_exists('selectValuesIds', $data) && $data['selectValuesIds'] !== null) {
            $values = [];
            foreach ($data['selectValuesIds'] as $value) {
                $values[] = $value;
            }
            $object->setSelectValuesIds($values);
            unset($data['selectValuesIds']);
        }
        elseif (\array_key_exists('selectValuesIds', $data) && $data['selectValuesIds'] === null) {
            $object->setSelectValuesIds(null);
            unset($data['selectValuesIds']);
        }
        if (\array_key_exists('dictionaryValuesIds', $data) && $data['dictionaryValuesIds'] !== null) {
            $values_1 = [];
            foreach ($data['dictionaryValuesIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setDictionaryValuesIds($values_1);
            unset($data['dictionaryValuesIds']);
        }
        elseif (\array_key_exists('dictionaryValuesIds', $data) && $data['dictionaryValuesIds'] === null) {
            $object->setDictionaryValuesIds(null);
            unset($data['dictionaryValuesIds']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('definitionId')) {
            $dataArray['definitionId'] = $data->getDefinitionId();
        }
        if ($data->isInitialized('value')) {
            $dataArray['value'] = $data->getValue();
        }
        if ($data->isInitialized('selectValuesIds')) {
            $values = [];
            foreach ($data->getSelectValuesIds() as $value) {
                $values[] = $value;
            }
            $dataArray['selectValuesIds'] = $values;
        }
        if ($data->isInitialized('dictionaryValuesIds')) {
            $values_1 = [];
            foreach ($data->getDictionaryValuesIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['dictionaryValuesIds'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Validator\AttributeDtoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\AttributeDto::class => false];
    }
}