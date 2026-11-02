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
class QueryTermRelationsBaseHaveWithProductsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermRelationsBaseHaveWithProducts::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermRelationsBaseHaveWithProducts::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermRelationsBaseHaveWithProducts();
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
        if (\array_key_exists('reverse', $data) && \is_int($data['reverse'])) {
            $data['reverse'] = (bool) $data['reverse'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Validator\QueryTermRelationsBaseHaveWithProductsConstraint());
        }
        if (\array_key_exists('termType', $data)) {
            $object->setTermType($data['termType']);
        }
        if (\array_key_exists('not', $data)) {
            $object->setNot($data['not']);
        }
        if (\array_key_exists('filterType', $data)) {
            $object->setFilterType($data['filterType']);
        }
        if (\array_key_exists('reverse', $data)) {
            $object->setReverse($data['reverse']);
        }
        if (\array_key_exists('value', $data)) {
            $object->setValue($data['value']);
        }
        if (\array_key_exists('productIds', $data)) {
            $values = [];
            foreach ($data['productIds'] as $value) {
                $values[] = $value;
            }
            $object->setProductIds($values);
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
        $dataArray['filterType'] = $data->getFilterType();
        $dataArray['reverse'] = $data->getReverse();
        $dataArray['value'] = $data->getValue();
        $values = [];
        foreach ($data->getProductIds() as $value) {
            $values[] = $value;
        }
        $dataArray['productIds'] = $values;
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Validator\QueryTermRelationsBaseHaveWithProductsConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryTermRelationsBaseHaveWithProducts::class => false];
    }
}