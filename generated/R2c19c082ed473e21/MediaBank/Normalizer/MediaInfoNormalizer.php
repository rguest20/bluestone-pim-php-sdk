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
class MediaInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\MediaInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\MediaInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\MediaInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('alphaChannel', $data) && \is_int($data['alphaChannel'])) {
            $data['alphaChannel'] = (bool) $data['alphaChannel'];
        }
        if (\array_key_exists('clippingPath', $data) && \is_int($data['clippingPath'])) {
            $data['clippingPath'] = (bool) $data['clippingPath'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Validator\MediaInfoConstraint());
        }
        if (\array_key_exists('container', $data)) {
            $object->setContainer($data['container']);
            unset($data['container']);
        }
        if (\array_key_exists('versionId', $data)) {
            $object->setVersionId($data['versionId']);
            unset($data['versionId']);
        }
        if (\array_key_exists('mediaType', $data)) {
            $object->setMediaType($data['mediaType']);
            unset($data['mediaType']);
        }
        if (\array_key_exists('fileKey', $data)) {
            $object->setFileKey($data['fileKey']);
            unset($data['fileKey']);
        }
        if (\array_key_exists('contentType', $data)) {
            $object->setContentType($data['contentType']);
            unset($data['contentType']);
        }
        if (\array_key_exists('length', $data)) {
            $object->setLength($data['length']);
            unset($data['length']);
        }
        if (\array_key_exists('height', $data)) {
            $object->setHeight($data['height']);
            unset($data['height']);
        }
        if (\array_key_exists('fileSize', $data)) {
            $object->setFileSize($data['fileSize']);
            unset($data['fileSize']);
        }
        if (\array_key_exists('width', $data)) {
            $object->setWidth($data['width']);
            unset($data['width']);
        }
        if (\array_key_exists('xdpi', $data)) {
            $object->setXdpi($data['xdpi']);
            unset($data['xdpi']);
        }
        if (\array_key_exists('ydpi', $data)) {
            $object->setYdpi($data['ydpi']);
            unset($data['ydpi']);
        }
        if (\array_key_exists('alphaChannel', $data)) {
            $object->setAlphaChannel($data['alphaChannel']);
            unset($data['alphaChannel']);
        }
        if (\array_key_exists('clippingPath', $data)) {
            $object->setClippingPath($data['clippingPath']);
            unset($data['clippingPath']);
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
        if ($data->isInitialized('container')) {
            $dataArray['container'] = $data->getContainer();
        }
        if ($data->isInitialized('versionId')) {
            $dataArray['versionId'] = $data->getVersionId();
        }
        if ($data->isInitialized('mediaType')) {
            $dataArray['mediaType'] = $data->getMediaType();
        }
        if ($data->isInitialized('fileKey')) {
            $dataArray['fileKey'] = $data->getFileKey();
        }
        if ($data->isInitialized('contentType')) {
            $dataArray['contentType'] = $data->getContentType();
        }
        if ($data->isInitialized('length')) {
            $dataArray['length'] = $data->getLength();
        }
        if ($data->isInitialized('height')) {
            $dataArray['height'] = $data->getHeight();
        }
        if ($data->isInitialized('fileSize')) {
            $dataArray['fileSize'] = $data->getFileSize();
        }
        if ($data->isInitialized('width')) {
            $dataArray['width'] = $data->getWidth();
        }
        if ($data->isInitialized('xdpi')) {
            $dataArray['xdpi'] = $data->getXdpi();
        }
        if ($data->isInitialized('ydpi')) {
            $dataArray['ydpi'] = $data->getYdpi();
        }
        if ($data->isInitialized('alphaChannel')) {
            $dataArray['alphaChannel'] = $data->getAlphaChannel();
        }
        if ($data->isInitialized('clippingPath')) {
            $dataArray['clippingPath'] = $data->getClippingPath();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Validator\MediaInfoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\MediaInfo::class => false];
    }
}