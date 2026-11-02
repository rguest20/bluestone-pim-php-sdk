<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ProductAttributeViewDto implements AdditionalPropertiesInterface
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
     * @var array<string, MultiLanguageDto>|null
     */
    protected $column;
    /**
     * @var MultiLanguageListDto|null
     */
    protected $contextAwareDictionary;
    /**
     * @var MultiLanguageListDto|null
     */
    protected $contextAwareSelect;
    /**
     * @var bool|null
     */
    protected $copy;
    /**
     * @var bool|null
     */
    protected $definingAttributes;
    /**
     * @var string
     */
    protected $definitionId;
    /**
     * @deprecated
     *
     * @var list<string>|null
     */
    protected $dictionary;
    /**
     * @var bool|null
     */
    protected $locked;
    /**
     * @var bool|null
     */
    protected $mandatory;
    /**
     * @var array<string, array<string, MultiLanguageDto>>|null
     */
    protected $matrix;
    /**
     * @var bool|null
     */
    protected $readOnly;
    /**
     * @deprecated
     *
     * @var list<string>|null
     */
    protected $select;
    /**
     * @var MultiLanguageDto|null
     */
    protected $value;
    /**
     * @return array<string, MultiLanguageDto>|null
     */
    public function getColumn(): ?iterable
    {
        return $this->column;
    }
    /**
     * @param array<string, MultiLanguageDto>|null $column
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
     * @return MultiLanguageListDto|null
     */
    public function getContextAwareDictionary(): ?MultiLanguageListDto
    {
        return $this->contextAwareDictionary;
    }
    /**
     * @param MultiLanguageListDto|null $contextAwareDictionary
     *
     * @return self
     */
    public function setContextAwareDictionary(?MultiLanguageListDto $contextAwareDictionary): self
    {
        $this->initialized['contextAwareDictionary'] = true;
        $this->contextAwareDictionary = $contextAwareDictionary;
        return $this;
    }
    /**
     * @return MultiLanguageListDto|null
     */
    public function getContextAwareSelect(): ?MultiLanguageListDto
    {
        return $this->contextAwareSelect;
    }
    /**
     * @param MultiLanguageListDto|null $contextAwareSelect
     *
     * @return self
     */
    public function setContextAwareSelect(?MultiLanguageListDto $contextAwareSelect): self
    {
        $this->initialized['contextAwareSelect'] = true;
        $this->contextAwareSelect = $contextAwareSelect;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getCopy(): ?bool
    {
        return $this->copy;
    }
    /**
     * @param bool|null $copy
     *
     * @return self
     */
    public function setCopy(?bool $copy): self
    {
        $this->initialized['copy'] = true;
        $this->copy = $copy;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getDefiningAttributes(): ?bool
    {
        return $this->definingAttributes;
    }
    /**
     * @param bool|null $definingAttributes
     *
     * @return self
     */
    public function setDefiningAttributes(?bool $definingAttributes): self
    {
        $this->initialized['definingAttributes'] = true;
        $this->definingAttributes = $definingAttributes;
        return $this;
    }
    /**
     * @return string
     */
    public function getDefinitionId(): string
    {
        return $this->definitionId;
    }
    /**
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
     * @deprecated
     *
     * @return list<string>|null
     */
    public function getDictionary(): ?array
    {
        return $this->dictionary;
    }
    /**
     * @param list<string>|null $dictionary
     *
     * @deprecated
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
     * @return bool|null
     */
    public function getLocked(): ?bool
    {
        return $this->locked;
    }
    /**
     * @param bool|null $locked
     *
     * @return self
     */
    public function setLocked(?bool $locked): self
    {
        $this->initialized['locked'] = true;
        $this->locked = $locked;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getMandatory(): ?bool
    {
        return $this->mandatory;
    }
    /**
     * @param bool|null $mandatory
     *
     * @return self
     */
    public function setMandatory(?bool $mandatory): self
    {
        $this->initialized['mandatory'] = true;
        $this->mandatory = $mandatory;
        return $this;
    }
    /**
     * @return array<string, array<string, MultiLanguageDto>>|null
     */
    public function getMatrix(): ?iterable
    {
        return $this->matrix;
    }
    /**
     * @param array<string, array<string, MultiLanguageDto>>|null $matrix
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
     * @return bool|null
     */
    public function getReadOnly(): ?bool
    {
        return $this->readOnly;
    }
    /**
     * @param bool|null $readOnly
     *
     * @return self
     */
    public function setReadOnly(?bool $readOnly): self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     * @deprecated
     *
     * @return list<string>|null
     */
    public function getSelect(): ?array
    {
        return $this->select;
    }
    /**
     * @param list<string>|null $select
     *
     * @deprecated
     *
     * @return self
     */
    public function setSelect(?array $select): self
    {
        $this->initialized['select'] = true;
        $this->select = $select;
        return $this;
    }
    /**
     * @return MultiLanguageDto|null
     */
    public function getValue(): ?MultiLanguageDto
    {
        return $this->value;
    }
    /**
     * @param MultiLanguageDto|null $value
     *
     * @return self
     */
    public function setValue(?MultiLanguageDto $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['column' => ['column', 'getColumn', 'setColumn'], 'contextAwareDictionary' => ['contextAwareDictionary', 'getContextAwareDictionary', 'setContextAwareDictionary'], 'contextAwareSelect' => ['contextAwareSelect', 'getContextAwareSelect', 'setContextAwareSelect'], 'copy' => ['copy', 'getCopy', 'setCopy'], 'definingAttributes' => ['definingAttributes', 'getDefiningAttributes', 'setDefiningAttributes'], 'definitionId' => ['definitionId', 'getDefinitionId', 'setDefinitionId'], 'dictionary' => ['dictionary', 'getDictionary', 'setDictionary'], 'locked' => ['locked', 'getLocked', 'setLocked'], 'mandatory' => ['mandatory', 'getMandatory', 'setMandatory'], 'matrix' => ['matrix', 'getMatrix', 'setMatrix'], 'readOnly' => ['readOnly', 'getReadOnly', 'setReadOnly'], 'select' => ['select', 'getSelect', 'setSelect'], 'value' => ['value', 'getValue', 'setValue']];
    }
}