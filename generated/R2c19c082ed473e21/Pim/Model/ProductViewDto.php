<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ProductViewDto implements AdditionalPropertiesInterface
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
     * @var list<ProductAttributeViewDto>|null
     */
    protected $attributes;
    /**
     * @var list<string>|null
     */
    protected $categories;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var list<string>|null
     */
    protected $labels;
    /**
     * @var ProductMetadataViewDto|null
     */
    protected $metadata;
    /**
     * @var list<ProductBundleDto>|null
     */
    protected $productBundles;
    /**
     * @var list<string>|null
     */
    protected $productGroups;
    /**
     * @var list<string>|null
     */
    protected $productVariants;
    /**
     * @var list<ConnectionDto>|null
     */
    protected $relatedCategories;
    /**
     * @var list<ConnectionDto>|null
     */
    protected $relatedProducts;
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
     * @return list<ProductAttributeViewDto>|null
     */
    public function getAttributes(): ?array
    {
        return $this->attributes;
    }
    /**
     * @param list<ProductAttributeViewDto>|null $attributes
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
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
     * @return ProductMetadataViewDto|null
     */
    public function getMetadata(): ?ProductMetadataViewDto
    {
        return $this->metadata;
    }
    /**
     * @param ProductMetadataViewDto|null $metadata
     *
     * @return self
     */
    public function setMetadata(?ProductMetadataViewDto $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * @return list<ProductBundleDto>|null
     */
    public function getProductBundles(): ?array
    {
        return $this->productBundles;
    }
    /**
     * @param list<ProductBundleDto>|null $productBundles
     *
     * @return self
     */
    public function setProductBundles(?array $productBundles): self
    {
        $this->initialized['productBundles'] = true;
        $this->productBundles = $productBundles;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getProductGroups(): ?array
    {
        return $this->productGroups;
    }
    /**
     * @param list<string>|null $productGroups
     *
     * @return self
     */
    public function setProductGroups(?array $productGroups): self
    {
        $this->initialized['productGroups'] = true;
        $this->productGroups = $productGroups;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getProductVariants(): ?array
    {
        return $this->productVariants;
    }
    /**
     * @param list<string>|null $productVariants
     *
     * @return self
     */
    public function setProductVariants(?array $productVariants): self
    {
        $this->initialized['productVariants'] = true;
        $this->productVariants = $productVariants;
        return $this;
    }
    /**
     * @return list<ConnectionDto>|null
     */
    public function getRelatedCategories(): ?array
    {
        return $this->relatedCategories;
    }
    /**
     * @param list<ConnectionDto>|null $relatedCategories
     *
     * @return self
     */
    public function setRelatedCategories(?array $relatedCategories): self
    {
        $this->initialized['relatedCategories'] = true;
        $this->relatedCategories = $relatedCategories;
        return $this;
    }
    /**
     * @return list<ConnectionDto>|null
     */
    public function getRelatedProducts(): ?array
    {
        return $this->relatedProducts;
    }
    /**
     * @param list<ConnectionDto>|null $relatedProducts
     *
     * @return self
     */
    public function setRelatedProducts(?array $relatedProducts): self
    {
        $this->initialized['relatedProducts'] = true;
        $this->relatedProducts = $relatedProducts;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['assets' => ['assets', 'getAssets', 'setAssets'], 'attributes' => ['attributes', 'getAttributes', 'setAttributes'], 'categories' => ['categories', 'getCategories', 'setCategories'], 'id' => ['id', 'getId', 'setId'], 'labels' => ['labels', 'getLabels', 'setLabels'], 'metadata' => ['metadata', 'getMetadata', 'setMetadata'], 'productBundles' => ['productBundles', 'getProductBundles', 'setProductBundles'], 'productGroups' => ['productGroups', 'getProductGroups', 'setProductGroups'], 'productVariants' => ['productVariants', 'getProductVariants', 'setProductVariants'], 'relatedCategories' => ['relatedCategories', 'getRelatedCategories', 'setRelatedCategories'], 'relatedProducts' => ['relatedProducts', 'getRelatedProducts', 'setRelatedProducts']];
    }
}