# Integrations and workflows

This page lists every `2c19c082ed473e21` API operation in this function group (82 operations). It is generated from the pinned OpenAPI specification; regenerate it after changing the active API revision with `php bin/build-api-change-guide`.

For a step-by-step migration, use [How to add or change things in Bluestone PIM](../making-pim-changes.md) and its worked examples. Each row shows what the operation does, its exact SDK operation ID and route, required inputs, request schema fields and success/error response codes. `GET` reads data; `POST` may create, update, validate, search or submit work, so follow the summary and schema to see its purpose.

Pinned request schemas: [public-api-sync](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/public-api-sync.json) · [external-notifications](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/external-notifications.json) · [bulk-operations](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/bulk-operations.json) · [tasks](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/tasks.json).

## public-api-sync / Categories

Call these with the `public-api-sync` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| List category states. | `POST /papi-sync/category/state/list/by-ids` | `searchCategoryStateByIds` | none | [CategoryStateSearchListRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/public-api-sync.json#components.schemas.CategoryStateSearchListRequest) (application/json; required: `contextId`; fields: `categoryIds`, `contextId`) | `200, 400` |
## external-notifications / Email messages

Call these with the `external-notifications` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Get email message. | `GET /notification-external/messages/email/{messageId}` | `getEmailMessage` | path: `messageId` | none | `200, 400, 404` |
| Get email messages. | `POST /notification-external/messages/email/list` | `getEmailMessages` | none | [EmailMessageSearchRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/external-notifications.json#components.schemas.EmailMessageSearchRequest) (application/json; required: `page`, `pageSize`; fields: `fromCreationDate`, `ids`, `page`, `pageSize`, `toCreationDate`) | `200, 400` |
## external-notifications / Messages in-app

Call these with the `external-notifications` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Get in-app messages. | `POST /notification-external/messages/in-app/list` | `getInAppMessage` | none | [InAppMessageSearchRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/external-notifications.json#components.schemas.InAppMessageSearchRequest) (application/json; required: `page`, `pageSize`; fields: `fromCreationDate`, `ids`, `page`, `pageSize`, `status`, `toCreationDate`) | `200, 400` |
| Get in-app user messages. | `POST /notification-external/messages/user/in-app/list` | `getInAppUserMessage` | none | [InAppMessageSearchRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/external-notifications.json#components.schemas.InAppMessageSearchRequest) (application/json; required: `page`, `pageSize`; fields: `fromCreationDate`, `ids`, `page`, `pageSize`, `status`, `toCreationDate`) | `200, 400` |
| Mark all messages as read. | `PUT /notification-external/messages/user/in-app/readall` | `markAllMessagesAsRead` | none | none | `200, 400` |
| Mark message as read. | `PUT /notification-external/messages/user/in-app/{messageId}/read` | `markMessageAsRead` | path: `messageId` | none | `200, 400, 404` |
| Mark message as unread. | `PUT /notification-external/messages/user/in-app/{messageId}/unread` | `markMessageAsUnread` | path: `messageId` | none | `200, 400, 404` |
## public-api-sync / Products

Call these with the `public-api-sync` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Change product states. | `POST /papi-sync/product/state` | `changeProductState` | none | [ProductStateChangeRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/public-api-sync.json#components.schemas.ProductStateChangeRequest) (application/json; required: `context`; fields: `productIds`, `context`, `action`) | `200, 400` |
## bulk-operations / Products

Call these with the `bulk-operations` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Get job details by ID | `GET /bulk-operations/products/attributes/update/by-numbers/{jobId}` | `getJobStatus` | path: `jobId` | none | `200, 400` |
## public-api-sync / Products

Call these with the `public-api-sync` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| List product states. | `POST /papi-sync/product/state/list/by-ids` | `searchProductStateByIds` | none | [ProductStateSearchListRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/public-api-sync.json#components.schemas.ProductStateSearchListRequest) (application/json; required: `contextId`; fields: `productIds`, `contextId`) | `200, 400` |
## bulk-operations / Products

Call these with the `bulk-operations` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Bulk upsert product attributes by numbers | `POST /bulk-operations/products/attributes/update/by-numbers` | `upsertAttributesByNumbers` | none | [BulkUpsertByNumbersRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/bulk-operations.json#components.schemas.BulkUpsertByNumbersRequest) (application/json; fields: `operations`) | `200, 400` |
## public-api-sync / Session report

Call these with the `public-api-sync` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Create assets report file. | `POST /papi-sync/session/{id}/report/assets/file` | `createSessionReportAssetFile` | path: `id` | [CreateSessionReportRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/public-api-sync.json#components.schemas.CreateSessionReportRequest) (application/json; fields: `format`) | `204, 400, 404, 409` |
| Create entities report file. | `POST /papi-sync/session/{id}/report/entities/file` | `createSessionReportFile` | path: `id` | [CreateSessionReportRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/public-api-sync.json#components.schemas.CreateSessionReportRequest) (application/json; fields: `format`) | `204, 400, 404, 409` |
| Create products report file. | `POST /papi-sync/session/{id}/report/products/file` | `createSessionReportProductsFile` | path: `id` | [CreateSessionReportRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/public-api-sync.json#components.schemas.CreateSessionReportRequest) (application/json; fields: `format`) | `204, 400, 404, 409` |
| Get assets by issue type for the session. | `POST /papi-sync/session/{id}/report/issues/assets/cursor` | `getAssetIdsByIssueType` | path: `id` | [AssetsByIssueTypeCursorRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/public-api-sync.json#components.schemas.AssetsByIssueTypeCursorRequest) (application/json; fields: `issueTypes`, `context`, `cursor`, `pageSize`) | `200, 400, 404` |
| Get products by issue type for the session. | `POST /papi-sync/session/{id}/report/issues/products/cursor` | `getProductIdsByIssueType` | path: `id` | [ProductsByIssueTypeCursorRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/public-api-sync.json#components.schemas.ProductsByIssueTypeCursorRequest) (application/json; fields: `issueTypes`, `context`, `cursor`, `pageSize`) | `200, 400, 404` |
| Get assets issues for the session. | `GET /papi-sync/session/{id}/report/issues/assets` | `getSessionAssetsIssues` | path: `id` | none | `200, 400, 404` |
| Get entities issues for the session. | `GET /papi-sync/session/{id}/report/issues/entities` | `getSessionEntitiesIssues` | path: `id` | none | `200, 400, 404` |
| Get products issues for the session. | `GET /papi-sync/session/{id}/report/issues/products` | `getSessionProductsIssues` | path: `id` | none | `200, 400, 404` |
| Get a session report. | `GET /papi-sync/session/{id}/report` | `getSessionReport` | path: `id` | none | `200, 400, 404` |
| Get assets report link. | `GET /papi-sync/session/{id}/report/assets/link` | `getSessionReportAssetLink` | path: `id`, query: `format` | none | `200, 400, 404` |
| Get entities report link. | `GET /papi-sync/session/{id}/report/entities/link` | `getSessionReportLink` | path: `id`, query: `format` | none | `200, 400, 404` |
| Get products report link. | `GET /papi-sync/session/{id}/report/products/link` | `getSessionReportProductsLink` | path: `id`, query: `format` | none | `200, 400, 404` |
## public-api-sync / Session sync

Call these with the `public-api-sync` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Add products to session. | `POST /papi-sync/session/{id}/products` | `addProductsToSession` | path: `id` | [AddProductsToSessionRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/public-api-sync.json#components.schemas.AddProductsToSessionRequest) (application/json; fields: `products`) | `204, 400, 404` |
| Cancel session. | `PUT /papi-sync/session/{id}/cancel` | `cancelSession` | path: `id` | none | `200, 400, 404, 409` |
| Close session. | `PUT /papi-sync/session/{id}/done` | `closeSession` | path: `id` | none | `200, 400, 404` |
| Create a new sync session. | `POST /papi-sync/session` | `createSession` | none | [SyncSessionRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/public-api-sync.json#components.schemas.SyncSessionRequest) (application/json; fields: `contexts`) | `201, 400` |
| Get sync session. | `GET /papi-sync/session/{id}` | `getSession` | path: `id` | none | `200, 400, 404` |
## external-notifications / Subscriptions apps queue webhook

Call these with the `external-notifications` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Get info about apps queue webhook. | `GET /notification-external/subscriptions/webhook/{webhookId}/apps` | `getUseAppsQueue` | path: `webhookId` | none | `200, 400, 404` |
| Update apps queue for the given webhook. | `PUT /notification-external/subscriptions/webhook/{webhookId}/apps` | `updateAppsQueue` | path: `webhookId` | [WebhookAppsQueueUpdateRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/external-notifications.json#components.schemas.WebhookAppsQueueUpdateRequest) (application/json; required: `enabled`; fields: `enabled`) | `204, 400, 404` |
## external-notifications / Subscriptions email

Call these with the `external-notifications` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Get user aggregation configuration for given entity type. | `GET /notification-external/subscriptions/user/email/aggregation/entity/{entityType}` | `findConfiguration` | path: `entityType` | none | `200, 400` |
| Get all events subscriptions enabled for email channel. | `GET /notification-external/subscriptions/user/email/events` | `findEmail` | none | none | `200, 400` |
| Subscribe for given events for email channel. | `PUT /notification-external/subscriptions/user/email/events` | `subscribeEmail` | none | [UserEventTypeListRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/external-notifications.json#components.schemas.UserEventTypeListRequest) (application/json; required: `eventTypes`; fields: `eventTypes`) | `200, 400` |
| Unsubscribe for given events for email channel. | `DELETE /notification-external/subscriptions/user/email/events` | `unsubscribeEmail` | none | [UserEventTypeListRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/external-notifications.json#components.schemas.UserEventTypeListRequest) (application/json; required: `eventTypes`; fields: `eventTypes`) | `204, 400` |
| Modify user aggregation configuration for given entity type. | `PUT /notification-external/subscriptions/user/email/aggregation/entity/{entityType}` | `updateEmailFrequency` | path: `entityType` | [FrequencyConfigRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/external-notifications.json#components.schemas.FrequencyConfigRequest) (application/json; required: `aggregated`, `aggregationFrequency`, `immediately`; fields: `aggregated`, `aggregationFrequency`, `immediately`) | `202, 400` |
## external-notifications / Subscriptions in-app

Call these with the `external-notifications` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Get all events subscriptions enabled for in-app channel. | `GET /notification-external/subscriptions/user/in-app/events` | `findInApp` | none | none | `200, 400` |
| Subscribe for given events for in-app channel. | `PUT /notification-external/subscriptions/user/in-app/events` | `subscribeInApp` | none | [UserEventTypeListRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/external-notifications.json#components.schemas.UserEventTypeListRequest) (application/json; required: `eventTypes`; fields: `eventTypes`) | `200, 400` |
| Unsubscribe for given events for in-app channel. | `DELETE /notification-external/subscriptions/user/in-app/events` | `unsubscribeInApp` | none | [UserEventTypeListRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/external-notifications.json#components.schemas.UserEventTypeListRequest) (application/json; required: `eventTypes`; fields: `eventTypes`) | `204, 400` |
## external-notifications / Subscriptions watch

Call these with the `external-notifications` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Get all entities watched for given eventType. | `GET /notification-external/subscriptions/user/watch/event/{eventType}` | `findWatchedEntities` | path: `eventType` | none | `200, 400` |
| Subscribe watch for given entities. | `PUT /notification-external/subscriptions/user/watch/event/{eventType}` | `subscribeToEntity` | path: `eventType` | [EntityWatchRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/external-notifications.json#components.schemas.EntityWatchRequest) (application/json; required: `entityIds`; fields: `entityIds`) | `200, 400` |
| Unsubscribe watch for given entities. | `DELETE /notification-external/subscriptions/user/watch/event/{eventType}` | `unsubscribeFromEntity` | path: `eventType` | [EntityWatchRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/external-notifications.json#components.schemas.EntityWatchRequest) (application/json; required: `entityIds`; fields: `entityIds`) | `204, 400` |
## external-notifications / Subscriptions webhook

Call these with the `external-notifications` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Get all events subscriptions enabled for given webhook. | `GET /notification-external/subscriptions/webhook/{webhookId}/events` | `findWebhook` | path: `webhookId` | none | `200, 400` |
| Subscribe for given events for given webhook. | `PUT /notification-external/subscriptions/webhook/{webhookId}/events` | `subscribe` | path: `webhookId` | [WebhookEventTypeListRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/external-notifications.json#components.schemas.WebhookEventTypeListRequest) (application/json; required: `eventTypes`; fields: `eventTypes`) | `200, 400` |
| Unsubscribe for given events for given webhook. | `DELETE /notification-external/subscriptions/webhook/{webhookId}/events` | `unsubscribe` | path: `webhookId` | [WebhookEventTypeListRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/external-notifications.json#components.schemas.WebhookEventTypeListRequest) (application/json; required: `eventTypes`; fields: `eventTypes`) | `200, 400` |
## tasks / Task comments

Call these with the `tasks` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Add a comment for given task | `POST /tasks/comments/{taskId}` | `addTaskComment` | path: `taskId` | [AddCommentRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/tasks.json#components.schemas.AddCommentRequest) (application/json; fields: `message`) | `201, 400` |
| Add a comment reply for given task comment. | `POST /tasks/comments/{taskId}/{commentId}` | `addTaskCommentReply` | path: `taskId`, path: `commentId` | [AddCommentReplyRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/tasks.json#components.schemas.AddCommentReplyRequest) (application/json; fields: `message`) | `201, 400` |
| List all comments with replies for given task. | `GET /tasks/comments/{taskId}` | `listAllTaskComments` | path: `taskId` | none | `200, 400` |
## tasks / Tasks

Call these with the `tasks` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Assign products to task. | `POST /tasks/tasks/{taskId}/products` | `assignProducts` | path: `taskId` | [AssignProductToTaskRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/tasks.json#components.schemas.AssignProductToTaskRequest) (application/json; required: `productIds`; fields: `productIds`) | `202, 400` |
| Assign task. | `PUT /tasks/tasks/{taskId}/assign` | `assignTask` | path: `taskId` | [AssignTaskRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/tasks.json#components.schemas.AssignTaskRequest) (application/json; fields: `assignee`, `assigneeType`) | `202, 400` |
| Complete product in scope of a task. | `PUT /tasks/tasks/{taskId}/products/{productId}/complete` | `completeTaskProduct` | path: `taskId`, path: `productId` | none | `202, 400` |
| Create new task. | `POST /tasks/tasks` | `createTask` | none | [CreateTaskRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/tasks.json#components.schemas.CreateTaskRequest) (application/json; required: `assignee`, `dueDate`, `title`; fields: `title`, `description`, `assignee`, `assigneeType`, `dueDate`, `context`, `isPrivate`, `assigneeReminderTime`, `creatorReminderTime`) | `201, 400, 404` |
| Delete product from task scope. | `DELETE /tasks/tasks/{taskId}/products/{productId}` | `deleteTaskProduct` | path: `taskId`, path: `productId` | none | `201, 400` |
| List all/archived/assigned/created tasks for user. | `GET /tasks/tasks/users/{userId}/{taskType}` | `fetchTasks` | path: `userId`, path: `taskType` | none | `200, 400` |
| List all/archived/assigned tasks for user group. | `GET /tasks/tasks/userGroups/{userGroupId}/{taskType}` | `fetchTasksForUserGroup` | path: `userGroupId`, path: `taskType` | none | `200, 400` |
| Get single task by id. | `GET /tasks/tasks/{taskId}` | `getSingleTask` | path: `taskId` | none | `200, 400` |
| List archived tasks for organization. | `GET /tasks/tasks/archived` | `listArchivedTasksV2` | none | none | `200, 400` |
| List folders of tasks for user. | `GET /tasks/tasks/folders` | `listFolders` | none | none | `200, 400` |
| List all tasks for organization. | `GET /tasks/tasks` | `listTasks` | none | none | `200, 400, 404` |
| Mark product as incomplete in scope of a task. | `PUT /tasks/tasks/{taskId}/products/{productId}/revoke` | `revokeTaskProduct` | path: `taskId`, path: `productId` | none | `201, 400` |
| Update task data. | `PUT /tasks/tasks/{taskId}` | `updateTask` | path: `taskId` | [UpdateTaskRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/tasks.json#components.schemas.UpdateTaskRequest) (application/json; fields: `title`, `description`, `dueDate`, `context`) | `202, 400` |
## tasks / Tasks reminders

Call these with the `tasks` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Create reminder for task (max 5 allowed per task). | `POST /tasks/tasks/reminders/task/{taskId}` | `createTasksReminderConfig` | path: `taskId` | [CreateTaskReminderRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/tasks.json#components.schemas.CreateTaskReminderRequest) (application/json; fields: `remindBeforeTime`) | `201, 400` |
| Delete reminder config. | `DELETE /tasks/tasks/reminders/{reminderId}` | `deleteReminderConfig` | path: `reminderId` | none | `204, 400` |
| Get reminders for task. | `GET /tasks/tasks/reminders/task/{taskId}` | `getReminderConfig` | path: `taskId` | none | `200, 400` |
| Update reminder config. | `PUT /tasks/tasks/reminders/{reminderId}` | `updateReminderConfig` | path: `reminderId` | [CreateTaskReminderRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/tasks.json#components.schemas.CreateTaskReminderRequest) (application/json; fields: `remindBeforeTime`) | `202, 400` |
## tasks / Technical

Call these with the `tasks` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Show service version. | `GET /tasks/technical/version` | `presentVersion` | none | none | `200, 400` |
## external-notifications / User configuration

Call these with the `external-notifications` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Get general user configuration. | `GET /notification-external/subscriptions/user` | `findUserConfig` | none | none | `200, 400` |
| Modify general user configuration. | `PATCH /notification-external/subscriptions/user` | `upsert` | none | [UserConfigurationRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/external-notifications.json#components.schemas.UserConfigurationRequest) (application/json; fields: `userEmail`) | `202, 400` |
## tasks / User tasks

Call these with the `tasks` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Complete task by id of logged in user. | `PUT /tasks/userTasks/{taskId}/complete` | `completeUserTask` | path: `taskId` | none | `200, 400` |
| Get tasks of logged in user. | `GET /tasks/userTasks` | `getAllUserTasks` | none | none | `200, 400` |
| Get tasks assigned to logged in user. | `GET /tasks/userTasks/assigned` | `getAssignedUserTasks` | none | none | `200, 400` |
| Get task by id of logged in user. | `GET /tasks/userTasks/{taskId}` | `getUserTask` | path: `taskId` | none | `200, 400` |
| Set task as important by id of logged in user. | `PUT /tasks/userTasks/{taskId}/important` | `setImportantUserTask` | path: `taskId` | none | `200, 400` |
| Set task as unimportant by id of logged in user. | `PUT /tasks/userTasks/{taskId}/unimportant` | `setUnimportantUserTask` | path: `taskId` | none | `200, 400` |
| Revoke task by id of logged in user. | `PUT /tasks/userTasks/{taskId}/revoke` | `uncompleteUserTask` | path: `taskId` | none | `202, 400` |
## external-notifications / Webhook messages

Call these with the `external-notifications` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Get messages for a given webhook. | `POST /notification-external/messages/webhook/list` | `getMessages` | none | [WebhookMessageSearchRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/external-notifications.json#components.schemas.WebhookMessageSearchRequest) (application/json; required: `page`, `pageSize`, `webhookId`; fields: `page`, `pageSize`, `status`, `webhookId`) | `200, 400` |
| Ping webhook. | `POST /notification-external/messages/webhook` | `pingWebhook` | query: `url`, query: `secret` | none | `200, 400` |
## external-notifications / Webhooks

Call these with the `external-notifications` connector. For SDK migration examples and safe retry patterns, see the [cookbook](../making-pim-changes.md).

| What you can do | Method and path | Operation ID | Required inputs | Request body | Responses |
| --- | --- | --- | --- | --- | --- |
| Create webhook. | `POST /notification-external/webhooks` | `create` | none | [WebhookCreateRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/external-notifications.json#components.schemas.WebhookCreateRequest) (application/json; required: `active`, `secret`, `url`; fields: `active`, `secret`, `url`) | `201, 400, 409` |
| Delete webhook. | `DELETE /notification-external/webhooks/{webhookId}` | `delete` | path: `webhookId` | none | `200, 400, 404` |
| Get webhook. | `GET /notification-external/webhooks/{webhookId}` | `get` | path: `webhookId` | none | `200, 400, 404` |
| Search webhook. | `POST /notification-external/webhooks/list` | `search` | none | [WebhookSearchRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/external-notifications.json#components.schemas.WebhookSearchRequest) (application/json; required: `page`, `pageSize`; fields: `page`, `pageSize`) | `200, 400` |
| [ASYNCHRONOUS ENDPOINT] Update webhook. | `PUT /notification-external/webhooks/{webhookId}` | `update` | path: `webhookId` | [WebhookUpdateRequest](../../resources/bluestone/revisions/2c19c082ed473e21/openapi/external-notifications.json#components.schemas.WebhookUpdateRequest) (application/json; fields: `active`, `secret`, `url`) | `200, 400, 404` |
