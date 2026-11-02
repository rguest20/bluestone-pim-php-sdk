<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class LastSyncStateFilter
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
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $lastSyncState;
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return string
     */
    public function getLastSyncState(): string
    {
        return $this->lastSyncState;
    }
    /**
     * @param string $lastSyncState
     *
     * @return self
     */
    public function setLastSyncState(string $lastSyncState): self
    {
        $this->initialized['lastSyncState'] = true;
        $this->lastSyncState = $lastSyncState;
        return $this;
    }
}