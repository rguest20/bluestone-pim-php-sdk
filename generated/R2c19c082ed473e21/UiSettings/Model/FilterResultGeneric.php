<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model;

class FilterResultGeneric
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
    protected $isAdvanced;
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsAdvanced(): bool
    {
        return $this->isAdvanced;
    }
    /**
     * @param bool $isAdvanced
     *
     * @return self
     */
    public function setIsAdvanced(bool $isAdvanced): self
    {
        $this->initialized['isAdvanced'] = true;
        $this->isAdvanced = $isAdvanced;
        return $this;
    }
}