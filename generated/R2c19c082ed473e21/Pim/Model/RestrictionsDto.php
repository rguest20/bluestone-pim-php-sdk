<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class RestrictionsDto implements AdditionalPropertiesInterface
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
     * @var SelectRestrictionsDto|null
     */
    protected $enum;
    /**
     * @var MatrixRestrictionsDto|null
     */
    protected $matrix;
    /**
     * @var RangeRestrictionsDto|null
     */
    protected $range;
    /**
     * @var TextRestrictionsDto|null
     */
    protected $text;
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
    /**
     * @return SelectRestrictionsDto|null
     */
    public function getEnum(): ?SelectRestrictionsDto
    {
        return $this->enum;
    }
    /**
     * @param SelectRestrictionsDto|null $enum
     *
     * @return self
     */
    public function setEnum(?SelectRestrictionsDto $enum): self
    {
        $this->initialized['enum'] = true;
        $this->enum = $enum;
        return $this;
    }
    /**
     * @return MatrixRestrictionsDto|null
     */
    public function getMatrix(): ?MatrixRestrictionsDto
    {
        return $this->matrix;
    }
    /**
     * @param MatrixRestrictionsDto|null $matrix
     *
     * @return self
     */
    public function setMatrix(?MatrixRestrictionsDto $matrix): self
    {
        $this->initialized['matrix'] = true;
        $this->matrix = $matrix;
        return $this;
    }
    /**
     * @return RangeRestrictionsDto|null
     */
    public function getRange(): ?RangeRestrictionsDto
    {
        return $this->range;
    }
    /**
     * @param RangeRestrictionsDto|null $range
     *
     * @return self
     */
    public function setRange(?RangeRestrictionsDto $range): self
    {
        $this->initialized['range'] = true;
        $this->range = $range;
        return $this;
    }
    /**
     * @return TextRestrictionsDto|null
     */
    public function getText(): ?TextRestrictionsDto
    {
        return $this->text;
    }
    /**
     * @param TextRestrictionsDto|null $text
     *
     * @return self
     */
    public function setText(?TextRestrictionsDto $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['column' => ['column', 'getColumn', 'setColumn'], 'enum' => ['enum', 'getEnum', 'setEnum'], 'matrix' => ['matrix', 'getMatrix', 'setMatrix'], 'range' => ['range', 'getRange', 'setRange'], 'text' => ['text', 'getText', 'setText']];
    }
}