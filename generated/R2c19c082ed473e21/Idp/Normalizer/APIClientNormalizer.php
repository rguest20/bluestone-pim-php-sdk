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
class APIClientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\APIClient::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\APIClient::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\APIClient();
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
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Validator\APIClientConstraint());
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('remoteAddresses', $data)) {
            $values = [];
            foreach ($data['remoteAddresses'] as $value) {
                $values[] = $value;
            }
            $object->setRemoteAddresses($values);
        }
        if (\array_key_exists('flowType', $data)) {
            $object->setFlowType($data['flowType']);
        }
        if (\array_key_exists('clientSecret', $data)) {
            $object->setClientSecret($data['clientSecret']);
        }
        if (\array_key_exists('redirectUris', $data)) {
            $values_1 = [];
            foreach ($data['redirectUris'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRedirectUris($values_1);
        }
        if (\array_key_exists('roles', $data)) {
            $values_2 = [];
            foreach ($data['roles'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setRoles($values_2);
        }
        if (\array_key_exists('clientType', $data)) {
            $object->setClientType($data['clientType']);
        }
        if (\array_key_exists('policies', $data)) {
            $values_3 = [];
            foreach ($data['policies'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setPolicies($values_3);
        }
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($data['organization']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        $values = [];
        foreach ($data->getRemoteAddresses() as $value) {
            $values[] = $value;
        }
        $dataArray['remoteAddresses'] = $values;
        $dataArray['flowType'] = $data->getFlowType();
        $dataArray['clientSecret'] = $data->getClientSecret();
        $values_1 = [];
        foreach ($data->getRedirectUris() as $value_1) {
            $values_1[] = $value_1;
        }
        $dataArray['redirectUris'] = $values_1;
        $values_2 = [];
        foreach ($data->getRoles() as $value_2) {
            $values_2[] = $value_2;
        }
        $dataArray['roles'] = $values_2;
        $dataArray['clientType'] = $data->getClientType();
        $values_3 = [];
        foreach ($data->getPolicies() as $value_3) {
            $values_3[] = $value_3;
        }
        $dataArray['policies'] = $values_3;
        $dataArray['organization'] = $data->getOrganization();
        $dataArray['id'] = $data->getId();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Validator\APIClientConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\APIClient::class => false];
    }
}