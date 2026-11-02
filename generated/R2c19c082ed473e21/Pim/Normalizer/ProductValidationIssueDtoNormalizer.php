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
class ProductValidationIssueDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductValidationIssueDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductValidationIssueDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductValidationIssueDto();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\ProductValidationIssueDtoConstraint());
        }
        if (\array_key_exists('categoryId', $data) && $data['categoryId'] !== null) {
            $object->setCategoryId($data['categoryId']);
            unset($data['categoryId']);
        }
        elseif (\array_key_exists('categoryId', $data) && $data['categoryId'] === null) {
            $object->setCategoryId(null);
            unset($data['categoryId']);
        }
        if (\array_key_exists('definitionId', $data) && $data['definitionId'] !== null) {
            $object->setDefinitionId($data['definitionId']);
            unset($data['definitionId']);
        }
        elseif (\array_key_exists('definitionId', $data) && $data['definitionId'] === null) {
            $object->setDefinitionId(null);
            unset($data['definitionId']);
        }
        if (\array_key_exists('message', $data) && $data['message'] !== null) {
            $object->setMessage($data['message']);
            unset($data['message']);
        }
        elseif (\array_key_exists('message', $data) && $data['message'] === null) {
            $object->setMessage(null);
            unset($data['message']);
        }
        if (\array_key_exists('missingAttributeDefinitionId', $data) && $data['missingAttributeDefinitionId'] !== null) {
            $object->setMissingAttributeDefinitionId($data['missingAttributeDefinitionId']);
            unset($data['missingAttributeDefinitionId']);
        }
        elseif (\array_key_exists('missingAttributeDefinitionId', $data) && $data['missingAttributeDefinitionId'] === null) {
            $object->setMissingAttributeDefinitionId(null);
            unset($data['missingAttributeDefinitionId']);
        }
        if (\array_key_exists('statusCode', $data)) {
            $object->setStatusCode($data['statusCode']);
            unset($data['statusCode']);
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
        if ($data->isInitialized('categoryId')) {
            $dataArray['categoryId'] = $data->getCategoryId();
        }
        if ($data->isInitialized('definitionId')) {
            $dataArray['definitionId'] = $data->getDefinitionId();
        }
        if ($data->isInitialized('message')) {
            $dataArray['message'] = $data->getMessage();
        }
        if ($data->isInitialized('missingAttributeDefinitionId')) {
            $dataArray['missingAttributeDefinitionId'] = $data->getMissingAttributeDefinitionId();
        }
        if ($data->isInitialized('statusCode')) {
            $dataArray['statusCode'] = $data->getStatusCode();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Validator\ProductValidationIssueDtoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model\ProductValidationIssueDto::class => false];
    }
}