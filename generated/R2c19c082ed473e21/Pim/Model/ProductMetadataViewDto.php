<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ProductMetadataViewDto implements AdditionalPropertiesInterface
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
     * @var bool|null
     */
    protected $archived;
    /**
     * @var int|null
     */
    protected $createDate;
    /**
     * @var MultiLanguageDto|null
     */
    protected $description;
    /**
     * @var string|null
     */
    protected $groupParentId;
    /**
     * @var int|null
     */
    protected $lastUpdate;
    /**
     * @var MultiLanguageDto|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $number;
    /**
     * @var bool|null
     */
    protected $readOnly;
    /**
     * @var string|null
     */
    protected $relatedProductsRelationSortingOrderSource;
    /**
     * @var bool|null
     */
    protected $toBeRemoved;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $variantParentId;
    /**
     * @return bool|null
     */
    public function getArchived(): ?bool
    {
        return $this->archived;
    }
    /**
     * @param bool|null $archived
     *
     * @return self
     */
    public function setArchived(?bool $archived): self
    {
        $this->initialized['archived'] = true;
        $this->archived = $archived;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getCreateDate(): ?int
    {
        return $this->createDate;
    }
    /**
     * @param int|null $createDate
     *
     * @return self
     */
    public function setCreateDate(?int $createDate): self
    {
        $this->initialized['createDate'] = true;
        $this->createDate = $createDate;
        return $this;
    }
    /**
     * @return MultiLanguageDto|null
     */
    public function getDescription(): ?MultiLanguageDto
    {
        return $this->description;
    }
    /**
     * @param MultiLanguageDto|null $description
     *
     * @return self
     */
    public function setDescription(?MultiLanguageDto $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getGroupParentId(): ?string
    {
        return $this->groupParentId;
    }
    /**
     * @param string|null $groupParentId
     *
     * @return self
     */
    public function setGroupParentId(?string $groupParentId): self
    {
        $this->initialized['groupParentId'] = true;
        $this->groupParentId = $groupParentId;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getLastUpdate(): ?int
    {
        return $this->lastUpdate;
    }
    /**
     * @param int|null $lastUpdate
     *
     * @return self
     */
    public function setLastUpdate(?int $lastUpdate): self
    {
        $this->initialized['lastUpdate'] = true;
        $this->lastUpdate = $lastUpdate;
        return $this;
    }
    /**
     * @return MultiLanguageDto|null
     */
    public function getName(): ?MultiLanguageDto
    {
        return $this->name;
    }
    /**
     * @param MultiLanguageDto|null $name
     *
     * @return self
     */
    public function setName(?MultiLanguageDto $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }
    /**
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getReadOnly(): ?bool
    {
        return $this->readOnly;
    }
    /**
     * @param bool|null $readOnly
     *
     * @return self
     */
    public function setReadOnly(?bool $readOnly): self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getRelatedProductsRelationSortingOrderSource(): ?string
    {
        return $this->relatedProductsRelationSortingOrderSource;
    }
    /**
     * @param string|null $relatedProductsRelationSortingOrderSource
     *
     * @return self
     */
    public function setRelatedProductsRelationSortingOrderSource(?string $relatedProductsRelationSortingOrderSource): self
    {
        $this->initialized['relatedProductsRelationSortingOrderSource'] = true;
        $this->relatedProductsRelationSortingOrderSource = $relatedProductsRelationSortingOrderSource;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getToBeRemoved(): ?bool
    {
        return $this->toBeRemoved;
    }
    /**
     * @param bool|null $toBeRemoved
     *
     * @return self
     */
    public function setToBeRemoved(?bool $toBeRemoved): self
    {
        $this->initialized['toBeRemoved'] = true;
        $this->toBeRemoved = $toBeRemoved;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getVariantParentId(): ?string
    {
        return $this->variantParentId;
    }
    /**
     * @param string|null $variantParentId
     *
     * @return self
     */
    public function setVariantParentId(?string $variantParentId): self
    {
        $this->initialized['variantParentId'] = true;
        $this->variantParentId = $variantParentId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['archived' => ['archived', 'getArchived', 'setArchived'], 'createDate' => ['createDate', 'getCreateDate', 'setCreateDate'], 'description' => ['description', 'getDescription', 'setDescription'], 'groupParentId' => ['groupParentId', 'getGroupParentId', 'setGroupParentId'], 'lastUpdate' => ['lastUpdate', 'getLastUpdate', 'setLastUpdate'], 'name' => ['name', 'getName', 'setName'], 'number' => ['number', 'getNumber', 'setNumber'], 'readOnly' => ['readOnly', 'getReadOnly', 'setReadOnly'], 'relatedProductsRelationSortingOrderSource' => ['relatedProductsRelationSortingOrderSource', 'getRelatedProductsRelationSortingOrderSource', 'setRelatedProductsRelationSortingOrderSource'], 'toBeRemoved' => ['toBeRemoved', 'getToBeRemoved', 'setToBeRemoved'], 'type' => ['type', 'getType', 'setType'], 'variantParentId' => ['variantParentId', 'getVariantParentId', 'setVariantParentId']];
    }
}