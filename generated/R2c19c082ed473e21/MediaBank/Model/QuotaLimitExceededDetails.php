<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class QuotaLimitExceededDetails implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $quota;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var int
     */
    protected $limit;
    /**
     * @return string
     */
    public function getQuota(): string
    {
        return $this->quota;
    }
    /**
     * @param string $quota
     *
     * @return self
     */
    public function setQuota(string $quota): self
    {
        $this->initialized['quota'] = true;
        $this->quota = $quota;
        return $this;
    }
    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }
    /**
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['quota' => ['quota', 'getQuota', 'setQuota'], 'message' => ['message', 'getMessage', 'setMessage'], 'limit' => ['limit', 'getLimit', 'setLimit']];
    }
}