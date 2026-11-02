<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class AssetFilter implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $type;
    /**
     * @var list<string>|null
     */
    protected $labelsIds;
    /**
     * @var int|null
     */
    protected $assetCount;
    /**
     * @var list<string>|null
     */
    protected $assetIds;
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
     * @return list<string>|null
     */
    public function getLabelsIds(): ?array
    {
        return $this->labelsIds;
    }
    /**
     * @param list<string>|null $labelsIds
     *
     * @return self
     */
    public function setLabelsIds(?array $labelsIds): self
    {
        $this->initialized['labelsIds'] = true;
        $this->labelsIds = $labelsIds;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getAssetCount(): ?int
    {
        return $this->assetCount;
    }
    /**
     * @param int|null $assetCount
     *
     * @return self
     */
    public function setAssetCount(?int $assetCount): self
    {
        $this->initialized['assetCount'] = true;
        $this->assetCount = $assetCount;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getAssetIds(): ?array
    {
        return $this->assetIds;
    }
    /**
     * @param list<string>|null $assetIds
     *
     * @return self
     */
    public function setAssetIds(?array $assetIds): self
    {
        $this->initialized['assetIds'] = true;
        $this->assetIds = $assetIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'labelsIds' => ['labelsIds', 'getLabelsIds', 'setLabelsIds'], 'assetCount' => ['assetCount', 'getAssetCount', 'setAssetCount'], 'assetIds' => ['assetIds', 'getAssetIds', 'setAssetIds']];
    }
}