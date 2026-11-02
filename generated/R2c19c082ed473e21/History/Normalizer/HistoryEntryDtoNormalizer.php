<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class HistoryEntryDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\HistoryEntryDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\HistoryEntryDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\HistoryEntryDto();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Validator\HistoryEntryDtoConstraint());
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
            unset($data['id']);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->setLanguage(null);
            unset($data['language']);
        }
        if (\array_key_exists('date', $data) && $data['date'] !== null) {
            $object->setDate($data['date']);
            unset($data['date']);
        }
        elseif (\array_key_exists('date', $data) && $data['date'] === null) {
            $object->setDate(null);
            unset($data['date']);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values = [];
            foreach ($data['metadata'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\HistoryEntryMetadataDto::class, 'json', $context);
            }
            $object->setMetadata($values);
            unset($data['metadata']);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
            unset($data['metadata']);
        }
        if (\array_key_exists('userId', $data) && $data['userId'] !== null) {
            $object->setUserId($data['userId']);
            unset($data['userId']);
        }
        elseif (\array_key_exists('userId', $data) && $data['userId'] === null) {
            $object->setUserId(null);
            unset($data['userId']);
        }
        if (\array_key_exists('origin', $data) && $data['origin'] !== null) {
            $object->setOrigin($data['origin']);
            unset($data['origin']);
        }
        elseif (\array_key_exists('origin', $data) && $data['origin'] === null) {
            $object->setOrigin(null);
            unset($data['origin']);
        }
        if (\array_key_exists('eventId', $data) && $data['eventId'] !== null) {
            $object->setEventId($data['eventId']);
            unset($data['eventId']);
        }
        elseif (\array_key_exists('eventId', $data) && $data['eventId'] === null) {
            $object->setEventId(null);
            unset($data['eventId']);
        }
        if (\array_key_exists('organizationId', $data) && $data['organizationId'] !== null) {
            $object->setOrganizationId($data['organizationId']);
            unset($data['organizationId']);
        }
        elseif (\array_key_exists('organizationId', $data) && $data['organizationId'] === null) {
            $object->setOrganizationId(null);
            unset($data['organizationId']);
        }
        if (\array_key_exists('entityType', $data) && $data['entityType'] !== null) {
            $object->setEntityType($data['entityType']);
            unset($data['entityType']);
        }
        elseif (\array_key_exists('entityType', $data) && $data['entityType'] === null) {
            $object->setEntityType(null);
            unset($data['entityType']);
        }
        if (\array_key_exists('eventType', $data) && $data['eventType'] !== null) {
            $object->setEventType($data['eventType']);
            unset($data['eventType']);
        }
        elseif (\array_key_exists('eventType', $data) && $data['eventType'] === null) {
            $object->setEventType(null);
            unset($data['eventType']);
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
        if ($data->isInitialized('id')) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('language')) {
            $dataArray['language'] = $data->getLanguage();
        }
        if ($data->isInitialized('date')) {
            $dataArray['date'] = $data->getDate();
        }
        if ($data->isInitialized('metadata')) {
            $values = [];
            foreach ($data->getMetadata() as $value) {
                $values[] = $value === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['metadata'] = $values;
        }
        if ($data->isInitialized('userId')) {
            $dataArray['userId'] = $data->getUserId();
        }
        if ($data->isInitialized('origin')) {
            $dataArray['origin'] = $data->getOrigin();
        }
        if ($data->isInitialized('eventId')) {
            $dataArray['eventId'] = $data->getEventId();
        }
        if ($data->isInitialized('organizationId')) {
            $dataArray['organizationId'] = $data->getOrganizationId();
        }
        if ($data->isInitialized('entityType')) {
            $dataArray['entityType'] = $data->getEntityType();
        }
        if ($data->isInitialized('eventType')) {
            $dataArray['eventType'] = $data->getEventType();
        }
        if ($data->isInitialized('entityIds')) {
            $values_1 = [];
            foreach ($data->getEntityIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['entityIds'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Validator\HistoryEntryDtoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model\HistoryEntryDto::class => false];
    }
}