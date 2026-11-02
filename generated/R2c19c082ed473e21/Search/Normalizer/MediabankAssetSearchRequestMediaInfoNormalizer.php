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
class MediabankAssetSearchRequestMediaInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchRequestMediaInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchRequestMediaInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchRequestMediaInfo();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Validator\MediabankAssetSearchRequestMediaInfoConstraint());
        }
        if (\array_key_exists('mediaType', $data) && $data['mediaType'] !== null) {
            $object->setMediaType($data['mediaType']);
            unset($data['mediaType']);
        }
        elseif (\array_key_exists('mediaType', $data) && $data['mediaType'] === null) {
            $object->setMediaType(null);
            unset($data['mediaType']);
        }
        if (\array_key_exists('mediaTypes', $data) && $data['mediaTypes'] !== null) {
            $values = [];
            foreach ($data['mediaTypes'] as $value) {
                $values[] = $value;
            }
            $object->setMediaTypes($values);
            unset($data['mediaTypes']);
        }
        elseif (\array_key_exists('mediaTypes', $data) && $data['mediaTypes'] === null) {
            $object->setMediaTypes(null);
            unset($data['mediaTypes']);
        }
        if (\array_key_exists('dimensionsCondition', $data) && $data['dimensionsCondition'] !== null) {
            $object->setDimensionsCondition($data['dimensionsCondition']);
            unset($data['dimensionsCondition']);
        }
        elseif (\array_key_exists('dimensionsCondition', $data) && $data['dimensionsCondition'] === null) {
            $object->setDimensionsCondition(null);
            unset($data['dimensionsCondition']);
        }
        if (\array_key_exists('fileMinimumSize', $data) && $data['fileMinimumSize'] !== null) {
            $object->setFileMinimumSize($data['fileMinimumSize']);
            unset($data['fileMinimumSize']);
        }
        elseif (\array_key_exists('fileMinimumSize', $data) && $data['fileMinimumSize'] === null) {
            $object->setFileMinimumSize(null);
            unset($data['fileMinimumSize']);
        }
        if (\array_key_exists('fileMaximumSize', $data) && $data['fileMaximumSize'] !== null) {
            $object->setFileMaximumSize($data['fileMaximumSize']);
            unset($data['fileMaximumSize']);
        }
        elseif (\array_key_exists('fileMaximumSize', $data) && $data['fileMaximumSize'] === null) {
            $object->setFileMaximumSize(null);
            unset($data['fileMaximumSize']);
        }
        if (\array_key_exists('fileExtension', $data) && $data['fileExtension'] !== null) {
            $object->setFileExtension($data['fileExtension']);
            unset($data['fileExtension']);
        }
        elseif (\array_key_exists('fileExtension', $data) && $data['fileExtension'] === null) {
            $object->setFileExtension(null);
            unset($data['fileExtension']);
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
        if ($data->isInitialized('mediaType')) {
            $dataArray['mediaType'] = $data->getMediaType();
        }
        if ($data->isInitialized('mediaTypes')) {
            $values = [];
            foreach ($data->getMediaTypes() as $value) {
                $values[] = $value;
            }
            $dataArray['mediaTypes'] = $values;
        }
        if ($data->isInitialized('dimensionsCondition')) {
            $dataArray['dimensionsCondition'] = $data->getDimensionsCondition();
        }
        if ($data->isInitialized('fileMinimumSize')) {
            $dataArray['fileMinimumSize'] = $data->getFileMinimumSize();
        }
        if ($data->isInitialized('fileMaximumSize')) {
            $dataArray['fileMaximumSize'] = $data->getFileMaximumSize();
        }
        if ($data->isInitialized('fileExtension')) {
            $dataArray['fileExtension'] = $data->getFileExtension();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Validator\MediabankAssetSearchRequestMediaInfoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchRequestMediaInfo::class => false];
    }
}