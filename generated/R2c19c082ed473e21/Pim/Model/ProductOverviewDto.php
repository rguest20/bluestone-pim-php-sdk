<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ProductOverviewDto implements AdditionalPropertiesInterface
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
     * @var CountDto
     */
    protected $assets;
    /**
     * @var CountDto
     */
    protected $attributes;
    /**
     * @var CountDto
     */
    protected $categories;
    /**
     * @var CountDto
     */
    protected $productBundles;
    /**
     * @var CountDto
     */
    protected $productVariants;
    /**
     * @var CountDto
     */
    protected $relatedProducts;
    /**
     * @return CountDto
     */
    public function getAssets(): CountDto
    {
        return $this->assets;
    }
    /**
     * @param CountDto $assets
     *
     * @return self
     */
    public function setAssets(CountDto $assets): self
    {
        $this->initialized['assets'] = true;
        $this->assets = $assets;
        return $this;
    }
    /**
     * @return CountDto
     */
    public function getAttributes(): CountDto
    {
        return $this->attributes;
    }
    /**
     * @param CountDto $attributes
     *
     * @return self
     */
    public function setAttributes(CountDto $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;
        return $this;
    }
    /**
     * @return CountDto
     */
    public function getCategories(): CountDto
    {
        return $this->categories;
    }
    /**
     * @param CountDto $categories
     *
     * @return self
     */
    public function setCategories(CountDto $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;
        return $this;
    }
    /**
     * @return CountDto
     */
    public function getProductBundles(): CountDto
    {
        return $this->productBundles;
    }
    /**
     * @param CountDto $productBundles
     *
     * @return self
     */
    public function setProductBundles(CountDto $productBundles): self
    {
        $this->initialized['productBundles'] = true;
        $this->productBundles = $productBundles;
        return $this;
    }
    /**
     * @return CountDto
     */
    public function getProductVariants(): CountDto
    {
        return $this->productVariants;
    }
    /**
     * @param CountDto $productVariants
     *
     * @return self
     */
    public function setProductVariants(CountDto $productVariants): self
    {
        $this->initialized['productVariants'] = true;
        $this->productVariants = $productVariants;
        return $this;
    }
    /**
     * @return CountDto
     */
    public function getRelatedProducts(): CountDto
    {
        return $this->relatedProducts;
    }
    /**
     * @param CountDto $relatedProducts
     *
     * @return self
     */
    public function setRelatedProducts(CountDto $relatedProducts): self
    {
        $this->initialized['relatedProducts'] = true;
        $this->relatedProducts = $relatedProducts;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['assets' => ['assets', 'getAssets', 'setAssets'], 'attributes' => ['attributes', 'getAttributes', 'setAttributes'], 'categories' => ['categories', 'getCategories', 'setCategories'], 'productBundles' => ['productBundles', 'getProductBundles', 'setProductBundles'], 'productVariants' => ['productVariants', 'getProductVariants', 'setProductVariants'], 'relatedProducts' => ['relatedProducts', 'getRelatedProducts', 'setRelatedProducts']];
    }
}