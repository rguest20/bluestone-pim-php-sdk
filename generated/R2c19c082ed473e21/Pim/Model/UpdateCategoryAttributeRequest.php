<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class UpdateCategoryAttributeRequest implements AdditionalPropertiesInterface
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
     * @var PropertyUpdateString|null
     */
    protected $attributeValue;
    /**
     * Propagation: when true, this attribute and its value are inherited by the subcategories of this category and
     * by their products. Only the category that switched propagation on can change it.
     *
     * @var bool|null
     */
    protected $copyAttribute;
    /**
     * Lock attribute value: when true, the attribute on products in the category must keep the CLA value for those
     * products to be valid for synchronization. Not supported for column, matrix and compound definitions, which
     * reject this field.
     *
     * @var bool|null
     */
    protected $locked;
    /**
     * Make attribute value mandatory: when true, the attribute on products in the category must have a value for
     * those products to be valid for synchronization.
     *
     * @var bool|null
     */
    protected $mandatory;
    /**
     * @return PropertyUpdateString|null
     */
    public function getAttributeValue(): ?PropertyUpdateString
    {
        return $this->attributeValue;
    }
    /**
     * @param PropertyUpdateString|null $attributeValue
     *
     * @return self
     */
    public function setAttributeValue(?PropertyUpdateString $attributeValue): self
    {
        $this->initialized['attributeValue'] = true;
        $this->attributeValue = $attributeValue;
        return $this;
    }
    /**
     * Propagation: when true, this attribute and its value are inherited by the subcategories of this category and
     * by their products. Only the category that switched propagation on can change it.
     *
     * @return bool|null
     */
    public function getCopyAttribute(): ?bool
    {
        return $this->copyAttribute;
    }
    /**
    * Propagation: when true, this attribute and its value are inherited by the subcategories of this category and
    by their products. Only the category that switched propagation on can change it.
    *
    * @param bool|null $copyAttribute
    *
    * @return self
    */
    public function setCopyAttribute(?bool $copyAttribute): self
    {
        $this->initialized['copyAttribute'] = true;
        $this->copyAttribute = $copyAttribute;
        return $this;
    }
    /**
     * Lock attribute value: when true, the attribute on products in the category must keep the CLA value for those
     * products to be valid for synchronization. Not supported for column, matrix and compound definitions, which
     * reject this field.
     *
     * @return bool|null
     */
    public function getLocked(): ?bool
    {
        return $this->locked;
    }
    /**
    * Lock attribute value: when true, the attribute on products in the category must keep the CLA value for those
    products to be valid for synchronization. Not supported for column, matrix and compound definitions, which
    reject this field.
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
     * Make attribute value mandatory: when true, the attribute on products in the category must have a value for
     * those products to be valid for synchronization.
     *
     * @return bool|null
     */
    public function getMandatory(): ?bool
    {
        return $this->mandatory;
    }
    /**
    * Make attribute value mandatory: when true, the attribute on products in the category must have a value for
    those products to be valid for synchronization.
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
    public function definedProperties(): array
    {
        return ['attributeValue' => ['attributeValue', 'getAttributeValue', 'setAttributeValue'], 'copyAttribute' => ['copyAttribute', 'getCopyAttribute', 'setCopyAttribute'], 'locked' => ['locked', 'getLocked', 'setLocked'], 'mandatory' => ['mandatory', 'getMandatory', 'setMandatory']];
    }
}