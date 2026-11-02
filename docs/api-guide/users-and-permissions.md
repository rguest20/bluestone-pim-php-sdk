# Users and permissions

This page lists every `2c19c082ed473e21` API operation in this function group (72 operations). It is generated from the pinned OpenAPI specification; regenerate it after changing the active API revision with `php bin/build-api-change-guide`.

For a step-by-step migration, use [How to add or change things in Bluestone PIM](../making-pim-changes.md) and its worked examples. Each row shows what the operation does, its exact SDK operation ID and route, required inputs, request schema fields and success/error response codes. `GET` reads data; `POST` may create, update, validate, search or submit work, so follow the summary and schema to see its purpose.

Pinned request schemas: [idp](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json).

## idp / API Clients

Call these with the `idp` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Returns list of registered API Clients. | `GET /idp/clients` | `GetAllAPIClients` | none | none | `200` |
| Returns list of registered API Clients names and ids. | `GET /idp/clients/name` | `GetAllAPIClientsName` | none | none | `200` |
## idp / Additional user properties

Call these with the `idp` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Returns list of additional user properties. | `GET /idp/additionalUserProperties` | `GetAdditionalUserProperties` | none | none | `200` |
## idp / Consents

Call these with the `idp` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Accept agreement with given id. | `POST /idp/consent/{agreementId}` | `AcceptAgreement` | path: `agreementId` | none | `200` |
| Check if user has approved latest agreement. | `GET /idp/consent` | `GetAdditionalConsentProperties` | none | none | `200` |
| Returns the latest agreement. | `GET /idp/latestAgreement` | `GetLatestAgreement` | none | none | `200` |
## idp / Dependent permissions

Call these with the `idp` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Returns list of all dependent permissions for a permissions. | `GET /idp/dependentPermissions` | `GetDependentPermissionsForAllPermissions` | none | none | `200` |
## idp / Managed roles

Call these with the `idp` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Returns list of managed roles. | `GET /idp/managedRoles` | `GetAllManagedRoles` | none | none | `200` |
| Returns managed role. | `GET /idp/managedRoles/{id}` | `GetManagedRoleWithId` | path: `id` | none | `200` |
## idp / Me

Call these with the `idp` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Returns simplified list of UI permissions in account from token. | `GET /idp/me/ui-permissions` | `GetUserUIPermissions` | none | none | `200` |
| Reset MFA secret for currently logged in user. | `PUT /idp/me/resetMfa` | `ResetMFA` | none | none | `204, 400` |
## idp / Organizations

Call these with the `idp` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Return organization. | `GET /idp/organizations/{id}` | `GetOrganizationWithId` | path: `id` | none | `200` |
| Returns list of user organizations. | `GET /idp/organizations` | `GetUserOrganizations` | none | none | `200` |
## idp / Permissions

Call these with the `idp` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Returns list of permissions. | `GET /idp/permissions` | `GetAllPermissions` | none | none | `200` |
| Return permission. | `GET /idp/permissions/{id}` | `GetPermissionWithId` | path: `id` | none | `200` |
## idp / Plugins

Call these with the `idp` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Returns ids of assigned plugins for organization from token. | `GET /idp/plugins` | `GetAllPluginPermissions` | none | none | `200` |
| Return permissions for specific plugin in organization. | `GET /idp/plugins/{id}` | `GetPluginPermissionWithId` | path: `id` | none | `200` |
## idp / Policies

Call these with the `idp` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Archive policy. | `DELETE /idp/policies/{id}` | `ArchivePolicyWithId` | path: `id` | none | `204` |
| Create new policy. | `POST /idp/policies` | `CreatePolicy` | none | [PolicyRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.PolicyRequest) (application/json; required: `name`; fields: `name`) | `204` |
| Returns list of policies. | `GET /idp/policies` | `GetAllPolicies` | none | none | `200` |
| Return policy. | `GET /idp/policies/{id}` | `GetPolicyWithId` | path: `id` | none | `200` |
| Update policy. | `PUT /idp/policies/{id}` | `UpdatePolicyWithId` | path: `id` | [PolicyRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.PolicyRequest) (application/json; required: `name`; fields: `name`) | `204` |
## idp / Roles

