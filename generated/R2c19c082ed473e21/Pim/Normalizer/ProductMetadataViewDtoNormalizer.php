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
class ProductMetadataViewDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductMetadataViewDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductMetadataViewDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductMetadataViewDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('archived', $data) && \is_int($data['archived'])) {
            $data['archived'] = (bool) $data['archived'];
        }
        if (\array_key_exists('readOnly', $data) && \is_int($data['readOnly'])) {
            $data['readOnly'] = (bool) $data['readOnly'];
        }
        if (\array_key_exists('toBeRemoved', $data) && \is_int($data['toBeRemoved'])) {
            $data['toBeRemoved'] = (bool) $data['toBeRemoved'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\ProductMetadataViewDtoConstraint());
        }
        if (\array_key_exists('archived', $data) && $data['archived'] !== null) {
            $object->setArchived($data['archived']);
            unset($data['archived']);
        }
        elseif (\array_key_exists('archived', $data) && $data['archived'] === null) {
            $object->setArchived(null);
            unset($data['archived']);
        }
        if (\array_key_exists('createDate', $data) && $data['createDate'] !== null) {
            $object->setCreateDate($data['createDate']);
            unset($data['createDate']);
        }
        elseif (\array_key_exists('createDate', $data) && $data['createDate'] === null) {
            $object->setCreateDate(null);
            unset($data['createDate']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($this->denormalizer->denormalize($data['description'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MultiLanguageDto::class, 'json', $context));
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
            unset($data['description']);
        }
        if (\array_key_exists('groupParentId', $data) && $data['groupParentId'] !== null) {
            $object->setGroupParentId($data['groupParentId']);
            unset($data['groupParentId']);
        }
        elseif (\array_key_exists('groupParentId', $data) && $data['groupParentId'] === null) {
            $object->setGroupParentId(null);
            unset($data['groupParentId']);
        }
        if (\array_key_exists('lastUpdate', $data) && $data['lastUpdate'] !== null) {
            $object->setLastUpdate($data['lastUpdate']);
            unset($data['lastUpdate']);
        }
        elseif (\array_key_exists('lastUpdate', $data) && $data['lastUpdate'] === null) {
            $object->setLastUpdate(null);
            unset($data['lastUpdate']);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($this->denormalizer->denormalize($data['name'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MultiLanguageDto::class, 'json', $context));
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
        if (\array_key_exists('readOnly', $data) && $data['readOnly'] !== null) {
            $object->setReadOnly($data['readOnly']);
            unset($data['readOnly']);
        }
        elseif (\array_key_exists('readOnly', $data) && $data['readOnly'] === null) {
            $object->setReadOnly(null);
            unset($data['readOnly']);
        }
        if (\array_key_exists('relatedProductsRelationSortingOrderSource', $data) && $data['relatedProductsRelationSortingOrderSource'] !== null) {
            $object->setRelatedProductsRelationSortingOrderSource($data['relatedProductsRelationSortingOrderSource']);
            unset($data['relatedProductsRelationSortingOrderSource']);
        }
        elseif (\array_key_exists('relatedProductsRelationSortingOrderSource', $data) && $data['relatedProductsRelationSortingOrderSource'] === null) {
            $object->setRelatedProductsRelationSortingOrderSource(null);
            unset($data['relatedProductsRelationSortingOrderSource']);
        }
        if (\array_key_exists('toBeRemoved', $data) && $data['toBeRemoved'] !== null) {
            $object->setToBeRemoved($data['toBeRemoved']);
            unset($data['toBeRemoved']);
        }
        elseif (\array_key_exists('toBeRemoved', $data) && $data['toBeRemoved'] === null) {
            $object->setToBeRemoved(null);
            unset($data['toBeRemoved']);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
            unset($data['type']);
        }
        if (\array_key_exists('variantParentId', $data) && $data['variantParentId'] !== null) {
            $object->setVariantParentId($data['variantParentId']);
            unset($data['variantParentId']);
        }
        elseif (\array_key_exists('variantParentId', $data) && $data['variantParentId'] === null) {
            $object->setVariantParentId(null);
            unset($data['variantParentId']);
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
        if ($data->isInitialized('archived')) {
            $dataArray['archived'] = $data->getArchived();
        }
        if ($data->isInitialized('createDate')) {
            $dataArray['createDate'] = $data->getCreateDate();
        }
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getDescription(), 'json', $context));
        }
        if ($data->isInitialized('groupParentId')) {
            $dataArray['groupParentId'] = $data->getGroupParentId();
        }
        if ($data->isInitialized('lastUpdate')) {
            $dataArray['lastUpdate'] = $data->getLastUpdate();
        }
        if ($data->isInitialized('name')) {
            $dataArray['name'] = $data->getName() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getName(), 'json', $context));
        }
        if ($data->isInitialized('number')) {
            $dataArray['number'] = $data->getNumber();
        }
        if ($data->isInitialized('readOnly')) {
            $dataArray['readOnly'] = $data->getReadOnly();
        }
        if ($data->isInitialized('relatedProductsRelationSortingOrderSource')) {
            $dataArray['relatedProductsRelationSortingOrderSource'] = $data->getRelatedProductsRelationSortingOrderSource();
        }
        if ($data->isInitialized('toBeRemoved')) {
            $dataArray['toBeRemoved'] = $data->getToBeRemoved();
        }
        if ($data->isInitialized('type')) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('variantParentId')) {
            $dataArray['variantParentId'] = $data->getVariantParentId();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\ProductMetadataViewDtoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductMetadataViewDto::class => false];
    }
}