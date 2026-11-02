<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model;

class CompoundAttributeSubDefinition
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
    protected $id;
    /**
     * @var bool
     */
    protected $isCompound;
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
     * @return bool
     */
    public function getIsCompound(): bool
    {
        return $this->isCompound;
    }
    /**
     * @param bool $isCompound
     *
     * @return self
     */
    public function setIsCompound(bool $isCompound): self
    {
        $this->initialized['isCompound'] = true;
        $this->isCompound = $isCompound;
        return $this;
    }
}