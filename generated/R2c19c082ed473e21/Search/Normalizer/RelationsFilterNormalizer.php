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
class RelationsFilterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\RelationsFilter::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\RelationsFilter::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\RelationsFilter();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('reverse', $data) && \is_int($data['reverse'])) {
            $data['reverse'] = (bool) $data['reverse'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Validator\RelationsFilterConstraint());
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('relationId', $data) && $data['relationId'] !== null) {
            $object->setRelationId($data['relationId']);
            unset($data['relationId']);
        }
        elseif (\array_key_exists('relationId', $data) && $data['relationId'] === null) {
            $object->setRelationId(null);
            unset($data['relationId']);
        }
        if (\array_key_exists('productIds', $data) && $data['productIds'] !== null) {
            $values = [];
            foreach ($data['productIds'] as $value) {
                $values[] = $value;
            }
            $object->setProductIds($values);
            unset($data['productIds']);
        }
        elseif (\array_key_exists('productIds', $data) && $data['productIds'] === null) {
            $object->setProductIds(null);
            unset($data['productIds']);
        }
        if (\array_key_exists('reverse', $data) && $data['reverse'] !== null) {
            $object->setReverse($data['reverse']);
            unset($data['reverse']);
        }
        elseif (\array_key_exists('reverse', $data) && $data['reverse'] === null) {
            $object->setReverse(null);
            unset($data['reverse']);
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
        $dataArray['type'] = $data->getType();
        if ($data->isInitialized('relationId')) {
            $dataArray['relationId'] = $data->getRelationId();
        }
        if ($data->isInitialized('productIds')) {
            $values = [];
            foreach ($data->getProductIds() as $value) {
                $values[] = $value;
            }
            $dataArray['productIds'] = $values;
        }
        if ($data->isInitialized('reverse')) {
            $dataArray['reverse'] = $data->getReverse();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Validator\RelationsFilterConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model\RelationsFilter::class => false];
    }
}