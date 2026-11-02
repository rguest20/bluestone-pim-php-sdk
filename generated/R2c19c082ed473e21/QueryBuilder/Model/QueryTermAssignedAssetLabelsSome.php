<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class QueryTermAssignedAssetLabelsSome
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
     * @var list<string>
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
     * @return list<string>
     */
    public function getValue(): array
    {
        return $this->value;
    }
    /**
     * @param list<string> $value
     *
     * @return self
     */
    public function setValue(array $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}