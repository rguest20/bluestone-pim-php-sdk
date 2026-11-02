<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ColumnSetupAllCreateRequestBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\ColumnSetupAllCreateRequestBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\ColumnSetupAllCreateRequestBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\ColumnSetupAllCreateRequestBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isPublic', $data) && \is_int($data['isPublic'])) {
            $data['isPublic'] = (bool) $data['isPublic'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Validator\ColumnSetupAllCreateRequestBodyConstraint());
        }
        if (\array_key_exists('columns', $data)) {
            $values = [];
            foreach ($data['columns'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\ColumnsSet::class, 'json', $context);
            }
            $object->setColumns($values);
        }
        if (\array_key_exists('isPublic', $data)) {
            $object->setIsPublic($data['isPublic']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('service', $data)) {
            $object->setService($data['service']);
        }
        if (\array_key_exists('entity', $data)) {
            $object->setEntity($data['entity']);
        }
        if (\array_key_exists('sortConfig', $data)) {
            $object->setSortConfig($this->denormalizer->denormalize($data['sortConfig'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\ColumnSetupAllCreateRequestBodySortConfig::class, 'json', $context));
        }
        if (\array_key_exists('owner', $data)) {
            $object->setOwner($data['owner']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getColumns() as $value) {
            $values[] = $value === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['columns'] = $values;
        $dataArray['isPublic'] = $data->getIsPublic();
        $dataArray['name'] = $data->getName();
        $dataArray['service'] = $data->getService();
        $dataArray['entity'] = $data->getEntity();
        if ($data->isInitialized('sortConfig')) {
            $dataArray['sortConfig'] = $data->getSortConfig() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Runtime\JsonObject($this->normalizer->normalize($data->getSortConfig(), 'json', $context));
        }
        $dataArray['owner'] = $data->getOwner();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Validator\ColumnSetupAllCreateRequestBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\ColumnSetupAllCreateRequestBody::class => false];
    }
}