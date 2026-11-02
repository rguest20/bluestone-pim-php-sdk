<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class DictionaryAttributeUpdateRequest implements AdditionalPropertiesInterface
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
    protected $metadata;
    /**
     * @var PropertyUpdateString|null
     */
    protected $number;
    /**
     * @var PropertyUpdateString|null
     */
    protected $value;
    /**
     * @return PropertyUpdateString|null
     */
    public function getMetadata(): ?PropertyUpdateString
    {
        return $this->metadata;
    }
    /**
     * @param PropertyUpdateString|null $metadata
     *
     * @return self
     */
    public function setMetadata(?PropertyUpdateString $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * @return PropertyUpdateString|null
     */
    public function getNumber(): ?PropertyUpdateString
    {
        return $this->number;
    }
    /**
     * @param PropertyUpdateString|null $number
     *
     * @return self
     */
    public function setNumber(?PropertyUpdateString $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * @return PropertyUpdateString|null
     */
    public function getValue(): ?PropertyUpdateString
    {
        return $this->value;
    }
    /**
     * @param PropertyUpdateString|null $value
     *
     * @return self
     */
    public function setValue(?PropertyUpdateString $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['metadata' => ['metadata', 'getMetadata', 'setMetadata'], 'number' => ['number', 'getNumber', 'setNumber'], 'value' => ['value', 'getValue', 'setValue']];
    }
}