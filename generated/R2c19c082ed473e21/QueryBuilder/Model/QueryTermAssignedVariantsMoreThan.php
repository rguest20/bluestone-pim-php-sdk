<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class QueryTermAssignedVariantsMoreThan
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
    protected $filterType;
    /**
     * @var float
     */
    protected $value;
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
    public function getFilterType(): string
    {
        return $this->filterType;
    }
    /**
     * @param string $filterType
     *
     * @return self
     */
    public function setFilterType(string $filterType): self
    {
        $this->initialized['filterType'] = true;
        $this->filterType = $filterType;
        return $this;
    }
    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}