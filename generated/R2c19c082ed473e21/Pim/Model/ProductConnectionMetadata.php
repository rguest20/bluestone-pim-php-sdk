<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ProductConnectionMetadata implements AdditionalPropertiesInterface
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
    protected $archived;
    /**
     * @var int|null
     */
    protected $createDate;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var int|null
     */
    protected $lastUpdate;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $number;
    /**
     * @var float|null
     */
    protected $quantity;
    /**
     * @return bool|null
     */
    public function getArchived(): ?bool
    {
        return $this->archived;
    }
    /**
     * @param bool|null $archived
     *
     * @return self
     */
    public function setArchived(?bool $archived): self
    {
        $this->initialized['archived'] = true;
        $this->archived = $archived;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getCreateDate(): ?int
    {
        return $this->createDate;
    }
    /**
     * @param int|null $createDate
     *
     * @return self
     */
    public function setCreateDate(?int $createDate): self
    {
        $this->initialized['createDate'] = true;
        $this->createDate = $createDate;
        return $this;
    }
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
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getLastUpdate(): ?int
    {
        return $this->lastUpdate;
    }
    /**
     * @param int|null $lastUpdate
     *
     * @return self
     */
    public function setLastUpdate(?int $lastUpdate): self
    {
        $this->initialized['lastUpdate'] = true;
        $this->lastUpdate = $lastUpdate;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
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
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }
    /**
     * @param float|null $quantity
     *
     * @return self
     */
    public function setQuantity(?float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['archived' => ['archived', 'getArchived', 'setArchived'], 'createDate' => ['createDate', 'getCreateDate', 'setCreateDate'], 'description' => ['description', 'getDescription', 'setDescription'], 'id' => ['id', 'getId', 'setId'], 'lastUpdate' => ['lastUpdate', 'getLastUpdate', 'setLastUpdate'], 'name' => ['name', 'getName', 'setName'], 'number' => ['number', 'getNumber', 'setNumber'], 'quantity' => ['quantity', 'getQuantity', 'setQuantity']];
    }
}