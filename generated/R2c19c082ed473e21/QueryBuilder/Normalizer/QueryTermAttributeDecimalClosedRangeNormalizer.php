<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class QueryTermAttributeDecimalClosedRangeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDecimalClosedRange::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDecimalClosedRange::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDecimalClosedRange();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('not', $data) && \is_int($data['not'])) {
            $data['not'] = (bool) $data['not'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Validator\QueryTermAttributeDecimalClosedRangeConstraint());
        }
        if (\array_key_exists('termType', $data)) {
            $object->setTermType($data['termType']);
        }
        if (\array_key_exists('not', $data)) {
            $object->setNot($data['not']);
        }
        if (\array_key_exists('context', $data)) {
            $object->setContext($data['context']);
        }
        if (\array_key_exists('attributeId', $data)) {
            $object->setAttributeId($data['attributeId']);
        }
        if (\array_key_exists('attributeType', $data)) {
            $object->setAttributeType($data['attributeType']);
        }
        if (\array_key_exists('filterType', $data)) {
            $object->setFilterType($data['filterType']);
        }
        if (\array_key_exists('from', $data)) {
            $value = $data['from'];
            if (is_float($data['from'])) {
                $value = $data['from'];
            } elseif (is_string($data['from'])) {
                $value = $data['from'];
            }
            $object->setFrom($value);
        }
        if (\array_key_exists('to', $data)) {
            $value_1 = $data['to'];
            if (is_float($data['to'])) {
                $value_1 = $data['to'];
            } elseif (is_string($data['to'])) {
                $value_1 = $data['to'];
            }
            $object->setTo($value_1);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['termType'] = $data->getTermType();
        if ($data->isInitialized('not')) {
            $dataArray['not'] = $data->getNot();
        }
        $dataArray['context'] = $data->getContext();
        $dataArray['attributeId'] = $data->getAttributeId();
        $dataArray['attributeType'] = $data->getAttributeType();
        $dataArray['filterType'] = $data->getFilterType();
        $value = $data->getFrom();
        if (is_float($data->getFrom())) {
            $value = $data->getFrom();
        } elseif (is_string($data->getFrom())) {
            $value = $data->getFrom();
        }
        $dataArray['from'] = $value;
        $value_1 = $data->getTo();
        if (is_float($data->getTo())) {
            $value_1 = $data->getTo();
        } elseif (is_string($data->getTo())) {
            $value_1 = $data->getTo();
        }
        $dataArray['to'] = $value_1;
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Validator\QueryTermAttributeDecimalClosedRangeConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermAttributeDecimalClosedRange::class => false];
    }
}