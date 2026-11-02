<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Operations;

use Youwe\BluestonePim\Api\GeneratedOperationAdapter;
use Symfony\Contracts\HttpClient\ResponseInterface;

/** Named request facade for tasks operations in OpenAPI revision 2c19c082ed473e21. */
final class TasksOperations extends GeneratedOperationAdapter
{
    public function addTaskComment(string $taskId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\AddCommentRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('addTaskComment', ['taskId' => $taskId], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function addTaskCommentReply(string $taskId, string $commentId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\AddCommentReplyRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('addTaskCommentReply', ['taskId' => $taskId, 'commentId' => $commentId], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function assignProducts(string $taskId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\AssignProductToTaskRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('assignProducts', ['taskId' => $taskId], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function assignTask(string $taskId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\AssignTaskRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('assignTask', ['taskId' => $taskId], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function completeTaskProduct(string $taskId, string $productId): ResponseInterface
    {
        return $this->dispatch('completeTaskProduct', ['taskId' => $taskId, 'productId' => $productId], [], [], false, null, false, true, NULL);
    }

    public function completeUserTask(string $taskId): ResponseInterface
    {
        return $this->dispatch('completeUserTask', ['taskId' => $taskId], [], [], false, null, false, true, NULL);
    }

    public function createTask(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\CreateTaskRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('createTask', [], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

    public function createTasksReminderConfig(string $taskId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\CreateTaskReminderRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('createTasksReminderConfig', ['taskId' => $taskId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function deleteReminderConfig(string $reminderId): ResponseInterface
    {
        return $this->dispatch('deleteReminderConfig', ['reminderId' => $reminderId], [], [], false, null, false, true, NULL);
    }

    public function deleteTaskProduct(string $taskId, string $productId): ResponseInterface
    {
        return $this->dispatch('deleteTaskProduct', ['taskId' => $taskId, 'productId' => $productId], [], [], false, null, false, true, NULL);
    }

    public function fetchTasks(string $userId, string $taskType, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('fetchTasks', ['userId' => $userId, 'taskType' => $taskType], $queryParameters, [], false, null, false, true, NULL);
    }

    public function fetchTasksForUserGroup(string $userGroupId, string $taskType, array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('fetchTasksForUserGroup', ['userGroupId' => $userGroupId, 'taskType' => $taskType], $queryParameters, [], false, null, false, true, NULL);
    }

    public function getAllUserTasks(array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('getAllUserTasks', [], $queryParameters, [], false, null, false, true, NULL);
    }

    public function getAssignedUserTasks(array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('getAssignedUserTasks', [], $queryParameters, [], false, null, false, true, NULL);
    }

    public function getReminderConfig(string $taskId): ResponseInterface
    {
        return $this->dispatch('getReminderConfig', ['taskId' => $taskId], [], [], false, null, false, true, NULL);
    }

    public function getSingleTask(string $taskId): ResponseInterface
    {
        return $this->dispatch('getSingleTask', ['taskId' => $taskId], [], [], false, null, false, true, NULL);
    }

    public function getUserTask(string $taskId): ResponseInterface
    {
        return $this->dispatch('getUserTask', ['taskId' => $taskId], [], [], false, null, false, true, NULL);
    }

    public function listAllTaskComments(string $taskId): ResponseInterface
    {
        return $this->dispatch('listAllTaskComments', ['taskId' => $taskId], [], [], false, null, false, true, NULL);
    }

    public function listArchivedTasksV2(array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('listArchivedTasksV2', [], $queryParameters, [], false, null, false, true, NULL);
    }

    public function listFolders(): ResponseInterface
    {
        return $this->dispatch('listFolders', [], [], [], false, null, false, true, NULL);
    }

    public function listTasks(array $queryParameters = []): ResponseInterface
    {
        return $this->dispatch('listTasks', [], $queryParameters, [], false, null, false, true, NULL);
    }

    public function presentVersion(): ResponseInterface
    {
        return $this->dispatch('presentVersion', [], [], [], false, null, false, true, NULL);
    }

    public function revokeTaskProduct(string $taskId, string $productId): ResponseInterface
    {
        return $this->dispatch('revokeTaskProduct', ['taskId' => $taskId, 'productId' => $productId], [], [], false, null, false, true, NULL);
    }

    public function setImportantUserTask(string $taskId): ResponseInterface
    {
        return $this->dispatch('setImportantUserTask', ['taskId' => $taskId], [], [], false, null, false, true, NULL);
    }

    public function setUnimportantUserTask(string $taskId): ResponseInterface
    {
        return $this->dispatch('setUnimportantUserTask', ['taskId' => $taskId], [], [], false, null, false, true, NULL);
    }

    public function uncompleteUserTask(string $taskId): ResponseInterface
    {
        return $this->dispatch('uncompleteUserTask', ['taskId' => $taskId], [], [], false, null, false, true, NULL);
    }

    public function updateReminderConfig(string $reminderId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\CreateTaskReminderRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('updateReminderConfig', ['reminderId' => $reminderId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function updateTask(string $taskId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\UpdateTaskRequest|null $requestBody = null): ResponseInterface
    {
        return $this->dispatch('updateTask', ['taskId' => $taskId], [], [], $requestBody !== null, $requestBody, true, true, 'application/json');
    }

}
