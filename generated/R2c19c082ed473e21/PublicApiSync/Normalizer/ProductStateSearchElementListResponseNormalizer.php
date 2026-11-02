<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProductStateSearchElementListResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductStateSearchElementListResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductStateSearchElementListResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductStateSearchElementListResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('papiOutOfSync', $data) && \is_int($data['papiOutOfSync'])) {
            $data['papiOutOfSync'] = (bool) $data['papiOutOfSync'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Validator\ProductStateSearchElementListResponseConstraint());
        }
        if (\array_key_exists('productId', $data)) {
            $object->setProductId($data['productId']);
            unset($data['productId']);
        }
        if (\array_key_exists('papiPublishState', $data)) {
            $object->setPapiPublishState($data['papiPublishState']);
            unset($data['papiPublishState']);
        }
        if (\array_key_exists('context', $data)) {
            $object->setContext($data['context']);
            unset($data['context']);
        }
        if (\array_key_exists('papiOutOfSync', $data)) {
            $object->setPapiOutOfSync($data['papiOutOfSync']);
            unset($data['papiOutOfSync']);
        }
        if (\array_key_exists('lastSyncState', $data) && $data['lastSyncState'] !== null) {
            $object->setLastSyncState($data['lastSyncState']);
            unset($data['lastSyncState']);
        }
        elseif (\array_key_exists('lastSyncState', $data) && $data['lastSyncState'] === null) {
            $object->setLastSyncState(null);
            unset($data['lastSyncState']);
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
        if ($data->isInitialized('productId')) {
            $dataArray['productId'] = $data->getProductId();
        }
        if ($data->isInitialized('papiPublishState')) {
            $dataArray['papiPublishState'] = $data->getPapiPublishState();
        }
        if ($data->isInitialized('context')) {
            $dataArray['context'] = $data->getContext();
        }
        if ($data->isInitialized('papiOutOfSync')) {
            $dataArray['papiOutOfSync'] = $data->getPapiOutOfSync();
        }
        if ($data->isInitialized('lastSyncState')) {
            $dataArray['lastSyncState'] = $data->getLastSyncState();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Validator\ProductStateSearchElementListResponseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductStateSearchElementListResponse::class => false];
    }
}