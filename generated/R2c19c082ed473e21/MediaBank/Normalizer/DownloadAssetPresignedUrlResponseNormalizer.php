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
class DownloadAssetPresignedUrlResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DownloadAssetPresignedUrlResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DownloadAssetPresignedUrlResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DownloadAssetPresignedUrlResponse();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Validator\DownloadAssetPresignedUrlResponseConstraint());
        }
        if (\array_key_exists('assetId', $data)) {
            $object->setAssetId($data['assetId']);
            unset($data['assetId']);
        }
        if (\array_key_exists('presignedUrl', $data)) {
            $object->setPresignedUrl($data['presignedUrl']);
            unset($data['presignedUrl']);
        }
        if (\array_key_exists('fileName', $data)) {
            $object->setFileName($data['fileName']);
            unset($data['fileName']);
        }
        if (\array_key_exists('expiresAt', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['expiresAt']);
            if (false === $date) {
                if (is_string($data['expiresAt']) and 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['expiresAt'])) {
                    try {
                        $date = new \DateTime($data['expiresAt']);
                    } catch (\Exception) {
                        throw new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\Normalizer\InvalidDateException($data['expiresAt'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\Normalizer\InvalidDateException($data['expiresAt'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->setExpiresAt($date);
            unset($data['expiresAt']);
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
        if ($data->isInitialized('assetId')) {
            $dataArray['assetId'] = $data->getAssetId();
        }
        if ($data->isInitialized('presignedUrl')) {
            $dataArray['presignedUrl'] = $data->getPresignedUrl();
        }
        if ($data->isInitialized('fileName')) {
            $dataArray['fileName'] = $data->getFileName();
        }
        if ($data->isInitialized('expiresAt')) {
            $dataArray['expiresAt'] = $data->getExpiresAt()->format('Y-m-d\TH:i:sP');
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Validator\DownloadAssetPresignedUrlResponseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model\DownloadAssetPresignedUrlResponse::class => false];
    }
}