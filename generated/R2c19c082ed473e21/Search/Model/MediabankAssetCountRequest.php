<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class MediabankAssetCountRequest implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    protected $quickSearch;
    /**
     * @var MediabankAssetCountRequestAsset|null
     */
    protected $asset;
    /**
     * @var MediabankAssetCountRequestMediaInfo|null
     */
    protected $mediaInfo;
    /**
     * @return string|null
     */
    public function getQuickSearch(): ?string
    {
        return $this->quickSearch;
    }
    /**
     * @param string|null $quickSearch
     *
     * @return self
     */
    public function setQuickSearch(?string $quickSearch): self
    {
        $this->initialized['quickSearch'] = true;
        $this->quickSearch = $quickSearch;
        return $this;
    }
    /**
     * @return MediabankAssetCountRequestAsset|null
     */
    public function getAsset(): ?MediabankAssetCountRequestAsset
    {
        return $this->asset;
    }
    /**
     * @param MediabankAssetCountRequestAsset|null $asset
     *
     * @return self
     */
    public function setAsset(?MediabankAssetCountRequestAsset $asset): self
    {
        $this->initialized['asset'] = true;
        $this->asset = $asset;
        return $this;
    }
    /**
     * @return MediabankAssetCountRequestMediaInfo|null
     */
    public function getMediaInfo(): ?MediabankAssetCountRequestMediaInfo
    {
        return $this->mediaInfo;
    }
    /**
     * @param MediabankAssetCountRequestMediaInfo|null $mediaInfo
     *
     * @return self
     */
    public function setMediaInfo(?MediabankAssetCountRequestMediaInfo $mediaInfo): self
    {
        $this->initialized['mediaInfo'] = true;
        $this->mediaInfo = $mediaInfo;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['quickSearch' => ['quickSearch', 'getQuickSearch', 'setQuickSearch'], 'asset' => ['asset', 'getAsset', 'setAsset'], 'mediaInfo' => ['mediaInfo', 'getMediaInfo', 'setMediaInfo']];
    }
}