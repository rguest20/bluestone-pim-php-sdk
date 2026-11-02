<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class CategoryProductRequest implements AdditionalPropertiesInterface
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
     * Specifies the product ID for the product to be assigned to the category.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @var string
     */
    protected $productId;
    /**
     * Specifies the product ID for the product to be assigned to the category.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @return string
     */
    public function getProductId(): string
    {
        return $this->productId;
    }
    /**
     * Specifies the product ID for the product to be assigned to the category.
     **Example:** `634c26e14cedfd0001775e9f`
     *
     * @param string $productId
     *
     * @return self
     */
    public function setProductId(string $productId): self
    {
        $this->initialized['productId'] = true;
        $this->productId = $productId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['productId' => ['productId', 'getProductId', 'setProductId']];
    }
}