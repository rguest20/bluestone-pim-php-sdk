<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ProductVariantAttributeDto implements AdditionalPropertiesInterface
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
     * @var bool|null
     */
    protected $copy;
    /**
     * @var bool|null
     */
    protected $definingAttributes;
    /**
     * @var bool|null
     */
    protected $locked;
    /**
     * @var bool|null
     */
    protected $mandatory;
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
    public function definedProperties(): array
    {
        return ['copy' => ['copy', 'getCopy', 'setCopy'], 'definingAttributes' => ['definingAttributes', 'getDefiningAttributes', 'setDefiningAttributes'], 'locked' => ['locked', 'getLocked', 'setLocked'], 'mandatory' => ['mandatory', 'getMandatory', 'setMandatory']];
    }
}