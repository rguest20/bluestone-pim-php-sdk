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
class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\User::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\User::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\User();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('canSendEmail', $data) && \is_int($data['canSendEmail'])) {
            $data['canSendEmail'] = (bool) $data['canSendEmail'];
        }
        if (\array_key_exists('isInitial', $data) && \is_int($data['isInitial'])) {
            $data['isInitial'] = (bool) $data['isInitial'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Validator\UserConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('picture', $data) && $data['picture'] !== null) {
            $object->setPicture($data['picture']);
        }
        elseif (\array_key_exists('picture', $data) && $data['picture'] === null) {
            $object->setPicture(null);
        }
        if (\array_key_exists('policies', $data)) {
            $values = [];
            foreach ($data['policies'] as $value) {
                $values[] = $value;
            }
            $object->setPolicies($values);
        }
        if (\array_key_exists('roles', $data)) {
            $values_1 = [];
            foreach ($data['roles'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRoles($values_1);
        }
        if (\array_key_exists('managedRoles', $data)) {
            $values_2 = [];
            foreach ($data['managedRoles'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setManagedRoles($values_2);
        }
        if (\array_key_exists('canSendEmail', $data)) {
            $object->setCanSendEmail($data['canSendEmail']);
        }
        if (\array_key_exists('isInitial', $data)) {
            $object->setIsInitial($data['isInitial']);
        }
        if (\array_key_exists('userGroups', $data) && $data['userGroups'] !== null) {
            $values_3 = [];
            foreach ($data['userGroups'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setUserGroups($values_3);
        }
        elseif (\array_key_exists('userGroups', $data) && $data['userGroups'] === null) {
            $object->setUserGroups(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['email'] = $data->getEmail();
        $dataArray['name'] = $data->getName();
        $dataArray['picture'] = $data->getPicture();
        $values = [];
        foreach ($data->getPolicies() as $value) {
            $values[] = $value;
        }
        $dataArray['policies'] = $values;
        $values_1 = [];
        foreach ($data->getRoles() as $value_1) {
            $values_1[] = $value_1;
        }
        $dataArray['roles'] = $values_1;
        $values_2 = [];
        foreach ($data->getManagedRoles() as $value_2) {
            $values_2[] = $value_2;
        }
        $dataArray['managedRoles'] = $values_2;
        $dataArray['canSendEmail'] = $data->getCanSendEmail();
        $dataArray['isInitial'] = $data->getIsInitial();
        $values_3 = [];
        foreach ($data->getUserGroups() as $value_3) {
            $values_3[] = $value_3;
        }
        $dataArray['userGroups'] = $values_3;
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Validator\UserConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\User::class => false];
    }
}