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
class DetailedPluginNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\DetailedPlugin::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\DetailedPlugin::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\DetailedPlugin();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('createdAt', $data) && \is_int($data['createdAt'])) {
            $data['createdAt'] = (float) $data['createdAt'];
        }
        if (\array_key_exists('updatedAt', $data) && \is_int($data['updatedAt'])) {
            $data['updatedAt'] = (float) $data['updatedAt'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Validator\DetailedPluginConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt($data['createdAt']);
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt($data['updatedAt']);
        }
        if (\array_key_exists('permissionDefinitions', $data)) {
            $values = [];
            foreach ($data['permissionDefinitions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\PermissionDefinitionPlugins::class, 'json', $context);
            }
            $object->setPermissionDefinitions($values);
        }
        if (\array_key_exists('dependentPermissions', $data)) {
            $values_1 = [];
            foreach ($data['dependentPermissions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\DependentPermissionPlugins::class, 'json', $context);
            }
            $object->setDependentPermissions($values_1);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['createdAt'] = $data->getCreatedAt();
        $dataArray['updatedAt'] = $data->getUpdatedAt();
        $values = [];
        foreach ($data->getPermissionDefinitions() as $value) {
            $values[] = $value === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['permissionDefinitions'] = $values;
        $values_1 = [];
        foreach ($data->getDependentPermissions() as $value_1) {
            $values_1[] = $value_1 === null ? null : new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
        }
        $dataArray['dependentPermissions'] = $values_1;
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Validator\DetailedPluginConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\DetailedPlugin::class => false];
    }
}