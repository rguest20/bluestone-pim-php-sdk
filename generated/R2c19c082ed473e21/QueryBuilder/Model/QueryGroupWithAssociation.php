<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\AdditionalPropertiesInterface;
class QueryGroupWithAssociation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
     * @var string
     */
    protected $association;
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
    /**
     * @return string
     */
    public function getAssociation(): string
    {
        return $this->association;
    }
    /**
     * @param string $association
     *
     * @return self
     */
    public function setAssociation(string $association): self
    {
        $this->initialized['association'] = true;
        $this->association = $association;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['matchRule' => ['matchRule', 'getMatchRule', 'setMatchRule'], 'children' => ['children', 'getChildren', 'setChildren'], 'not' => ['not', 'getNot', 'setNot'], 'association' => ['association', 'getAssociation', 'setAssociation']];
    }
}