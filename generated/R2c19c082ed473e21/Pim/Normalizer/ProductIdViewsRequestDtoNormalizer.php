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
class ProductIdViewsRequestDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductIdViewsRequestDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductIdViewsRequestDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductIdViewsRequestDto();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\ProductIdViewsRequestDtoConstraint());
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
                } elseif (is_array($value) && $this->isOnlyNumericKeys($value)) {
                    $values_4 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key_3 => $value_5) {
                        $values_4[$key_3] = $value_5;
                    }
                    $value_1 = $values_4;
                } elseif (is_array($value) && $this->isOnlyNumericKeys($value)) {
                    $values_5 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key_4 => $value_6) {
                        $values_5[$key_4] = $value_6;
                    }
                    $value_1 = $values_5;
                } elseif (is_array($value) && $this->isOnlyNumericKeys($value)) {
                    $values_6 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key_5 => $value_7) {
                        $values_6[$key_5] = $value_7;
                    }
                    $value_1 = $values_6;
                } elseif (is_array($value) && $this->isOnlyNumericKeys($value)) {
                    $values_7 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key_6 => $value_8) {
                        $values_7[$key_6] = $value_8;
                    }
                    $value_1 = $values_7;
                } elseif (is_array($value) && $this->isOnlyNumericKeys($value)) {
                    $values_8 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key_7 => $value_9) {
                        $values_8[$key_7] = $value_9;
                    }
                    $value_1 = $values_8;
                } elseif (is_array($value) && $this->isOnlyNumericKeys($value)) {
                    $values_9 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key_8 => $value_10) {
                        $values_9[$key_8] = $value_10;
                    }
                    $value_1 = $values_9;
                } elseif (is_array($value) && $this->isOnlyNumericKeys($value)) {
                    $values_10 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key_9 => $value_11) {
                        $values_10[$key_9] = $value_11;
                    }
                    $value_1 = $values_10;
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
        foreach ($data as $key_10 => $value_12) {
            if (preg_match('/.*/', (string) $key_10)) {
                $object[$key_10] = $value_12;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
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
                } elseif (is_object($value)) {
                    $values_4 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key_3 => $value_5) {
                        $values_4[$key_3] = $value_5;
                    }
                    $value_1 = $values_4;
                } elseif (is_object($value)) {
                    $values_5 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key_4 => $value_6) {
                        $values_5[$key_4] = $value_6;
                    }
                    $value_1 = $values_5;
                } elseif (is_object($value)) {
                    $values_6 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key_5 => $value_7) {
                        $values_6[$key_5] = $value_7;
                    }
                    $value_1 = $values_6;
                } elseif (is_object($value)) {
                    $values_7 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key_6 => $value_8) {
                        $values_7[$key_6] = $value_8;
                    }
                    $value_1 = $values_7;
                } elseif (is_object($value)) {
                    $values_8 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key_7 => $value_9) {
                        $values_8[$key_7] = $value_9;
                    }
                    $value_1 = $values_8;
                } elseif (is_object($value)) {
                    $values_9 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key_8 => $value_10) {
                        $values_9[$key_8] = $value_10;
                    }
                    $value_1 = $values_9;
                } elseif (is_object($value)) {
                    $values_10 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
                    foreach ($value as $key_9 => $value_11) {
                        $values_10[$key_9] = $value_11;
                    }
                    $value_1 = $values_10;
                }
                $values[] = $value_1;
            }
            $dataArray['views'] = $values;
        }
        foreach ($data->additionalPropertyEntries() as $key_10 => $value_12) {
            if (preg_match('/.*/', (string) $key_10)) {
                $dataArray[$key_10] = $value_12;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\ProductIdViewsRequestDtoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductIdViewsRequestDto::class => false];
    }
}