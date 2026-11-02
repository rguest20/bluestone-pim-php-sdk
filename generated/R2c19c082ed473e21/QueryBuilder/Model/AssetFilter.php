<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class AssetFilter
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
     * @var float
     */
    protected $assetCount;
    /**
     * @var list<string>
     */
    protected $assetIds;
    /**
     * @var string
     */
    protected $type;
    /**
     * @return float
     */
    public function getAssetCount(): float
    {
        return $this->assetCount;
    }
    /**
     * @param float $assetCount
     *
     * @return self
     */
    public function setAssetCount(float $assetCount): self
    {
        $this->initialized['assetCount'] = true;
        $this->assetCount = $assetCount;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getAssetIds(): array
    {
        return $this->assetIds;
    }
    /**
     * @param list<string> $assetIds
     *
     * @return self
     */
    public function setAssetIds(array $assetIds): self
    {
        $this->initialized['assetIds'] = true;
        $this->assetIds = $assetIds;
        return $this;
    }
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
}