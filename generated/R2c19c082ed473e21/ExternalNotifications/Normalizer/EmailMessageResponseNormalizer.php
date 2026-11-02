<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class EmailMessageResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\EmailMessageResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\EmailMessageResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\EmailMessageResponse();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Validator\EmailMessageResponseConstraint());
        }
        if (\array_key_exists('content', $data)) {
            $object->setContent($data['content']);
            unset($data['content']);
        }
        if (\array_key_exists('contentType', $data)) {
            $object->setContentType($data['contentType']);
            unset($data['contentType']);
        }
        if (\array_key_exists('createDate', $data)) {
            $object->setCreateDate($data['createDate']);
            unset($data['createDate']);
        }
        if (\array_key_exists('deliveryStatus', $data)) {
            $object->setDeliveryStatus($data['deliveryStatus']);
            unset($data['deliveryStatus']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('recipient', $data)) {
            $values = [];
            foreach ($data['recipient'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\EmailRecipient::class, 'json', $context);
            }
            $object->setRecipient($values);
            unset($data['recipient']);
        }
        if (\array_key_exists('subject', $data)) {
            $object->setSubject($data['subject']);
            unset($data['subject']);
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
        $dataArray['content'] = $data->getContent();
        if ($data->isInitialized('contentType')) {
            $dataArray['contentType'] = $data->getContentType();
        }
        if ($data->isInitialized('createDate')) {
            $dataArray['createDate'] = $data->getCreateDate();
        }
        $dataArray['deliveryStatus'] = $data->getDeliveryStatus();
        $dataArray['id'] = $data->getId();
        $values = [];
        foreach ($data->getRecipient() as $value) {
            $values[] = $value === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['recipient'] = $values;
        $dataArray['subject'] = $data->getSubject();
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Validator\EmailMessageResponseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\EmailMessageResponse::class => false];
    }
}