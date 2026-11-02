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
class AttributeDefinitionMetadataUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionMetadataUpdateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionMetadataUpdateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionMetadataUpdateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('externalSource', $data) && \is_int($data['externalSource'])) {
            $data['externalSource'] = (bool) $data['externalSource'];
        }
        if (\array_key_exists('internal', $data) && \is_int($data['internal'])) {
            $data['internal'] = (bool) $data['internal'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\AttributeDefinitionMetadataUpdateRequestConstraint());
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($this->denormalizer->denormalize($data['description'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PropertyUpdateString::class, 'json', $context));
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
            unset($data['description']);
        }
        if (\array_key_exists('externalSource', $data) && $data['externalSource'] !== null) {
            $object->setExternalSource($data['externalSource']);
            unset($data['externalSource']);
        }
        elseif (\array_key_exists('externalSource', $data) && $data['externalSource'] === null) {
            $object->setExternalSource(null);
            unset($data['externalSource']);
        }
        if (\array_key_exists('internal', $data) && $data['internal'] !== null) {
            $object->setInternal($data['internal']);
            unset($data['internal']);
        }
        elseif (\array_key_exists('internal', $data) && $data['internal'] === null) {
            $object->setInternal(null);
            unset($data['internal']);
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
            $object->setNumber($this->denormalizer->denormalize($data['number'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PropertyUpdateString::class, 'json', $context));
            unset($data['number']);
        }
        elseif (\array_key_exists('number', $data) && $data['number'] === null) {
            $object->setNumber(null);
            unset($data['number']);
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
        if ($data->isInitialized('externalSource')) {
            $dataArray['externalSource'] = $data->getExternalSource();
        }
        if ($data->isInitialized('internal')) {
            $dataArray['internal'] = $data->getInternal();
        }
        if ($data->isInitialized('name')) {
            $dataArray['name'] = $data->getName() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getName(), 'json', $context));
        }
        if ($data->isInitialized('number')) {
            $dataArray['number'] = $data->getNumber() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getNumber(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\AttributeDefinitionMetadataUpdateRequestConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionMetadataUpdateRequest::class => false];
    }
}