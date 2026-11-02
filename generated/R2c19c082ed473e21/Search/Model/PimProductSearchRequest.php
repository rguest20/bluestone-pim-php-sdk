<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class PimProductSearchRequest implements AdditionalPropertiesInterface
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
    protected $pageSize;
    /**
     * @var string|null
     */
    protected $column;
    /**
     * @var string|null
     */
    protected $sortDirection;
    /**
     * @var string|null
     */
    protected $attributeIdToSortBy;
    /**
     * @var PimProductSearchRequestTypeFilter|null
     */
    protected $typeFilter;
    /**
     * @var PimProductSearchRequestTypesFilter|null
     */
    protected $typesFilter;
    /**
     * @var list<CreateDateFilter>|null
     */
    protected $productCreateDateFilter;
    /**
     * @var list<CreateDateRelativeFilter>|null
     */
    protected $productCreateDateRelativeFilter;
    /**
     * @var list<LastUpdateFilter>|null
     */
    protected $productLastUpdateFilter;
    /**
     * @var list<LastUpdateRelativeFilter>|null
     */
    protected $productLastUpdateRelativeFilter;
    /**
     * @var list<BaseFilter>|null
     */
    protected $baseFilters;
    /**
     * @var PimProductSearchRequestPublishStateFilter|null
     */
    protected $publishStateFilter;
    /**
     * @var PimProductSearchRequestValidationStatusFilter|null
     */
    protected $validationStatusFilter;
    /**
     * @var list<AttributeFilter>|null
     */
    protected $attributeFilters;
    /**
     * @var list<LabelFilter>|null
     */
    protected $labelFilters;
    /**
     * @var PimProductSearchRequestRelationsFilter|null
     */
    protected $relationsFilter;
    /**
     * @var list<AssetFilter>|null
     */
    protected $assetFilters;
    /**
     * @var list<VariantFilter>|null
     */
    protected $variantFilters;
    /**
     * @var list<BundleFilter>|null
     */
    protected $bundleFilters;
    /**
     * @var list<CategoryFilter>|null
     */
    protected $categoryFilters;
    /**
     * @var PimProductSearchRequestScoreFilter|null
     */
    protected $scoreFilter;
    /**
     * @var list<ScoreRequirementResultFilter>|null
     */
    protected $scoreRequirementResultFilters;
    /**
     * @var PimProductSearchRequestOutOfSyncFilter|null
     */
    protected $outOfSyncFilter;
    /**
     * @var PimProductSearchRequestLastSyncStateFilter|null
     */
    protected $lastSyncStateFilter;
    /**
     * @var list<GroupFilter>|null
     */
    protected $groupFilters;
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
    public function getPageSize(): int
    {
        return $this->pageSize;
    }
    /**
     * @param int $pageSize
     *
     * @return self
     */
    public function setPageSize(int $pageSize): self
    {
        $this->initialized['pageSize'] = true;
        $this->pageSize = $pageSize;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getColumn(): ?string
    {
        return $this->column;
    }
    /**
     * @param string|null $column
     *
     * @return self
     */
    public function setColumn(?string $column): self
    {
        $this->initialized['column'] = true;
        $this->column = $column;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getSortDirection(): ?string
    {
        return $this->sortDirection;
    }
    /**
     * @param string|null $sortDirection
     *
     * @return self
     */
    public function setSortDirection(?string $sortDirection): self
    {
        $this->initialized['sortDirection'] = true;
        $this->sortDirection = $sortDirection;
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
     * @return PimProductSearchRequestTypeFilter|null
     */
    public function getTypeFilter(): ?PimProductSearchRequestTypeFilter
    {
        return $this->typeFilter;
    }
    /**
     * @param PimProductSearchRequestTypeFilter|null $typeFilter
     *
     * @return self
     */
    public function setTypeFilter(?PimProductSearchRequestTypeFilter $typeFilter): self
    {
        $this->initialized['typeFilter'] = true;
        $this->typeFilter = $typeFilter;
        return $this;
    }
    /**
     * @return PimProductSearchRequestTypesFilter|null
     */
    public function getTypesFilter(): ?PimProductSearchRequestTypesFilter
    {
        return $this->typesFilter;
    }
    /**
     * @param PimProductSearchRequestTypesFilter|null $typesFilter
     *
     * @return self
     */
    public function setTypesFilter(?PimProductSearchRequestTypesFilter $typesFilter): self
    {
        $this->initialized['typesFilter'] = true;
        $this->typesFilter = $typesFilter;
        return $this;
    }
    /**
     * @return list<CreateDateFilter>|null
     */
    public function getProductCreateDateFilter(): ?array
    {
        return $this->productCreateDateFilter;
    }
    /**
     * @param list<CreateDateFilter>|null $productCreateDateFilter
     *
     * @return self
     */
    public function setProductCreateDateFilter(?array $productCreateDateFilter): self
    {
        $this->initialized['productCreateDateFilter'] = true;
        $this->productCreateDateFilter = $productCreateDateFilter;
        return $this;
    }
    /**
     * @return list<CreateDateRelativeFilter>|null
     */
    public function getProductCreateDateRelativeFilter(): ?array
    {
        return $this->productCreateDateRelativeFilter;
    }
    /**
     * @param list<CreateDateRelativeFilter>|null $productCreateDateRelativeFilter
     *
     * @return self
     */
    public function setProductCreateDateRelativeFilter(?array $productCreateDateRelativeFilter): self
    {
        $this->initialized['productCreateDateRelativeFilter'] = true;
        $this->productCreateDateRelativeFilter = $productCreateDateRelativeFilter;
        return $this;
    }
    /**
     * @return list<LastUpdateFilter>|null
     */
    public function getProductLastUpdateFilter(): ?array
    {
        return $this->productLastUpdateFilter;
    }
    /**
     * @param list<LastUpdateFilter>|null $productLastUpdateFilter
     *
     * @return self
     */
    public function setProductLastUpdateFilter(?array $productLastUpdateFilter): self
    {
        $this->initialized['productLastUpdateFilter'] = true;
        $this->productLastUpdateFilter = $productLastUpdateFilter;
        return $this;
    }
    /**
     * @return list<LastUpdateRelativeFilter>|null
     */
    public function getProductLastUpdateRelativeFilter(): ?array
    {
        return $this->productLastUpdateRelativeFilter;
    }
    /**
     * @param list<LastUpdateRelativeFilter>|null $productLastUpdateRelativeFilter
     *
     * @return self
     */
    public function setProductLastUpdateRelativeFilter(?array $productLastUpdateRelativeFilter): self
    {
        $this->initialized['productLastUpdateRelativeFilter'] = true;
        $this->productLastUpdateRelativeFilter = $productLastUpdateRelativeFilter;
        return $this;
    }
    /**
     * @return list<BaseFilter>|null
     */
    public function getBaseFilters(): ?array
    {
        return $this->baseFilters;
    }
    /**
     * @param list<BaseFilter>|null $baseFilters
     *
     * @return self
     */
    public function setBaseFilters(?array $baseFilters): self
    {
        $this->initialized['baseFilters'] = true;
        $this->baseFilters = $baseFilters;
        return $this;
    }
    /**
     * @return PimProductSearchRequestPublishStateFilter|null
     */
    public function getPublishStateFilter(): ?PimProductSearchRequestPublishStateFilter
    {
        return $this->publishStateFilter;
    }
    /**
     * @param PimProductSearchRequestPublishStateFilter|null $publishStateFilter
     *
     * @return self
     */
    public function setPublishStateFilter(?PimProductSearchRequestPublishStateFilter $publishStateFilter): self
    {
        $this->initialized['publishStateFilter'] = true;
        $this->publishStateFilter = $publishStateFilter;
        return $this;
    }
    /**
     * @return PimProductSearchRequestValidationStatusFilter|null
     */
    public function getValidationStatusFilter(): ?PimProductSearchRequestValidationStatusFilter
    {
        return $this->validationStatusFilter;
    }
    /**
     * @param PimProductSearchRequestValidationStatusFilter|null $validationStatusFilter
     *
     * @return self
     */
    public function setValidationStatusFilter(?PimProductSearchRequestValidationStatusFilter $validationStatusFilter): self
    {
        $this->initialized['validationStatusFilter'] = true;
        $this->validationStatusFilter = $validationStatusFilter;
        return $this;
    }
    /**
     * @return list<AttributeFilter>|null
     */
    public function getAttributeFilters(): ?array
    {
        return $this->attributeFilters;
    }
    /**
     * @param list<AttributeFilter>|null $attributeFilters
     *
     * @return self
     */
    public function setAttributeFilters(?array $attributeFilters): self
    {
        $this->initialized['attributeFilters'] = true;
        $this->attributeFilters = $attributeFilters;
        return $this;
    }
    /**
     * @return list<LabelFilter>|null
     */
    public function getLabelFilters(): ?array
    {
        return $this->labelFilters;
    }
    /**
     * @param list<LabelFilter>|null $labelFilters
     *
     * @return self
     */
    public function setLabelFilters(?array $labelFilters): self
    {
        $this->initialized['labelFilters'] = true;
        $this->labelFilters = $labelFilters;
        return $this;
    }
    /**
     * @return PimProductSearchRequestRelationsFilter|null
     */
    public function getRelationsFilter(): ?PimProductSearchRequestRelationsFilter
    {
        return $this->relationsFilter;
    }
    /**
     * @param PimProductSearchRequestRelationsFilter|null $relationsFilter
     *
     * @return self
     */
    public function setRelationsFilter(?PimProductSearchRequestRelationsFilter $relationsFilter): self
    {
        $this->initialized['relationsFilter'] = true;
        $this->relationsFilter = $relationsFilter;
        return $this;
    }
    /**
     * @return list<AssetFilter>|null
     */
    public function getAssetFilters(): ?array
    {
        return $this->assetFilters;
    }
    /**
     * @param list<AssetFilter>|null $assetFilters
     *
     * @return self
     */
    public function setAssetFilters(?array $assetFilters): self
    {
        $this->initialized['assetFilters'] = true;
        $this->assetFilters = $assetFilters;
        return $this;
    }
    /**
     * @return list<VariantFilter>|null
     */
    public function getVariantFilters(): ?array
    {
        return $this->variantFilters;
    }
    /**
     * @param list<VariantFilter>|null $variantFilters
     *
     * @return self
     */
    public function setVariantFilters(?array $variantFilters): self
    {
        $this->initialized['variantFilters'] = true;
        $this->variantFilters = $variantFilters;
        return $this;
    }
    /**
     * @return list<BundleFilter>|null
     */
    public function getBundleFilters(): ?array
    {
        return $this->bundleFilters;
    }
    /**
     * @param list<BundleFilter>|null $bundleFilters
     *
     * @return self
     */
    public function setBundleFilters(?array $bundleFilters): self
    {
        $this->initialized['bundleFilters'] = true;
        $this->bundleFilters = $bundleFilters;
        return $this;
    }
    /**
     * @return list<CategoryFilter>|null
     */
    public function getCategoryFilters(): ?array
    {
        return $this->categoryFilters;
    }
    /**
     * @param list<CategoryFilter>|null $categoryFilters
     *
     * @return self
     */
    public function setCategoryFilters(?array $categoryFilters): self
    {
        $this->initialized['categoryFilters'] = true;
        $this->categoryFilters = $categoryFilters;
        return $this;
    }
    /**
     * @return PimProductSearchRequestScoreFilter|null
     */
    public function getScoreFilter(): ?PimProductSearchRequestScoreFilter
    {
        return $this->scoreFilter;
    }
    /**
     * @param PimProductSearchRequestScoreFilter|null $scoreFilter
     *
     * @return self
     */
    public function setScoreFilter(?PimProductSearchRequestScoreFilter $scoreFilter): self
    {
        $this->initialized['scoreFilter'] = true;
        $this->scoreFilter = $scoreFilter;
        return $this;
    }
    /**
     * @return list<ScoreRequirementResultFilter>|null
     */
    public function getScoreRequirementResultFilters(): ?array
    {
        return $this->scoreRequirementResultFilters;
    }
    /**
     * @param list<ScoreRequirementResultFilter>|null $scoreRequirementResultFilters
     *
     * @return self
     */
    public function setScoreRequirementResultFilters(?array $scoreRequirementResultFilters): self
    {
        $this->initialized['scoreRequirementResultFilters'] = true;
        $this->scoreRequirementResultFilters = $scoreRequirementResultFilters;
        return $this;
    }
    /**
     * @return PimProductSearchRequestOutOfSyncFilter|null
     */
    public function getOutOfSyncFilter(): ?PimProductSearchRequestOutOfSyncFilter
    {
        return $this->outOfSyncFilter;
    }
    /**
     * @param PimProductSearchRequestOutOfSyncFilter|null $outOfSyncFilter
     *
     * @return self
     */
    public function setOutOfSyncFilter(?PimProductSearchRequestOutOfSyncFilter $outOfSyncFilter): self
    {
        $this->initialized['outOfSyncFilter'] = true;
        $this->outOfSyncFilter = $outOfSyncFilter;
        return $this;
    }
    /**
     * @return PimProductSearchRequestLastSyncStateFilter|null
     */
    public function getLastSyncStateFilter(): ?PimProductSearchRequestLastSyncStateFilter
    {
        return $this->lastSyncStateFilter;
    }
    /**
     * @param PimProductSearchRequestLastSyncStateFilter|null $lastSyncStateFilter
     *
     * @return self
     */
    public function setLastSyncStateFilter(?PimProductSearchRequestLastSyncStateFilter $lastSyncStateFilter): self
    {
        $this->initialized['lastSyncStateFilter'] = true;
        $this->lastSyncStateFilter = $lastSyncStateFilter;
        return $this;
    }
    /**
     * @return list<GroupFilter>|null
     */
    public function getGroupFilters(): ?array
    {
        return $this->groupFilters;
    }
    /**
     * @param list<GroupFilter>|null $groupFilters
     *
     * @return self
     */
    public function setGroupFilters(?array $groupFilters): self
    {
        $this->initialized['groupFilters'] = true;
        $this->groupFilters = $groupFilters;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['page' => ['page', 'getPage', 'setPage'], 'pageSize' => ['pageSize', 'getPageSize', 'setPageSize'], 'column' => ['column', 'getColumn', 'setColumn'], 'sortDirection' => ['sortDirection', 'getSortDirection', 'setSortDirection'], 'attributeIdToSortBy' => ['attributeIdToSortBy', 'getAttributeIdToSortBy', 'setAttributeIdToSortBy'], 'typeFilter' => ['typeFilter', 'getTypeFilter', 'setTypeFilter'], 'typesFilter' => ['typesFilter', 'getTypesFilter', 'setTypesFilter'], 'productCreateDateFilter' => ['productCreateDateFilter', 'getProductCreateDateFilter', 'setProductCreateDateFilter'], 'productCreateDateRelativeFilter' => ['productCreateDateRelativeFilter', 'getProductCreateDateRelativeFilter', 'setProductCreateDateRelativeFilter'], 'productLastUpdateFilter' => ['productLastUpdateFilter', 'getProductLastUpdateFilter', 'setProductLastUpdateFilter'], 'productLastUpdateRelativeFilter' => ['productLastUpdateRelativeFilter', 'getProductLastUpdateRelativeFilter', 'setProductLastUpdateRelativeFilter'], 'baseFilters' => ['baseFilters', 'getBaseFilters', 'setBaseFilters'], 'publishStateFilter' => ['publishStateFilter', 'getPublishStateFilter', 'setPublishStateFilter'], 'validationStatusFilter' => ['validationStatusFilter', 'getValidationStatusFilter', 'setValidationStatusFilter'], 'attributeFilters' => ['attributeFilters', 'getAttributeFilters', 'setAttributeFilters'], 'labelFilters' => ['labelFilters', 'getLabelFilters', 'setLabelFilters'], 'relationsFilter' => ['relationsFilter', 'getRelationsFilter', 'setRelationsFilter'], 'assetFilters' => ['assetFilters', 'getAssetFilters', 'setAssetFilters'], 'variantFilters' => ['variantFilters', 'getVariantFilters', 'setVariantFilters'], 'bundleFilters' => ['bundleFilters', 'getBundleFilters', 'setBundleFilters'], 'categoryFilters' => ['categoryFilters', 'getCategoryFilters', 'setCategoryFilters'], 'scoreFilter' => ['scoreFilter', 'getScoreFilter', 'setScoreFilter'], 'scoreRequirementResultFilters' => ['scoreRequirementResultFilters', 'getScoreRequirementResultFilters', 'setScoreRequirementResultFilters'], 'outOfSyncFilter' => ['outOfSyncFilter', 'getOutOfSyncFilter', 'setOutOfSyncFilter'], 'lastSyncStateFilter' => ['lastSyncStateFilter', 'getLastSyncStateFilter', 'setLastSyncStateFilter'], 'groupFilters' => ['groupFilters', 'getGroupFilters', 'setGroupFilters']];
    }
}