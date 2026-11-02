<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class ProductUpdateDateFilter
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
    protected $type;
    /**
     * @var float
     */
    protected $dateMilis;
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return float
     */
    public function getDateMilis(): float
    {
        return $this->dateMilis;
    }
    /**
     * @param float $dateMilis
     *
     * @return self
     */
    public function setDateMilis(float $dateMilis): self
    {
        $this->initialized['dateMilis'] = true;
        $this->dateMilis = $dateMilis;
        return $this;
    }
}