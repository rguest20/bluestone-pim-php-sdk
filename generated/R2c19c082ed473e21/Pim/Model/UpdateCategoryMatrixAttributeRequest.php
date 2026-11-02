<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class UpdateCategoryMatrixAttributeRequest implements AdditionalPropertiesInterface
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
     * Propagation: when true, this attribute and its value are inherited by the subcategories of this category and
     * by their products. Only the category that switched propagation on can change it.
     *
     * @var bool|null
     */
    protected $copyAttribute;
    /**
     * Not supported for matrix definitions - sending this field fails the request.
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
     * New value per cell, keyed first by the column value ID and then by the row value ID, both taken from the
     * attribute definition's restriction. This is the complete set to keep - cells left out are cleared.
     *
     * @var array<string, array<string, string>>|null
     */
    protected $matrix;
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
     * Not supported for matrix definitions - sending this field fails the request.
     *
     * @return bool|null
     */
    public function getLocked(): ?bool
    {
        return $this->locked;
    }
    /**
     * Not supported for matrix definitions - sending this field fails the request.
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
    /**
     * New value per cell, keyed first by the column value ID and then by the row value ID, both taken from the
     * attribute definition's restriction. This is the complete set to keep - cells left out are cleared.
     *
     * @return array<string, array<string, string>>|null
     */
    public function getMatrix(): ?iterable
    {
        return $this->matrix;
    }
    /**
    * New value per cell, keyed first by the column value ID and then by the row value ID, both taken from the
    attribute definition's restriction. This is the complete set to keep - cells left out are cleared.
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
        return ['copyAttribute' => ['copyAttribute', 'getCopyAttribute', 'setCopyAttribute'], 'locked' => ['locked', 'getLocked', 'setLocked'], 'mandatory' => ['mandatory', 'getMandatory', 'setMandatory'], 'matrix' => ['matrix', 'getMatrix', 'setMatrix']];
    }
}