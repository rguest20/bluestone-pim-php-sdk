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
class ProductsSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsSearchRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsSearchRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsSearchRequest();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Validator\ProductsSearchRequestConstraint());
        }
        if (\array_key_exists('query', $data)) {
            $object->setQuery($this->denormalizer->denormalize($data['query'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\MainQueryGroup::class, 'json', $context));
        }
        if (\array_key_exists('sorting', $data)) {
            $value = $data['sorting'];
            if (is_array($data['sorting']) and (\array_key_exists('direction', $data['sorting']) and ($data['sorting']['direction'] == 'asc' or $data['sorting']['direction'] == 'desc')) and (\array_key_exists('termType', $data['sorting']) and $data['sorting']['termType'] == 'attribute') and \array_key_exists('context', $data['sorting']) and (\array_key_exists('attributeType', $data['sorting']) and ($data['sorting']['attributeType'] == 'time' or $data['sorting']['attributeType'] == 'date' or $data['sorting']['attributeType'] == 'date_time' or $data['sorting']['attributeType'] == 'text' or $data['sorting']['attributeType'] == 'integer' or $data['sorting']['attributeType'] == 'decimal' or $data['sorting']['attributeType'] == 'formatted_text' or $data['sorting']['attributeType'] == 'pattern' or $data['sorting']['attributeType'] == 'multiline' or $data['sorting']['attributeType'] == 'boolean' or $data['sorting']['attributeType'] == 'multi_select' or $data['sorting']['attributeType'] == 'single_select' or $data['sorting']['attributeType'] == 'dictionary' or $data['sorting']['attributeType'] == 'assigned_variant' or $data['sorting']['attributeType'] == 'matrix' or $data['sorting']['attributeType'] == 'column')) and \array_key_exists('attributeId', $data['sorting'])) {
                $value = $this->denormalizer->denormalize($data['sorting'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\SortingAttribute::class, 'json', $context);
            } elseif (is_array($data['sorting']) and (\array_key_exists('direction', $data['sorting']) and ($data['sorting']['direction'] == 'asc' or $data['sorting']['direction'] == 'desc')) and (\array_key_exists('termType', $data['sorting']) and ($data['sorting']['termType'] == 'name' or $data['sorting']['termType'] == 'number' or $data['sorting']['termType'] == 'type' or $data['sorting']['termType'] == 'created_date' or $data['sorting']['termType'] == 'updated_date')) and \array_key_exists('context', $data['sorting'])) {
                $value = $this->denormalizer->denormalize($data['sorting'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\SortingBasicFields::class, 'json', $context);
            }
            $object->setSorting($value);
        }
        if (\array_key_exists('paging', $data)) {
            $object->setPaging($this->denormalizer->denormalize($data['paging'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\Paging::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['query'] = $data->getQuery() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($data->getQuery(), 'json', $context));
        if ($data->isInitialized('sorting')) {
            $value = $data->getSorting();
            if (is_object($data->getSorting())) {
                $value = $data->getSorting() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($data->getSorting(), 'json', $context));
            } elseif (is_object($data->getSorting())) {
                $value = $data->getSorting() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($data->getSorting(), 'json', $context));
            }
            $dataArray['sorting'] = $value;
        }
        if ($data->isInitialized('paging')) {
            $dataArray['paging'] = $data->getPaging() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($data->getPaging(), 'json', $context));
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Validator\ProductsSearchRequestConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\ProductsSearchRequest::class => false];
    }
}