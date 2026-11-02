<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class QueryTermAttributeIntegerNonValue
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
    protected $termType;
    /**
     * @var bool
     */
    protected $not;
    /**
     * @var string
     */
    protected $context;
    /**
     * @var string
     */
    protected $attributeId;
    /**
     * @var string
     */
    protected $attributeType;
    /**
     * @var string
     */
    protected $filterType;
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
     * @return bool
     */
    public function getNot(): bool
    {
        return $this->not;
    }
    /**
     * @param bool $not
     *
     * @return self
     */
    public function setNot(bool $not): self
    {
        $this->initialized['not'] = true;
        $this->not = $not;
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
    public function getFilterType()
    {
        return $this->filterType;
    }
    /**
     * @param string $filterType
     *
     * @return self
     */
    public function setFilterType($filterType): self
    {
        $this->initialized['filterType'] = true;
        $this->filterType = $filterType;
        return $this;
    }
}