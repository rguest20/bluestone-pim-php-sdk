<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class KeyAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\KeyAttributes::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\KeyAttributes::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\KeyAttributes();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Validator\KeyAttributesConstraint());
        }
        if (\array_key_exists('single', $data)) {
            $object->setSingle($this->denormalizer->denormalize($data['single'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\KeyAttributesForProductType::class, 'json', $context));
            unset($data['single']);
        }
        if (\array_key_exists('variant', $data)) {
            $object->setVariant($this->denormalizer->denormalize($data['variant'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\KeyAttributesForProductType::class, 'json', $context));
            unset($data['variant']);
        }
        if (\array_key_exists('group', $data)) {
            $object->setGroup($this->denormalizer->denormalize($data['group'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\KeyAttributesForProductType::class, 'json', $context));
            unset($data['group']);
        }
        if (\array_key_exists('family', $data)) {
            $object->setFamily($this->denormalizer->denormalize($data['family'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\KeyAttributesForProductType::class, 'json', $context));
            unset($data['family']);
        }
        if (\array_key_exists('bundle', $data)) {
            $object->setBundle($this->denormalizer->denormalize($data['bundle'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\KeyAttributesForProductType::class, 'json', $context));
            unset($data['bundle']);
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
        if ($data->isInitialized('single')) {
            $dataArray['single'] = $data->getSingle() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Runtime\JsonObject($this->normalizer->normalize($data->getSingle(), 'json', $context));
        }
        if ($data->isInitialized('variant')) {
            $dataArray['variant'] = $data->getVariant() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Runtime\JsonObject($this->normalizer->normalize($data->getVariant(), 'json', $context));
        }
        if ($data->isInitialized('group')) {
            $dataArray['group'] = $data->getGroup() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Runtime\JsonObject($this->normalizer->normalize($data->getGroup(), 'json', $context));
        }
        if ($data->isInitialized('family')) {
            $dataArray['family'] = $data->getFamily() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Runtime\JsonObject($this->normalizer->normalize($data->getFamily(), 'json', $context));
        }
        if ($data->isInitialized('bundle')) {
            $dataArray['bundle'] = $data->getBundle() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Runtime\JsonObject($this->normalizer->normalize($data->getBundle(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Validator\KeyAttributesConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model\KeyAttributes::class => false];
    }
}