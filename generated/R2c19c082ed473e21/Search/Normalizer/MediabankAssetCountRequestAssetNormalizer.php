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
class MediabankAssetCountRequestAssetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetCountRequestAsset::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetCountRequestAsset::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetCountRequestAsset();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('internal', $data) && \is_int($data['internal'])) {
            $data['internal'] = (bool) $data['internal'];
        }
        if (\array_key_exists('published', $data) && \is_int($data['published'])) {
            $data['published'] = (bool) $data['published'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Validator\MediabankAssetCountRequestAssetConstraint());
        }
        if (\array_key_exists('uploader', $data) && $data['uploader'] !== null) {
            $object->setUploader($data['uploader']);
            unset($data['uploader']);
        }
        elseif (\array_key_exists('uploader', $data) && $data['uploader'] === null) {
            $object->setUploader(null);
            unset($data['uploader']);
        }
        if (\array_key_exists('internal', $data) && $data['internal'] !== null) {
            $object->setInternal($data['internal']);
            unset($data['internal']);
        }
        elseif (\array_key_exists('internal', $data) && $data['internal'] === null) {
            $object->setInternal(null);
            unset($data['internal']);
        }
        if (\array_key_exists('published', $data) && $data['published'] !== null) {
            $object->setPublished($data['published']);
            unset($data['published']);
        }
        elseif (\array_key_exists('published', $data) && $data['published'] === null) {
            $object->setPublished(null);
            unset($data['published']);
        }
        if (\array_key_exists('idsParams', $data) && $data['idsParams'] !== null) {
            $object->setIdsParams($this->denormalizer->denormalize($data['idsParams'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsIdsParams::class, 'json', $context));
            unset($data['idsParams']);
        }
        elseif (\array_key_exists('idsParams', $data) && $data['idsParams'] === null) {
            $object->setIdsParams(null);
            unset($data['idsParams']);
        }
        if (\array_key_exists('numbersParams', $data) && $data['numbersParams'] !== null) {
            $object->setNumbersParams($this->denormalizer->denormalize($data['numbersParams'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsNumbersParams::class, 'json', $context));
            unset($data['numbersParams']);
        }
        elseif (\array_key_exists('numbersParams', $data) && $data['numbersParams'] === null) {
            $object->setNumbersParams(null);
            unset($data['numbersParams']);
        }
        if (\array_key_exists('nameParams', $data) && $data['nameParams'] !== null) {
            $object->setNameParams($this->denormalizer->denormalize($data['nameParams'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsNameParams::class, 'json', $context));
            unset($data['nameParams']);
        }
        elseif (\array_key_exists('nameParams', $data) && $data['nameParams'] === null) {
            $object->setNameParams(null);
            unset($data['nameParams']);
        }
        if (\array_key_exists('descriptionParams', $data) && $data['descriptionParams'] !== null) {
            $object->setDescriptionParams($this->denormalizer->denormalize($data['descriptionParams'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsDescriptionParams::class, 'json', $context));
            unset($data['descriptionParams']);
        }
        elseif (\array_key_exists('descriptionParams', $data) && $data['descriptionParams'] === null) {
            $object->setDescriptionParams(null);
            unset($data['descriptionParams']);
        }
        if (\array_key_exists('productsParams', $data) && $data['productsParams'] !== null) {
            $object->setProductsParams($this->denormalizer->denormalize($data['productsParams'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsProductsParams::class, 'json', $context));
            unset($data['productsParams']);
        }
        elseif (\array_key_exists('productsParams', $data) && $data['productsParams'] === null) {
            $object->setProductsParams(null);
            unset($data['productsParams']);
        }
        if (\array_key_exists('categoriesParams', $data) && $data['categoriesParams'] !== null) {
            $object->setCategoriesParams($this->denormalizer->denormalize($data['categoriesParams'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsCategoriesParams::class, 'json', $context));
            unset($data['categoriesParams']);
        }
        elseif (\array_key_exists('categoriesParams', $data) && $data['categoriesParams'] === null) {
            $object->setCategoriesParams(null);
            unset($data['categoriesParams']);
        }
        if (\array_key_exists('labelsParams', $data) && $data['labelsParams'] !== null) {
            $object->setLabelsParams($this->denormalizer->denormalize($data['labelsParams'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsLabelsParams::class, 'json', $context));
            unset($data['labelsParams']);
        }
        elseif (\array_key_exists('labelsParams', $data) && $data['labelsParams'] === null) {
            $object->setLabelsParams(null);
            unset($data['labelsParams']);
        }
        if (\array_key_exists('fileParams', $data) && $data['fileParams'] !== null) {
            $object->setFileParams($this->denormalizer->denormalize($data['fileParams'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsFileParams::class, 'json', $context));
            unset($data['fileParams']);
        }
        elseif (\array_key_exists('fileParams', $data) && $data['fileParams'] === null) {
            $object->setFileParams(null);
            unset($data['fileParams']);
        }
        if (\array_key_exists('created', $data) && $data['created'] !== null) {
            $object->setCreated($this->denormalizer->denormalize($data['created'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsCreated::class, 'json', $context));
            unset($data['created']);
        }
        elseif (\array_key_exists('created', $data) && $data['created'] === null) {
            $object->setCreated(null);
            unset($data['created']);
        }
        if (\array_key_exists('updated', $data) && $data['updated'] !== null) {
            $object->setUpdated($this->denormalizer->denormalize($data['updated'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsUpdated::class, 'json', $context));
            unset($data['updated']);
        }
        elseif (\array_key_exists('updated', $data) && $data['updated'] === null) {
            $object->setUpdated(null);
            unset($data['updated']);
        }
        if (\array_key_exists('createdRelative', $data) && $data['createdRelative'] !== null) {
            $object->setCreatedRelative($this->denormalizer->denormalize($data['createdRelative'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsCreatedRelative::class, 'json', $context));
            unset($data['createdRelative']);
        }
        elseif (\array_key_exists('createdRelative', $data) && $data['createdRelative'] === null) {
            $object->setCreatedRelative(null);
            unset($data['createdRelative']);
        }
        if (\array_key_exists('updatedRelative', $data) && $data['updatedRelative'] !== null) {
            $object->setUpdatedRelative($this->denormalizer->denormalize($data['updatedRelative'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetsParamsUpdatedRelative::class, 'json', $context));
            unset($data['updatedRelative']);
        }
        elseif (\array_key_exists('updatedRelative', $data) && $data['updatedRelative'] === null) {
            $object->setUpdatedRelative(null);
            unset($data['updatedRelative']);
        }
        if (\array_key_exists('attributeFilters', $data) && $data['attributeFilters'] !== null) {
            $values = [];
            foreach ($data['attributeFilters'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\AttributeFilter::class, 'json', $context);
            }
            $object->setAttributeFilters($values);
            unset($data['attributeFilters']);
        }
        elseif (\array_key_exists('attributeFilters', $data) && $data['attributeFilters'] === null) {
            $object->setAttributeFilters(null);
            unset($data['attributeFilters']);
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
        if ($data->isInitialized('uploader')) {
            $dataArray['uploader'] = $data->getUploader();
        }
        if ($data->isInitialized('internal')) {
            $dataArray['internal'] = $data->getInternal();
        }
        if ($data->isInitialized('published')) {
            $dataArray['published'] = $data->getPublished();
        }
        if ($data->isInitialized('idsParams')) {
            $dataArray['idsParams'] = $data->getIdsParams() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getIdsParams(), 'json', $context));
        }
        if ($data->isInitialized('numbersParams')) {
            $dataArray['numbersParams'] = $data->getNumbersParams() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getNumbersParams(), 'json', $context));
        }
        if ($data->isInitialized('nameParams')) {
            $dataArray['nameParams'] = $data->getNameParams() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getNameParams(), 'json', $context));
        }
        if ($data->isInitialized('descriptionParams')) {
            $dataArray['descriptionParams'] = $data->getDescriptionParams() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getDescriptionParams(), 'json', $context));
        }
        if ($data->isInitialized('productsParams')) {
            $dataArray['productsParams'] = $data->getProductsParams() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getProductsParams(), 'json', $context));
        }
        if ($data->isInitialized('categoriesParams')) {
            $dataArray['categoriesParams'] = $data->getCategoriesParams() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getCategoriesParams(), 'json', $context));
        }
        if ($data->isInitialized('labelsParams')) {
            $dataArray['labelsParams'] = $data->getLabelsParams() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getLabelsParams(), 'json', $context));
        }
        if ($data->isInitialized('fileParams')) {
            $dataArray['fileParams'] = $data->getFileParams() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getFileParams(), 'json', $context));
        }
        if ($data->isInitialized('created')) {
            $dataArray['created'] = $data->getCreated() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getCreated(), 'json', $context));
        }
        if ($data->isInitialized('updated')) {
            $dataArray['updated'] = $data->getUpdated() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getUpdated(), 'json', $context));
        }
        if ($data->isInitialized('createdRelative')) {
            $dataArray['createdRelative'] = $data->getCreatedRelative() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getCreatedRelative(), 'json', $context));
        }
        if ($data->isInitialized('updatedRelative')) {
            $dataArray['updatedRelative'] = $data->getUpdatedRelative() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($data->getUpdatedRelative(), 'json', $context));
        }
        if ($data->isInitialized('attributeFilters')) {
            $values = [];
            foreach ($data->getAttributeFilters() as $value) {
                $values[] = $value === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['attributeFilters'] = $values;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Validator\MediabankAssetCountRequestAssetConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\MediabankAssetCountRequestAsset::class => false];
    }
}