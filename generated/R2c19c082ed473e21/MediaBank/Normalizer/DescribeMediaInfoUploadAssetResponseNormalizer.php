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
class DescribeMediaInfoUploadAssetResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DescribeMediaInfoUploadAssetResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DescribeMediaInfoUploadAssetResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DescribeMediaInfoUploadAssetResponse();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Validator\DescribeMediaInfoUploadAssetResponseConstraint());
        }
        if (\array_key_exists('mediaType', $data)) {
            $object->setMediaType($data['mediaType']);
            unset($data['mediaType']);
        }
        if (\array_key_exists('fileKey', $data)) {
            $object->setFileKey($data['fileKey']);
            unset($data['fileKey']);
        }
        if (\array_key_exists('versionId', $data)) {
            $object->setVersionId($data['versionId']);
            unset($data['versionId']);
        }
        if (\array_key_exists('container', $data)) {
            $object->setContainer($data['container']);
            unset($data['container']);
        }
        if (\array_key_exists('fileSize', $data)) {
            $object->setFileSize($data['fileSize']);
            unset($data['fileSize']);
        }
        if (\array_key_exists('height', $data)) {
            $object->setHeight($data['height']);
            unset($data['height']);
        }
        if (\array_key_exists('width', $data)) {
            $object->setWidth($data['width']);
            unset($data['width']);
        }
        if (\array_key_exists('xDpi', $data)) {
            $object->setXDpi($data['xDpi']);
            unset($data['xDpi']);
        }
        if (\array_key_exists('yDpi', $data)) {
            $object->setYDpi($data['yDpi']);
            unset($data['yDpi']);
        }
        if (\array_key_exists('length', $data)) {
            $object->setLength($data['length']);
            unset($data['length']);
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
        if ($data->isInitialized('mediaType')) {
            $dataArray['mediaType'] = $data->getMediaType();
        }
        if ($data->isInitialized('fileKey')) {
            $dataArray['fileKey'] = $data->getFileKey();
        }
        if ($data->isInitialized('versionId')) {
            $dataArray['versionId'] = $data->getVersionId();
        }
        if ($data->isInitialized('container')) {
            $dataArray['container'] = $data->getContainer();
        }
        if ($data->isInitialized('fileSize')) {
            $dataArray['fileSize'] = $data->getFileSize();
        }
        if ($data->isInitialized('height')) {
            $dataArray['height'] = $data->getHeight();
        }
        if ($data->isInitialized('width')) {
            $dataArray['width'] = $data->getWidth();
        }
        if ($data->isInitialized('xDpi')) {
            $dataArray['xDpi'] = $data->getXDpi();
        }
        if ($data->isInitialized('yDpi')) {
            $dataArray['yDpi'] = $data->getYDpi();
        }
        if ($data->isInitialized('length')) {
            $dataArray['length'] = $data->getLength();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Validator\DescribeMediaInfoUploadAssetResponseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DescribeMediaInfoUploadAssetResponse::class => false];
    }
}