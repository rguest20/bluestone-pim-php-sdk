<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model;

class Category
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
     * id of the category.
     *
     * @var string
     */
    protected $id;
    /**
     * id of parent category.
     *
     * @var string
     */
    protected $parentId;
    /**
     * order of category in parent category.
     *
     * @var float
     */
    protected $order;
    /**
     * Category name.
     *
     * @var string
     */
    protected $name;
    /**
     * Category number.
     *
     * @var string
     */
    protected $number;
    /**
     * Category description.
     *
     * @var string
     */
    protected $description;
    /**
     * Category media assets.
     *
     * @var list<CategoryMediaAsset>
     */
    protected $media;
    /**
     * Category level attributes.
     *
     * @var list<Attribute>
     */
    protected $attributes;
    /**
     * Local category attributes.
     *
     * @var list<CategoryAttribute>
     */
    protected $categoryAttributes;
    /**
     * Any metadata.
     *
     * @var list<MetaData>
     */
    protected $metaData;
    /**
     * A set of sub categories.
     *
     * @var list<Category>
     */
    protected $subCategories;
    /**
     * id of the category.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * id of the category.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * id of parent category.
     *
     * @return string
     */
    public function getParentId(): string
    {
        return $this->parentId;
    }
    /**
     * id of parent category.
     *
     * @param string $parentId
     *
     * @return self
     */
    public function setParentId(string $parentId): self
    {
        $this->initialized['parentId'] = true;
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * order of category in parent category.
     *
     * @return float
     */
    public function getOrder(): float
    {
        return $this->order;
    }
    /**
     * order of category in parent category.
     *
     * @param float $order
     *
     * @return self
     */
    public function setOrder(float $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
    /**
     * Category name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Category name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Category number.
     *
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
    /**
     * Category number.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * Category description.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Category description.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Category media assets.
     *
     * @return list<CategoryMediaAsset>
     */
    public function getMedia(): array
    {
        return $this->media;
    }
    /**
     * Category media assets.
     *
     * @param list<CategoryMediaAsset> $media
     *
     * @return self
     */
    public function setMedia(array $media): self
    {
        $this->initialized['media'] = true;
        $this->media = $media;
        return $this;
    }
    /**
     * Category level attributes.
     *
     * @return list<Attribute>
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }
    /**
     * Category level attributes.
     *
     * @param list<Attribute> $attributes
     *
     * @return self
     */
    public function setAttributes(array $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;
        return $this;
    }
    /**
     * Local category attributes.
     *
     * @return list<CategoryAttribute>
     */
    public function getCategoryAttributes(): array
    {
        return $this->categoryAttributes;
    }
    /**
     * Local category attributes.
     *
     * @param list<CategoryAttribute> $categoryAttributes
     *
     * @return self
     */
    public function setCategoryAttributes(array $categoryAttributes): self
    {
        $this->initialized['categoryAttributes'] = true;
        $this->categoryAttributes = $categoryAttributes;
        return $this;
    }
    /**
     * Any metadata.
     *
     * @return list<MetaData>
     */
    public function getMetaData(): array
    {
        return $this->metaData;
    }
    /**
     * Any metadata.
     *
     * @param list<MetaData> $metaData
     *
     * @return self
     */
    public function setMetaData(array $metaData): self
    {
        $this->initialized['metaData'] = true;
        $this->metaData = $metaData;
        return $this;
    }
    /**
     * A set of sub categories.
     *
     * @return list<Category>
     */
    public function getSubCategories(): array
    {
        return $this->subCategories;
    }
    /**
     * A set of sub categories.
     *
     * @param list<Category> $subCategories
     *
     * @return self
     */
    public function setSubCategories(array $subCategories): self
    {
        $this->initialized['subCategories'] = true;
        $this->subCategories = $subCategories;
        return $this;
    }
}