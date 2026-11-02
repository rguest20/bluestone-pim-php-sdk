<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AttributeValueValidationIssuesResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\AttributeValueValidationIssuesResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\AttributeValueValidationIssuesResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\AttributeValueValidationIssuesResponse();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Validator\AttributeValueValidationIssuesResponseConstraint());
        }
        if (\array_key_exists('validationType', $data)) {
            $object->setValidationType($data['validationType']);
            unset($data['validationType']);
        }
        if (\array_key_exists('validationDetails', $data)) {
            $value = $data['validationDetails'];
            if (is_array($data['validationDetails']) && $this->isOnlyNumericKeys($data['validationDetails'])) {
                $values = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\JsonObject();
                foreach ($data['validationDetails'] as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            } elseif (is_array($data['validationDetails']) && $this->isOnlyNumericKeys($data['validationDetails'])) {
                $values_1 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\JsonObject();
                foreach ($data['validationDetails'] as $key_1 => $value_2) {
                    $values_1[$key_1] = $value_2;
                }
                $value = $values_1;
            } elseif (is_array($data['validationDetails']) && $this->isOnlyNumericKeys($data['validationDetails'])) {
                $values_2 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\JsonObject();
                foreach ($data['validationDetails'] as $key_2 => $value_3) {
                    $values_2[$key_2] = $value_3;
                }
                $value = $values_2;
            } elseif (is_array($data['validationDetails']) && $this->isOnlyNumericKeys($data['validationDetails'])) {
                $values_3 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\JsonObject();
                foreach ($data['validationDetails'] as $key_3 => $value_4) {
                    $values_3[$key_3] = $value_4;
                }
                $value = $values_3;
            } elseif (is_array($data['validationDetails']) && $this->isOnlyNumericKeys($data['validationDetails'])) {
                $values_4 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\JsonObject();
                foreach ($data['validationDetails'] as $key_4 => $value_5) {
                    $values_4[$key_4] = $value_5;
                }
                $value = $values_4;
            }
            $object->setValidationDetails($value);
            unset($data['validationDetails']);
        }
        foreach ($data as $key_5 => $value_6) {
            if (preg_match('/.*/', (string) $key_5)) {
                $object[$key_5] = $value_6;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('validationType')) {
            $dataArray['validationType'] = $data->getValidationType();
        }
        if ($data->isInitialized('validationDetails')) {
            $value = $data->getValidationDetails();
            if (is_object($data->getValidationDetails())) {
                $values = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\JsonObject();
                foreach ($data->getValidationDetails() as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            } elseif (is_object($data->getValidationDetails())) {
                $values_1 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\JsonObject();
                foreach ($data->getValidationDetails() as $key_1 => $value_2) {
                    $values_1[$key_1] = $value_2;
                }
                $value = $values_1;
            } elseif (is_object($data->getValidationDetails())) {
                $values_2 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\JsonObject();
                foreach ($data->getValidationDetails() as $key_2 => $value_3) {
                    $values_2[$key_2] = $value_3;
                }
                $value = $values_2;
            } elseif (is_object($data->getValidationDetails())) {
                $values_3 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\JsonObject();
                foreach ($data->getValidationDetails() as $key_3 => $value_4) {
                    $values_3[$key_3] = $value_4;
                }
                $value = $values_3;
            } elseif (is_object($data->getValidationDetails())) {
                $values_4 = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\JsonObject();
                foreach ($data->getValidationDetails() as $key_4 => $value_5) {
                    $values_4[$key_4] = $value_5;
                }
                $value = $values_4;
            }
            $dataArray['validationDetails'] = $value;
        }
        foreach ($data->additionalPropertyEntries() as $key_5 => $value_6) {
            if (preg_match('/.*/', (string) $key_5)) {
                $dataArray[$key_5] = $value_6;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Validator\AttributeValueValidationIssuesResponseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\AttributeValueValidationIssuesResponse::class => false];
    }
}