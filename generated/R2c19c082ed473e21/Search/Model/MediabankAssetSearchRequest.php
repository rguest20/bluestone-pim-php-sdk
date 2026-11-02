<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class MediabankAssetSearchRequest implements AdditionalPropertiesInterface
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
    protected $page;
    /**
     * @var int
     */
    protected $resultsPerPage;
    /**
     * @var string|null
     */
    protected $sortField;
    /**
     * @var string|null
     */
    protected $attributeIdToSortBy;
    /**
     * @var string|null
     */
    protected $sortOrder;
    /**
     * @var string|null
     */
    protected $quickSearch;
    /**
     * @var MediabankAssetSearchRequestAsset|null
     */
    protected $asset;
    /**
     * @var MediabankAssetSearchRequestMediaInfo|null
     */
    protected $mediaInfo;
    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
    /**
     * @param int $page
     *
     * @return self
     */
    public function setPage(int $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
    /**
     * @return int
     */
    public function getResultsPerPage(): int
    {
        return $this->resultsPerPage;
    }
    /**
     * @param int $resultsPerPage
     *
     * @return self
     */
    public function setResultsPerPage(int $resultsPerPage): self
    {
        $this->initialized['resultsPerPage'] = true;
        $this->resultsPerPage = $resultsPerPage;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getSortField(): ?string
    {
        return $this->sortField;
    }
    /**
     * @param string|null $sortField
     *
     * @return self
     */
    public function setSortField(?string $sortField): self
    {
        $this->initialized['sortField'] = true;
        $this->sortField = $sortField;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getAttributeIdToSortBy(): ?string
    {
        return $this->attributeIdToSortBy;
    }
    /**
     * @param string|null $attributeIdToSortBy
     *
     * @return self
     */
    public function setAttributeIdToSortBy(?string $attributeIdToSortBy): self
    {
        $this->initialized['attributeIdToSortBy'] = true;
        $this->attributeIdToSortBy = $attributeIdToSortBy;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getSortOrder(): ?string
    {
        return $this->sortOrder;
    }
    /**
     * @param string|null $sortOrder
     *
     * @return self
     */
    public function setSortOrder(?string $sortOrder): self
    {
        $this->initialized['sortOrder'] = true;
        $this->sortOrder = $sortOrder;
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
     * @return MediabankAssetSearchRequestAsset|null
     */
    public function getAsset(): ?MediabankAssetSearchRequestAsset
    {
        return $this->asset;
    }
    /**
     * @param MediabankAssetSearchRequestAsset|null $asset
     *
     * @return self
     */
    public function setAsset(?MediabankAssetSearchRequestAsset $asset): self
    {
        $this->initialized['asset'] = true;
        $this->asset = $asset;
        return $this;
    }
    /**
     * @return MediabankAssetSearchRequestMediaInfo|null
     */
    public function getMediaInfo(): ?MediabankAssetSearchRequestMediaInfo
    {
        return $this->mediaInfo;
    }
    /**
     * @param MediabankAssetSearchRequestMediaInfo|null $mediaInfo
     *
     * @return self
     */
    public function setMediaInfo(?MediabankAssetSearchRequestMediaInfo $mediaInfo): self
    {
        $this->initialized['mediaInfo'] = true;
        $this->mediaInfo = $mediaInfo;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['page' => ['page', 'getPage', 'setPage'], 'resultsPerPage' => ['resultsPerPage', 'getResultsPerPage', 'setResultsPerPage'], 'sortField' => ['sortField', 'getSortField', 'setSortField'], 'attributeIdToSortBy' => ['attributeIdToSortBy', 'getAttributeIdToSortBy', 'setAttributeIdToSortBy'], 'sortOrder' => ['sortOrder', 'getSortOrder', 'setSortOrder'], 'quickSearch' => ['quickSearch', 'getQuickSearch', 'setQuickSearch'], 'asset' => ['asset', 'getAsset', 'setAsset'], 'mediaInfo' => ['mediaInfo', 'getMediaInfo', 'setMediaInfo']];
    }
}