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
class ProductVariantAttributeDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductVariantAttributeDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductVariantAttributeDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductVariantAttributeDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('copy', $data) && \is_int($data['copy'])) {
            $data['copy'] = (bool) $data['copy'];
        }
        if (\array_key_exists('definingAttributes', $data) && \is_int($data['definingAttributes'])) {
            $data['definingAttributes'] = (bool) $data['definingAttributes'];
        }
        if (\array_key_exists('locked', $data) && \is_int($data['locked'])) {
            $data['locked'] = (bool) $data['locked'];
        }
        if (\array_key_exists('mandatory', $data) && \is_int($data['mandatory'])) {
            $data['mandatory'] = (bool) $data['mandatory'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\ProductVariantAttributeDtoConstraint());
        }
        if (\array_key_exists('copy', $data) && $data['copy'] !== null) {
            $object->setCopy($data['copy']);
            unset($data['copy']);
        }
        elseif (\array_key_exists('copy', $data) && $data['copy'] === null) {
            $object->setCopy(null);
            unset($data['copy']);
        }
        if (\array_key_exists('definingAttributes', $data) && $data['definingAttributes'] !== null) {
            $object->setDefiningAttributes($data['definingAttributes']);
            unset($data['definingAttributes']);
        }
        elseif (\array_key_exists('definingAttributes', $data) && $data['definingAttributes'] === null) {
            $object->setDefiningAttributes(null);
            unset($data['definingAttributes']);
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
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('copy')) {
            $dataArray['copy'] = $data->getCopy();
        }
        if ($data->isInitialized('definingAttributes')) {
            $dataArray['definingAttributes'] = $data->getDefiningAttributes();
        }
        if ($data->isInitialized('locked')) {
            $dataArray['locked'] = $data->getLocked();
        }
        if ($data->isInitialized('mandatory')) {
            $dataArray['mandatory'] = $data->getMandatory();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\ProductVariantAttributeDtoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductVariantAttributeDto::class => false];
    }
}