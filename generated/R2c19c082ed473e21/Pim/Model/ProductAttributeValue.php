<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ProductAttributeValue implements AdditionalPropertiesInterface
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
     * @var array<string, string>|null
     */
    protected $column;
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
     * @var array<string, array<string, string>>|null
     */
    protected $matrix;
    /**
     * @var list<string>|null
     */
    protected $values;
    /**
     * @return array<string, string>|null
     */
    public function getColumn(): ?iterable
    {
        return $this->column;
    }
    /**
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
     * @return list<string>|null
     */
    public function getDictionary(): ?array
    {
        return $this->dictionary;
    }
    /**
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
     * @return array<string, array<string, string>>|null
     */
    public function getMatrix(): ?iterable
    {
        return $this->matrix;
    }
    /**
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
     * @return list<string>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }
    /**
     * @param list<string>|null $values
     *
     * @return self
     */
    public function setValues(?array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['column' => ['column', 'getColumn', 'setColumn'], 'copy' => ['copy', 'getCopy', 'setCopy'], 'definingAttributes' => ['definingAttributes', 'getDefiningAttributes', 'setDefiningAttributes'], 'definitionId' => ['definitionId', 'getDefinitionId', 'setDefinitionId'], 'dictionary' => ['dictionary', 'getDictionary', 'setDictionary'], 'locked' => ['locked', 'getLocked', 'setLocked'], 'mandatory' => ['mandatory', 'getMandatory', 'setMandatory'], 'matrix' => ['matrix', 'getMatrix', 'setMatrix'], 'values' => ['values', 'getValues', 'setValues']];
    }
}