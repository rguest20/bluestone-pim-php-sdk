<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Runtime\AdditionalPropertiesInterface;
class KeyAttributes implements AdditionalPropertiesInterface
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
     * @var KeyAttributesForProductType
     */
    protected $single;
    /**
     * @var KeyAttributesForProductType
     */
    protected $variant;
    /**
     * @var KeyAttributesForProductType
     */
    protected $group;
    /**
     * @var KeyAttributesForProductType
     */
    protected $family;
    /**
     * @var KeyAttributesForProductType
     */
    protected $bundle;
    /**
     * @return KeyAttributesForProductType
     */
    public function getSingle(): KeyAttributesForProductType
    {
        return $this->single;
    }
    /**
     * @param KeyAttributesForProductType $single
     *
     * @return self
     */
    public function setSingle(KeyAttributesForProductType $single): self
    {
        $this->initialized['single'] = true;
        $this->single = $single;
        return $this;
    }
    /**
     * @return KeyAttributesForProductType
     */
    public function getVariant(): KeyAttributesForProductType
    {
        return $this->variant;
    }
    /**
     * @param KeyAttributesForProductType $variant
     *
     * @return self
     */
    public function setVariant(KeyAttributesForProductType $variant): self
    {
        $this->initialized['variant'] = true;
        $this->variant = $variant;
        return $this;
    }
    /**
     * @return KeyAttributesForProductType
     */
    public function getGroup(): KeyAttributesForProductType
    {
        return $this->group;
    }
    /**
     * @param KeyAttributesForProductType $group
     *
     * @return self
     */
    public function setGroup(KeyAttributesForProductType $group): self
    {
        $this->initialized['group'] = true;
        $this->group = $group;
        return $this;
    }
    /**
     * @return KeyAttributesForProductType
     */
    public function getFamily(): KeyAttributesForProductType
    {
        return $this->family;
    }
    /**
     * @param KeyAttributesForProductType $family
     *
     * @return self
     */
    public function setFamily(KeyAttributesForProductType $family): self
    {
        $this->initialized['family'] = true;
        $this->family = $family;
        return $this;
    }
    /**
     * @return KeyAttributesForProductType
     */
    public function getBundle(): KeyAttributesForProductType
    {
        return $this->bundle;
    }
    /**
     * @param KeyAttributesForProductType $bundle
     *
     * @return self
     */
    public function setBundle(KeyAttributesForProductType $bundle): self
    {
        $this->initialized['bundle'] = true;
        $this->bundle = $bundle;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['single' => ['single', 'getSingle', 'setSingle'], 'variant' => ['variant', 'getVariant', 'setVariant'], 'group' => ['group', 'getGroup', 'setGroup'], 'family' => ['family', 'getFamily', 'setFamily'], 'bundle' => ['bundle', 'getBundle', 'setBundle']];
    }
}