<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class SortingAttribute
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
    protected $direction;
    /**
     * @var string
     */
    protected $termType;
    /**
     * @var string
     */
    protected $context;
    /**
     * @var string
     */
    protected $attributeType;
    /**
     * @var string
     */
    protected $attributeId;
    /**
     * @return string
     */
    public function getDirection(): string
    {
        return $this->direction;
    }
    /**
     * @param string $direction
     *
     * @return self
     */
    public function setDirection(string $direction): self
    {
        $this->initialized['direction'] = true;
        $this->direction = $direction;
        return $this;
    }
    /**
     * @return string
     */
    public function getTermType(): string
    {
        return $this->termType;
    }
    /**
     * @param string $termType
     *
     * @return self
     */
    public function setTermType(string $termType): self
    {
        $this->initialized['termType'] = true;
        $this->termType = $termType;
        return $this;
    }
    /**
     * @return string
     */
    public function getContext(): string
    {
        return $this->context;
    }
    /**
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
     * @return string
     */
    public function getAttributeType(): string
    {
        return $this->attributeType;
    }
    /**
     * @param string $attributeType
     *
     * @return self
     */
    public function setAttributeType(string $attributeType): self
    {
        $this->initialized['attributeType'] = true;
        $this->attributeType = $attributeType;
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