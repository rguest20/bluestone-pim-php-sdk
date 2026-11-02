<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Operations;

use Youwe\BluestonePim\Api\GeneratedOperationAdapter;
use Symfony\Contracts\HttpClient\ResponseInterface;

/** Named request facade for idp operations in OpenAPI revision 2c19c082ed473e21. */
final class IdpOperations extends GeneratedOperationAdapter
{
    public function AcceptAgreement(string $agreementId): ResponseInterface
    {
        return $this->dispatch('AcceptAgreement', ['agreementId' => $agreementId], [], [], false, null, false, true, NULL);
    }

    public function AddManagedRoleToUserGroup(string $id, array $requestBody): ResponseInterface
    {
        return $this->dispatch('AddManagedRoleToUserGroup', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function AddRoleToUserGroup(string $id, array $requestBody): ResponseInterface
    {
        return $this->dispatch('AddRoleToUserGroup', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function ArchivePolicyWithId(string $id): ResponseInterface
    {
        return $this->dispatch('ArchivePolicyWithId', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function ArchiveRoleWithId(string $id): ResponseInterface
    {
        return $this->dispatch('ArchiveRoleWithId', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function AssignPluginPermissions(string $id, string $pluginId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\AssignRevokeRolePluginPermissionRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('AssignPluginPermissions', ['id' => $id, 'pluginId' => $pluginId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function AssignPolicyToUserGroup(string $id, array $requestBody): ResponseInterface
    {
        return $this->dispatch('AssignPolicyToUserGroup', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function AssignPropertiesToUser(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\SetAdditionalPropertiesRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('AssignPropertiesToUser', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function AssignRolePermissionsWithId(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\AssignRevokeRolePermissionRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('AssignRolePermissionsWithId', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function AssignUserGroupToUser(string $id, string $userGroupId): ResponseInterface
    {
        return $this->dispatch('AssignUserGroupToUser', ['id' => $id, 'userGroupId' => $userGroupId], [], [], false, null, false, true, NULL);
    }

    public function ChangeUserPassword(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\ChangePasswordRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('ChangeUserPassword', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function ClearDefaultRole(): ResponseInterface
    {
        return $this->dispatch('ClearDefaultRole', [], [], [], false, null, false, true, NULL);
    }

    public function CreatePolicy(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\PolicyRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('CreatePolicy', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function CreateRole(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\NewRoleRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('CreateRole', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function CreateUser(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\NewUserRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('CreateUser', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function CreateUserGroup(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\CreateUserGroupRequestBody $requestBody): ResponseInterface
    {
        return $this->dispatch('CreateUserGroup', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function DeleteUserGroup(string $id): ResponseInterface
    {
        return $this->dispatch('DeleteUserGroup', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function DuplicateUserGroup(string $id): ResponseInterface
    {
        return $this->dispatch('DuplicateUserGroup', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function GetAdditionalConsentProperties(): ResponseInterface
    {
        return $this->dispatch('GetAdditionalConsentProperties', [], [], [], false, null, false, true, NULL);
    }

    public function GetAdditionalUserProperties(): ResponseInterface
    {
        return $this->dispatch('GetAdditionalUserProperties', [], [], [], false, null, false, true, NULL);
    }

    public function GetAllAPIClients(array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('GetAllAPIClients', [], $queryParameters, [], false, null, false, true, NULL);
    }

    public function GetAllAPIClientsName(array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('GetAllAPIClientsName', [], $queryParameters, [], false, null, false, true, NULL);
    }

    public function GetAllManagedRoles(): ResponseInterface
    {
        return $this->dispatch('GetAllManagedRoles', [], [], [], false, null, false, true, NULL);
    }

    public function GetAllPermissions(): ResponseInterface
    {
        return $this->dispatch('GetAllPermissions', [], [], [], false, null, false, true, NULL);
    }

    public function GetAllPluginPermissions(): ResponseInterface
    {
        return $this->dispatch('GetAllPluginPermissions', [], [], [], false, null, false, true, NULL);
    }

    public function GetAllPolicies(): ResponseInterface
    {
        return $this->dispatch('GetAllPolicies', [], [], [], false, null, false, true, NULL);
    }

    public function GetAllRoles(array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('GetAllRoles', [], $queryParameters, [], false, null, false, true, NULL);
    }

    public function GetAllServicesIds(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\ServicesByIdsRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('GetAllServicesIds', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function GetDefaultRole(): ResponseInterface
    {
        return $this->dispatch('GetDefaultRole', [], [], [], false, null, false, true, NULL);
    }

    public function GetDependentPermissionsForAllPermissions(): ResponseInterface
    {
        return $this->dispatch('GetDependentPermissionsForAllPermissions', [], [], [], false, null, false, true, NULL);
    }

    public function GetLatestAgreement(): ResponseInterface
    {
        return $this->dispatch('GetLatestAgreement', [], [], [], false, null, false, true, NULL);
    }

    public function GetManagedRoleWithId(string $id): ResponseInterface
    {
        return $this->dispatch('GetManagedRoleWithId', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function GetOrganizationWithId(string $id): ResponseInterface
    {
        return $this->dispatch('GetOrganizationWithId', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function GetPermissionWithId(string $id): ResponseInterface
    {
        return $this->dispatch('GetPermissionWithId', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function GetPluginPermissionWithId(string $id): ResponseInterface
    {
        return $this->dispatch('GetPluginPermissionWithId', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function GetPluginPermissions(string $id, string $pluginId): ResponseInterface
    {
        return $this->dispatch('GetPluginPermissions', ['id' => $id, 'pluginId' => $pluginId], [], [], false, null, false, true, NULL);
    }

    public function GetPolicyWithId(string $id): ResponseInterface
    {
        return $this->dispatch('GetPolicyWithId', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function GetRoleWithId(string $id): ResponseInterface
    {
        return $this->dispatch('GetRoleWithId', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function GetSSOProviders(): ResponseInterface
    {
        return $this->dispatch('GetSSOProviders', [], [], [], false, null, false, true, NULL);
    }

    public function GetUserGroupWithId(string $id): ResponseInterface
    {
        return $this->dispatch('GetUserGroupWithId', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function GetUserGroupsCount(): ResponseInterface
    {
        return $this->dispatch('GetUserGroupsCount', [], [], [], false, null, false, true, NULL);
    }

    public function GetUserGroupsList(array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('GetUserGroupsList', [], $queryParameters, [], false, null, false, true, NULL);
    }

    public function GetUserOrganizations(): ResponseInterface
    {
        return $this->dispatch('GetUserOrganizations', [], [], [], false, null, false, true, NULL);
    }

    public function GetUserUIPermissions(): ResponseInterface
    {
        return $this->dispatch('GetUserUIPermissions', [], [], [], false, null, false, true, NULL);
    }

    public function GetUserWithId(string $id): ResponseInterface
    {
        return $this->dispatch('GetUserWithId', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function GetUsers(array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('GetUsers', [], $queryParameters, [], false, null, false, true, NULL);
    }

    public function GrantManagedRole(string $id, string $roleId): ResponseInterface
    {
        return $this->dispatch('GrantManagedRole', ['id' => $id, 'roleId' => $roleId], [], [], false, null, false, true, NULL);
    }

    public function GrantPolicy(string $id, string $policyId): ResponseInterface
    {
        return $this->dispatch('GrantPolicy', ['id' => $id, 'policyId' => $policyId], [], [], false, null, false, true, NULL);
    }

    public function GrantRole(string $id, string $roleName): ResponseInterface
    {
        return $this->dispatch('GrantRole', ['id' => $id, 'roleName' => $roleName], [], [], false, null, false, true, NULL);
    }

    public function RemoveManagedRoleFromUserGroup(string $id, array $requestBody): ResponseInterface
    {
        return $this->dispatch('RemoveManagedRoleFromUserGroup', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function RemovePropertiesFromUser(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\RemoveAdditionalPropertiesRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('RemovePropertiesFromUser', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function RemoveRoleFromUserGroup(string $id, array $requestBody): ResponseInterface
    {
        return $this->dispatch('RemoveRoleFromUserGroup', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function ResendJoinEmail(string $id): ResponseInterface
    {
        return $this->dispatch('ResendJoinEmail', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function ResetMFA(): ResponseInterface
    {
        return $this->dispatch('ResetMFA', [], [], [], false, null, false, true, NULL);
    }

    public function ResetMfaForUser(string $id): ResponseInterface
    {
        return $this->dispatch('ResetMfaForUser', ['id' => $id], [], [], false, null, false, true, NULL);
    }

    public function RevokeManagedRole(string $id, string $roleId): ResponseInterface
    {
        return $this->dispatch('RevokeManagedRole', ['id' => $id, 'roleId' => $roleId], [], [], false, null, false, true, NULL);
    }

    public function RevokePluginPermissions(string $id, string $pluginId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\AssignRevokeRolePluginPermissionRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('RevokePluginPermissions', ['id' => $id, 'pluginId' => $pluginId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function RevokePolicy(string $id, string $policyId): ResponseInterface
    {
        return $this->dispatch('RevokePolicy', ['id' => $id, 'policyId' => $policyId], [], [], false, null, false, true, NULL);
    }

    public function RevokeRole(string $id, string $roleName): ResponseInterface
    {
        return $this->dispatch('RevokeRole', ['id' => $id, 'roleName' => $roleName], [], [], false, null, false, true, NULL);
    }

    public function RevokeRolePermissionsWithId(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\AssignRevokeRolePermissionRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('RevokeRolePermissionsWithId', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function SetDefaultRole(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\DefaultRoleRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('SetDefaultRole', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function SetUserStatus(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\ChangeStatusRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('SetUserStatus', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function UnassignPolicyFromUserGroup(string $id, array $requestBody): ResponseInterface
    {
        return $this->dispatch('UnassignPolicyFromUserGroup', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function UnassignUserGroupFromUser(string $id, string $userGroupId): ResponseInterface
    {
        return $this->dispatch('UnassignUserGroupFromUser', ['id' => $id, 'userGroupId' => $userGroupId], [], [], false, null, false, true, NULL);
    }

    public function UpdatePluginPermissions(string $id, string $pluginId, array $requestBody): ResponseInterface
    {
        return $this->dispatch('UpdatePluginPermissions', ['id' => $id, 'pluginId' => $pluginId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function UpdatePolicyWithId(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\PolicyRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('UpdatePolicyWithId', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function UpdateRoleWithId(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\UpdateRoleRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('UpdateRoleWithId', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function UpdateSSOProviderSecret(string $clientId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\UpdateSSOProviderRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('UpdateSSOProviderSecret', ['clientId' => $clientId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function UpdateUser(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\UpdateUserRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('UpdateUser', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function UpdateUserGroup(string $id, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model\PickUserGroupNameNumberDescriptionStatus $requestBody): ResponseInterface
    {
        return $this->dispatch('UpdateUserGroup', ['id' => $id], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function UpdateUserType(string $id, string $type): ResponseInterface
    {
        return $this->dispatch('UpdateUserType', ['id' => $id, 'type' => $type], [], [], false, null, false, true, NULL);
    }

    public function UploadUserPicture(string $id, array $requestBody): ResponseInterface
    {
        return $this->dispatch('UploadUserPicture', ['id' => $id], [], [], true, $requestBody, false, false, 'multipart/form-data');
    }

}
