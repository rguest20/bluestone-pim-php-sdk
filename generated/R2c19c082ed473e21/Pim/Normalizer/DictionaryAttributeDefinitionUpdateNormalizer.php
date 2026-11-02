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
class DictionaryAttributeDefinitionUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeDefinitionUpdate::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeDefinitionUpdate::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeDefinitionUpdate();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\DictionaryAttributeDefinitionUpdateConstraint());
        }
        if (\array_key_exists('dictionaryValuesMetadataType', $data) && $data['dictionaryValuesMetadataType'] !== null) {
            $object->setDictionaryValuesMetadataType($this->denormalizer->denormalize($data['dictionaryValuesMetadataType'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PropertyUpdateString::class, 'json', $context));
            unset($data['dictionaryValuesMetadataType']);
        }
        elseif (\array_key_exists('dictionaryValuesMetadataType', $data) && $data['dictionaryValuesMetadataType'] === null) {
            $object->setDictionaryValuesMetadataType(null);
            unset($data['dictionaryValuesMetadataType']);
        }
        if (\array_key_exists('selectedValuesLimit', $data) && $data['selectedValuesLimit'] !== null) {
            $object->setSelectedValuesLimit($this->denormalizer->denormalize($data['selectedValuesLimit'], \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\PropertyUpdateInteger::class, 'json', $context));
            unset($data['selectedValuesLimit']);
        }
        elseif (\array_key_exists('selectedValuesLimit', $data) && $data['selectedValuesLimit'] === null) {
            $object->setSelectedValuesLimit(null);
            unset($data['selectedValuesLimit']);
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
        if ($data->isInitialized('dictionaryValuesMetadataType')) {
            $dataArray['dictionaryValuesMetadataType'] = $data->getDictionaryValuesMetadataType() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getDictionaryValuesMetadataType(), 'json', $context));
        }
        if ($data->isInitialized('selectedValuesLimit')) {
            $dataArray['selectedValuesLimit'] = $data->getSelectedValuesLimit() === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\JsonObject($this->normalizer->normalize($data->getSelectedValuesLimit(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\DictionaryAttributeDefinitionUpdateConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\DictionaryAttributeDefinitionUpdate::class => false];
    }
}