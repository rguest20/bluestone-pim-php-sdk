<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class QueryGroup
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
    protected $matchRule;
    /**
     * @var list<QueryGroup>
     */
    protected $children;
    /**
     * @var bool
     */
    protected $not;
    /**
     * @return string
     */
    public function getMatchRule(): string
    {
        return $this->matchRule;
    }
    /**
     * @param string $matchRule
     *
     * @return self
     */
    public function setMatchRule(string $matchRule): self
    {
        $this->initialized['matchRule'] = true;
        $this->matchRule = $matchRule;
        return $this;
    }
    /**
     * @return list<QueryGroup>
     */
    public function getChildren(): array
    {
        return $this->children;
    }
    /**
     * @param list<QueryGroup> $children
     *
     * @return self
     */
    public function setChildren(array $children): self
    {
        $this->initialized['children'] = true;
        $this->children = $children;
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
}