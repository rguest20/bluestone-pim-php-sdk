<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\ConnectorOperations;

use Symfony\Contracts\HttpClient\ResponseInterface;

/** Operation-named connector methods generated from API revision 2c19c082ed473e21. */
trait IdpOperations
{
    public function AcceptAgreement(string $agreementId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('AcceptAgreement', func_get_args());
    }

    public function AddManagedRoleToUserGroup(string $id, array $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('AddManagedRoleToUserGroup', func_get_args());
    }

    public function AddRoleToUserGroup(string $id, array $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('AddRoleToUserGroup', func_get_args());
    }

    public function ArchivePolicyWithId(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('ArchivePolicyWithId', func_get_args());
    }

    public function ArchiveRoleWithId(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('ArchiveRoleWithId', func_get_args());
    }

    public function AssignPluginPermissions(string $id, string $pluginId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\AssignRevokeRolePluginPermissionRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('AssignPluginPermissions', func_get_args());
    }

    public function AssignPolicyToUserGroup(string $id, array $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('AssignPolicyToUserGroup', func_get_args());
    }

    public function AssignPropertiesToUser(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\SetAdditionalPropertiesRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('AssignPropertiesToUser', func_get_args());
    }

    public function AssignRolePermissionsWithId(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\AssignRevokeRolePermissionRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('AssignRolePermissionsWithId', func_get_args());
    }

    public function AssignUserGroupToUser(string $id, string $userGroupId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('AssignUserGroupToUser', func_get_args());
    }

    public function ChangeUserPassword(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\ChangePasswordRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('ChangeUserPassword', func_get_args());
    }

    public function ClearDefaultRole(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('ClearDefaultRole', func_get_args());
    }

    public function CreatePolicy(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\PolicyRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('CreatePolicy', func_get_args());
    }

    public function CreateRole(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\NewRoleRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('CreateRole', func_get_args());
    }

    public function CreateUser(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\NewUserRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('CreateUser', func_get_args());
    }

    public function CreateUserGroup(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\CreateUserGroupRequestBody $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('CreateUserGroup', func_get_args());
    }

    public function DeleteUserGroup(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('DeleteUserGroup', func_get_args());
    }

    public function DuplicateUserGroup(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('DuplicateUserGroup', func_get_args());
    }

    public function GetAdditionalConsentProperties(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetAdditionalConsentProperties', func_get_args());
    }

    public function GetAdditionalUserProperties(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetAdditionalUserProperties', func_get_args());
    }

    public function GetAllAPIClients(array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetAllAPIClients', func_get_args());
    }

    public function GetAllAPIClientsName(array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetAllAPIClientsName', func_get_args());
    }

    public function GetAllManagedRoles(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetAllManagedRoles', func_get_args());
    }

    public function GetAllPermissions(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetAllPermissions', func_get_args());
    }

    public function GetAllPluginPermissions(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetAllPluginPermissions', func_get_args());
    }

    public function GetAllPolicies(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetAllPolicies', func_get_args());
    }

    public function GetAllRoles(array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetAllRoles', func_get_args());
    }

