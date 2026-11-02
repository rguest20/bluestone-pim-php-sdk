<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class AssetsProductsParams implements AdditionalPropertiesInterface
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
    protected $products;
    /**
     * @var string|null
     */
    protected $productsMatch;
    /**
     * @return list<string>|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }
    /**
     * @param list<string>|null $products
     *
     * @return self
     */
    public function setProducts(?array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getProductsMatch(): ?string
    {
        return $this->productsMatch;
    }
    /**
     * @param string|null $productsMatch
     *
     * @return self
     */
    public function setProductsMatch(?string $productsMatch): self
    {
        $this->initialized['productsMatch'] = true;
        $this->productsMatch = $productsMatch;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['products' => ['products', 'getProducts', 'setProducts'], 'productsMatch' => ['productsMatch', 'getProductsMatch', 'setProductsMatch']];
    }
}