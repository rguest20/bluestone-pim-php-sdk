<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model;

class FilterResultAttribute
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
     * @var string
     */
    protected $attributeId;
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
    /**
     * @return string
     */
    public function getAttributeId(): string
    {
        return $this->attributeId;
    }
    /**
     * @param string $attributeId
     *
     * @return self
     */
    public function setAttributeId(string $attributeId): self
    {
        $this->initialized['attributeId'] = true;
        $this->attributeId = $attributeId;
        return $this;
    }
}