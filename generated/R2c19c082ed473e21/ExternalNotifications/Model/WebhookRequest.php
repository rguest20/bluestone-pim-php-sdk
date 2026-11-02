<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalPropertiesInterface;
class WebhookRequest implements AdditionalPropertiesInterface
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
     * @var list<string>
     */
    protected $headers;
    /**
     * @var string
     */
    protected $httpMethod;
    /**
     * @var string
     */
    protected $payload;
    /**
     * @var string
     */
    protected $url;
    /**
     * @return list<string>
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }
    /**
     * @param list<string> $headers
     *
     * @return self
     */
    public function setHeaders(array $headers): self
    {
        $this->initialized['headers'] = true;
        $this->headers = $headers;
        return $this;
    }
    /**
     * @return string
     */
    public function getHttpMethod(): string
    {
        return $this->httpMethod;
    }
    /**
     * @param string $httpMethod
     *
     * @return self
     */
    public function setHttpMethod(string $httpMethod): self
    {
        $this->initialized['httpMethod'] = true;
        $this->httpMethod = $httpMethod;
        return $this;
    }
    /**
     * @return string
     */
    public function getPayload(): string
    {
        return $this->payload;
    }
    /**
     * @param string $payload
     *
     * @return self
     */
    public function setPayload(string $payload): self
    {
        $this->initialized['payload'] = true;
        $this->payload = $payload;
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
        return ['headers' => ['headers', 'getHeaders', 'setHeaders'], 'httpMethod' => ['httpMethod', 'getHttpMethod', 'setHttpMethod'], 'payload' => ['payload', 'getPayload', 'setPayload'], 'url' => ['url', 'getUrl', 'setUrl']];
    }
}