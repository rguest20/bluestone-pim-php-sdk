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
class ProductAttributeValueNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductAttributeValue::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductAttributeValue::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductAttributeValue();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('copy', $data) && \is_int($data['copy'])) {
            $data['copy'] = (bool) $data['copy'];
        }
        if (\array_key_exists('definingAttributes', $data) && \is_int($data['definingAttributes'])) {
            $data['definingAttributes'] = (bool) $data['definingAttributes'];
        }
        if (\array_key_exists('locked', $data) && \is_int($data['locked'])) {
            $data['locked'] = (bool) $data['locked'];
        }
        if (\array_key_exists('mandatory', $data) && \is_int($data['mandatory'])) {
            $data['mandatory'] = (bool) $data['mandatory'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\ProductAttributeValueConstraint());
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
        if (\array_key_exists('copy', $data) && $data['copy'] !== null) {
            $object->setCopy($data['copy']);
            unset($data['copy']);
        }
        elseif (\array_key_exists('copy', $data) && $data['copy'] === null) {
            $object->setCopy(null);
            unset($data['copy']);
        }
        if (\array_key_exists('definingAttributes', $data) && $data['definingAttributes'] !== null) {
            $object->setDefiningAttributes($data['definingAttributes']);
            unset($data['definingAttributes']);
        }
        elseif (\array_key_exists('definingAttributes', $data) && $data['definingAttributes'] === null) {
            $object->setDefiningAttributes(null);
            unset($data['definingAttributes']);
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
        if (\array_key_exists('locked', $data) && $data['locked'] !== null) {
            $object->setLocked($data['locked']);
            unset($data['locked']);
        }
        elseif (\array_key_exists('locked', $data) && $data['locked'] === null) {
            $object->setLocked(null);
            unset($data['locked']);
        }
        if (\array_key_exists('mandatory', $data) && $data['mandatory'] !== null) {
            $object->setMandatory($data['mandatory']);
            unset($data['mandatory']);
        }
        elseif (\array_key_exists('mandatory', $data) && $data['mandatory'] === null) {
            $object->setMandatory(null);
            unset($data['mandatory']);
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
        if (\array_key_exists('values', $data) && $data['values'] !== null) {
            $values_4 = [];
            foreach ($data['values'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setValues($values_4);
            unset($data['values']);
        }
        elseif (\array_key_exists('values', $data) && $data['values'] === null) {
            $object->setValues(null);
            unset($data['values']);
        }
        foreach ($data as $key_3 => $value_5) {
            if (preg_match('/.*/', (string) $key_3)) {
                $object[$key_3] = $value_5;
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
        if ($data->isInitialized('copy')) {
            $dataArray['copy'] = $data->getCopy();
        }
        if ($data->isInitialized('definingAttributes')) {
            $dataArray['definingAttributes'] = $data->getDefiningAttributes();
        }
        $dataArray['definitionId'] = $data->getDefinitionId();
        if ($data->isInitialized('dictionary')) {
            $values_1 = [];
            foreach ($data->getDictionary() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['dictionary'] = $values_1;
        }
        if ($data->isInitialized('locked')) {
            $dataArray['locked'] = $data->getLocked();
        }
        if ($data->isInitialized('mandatory')) {
            $dataArray['mandatory'] = $data->getMandatory();
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
        if ($data->isInitialized('values')) {
            $values_4 = [];
            foreach ($data->getValues() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['values'] = $values_4;
        }
        foreach ($data->additionalPropertyEntries() as $key_3 => $value_5) {
            if (preg_match('/.*/', (string) $key_3)) {
                $dataArray[$key_3] = $value_5;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\ProductAttributeValueConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductAttributeValue::class => false];
    }
}