Call these with the `idp` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Archive role. | `DELETE /idp/roles/{id}` | `ArchiveRoleWithId` | path: `id` | none | `204` |
| Assign plugin permissions to plugin. | `POST /idp/roles/{id}/plugin/{pluginId}/assign` | `AssignPluginPermissions` | path: `id`, path: `pluginId` | [AssignRevokeRolePluginPermissionRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.AssignRevokeRolePluginPermissionRequest) (application/json; required: `pluginPermissions`; fields: `pluginPermissions`) | `204` |
| Assign permissions by ids to role by id. | `POST /idp/roles/{id}/permissions/assign` | `AssignRolePermissionsWithId` | path: `id` | [AssignRevokeRolePermissionRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.AssignRevokeRolePermissionRequest) (application/json; required: `permissionIds`; fields: `permissionIds`) | `204` |
| Clear default role. | `DELETE /idp/clearDefaultRole` | `ClearDefaultRole` | none | none | `204` |
| Create new role. | `POST /idp/roles` | `CreateRole` | none | [NewRoleRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.NewRoleRequest) (application/json; required: `name`, `permissions`; fields: `name`, `permissions`) | `204` |
| Returns list of roles. | `GET /idp/roles` | `GetAllRoles` | none | none | `200` |
| Get default role. | `GET /idp/getDefaultRole` | `GetDefaultRole` | none | none | `200` |
| Get permissions for plugin. | `GET /idp/roles/{id}/plugin/{pluginId}` | `GetPluginPermissions` | path: `id`, path: `pluginId` | none | `200` |
| Returns role. | `GET /idp/roles/{id}` | `GetRoleWithId` | path: `id` | none | `200` |
| Revoke plugin permissions from plugin. | `POST /idp/roles/{id}/plugin/{pluginId}/revoke` | `RevokePluginPermissions` | path: `id`, path: `pluginId` | [AssignRevokeRolePluginPermissionRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.AssignRevokeRolePluginPermissionRequest) (application/json; required: `pluginPermissions`; fields: `pluginPermissions`) | `204` |
| Revoke permissions by ids of role by id. | `POST /idp/roles/{id}/permissions/revoke` | `RevokeRolePermissionsWithId` | path: `id` | [AssignRevokeRolePermissionRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.AssignRevokeRolePermissionRequest) (application/json; required: `permissionIds`; fields: `permissionIds`) | `204` |
| Set default role. | `POST /idp/setDefaultRole` | `SetDefaultRole` | none | [DefaultRoleRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.DefaultRoleRequest) (application/json; required: `roleId`; fields: `roleId`) | `204` |
| Update permissions for plugin. | `PUT /idp/roles/{id}/plugin/{pluginId}` | `UpdatePluginPermissions` | path: `id`, path: `pluginId` | [PluginPermissionsRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.PluginPermissionsRequest) (application/json) | `204` |
| Edit role. | `PUT /idp/roles/{id}` | `UpdateRoleWithId` | path: `id` | [UpdateRoleRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.UpdateRoleRequest) (application/json; required: `permissions`; fields: `permissions`) | `204` |
## idp / SSO Providers

Call these with the `idp` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Returns list of SSO provider configurations for the authenticated organization. | `GET /idp/sso-providers` | `GetSSOProviders` | none | none | `200` |
| Update client secret for a specific SSO provider. | `POST /idp/sso-providers/{clientId}` | `UpdateSSOProviderSecret` | path: `clientId` | [UpdateSSOProviderRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.UpdateSSOProviderRequest) (application/json; required: `clientSecret`, `clientSecretExpirationDate`; fields: `clientSecret`, `clientSecretExpirationDate`) | `204, 400, 404` |
## idp / Services

Call these with the `idp` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Returns list of registered API Clients names and ids. | `POST /idp/services/by-ids` | `GetAllServicesIds` | none | [ServicesByIdsRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.ServicesByIdsRequest) (application/json; required: `ids`; fields: `ids`) | `200` |
## idp / UserGroups

Call these with the `idp` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Add managed role to user group. | `PUT /idp/userGroups/{id}/managedRoles/assign` | `AddManagedRoleToUserGroup` | path: `id` | application/json | `200, 404` |
| Add role to user group. | `PUT /idp/userGroups/{id}/roles/assign` | `AddRoleToUserGroup` | path: `id` | application/json | `200, 404` |
| Assign policy to user group | `PUT /idp/userGroups/{id}/policies/assign` | `AssignPolicyToUserGroup` | path: `id` | application/json | `200, 404` |
| Create new user group. | `POST /idp/userGroups` | `CreateUserGroup` | none | [CreateUserGroupRequestBody](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.CreateUserGroupRequestBody) (application/json) | `201, 409` |
| Delete user group. | `DELETE /idp/userGroups/{id}` | `DeleteUserGroup` | path: `id` | none | `204, 404` |
| Duplicate User Group | `POST /idp/userGroups/{id}/duplicate` | `DuplicateUserGroup` | path: `id` | none | `200` |
| Returns user group. | `GET /idp/userGroups/{id}` | `GetUserGroupWithId` | path: `id` | none | `200, 404` |
| Returns total number of user groups. | `GET /idp/userGroups/count` | `GetUserGroupsCount` | none | none | `200` |
| Returns list of user groups. | `GET /idp/userGroups/list` | `GetUserGroupsList` | none | none | `200` |
| Remove managed role from user group. | `PUT /idp/userGroups/{id}/managedRoles/unassign` | `RemoveManagedRoleFromUserGroup` | path: `id` | application/json | `200, 404` |
| Remove role from user group. | `PUT /idp/userGroups/{id}/roles/unassign` | `RemoveRoleFromUserGroup` | path: `id` | application/json | `200, 404` |
| Unassign policy from user group | `PUT /idp/userGroups/{id}/policies/unassign` | `UnassignPolicyFromUserGroup` | path: `id` | application/json | `200, 404` |
| Update user group. | `PATCH /idp/userGroups/{id}` | `UpdateUserGroup` | path: `id` | [PickUserGroupNameNumberDescriptionStatus](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.PickUserGroupNameNumberDescriptionStatus) (application/json; fields: `number`, `name`, `description`, `status`) | `200, 403, 404, 409` |
## idp / Users

