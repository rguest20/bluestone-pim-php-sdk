<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ProductWithAttributeValuesResponse implements AdditionalPropertiesInterface
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
    protected $attributeValues;
    /**
     * @var string|null
     */
    protected $productName;
    /**
     * @return list<string>|null
     */
    public function getAttributeValues(): ?array
    {
        return $this->attributeValues;
    }
    /**
     * @param list<string>|null $attributeValues
     *
     * @return self
     */
    public function setAttributeValues(?array $attributeValues): self
    {
        $this->initialized['attributeValues'] = true;
        $this->attributeValues = $attributeValues;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }
    /**
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
        return ['attributeValues' => ['attributeValues', 'getAttributeValues', 'setAttributeValues'], 'productName' => ['productName', 'getProductName', 'setProductName']];
    }
}