<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class LimitExceededDetails implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    protected $entityId;
    /**
     * @var string|null
     */
    protected $entityType;
    /**
     * @var int
     */
    protected $limit;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var string
     */
    protected $quota;
    /**
     * @return string|null
     */
    public function getEntityId(): ?string
    {
        return $this->entityId;
    }
    /**
     * @param string|null $entityId
     *
     * @return self
     */
    public function setEntityId(?string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getEntityType(): ?string
    {
        return $this->entityType;
    }
    /**
     * @param string|null $entityType
     *
     * @return self
     */
    public function setEntityType(?string $entityType): self
    {
        $this->initialized['entityType'] = true;
        $this->entityType = $entityType;
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
    public function definedProperties(): array
    {
        return ['entityId' => ['entityId', 'getEntityId', 'setEntityId'], 'entityType' => ['entityType', 'getEntityType', 'setEntityType'], 'limit' => ['limit', 'getLimit', 'setLimit'], 'message' => ['message', 'getMessage', 'setMessage'], 'quota' => ['quota', 'getQuota', 'setQuota']];
    }
}