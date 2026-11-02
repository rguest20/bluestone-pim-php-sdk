<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class OutOfSyncFilter
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
     * @var bool
     */
    protected $outOfSync;
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
     * @return bool
     */
    public function getOutOfSync(): bool
    {
        return $this->outOfSync;
    }
    /**
     * @param bool $outOfSync
     *
     * @return self
     */
    public function setOutOfSync(bool $outOfSync): self
    {
        $this->initialized['outOfSync'] = true;
        $this->outOfSync = $outOfSync;
        return $this;
    }
}