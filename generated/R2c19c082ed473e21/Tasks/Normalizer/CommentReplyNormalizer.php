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
class CommentReplyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\CommentReply::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\CommentReply::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\CommentReply();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Validator\CommentReplyConstraint());
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
            unset($data['message']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('userId', $data)) {
            $object->setUserId($data['userId']);
            unset($data['userId']);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt($data['createdAt']);
            unset($data['createdAt']);
        }
        if (\array_key_exists('parentId', $data)) {
            $object->setParentId($data['parentId']);
            unset($data['parentId']);
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt($data['updatedAt']);
            unset($data['updatedAt']);
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
        if ($data->isInitialized('message')) {
            $dataArray['message'] = $data->getMessage();
        }
        if ($data->isInitialized('id')) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('userId')) {
            $dataArray['userId'] = $data->getUserId();
        }
        if ($data->isInitialized('createdAt')) {
            $dataArray['createdAt'] = $data->getCreatedAt();
        }
        if ($data->isInitialized('parentId')) {
            $dataArray['parentId'] = $data->getParentId();
        }
        if ($data->isInitialized('updatedAt')) {
            $dataArray['updatedAt'] = $data->getUpdatedAt();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Validator\CommentReplyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\CommentReply::class => false];
    }
}