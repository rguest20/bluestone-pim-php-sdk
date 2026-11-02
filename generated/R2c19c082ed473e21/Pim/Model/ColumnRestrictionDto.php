<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ColumnRestrictionDto implements AdditionalPropertiesInterface
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
     * @var ColumnRestrictionsDto|null
     */
    protected $column;
    /**
     * @return ColumnRestrictionsDto|null
     */
    public function getColumn(): ?ColumnRestrictionsDto
    {
        return $this->column;
    }
    /**
     * @param ColumnRestrictionsDto|null $column
     *
     * @return self
     */
    public function setColumn(?ColumnRestrictionsDto $column): self
    {
        $this->initialized['column'] = true;
        $this->column = $column;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['column' => ['column', 'getColumn', 'setColumn']];
    }
}