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
class PublishInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\PublishInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\PublishInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\PublishInfo();
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
        if (\array_key_exists('disposedAt', $data) && \is_int($data['disposedAt'])) {
            $data['disposedAt'] = (float) $data['disposedAt'];
        }
        if (\array_key_exists('cleanedAt', $data) && \is_int($data['cleanedAt'])) {
            $data['cleanedAt'] = (float) $data['cleanedAt'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Validator\PublishInfoConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt($data['createdAt']);
        }
        if (\array_key_exists('syncSessionId', $data)) {
            $object->setSyncSessionId($data['syncSessionId']);
        }
        if (\array_key_exists('disposedAt', $data)) {
            $object->setDisposedAt($data['disposedAt']);
        }
        if (\array_key_exists('cleanedAt', $data)) {
            $object->setCleanedAt($data['cleanedAt']);
        }
        if (\array_key_exists('contextId', $data)) {
            $object->setContextId($data['contextId']);
        }
        if (\array_key_exists('contextName', $data)) {
            $object->setContextName($data['contextName']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['state'] = $data->getState();
        $dataArray['createdAt'] = $data->getCreatedAt();
        if ($data->isInitialized('syncSessionId')) {
            $dataArray['syncSessionId'] = $data->getSyncSessionId();
        }
        if ($data->isInitialized('disposedAt')) {
            $dataArray['disposedAt'] = $data->getDisposedAt();
        }
        if ($data->isInitialized('cleanedAt')) {
            $dataArray['cleanedAt'] = $data->getCleanedAt();
        }
        $dataArray['contextId'] = $data->getContextId();
        $dataArray['contextName'] = $data->getContextName();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Validator\PublishInfoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model\PublishInfo::class => false];
    }
}