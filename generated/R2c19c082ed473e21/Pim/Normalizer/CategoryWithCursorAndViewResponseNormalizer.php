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
class CategoryWithCursorAndViewResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryWithCursorAndViewResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryWithCursorAndViewResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryWithCursorAndViewResponse();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\CategoryWithCursorAndViewResponseConstraint());
        }
        if (\array_key_exists('assets', $data) && $data['assets'] !== null) {
            $values = [];
            foreach ($data['assets'] as $value) {
                $values[] = $value;
            }
            $object->setAssets($values);
            unset($data['assets']);
        }
        elseif (\array_key_exists('assets', $data) && $data['assets'] === null) {
            $object->setAssets(null);
            unset($data['assets']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($this->denormalizer->denormalize($data['description'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MultiLanguageDto::class, 'json', $context));
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
            unset($data['description']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $object->setMetadata($this->denormalizer->denormalize($data['metadata'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryWithCursorViewMetadata::class, 'json', $context));
            unset($data['metadata']);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
            unset($data['metadata']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('assets')) {
            $values = [];
            foreach ($data->getAssets() as $value) {
                $values[] = $value;
            }
            $dataArray['assets'] = $values;
        }
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getDescription(), 'json', $context));
        }
        if ($data->isInitialized('id')) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('metadata')) {
            $dataArray['metadata'] = $data->getMetadata() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getMetadata(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\CategoryWithCursorAndViewResponseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\CategoryWithCursorAndViewResponse::class => false];
    }
}