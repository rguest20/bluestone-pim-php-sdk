<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class DictionaryValueFilterResponse implements AdditionalPropertiesInterface
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
     * The internal ID of the child dictionary value (sometimes referred to as a dictionary attribute option).
     *
     * @var string|null
     */
    protected $childValueId;
    /**
     * The internal ID of the parent dictionary value (sometimes referred to as a dictionary attribute option).
     *
     * @var string
     */
    protected $parentValueId;
    /**
     * The internal ID of the child dictionary value (sometimes referred to as a dictionary attribute option).
     *
     * @return string|null
     */
    public function getChildValueId(): ?string
    {
        return $this->childValueId;
    }
    /**
     * The internal ID of the child dictionary value (sometimes referred to as a dictionary attribute option).
     *
     * @param string|null $childValueId
     *
     * @return self
     */
    public function setChildValueId(?string $childValueId): self
    {
        $this->initialized['childValueId'] = true;
        $this->childValueId = $childValueId;
        return $this;
    }
    /**
     * The internal ID of the parent dictionary value (sometimes referred to as a dictionary attribute option).
     *
     * @return string
     */
    public function getParentValueId(): string
    {
        return $this->parentValueId;
    }
    /**
     * The internal ID of the parent dictionary value (sometimes referred to as a dictionary attribute option).
     *
     * @param string $parentValueId
     *
     * @return self
     */
    public function setParentValueId(string $parentValueId): self
    {
        $this->initialized['parentValueId'] = true;
        $this->parentValueId = $parentValueId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['childValueId' => ['childValueId', 'getChildValueId', 'setChildValueId'], 'parentValueId' => ['parentValueId', 'getParentValueId', 'setParentValueId']];
    }
}