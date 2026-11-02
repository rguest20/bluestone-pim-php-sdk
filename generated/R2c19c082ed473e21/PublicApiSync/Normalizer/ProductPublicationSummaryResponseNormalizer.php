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
class ProductPublicationSummaryResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductPublicationSummaryResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductPublicationSummaryResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductPublicationSummaryResponse();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Validator\ProductPublicationSummaryResponseConstraint());
        }
        if (\array_key_exists('context', $data)) {
            $object->setContext($data['context']);
            unset($data['context']);
        }
        if (\array_key_exists('papiSessionId', $data) && $data['papiSessionId'] !== null) {
            $object->setPapiSessionId($data['papiSessionId']);
            unset($data['papiSessionId']);
        }
        elseif (\array_key_exists('papiSessionId', $data) && $data['papiSessionId'] === null) {
            $object->setPapiSessionId(null);
            unset($data['papiSessionId']);
        }
        if (\array_key_exists('addedProducts', $data) && $data['addedProducts'] !== null) {
            $object->setAddedProducts($data['addedProducts']);
            unset($data['addedProducts']);
        }
        elseif (\array_key_exists('addedProducts', $data) && $data['addedProducts'] === null) {
            $object->setAddedProducts(null);
            unset($data['addedProducts']);
        }
        if (\array_key_exists('modifiedProducts', $data) && $data['modifiedProducts'] !== null) {
            $object->setModifiedProducts($data['modifiedProducts']);
            unset($data['modifiedProducts']);
        }
        elseif (\array_key_exists('modifiedProducts', $data) && $data['modifiedProducts'] === null) {
            $object->setModifiedProducts(null);
            unset($data['modifiedProducts']);
        }
        if (\array_key_exists('unpublishedProducts', $data) && $data['unpublishedProducts'] !== null) {
            $object->setUnpublishedProducts($data['unpublishedProducts']);
            unset($data['unpublishedProducts']);
        }
        elseif (\array_key_exists('unpublishedProducts', $data) && $data['unpublishedProducts'] === null) {
            $object->setUnpublishedProducts(null);
            unset($data['unpublishedProducts']);
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
        if ($data->isInitialized('context')) {
            $dataArray['context'] = $data->getContext();
        }
        if ($data->isInitialized('papiSessionId')) {
            $dataArray['papiSessionId'] = $data->getPapiSessionId();
        }
        if ($data->isInitialized('addedProducts')) {
            $dataArray['addedProducts'] = $data->getAddedProducts();
        }
        if ($data->isInitialized('modifiedProducts')) {
            $dataArray['modifiedProducts'] = $data->getModifiedProducts();
        }
        if ($data->isInitialized('unpublishedProducts')) {
            $dataArray['unpublishedProducts'] = $data->getUnpublishedProducts();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Validator\ProductPublicationSummaryResponseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\ProductPublicationSummaryResponse::class => false];
    }
}