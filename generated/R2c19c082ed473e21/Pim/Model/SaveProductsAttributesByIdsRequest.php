<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class SaveProductsAttributesByIdsRequest implements AdditionalPropertiesInterface
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
    protected $attributeDefinitionId;
    /**
     * @var list<string>
     */
    protected $attributeValues;
    /**
     * @var list<string>
     */
    protected $productIds;
    /**
     * @return string
     */
    public function getAttributeDefinitionId(): string
    {
        return $this->attributeDefinitionId;
    }
    /**
     * @param string $attributeDefinitionId
     *
     * @return self
     */
    public function setAttributeDefinitionId(string $attributeDefinitionId): self
    {
        $this->initialized['attributeDefinitionId'] = true;
        $this->attributeDefinitionId = $attributeDefinitionId;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getAttributeValues(): array
    {
        return $this->attributeValues;
    }
    /**
     * @param list<string> $attributeValues
     *
     * @return self
     */
    public function setAttributeValues(array $attributeValues): self
    {
        $this->initialized['attributeValues'] = true;
        $this->attributeValues = $attributeValues;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getProductIds(): array
    {
        return $this->productIds;
    }
    /**
     * @param list<string> $productIds
     *
     * @return self
     */
    public function setProductIds(array $productIds): self
    {
        $this->initialized['productIds'] = true;
        $this->productIds = $productIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['attributeDefinitionId' => ['attributeDefinitionId', 'getAttributeDefinitionId', 'setAttributeDefinitionId'], 'attributeValues' => ['attributeValues', 'getAttributeValues', 'setAttributeValues'], 'productIds' => ['productIds', 'getProductIds', 'setProductIds']];
    }
}