    public function GetAllServicesIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\ServicesByIdsRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetAllServicesIds', func_get_args());
    }

    public function GetDefaultRole(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetDefaultRole', func_get_args());
    }

    public function GetDependentPermissionsForAllPermissions(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetDependentPermissionsForAllPermissions', func_get_args());
    }

    public function GetLatestAgreement(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetLatestAgreement', func_get_args());
    }

    public function GetManagedRoleWithId(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetManagedRoleWithId', func_get_args());
    }

    public function GetOrganizationWithId(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetOrganizationWithId', func_get_args());
    }

    public function GetPermissionWithId(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetPermissionWithId', func_get_args());
    }

    public function GetPluginPermissionWithId(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetPluginPermissionWithId', func_get_args());
    }

    public function GetPluginPermissions(string $id, string $pluginId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetPluginPermissions', func_get_args());
    }

    public function GetPolicyWithId(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetPolicyWithId', func_get_args());
    }

    public function GetRoleWithId(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetRoleWithId', func_get_args());
    }

    public function GetSSOProviders(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetSSOProviders', func_get_args());
    }

    public function GetUserGroupWithId(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetUserGroupWithId', func_get_args());
    }

    public function GetUserGroupsCount(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetUserGroupsCount', func_get_args());
    }

    public function GetUserGroupsList(array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetUserGroupsList', func_get_args());
    }

    public function GetUserOrganizations(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetUserOrganizations', func_get_args());
    }

    public function GetUserUIPermissions(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetUserUIPermissions', func_get_args());
    }

    public function GetUserWithId(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetUserWithId', func_get_args());
    }

    public function GetUsers(array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GetUsers', func_get_args());
    }

    public function GrantManagedRole(string $id, string $roleId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GrantManagedRole', func_get_args());
    }

    public function GrantPolicy(string $id, string $policyId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GrantPolicy', func_get_args());
    }

    public function GrantRole(string $id, string $roleName): ResponseInterface
    {
        return $this->invokeGeneratedOperation('GrantRole', func_get_args());
    }

    public function RemoveManagedRoleFromUserGroup(string $id, array $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('RemoveManagedRoleFromUserGroup', func_get_args());
    }

    public function RemovePropertiesFromUser(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\RemoveAdditionalPropertiesRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('RemovePropertiesFromUser', func_get_args());
    }

    public function RemoveRoleFromUserGroup(string $id, array $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('RemoveRoleFromUserGroup', func_get_args());
    }

    public function ResendJoinEmail(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('ResendJoinEmail', func_get_args());
    }

    public function ResetMFA(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('ResetMFA', func_get_args());
    }

    public function ResetMfaForUser(string $id): ResponseInterface
    {
        return $this->invokeGeneratedOperation('ResetMfaForUser', func_get_args());
    }

    public function RevokeManagedRole(string $id, string $roleId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('RevokeManagedRole', func_get_args());
    }

    public function RevokePluginPermissions(string $id, string $pluginId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\AssignRevokeRolePluginPermissionRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('RevokePluginPermissions', func_get_args());
    }

    public function RevokePolicy(string $id, string $policyId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('RevokePolicy', func_get_args());
    }

    public function RevokeRole(string $id, string $roleName): ResponseInterface
    {
        return $this->invokeGeneratedOperation('RevokeRole', func_get_args());
    }

    public function RevokeRolePermissionsWithId(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\AssignRevokeRolePermissionRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('RevokeRolePermissionsWithId', func_get_args());
    }

    public function SetDefaultRole(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\DefaultRoleRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('SetDefaultRole', func_get_args());
    }

    public function SetUserStatus(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\ChangeStatusRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('SetUserStatus', func_get_args());
    }

    public function UnassignPolicyFromUserGroup(string $id, array $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('UnassignPolicyFromUserGroup', func_get_args());
    }

    public function UnassignUserGroupFromUser(string $id, string $userGroupId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('UnassignUserGroupFromUser', func_get_args());
    }

    public function UpdatePluginPermissions(string $id, string $pluginId, array $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('UpdatePluginPermissions', func_get_args());
    }

    public function UpdatePolicyWithId(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\PolicyRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('UpdatePolicyWithId', func_get_args());
    }

    public function UpdateRoleWithId(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\UpdateRoleRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('UpdateRoleWithId', func_get_args());
    }

    public function UpdateSSOProviderSecret(string $clientId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\UpdateSSOProviderRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('UpdateSSOProviderSecret', func_get_args());
    }

    public function UpdateUser(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\UpdateUserRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('UpdateUser', func_get_args());
    }

    public function UpdateUserGroup(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\PickUserGroupNameNumberDescriptionStatus $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('UpdateUserGroup', func_get_args());
    }

    public function UpdateUserType(string $id, string $type): ResponseInterface
    {
        return $this->invokeGeneratedOperation('UpdateUserType', func_get_args());
    }

    public function UploadUserPicture(string $id, array $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('UploadUserPicture', func_get_args());
    }

}
