<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model;

class SegmentContextRequest
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
     * Context id, or 'en' if id is not specified.
     *
     * @var string
     */
    protected $context;
    /**
     * Context name, or 'default' if name is not specified.
     *
     * @var string
     */
    protected $contextName;
    /**
     * Papi-Sync session ID.
     *
     * @var string
     */
    protected $syncSessionId;
    /**
     * Context id, or 'en' if id is not specified.
     *
     * @return string
     */
    public function getContext(): string
    {
        return $this->context;
    }
    /**
     * Context id, or 'en' if id is not specified.
     *
     * @param string $context
     *
     * @return self
     */
    public function setContext(string $context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;
        return $this;
    }
    /**
     * Context name, or 'default' if name is not specified.
     *
     * @return string
     */
    public function getContextName(): string
    {
        return $this->contextName;
    }
    /**
     * Context name, or 'default' if name is not specified.
     *
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
    /**
     * Papi-Sync session ID.
     *
     * @return string
     */
    public function getSyncSessionId(): string
    {
        return $this->syncSessionId;
    }
    /**
     * Papi-Sync session ID.
     *
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
}