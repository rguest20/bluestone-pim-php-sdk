<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model;

class ColumnsSet
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
    protected $columnType;
    /**
     * @var float
     */
    protected $width;
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
    public function getColumnType(): string
    {
        return $this->columnType;
    }
    /**
     * @param string $columnType
     *
     * @return self
     */
    public function setColumnType(string $columnType): self
    {
        $this->initialized['columnType'] = true;
        $this->columnType = $columnType;
        return $this;
    }
    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }
    /**
     * @param float $width
     *
     * @return self
     */
    public function setWidth(float $width): self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
}