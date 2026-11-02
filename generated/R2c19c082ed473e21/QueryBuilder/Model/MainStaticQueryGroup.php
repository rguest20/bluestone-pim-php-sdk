<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class MainStaticQueryGroup
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
     * @var list<StaticQueryGroup>
     */
    protected $children;
    /**
     * @var bool
     */
    protected $not;
    /**
     * The context fallback functionality is true by default and can be disabled using this parameter.
     *
     * @var bool
     */
    protected $contextFallback;
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
     * @return list<StaticQueryGroup>
     */
    public function getChildren(): array
    {
        return $this->children;
    }
    /**
     * @param list<StaticQueryGroup> $children
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
    /**
     * The context fallback functionality is true by default and can be disabled using this parameter.
     *
     * @return bool
     */
    public function getContextFallback(): bool
    {
        return $this->contextFallback;
    }
    /**
     * The context fallback functionality is true by default and can be disabled using this parameter.
     *
     * @param bool $contextFallback
     *
     * @return self
     */
    public function setContextFallback(bool $contextFallback): self
    {
        $this->initialized['contextFallback'] = true;
        $this->contextFallback = $contextFallback;
        return $this;
    }
}