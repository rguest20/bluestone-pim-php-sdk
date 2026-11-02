<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class AttributeValueFull implements AdditionalPropertiesInterface
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
     * Flag indicating whether the attribute is a Variant Level Attribute (`VLA`).
     * 
     * **Note**: This is only relevant for `VARIANT GROUP` products.
     * 
     * An attribute added to a `VARIANT GROUP` product can be set as a Variant Level Attribute (`VLA`) for easier management of the same attribute for the belonging child `VARIANT` products.
     * 
     * `"copy": true` means that the attribute is to be set as a `VLA` on the `VARIANT GROUP` product, hence it will be inherited down to any child variants.
     * 
     * If this property is included in the request when creating an other type of product (like `SINGLE`, `VARIANT` or `BUNDLE`), a `HTTP 400` Bad Request response will be returned.
     *
     * @var bool|null
     */
    protected $copy;
    /**
     * Indicates that a `VLA` attribute is used to distinguish the variants from each other. E.g. for product variations like color.
     * 
     * **Note**: This is only relevant for `VARIANT GROUP` products. Also `copy` needs to be set to `true`.
     * 
     * If this property is included in the request when creating an other type of product (like `SINGLE`, `VARIANT` or `BUNDLE`), a `HTTP 400` Bad Request response will be returned.
     *
     * @var bool|null
     */
    protected $definingAttributes;
    /**
     * ID of the attribute definition associated with the attribute value.
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
     * Flag indicating whether the `VLA` attribute is locked. A locked `VLA` will require all child variants to have the same value as specified for the variant group. Once locked, the attribute implicitly becomes mandatory on the variants, meaning that a value must be set in the attribute on all child variants
     * 
     * **Note**: This is only relevant for `VARIANT GROUP` products. Also `copy` needs to be set to `true`.
     * 
     * If this property is included in the request when creating an other type of product (like `SINGLE`, `VARIANT` or `BUNDLE`), a `HTTP 400` Bad Request response will be returned.
     *
     * @var bool|null
     */
    protected $locked;
    /**
     * Flag indicating whether the `VLA` attribute is mandatory. A mandatory `VLA` will require that a value is specified in all child variants.
     * 
     * **Note**: This is only relevant for `VARIANT GROUP` products. Also `copy` needs to be set to `true`.
     * 
     * If this property is included in the request when creating an other type of product (like `SINGLE`, `VARIANT` or `BUNDLE`), a `HTTP 400` Bad Request response will be returned.
     *
     * @var bool|null
     */
    protected $mandatory;
    /**
     * Values for matrix attributes associated with the product.
     *
     * @var array<string, array<string, string>>|null
     */
    protected $matrix;
    /**
     * The flag indicates whether the attribute is read-only for the currently logged in user in Bluestone PIM web application based on what policies are applied for the user.
     * 
     * **Note**: This flag is only relevant on calls to the endpoint performed from the the Bluestone PIM web application and not for calls done to the Management API (MAPI). The endpoint will always return `readOnly: false` when calling the endpoint via the Management API (MAPI)
     *
     * @var bool|null
     */
    protected $readOnly;
    /**
     * Array of attribute values associated with the product.
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
     * Flag indicating whether the attribute is a Variant Level Attribute (`VLA`).
     * 
     * **Note**: This is only relevant for `VARIANT GROUP` products.
     * 
     * An attribute added to a `VARIANT GROUP` product can be set as a Variant Level Attribute (`VLA`) for easier management of the same attribute for the belonging child `VARIANT` products.
     * 
     * `"copy": true` means that the attribute is to be set as a `VLA` on the `VARIANT GROUP` product, hence it will be inherited down to any child variants.
     * 
     * If this property is included in the request when creating an other type of product (like `SINGLE`, `VARIANT` or `BUNDLE`), a `HTTP 400` Bad Request response will be returned.
     *
     * @return bool|null
     */
    public function getCopy(): ?bool
    {
        return $this->copy;
    }
    /**
    * Flag indicating whether the attribute is a Variant Level Attribute (`VLA`).
    
    **Note**: This is only relevant for `VARIANT GROUP` products.
    
    An attribute added to a `VARIANT GROUP` product can be set as a Variant Level Attribute (`VLA`) for easier management of the same attribute for the belonging child `VARIANT` products.
    
    `"copy": true` means that the attribute is to be set as a `VLA` on the `VARIANT GROUP` product, hence it will be inherited down to any child variants.
    
    If this property is included in the request when creating an other type of product (like `SINGLE`, `VARIANT` or `BUNDLE`), a `HTTP 400` Bad Request response will be returned.
    *
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
     * Indicates that a `VLA` attribute is used to distinguish the variants from each other. E.g. for product variations like color.
     * 
     * **Note**: This is only relevant for `VARIANT GROUP` products. Also `copy` needs to be set to `true`.
     * 
     * If this property is included in the request when creating an other type of product (like `SINGLE`, `VARIANT` or `BUNDLE`), a `HTTP 400` Bad Request response will be returned.
     *
     * @return bool|null
     */
    public function getDefiningAttributes(): ?bool
    {
        return $this->definingAttributes;
    }
    /**
    * Indicates that a `VLA` attribute is used to distinguish the variants from each other. E.g. for product variations like color.
    
    **Note**: This is only relevant for `VARIANT GROUP` products. Also `copy` needs to be set to `true`.
    
    If this property is included in the request when creating an other type of product (like `SINGLE`, `VARIANT` or `BUNDLE`), a `HTTP 400` Bad Request response will be returned.
    *
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
     * Flag indicating whether the `VLA` attribute is locked. A locked `VLA` will require all child variants to have the same value as specified for the variant group. Once locked, the attribute implicitly becomes mandatory on the variants, meaning that a value must be set in the attribute on all child variants
     * 
     * **Note**: This is only relevant for `VARIANT GROUP` products. Also `copy` needs to be set to `true`.
     * 
     * If this property is included in the request when creating an other type of product (like `SINGLE`, `VARIANT` or `BUNDLE`), a `HTTP 400` Bad Request response will be returned.
     *
     * @return bool|null
     */
    public function getLocked(): ?bool
    {
        return $this->locked;
    }
    /**
    * Flag indicating whether the `VLA` attribute is locked. A locked `VLA` will require all child variants to have the same value as specified for the variant group. Once locked, the attribute implicitly becomes mandatory on the variants, meaning that a value must be set in the attribute on all child variants
    
    **Note**: This is only relevant for `VARIANT GROUP` products. Also `copy` needs to be set to `true`.
    
    If this property is included in the request when creating an other type of product (like `SINGLE`, `VARIANT` or `BUNDLE`), a `HTTP 400` Bad Request response will be returned.
    *
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
     * Flag indicating whether the `VLA` attribute is mandatory. A mandatory `VLA` will require that a value is specified in all child variants.
     * 
     * **Note**: This is only relevant for `VARIANT GROUP` products. Also `copy` needs to be set to `true`.
     * 
     * If this property is included in the request when creating an other type of product (like `SINGLE`, `VARIANT` or `BUNDLE`), a `HTTP 400` Bad Request response will be returned.
     *
     * @return bool|null
     */
    public function getMandatory(): ?bool
    {
        return $this->mandatory;
    }
    /**
    * Flag indicating whether the `VLA` attribute is mandatory. A mandatory `VLA` will require that a value is specified in all child variants.
    
    **Note**: This is only relevant for `VARIANT GROUP` products. Also `copy` needs to be set to `true`.
    
    If this property is included in the request when creating an other type of product (like `SINGLE`, `VARIANT` or `BUNDLE`), a `HTTP 400` Bad Request response will be returned.
    *
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
     * The flag indicates whether the attribute is read-only for the currently logged in user in Bluestone PIM web application based on what policies are applied for the user.
     * 
     * **Note**: This flag is only relevant on calls to the endpoint performed from the the Bluestone PIM web application and not for calls done to the Management API (MAPI). The endpoint will always return `readOnly: false` when calling the endpoint via the Management API (MAPI)
     *
     * @return bool|null
     */
    public function getReadOnly(): ?bool
    {
        return $this->readOnly;
    }
    /**
     * The flag indicates whether the attribute is read-only for the currently logged in user in Bluestone PIM web application based on what policies are applied for the user.
     **Note**: This flag is only relevant on calls to the endpoint performed from the the Bluestone PIM web application and not for calls done to the Management API (MAPI). The endpoint will always return `readOnly: false` when calling the endpoint via the Management API (MAPI)
     *
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
     * Array of attribute values associated with the product.
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
     * Array of attribute values associated with the product.
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
        return ['column' => ['column', 'getColumn', 'setColumn'], 'copy' => ['copy', 'getCopy', 'setCopy'], 'definingAttributes' => ['definingAttributes', 'getDefiningAttributes', 'setDefiningAttributes'], 'definitionId' => ['definitionId', 'getDefinitionId', 'setDefinitionId'], 'dictionary' => ['dictionary', 'getDictionary', 'setDictionary'], 'locked' => ['locked', 'getLocked', 'setLocked'], 'mandatory' => ['mandatory', 'getMandatory', 'setMandatory'], 'matrix' => ['matrix', 'getMatrix', 'setMatrix'], 'readOnly' => ['readOnly', 'getReadOnly', 'setReadOnly'], 'values' => ['values', 'getValues', 'setValues']];
    }
}