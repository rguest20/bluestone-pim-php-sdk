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
class MainQueryGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\MainQueryGroup::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\MainQueryGroup::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\MainQueryGroup();
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
        if (\array_key_exists('contextFallback', $data) && \is_int($data['contextFallback'])) {
            $data['contextFallback'] = (bool) $data['contextFallback'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Validator\MainQueryGroupConstraint());
        }
        if (\array_key_exists('matchRule', $data)) {
            $object->setMatchRule($data['matchRule']);
        }
        if (\array_key_exists('children', $data)) {
            $values = [];
            foreach ($data['children'] as $value) {
                $value_1 = $value;
                if (is_array($value) and (\array_key_exists('matchRule', $value) and ($value['matchRule'] == 'all' or $value['matchRule'] == 'any')) and \array_key_exists('children', $value)) {
                    $value_1 = $this->denormalizer->denormalize($value, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\QueryGroup::class, 'json', $context);
                }
                $values[] = $value_1;
            }
            $object->setChildren($values);
        }
        if (\array_key_exists('not', $data)) {
            $object->setNot($data['not']);
        }
        if (\array_key_exists('contextFallback', $data)) {
            $object->setContextFallback($data['contextFallback']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['matchRule'] = $data->getMatchRule();
        $values = [];
        foreach ($data->getChildren() as $value) {
            $value_1 = $value;
            if (is_object($value)) {
                $value_1 = $value === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $values[] = $value_1;
        }
        $dataArray['children'] = $values;
        if ($data->isInitialized('not')) {
            $dataArray['not'] = $data->getNot();
        }
        if ($data->isInitialized('contextFallback')) {
            $dataArray['contextFallback'] = $data->getContextFallback();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Validator\MainQueryGroupConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model\MainQueryGroup::class => false];
    }
}