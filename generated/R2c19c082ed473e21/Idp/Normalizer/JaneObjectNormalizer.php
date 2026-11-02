<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\Normalizer\CheckArray;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\AgreementsResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\AgreementsResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\APIClient::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\APIClientNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\APIClientV2::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\APIClientV2Normalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\APIClientNameV2::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\APIClientNameV2Normalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\Consent::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\ConsentNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\DependentPermissions::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\DependentPermissionsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\PluginPermission::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\PluginPermissionNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\PluginPermissionPluginPermissionsItem::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\PluginPermissionPluginPermissionsItemNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\ManagedRole::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\ManagedRoleNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\MinePermissions::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\MinePermissionsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\MinePermissionsPluginsUIPermissions::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\MinePermissionsPluginsUIPermissionsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\PresentableOrganization::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\PresentableOrganizationNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\PresentableOrganizationMfa::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\PresentableOrganizationMfaNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\Permission::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\PermissionNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\PluginIdModel::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\PluginIdModelNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\PermissionDefinitionPlugins::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\PermissionDefinitionPluginsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\DependentPermissionPlugins::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\DependentPermissionPluginsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\DetailedPlugin::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\DetailedPluginNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\Policy::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\PolicyNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\PolicyRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\PolicyRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\RoleSinglePluginPermission::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\RoleSinglePluginPermissionNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\RolePluginPermissions::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\RolePluginPermissionsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\Role::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\RoleNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\NewRoleRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\NewRoleRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\UpdateRoleRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\UpdateRoleRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\AssignRevokeRolePermissionRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\AssignRevokeRolePermissionRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\AssignRevokeRolePluginPermissionRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\AssignRevokeRolePluginPermissionRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\DefaultRoleResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\DefaultRoleResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\DefaultRoleRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\DefaultRoleRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\ServicesByIds::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\ServicesByIdsNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\ServicesByIdsRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\ServicesByIdsRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\SSOProviderResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\SSOProviderResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\UpdateSSOProviderRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\UpdateSSOProviderRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\PickUserGroupName::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\PickUserGroupNameNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\PickUserGroupNumberDescriptionStatus::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\PickUserGroupNumberDescriptionStatusNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\CreateUserGroupRequestBody::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\CreateUserGroupRequestBodyNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\UserGroup::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\UserGroupNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\GetUserGroupsListRequestResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\GetUserGroupsListRequestResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\GetUserGroupsCountRequestResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\GetUserGroupsCountRequestResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\GetUserGroupByIdRequestResponse::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\GetUserGroupByIdRequestResponseNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\PickUserGroupNameNumberDescriptionStatus::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\PickUserGroupNameNumberDescriptionStatusNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\User::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\UserNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\NewUserRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\NewUserRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\UpdateUserRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\UpdateUserRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\ChangePasswordRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\ChangePasswordRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\ChangeStatusRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\ChangeStatusRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\SetAdditionalPropertiesRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\SetAdditionalPropertiesRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\SetAdditionalPropertiesRequestAdditionalProperties::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\SetAdditionalPropertiesRequestAdditionalPropertiesNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\RemoveAdditionalPropertiesRequest::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\RemoveAdditionalPropertiesRequestNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\AdditionalUserPropertiesGetResponse200::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\AdditionalUserPropertiesGetResponse200Normalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\ConsentGetResponse200::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\ConsentGetResponse200Normalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\RolesIdPluginPluginIdGetResponse200::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\RolesIdPluginPluginIdGetResponse200Normalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\UserGroupsIdRolesAssignPutBody::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\UserGroupsIdRolesAssignPutBodyNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\UserGroupsIdRolesUnassignPutBody::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\UserGroupsIdRolesUnassignPutBodyNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\UserGroupsIdPoliciesAssignPutBody::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\UserGroupsIdPoliciesAssignPutBodyNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\UserGroupsIdPoliciesUnassignPutBody::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\UserGroupsIdPoliciesUnassignPutBodyNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\UserGroupsIdManagedRolesAssignPutBody::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\UserGroupsIdManagedRolesAssignPutBodyNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\UserGroupsIdManagedRolesUnassignPutBody::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\UserGroupsIdManagedRolesUnassignPutBodyNormalizer::class,
        
        \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\UsersIdPicturePutBody::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Normalizer\UsersIdPicturePutBodyNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }
}