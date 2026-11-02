<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class PimProductSearchCursorRequest implements AdditionalPropertiesInterface
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
     * @var PimProductSearchCursorRequestTypeFilter|null
     */
    protected $typeFilter;
    /**
     * @var PimProductSearchCursorRequestTypesFilter|null
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
     * @var PimProductSearchCursorRequestPublishStateFilter|null
     */
    protected $publishStateFilter;
    /**
     * @var PimProductSearchCursorRequestValidationStatusFilter|null
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
     * @var PimProductSearchCursorRequestRelationsFilter|null
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
     * @var PimProductSearchCursorRequestScoreFilter|null
     */
    protected $scoreFilter;
    /**
     * @var list<ScoreRequirementResultFilter>|null
     */
    protected $scoreRequirementResultFilters;
    /**
     * @var PimProductSearchCursorRequestOutOfSyncFilter|null
     */
    protected $outOfSyncFilter;
    /**
     * @var PimProductSearchCursorRequestLastSyncStateFilter|null
     */
    protected $lastSyncStateFilter;
    /**
     * @var list<GroupFilter>|null
     */
    protected $groupFilters;
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
     * @return PimProductSearchCursorRequestTypeFilter|null
     */
    public function getTypeFilter(): ?PimProductSearchCursorRequestTypeFilter
    {
        return $this->typeFilter;
    }
    /**
     * @param PimProductSearchCursorRequestTypeFilter|null $typeFilter
     *
     * @return self
     */
    public function setTypeFilter(?PimProductSearchCursorRequestTypeFilter $typeFilter): self
    {
        $this->initialized['typeFilter'] = true;
        $this->typeFilter = $typeFilter;
        return $this;
    }
    /**
     * @return PimProductSearchCursorRequestTypesFilter|null
     */
    public function getTypesFilter(): ?PimProductSearchCursorRequestTypesFilter
    {
        return $this->typesFilter;
    }
    /**
     * @param PimProductSearchCursorRequestTypesFilter|null $typesFilter
     *
     * @return self
     */
    public function setTypesFilter(?PimProductSearchCursorRequestTypesFilter $typesFilter): self
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
     * @return PimProductSearchCursorRequestPublishStateFilter|null
     */
    public function getPublishStateFilter(): ?PimProductSearchCursorRequestPublishStateFilter
    {
        return $this->publishStateFilter;
    }
    /**
     * @param PimProductSearchCursorRequestPublishStateFilter|null $publishStateFilter
     *
     * @return self
     */
    public function setPublishStateFilter(?PimProductSearchCursorRequestPublishStateFilter $publishStateFilter): self
    {
        $this->initialized['publishStateFilter'] = true;
        $this->publishStateFilter = $publishStateFilter;
        return $this;
    }
    /**
     * @return PimProductSearchCursorRequestValidationStatusFilter|null
     */
    public function getValidationStatusFilter(): ?PimProductSearchCursorRequestValidationStatusFilter
    {
        return $this->validationStatusFilter;
    }
    /**
     * @param PimProductSearchCursorRequestValidationStatusFilter|null $validationStatusFilter
     *
     * @return self
     */
    public function setValidationStatusFilter(?PimProductSearchCursorRequestValidationStatusFilter $validationStatusFilter): self
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
     * @return PimProductSearchCursorRequestRelationsFilter|null
     */
    public function getRelationsFilter(): ?PimProductSearchCursorRequestRelationsFilter
    {
        return $this->relationsFilter;
    }
    /**
     * @param PimProductSearchCursorRequestRelationsFilter|null $relationsFilter
     *
     * @return self
     */
    public function setRelationsFilter(?PimProductSearchCursorRequestRelationsFilter $relationsFilter): self
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
     * @return PimProductSearchCursorRequestScoreFilter|null
     */
    public function getScoreFilter(): ?PimProductSearchCursorRequestScoreFilter
    {
        return $this->scoreFilter;
    }
    /**
     * @param PimProductSearchCursorRequestScoreFilter|null $scoreFilter
     *
     * @return self
     */
    public function setScoreFilter(?PimProductSearchCursorRequestScoreFilter $scoreFilter): self
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
     * @return PimProductSearchCursorRequestOutOfSyncFilter|null
     */
    public function getOutOfSyncFilter(): ?PimProductSearchCursorRequestOutOfSyncFilter
    {
        return $this->outOfSyncFilter;
    }
    /**
     * @param PimProductSearchCursorRequestOutOfSyncFilter|null $outOfSyncFilter
     *
     * @return self
     */
    public function setOutOfSyncFilter(?PimProductSearchCursorRequestOutOfSyncFilter $outOfSyncFilter): self
    {
        $this->initialized['outOfSyncFilter'] = true;
        $this->outOfSyncFilter = $outOfSyncFilter;
        return $this;
    }
    /**
     * @return PimProductSearchCursorRequestLastSyncStateFilter|null
     */
    public function getLastSyncStateFilter(): ?PimProductSearchCursorRequestLastSyncStateFilter
    {
        return $this->lastSyncStateFilter;
    }
    /**
     * @param PimProductSearchCursorRequestLastSyncStateFilter|null $lastSyncStateFilter
     *
     * @return self
     */
    public function setLastSyncStateFilter(?PimProductSearchCursorRequestLastSyncStateFilter $lastSyncStateFilter): self
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
        return ['count' => ['count', 'getCount', 'setCount'], 'cursor' => ['cursor', 'getCursor', 'setCursor'], 'typeFilter' => ['typeFilter', 'getTypeFilter', 'setTypeFilter'], 'typesFilter' => ['typesFilter', 'getTypesFilter', 'setTypesFilter'], 'productCreateDateFilter' => ['productCreateDateFilter', 'getProductCreateDateFilter', 'setProductCreateDateFilter'], 'productCreateDateRelativeFilter' => ['productCreateDateRelativeFilter', 'getProductCreateDateRelativeFilter', 'setProductCreateDateRelativeFilter'], 'productLastUpdateFilter' => ['productLastUpdateFilter', 'getProductLastUpdateFilter', 'setProductLastUpdateFilter'], 'productLastUpdateRelativeFilter' => ['productLastUpdateRelativeFilter', 'getProductLastUpdateRelativeFilter', 'setProductLastUpdateRelativeFilter'], 'baseFilters' => ['baseFilters', 'getBaseFilters', 'setBaseFilters'], 'publishStateFilter' => ['publishStateFilter', 'getPublishStateFilter', 'setPublishStateFilter'], 'validationStatusFilter' => ['validationStatusFilter', 'getValidationStatusFilter', 'setValidationStatusFilter'], 'attributeFilters' => ['attributeFilters', 'getAttributeFilters', 'setAttributeFilters'], 'labelFilters' => ['labelFilters', 'getLabelFilters', 'setLabelFilters'], 'relationsFilter' => ['relationsFilter', 'getRelationsFilter', 'setRelationsFilter'], 'assetFilters' => ['assetFilters', 'getAssetFilters', 'setAssetFilters'], 'variantFilters' => ['variantFilters', 'getVariantFilters', 'setVariantFilters'], 'bundleFilters' => ['bundleFilters', 'getBundleFilters', 'setBundleFilters'], 'categoryFilters' => ['categoryFilters', 'getCategoryFilters', 'setCategoryFilters'], 'scoreFilter' => ['scoreFilter', 'getScoreFilter', 'setScoreFilter'], 'scoreRequirementResultFilters' => ['scoreRequirementResultFilters', 'getScoreRequirementResultFilters', 'setScoreRequirementResultFilters'], 'outOfSyncFilter' => ['outOfSyncFilter', 'getOutOfSyncFilter', 'setOutOfSyncFilter'], 'lastSyncStateFilter' => ['lastSyncStateFilter', 'getLastSyncStateFilter', 'setLastSyncStateFilter'], 'groupFilters' => ['groupFilters', 'getGroupFilters', 'setGroupFilters']];
    }
}