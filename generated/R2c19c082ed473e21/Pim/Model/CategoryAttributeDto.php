<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class CategoryAttributeDto implements AdditionalPropertiesInterface
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
     * Values for column attributes associated with the category.
     *
     * @var array<string, string>|null
     */
    protected $column;
    /**
     * ID of the attribute definition associated with the attribute value.
     *
     * @var string
     */
    protected $definitionId;
    /**
     * Values for dictionary attributes associated with the category.
     *
     * @var list<string>|null
     */
    protected $dictionary;
    /**
     * Flag indicating whether the attribute is a copy from another attribute.
     *
     * @var bool|null
     */
    protected $isCopyAttribute;
    /**
     * Flag indicating whether the attribute is locked.
     *
     * @var bool|null
     */
    protected $isLocked;
    /**
     * Flag indicating whether the attribute is mandatory.
     *
     * @var bool|null
     */
    protected $isMandatory;
    /**
     * Values for matrix attributes associated with the category.
     *
     * @var array<string, array<string, string>>|null
     */
    protected $matrix;
    /**
     * Values for select attributes associated with the category.
     *
     * @var array<string, list<string>>|null
     */
    protected $select;
    /**
     * Value of the attribute associated with the category.
     *
     * @var string|null
     */
    protected $value;
    /**
     * Values for column attributes associated with the category.
     *
     * @return array<string, string>|null
     */
    public function getColumn(): ?iterable
    {
        return $this->column;
    }
    /**
     * Values for column attributes associated with the category.
     *
     * @param array<string, string>|null $column
     *
     * @return self
     */
    public function setColumn(?iterable $column): self
    {
        $this->initialized['column'] = true;
        $this->column = $column;
        return $this;
    }
    /**
     * ID of the attribute definition associated with the attribute value.
     *
     * @return string
     */
    public function getDefinitionId(): string
    {
        return $this->definitionId;
    }
    /**
     * ID of the attribute definition associated with the attribute value.
     *
     * @param string $definitionId
     *
     * @return self
     */
    public function setDefinitionId(string $definitionId): self
    {
        $this->initialized['definitionId'] = true;
        $this->definitionId = $definitionId;
        return $this;
    }
    /**
     * Values for dictionary attributes associated with the category.
     *
     * @return list<string>|null
     */
    public function getDictionary(): ?array
    {
        return $this->dictionary;
    }
    /**
     * Values for dictionary attributes associated with the category.
     *
     * @param list<string>|null $dictionary
     *
     * @return self
     */
    public function setDictionary(?array $dictionary): self
    {
        $this->initialized['dictionary'] = true;
        $this->dictionary = $dictionary;
        return $this;
    }
    /**
     * Flag indicating whether the attribute is a copy from another attribute.
     *
     * @return bool|null
     */
    public function getIsCopyAttribute(): ?bool
    {
        return $this->isCopyAttribute;
    }
    /**
     * Flag indicating whether the attribute is a copy from another attribute.
     *
     * @param bool|null $isCopyAttribute
     *
     * @return self
     */
    public function setIsCopyAttribute(?bool $isCopyAttribute): self
    {
        $this->initialized['isCopyAttribute'] = true;
        $this->isCopyAttribute = $isCopyAttribute;
        return $this;
    }
    /**
     * Flag indicating whether the attribute is locked.
     *
     * @return bool|null
     */
    public function getIsLocked(): ?bool
    {
        return $this->isLocked;
    }
    /**
     * Flag indicating whether the attribute is locked.
     *
     * @param bool|null $isLocked
     *
     * @return self
     */
    public function setIsLocked(?bool $isLocked): self
    {
        $this->initialized['isLocked'] = true;
        $this->isLocked = $isLocked;
        return $this;
    }
    /**
     * Flag indicating whether the attribute is mandatory.
     *
     * @return bool|null
     */
    public function getIsMandatory(): ?bool
    {
        return $this->isMandatory;
    }
    /**
     * Flag indicating whether the attribute is mandatory.
     *
     * @param bool|null $isMandatory
     *
     * @return self
     */
    public function setIsMandatory(?bool $isMandatory): self
    {
        $this->initialized['isMandatory'] = true;
        $this->isMandatory = $isMandatory;
        return $this;
    }
    /**
     * Values for matrix attributes associated with the category.
     *
     * @return array<string, array<string, string>>|null
     */
    public function getMatrix(): ?iterable
    {
        return $this->matrix;
    }
    /**
     * Values for matrix attributes associated with the category.
     *
     * @param array<string, array<string, string>>|null $matrix
     *
     * @return self
     */
    public function setMatrix(?iterable $matrix): self
    {
        $this->initialized['matrix'] = true;
        $this->matrix = $matrix;
        return $this;
    }
    /**
     * Values for select attributes associated with the category.
     *
     * @return array<string, list<string>>|null
     */
    public function getSelect(): ?iterable
    {
        return $this->select;
    }
    /**
     * Values for select attributes associated with the category.
     *
     * @param array<string, list<string>>|null $select
     *
     * @return self
     */
    public function setSelect(?iterable $select): self
    {
        $this->initialized['select'] = true;
        $this->select = $select;
        return $this;
    }
    /**
     * Value of the attribute associated with the category.
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Value of the attribute associated with the category.
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['column' => ['column', 'getColumn', 'setColumn'], 'definitionId' => ['definitionId', 'getDefinitionId', 'setDefinitionId'], 'dictionary' => ['dictionary', 'getDictionary', 'setDictionary'], 'isCopyAttribute' => ['isCopyAttribute', 'getIsCopyAttribute', 'setIsCopyAttribute'], 'isLocked' => ['isLocked', 'getIsLocked', 'setIsLocked'], 'isMandatory' => ['isMandatory', 'getIsMandatory', 'setIsMandatory'], 'matrix' => ['matrix', 'getMatrix', 'setMatrix'], 'select' => ['select', 'getSelect', 'setSelect'], 'value' => ['value', 'getValue', 'setValue']];
    }
}