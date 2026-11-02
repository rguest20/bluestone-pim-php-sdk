<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class CategoryAttributeMetadataResponse implements AdditionalPropertiesInterface
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
     * ID of the category (catalog node) that the Category Level Attribute (CLA) is assigned to.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @var string|null
     */
    protected $assignedOn;
    /**
     * ID of the attribute definition used as a Category Level Attribute (CLA).
     * 
     * **Example:** `634c26e14cedfd0001775e9e`
     *
     * @var string
     */
    protected $attributeDefinitionId;
    /**
     * Name of the attribute definition used as a Category Level Attribute (CLA).
     *
     * @var string|null
     */
    protected $attributeDefinitionName;
    /**
     * Value of attribute when used as a Category Level Attribute (CLA) associated with the category (catalog node).
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
     * Values if column attribute when used as a Category Level Attribute (CLA) associated with the category (catalog node).
     *
     * @var array<string, string>|null
     */
    protected $column;
    /**
     * Used only when propagation* is enabled for the Category Level Attribute (CLA). It contains the ID of the category (catalog node) that the Category Level Attribute (CLA) is assigned to.
     * 
     * * Propagation means that all products in this category (catalog node) and any sub-categories will inherit this attribute and its value.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @var string|null
     */
    protected $copySetOn;
    /**
     * Values if dictionary attribute when used as a Category Level Attribute (CLA) associated with the category (catalog node).
     *
     * @var list<string>|null
     */
    protected $dictionary;
    /**
     * Used only when "Lock attribute value"* is enabled for the Category Level Attribute (CLA). It contains the ID of the category (catalog node) that the Category Level Attribute (CLA) is assigned to.
     * 
     * * When activated, the attribute on products in the category must have the same value as the CLA for the products to be valid for synchronization.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @var string|null
     */
    protected $lockedSetOn;
    /**
     * Used only when "Make attribute value mandatory"* is enabled for the Category Level Attribute (CLA). It contains the ID of the category (catalog node) that the Category Level Attribute (CLA) is assigned to.
     * 
     * * When activated, the attribute on products in the category must have a value for the products to be valid for synchronization.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @var string|null
     */
    protected $mandatorySetOn;
    /**
     * Values for matrix attribute when used as a Category Level Attribute (CLA) associated with the category (catalog node).
     *
     * @var array<string, array<string, string>>|null
     */
    protected $matrix;
    /**
     * The flag indicates whether the attribute used as a Category Level Attribute (CLA) is read-only for the currently logged in user in Bluestone PIM web application based on what policies are applied for the user.
     * 
     * **Note**: This flag is only relevant on calls to the endpoint performed from the the Bluestone PIM web application and not for calls done to the Management API (MAPI). The endpoint will always return `readOnly: false` when calling the endpoint via the Management API (MAPI)
     *
     * @var bool
     */
    protected $readOnly;
    /**
     * ID of the category (catalog node) that the Category Level Attribute (CLA) is assigned to.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @return string|null
     */
    public function getAssignedOn(): ?string
    {
        return $this->assignedOn;
    }
    /**
     * ID of the category (catalog node) that the Category Level Attribute (CLA) is assigned to.
     **Example:** `634c26e14cedfd0001775e9f`
     *
     * @param string|null $assignedOn
     *
     * @return self
     */
    public function setAssignedOn(?string $assignedOn): self
    {
        $this->initialized['assignedOn'] = true;
        $this->assignedOn = $assignedOn;
        return $this;
    }
    /**
     * ID of the attribute definition used as a Category Level Attribute (CLA).
     * 
     * **Example:** `634c26e14cedfd0001775e9e`
     *
     * @return string
     */
    public function getAttributeDefinitionId(): string
    {
        return $this->attributeDefinitionId;
    }
    /**
     * ID of the attribute definition used as a Category Level Attribute (CLA).
     **Example:** `634c26e14cedfd0001775e9e`
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
     * Name of the attribute definition used as a Category Level Attribute (CLA).
     *
     * @return string|null
     */
    public function getAttributeDefinitionName(): ?string
    {
        return $this->attributeDefinitionName;
    }
    /**
     * Name of the attribute definition used as a Category Level Attribute (CLA).
     *
     * @param string|null $attributeDefinitionName
     *
     * @return self
     */
    public function setAttributeDefinitionName(?string $attributeDefinitionName): self
    {
        $this->initialized['attributeDefinitionName'] = true;
        $this->attributeDefinitionName = $attributeDefinitionName;
        return $this;
    }
    /**
     * Value of attribute when used as a Category Level Attribute (CLA) associated with the category (catalog node).
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
    * Value of attribute when used as a Category Level Attribute (CLA) associated with the category (catalog node).
    
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
     * Values if column attribute when used as a Category Level Attribute (CLA) associated with the category (catalog node).
     *
     * @return array<string, string>|null
     */
    public function getColumn(): ?iterable
    {
        return $this->column;
    }
    /**
     * Values if column attribute when used as a Category Level Attribute (CLA) associated with the category (catalog node).
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
     * Used only when propagation* is enabled for the Category Level Attribute (CLA). It contains the ID of the category (catalog node) that the Category Level Attribute (CLA) is assigned to.
     * 
     * * Propagation means that all products in this category (catalog node) and any sub-categories will inherit this attribute and its value.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @return string|null
     */
    public function getCopySetOn(): ?string
    {
        return $this->copySetOn;
    }
    /**
     * Used only when propagation* is enabled for the Category Level Attribute (CLA). It contains the ID of the category (catalog node) that the Category Level Attribute (CLA) is assigned to.
     * Propagation means that all products in this category (catalog node) and any sub-categories will inherit this attribute and its value.
     **Example:** `634c26e14cedfd0001775e9f`
     *
     * @param string|null $copySetOn
     *
     * @return self
     */
    public function setCopySetOn(?string $copySetOn): self
    {
        $this->initialized['copySetOn'] = true;
        $this->copySetOn = $copySetOn;
        return $this;
    }
    /**
     * Values if dictionary attribute when used as a Category Level Attribute (CLA) associated with the category (catalog node).
     *
     * @return list<string>|null
     */
    public function getDictionary(): ?array
    {
        return $this->dictionary;
    }
    /**
     * Values if dictionary attribute when used as a Category Level Attribute (CLA) associated with the category (catalog node).
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
     * Used only when "Lock attribute value"* is enabled for the Category Level Attribute (CLA). It contains the ID of the category (catalog node) that the Category Level Attribute (CLA) is assigned to.
     * 
     * * When activated, the attribute on products in the category must have the same value as the CLA for the products to be valid for synchronization.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @return string|null
     */
    public function getLockedSetOn(): ?string
    {
        return $this->lockedSetOn;
    }
    /**
     * Used only when "Lock attribute value"* is enabled for the Category Level Attribute (CLA). It contains the ID of the category (catalog node) that the Category Level Attribute (CLA) is assigned to.
     * When activated, the attribute on products in the category must have the same value as the CLA for the products to be valid for synchronization.
     **Example:** `634c26e14cedfd0001775e9f`
     *
     * @param string|null $lockedSetOn
     *
     * @return self
     */
    public function setLockedSetOn(?string $lockedSetOn): self
    {
        $this->initialized['lockedSetOn'] = true;
        $this->lockedSetOn = $lockedSetOn;
        return $this;
    }
    /**
     * Used only when "Make attribute value mandatory"* is enabled for the Category Level Attribute (CLA). It contains the ID of the category (catalog node) that the Category Level Attribute (CLA) is assigned to.
     * 
     * * When activated, the attribute on products in the category must have a value for the products to be valid for synchronization.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @return string|null
     */
    public function getMandatorySetOn(): ?string
    {
        return $this->mandatorySetOn;
    }
    /**
     * Used only when "Make attribute value mandatory"* is enabled for the Category Level Attribute (CLA). It contains the ID of the category (catalog node) that the Category Level Attribute (CLA) is assigned to.
     * When activated, the attribute on products in the category must have a value for the products to be valid for synchronization.
     **Example:** `634c26e14cedfd0001775e9f`
     *
     * @param string|null $mandatorySetOn
     *
     * @return self
     */
    public function setMandatorySetOn(?string $mandatorySetOn): self
    {
        $this->initialized['mandatorySetOn'] = true;
        $this->mandatorySetOn = $mandatorySetOn;
        return $this;
    }
    /**
     * Values for matrix attribute when used as a Category Level Attribute (CLA) associated with the category (catalog node).
     *
     * @return array<string, array<string, string>>|null
     */
    public function getMatrix(): ?iterable
    {
        return $this->matrix;
    }
    /**
     * Values for matrix attribute when used as a Category Level Attribute (CLA) associated with the category (catalog node).
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
     * The flag indicates whether the attribute used as a Category Level Attribute (CLA) is read-only for the currently logged in user in Bluestone PIM web application based on what policies are applied for the user.
     * 
     * **Note**: This flag is only relevant on calls to the endpoint performed from the the Bluestone PIM web application and not for calls done to the Management API (MAPI). The endpoint will always return `readOnly: false` when calling the endpoint via the Management API (MAPI)
     *
     * @return bool
     */
    public function getReadOnly(): bool
    {
        return $this->readOnly;
    }
    /**
     * The flag indicates whether the attribute used as a Category Level Attribute (CLA) is read-only for the currently logged in user in Bluestone PIM web application based on what policies are applied for the user.
     **Note**: This flag is only relevant on calls to the endpoint performed from the the Bluestone PIM web application and not for calls done to the Management API (MAPI). The endpoint will always return `readOnly: false` when calling the endpoint via the Management API (MAPI)
     *
     * @param bool $readOnly
     *
     * @return self
     */
    public function setReadOnly(bool $readOnly): self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['assignedOn' => ['assignedOn', 'getAssignedOn', 'setAssignedOn'], 'attributeDefinitionId' => ['attributeDefinitionId', 'getAttributeDefinitionId', 'setAttributeDefinitionId'], 'attributeDefinitionName' => ['attributeDefinitionName', 'getAttributeDefinitionName', 'setAttributeDefinitionName'], 'attributeValue' => ['attributeValue', 'getAttributeValue', 'setAttributeValue'], 'column' => ['column', 'getColumn', 'setColumn'], 'copySetOn' => ['copySetOn', 'getCopySetOn', 'setCopySetOn'], 'dictionary' => ['dictionary', 'getDictionary', 'setDictionary'], 'lockedSetOn' => ['lockedSetOn', 'getLockedSetOn', 'setLockedSetOn'], 'mandatorySetOn' => ['mandatorySetOn', 'getMandatorySetOn', 'setMandatorySetOn'], 'matrix' => ['matrix', 'getMatrix', 'setMatrix'], 'readOnly' => ['readOnly', 'getReadOnly', 'setReadOnly']];
    }
}