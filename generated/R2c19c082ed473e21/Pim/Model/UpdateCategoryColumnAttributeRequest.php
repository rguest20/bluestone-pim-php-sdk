<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class UpdateCategoryColumnAttributeRequest implements AdditionalPropertiesInterface
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
     * New value per column, keyed by the column value ID taken from the attribute definition's restriction. This
     * is the complete set to keep - columns left out are cleared.
     *
     * @var array<string, string>|null
     */
    protected $column;
    /**
     * Propagation: when true, this attribute and its value are inherited by the subcategories of this category and
     * by their products. Only the category that switched propagation on can change it.
     *
     * @var bool|null
     */
    protected $copyAttribute;
    /**
     * Not supported for column definitions - sending this field fails the request.
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
     * New value per column, keyed by the column value ID taken from the attribute definition's restriction. This
     * is the complete set to keep - columns left out are cleared.
     *
     * @return array<string, string>|null
     */
    public function getColumn(): ?iterable
    {
        return $this->column;
    }
    /**
    * New value per column, keyed by the column value ID taken from the attribute definition's restriction. This
    is the complete set to keep - columns left out are cleared.
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
     * Not supported for column definitions - sending this field fails the request.
     *
     * @return bool|null
     */
    public function getLocked(): ?bool
    {
        return $this->locked;
    }
    /**
     * Not supported for column definitions - sending this field fails the request.
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
        return ['column' => ['column', 'getColumn', 'setColumn'], 'copyAttribute' => ['copyAttribute', 'getCopyAttribute', 'setCopyAttribute'], 'locked' => ['locked', 'getLocked', 'setLocked'], 'mandatory' => ['mandatory', 'getMandatory', 'setMandatory']];
    }
}