Call these with the `idp` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Grant additional properties. | `PUT /idp/users/{id}/additionalProperties/grant` | `AssignPropertiesToUser` | path: `id` | [SetAdditionalPropertiesRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.SetAdditionalPropertiesRequest) (application/json; required: `additionalProperties`; fields: `additionalProperties`) | `204` |
| Assign user group to user. | `PUT /idp/users/{id}/userGroups/{userGroupId}` | `AssignUserGroupToUser` | path: `id`, path: `userGroupId` | none | `200, 403` |
| Change user password. | `PUT /idp/users/{id}/changePassword` | `ChangeUserPassword` | path: `id` | [ChangePasswordRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.ChangePasswordRequest) (application/json; required: `currentPassword`, `newPassword`, `confirmPassword`; fields: `currentPassword`, `newPassword`, `confirmPassword`) | `204` |
| Create new user. | `POST /idp/users` | `CreateUser` | none | [NewUserRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.NewUserRequest) (application/json; required: `email`, `name`, `userType`; fields: `email`, `name`, `userType`) | `204` |
| Returns the user. Fails if no user with that id exists in the caller's organization. | `GET /idp/users/{id}` | `GetUserWithId` | path: `id` | none | `200` |
| Returns the list of users in the caller's organization. | `GET /idp/users` | `GetUsers` | none | none | `200` |
| Grant managed role. | `PUT /idp/users/{id}/managedRoles/{roleId}` | `GrantManagedRole` | path: `id`, path: `roleId` | none | `204` |
| Grant policy. | `PUT /idp/users/{id}/policies/{policyId}` | `GrantPolicy` | path: `id`, path: `policyId` | none | `204` |
| Grant role. | `PUT /idp/users/{id}/roles/{roleName}/grant` | `GrantRole` | path: `id`, path: `roleName` | none | `204` |
| Revoke additional properties. | `PUT /idp/users/{id}/additionalProperties/revoke` | `RemovePropertiesFromUser` | path: `id` | [RemoveAdditionalPropertiesRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.RemoveAdditionalPropertiesRequest) (application/json; required: `propertiesToRemove`; fields: `propertiesToRemove`) | `204` |
| Resend join email. | `PUT /idp/users/{id}/resendJoinEmail` | `ResendJoinEmail` | path: `id` | none | `204` |
| Reset MFA secret for user. | `PUT /idp/users/{id}/resetMfa` | `ResetMfaForUser` | path: `id` | none | `204, 400, 403, 404` |
| Revoke managed role. | `DELETE /idp/users/{id}/managedRoles/{roleId}` | `RevokeManagedRole` | path: `id`, path: `roleId` | none | `204` |
| Revoke policy. | `DELETE /idp/users/{id}/policies/{policyId}` | `RevokePolicy` | path: `id`, path: `policyId` | none | `204` |
| Revoke role. | `PUT /idp/users/{id}/roles/{roleName}/revoke` | `RevokeRole` | path: `id`, path: `roleName` | none | `204` |
| Set user status. | `PUT /idp/users/{id}/setUserStatus` | `SetUserStatus` | path: `id` | [ChangeStatusRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.ChangeStatusRequest) (application/json; required: `userStatus`; fields: `userStatus`) | `204` |
| Unassign user group from user. | `DELETE /idp/users/{id}/userGroups/{userGroupId}` | `UnassignUserGroupFromUser` | path: `id`, path: `userGroupId` | none | `200, 204, 403` |
| Update user. | `PUT /idp/users/{id}` | `UpdateUser` | path: `id` | [UpdateUserRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/idp.json#components.schemas.UpdateUserRequest) (application/json; required: `name`; fields: `email`, `name`) | `200` |
| Update user type. | `PUT /idp/users/{id}/userType/{type}` | `UpdateUserType` | path: `id`, path: `type` | none | `204` |
| Upload user picture. | `PUT /idp/users/{id}/picture` | `UploadUserPicture` | path: `id` | multipart/form-data | `204` |
