<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CategoryWithCursorAndViewRequestDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryWithCursorAndViewRequestDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryWithCursorAndViewRequestDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryWithCursorAndViewRequestDto();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\CategoryWithCursorAndViewRequestDtoConstraint());
        }
        if (\array_key_exists('count', $data)) {
            $object->setCount($data['count']);
            unset($data['count']);
        }
        if (\array_key_exists('cursor', $data) && $data['cursor'] !== null) {
            $object->setCursor($data['cursor']);
            unset($data['cursor']);
        }
        elseif (\array_key_exists('cursor', $data) && $data['cursor'] === null) {
            $object->setCursor(null);
            unset($data['cursor']);
        }
        if (\array_key_exists('views', $data) && $data['views'] !== null) {
            $values = [];
            foreach ($data['views'] as $value) {
                $value_1 = $value;
                if (is_array($value) && $this->isOnlyNumericKeys($value)) {
                    $values_1 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key => $value_2) {
                        $values_1[$key] = $value_2;
                    }
                    $value_1 = $values_1;
                } elseif (is_array($value) && $this->isOnlyNumericKeys($value)) {
                    $values_2 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key_1 => $value_3) {
                        $values_2[$key_1] = $value_3;
                    }
                    $value_1 = $values_2;
                } elseif (is_array($value) && $this->isOnlyNumericKeys($value)) {
                    $values_3 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key_2 => $value_4) {
                        $values_3[$key_2] = $value_4;
                    }
                    $value_1 = $values_3;
                }
                $values[] = $value_1;
            }
            $object->setViews($values);
            unset($data['views']);
        }
        elseif (\array_key_exists('views', $data) && $data['views'] === null) {
            $object->setViews(null);
            unset($data['views']);
        }
        foreach ($data as $key_3 => $value_5) {
            if (preg_match('/.*/', (string) $key_3)) {
                $object[$key_3] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('count')) {
            $dataArray['count'] = $data->getCount();
        }
        if ($data->isInitialized('cursor')) {
            $dataArray['cursor'] = $data->getCursor();
        }
        if ($data->isInitialized('views')) {
            $values = [];
            foreach ($data->getViews() as $value) {
                $value_1 = $value;
                if (is_object($value)) {
                    $values_1 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key => $value_2) {
                        $values_1[$key] = $value_2;
                    }
                    $value_1 = $values_1;
                } elseif (is_object($value)) {
                    $values_2 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key_1 => $value_3) {
                        $values_2[$key_1] = $value_3;
                    }
                    $value_1 = $values_2;
                } elseif (is_object($value)) {
                    $values_3 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key_2 => $value_4) {
                        $values_3[$key_2] = $value_4;
                    }
                    $value_1 = $values_3;
                }
                $values[] = $value_1;
            }
            $dataArray['views'] = $values;
        }
        foreach ($data->additionalPropertyEntries() as $key_3 => $value_5) {
            if (preg_match('/.*/', (string) $key_3)) {
                $dataArray[$key_3] = $value_5;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\CategoryWithCursorAndViewRequestDtoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryWithCursorAndViewRequestDto::class => false];
    }
}