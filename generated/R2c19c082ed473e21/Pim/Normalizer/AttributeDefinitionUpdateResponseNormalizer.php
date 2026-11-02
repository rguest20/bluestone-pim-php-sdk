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
class AttributeDefinitionUpdateResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionUpdateResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionUpdateResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionUpdateResponse();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\AttributeDefinitionUpdateResponseConstraint());
        }
        if (\array_key_exists('numberOfAlteredCategoriesWithColumnAttributes', $data)) {
            $object->setNumberOfAlteredCategoriesWithColumnAttributes($data['numberOfAlteredCategoriesWithColumnAttributes']);
            unset($data['numberOfAlteredCategoriesWithColumnAttributes']);
        }
        if (\array_key_exists('numberOfAlteredCategoriesWithMatrixAttributes', $data)) {
            $object->setNumberOfAlteredCategoriesWithMatrixAttributes($data['numberOfAlteredCategoriesWithMatrixAttributes']);
            unset($data['numberOfAlteredCategoriesWithMatrixAttributes']);
        }
        if (\array_key_exists('numberOfAlteredCategoriesWithSelectAttributes', $data)) {
            $object->setNumberOfAlteredCategoriesWithSelectAttributes($data['numberOfAlteredCategoriesWithSelectAttributes']);
            unset($data['numberOfAlteredCategoriesWithSelectAttributes']);
        }
        if (\array_key_exists('numberOfAlteredProductWithColumnAttributes', $data)) {
            $object->setNumberOfAlteredProductWithColumnAttributes($data['numberOfAlteredProductWithColumnAttributes']);
            unset($data['numberOfAlteredProductWithColumnAttributes']);
        }
        if (\array_key_exists('numberOfAlteredProductWithMatrixAttributes', $data)) {
            $object->setNumberOfAlteredProductWithMatrixAttributes($data['numberOfAlteredProductWithMatrixAttributes']);
            unset($data['numberOfAlteredProductWithMatrixAttributes']);
        }
        if (\array_key_exists('numberOfAlteredProductWithSelectAttributes', $data)) {
            $object->setNumberOfAlteredProductWithSelectAttributes($data['numberOfAlteredProductWithSelectAttributes']);
            unset($data['numberOfAlteredProductWithSelectAttributes']);
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
        if ($data->isInitialized('numberOfAlteredCategoriesWithColumnAttributes')) {
            $dataArray['numberOfAlteredCategoriesWithColumnAttributes'] = $data->getNumberOfAlteredCategoriesWithColumnAttributes();
        }
        if ($data->isInitialized('numberOfAlteredCategoriesWithMatrixAttributes')) {
            $dataArray['numberOfAlteredCategoriesWithMatrixAttributes'] = $data->getNumberOfAlteredCategoriesWithMatrixAttributes();
        }
        if ($data->isInitialized('numberOfAlteredCategoriesWithSelectAttributes')) {
            $dataArray['numberOfAlteredCategoriesWithSelectAttributes'] = $data->getNumberOfAlteredCategoriesWithSelectAttributes();
        }
        if ($data->isInitialized('numberOfAlteredProductWithColumnAttributes')) {
            $dataArray['numberOfAlteredProductWithColumnAttributes'] = $data->getNumberOfAlteredProductWithColumnAttributes();
        }
        if ($data->isInitialized('numberOfAlteredProductWithMatrixAttributes')) {
            $dataArray['numberOfAlteredProductWithMatrixAttributes'] = $data->getNumberOfAlteredProductWithMatrixAttributes();
        }
        if ($data->isInitialized('numberOfAlteredProductWithSelectAttributes')) {
            $dataArray['numberOfAlteredProductWithSelectAttributes'] = $data->getNumberOfAlteredProductWithSelectAttributes();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\AttributeDefinitionUpdateResponseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\AttributeDefinitionUpdateResponse::class => false];
    }
}