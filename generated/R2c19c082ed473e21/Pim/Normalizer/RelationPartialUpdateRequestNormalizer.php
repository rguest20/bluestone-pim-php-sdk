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
class RelationPartialUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationPartialUpdateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationPartialUpdateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationPartialUpdateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('quantityEnabled', $data) && \is_int($data['quantityEnabled'])) {
            $data['quantityEnabled'] = (bool) $data['quantityEnabled'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\RelationPartialUpdateRequestConstraint());
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($this->denormalizer->denormalize($data['description'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PropertyUpdateString::class, 'json', $context));
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
            unset($data['description']);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($this->denormalizer->denormalize($data['name'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PropertyUpdateString::class, 'json', $context));
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
        if (\array_key_exists('quantityEnabled', $data) && $data['quantityEnabled'] !== null) {
            $object->setQuantityEnabled($data['quantityEnabled']);
            unset($data['quantityEnabled']);
        }
        elseif (\array_key_exists('quantityEnabled', $data) && $data['quantityEnabled'] === null) {
            $object->setQuantityEnabled(null);
            unset($data['quantityEnabled']);
        }
        if (\array_key_exists('reverseName', $data) && $data['reverseName'] !== null) {
            $object->setReverseName($this->denormalizer->denormalize($data['reverseName'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PropertyUpdateString::class, 'json', $context));
            unset($data['reverseName']);
        }
        elseif (\array_key_exists('reverseName', $data) && $data['reverseName'] === null) {
            $object->setReverseName(null);
            unset($data['reverseName']);
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
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getDescription(), 'json', $context));
        }
        if ($data->isInitialized('name')) {
            $dataArray['name'] = $data->getName() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getName(), 'json', $context));
        }
        if ($data->isInitialized('number')) {
            $dataArray['number'] = $data->getNumber();
        }
        if ($data->isInitialized('quantityEnabled')) {
            $dataArray['quantityEnabled'] = $data->getQuantityEnabled();
        }
        if ($data->isInitialized('reverseName')) {
            $dataArray['reverseName'] = $data->getReverseName() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getReverseName(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\RelationPartialUpdateRequestConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RelationPartialUpdateRequest::class => false];
    }
}