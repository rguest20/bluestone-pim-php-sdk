<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class SelectAttributeValueDto implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    protected $metadata;
    /**
     * @var string|null
     */
    protected $number;
    /**
     * @var string|null
     */
    protected $value;
    /**
     * @var string|null
     */
    protected $valueId;
    /**
     * @return string|null
     */
    public function getMetadata(): ?string
    {
        return $this->metadata;
    }
    /**
     * @param string|null $metadata
     *
     * @return self
     */
    public function setMetadata(?string $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }
    /**
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getValueId(): ?string
    {
        return $this->valueId;
    }
    /**
     * @param string|null $valueId
     *
     * @return self
     */
    public function setValueId(?string $valueId): self
    {
        $this->initialized['valueId'] = true;
        $this->valueId = $valueId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['metadata' => ['metadata', 'getMetadata', 'setMetadata'], 'number' => ['number', 'getNumber', 'setNumber'], 'value' => ['value', 'getValue', 'setValue'], 'valueId' => ['valueId', 'getValueId', 'setValueId']];
    }
}