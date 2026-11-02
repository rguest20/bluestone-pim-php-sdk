<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class APIClientV2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\APIClientV2::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\APIClientV2::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\APIClientV2();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('createdDate', $data) && \is_int($data['createdDate'])) {
            $data['createdDate'] = (float) $data['createdDate'];
        }
        if (\array_key_exists('lastModifiedDate', $data) && \is_int($data['lastModifiedDate'])) {
            $data['lastModifiedDate'] = (float) $data['lastModifiedDate'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Validator\APIClientV2Constraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('clientSecret', $data)) {
            $object->setClientSecret($data['clientSecret']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('roles', $data)) {
            $values = [];
            foreach ($data['roles'] as $value) {
                $values[] = $value;
            }
            $object->setRoles($values);
        }
        if (\array_key_exists('clientType', $data)) {
            $object->setClientType($data['clientType']);
        }
        if (\array_key_exists('policies', $data)) {
            $values_1 = [];
            foreach ($data['policies'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPolicies($values_1);
        }
        if (\array_key_exists('organizationId', $data)) {
            $object->setOrganizationId($data['organizationId']);
        }
        if (\array_key_exists('createdBy', $data)) {
            $object->setCreatedBy($data['createdBy']);
        }
        if (\array_key_exists('createdDate', $data)) {
            $object->setCreatedDate($data['createdDate']);
        }
        if (\array_key_exists('lastModifiedBy', $data)) {
            $object->setLastModifiedBy($data['lastModifiedBy']);
        }
        if (\array_key_exists('lastModifiedDate', $data)) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['clientSecret'] = $data->getClientSecret();
        $dataArray['name'] = $data->getName();
        $values = [];
        foreach ($data->getRoles() as $value) {
            $values[] = $value;
        }
        $dataArray['roles'] = $values;
        $dataArray['clientType'] = $data->getClientType();
        $values_1 = [];
        foreach ($data->getPolicies() as $value_1) {
            $values_1[] = $value_1;
        }
        $dataArray['policies'] = $values_1;
        $dataArray['organizationId'] = $data->getOrganizationId();
        $dataArray['createdBy'] = $data->getCreatedBy();
        $dataArray['createdDate'] = $data->getCreatedDate();
        $dataArray['lastModifiedBy'] = $data->getLastModifiedBy();
        $dataArray['lastModifiedDate'] = $data->getLastModifiedDate();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Validator\APIClientV2Constraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\APIClientV2::class => false];
    }
}