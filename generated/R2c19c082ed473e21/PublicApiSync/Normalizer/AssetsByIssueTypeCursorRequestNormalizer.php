<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AssetsByIssueTypeCursorRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\AssetsByIssueTypeCursorRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\AssetsByIssueTypeCursorRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\AssetsByIssueTypeCursorRequest();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Validator\AssetsByIssueTypeCursorRequestConstraint());
        }
        if (\array_key_exists('issueTypes', $data)) {
            $values = [];
            foreach ($data['issueTypes'] as $value) {
                $values[] = $value;
            }
            $object->setIssueTypes($values);
            unset($data['issueTypes']);
        }
        if (\array_key_exists('context', $data)) {
            $object->setContext($data['context']);
            unset($data['context']);
        }
        if (\array_key_exists('cursor', $data) && $data['cursor'] !== null) {
            $object->setCursor($data['cursor']);
            unset($data['cursor']);
        }
        elseif (\array_key_exists('cursor', $data) && $data['cursor'] === null) {
            $object->setCursor(null);
            unset($data['cursor']);
        }
        if (\array_key_exists('pageSize', $data)) {
            $object->setPageSize($data['pageSize']);
            unset($data['pageSize']);
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
        if ($data->isInitialized('issueTypes')) {
            $values = [];
            foreach ($data->getIssueTypes() as $value) {
                $values[] = $value;
            }
            $dataArray['issueTypes'] = $values;
        }
        if ($data->isInitialized('context')) {
            $dataArray['context'] = $data->getContext();
        }
        if ($data->isInitialized('cursor')) {
            $dataArray['cursor'] = $data->getCursor();
        }
        if ($data->isInitialized('pageSize')) {
            $dataArray['pageSize'] = $data->getPageSize();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Validator\AssetsByIssueTypeCursorRequestConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model\AssetsByIssueTypeCursorRequest::class => false];
    }
}