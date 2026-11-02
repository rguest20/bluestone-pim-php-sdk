<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AssetFilterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetFilter::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetFilter::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetFilter();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Validator\AssetFilterConstraint());
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('labelsIds', $data) && $data['labelsIds'] !== null) {
            $values = [];
            foreach ($data['labelsIds'] as $value) {
                $values[] = $value;
            }
            $object->setLabelsIds($values);
            unset($data['labelsIds']);
        }
        elseif (\array_key_exists('labelsIds', $data) && $data['labelsIds'] === null) {
            $object->setLabelsIds(null);
            unset($data['labelsIds']);
        }
        if (\array_key_exists('assetCount', $data) && $data['assetCount'] !== null) {
            $object->setAssetCount($data['assetCount']);
            unset($data['assetCount']);
        }
        elseif (\array_key_exists('assetCount', $data) && $data['assetCount'] === null) {
            $object->setAssetCount(null);
            unset($data['assetCount']);
        }
        if (\array_key_exists('assetIds', $data) && $data['assetIds'] !== null) {
            $values_1 = [];
            foreach ($data['assetIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAssetIds($values_1);
            unset($data['assetIds']);
        }
        elseif (\array_key_exists('assetIds', $data) && $data['assetIds'] === null) {
            $object->setAssetIds(null);
            unset($data['assetIds']);
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
        $dataArray['type'] = $data->getType();
        if ($data->isInitialized('labelsIds')) {
            $values = [];
            foreach ($data->getLabelsIds() as $value) {
                $values[] = $value;
            }
            $dataArray['labelsIds'] = $values;
        }
        if ($data->isInitialized('assetCount')) {
            $dataArray['assetCount'] = $data->getAssetCount();
        }
        if ($data->isInitialized('assetIds')) {
            $values_1 = [];
            foreach ($data->getAssetIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['assetIds'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Validator\AssetFilterConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AssetFilter::class => false];
    }
}