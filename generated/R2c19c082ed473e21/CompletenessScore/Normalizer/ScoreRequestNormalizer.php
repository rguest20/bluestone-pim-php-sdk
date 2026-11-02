<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ScoreRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ScoreRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ScoreRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ScoreRequest();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Validator\ScoreRequestConstraint());
        }
        if (\array_key_exists('contexts', $data) && $data['contexts'] !== null) {
            $values = [];
            foreach ($data['contexts'] as $value) {
                $values[] = $value;
            }
            $object->setContexts($values);
            unset($data['contexts']);
        }
        elseif (\array_key_exists('contexts', $data) && $data['contexts'] === null) {
            $object->setContexts(null);
            unset($data['contexts']);
        }
        if (\array_key_exists('entityIds', $data) && $data['entityIds'] !== null) {
            $values_1 = [];
            foreach ($data['entityIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEntityIds($values_1);
            unset($data['entityIds']);
        }
        elseif (\array_key_exists('entityIds', $data) && $data['entityIds'] === null) {
            $object->setEntityIds(null);
            unset($data['entityIds']);
        }
        if (\array_key_exists('pageSize', $data)) {
            $object->setPageSize($data['pageSize']);
            unset($data['pageSize']);
        }
        if (\array_key_exists('page', $data)) {
            $object->setPage($data['page']);
            unset($data['page']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('contexts')) {
            $values = [];
            foreach ($data->getContexts() as $value) {
                $values[] = $value;
            }
            $dataArray['contexts'] = $values;
        }
        if ($data->isInitialized('entityIds')) {
            $values_1 = [];
            foreach ($data->getEntityIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['entityIds'] = $values_1;
        }
        if ($data->isInitialized('pageSize')) {
            $dataArray['pageSize'] = $data->getPageSize();
        }
        if ($data->isInitialized('page')) {
            $dataArray['page'] = $data->getPage();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Validator\ScoreRequestConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model\ScoreRequest::class => false];
    }
}