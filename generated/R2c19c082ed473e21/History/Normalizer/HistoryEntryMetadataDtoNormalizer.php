<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class HistoryEntryMetadataDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\HistoryEntryMetadataDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\HistoryEntryMetadataDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\HistoryEntryMetadataDto();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Validator\HistoryEntryMetadataDtoConstraint());
        }
        if (\array_key_exists('value', $data) && $data['value'] !== null) {
            $object->setValue($data['value']);
            unset($data['value']);
        }
        elseif (\array_key_exists('value', $data) && $data['value'] === null) {
            $object->setValue(null);
            unset($data['value']);
        }
        if (\array_key_exists('field', $data) && $data['field'] !== null) {
            $object->setField($data['field']);
            unset($data['field']);
        }
        elseif (\array_key_exists('field', $data) && $data['field'] === null) {
            $object->setField(null);
            unset($data['field']);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
            unset($data['type']);
        }
        if (\array_key_exists('entity', $data) && $data['entity'] !== null) {
            $object->setEntity($this->denormalizer->denormalize($data['entity'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\EntityDto::class, 'json', $context));
            unset($data['entity']);
        }
        elseif (\array_key_exists('entity', $data) && $data['entity'] === null) {
            $object->setEntity(null);
            unset($data['entity']);
        }
        if (\array_key_exists('oldValue', $data) && $data['oldValue'] !== null) {
            $object->setOldValue($data['oldValue']);
            unset($data['oldValue']);
        }
        elseif (\array_key_exists('oldValue', $data) && $data['oldValue'] === null) {
            $object->setOldValue(null);
            unset($data['oldValue']);
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
        if ($data->isInitialized('value')) {
            $dataArray['value'] = $data->getValue();
        }
        if ($data->isInitialized('field')) {
            $dataArray['field'] = $data->getField();
        }
        if ($data->isInitialized('type')) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('entity')) {
            $dataArray['entity'] = $data->getEntity() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Runtime\JsonObject($this->normalizer->normalize($data->getEntity(), 'json', $context));
        }
        if ($data->isInitialized('oldValue')) {
            $dataArray['oldValue'] = $data->getOldValue();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Validator\HistoryEntryMetadataDtoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\HistoryEntryMetadataDto::class => false];
    }
}