<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class RequirementListRequestSort implements AdditionalPropertiesInterface
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
    protected $sortDirection;
    /**
     * @var string
     */
    protected $sortField;
    /**
     * @return string
     */
    public function getSortDirection(): string
    {
        return $this->sortDirection;
    }
    /**
     * @param string $sortDirection
     *
     * @return self
     */
    public function setSortDirection(string $sortDirection): self
    {
        $this->initialized['sortDirection'] = true;
        $this->sortDirection = $sortDirection;
        return $this;
    }
    /**
     * @return string
     */
    public function getSortField(): string
    {
        return $this->sortField;
    }
    /**
     * @param string $sortField
     *
     * @return self
     */
    public function setSortField(string $sortField): self
    {
        $this->initialized['sortField'] = true;
        $this->sortField = $sortField;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['sortDirection' => ['sortDirection', 'getSortDirection', 'setSortDirection'], 'sortField' => ['sortField', 'getSortField', 'setSortField']];
    }
}