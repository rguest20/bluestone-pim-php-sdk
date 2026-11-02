<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class BundleFilter
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
    protected $bundleCount;
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
    public function getBundleCount(): float
    {
        return $this->bundleCount;
    }
    /**
     * @param float $bundleCount
     *
     * @return self
     */
    public function setBundleCount(float $bundleCount): self
    {
        $this->initialized['bundleCount'] = true;
        $this->bundleCount = $bundleCount;
        return $this;
    }
}