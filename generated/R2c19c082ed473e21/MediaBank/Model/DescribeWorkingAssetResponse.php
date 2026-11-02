<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class DescribeWorkingAssetResponse implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $number;
    /**
     * @var DescribeMediaInfoWorkingAssetResponse
     */
    protected $mediaInfo;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var list<string>
     */
    protected $labels;
    /**
     * @var list<string>
     */
    protected $products;
    /**
     * @var list<string>
     */
    protected $categories;
    /**
     * @var string
     */
    protected $fileName;
    /**
     * @var int
     */
    protected $createdAt;
    /**
     * @var int
     */
    protected $updatedAt;
    /**
     * @var string
     */
    protected $createdBy;
    /**
     * @var bool
     */
    protected $internal;
    /**
     * @var bool
     */
    protected $published;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
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
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
    /**
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
     * @return DescribeMediaInfoWorkingAssetResponse
     */
    public function getMediaInfo(): DescribeMediaInfoWorkingAssetResponse
    {
        return $this->mediaInfo;
    }
    /**
     * @param DescribeMediaInfoWorkingAssetResponse $mediaInfo
     *
     * @return self
     */
    public function setMediaInfo(DescribeMediaInfoWorkingAssetResponse $mediaInfo): self
    {
        $this->initialized['mediaInfo'] = true;
        $this->mediaInfo = $mediaInfo;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
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
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
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
     * @return list<string>
     */
    public function getLabels(): array
    {
        return $this->labels;
    }
    /**
     * @param list<string> $labels
     *
     * @return self
     */
    public function setLabels(array $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getProducts(): array
    {
        return $this->products;
    }
    /**
     * @param list<string> $products
     *
     * @return self
     */
    public function setProducts(array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getCategories(): array
    {
        return $this->categories;
    }
    /**
     * @param list<string> $categories
     *
     * @return self
     */
    public function setCategories(array $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;
        return $this;
    }
    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }
    /**
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName(string $fileName): self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * @return int
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }
    /**
     * @param int $createdAt
     *
     * @return self
     */
    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return int
     */
    public function getUpdatedAt(): int
    {
        return $this->updatedAt;
    }
    /**
     * @param int $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(int $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }
    /**
     * @param string $createdBy
     *
     * @return self
     */
    public function setCreatedBy(string $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * @return bool
     */
    public function getInternal(): bool
    {
        return $this->internal;
    }
    /**
     * @param bool $internal
     *
     * @return self
     */
    public function setInternal(bool $internal): self
    {
        $this->initialized['internal'] = true;
        $this->internal = $internal;
        return $this;
    }
    /**
     * @return bool
     */
    public function getPublished(): bool
    {
        return $this->published;
    }
    /**
     * @param bool $published
     *
     * @return self
     */
    public function setPublished(bool $published): self
    {
        $this->initialized['published'] = true;
        $this->published = $published;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'number' => ['number', 'getNumber', 'setNumber'], 'mediaInfo' => ['mediaInfo', 'getMediaInfo', 'setMediaInfo'], 'name' => ['name', 'getName', 'setName'], 'description' => ['description', 'getDescription', 'setDescription'], 'labels' => ['labels', 'getLabels', 'setLabels'], 'products' => ['products', 'getProducts', 'setProducts'], 'categories' => ['categories', 'getCategories', 'setCategories'], 'fileName' => ['fileName', 'getFileName', 'setFileName'], 'createdAt' => ['createdAt', 'getCreatedAt', 'setCreatedAt'], 'updatedAt' => ['updatedAt', 'getUpdatedAt', 'setUpdatedAt'], 'createdBy' => ['createdBy', 'getCreatedBy', 'setCreatedBy'], 'internal' => ['internal', 'getInternal', 'setInternal'], 'published' => ['published', 'getPublished', 'setPublished']];
    }
}