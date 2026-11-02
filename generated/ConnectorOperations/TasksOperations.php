<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\ConnectorOperations;

use Symfony\Contracts\HttpClient\ResponseInterface;

/** Operation-named connector methods generated from API revision 2c19c082ed473e21. */
trait TasksOperations
{
    public function addTaskComment(string $taskId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\AddCommentRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addTaskComment', func_get_args());
    }

    public function addTaskCommentReply(string $taskId, string $commentId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\AddCommentReplyRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('addTaskCommentReply', func_get_args());
    }

    public function assignProducts(string $taskId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\AssignProductToTaskRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('assignProducts', func_get_args());
    }

    public function assignTask(string $taskId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\AssignTaskRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('assignTask', func_get_args());
    }

    public function completeTaskProduct(string $taskId, string $productId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('completeTaskProduct', func_get_args());
    }

    public function completeUserTask(string $taskId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('completeUserTask', func_get_args());
    }

    public function createTask(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\CreateTaskRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createTask', func_get_args());
    }

    public function createTasksReminderConfig(string $taskId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\CreateTaskReminderRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('createTasksReminderConfig', func_get_args());
    }

    public function deleteReminderConfig(string $reminderId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteReminderConfig', func_get_args());
    }

    public function deleteTaskProduct(string $taskId, string $productId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('deleteTaskProduct', func_get_args());
    }

    public function fetchTasks(string $userId, string $taskType, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('fetchTasks', func_get_args());
    }

    public function fetchTasksForUserGroup(string $userGroupId, string $taskType, array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('fetchTasksForUserGroup', func_get_args());
    }

    public function getAllUserTasks(array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getAllUserTasks', func_get_args());
    }

    public function getAssignedUserTasks(array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getAssignedUserTasks', func_get_args());
    }

    public function getReminderConfig(string $taskId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getReminderConfig', func_get_args());
    }

    public function getSingleTask(string $taskId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getSingleTask', func_get_args());
    }

    public function getUserTask(string $taskId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getUserTask', func_get_args());
    }

    public function listAllTaskComments(string $taskId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('listAllTaskComments', func_get_args());
    }

    public function listArchivedTasksV2(array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('listArchivedTasksV2', func_get_args());
    }

    public function listFolders(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('listFolders', func_get_args());
    }

    public function listTasks(array $queryParameters = []): ResponseInterface
    {
        return $this->invokeGeneratedOperation('listTasks', func_get_args());
    }

    public function presentVersion(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('presentVersion', func_get_args());
    }

    public function revokeTaskProduct(string $taskId, string $productId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('revokeTaskProduct', func_get_args());
    }

    public function setImportantUserTask(string $taskId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('setImportantUserTask', func_get_args());
    }

    public function setUnimportantUserTask(string $taskId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('setUnimportantUserTask', func_get_args());
    }

    public function uncompleteUserTask(string $taskId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('uncompleteUserTask', func_get_args());
    }

    public function updateReminderConfig(string $reminderId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\CreateTaskReminderRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateReminderConfig', func_get_args());
    }

    public function updateTask(string $taskId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model\UpdateTaskRequest|null $requestBody = null): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateTask', func_get_args());
    }

}
