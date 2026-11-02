<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class CategoryAttributeBaseMetadataResponse implements AdditionalPropertiesInterface
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
     * ID of the attribute definition associated with the attribute value.
     *
     * @var string
     */
    protected $attributeDefinitionId;
    /**
     * Value of the attribute associated with the category.
     * 
     *  **Note**: This field is used for simple attribute types like `text`, `date`, `integer`, `decimal`, `boolean`, `single-select` and `multi-select`.
     * 
     *  **Examples:**
     *  ```
     *  "attributeValue": ""
     *  "attributeValue": "Some text"
     *  "attributeValue": "2025-04-25"
     *  "attributeValue": "true"
     *  "attributeValue": "653fcdb609bb847693ae69dd"
     *  "attributeValue": "6512cb9679d0233a632627d6,6512cb9679d0233a632627d5"
     * ```
     *
     * @var string|null
     */
    protected $attributeValue;
    /**
     * ID of the category associated with the attribute value.
     *
     * @var string
     */
    protected $categoryId;
    /**
     * Values for column attributes associated with the category.
     *
     * @var array<string, string>|null
     */
    protected $column;
    /**
     * Values for dictionary attributes associated with the category.
     *
     * @var list<string>|null
     */
    protected $dictionary;
    /**
     * Values for matrix attributes associated with the category.
     *
     * @var array<string, array<string, string>>|null
     */
    protected $matrix;
    /**
     * ID of the attribute definition associated with the attribute value.
     *
     * @return string
     */
    public function getAttributeDefinitionId(): string
    {
        return $this->attributeDefinitionId;
    }
    /**
     * ID of the attribute definition associated with the attribute value.
     *
     * @param string $attributeDefinitionId
     *
     * @return self
     */
    public function setAttributeDefinitionId(string $attributeDefinitionId): self
    {
        $this->initialized['attributeDefinitionId'] = true;
        $this->attributeDefinitionId = $attributeDefinitionId;
        return $this;
    }
    /**
     * Value of the attribute associated with the category.
     * 
     *  **Note**: This field is used for simple attribute types like `text`, `date`, `integer`, `decimal`, `boolean`, `single-select` and `multi-select`.
     * 
     *  **Examples:**
     *  ```
     *  "attributeValue": ""
     *  "attributeValue": "Some text"
     *  "attributeValue": "2025-04-25"
     *  "attributeValue": "true"
     *  "attributeValue": "653fcdb609bb847693ae69dd"
     *  "attributeValue": "6512cb9679d0233a632627d6,6512cb9679d0233a632627d5"
     * ```
     *
     * @return string|null
     */
    public function getAttributeValue(): ?string
    {
        return $this->attributeValue;
    }
    /**
    * Value of the attribute associated with the category.
    
    **Note**: This field is used for simple attribute types like `text`, `date`, `integer`, `decimal`, `boolean`, `single-select` and `multi-select`.
    
    **Examples:**
    ```
    "attributeValue": ""
    "attributeValue": "Some text"
    "attributeValue": "2025-04-25"
    "attributeValue": "true"
    "attributeValue": "653fcdb609bb847693ae69dd"
    "attributeValue": "6512cb9679d0233a632627d6,6512cb9679d0233a632627d5"
    ```
    *
    * @param string|null $attributeValue
    *
    * @return self
    */
    public function setAttributeValue(?string $attributeValue): self
    {
        $this->initialized['attributeValue'] = true;
        $this->attributeValue = $attributeValue;
        return $this;
    }
    /**
     * ID of the category associated with the attribute value.
     *
     * @return string
     */
    public function getCategoryId(): string
    {
        return $this->categoryId;
    }
    /**
     * ID of the category associated with the attribute value.
     *
     * @param string $categoryId
     *
     * @return self
     */
    public function setCategoryId(string $categoryId): self
    {
        $this->initialized['categoryId'] = true;
        $this->categoryId = $categoryId;
        return $this;
    }
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
    public function definedProperties(): array
    {
        return ['attributeDefinitionId' => ['attributeDefinitionId', 'getAttributeDefinitionId', 'setAttributeDefinitionId'], 'attributeValue' => ['attributeValue', 'getAttributeValue', 'setAttributeValue'], 'categoryId' => ['categoryId', 'getCategoryId', 'setCategoryId'], 'column' => ['column', 'getColumn', 'setColumn'], 'dictionary' => ['dictionary', 'getDictionary', 'setDictionary'], 'matrix' => ['matrix', 'getMatrix', 'setMatrix']];
    }
}