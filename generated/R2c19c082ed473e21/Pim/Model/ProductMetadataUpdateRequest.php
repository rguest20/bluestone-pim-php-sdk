<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ProductMetadataUpdateRequest implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    protected $number;
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
    public function definedProperties(): array
    {
        return ['description' => ['description', 'getDescription', 'setDescription'], 'name' => ['name', 'getName', 'setName'], 'number' => ['number', 'getNumber', 'setNumber']];
    }
}