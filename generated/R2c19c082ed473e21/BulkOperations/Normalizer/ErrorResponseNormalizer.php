<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ErrorResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Model\ErrorResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Model\ErrorResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Model\ErrorResponse();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Validator\ErrorResponseConstraint());
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('error', $data)) {
            $object->setError($data['error']);
            unset($data['error']);
        }
        if (\array_key_exists('errorDetails', $data)) {
            $values = [];
            foreach ($data['errorDetails'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Model\ErrorDetails::class, 'json', $context);
            }
            $object->setErrorDetails($values);
            unset($data['errorDetails']);
        }
        if (\array_key_exists('requestId', $data)) {
            $object->setRequestId($data['requestId']);
            unset($data['requestId']);
        }
        if (\array_key_exists('timestamp', $data)) {
            $object->setTimestamp($data['timestamp']);
            unset($data['timestamp']);
        }
        if (\array_key_exists('conflictingEntities', $data)) {
            $values_1 = [];
            foreach ($data['conflictingEntities'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Model\ConflictingEntity::class, 'json', $context);
            }
            $object->setConflictingEntities($values_1);
            unset($data['conflictingEntities']);
        }
        if (\array_key_exists('quotaLimitExceededDetails', $data)) {
            $values_2 = [];
            foreach ($data['quotaLimitExceededDetails'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Model\LimitExceededDetails::class, 'json', $context);
            }
            $object->setQuotaLimitExceededDetails($values_2);
            unset($data['quotaLimitExceededDetails']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('status')) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('error')) {
            $dataArray['error'] = $data->getError();
        }
        if ($data->isInitialized('errorDetails')) {
            $values = [];
            foreach ($data->getErrorDetails() as $value) {
                $values[] = $value === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['errorDetails'] = $values;
        }
        if ($data->isInitialized('requestId')) {
            $dataArray['requestId'] = $data->getRequestId();
        }
        if ($data->isInitialized('timestamp')) {
            $dataArray['timestamp'] = $data->getTimestamp();
        }
        if ($data->isInitialized('conflictingEntities')) {
            $values_1 = [];
            foreach ($data->getConflictingEntities() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['conflictingEntities'] = $values_1;
        }
        if ($data->isInitialized('quotaLimitExceededDetails')) {
            $values_2 = [];
            foreach ($data->getQuotaLimitExceededDetails() as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['quotaLimitExceededDetails'] = $values_2;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Validator\ErrorResponseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Model\ErrorResponse::class => false];
    }
}