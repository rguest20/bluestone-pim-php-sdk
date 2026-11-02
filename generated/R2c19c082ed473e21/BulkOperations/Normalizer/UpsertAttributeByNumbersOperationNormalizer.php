<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class UpsertAttributeByNumbersOperationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Model\UpsertAttributeByNumbersOperation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Model\UpsertAttributeByNumbersOperation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Model\UpsertAttributeByNumbersOperation();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Validator\UpsertAttributeByNumbersOperationConstraint());
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->setProductNumber($data['productNumber']);
            unset($data['productNumber']);
        }
        if (\array_key_exists('definitionNumber', $data)) {
            $object->setDefinitionNumber($data['definitionNumber']);
            unset($data['definitionNumber']);
        }
        if (\array_key_exists('contextId', $data)) {
            $object->setContextId($data['contextId']);
            unset($data['contextId']);
        }
        if (\array_key_exists('value', $data) && $data['value'] !== null) {
            $object->setValue($data['value']);
            unset($data['value']);
        }
        elseif (\array_key_exists('value', $data) && $data['value'] === null) {
            $object->setValue(null);
            unset($data['value']);
        }
        if (\array_key_exists('selectValueNumbers', $data) && $data['selectValueNumbers'] !== null) {
            $values = [];
            foreach ($data['selectValueNumbers'] as $value) {
                $values[] = $value;
            }
            $object->setSelectValueNumbers($values);
            unset($data['selectValueNumbers']);
        }
        elseif (\array_key_exists('selectValueNumbers', $data) && $data['selectValueNumbers'] === null) {
            $object->setSelectValueNumbers(null);
            unset($data['selectValueNumbers']);
        }
        if (\array_key_exists('dictionaryValueNumbers', $data) && $data['dictionaryValueNumbers'] !== null) {
            $values_1 = [];
            foreach ($data['dictionaryValueNumbers'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setDictionaryValueNumbers($values_1);
            unset($data['dictionaryValueNumbers']);
        }
        elseif (\array_key_exists('dictionaryValueNumbers', $data) && $data['dictionaryValueNumbers'] === null) {
            $object->setDictionaryValueNumbers(null);
            unset($data['dictionaryValueNumbers']);
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
        $dataArray['productNumber'] = $data->getProductNumber();
        $dataArray['definitionNumber'] = $data->getDefinitionNumber();
        if ($data->isInitialized('contextId')) {
            $dataArray['contextId'] = $data->getContextId();
        }
        if ($data->isInitialized('value')) {
            $dataArray['value'] = $data->getValue();
        }
        if ($data->isInitialized('selectValueNumbers')) {
            $values = [];
            foreach ($data->getSelectValueNumbers() as $value) {
                $values[] = $value;
            }
            $dataArray['selectValueNumbers'] = $values;
        }
        if ($data->isInitialized('dictionaryValueNumbers')) {
            $values_1 = [];
            foreach ($data->getDictionaryValueNumbers() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['dictionaryValueNumbers'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Validator\UpsertAttributeByNumbersOperationConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Model\UpsertAttributeByNumbersOperation::class => false];
    }
}