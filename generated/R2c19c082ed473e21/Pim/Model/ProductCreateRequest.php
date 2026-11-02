<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ProductCreateRequest implements AdditionalPropertiesInterface
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
     * @var list<string>|null
     */
    protected $assets;
    /**
     * @var list<ProductAttributeValue>|null
     */
    protected $attributes;
    /**
     * @var list<string>|null
     */
    protected $categories;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var list<string>|null
     */
    protected $labels;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $number;
    /**
     * @var string|null
     */
    protected $relatedProductsRelationSortingOrderSource;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @return list<string>|null
     */
    public function getAssets(): ?array
    {
        return $this->assets;
    }
    /**
     * @param list<string>|null $assets
     *
     * @return self
     */
    public function setAssets(?array $assets): self
    {
        $this->initialized['assets'] = true;
        $this->assets = $assets;
        return $this;
    }
    /**
     * @return list<ProductAttributeValue>|null
     */
    public function getAttributes(): ?array
    {
        return $this->attributes;
    }
    /**
     * @param list<ProductAttributeValue>|null $attributes
     *
     * @return self
     */
    public function setAttributes(?array $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }
    /**
     * @param list<string>|null $categories
     *
     * @return self
     */
    public function setCategories(?array $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }
    /**
     * @param list<string>|null $labels
     *
     * @return self
     */
    public function setLabels(?array $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
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
    public function definedProperties(): array
    {
        return ['assets' => ['assets', 'getAssets', 'setAssets'], 'attributes' => ['attributes', 'getAttributes', 'setAttributes'], 'categories' => ['categories', 'getCategories', 'setCategories'], 'description' => ['description', 'getDescription', 'setDescription'], 'labels' => ['labels', 'getLabels', 'setLabels'], 'name' => ['name', 'getName', 'setName'], 'number' => ['number', 'getNumber', 'setNumber'], 'relatedProductsRelationSortingOrderSource' => ['relatedProductsRelationSortingOrderSource', 'getRelatedProductsRelationSortingOrderSource', 'setRelatedProductsRelationSortingOrderSource'], 'type' => ['type', 'getType', 'setType']];
    }
}