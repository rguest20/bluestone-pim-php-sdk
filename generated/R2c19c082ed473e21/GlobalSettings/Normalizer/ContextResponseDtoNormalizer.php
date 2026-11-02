<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ContextResponseDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\ContextResponseDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\ContextResponseDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\ContextResponseDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('initial', $data) && \is_int($data['initial'])) {
            $data['initial'] = (bool) $data['initial'];
        }
        if (\array_key_exists('archived', $data) && \is_int($data['archived'])) {
            $data['archived'] = (bool) $data['archived'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Validator\ContextResponseDtoConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('locale', $data)) {
            $object->setLocale($data['locale']);
            unset($data['locale']);
        }
        if (\array_key_exists('fallback', $data) && $data['fallback'] !== null) {
            $object->setFallback($data['fallback']);
            unset($data['fallback']);
        }
        elseif (\array_key_exists('fallback', $data) && $data['fallback'] === null) {
            $object->setFallback(null);
            unset($data['fallback']);
        }
        if (\array_key_exists('initial', $data) && $data['initial'] !== null) {
            $object->setInitial($data['initial']);
            unset($data['initial']);
        }
        elseif (\array_key_exists('initial', $data) && $data['initial'] === null) {
            $object->setInitial(null);
            unset($data['initial']);
        }
        if (\array_key_exists('internalId', $data)) {
            $object->setInternalId($data['internalId']);
            unset($data['internalId']);
        }
        if (\array_key_exists('archived', $data)) {
            $object->setArchived($data['archived']);
            unset($data['archived']);
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
        if ($data->isInitialized('id')) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name')) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('locale')) {
            $dataArray['locale'] = $data->getLocale();
        }
        if ($data->isInitialized('fallback')) {
            $dataArray['fallback'] = $data->getFallback();
        }
        if ($data->isInitialized('initial')) {
            $dataArray['initial'] = $data->getInitial();
        }
        if ($data->isInitialized('internalId')) {
            $dataArray['internalId'] = $data->getInternalId();
        }
        if ($data->isInitialized('archived')) {
            $dataArray['archived'] = $data->getArchived();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Validator\ContextResponseDtoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model\ContextResponseDto::class => false];
    }
}