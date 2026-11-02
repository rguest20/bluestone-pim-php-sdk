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
class ValidableAttributeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ValidableAttribute::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ValidableAttribute::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ValidableAttribute();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\ValidableAttributeConstraint());
        }
        if (\array_key_exists('definitionId', $data)) {
            $object->setDefinitionId($data['definitionId']);
            unset($data['definitionId']);
        }
        if (\array_key_exists('dictionaryValueIds', $data) && $data['dictionaryValueIds'] !== null) {
            $values = [];
            foreach ($data['dictionaryValueIds'] as $value) {
                $values[] = $value;
            }
            $object->setDictionaryValueIds($values);
            unset($data['dictionaryValueIds']);
        }
        elseif (\array_key_exists('dictionaryValueIds', $data) && $data['dictionaryValueIds'] === null) {
            $object->setDictionaryValueIds(null);
            unset($data['dictionaryValueIds']);
        }
        if (\array_key_exists('selectValueIds', $data) && $data['selectValueIds'] !== null) {
            $values_1 = [];
            foreach ($data['selectValueIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSelectValueIds($values_1);
            unset($data['selectValueIds']);
        }
        elseif (\array_key_exists('selectValueIds', $data) && $data['selectValueIds'] === null) {
            $object->setSelectValueIds(null);
            unset($data['selectValueIds']);
        }
        if (\array_key_exists('values', $data) && $data['values'] !== null) {
            $values_2 = [];
            foreach ($data['values'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setValues($values_2);
            unset($data['values']);
        }
        elseif (\array_key_exists('values', $data) && $data['values'] === null) {
            $object->setValues(null);
            unset($data['values']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        if ($data->isInitialized('dictionaryValueIds')) {
            $values = [];
            foreach ($data->getDictionaryValueIds() as $value) {
                $values[] = $value;
            }
            $dataArray['dictionaryValueIds'] = $values;
        }
        if ($data->isInitialized('selectValueIds')) {
            $values_1 = [];
            foreach ($data->getSelectValueIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['selectValueIds'] = $values_1;
        }
        if ($data->isInitialized('values')) {
            $values_2 = [];
            foreach ($data->getValues() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['values'] = $values_2;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\ValidableAttributeConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ValidableAttribute::class => false];
    }
}