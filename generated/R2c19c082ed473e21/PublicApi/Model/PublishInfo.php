<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model;

class PublishInfo
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * mongo identifier of the collection.
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var float
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $syncSessionId;
    /**
     * @var float
     */
    protected $disposedAt;
    /**
     * @var float
     */
    protected $cleanedAt;
    /**
     * @var string
     */
    protected $contextId;
    /**
     * @var string
     */
    protected $contextName;
    /**
     * mongo identifier of the collection.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * mongo identifier of the collection.
     *
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
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * @return float
     */
    public function getCreatedAt(): float
    {
        return $this->createdAt;
    }
    /**
     * @param float $createdAt
     *
     * @return self
     */
    public function setCreatedAt(float $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getSyncSessionId(): string
    {
        return $this->syncSessionId;
    }
    /**
     * @param string $syncSessionId
     *
     * @return self
     */
    public function setSyncSessionId(string $syncSessionId): self
    {
        $this->initialized['syncSessionId'] = true;
        $this->syncSessionId = $syncSessionId;
        return $this;
    }
    /**
     * @return float
     */
    public function getDisposedAt(): float
    {
        return $this->disposedAt;
    }
    /**
     * @param float $disposedAt
     *
     * @return self
     */
    public function setDisposedAt(float $disposedAt): self
    {
        $this->initialized['disposedAt'] = true;
        $this->disposedAt = $disposedAt;
        return $this;
    }
    /**
     * @return float
     */
    public function getCleanedAt(): float
    {
        return $this->cleanedAt;
    }
    /**
     * @param float $cleanedAt
     *
     * @return self
     */
    public function setCleanedAt(float $cleanedAt): self
    {
        $this->initialized['cleanedAt'] = true;
        $this->cleanedAt = $cleanedAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getContextId(): string
    {
        return $this->contextId;
    }
    /**
     * @param string $contextId
     *
     * @return self
     */
    public function setContextId(string $contextId): self
    {
        $this->initialized['contextId'] = true;
        $this->contextId = $contextId;
        return $this;
    }
    /**
     * @return string
     */
    public function getContextName(): string
    {
        return $this->contextName;
    }
    /**
     * @param string $contextName
     *
     * @return self
     */
    public function setContextName(string $contextName): self
    {
        $this->initialized['contextName'] = true;
        $this->contextName = $contextName;
        return $this;
    }
}