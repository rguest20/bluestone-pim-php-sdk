<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class PimProductCountRequest implements AdditionalPropertiesInterface
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
     * @var PimProductCountRequestTypeFilter|null
     */
    protected $typeFilter;
    /**
     * @var PimProductCountRequestTypesFilter|null
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
     * @var PimProductCountRequestPublishStateFilter|null
     */
    protected $publishStateFilter;
    /**
     * @var PimProductCountRequestValidationStatusFilter|null
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
     * @var PimProductCountRequestRelationsFilter|null
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
     * @var PimProductCountRequestScoreFilter|null
     */
    protected $scoreFilter;
    /**
     * @var list<ScoreRequirementResultFilter>|null
     */
    protected $scoreRequirementResultFilters;
    /**
     * @var PimProductCountRequestOutOfSyncFilter|null
     */
    protected $outOfSyncFilter;
    /**
     * @var PimProductCountRequestLastSyncStateFilter|null
     */
    protected $lastSyncStateFilter;
    /**
     * @var list<GroupFilter>|null
     */
    protected $groupFilters;
    /**
     * @return PimProductCountRequestTypeFilter|null
     */
    public function getTypeFilter(): ?PimProductCountRequestTypeFilter
    {
        return $this->typeFilter;
    }
    /**
     * @param PimProductCountRequestTypeFilter|null $typeFilter
     *
     * @return self
     */
    public function setTypeFilter(?PimProductCountRequestTypeFilter $typeFilter): self
    {
        $this->initialized['typeFilter'] = true;
        $this->typeFilter = $typeFilter;
        return $this;
    }
    /**
     * @return PimProductCountRequestTypesFilter|null
     */
    public function getTypesFilter(): ?PimProductCountRequestTypesFilter
    {
        return $this->typesFilter;
    }
    /**
     * @param PimProductCountRequestTypesFilter|null $typesFilter
     *
     * @return self
     */
    public function setTypesFilter(?PimProductCountRequestTypesFilter $typesFilter): self
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
     * @return PimProductCountRequestPublishStateFilter|null
     */
    public function getPublishStateFilter(): ?PimProductCountRequestPublishStateFilter
    {
        return $this->publishStateFilter;
    }
    /**
     * @param PimProductCountRequestPublishStateFilter|null $publishStateFilter
     *
     * @return self
     */
    public function setPublishStateFilter(?PimProductCountRequestPublishStateFilter $publishStateFilter): self
    {
        $this->initialized['publishStateFilter'] = true;
        $this->publishStateFilter = $publishStateFilter;
        return $this;
    }
    /**
     * @return PimProductCountRequestValidationStatusFilter|null
     */
    public function getValidationStatusFilter(): ?PimProductCountRequestValidationStatusFilter
    {
        return $this->validationStatusFilter;
    }
    /**
     * @param PimProductCountRequestValidationStatusFilter|null $validationStatusFilter
     *
     * @return self
     */
    public function setValidationStatusFilter(?PimProductCountRequestValidationStatusFilter $validationStatusFilter): self
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
     * @return PimProductCountRequestRelationsFilter|null
     */
    public function getRelationsFilter(): ?PimProductCountRequestRelationsFilter
    {
        return $this->relationsFilter;
    }
    /**
     * @param PimProductCountRequestRelationsFilter|null $relationsFilter
     *
     * @return self
     */
    public function setRelationsFilter(?PimProductCountRequestRelationsFilter $relationsFilter): self
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
     * @return PimProductCountRequestScoreFilter|null
     */
    public function getScoreFilter(): ?PimProductCountRequestScoreFilter
    {
        return $this->scoreFilter;
    }
    /**
     * @param PimProductCountRequestScoreFilter|null $scoreFilter
     *
     * @return self
     */
    public function setScoreFilter(?PimProductCountRequestScoreFilter $scoreFilter): self
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
     * @return PimProductCountRequestOutOfSyncFilter|null
     */
    public function getOutOfSyncFilter(): ?PimProductCountRequestOutOfSyncFilter
    {
        return $this->outOfSyncFilter;
    }
    /**
     * @param PimProductCountRequestOutOfSyncFilter|null $outOfSyncFilter
     *
     * @return self
     */
    public function setOutOfSyncFilter(?PimProductCountRequestOutOfSyncFilter $outOfSyncFilter): self
    {
        $this->initialized['outOfSyncFilter'] = true;
        $this->outOfSyncFilter = $outOfSyncFilter;
        return $this;
    }
    /**
     * @return PimProductCountRequestLastSyncStateFilter|null
     */
    public function getLastSyncStateFilter(): ?PimProductCountRequestLastSyncStateFilter
    {
        return $this->lastSyncStateFilter;
    }
    /**
     * @param PimProductCountRequestLastSyncStateFilter|null $lastSyncStateFilter
     *
     * @return self
     */
    public function setLastSyncStateFilter(?PimProductCountRequestLastSyncStateFilter $lastSyncStateFilter): self
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
        return ['typeFilter' => ['typeFilter', 'getTypeFilter', 'setTypeFilter'], 'typesFilter' => ['typesFilter', 'getTypesFilter', 'setTypesFilter'], 'productCreateDateFilter' => ['productCreateDateFilter', 'getProductCreateDateFilter', 'setProductCreateDateFilter'], 'productCreateDateRelativeFilter' => ['productCreateDateRelativeFilter', 'getProductCreateDateRelativeFilter', 'setProductCreateDateRelativeFilter'], 'productLastUpdateFilter' => ['productLastUpdateFilter', 'getProductLastUpdateFilter', 'setProductLastUpdateFilter'], 'productLastUpdateRelativeFilter' => ['productLastUpdateRelativeFilter', 'getProductLastUpdateRelativeFilter', 'setProductLastUpdateRelativeFilter'], 'baseFilters' => ['baseFilters', 'getBaseFilters', 'setBaseFilters'], 'publishStateFilter' => ['publishStateFilter', 'getPublishStateFilter', 'setPublishStateFilter'], 'validationStatusFilter' => ['validationStatusFilter', 'getValidationStatusFilter', 'setValidationStatusFilter'], 'attributeFilters' => ['attributeFilters', 'getAttributeFilters', 'setAttributeFilters'], 'labelFilters' => ['labelFilters', 'getLabelFilters', 'setLabelFilters'], 'relationsFilter' => ['relationsFilter', 'getRelationsFilter', 'setRelationsFilter'], 'assetFilters' => ['assetFilters', 'getAssetFilters', 'setAssetFilters'], 'variantFilters' => ['variantFilters', 'getVariantFilters', 'setVariantFilters'], 'bundleFilters' => ['bundleFilters', 'getBundleFilters', 'setBundleFilters'], 'categoryFilters' => ['categoryFilters', 'getCategoryFilters', 'setCategoryFilters'], 'scoreFilter' => ['scoreFilter', 'getScoreFilter', 'setScoreFilter'], 'scoreRequirementResultFilters' => ['scoreRequirementResultFilters', 'getScoreRequirementResultFilters', 'setScoreRequirementResultFilters'], 'outOfSyncFilter' => ['outOfSyncFilter', 'getOutOfSyncFilter', 'setOutOfSyncFilter'], 'lastSyncStateFilter' => ['lastSyncStateFilter', 'getLastSyncStateFilter', 'setLastSyncStateFilter'], 'groupFilters' => ['groupFilters', 'getGroupFilters', 'setGroupFilters']];
    }
}