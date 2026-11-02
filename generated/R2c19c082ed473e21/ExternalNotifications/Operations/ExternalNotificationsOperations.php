<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Operations;

use Youwe\BluestonePim\Api\GeneratedOperationAdapter;
use Symfony\Contracts\HttpClient\ResponseInterface;

/** Named request facade for external-notifications operations in OpenAPI revision 2c19c082ed473e21. */
final class ExternalNotificationsOperations extends GeneratedOperationAdapter
{
    public function create(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookCreateRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('create', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function delete(string $webhookId): ResponseInterface
    {
        return $this->dispatch('delete', ['webhookId' => $webhookId], [], [], false, null, false, true, NULL);
    }

    public function findConfiguration(string $entityType): ResponseInterface
    {
        return $this->dispatch('findConfiguration', ['entityType' => $entityType], [], [], false, null, false, true, NULL);
    }

    public function findEmail(): ResponseInterface
    {
        return $this->dispatch('findEmail', [], [], [], false, null, false, true, NULL);
    }

    public function findInApp(): ResponseInterface
    {
        return $this->dispatch('findInApp', [], [], [], false, null, false, true, NULL);
    }

    public function findUserConfig(): ResponseInterface
    {
        return $this->dispatch('findUserConfig', [], [], [], false, null, false, true, NULL);
    }

    public function findWatchedEntities(string $eventType): ResponseInterface
    {
        return $this->dispatch('findWatchedEntities', ['eventType' => $eventType], [], [], false, null, false, true, NULL);
    }

    public function findWebhook(string $webhookId): ResponseInterface
    {
        return $this->dispatch('findWebhook', ['webhookId' => $webhookId], [], [], false, null, false, true, NULL);
    }

    public function get(string $webhookId): ResponseInterface
    {
        return $this->dispatch('get', ['webhookId' => $webhookId], [], [], false, null, false, true, NULL);
    }

    public function getEmailMessage(string $messageId): ResponseInterface
    {
        return $this->dispatch('getEmailMessage', ['messageId' => $messageId], [], [], false, null, false, true, NULL);
    }

    public function getEmailMessages(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\EmailMessageSearchRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('getEmailMessages', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function getInAppMessage(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\InAppMessageSearchRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('getInAppMessage', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function getInAppUserMessage(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\InAppMessageSearchRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('getInAppUserMessage', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function getMessages(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookMessageSearchRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('getMessages', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function getUseAppsQueue(string $webhookId): ResponseInterface
    {
        return $this->dispatch('getUseAppsQueue', ['webhookId' => $webhookId], [], [], false, null, false, true, NULL);
    }

    public function markAllMessagesAsRead(): ResponseInterface
    {
        return $this->dispatch('markAllMessagesAsRead', [], [], [], false, null, false, true, NULL);
    }

    public function markMessageAsRead(string $messageId): ResponseInterface
    {
        return $this->dispatch('markMessageAsRead', ['messageId' => $messageId], [], [], false, null, false, true, NULL);
    }

    public function markMessageAsUnread(string $messageId): ResponseInterface
    {
        return $this->dispatch('markMessageAsUnread', ['messageId' => $messageId], [], [], false, null, false, true, NULL);
    }

    public function pingWebhook(array $queryParameters): ResponseInterface
    {
        return $this->dispatch('pingWebhook', [], $queryParameters, [], false, null, false, true, NULL);
    }

    public function search(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookSearchRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('search', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function subscribe(string $webhookId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookEventTypeListRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('subscribe', ['webhookId' => $webhookId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function subscribeEmail(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\UserEventTypeListRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('subscribeEmail', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function subscribeInApp(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\UserEventTypeListRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('subscribeInApp', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function subscribeToEntity(string $eventType, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\EntityWatchRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('subscribeToEntity', ['eventType' => $eventType], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function unsubscribe(string $webhookId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookEventTypeListRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('unsubscribe', ['webhookId' => $webhookId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function unsubscribeEmail(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\UserEventTypeListRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('unsubscribeEmail', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function unsubscribeFromEntity(string $eventType, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\EntityWatchRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('unsubscribeFromEntity', ['eventType' => $eventType], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function unsubscribeInApp(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\UserEventTypeListRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('unsubscribeInApp', [], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function update(string $webhookId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookUpdateRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('update', ['webhookId' => $webhookId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function updateAppsQueue(string $webhookId, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\WebhookAppsQueueUpdateRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('updateAppsQueue', ['webhookId' => $webhookId], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function updateEmailFrequency(string $entityType, \Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\FrequencyConfigRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('updateEmailFrequency', ['entityType' => $entityType], [], [], true, $requestBody, true, true, 'application/json');
    }

    public function upsert(\Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model\UserConfigurationRequest $requestBody): ResponseInterface
    {
        return $this->dispatch('upsert', [], [], [], true, $requestBody, true, true, 'application/json');
    }

}
