<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class PureProductFilters
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
     * @var list<AssetFilter>|list<AssetLabelsFilter>
     */
    protected $assetFilters;
    /**
     * @var list<AttributeFilter>
     */
    protected $attributeFilters;
    /**
     * @var string
     */
    protected $attributeIdToSortBy;
    /**
     * @var list<BaseFilter>
     */
    protected $baseFilters;
    /**
     * @var list<CategoryFilter>
     */
    protected $categoryFilters;
    /**
     * @var string
     */
    protected $column;
    /**
     * @var list<ProductCreateDateFilter>
     */
    protected $productCreateDateFilter;
    /**
     * @var list<ProductUpdateDateFilter>
     */
    protected $productLastUpdateFilter;
    /**
     * @var list<RelativeDateFilter>
     */
    protected $productLastUpdateRelativeFilter;
    /**
     * @var list<RelativeDateFilter>
     */
    protected $productCreateDateRelativeFilter;
    /**
     * @var list<LabelFilter>
     */
    protected $labelFilters;
    /**
     * @var PublishStateFilter
     */
    protected $publishStateFilter;
    /**
     * @var ValidationStatusFilter
     */
    protected $validationStatusFilter;
    /**
     * @var RelationsFilter
     */
    protected $relationsFilter;
    /**
     * @var ScoreFilter
     */
    protected $scoreFilter;
    /**
     * @var list<ScoreRequirementResultFilters>
     */
    protected $scoreRequirementResultFilters;
    /**
     * @var string
     */
    protected $sortDirection;
    /**
     * @var TypeFilter
     */
    protected $typeFilter;
    /**
     * @var TypesFilter
     */
    protected $typesFilter;
    /**
     * @var OutOfSyncFilter
     */
    protected $outOfSyncFilter;
    /**
     * @var LastSyncStateFilter
     */
    protected $lastSyncStateFilter;
    /**
     * @var list<VariantFilter>
     */
    protected $variantFilters;
    /**
     * @var list<BundleFilter>
     */
    protected $bundleFilters;
    /**
     * @return list<AssetFilter>|list<AssetLabelsFilter>
     */
    public function getAssetFilters(): array
    {
        return $this->assetFilters;
    }
    /**
     * @param list<AssetFilter>|list<AssetLabelsFilter> $assetFilters
     *
     * @return self
     */
    public function setAssetFilters(array $assetFilters): self
    {
        $this->initialized['assetFilters'] = true;
        $this->assetFilters = $assetFilters;
        return $this;
    }
    /**
     * @return list<AttributeFilter>
     */
    public function getAttributeFilters(): array
    {
        return $this->attributeFilters;
    }
    /**
     * @param list<AttributeFilter> $attributeFilters
     *
     * @return self
     */
    public function setAttributeFilters(array $attributeFilters): self
    {
        $this->initialized['attributeFilters'] = true;
        $this->attributeFilters = $attributeFilters;
        return $this;
    }
    /**
     * @return string
     */
    public function getAttributeIdToSortBy(): string
    {
        return $this->attributeIdToSortBy;
    }
    /**
     * @param string $attributeIdToSortBy
     *
     * @return self
     */
    public function setAttributeIdToSortBy(string $attributeIdToSortBy): self
    {
        $this->initialized['attributeIdToSortBy'] = true;
        $this->attributeIdToSortBy = $attributeIdToSortBy;
        return $this;
    }
    /**
     * @return list<BaseFilter>
     */
    public function getBaseFilters(): array
    {
        return $this->baseFilters;
    }
    /**
     * @param list<BaseFilter> $baseFilters
     *
     * @return self
     */
    public function setBaseFilters(array $baseFilters): self
    {
        $this->initialized['baseFilters'] = true;
        $this->baseFilters = $baseFilters;
        return $this;
    }
    /**
     * @return list<CategoryFilter>
     */
    public function getCategoryFilters(): array
    {
        return $this->categoryFilters;
    }
    /**
     * @param list<CategoryFilter> $categoryFilters
     *
     * @return self
     */
    public function setCategoryFilters(array $categoryFilters): self
    {
        $this->initialized['categoryFilters'] = true;
        $this->categoryFilters = $categoryFilters;
        return $this;
    }
    /**
     * @return string
     */
    public function getColumn(): string
    {
        return $this->column;
    }
    /**
     * @param string $column
     *
     * @return self
     */
    public function setColumn(string $column): self
    {
        $this->initialized['column'] = true;
        $this->column = $column;
        return $this;
    }
    /**
     * @return list<ProductCreateDateFilter>
     */
    public function getProductCreateDateFilter(): array
    {
        return $this->productCreateDateFilter;
    }
    /**
     * @param list<ProductCreateDateFilter> $productCreateDateFilter
     *
     * @return self
     */
    public function setProductCreateDateFilter(array $productCreateDateFilter): self
    {
        $this->initialized['productCreateDateFilter'] = true;
        $this->productCreateDateFilter = $productCreateDateFilter;
        return $this;
    }
    /**
     * @return list<ProductUpdateDateFilter>
     */
    public function getProductLastUpdateFilter(): array
    {
        return $this->productLastUpdateFilter;
    }
    /**
     * @param list<ProductUpdateDateFilter> $productLastUpdateFilter
     *
     * @return self
     */
    public function setProductLastUpdateFilter(array $productLastUpdateFilter): self
    {
        $this->initialized['productLastUpdateFilter'] = true;
        $this->productLastUpdateFilter = $productLastUpdateFilter;
        return $this;
    }
    /**
     * @return list<RelativeDateFilter>
     */
    public function getProductLastUpdateRelativeFilter(): array
    {
        return $this->productLastUpdateRelativeFilter;
    }
    /**
     * @param list<RelativeDateFilter> $productLastUpdateRelativeFilter
     *
     * @return self
     */
    public function setProductLastUpdateRelativeFilter(array $productLastUpdateRelativeFilter): self
    {
        $this->initialized['productLastUpdateRelativeFilter'] = true;
        $this->productLastUpdateRelativeFilter = $productLastUpdateRelativeFilter;
        return $this;
    }
    /**
     * @return list<RelativeDateFilter>
     */
    public function getProductCreateDateRelativeFilter(): array
    {
        return $this->productCreateDateRelativeFilter;
    }
    /**
     * @param list<RelativeDateFilter> $productCreateDateRelativeFilter
     *
     * @return self
     */
    public function setProductCreateDateRelativeFilter(array $productCreateDateRelativeFilter): self
    {
        $this->initialized['productCreateDateRelativeFilter'] = true;
        $this->productCreateDateRelativeFilter = $productCreateDateRelativeFilter;
        return $this;
    }
    /**
     * @return list<LabelFilter>
     */
    public function getLabelFilters(): array
    {
        return $this->labelFilters;
    }
    /**
     * @param list<LabelFilter> $labelFilters
     *
     * @return self
     */
    public function setLabelFilters(array $labelFilters): self
    {
        $this->initialized['labelFilters'] = true;
        $this->labelFilters = $labelFilters;
        return $this;
    }
    /**
     * @return PublishStateFilter
     */
    public function getPublishStateFilter(): PublishStateFilter
    {
        return $this->publishStateFilter;
    }
    /**
     * @param PublishStateFilter $publishStateFilter
     *
     * @return self
     */
    public function setPublishStateFilter(PublishStateFilter $publishStateFilter): self
    {
        $this->initialized['publishStateFilter'] = true;
        $this->publishStateFilter = $publishStateFilter;
        return $this;
    }
    /**
     * @return ValidationStatusFilter
     */
    public function getValidationStatusFilter(): ValidationStatusFilter
    {
        return $this->validationStatusFilter;
    }
    /**
     * @param ValidationStatusFilter $validationStatusFilter
     *
     * @return self
     */
    public function setValidationStatusFilter(ValidationStatusFilter $validationStatusFilter): self
    {
        $this->initialized['validationStatusFilter'] = true;
        $this->validationStatusFilter = $validationStatusFilter;
        return $this;
    }
    /**
     * @return RelationsFilter
     */
    public function getRelationsFilter(): RelationsFilter
    {
        return $this->relationsFilter;
    }
    /**
     * @param RelationsFilter $relationsFilter
     *
     * @return self
     */
    public function setRelationsFilter(RelationsFilter $relationsFilter): self
    {
        $this->initialized['relationsFilter'] = true;
        $this->relationsFilter = $relationsFilter;
        return $this;
    }
    /**
     * @return ScoreFilter
     */
    public function getScoreFilter(): ScoreFilter
    {
        return $this->scoreFilter;
    }
    /**
     * @param ScoreFilter $scoreFilter
     *
     * @return self
     */
    public function setScoreFilter(ScoreFilter $scoreFilter): self
    {
        $this->initialized['scoreFilter'] = true;
        $this->scoreFilter = $scoreFilter;
        return $this;
    }
    /**
     * @return list<ScoreRequirementResultFilters>
     */
    public function getScoreRequirementResultFilters(): array
    {
        return $this->scoreRequirementResultFilters;
    }
    /**
     * @param list<ScoreRequirementResultFilters> $scoreRequirementResultFilters
     *
     * @return self
     */
    public function setScoreRequirementResultFilters(array $scoreRequirementResultFilters): self
    {
        $this->initialized['scoreRequirementResultFilters'] = true;
        $this->scoreRequirementResultFilters = $scoreRequirementResultFilters;
        return $this;
    }
    /**
     * @return string
     */
    public function getSortDirection(): string
    {
        return $this->sortDirection;
    }
    /**
     * @param string $sortDirection
     *
     * @return self
     */
    public function setSortDirection(string $sortDirection): self
    {
        $this->initialized['sortDirection'] = true;
        $this->sortDirection = $sortDirection;
        return $this;
    }
    /**
     * @return TypeFilter
     */
    public function getTypeFilter(): TypeFilter
    {
        return $this->typeFilter;
    }
    /**
     * @param TypeFilter $typeFilter
     *
     * @return self
     */
    public function setTypeFilter(TypeFilter $typeFilter): self
    {
        $this->initialized['typeFilter'] = true;
        $this->typeFilter = $typeFilter;
        return $this;
    }
    /**
     * @return TypesFilter
     */
    public function getTypesFilter(): TypesFilter
    {
        return $this->typesFilter;
    }
    /**
     * @param TypesFilter $typesFilter
     *
     * @return self
     */
    public function setTypesFilter(TypesFilter $typesFilter): self
    {
        $this->initialized['typesFilter'] = true;
        $this->typesFilter = $typesFilter;
        return $this;
    }
    /**
     * @return OutOfSyncFilter
     */
    public function getOutOfSyncFilter(): OutOfSyncFilter
    {
        return $this->outOfSyncFilter;
    }
    /**
     * @param OutOfSyncFilter $outOfSyncFilter
     *
     * @return self
     */
    public function setOutOfSyncFilter(OutOfSyncFilter $outOfSyncFilter): self
    {
        $this->initialized['outOfSyncFilter'] = true;
        $this->outOfSyncFilter = $outOfSyncFilter;
        return $this;
    }
    /**
     * @return LastSyncStateFilter
     */
    public function getLastSyncStateFilter(): LastSyncStateFilter
    {
        return $this->lastSyncStateFilter;
    }
    /**
     * @param LastSyncStateFilter $lastSyncStateFilter
     *
     * @return self
     */
    public function setLastSyncStateFilter(LastSyncStateFilter $lastSyncStateFilter): self
    {
        $this->initialized['lastSyncStateFilter'] = true;
        $this->lastSyncStateFilter = $lastSyncStateFilter;
        return $this;
    }
    /**
     * @return list<VariantFilter>
     */
    public function getVariantFilters(): array
    {
        return $this->variantFilters;
    }
    /**
     * @param list<VariantFilter> $variantFilters
     *
     * @return self
     */
    public function setVariantFilters(array $variantFilters): self
    {
        $this->initialized['variantFilters'] = true;
        $this->variantFilters = $variantFilters;
        return $this;
    }
    /**
     * @return list<BundleFilter>
     */
    public function getBundleFilters(): array
    {
        return $this->bundleFilters;
    }
    /**
     * @param list<BundleFilter> $bundleFilters
     *
     * @return self
     */
    public function setBundleFilters(array $bundleFilters): self
    {
        $this->initialized['bundleFilters'] = true;
        $this->bundleFilters = $bundleFilters;
        return $this;
    }
}