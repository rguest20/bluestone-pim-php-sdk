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
class GetValidFilterResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\GetValidFilterResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\GetValidFilterResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\GetValidFilterResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isOriginalValid', $data) && \is_int($data['isOriginalValid'])) {
            $data['isOriginalValid'] = (bool) $data['isOriginalValid'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Validator\GetValidFilterResponseConstraint());
        }
        if (\array_key_exists('filter', $data)) {
            $value = $data['filter'];
            if (is_array($data['filter'])) {
                $value = $this->denormalizer->denormalize($data['filter'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\PureProductFilters::class, 'json', $context);
            } elseif (is_array($data['filter']) and (\array_key_exists('matchRule', $data['filter']) and ($data['filter']['matchRule'] == 'all' or $data['filter']['matchRule'] == 'any')) and \array_key_exists('children', $data['filter'])) {
                $value = $this->denormalizer->denormalize($data['filter'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\MainQueryGroup::class, 'json', $context);
            }
            $object->setFilter($value);
        }
        if (\array_key_exists('isOriginalValid', $data)) {
            $object->setIsOriginalValid($data['isOriginalValid']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $value = $data->getFilter();
        if (is_object($data->getFilter())) {
            $value = $data->getFilter() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($data->getFilter(), 'json', $context));
        } elseif (is_object($data->getFilter())) {
            $value = $data->getFilter() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($data->getFilter(), 'json', $context));
        }
        $dataArray['filter'] = $value;
        $dataArray['isOriginalValid'] = $data->getIsOriginalValid();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Validator\GetValidFilterResponseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\GetValidFilterResponse::class => false];
    }
}