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
class RestrictionsDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RestrictionsDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RestrictionsDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RestrictionsDto();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\RestrictionsDtoConstraint());
        }
        if (\array_key_exists('column', $data) && $data['column'] !== null) {
            $object->setColumn($this->denormalizer->denormalize($data['column'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ColumnRestrictionsDto::class, 'json', $context));
            unset($data['column']);
        }
        elseif (\array_key_exists('column', $data) && $data['column'] === null) {
            $object->setColumn(null);
            unset($data['column']);
        }
        if (\array_key_exists('enum', $data) && $data['enum'] !== null) {
            $object->setEnum($this->denormalizer->denormalize($data['enum'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\SelectRestrictionsDto::class, 'json', $context));
            unset($data['enum']);
        }
        elseif (\array_key_exists('enum', $data) && $data['enum'] === null) {
            $object->setEnum(null);
            unset($data['enum']);
        }
        if (\array_key_exists('matrix', $data) && $data['matrix'] !== null) {
            $object->setMatrix($this->denormalizer->denormalize($data['matrix'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\MatrixRestrictionsDto::class, 'json', $context));
            unset($data['matrix']);
        }
        elseif (\array_key_exists('matrix', $data) && $data['matrix'] === null) {
            $object->setMatrix(null);
            unset($data['matrix']);
        }
        if (\array_key_exists('range', $data) && $data['range'] !== null) {
            $object->setRange($this->denormalizer->denormalize($data['range'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RangeRestrictionsDto::class, 'json', $context));
            unset($data['range']);
        }
        elseif (\array_key_exists('range', $data) && $data['range'] === null) {
            $object->setRange(null);
            unset($data['range']);
        }
        if (\array_key_exists('text', $data) && $data['text'] !== null) {
            $object->setText($this->denormalizer->denormalize($data['text'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\TextRestrictionsDto::class, 'json', $context));
            unset($data['text']);
        }
        elseif (\array_key_exists('text', $data) && $data['text'] === null) {
            $object->setText(null);
            unset($data['text']);
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
        if ($data->isInitialized('column')) {
            $dataArray['column'] = $data->getColumn() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getColumn(), 'json', $context));
        }
        if ($data->isInitialized('enum')) {
            $dataArray['enum'] = $data->getEnum() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getEnum(), 'json', $context));
        }
        if ($data->isInitialized('matrix')) {
            $dataArray['matrix'] = $data->getMatrix() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getMatrix(), 'json', $context));
        }
        if ($data->isInitialized('range')) {
            $dataArray['range'] = $data->getRange() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getRange(), 'json', $context));
        }
        if ($data->isInitialized('text')) {
            $dataArray['text'] = $data->getText() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getText(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\RestrictionsDtoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\RestrictionsDto::class => false];
    }
}