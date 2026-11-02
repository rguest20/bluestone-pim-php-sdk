<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CategoryMediaAssetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CategoryMediaAsset::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CategoryMediaAsset::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CategoryMediaAsset();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('createdAt', $data) && \is_int($data['createdAt'])) {
            $data['createdAt'] = (float) $data['createdAt'];
        }
        if (\array_key_exists('updatedAt', $data) && \is_int($data['updatedAt'])) {
            $data['updatedAt'] = (float) $data['updatedAt'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Validator\CategoryMediaAssetConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('downloadUri', $data)) {
            $object->setDownloadUri($data['downloadUri']);
        }
        if (\array_key_exists('previewUri', $data)) {
            $object->setPreviewUri($data['previewUri']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('fileName', $data)) {
            $object->setFileName($data['fileName']);
        }
        if (\array_key_exists('contentType', $data)) {
            $object->setContentType($data['contentType']);
        }
        if (\array_key_exists('labels', $data)) {
            $values = [];
            foreach ($data['labels'] as $value) {
                $values[] = $value;
            }
            $object->setLabels($values);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt($data['createdAt']);
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt($data['updatedAt']);
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
        }
        if (\array_key_exists('attributes', $data)) {
            $values_1 = [];
            foreach ($data['attributes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\AssetAttribute::class, 'json', $context);
            }
            $object->setAttributes($values_1);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id')) {
            $dataArray['id'] = $data->getId();
        }
        $dataArray['downloadUri'] = $data->getDownloadUri();
        $dataArray['previewUri'] = $data->getPreviewUri();
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('fileName')) {
            $dataArray['fileName'] = $data->getFileName();
        }
        $dataArray['contentType'] = $data->getContentType();
        $values = [];
        foreach ($data->getLabels() as $value) {
            $values[] = $value;
        }
        $dataArray['labels'] = $values;
        if ($data->isInitialized('createdAt')) {
            $dataArray['createdAt'] = $data->getCreatedAt();
        }
        if ($data->isInitialized('updatedAt')) {
            $dataArray['updatedAt'] = $data->getUpdatedAt();
        }
        if ($data->isInitialized('number')) {
            $dataArray['number'] = $data->getNumber();
        }
        if ($data->isInitialized('attributes')) {
            $values_1 = [];
            foreach ($data->getAttributes() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['attributes'] = $values_1;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Validator\CategoryMediaAssetConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\CategoryMediaAsset::class => false];
    }
}