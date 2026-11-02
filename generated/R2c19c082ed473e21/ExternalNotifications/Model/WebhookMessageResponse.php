<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalPropertiesInterface;
class WebhookMessageResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<WebhookCall>
     */
    protected $calls;
    /**
     * @var string
     */
    protected $content;
    /**
     * @var int
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $eventType;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $webhookId;
    /**
     * @return list<WebhookCall>
     */
    public function getCalls(): array
    {
        return $this->calls;
    }
    /**
     * @param list<WebhookCall> $calls
     *
     * @return self
     */
    public function setCalls(array $calls): self
    {
        $this->initialized['calls'] = true;
        $this->calls = $calls;
        return $this;
    }
    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    /**
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
    /**
     * @return int
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }
    /**
     * @param int $createdAt
     *
     * @return self
     */
    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getEventType(): string
    {
        return $this->eventType;
    }
    /**
     * @param string $eventType
     *
     * @return self
     */
    public function setEventType(string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;
        return $this;
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * @return string
     */
    public function getWebhookId(): string
    {
        return $this->webhookId;
    }
    /**
     * @param string $webhookId
     *
     * @return self
     */
    public function setWebhookId(string $webhookId): self
    {
        $this->initialized['webhookId'] = true;
        $this->webhookId = $webhookId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['calls' => ['calls', 'getCalls', 'setCalls'], 'content' => ['content', 'getContent', 'setContent'], 'createdAt' => ['createdAt', 'getCreatedAt', 'setCreatedAt'], 'eventType' => ['eventType', 'getEventType', 'setEventType'], 'id' => ['id', 'getId', 'setId'], 'status' => ['status', 'getStatus', 'setStatus'], 'webhookId' => ['webhookId', 'getWebhookId', 'setWebhookId']];
    }
}