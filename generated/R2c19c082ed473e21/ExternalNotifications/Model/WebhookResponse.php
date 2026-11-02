<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalPropertiesInterface;
class WebhookResponse implements AdditionalPropertiesInterface
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
     * @var bool
     */
    protected $active;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var int
     */
    protected $retryAttempts;
    /**
     * @var string
     */
    protected $secret;
    /**
     * @var string
     */
    protected $url;
    /**
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }
    /**
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
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
     * @return int
     */
    public function getRetryAttempts(): int
    {
        return $this->retryAttempts;
    }
    /**
     * @param int $retryAttempts
     *
     * @return self
     */
    public function setRetryAttempts(int $retryAttempts): self
    {
        $this->initialized['retryAttempts'] = true;
        $this->retryAttempts = $retryAttempts;
        return $this;
    }
    /**
     * @return string
     */
    public function getSecret(): string
    {
        return $this->secret;
    }
    /**
     * @param string $secret
     *
     * @return self
     */
    public function setSecret(string $secret): self
    {
        $this->initialized['secret'] = true;
        $this->secret = $secret;
        return $this;
    }
    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['active' => ['active', 'getActive', 'setActive'], 'id' => ['id', 'getId', 'setId'], 'retryAttempts' => ['retryAttempts', 'getRetryAttempts', 'setRetryAttempts'], 'secret' => ['secret', 'getSecret', 'setSecret'], 'url' => ['url', 'getUrl', 'setUrl']];
    }
}