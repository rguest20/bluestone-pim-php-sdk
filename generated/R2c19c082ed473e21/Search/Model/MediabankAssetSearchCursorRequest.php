<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class MediabankAssetSearchCursorRequest implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $count;
    /**
     * @var string|null
     */
    protected $cursor;
    /**
     * @var string|null
     */
    protected $quickSearch;
    /**
     * @var MediabankAssetSearchCursorRequestAsset|null
     */
    protected $asset;
    /**
     * @var MediabankAssetSearchCursorRequestMediaInfo|null
     */
    protected $mediaInfo;
    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }
    /**
     * @param string|null $cursor
     *
     * @return self
     */
    public function setCursor(?string $cursor): self
    {
        $this->initialized['cursor'] = true;
        $this->cursor = $cursor;
        return $this;
    }
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
     * @return MediabankAssetSearchCursorRequestAsset|null
     */
    public function getAsset(): ?MediabankAssetSearchCursorRequestAsset
    {
        return $this->asset;
    }
    /**
     * @param MediabankAssetSearchCursorRequestAsset|null $asset
     *
     * @return self
     */
    public function setAsset(?MediabankAssetSearchCursorRequestAsset $asset): self
    {
        $this->initialized['asset'] = true;
        $this->asset = $asset;
        return $this;
    }
    /**
     * @return MediabankAssetSearchCursorRequestMediaInfo|null
     */
    public function getMediaInfo(): ?MediabankAssetSearchCursorRequestMediaInfo
    {
        return $this->mediaInfo;
    }
    /**
     * @param MediabankAssetSearchCursorRequestMediaInfo|null $mediaInfo
     *
     * @return self
     */
    public function setMediaInfo(?MediabankAssetSearchCursorRequestMediaInfo $mediaInfo): self
    {
        $this->initialized['mediaInfo'] = true;
        $this->mediaInfo = $mediaInfo;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['count' => ['count', 'getCount', 'setCount'], 'cursor' => ['cursor', 'getCursor', 'setCursor'], 'quickSearch' => ['quickSearch', 'getQuickSearch', 'setQuickSearch'], 'asset' => ['asset', 'getAsset', 'setAsset'], 'mediaInfo' => ['mediaInfo', 'getMediaInfo', 'setMediaInfo']];
    }
}