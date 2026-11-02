<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\ConnectorOperations;

use Symfony\Contracts\HttpClient\ResponseInterface;

/** Operation-named connector methods generated from API revision 2c19c082ed473e21. */
trait ExternalNotificationsOperations
{
    public function create(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookCreateRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('create', func_get_args());
    }

    public function delete(string $webhookId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('delete', func_get_args());
    }

    public function findConfiguration(string $entityType): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findConfiguration', func_get_args());
    }

    public function findEmail(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findEmail', func_get_args());
    }

    public function findInApp(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findInApp', func_get_args());
    }

    public function findUserConfig(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findUserConfig', func_get_args());
    }

    public function findWatchedEntities(string $eventType): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findWatchedEntities', func_get_args());
    }

    public function findWebhook(string $webhookId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('findWebhook', func_get_args());
    }

    public function get(string $webhookId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('get', func_get_args());
    }

    public function getEmailMessage(string $messageId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getEmailMessage', func_get_args());
    }

    public function getEmailMessages(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\EmailMessageSearchRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getEmailMessages', func_get_args());
    }

    public function getInAppMessage(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\InAppMessageSearchRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getInAppMessage', func_get_args());
    }

    public function getInAppUserMessage(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\InAppMessageSearchRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getInAppUserMessage', func_get_args());
    }

    public function getMessages(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookMessageSearchRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getMessages', func_get_args());
    }

    public function getUseAppsQueue(string $webhookId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('getUseAppsQueue', func_get_args());
    }

    public function markAllMessagesAsRead(): ResponseInterface
    {
        return $this->invokeGeneratedOperation('markAllMessagesAsRead', func_get_args());
    }

    public function markMessageAsRead(string $messageId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('markMessageAsRead', func_get_args());
    }

    public function markMessageAsUnread(string $messageId): ResponseInterface
    {
        return $this->invokeGeneratedOperation('markMessageAsUnread', func_get_args());
    }

    public function pingWebhook(array $queryParameters): ResponseInterface
    {
        return $this->invokeGeneratedOperation('pingWebhook', func_get_args());
    }

    public function search(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookSearchRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('search', func_get_args());
    }

    public function subscribe(string $webhookId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookEventTypeListRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('subscribe', func_get_args());
    }

    public function subscribeEmail(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\UserEventTypeListRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('subscribeEmail', func_get_args());
    }

    public function subscribeInApp(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\UserEventTypeListRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('subscribeInApp', func_get_args());
    }

    public function subscribeToEntity(string $eventType, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\EntityWatchRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('subscribeToEntity', func_get_args());
    }

    public function unsubscribe(string $webhookId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookEventTypeListRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('unsubscribe', func_get_args());
    }

    public function unsubscribeEmail(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\UserEventTypeListRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('unsubscribeEmail', func_get_args());
    }

    public function unsubscribeFromEntity(string $eventType, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\EntityWatchRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('unsubscribeFromEntity', func_get_args());
    }

    public function unsubscribeInApp(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\UserEventTypeListRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('unsubscribeInApp', func_get_args());
    }

    public function update(string $webhookId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookUpdateRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('update', func_get_args());
    }

    public function updateAppsQueue(string $webhookId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookAppsQueueUpdateRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateAppsQueue', func_get_args());
    }

    public function updateEmailFrequency(string $entityType, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\FrequencyConfigRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('updateEmailFrequency', func_get_args());
    }

    public function upsert(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\UserConfigurationRequest $requestBody): ResponseInterface
    {
        return $this->invokeGeneratedOperation('upsert', func_get_args());
    }

}
