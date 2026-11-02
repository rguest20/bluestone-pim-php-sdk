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
class MediabankAssetSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchRequest();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Validator\MediabankAssetSearchRequestConstraint());
        }
        if (\array_key_exists('page', $data)) {
            $object->setPage($data['page']);
            unset($data['page']);
        }
        if (\array_key_exists('resultsPerPage', $data)) {
            $object->setResultsPerPage($data['resultsPerPage']);
            unset($data['resultsPerPage']);
        }
        if (\array_key_exists('sortField', $data) && $data['sortField'] !== null) {
            $object->setSortField($data['sortField']);
            unset($data['sortField']);
        }
        elseif (\array_key_exists('sortField', $data) && $data['sortField'] === null) {
            $object->setSortField(null);
            unset($data['sortField']);
        }
        if (\array_key_exists('attributeIdToSortBy', $data) && $data['attributeIdToSortBy'] !== null) {
            $object->setAttributeIdToSortBy($data['attributeIdToSortBy']);
            unset($data['attributeIdToSortBy']);
        }
        elseif (\array_key_exists('attributeIdToSortBy', $data) && $data['attributeIdToSortBy'] === null) {
            $object->setAttributeIdToSortBy(null);
            unset($data['attributeIdToSortBy']);
        }
        if (\array_key_exists('sortOrder', $data) && $data['sortOrder'] !== null) {
            $object->setSortOrder($data['sortOrder']);
            unset($data['sortOrder']);
        }
        elseif (\array_key_exists('sortOrder', $data) && $data['sortOrder'] === null) {
            $object->setSortOrder(null);
            unset($data['sortOrder']);
        }
        if (\array_key_exists('quickSearch', $data) && $data['quickSearch'] !== null) {
            $object->setQuickSearch($data['quickSearch']);
            unset($data['quickSearch']);
        }
        elseif (\array_key_exists('quickSearch', $data) && $data['quickSearch'] === null) {
            $object->setQuickSearch(null);
            unset($data['quickSearch']);
        }
        if (\array_key_exists('asset', $data) && $data['asset'] !== null) {
            $object->setAsset($this->denormalizer->denormalize($data['asset'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchRequestAsset::class, 'json', $context));
            unset($data['asset']);
        }
        elseif (\array_key_exists('asset', $data) && $data['asset'] === null) {
            $object->setAsset(null);
            unset($data['asset']);
        }
        if (\array_key_exists('mediaInfo', $data) && $data['mediaInfo'] !== null) {
            $object->setMediaInfo($this->denormalizer->denormalize($data['mediaInfo'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchRequestMediaInfo::class, 'json', $context));
            unset($data['mediaInfo']);
        }
        elseif (\array_key_exists('mediaInfo', $data) && $data['mediaInfo'] === null) {
            $object->setMediaInfo(null);
            unset($data['mediaInfo']);
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
        $dataArray['page'] = $data->getPage();
        $dataArray['resultsPerPage'] = $data->getResultsPerPage();
        if ($data->isInitialized('sortField')) {
            $dataArray['sortField'] = $data->getSortField();
        }
        if ($data->isInitialized('attributeIdToSortBy')) {
            $dataArray['attributeIdToSortBy'] = $data->getAttributeIdToSortBy();
        }
        if ($data->isInitialized('sortOrder')) {
            $dataArray['sortOrder'] = $data->getSortOrder();
        }
        if ($data->isInitialized('quickSearch')) {
            $dataArray['quickSearch'] = $data->getQuickSearch();
        }
        if ($data->isInitialized('asset')) {
            $dataArray['asset'] = $data->getAsset() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getAsset(), 'json', $context));
        }
        if ($data->isInitialized('mediaInfo')) {
            $dataArray['mediaInfo'] = $data->getMediaInfo() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getMediaInfo(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Validator\MediabankAssetSearchRequestConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetSearchRequest::class => false];
    }
}