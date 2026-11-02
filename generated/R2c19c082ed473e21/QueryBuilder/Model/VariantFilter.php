<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class VariantFilter
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
    protected $variantCount;
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
    public function getVariantCount(): float
    {
        return $this->variantCount;
    }
    /**
     * @param float $variantCount
     *
     * @return self
     */
    public function setVariantCount(float $variantCount): self
    {
        $this->initialized['variantCount'] = true;
        $this->variantCount = $variantCount;
        return $this;
    }
}