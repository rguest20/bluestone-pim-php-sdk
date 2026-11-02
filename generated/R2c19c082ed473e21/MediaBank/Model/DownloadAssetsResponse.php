<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class DownloadAssetsResponse implements AdditionalPropertiesInterface
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
     * @var list<DownloadAssetPresignedUrlResponse>
     */
    protected $assets;
    /**
     * @return list<DownloadAssetPresignedUrlResponse>
     */
    public function getAssets(): array
    {
        return $this->assets;
    }
    /**
     * @param list<DownloadAssetPresignedUrlResponse> $assets
     *
     * @return self
     */
    public function setAssets(array $assets): self
    {
        $this->initialized['assets'] = true;
        $this->assets = $assets;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['assets' => ['assets', 'getAssets', 'setAssets']];
    }
}