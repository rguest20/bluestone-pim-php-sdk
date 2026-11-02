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
class FilterSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterSearchRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterSearchRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterSearchRequest();
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
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Validator\FilterSearchRequestConstraint());
        }
        if (\array_key_exists('ids', $data) && $data['ids'] !== null) {
            $values = [];
            foreach ($data['ids'] as $value) {
                $values[] = $value;
            }
            $object->setIds($values);
            unset($data['ids']);
        }
        elseif (\array_key_exists('ids', $data) && $data['ids'] === null) {
            $object->setIds(null);
            unset($data['ids']);
        }
        if (\array_key_exists('ownerId', $data) && $data['ownerId'] !== null) {
            $object->setOwnerId($data['ownerId']);
            unset($data['ownerId']);
        }
        elseif (\array_key_exists('ownerId', $data) && $data['ownerId'] === null) {
            $object->setOwnerId(null);
            unset($data['ownerId']);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
            unset($data['name']);
        }
        if (\array_key_exists('service', $data) && $data['service'] !== null) {
            $object->setService($data['service']);
            unset($data['service']);
        }
        elseif (\array_key_exists('service', $data) && $data['service'] === null) {
            $object->setService(null);
            unset($data['service']);
        }
        if (\array_key_exists('entity', $data) && $data['entity'] !== null) {
            $object->setEntity($data['entity']);
            unset($data['entity']);
        }
        elseif (\array_key_exists('entity', $data) && $data['entity'] === null) {
            $object->setEntity(null);
            unset($data['entity']);
        }
        if (\array_key_exists('public', $data) && $data['public'] !== null) {
            $object->setPublic($data['public']);
            unset($data['public']);
        }
        elseif (\array_key_exists('public', $data) && $data['public'] === null) {
            $object->setPublic(null);
            unset($data['public']);
        }
        if (\array_key_exists('page', $data)) {
            $object->setPage($data['page']);
            unset($data['page']);
        }
        if (\array_key_exists('pageSize', $data)) {
            $object->setPageSize($data['pageSize']);
            unset($data['pageSize']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('ids')) {
            $values = [];
            foreach ($data->getIds() as $value) {
                $values[] = $value;
            }
            $dataArray['ids'] = $values;
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
        if ($data->isInitialized('page')) {
            $dataArray['page'] = $data->getPage();
        }
        if ($data->isInitialized('pageSize')) {
            $dataArray['pageSize'] = $data->getPageSize();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Validator\FilterSearchRequestConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\FilterSearchRequest::class => false];
    }
}