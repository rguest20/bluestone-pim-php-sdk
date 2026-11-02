<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model;

class RelationDefinition
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $number;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $reverseName;
    /**
     * @var float
     */
    protected $order;
    /**
     * @var string
     */
    protected $direction;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
    /**
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
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
     * @return string
     */
    public function getReverseName(): string
    {
        return $this->reverseName;
    }
    /**
     * @param string $reverseName
     *
     * @return self
     */
    public function setReverseName(string $reverseName): self
    {
        $this->initialized['reverseName'] = true;
        $this->reverseName = $reverseName;
        return $this;
    }
    /**
     * @return float
     */
    public function getOrder(): float
    {
        return $this->order;
    }
    /**
     * @param float $order
     *
     * @return self
     */
    public function setOrder(float $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
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
}