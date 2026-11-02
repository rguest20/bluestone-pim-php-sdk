<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class MediabankAssetCountRequestAsset implements AdditionalPropertiesInterface
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
    protected $uploader;
    /**
     * @var bool|null
     */
    protected $internal;
    /**
     * @var bool|null
     */
    protected $published;
    /**
     * @var MediabankAssetsParamsIdsParams|null
     */
    protected $idsParams;
    /**
     * @var MediabankAssetsParamsNumbersParams|null
     */
    protected $numbersParams;
    /**
     * @var MediabankAssetsParamsNameParams|null
     */
    protected $nameParams;
    /**
     * @var MediabankAssetsParamsDescriptionParams|null
     */
    protected $descriptionParams;
    /**
     * @var MediabankAssetsParamsProductsParams|null
     */
    protected $productsParams;
    /**
     * @var MediabankAssetsParamsCategoriesParams|null
     */
    protected $categoriesParams;
    /**
     * @var MediabankAssetsParamsLabelsParams|null
     */
    protected $labelsParams;
    /**
     * @var MediabankAssetsParamsFileParams|null
     */
    protected $fileParams;
    /**
     * @var MediabankAssetsParamsCreated|null
     */
    protected $created;
    /**
     * @var MediabankAssetsParamsUpdated|null
     */
    protected $updated;
    /**
     * @var MediabankAssetsParamsCreatedRelative|null
     */
    protected $createdRelative;
    /**
     * @var MediabankAssetsParamsUpdatedRelative|null
     */
    protected $updatedRelative;
    /**
     * Asset attribute filters.
     *
     * @var list<AttributeFilter>|null
     */
    protected $attributeFilters;
    /**
     * @return string|null
     */
    public function getUploader(): ?string
    {
        return $this->uploader;
    }
    /**
     * @param string|null $uploader
     *
     * @return self
     */
    public function setUploader(?string $uploader): self
    {
        $this->initialized['uploader'] = true;
        $this->uploader = $uploader;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getInternal(): ?bool
    {
        return $this->internal;
    }
    /**
     * @param bool|null $internal
     *
     * @return self
     */
    public function setInternal(?bool $internal): self
    {
        $this->initialized['internal'] = true;
        $this->internal = $internal;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getPublished(): ?bool
    {
        return $this->published;
    }
    /**
     * @param bool|null $published
     *
     * @return self
     */
    public function setPublished(?bool $published): self
    {
        $this->initialized['published'] = true;
        $this->published = $published;
        return $this;
    }
    /**
     * @return MediabankAssetsParamsIdsParams|null
     */
    public function getIdsParams(): ?MediabankAssetsParamsIdsParams
    {
        return $this->idsParams;
    }
    /**
     * @param MediabankAssetsParamsIdsParams|null $idsParams
     *
     * @return self
     */
    public function setIdsParams(?MediabankAssetsParamsIdsParams $idsParams): self
    {
        $this->initialized['idsParams'] = true;
        $this->idsParams = $idsParams;
        return $this;
    }
    /**
     * @return MediabankAssetsParamsNumbersParams|null
     */
    public function getNumbersParams(): ?MediabankAssetsParamsNumbersParams
    {
        return $this->numbersParams;
    }
    /**
     * @param MediabankAssetsParamsNumbersParams|null $numbersParams
     *
     * @return self
     */
    public function setNumbersParams(?MediabankAssetsParamsNumbersParams $numbersParams): self
    {
        $this->initialized['numbersParams'] = true;
        $this->numbersParams = $numbersParams;
        return $this;
    }
    /**
     * @return MediabankAssetsParamsNameParams|null
     */
    public function getNameParams(): ?MediabankAssetsParamsNameParams
    {
        return $this->nameParams;
    }
    /**
     * @param MediabankAssetsParamsNameParams|null $nameParams
     *
     * @return self
     */
    public function setNameParams(?MediabankAssetsParamsNameParams $nameParams): self
    {
        $this->initialized['nameParams'] = true;
        $this->nameParams = $nameParams;
        return $this;
    }
    /**
     * @return MediabankAssetsParamsDescriptionParams|null
     */
    public function getDescriptionParams(): ?MediabankAssetsParamsDescriptionParams
    {
        return $this->descriptionParams;
    }
    /**
     * @param MediabankAssetsParamsDescriptionParams|null $descriptionParams
     *
     * @return self
     */
    public function setDescriptionParams(?MediabankAssetsParamsDescriptionParams $descriptionParams): self
    {
        $this->initialized['descriptionParams'] = true;
        $this->descriptionParams = $descriptionParams;
        return $this;
    }
    /**
     * @return MediabankAssetsParamsProductsParams|null
     */
    public function getProductsParams(): ?MediabankAssetsParamsProductsParams
    {
        return $this->productsParams;
    }
    /**
     * @param MediabankAssetsParamsProductsParams|null $productsParams
     *
     * @return self
     */
    public function setProductsParams(?MediabankAssetsParamsProductsParams $productsParams): self
    {
        $this->initialized['productsParams'] = true;
        $this->productsParams = $productsParams;
        return $this;
    }
    /**
     * @return MediabankAssetsParamsCategoriesParams|null
     */
    public function getCategoriesParams(): ?MediabankAssetsParamsCategoriesParams
    {
        return $this->categoriesParams;
    }
    /**
     * @param MediabankAssetsParamsCategoriesParams|null $categoriesParams
     *
     * @return self
     */
    public function setCategoriesParams(?MediabankAssetsParamsCategoriesParams $categoriesParams): self
    {
        $this->initialized['categoriesParams'] = true;
        $this->categoriesParams = $categoriesParams;
        return $this;
    }
    /**
     * @return MediabankAssetsParamsLabelsParams|null
     */
    public function getLabelsParams(): ?MediabankAssetsParamsLabelsParams
    {
        return $this->labelsParams;
    }
    /**
     * @param MediabankAssetsParamsLabelsParams|null $labelsParams
     *
     * @return self
     */
    public function setLabelsParams(?MediabankAssetsParamsLabelsParams $labelsParams): self
    {
        $this->initialized['labelsParams'] = true;
        $this->labelsParams = $labelsParams;
        return $this;
    }
    /**
     * @return MediabankAssetsParamsFileParams|null
     */
    public function getFileParams(): ?MediabankAssetsParamsFileParams
    {
        return $this->fileParams;
    }
    /**
     * @param MediabankAssetsParamsFileParams|null $fileParams
     *
     * @return self
     */
    public function setFileParams(?MediabankAssetsParamsFileParams $fileParams): self
    {
        $this->initialized['fileParams'] = true;
        $this->fileParams = $fileParams;
        return $this;
    }
    /**
     * @return MediabankAssetsParamsCreated|null
     */
    public function getCreated(): ?MediabankAssetsParamsCreated
    {
        return $this->created;
    }
    /**
     * @param MediabankAssetsParamsCreated|null $created
     *
     * @return self
     */
    public function setCreated(?MediabankAssetsParamsCreated $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }
    /**
     * @return MediabankAssetsParamsUpdated|null
     */
    public function getUpdated(): ?MediabankAssetsParamsUpdated
    {
        return $this->updated;
    }
    /**
     * @param MediabankAssetsParamsUpdated|null $updated
     *
     * @return self
     */
    public function setUpdated(?MediabankAssetsParamsUpdated $updated): self
    {
        $this->initialized['updated'] = true;
        $this->updated = $updated;
        return $this;
    }
    /**
     * @return MediabankAssetsParamsCreatedRelative|null
     */
    public function getCreatedRelative(): ?MediabankAssetsParamsCreatedRelative
    {
        return $this->createdRelative;
    }
    /**
     * @param MediabankAssetsParamsCreatedRelative|null $createdRelative
     *
     * @return self
     */
    public function setCreatedRelative(?MediabankAssetsParamsCreatedRelative $createdRelative): self
    {
        $this->initialized['createdRelative'] = true;
        $this->createdRelative = $createdRelative;
        return $this;
    }
    /**
     * @return MediabankAssetsParamsUpdatedRelative|null
     */
    public function getUpdatedRelative(): ?MediabankAssetsParamsUpdatedRelative
    {
        return $this->updatedRelative;
    }
    /**
     * @param MediabankAssetsParamsUpdatedRelative|null $updatedRelative
     *
     * @return self
     */
    public function setUpdatedRelative(?MediabankAssetsParamsUpdatedRelative $updatedRelative): self
    {
        $this->initialized['updatedRelative'] = true;
        $this->updatedRelative = $updatedRelative;
        return $this;
    }
    /**
     * Asset attribute filters.
     *
     * @return list<AttributeFilter>|null
     */
    public function getAttributeFilters(): ?array
    {
        return $this->attributeFilters;
    }
    /**
     * Asset attribute filters.
     *
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
    public function definedProperties(): array
    {
        return ['uploader' => ['uploader', 'getUploader', 'setUploader'], 'internal' => ['internal', 'getInternal', 'setInternal'], 'published' => ['published', 'getPublished', 'setPublished'], 'idsParams' => ['idsParams', 'getIdsParams', 'setIdsParams'], 'numbersParams' => ['numbersParams', 'getNumbersParams', 'setNumbersParams'], 'nameParams' => ['nameParams', 'getNameParams', 'setNameParams'], 'descriptionParams' => ['descriptionParams', 'getDescriptionParams', 'setDescriptionParams'], 'productsParams' => ['productsParams', 'getProductsParams', 'setProductsParams'], 'categoriesParams' => ['categoriesParams', 'getCategoriesParams', 'setCategoriesParams'], 'labelsParams' => ['labelsParams', 'getLabelsParams', 'setLabelsParams'], 'fileParams' => ['fileParams', 'getFileParams', 'setFileParams'], 'created' => ['created', 'getCreated', 'setCreated'], 'updated' => ['updated', 'getUpdated', 'setUpdated'], 'createdRelative' => ['createdRelative', 'getCreatedRelative', 'setCreatedRelative'], 'updatedRelative' => ['updatedRelative', 'getUpdatedRelative', 'setUpdatedRelative'], 'attributeFilters' => ['attributeFilters', 'getAttributeFilters', 'setAttributeFilters']];
    }
}