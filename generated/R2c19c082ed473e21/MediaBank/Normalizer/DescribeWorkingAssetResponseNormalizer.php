<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DescribeWorkingAssetResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DescribeWorkingAssetResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DescribeWorkingAssetResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DescribeWorkingAssetResponse();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Validator\DescribeWorkingAssetResponseConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
            unset($data['number']);
        }
        if (\array_key_exists('mediaInfo', $data)) {
            $object->setMediaInfo($this->denormalizer->denormalize($data['mediaInfo'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DescribeMediaInfoWorkingAssetResponse::class, 'json', $context));
            unset($data['mediaInfo']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('labels', $data)) {
            $values = [];
            foreach ($data['labels'] as $value) {
                $values[] = $value;
            }
            $object->setLabels($values);
            unset($data['labels']);
        }
        if (\array_key_exists('products', $data)) {
            $values_1 = [];
            foreach ($data['products'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setProducts($values_1);
            unset($data['products']);
        }
        if (\array_key_exists('categories', $data)) {
            $values_2 = [];
            foreach ($data['categories'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCategories($values_2);
            unset($data['categories']);
        }
        if (\array_key_exists('fileName', $data)) {
            $object->setFileName($data['fileName']);
            unset($data['fileName']);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt($data['createdAt']);
            unset($data['createdAt']);
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt($data['updatedAt']);
            unset($data['updatedAt']);
        }
        if (\array_key_exists('createdBy', $data)) {
            $object->setCreatedBy($data['createdBy']);
            unset($data['createdBy']);
        }
        if (\array_key_exists('internal', $data)) {
            $object->setInternal($data['internal']);
            unset($data['internal']);
        }
        if (\array_key_exists('published', $data)) {
            $object->setPublished($data['published']);
            unset($data['published']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        if ($data->isInitialized('number')) {
            $dataArray['number'] = $data->getNumber();
        }
        if ($data->isInitialized('mediaInfo')) {
            $dataArray['mediaInfo'] = $data->getMediaInfo() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\JsonObject($this->normalizer->normalize($data->getMediaInfo(), 'json', $context));
        }
        if ($data->isInitialized('name')) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('labels')) {
            $values = [];
            foreach ($data->getLabels() as $value) {
                $values[] = $value;
            }
            $dataArray['labels'] = $values;
        }
        if ($data->isInitialized('products')) {
            $values_1 = [];
            foreach ($data->getProducts() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['products'] = $values_1;
        }
        if ($data->isInitialized('categories')) {
            $values_2 = [];
            foreach ($data->getCategories() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['categories'] = $values_2;
        }
        if ($data->isInitialized('fileName')) {
            $dataArray['fileName'] = $data->getFileName();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Validator\DescribeWorkingAssetResponseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DescribeWorkingAssetResponse::class => false];
    }
}