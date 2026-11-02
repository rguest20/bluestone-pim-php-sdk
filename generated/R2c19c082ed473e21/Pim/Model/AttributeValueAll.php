<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class AttributeValueAll implements AdditionalPropertiesInterface
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
     * Values for column attributes associated with the product.
     *
     * @var array<string, string>|null
     */
    protected $column;
    /**
     * ID of the attribute definition for the given value.
     *
     * @var string
     */
    protected $definitionId;
    /**
     * Values for dictionary attributes associated with the product.
     *
     * @var list<string>|null
     */
    protected $dictionary;
    /**
     * Values for matrix attributes associated with the product.
     *
     * @var array<string, array<string, string>>|null
     */
    protected $matrix;
    /**
     * Set of attribute values associated with the product.
     * 
     * **Note**: For a simple attribute type like `text` that only have one value, only the first string in the list will be used for the value.
     *
     * @var list<string>|null
     */
    protected $values;
    /**
     * Values for column attributes associated with the product.
     *
     * @return array<string, string>|null
     */
    public function getColumn(): ?iterable
    {
        return $this->column;
    }
    /**
     * Values for column attributes associated with the product.
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
     * ID of the attribute definition for the given value.
     *
     * @return string
     */
    public function getDefinitionId(): string
    {
        return $this->definitionId;
    }
    /**
     * ID of the attribute definition for the given value.
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
     * Values for dictionary attributes associated with the product.
     *
     * @return list<string>|null
     */
    public function getDictionary(): ?array
    {
        return $this->dictionary;
    }
    /**
     * Values for dictionary attributes associated with the product.
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
     * Values for matrix attributes associated with the product.
     *
     * @return array<string, array<string, string>>|null
     */
    public function getMatrix(): ?iterable
    {
        return $this->matrix;
    }
    /**
     * Values for matrix attributes associated with the product.
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
     * Set of attribute values associated with the product.
     * 
     * **Note**: For a simple attribute type like `text` that only have one value, only the first string in the list will be used for the value.
     *
     * @return list<string>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }
    /**
     * Set of attribute values associated with the product.
     **Note**: For a simple attribute type like `text` that only have one value, only the first string in the list will be used for the value.
     *
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
        return ['column' => ['column', 'getColumn', 'setColumn'], 'definitionId' => ['definitionId', 'getDefinitionId', 'setDefinitionId'], 'dictionary' => ['dictionary', 'getDictionary', 'setDictionary'], 'matrix' => ['matrix', 'getMatrix', 'setMatrix'], 'values' => ['values', 'getValues', 'setValues']];
    }
}