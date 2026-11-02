<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class RelationRequest implements AdditionalPropertiesInterface
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
    protected $description;
    /**
     * @var string
     */
    protected $direction;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $number;
    /**
     * @var bool|null
     */
    protected $quantityEnabled;
    /**
     * @var string|null
     */
    protected $reverseName;
    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return string
     */
    public function getDirection(): string
    {
        return $this->direction;
    }
    /**
     * @param string $direction
     *
     * @return self
     */
    public function setDirection(string $direction): self
    {
        $this->initialized['direction'] = true;
        $this->direction = $direction;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
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
    /**
     * @return bool|null
     */
    public function getQuantityEnabled(): ?bool
    {
        return $this->quantityEnabled;
    }
    /**
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
     * @return string|null
     */
    public function getReverseName(): ?string
    {
        return $this->reverseName;
    }
    /**
     * @param string|null $reverseName
     *
     * @return self
     */
    public function setReverseName(?string $reverseName): self
    {
        $this->initialized['reverseName'] = true;
        $this->reverseName = $reverseName;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['description' => ['description', 'getDescription', 'setDescription'], 'direction' => ['direction', 'getDirection', 'setDirection'], 'name' => ['name', 'getName', 'setName'], 'number' => ['number', 'getNumber', 'setNumber'], 'quantityEnabled' => ['quantityEnabled', 'getQuantityEnabled', 'setQuantityEnabled'], 'reverseName' => ['reverseName', 'getReverseName', 'setReverseName']];
    }
}