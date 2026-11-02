<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalPropertiesInterface;
class WebhookCall implements AdditionalPropertiesInterface
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
     * @var WebhookRequest
     */
    protected $request;
    /**
     * @var WebhookResponse
     */
    protected $response;
    /**
     * @var int
     */
    protected $timestamp;
    /**
     * @return WebhookRequest
     */
    public function getRequest(): WebhookRequest
    {
        return $this->request;
    }
    /**
     * @param WebhookRequest $request
     *
     * @return self
     */
    public function setRequest(WebhookRequest $request): self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * @return WebhookResponse
     */
    public function getResponse(): WebhookResponse
    {
        return $this->response;
    }
    /**
     * @param WebhookResponse $response
     *
     * @return self
     */
    public function setResponse(WebhookResponse $response): self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }
    /**
     * @param int $timestamp
     *
     * @return self
     */
    public function setTimestamp(int $timestamp): self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['request' => ['request', 'getRequest', 'setRequest'], 'response' => ['response', 'getResponse', 'setResponse'], 'timestamp' => ['timestamp', 'getTimestamp', 'setTimestamp']];
    }
}