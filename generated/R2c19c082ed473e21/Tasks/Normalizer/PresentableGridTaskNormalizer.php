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
class PresentableGridTaskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\PresentableGridTask::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\PresentableGridTask::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\PresentableGridTask();
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
        if (\array_key_exists('importantForCurrentUser', $data) && \is_int($data['importantForCurrentUser'])) {
            $data['importantForCurrentUser'] = (bool) $data['importantForCurrentUser'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Validator\PresentableGridTaskConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('assignee', $data)) {
            $object->setAssignee($data['assignee']);
            unset($data['assignee']);
        }
        if (\array_key_exists('assigneeType', $data)) {
            $object->setAssigneeType($data['assigneeType']);
            unset($data['assigneeType']);
        }
        if (\array_key_exists('context', $data)) {
            $object->setContext($data['context']);
            unset($data['context']);
        }
        if (\array_key_exists('creator', $data)) {
            $object->setCreator($data['creator']);
            unset($data['creator']);
        }
        if (\array_key_exists('dueDate', $data)) {
            $object->setDueDate($data['dueDate']);
            unset($data['dueDate']);
        }
        if (\array_key_exists('isPrivate', $data)) {
            $object->setIsPrivate($data['isPrivate']);
            unset($data['isPrivate']);
        }
        if (\array_key_exists('numberOfProducts', $data)) {
            $object->setNumberOfProducts($data['numberOfProducts']);
            unset($data['numberOfProducts']);
        }
        if (\array_key_exists('numberOfDoneProducts', $data)) {
            $object->setNumberOfDoneProducts($data['numberOfDoneProducts']);
            unset($data['numberOfDoneProducts']);
        }
        if (\array_key_exists('importantForCurrentUser', $data)) {
            $object->setImportantForCurrentUser($data['importantForCurrentUser']);
            unset($data['importantForCurrentUser']);
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
        if ($data->isInitialized('id')) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('title')) {
            $dataArray['title'] = $data->getTitle();
        }
        if ($data->isInitialized('status')) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('assignee')) {
            $dataArray['assignee'] = $data->getAssignee();
        }
        if ($data->isInitialized('assigneeType')) {
            $dataArray['assigneeType'] = $data->getAssigneeType();
        }
        if ($data->isInitialized('context')) {
            $dataArray['context'] = $data->getContext();
        }
        if ($data->isInitialized('creator')) {
            $dataArray['creator'] = $data->getCreator();
        }
        if ($data->isInitialized('dueDate')) {
            $dataArray['dueDate'] = $data->getDueDate();
        }
        if ($data->isInitialized('isPrivate')) {
            $dataArray['isPrivate'] = $data->getIsPrivate();
        }
        if ($data->isInitialized('numberOfProducts')) {
            $dataArray['numberOfProducts'] = $data->getNumberOfProducts();
        }
        if ($data->isInitialized('numberOfDoneProducts')) {
            $dataArray['numberOfDoneProducts'] = $data->getNumberOfDoneProducts();
        }
        if ($data->isInitialized('importantForCurrentUser')) {
            $dataArray['importantForCurrentUser'] = $data->getImportantForCurrentUser();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Validator\PresentableGridTaskConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\PresentableGridTask::class => false];
    }
}