<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class RelationPartialUpdateRequest implements AdditionalPropertiesInterface
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
    protected $description;
    /**
     * @var PropertyUpdateString|null
     */
    protected $name;
    /**
     * Number of the relation. Omit to leave the current number unchanged.
     *
     * @var string|null
     */
    protected $number;
    /**
     * Is quantity enabled for the relation. Omit to leave it unchanged.
     *
     * @var bool|null
     */
    protected $quantityEnabled;
    /**
     * @var PropertyUpdateString|null
     */
    protected $reverseName;
    /**
     * @return PropertyUpdateString|null
     */
    public function getDescription(): ?PropertyUpdateString
    {
        return $this->description;
    }
    /**
     * @param PropertyUpdateString|null $description
     *
     * @return self
     */
    public function setDescription(?PropertyUpdateString $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return PropertyUpdateString|null
     */
    public function getName(): ?PropertyUpdateString
    {
        return $this->name;
    }
    /**
     * @param PropertyUpdateString|null $name
     *
     * @return self
     */
    public function setName(?PropertyUpdateString $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Number of the relation. Omit to leave the current number unchanged.
     *
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }
    /**
     * Number of the relation. Omit to leave the current number unchanged.
     *
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
     * Is quantity enabled for the relation. Omit to leave it unchanged.
     *
     * @return bool|null
     */
    public function getQuantityEnabled(): ?bool
    {
        return $this->quantityEnabled;
    }
    /**
     * Is quantity enabled for the relation. Omit to leave it unchanged.
     *
     * @param bool|null $quantityEnabled
     *
     * @return self
     */
    public function setQuantityEnabled(?bool $quantityEnabled): self
    {
        $this->initialized['quantityEnabled'] = true;
        $this->quantityEnabled = $quantityEnabled;
        return $this;
    }
    /**
     * @return PropertyUpdateString|null
     */
    public function getReverseName(): ?PropertyUpdateString
    {
        return $this->reverseName;
    }
    /**
     * @param PropertyUpdateString|null $reverseName
     *
     * @return self
     */
    public function setReverseName(?PropertyUpdateString $reverseName): self
    {
        $this->initialized['reverseName'] = true;
        $this->reverseName = $reverseName;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['description' => ['description', 'getDescription', 'setDescription'], 'name' => ['name', 'getName', 'setName'], 'number' => ['number', 'getNumber', 'setNumber'], 'quantityEnabled' => ['quantityEnabled', 'getQuantityEnabled', 'setQuantityEnabled'], 'reverseName' => ['reverseName', 'getReverseName', 'setReverseName']];
    }
}