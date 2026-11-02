<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FilterResponseDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterResponseDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterResponseDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterResponseDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('public', $data) && \is_int($data['public'])) {
            $data['public'] = (bool) $data['public'];
        }
        if (\array_key_exists('valid', $data) && \is_int($data['valid'])) {
            $data['valid'] = (bool) $data['valid'];
        }
        if (\array_key_exists('readonly', $data) && \is_int($data['readonly'])) {
            $data['readonly'] = (bool) $data['readonly'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Validator\FilterResponseDtoConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('ownerId', $data)) {
            $object->setOwnerId($data['ownerId']);
            unset($data['ownerId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('service', $data)) {
            $object->setService($data['service']);
            unset($data['service']);
        }
        if (\array_key_exists('entity', $data)) {
            $object->setEntity($data['entity']);
            unset($data['entity']);
        }
        if (\array_key_exists('public', $data)) {
            $object->setPublic($data['public']);
            unset($data['public']);
        }
        if (\array_key_exists('valid', $data) && $data['valid'] !== null) {
            $object->setValid($data['valid']);
            unset($data['valid']);
        }
        elseif (\array_key_exists('valid', $data) && $data['valid'] === null) {
            $object->setValid(null);
            unset($data['valid']);
        }
        if (\array_key_exists('filter', $data)) {
            $values = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\JsonObject();
            foreach ($data['filter'] as $key => $value) {
                $values_1 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\JsonObject();
                foreach ($value as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $values[$key] = $values_1;
            }
            $object->setFilter($values);
            unset($data['filter']);
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt($data['updatedAt']);
            unset($data['updatedAt']);
        }
        if (\array_key_exists('readonly', $data)) {
            $object->setReadonly($data['readonly']);
            unset($data['readonly']);
        }
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id')) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('ownerId')) {
            $dataArray['ownerId'] = $data->getOwnerId();
        }
        if ($data->isInitialized('name')) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('service')) {
            $dataArray['service'] = $data->getService();
        }
        if ($data->isInitialized('entity')) {
            $dataArray['entity'] = $data->getEntity();
        }
        if ($data->isInitialized('public')) {
            $dataArray['public'] = $data->getPublic();
        }
        if ($data->isInitialized('valid')) {
            $dataArray['valid'] = $data->getValid();
        }
        if ($data->isInitialized('filter')) {
            $values = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\JsonObject();
            foreach ($data->getFilter() as $key => $value) {
                $values_1 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\JsonObject();
                foreach ($value as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $values[$key] = $values_1;
            }
            $dataArray['filter'] = $values;
        }
        if ($data->isInitialized('updatedAt')) {
            $dataArray['updatedAt'] = $data->getUpdatedAt();
        }
        if ($data->isInitialized('readonly')) {
            $dataArray['readonly'] = $data->getReadonly();
        }
        foreach ($data->additionalPropertyEntries() as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Validator\FilterResponseDtoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterResponseDto::class => false];
    }
}