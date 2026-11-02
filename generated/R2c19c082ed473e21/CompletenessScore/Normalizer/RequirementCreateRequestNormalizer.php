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
class RequirementCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementCreateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementCreateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementCreateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
            $data['weight'] = (float) $data['weight'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Validator\RequirementCreateRequestConstraint());
        }
        if (\array_key_exists('requirementType', $data)) {
            $object->setRequirementType($data['requirementType']);
            unset($data['requirementType']);
        }
        if (\array_key_exists('params', $data)) {
            $values = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\JsonObject();
            foreach ($data['params'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setParams($values);
            unset($data['params']);
        }
        if (\array_key_exists('weight', $data)) {
            $object->setWeight($data['weight']);
            unset($data['weight']);
        }
        if (\array_key_exists('includedProductTypes', $data)) {
            $values_1 = [];
            foreach ($data['includedProductTypes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setIncludedProductTypes($values_1);
            unset($data['includedProductTypes']);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('requirementType')) {
            $dataArray['requirementType'] = $data->getRequirementType();
        }
        if ($data->isInitialized('params')) {
            $values = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\JsonObject();
            foreach ($data->getParams() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['params'] = $values;
        }
        if ($data->isInitialized('weight')) {
            $dataArray['weight'] = $data->getWeight();
        }
        if ($data->isInitialized('includedProductTypes')) {
            $values_1 = [];
            foreach ($data->getIncludedProductTypes() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['includedProductTypes'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Validator\RequirementCreateRequestConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\RequirementCreateRequest::class => false];
    }
}