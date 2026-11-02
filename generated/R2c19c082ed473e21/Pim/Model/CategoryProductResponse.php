<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class CategoryProductResponse implements AdditionalPropertiesInterface
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
     * ID of product that is assigned to the catalog/category (catalog node).
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @var string|null
     */
    protected $productId;
    /**
     * Name of product that is assigned to the catalog/category (catalog node).
     *
     * @var string|null
     */
    protected $productName;
    /**
     * ID of product that is assigned to the catalog/category (catalog node).
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }
    /**
     * ID of product that is assigned to the catalog/category (catalog node).
     **Example:** `634c26e14cedfd0001775e9f`
     *
     * @param string|null $productId
     *
     * @return self
     */
    public function setProductId(?string $productId): self
    {
        $this->initialized['productId'] = true;
        $this->productId = $productId;
        return $this;
    }
    /**
     * Name of product that is assigned to the catalog/category (catalog node).
     *
     * @return string|null
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }
    /**
     * Name of product that is assigned to the catalog/category (catalog node).
     *
     * @param string|null $productName
     *
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->initialized['productName'] = true;
        $this->productName = $productName;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['productId' => ['productId', 'getProductId', 'setProductId'], 'productName' => ['productName', 'getProductName', 'setProductName']];
    }
}