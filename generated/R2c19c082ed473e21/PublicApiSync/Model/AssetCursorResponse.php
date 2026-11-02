<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalPropertiesInterface;
class AssetCursorResponse implements AdditionalPropertiesInterface
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
    protected $assetId;
    /**
     * @return string
     */
    public function getAssetId(): string
    {
        return $this->assetId;
    }
    /**
     * @param string $assetId
     *
     * @return self
     */
    public function setAssetId(string $assetId): self
    {
        $this->initialized['assetId'] = true;
        $this->assetId = $assetId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['assetId' => ['assetId', 'getAssetId', 'setAssetId']];
    }
}