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
class UpdateCategoryColumnAttributeRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateCategoryColumnAttributeRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateCategoryColumnAttributeRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateCategoryColumnAttributeRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('copyAttribute', $data) && \is_int($data['copyAttribute'])) {
            $data['copyAttribute'] = (bool) $data['copyAttribute'];
        }
        if (\array_key_exists('locked', $data) && \is_int($data['locked'])) {
            $data['locked'] = (bool) $data['locked'];
        }
        if (\array_key_exists('mandatory', $data) && \is_int($data['mandatory'])) {
            $data['mandatory'] = (bool) $data['mandatory'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\UpdateCategoryColumnAttributeRequestConstraint());
        }
        if (\array_key_exists('column', $data) && $data['column'] !== null) {
            $values = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
            foreach ($data['column'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setColumn($values);
            unset($data['column']);
        }
        elseif (\array_key_exists('column', $data) && $data['column'] === null) {
            $object->setColumn(null);
            unset($data['column']);
        }
        if (\array_key_exists('copyAttribute', $data) && $data['copyAttribute'] !== null) {
            $object->setCopyAttribute($data['copyAttribute']);
            unset($data['copyAttribute']);
        }
        elseif (\array_key_exists('copyAttribute', $data) && $data['copyAttribute'] === null) {
            $object->setCopyAttribute(null);
            unset($data['copyAttribute']);
        }
        if (\array_key_exists('locked', $data) && $data['locked'] !== null) {
            $object->setLocked($data['locked']);
            unset($data['locked']);
        }
        elseif (\array_key_exists('locked', $data) && $data['locked'] === null) {
            $object->setLocked(null);
            unset($data['locked']);
        }
        if (\array_key_exists('mandatory', $data) && $data['mandatory'] !== null) {
            $object->setMandatory($data['mandatory']);
            unset($data['mandatory']);
        }
        elseif (\array_key_exists('mandatory', $data) && $data['mandatory'] === null) {
            $object->setMandatory(null);
            unset($data['mandatory']);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('column')) {
            $values = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject();
            foreach ($data->getColumn() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['column'] = $values;
        }
        if ($data->isInitialized('copyAttribute')) {
            $dataArray['copyAttribute'] = $data->getCopyAttribute();
        }
        if ($data->isInitialized('locked')) {
            $dataArray['locked'] = $data->getLocked();
        }
        if ($data->isInitialized('mandatory')) {
            $dataArray['mandatory'] = $data->getMandatory();
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\UpdateCategoryColumnAttributeRequestConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\UpdateCategoryColumnAttributeRequest::class => false];
    }
}