<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CreateTaskRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\CreateTaskRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\CreateTaskRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\CreateTaskRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isPrivate', $data) && \is_int($data['isPrivate'])) {
            $data['isPrivate'] = (bool) $data['isPrivate'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Validator\CreateTaskRequestConstraint());
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('assignee', $data)) {
            $object->setAssignee($data['assignee']);
            unset($data['assignee']);
        }
        if (\array_key_exists('assigneeType', $data)) {
            $object->setAssigneeType($data['assigneeType']);
            unset($data['assigneeType']);
        }
        if (\array_key_exists('dueDate', $data)) {
            $object->setDueDate($data['dueDate']);
            unset($data['dueDate']);
        }
        if (\array_key_exists('context', $data)) {
            $object->setContext($data['context']);
            unset($data['context']);
        }
        if (\array_key_exists('isPrivate', $data)) {
            $object->setIsPrivate($data['isPrivate']);
            unset($data['isPrivate']);
        }
        if (\array_key_exists('assigneeReminderTime', $data)) {
            $object->setAssigneeReminderTime($data['assigneeReminderTime']);
            unset($data['assigneeReminderTime']);
        }
        if (\array_key_exists('creatorReminderTime', $data)) {
            $object->setCreatorReminderTime($data['creatorReminderTime']);
            unset($data['creatorReminderTime']);
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
        $dataArray['title'] = $data->getTitle();
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription();
        }
        $dataArray['assignee'] = $data->getAssignee();
        if ($data->isInitialized('assigneeType')) {
            $dataArray['assigneeType'] = $data->getAssigneeType();
        }
        $dataArray['dueDate'] = $data->getDueDate();
        if ($data->isInitialized('context')) {
            $dataArray['context'] = $data->getContext();
        }
        if ($data->isInitialized('isPrivate')) {
            $dataArray['isPrivate'] = $data->getIsPrivate();
        }
        if ($data->isInitialized('assigneeReminderTime')) {
            $dataArray['assigneeReminderTime'] = $data->getAssigneeReminderTime();
        }
        if ($data->isInitialized('creatorReminderTime')) {
            $dataArray['creatorReminderTime'] = $data->getCreatorReminderTime();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Validator\CreateTaskRequestConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\CreateTaskRequest::class => false];
    }
}