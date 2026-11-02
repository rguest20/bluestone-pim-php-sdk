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
class CompoundAttributeDefinitionRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CompoundAttributeDefinitionRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CompoundAttributeDefinitionRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CompoundAttributeDefinitionRequest();
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
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\CompoundAttributeDefinitionRequestConstraint());
        }
        if (\array_key_exists('contextAware', $data) && $data['contextAware'] !== null) {
            $object->setContextAware($data['contextAware']);
            unset($data['contextAware']);
        }
        elseif (\array_key_exists('contextAware', $data) && $data['contextAware'] === null) {
            $object->setContextAware(null);
            unset($data['contextAware']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
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
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $values = [];
            foreach ($data['format'] as $value) {
                $values[] = $value;
            }
            $object->setFormat($values);
            unset($data['format']);
        }
        elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->setFormat(null);
            unset($data['format']);
        }
        if (\array_key_exists('groupId', $data) && $data['groupId'] !== null) {
            $object->setGroupId($data['groupId']);
            unset($data['groupId']);
        }
        elseif (\array_key_exists('groupId', $data) && $data['groupId'] === null) {
            $object->setGroupId(null);
            unset($data['groupId']);
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
        if (\array_key_exists('subDefinitions', $data)) {
            $values_1 = [];
            foreach ($data['subDefinitions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CompoundAttributeSubDefinitionDto::class, 'json', $context);
            }
            $object->setSubDefinitions($values_1);
            unset($data['subDefinitions']);
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
        if ($data->isInitialized('contextAware')) {
            $dataArray['contextAware'] = $data->getContextAware();
        }
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('externalSource')) {
            $dataArray['externalSource'] = $data->getExternalSource();
        }
        if ($data->isInitialized('format')) {
            $values = [];
            foreach ($data->getFormat() as $value) {
                $values[] = $value;
            }
            $dataArray['format'] = $values;
        }
        if ($data->isInitialized('groupId')) {
            $dataArray['groupId'] = $data->getGroupId();
        }
        if ($data->isInitialized('internal')) {
            $dataArray['internal'] = $data->getInternal();
        }
        if ($data->isInitialized('name')) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('number')) {
            $dataArray['number'] = $data->getNumber();
        }
        if ($data->isInitialized('subDefinitions')) {
            $values_1 = [];
            foreach ($data->getSubDefinitions() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['subDefinitions'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\CompoundAttributeDefinitionRequestConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CompoundAttributeDefinitionRequest::class => false];
    }
}