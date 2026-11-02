<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class DeleteProductsAttributesBulkRequest implements AdditionalPropertiesInterface
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
     * Specifies the ID of the attribute definition to be deleted from products.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @var string
     */
    protected $attributeDefinitionId;
    /**
     * Specifies product IDs to remove the attribute from, enabling targeted deletion of a specified attribute from multiple products.
     *
     * @var list<string>
     */
    protected $productIds;
    /**
     * Specifies the ID of the attribute definition to be deleted from products.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @return string
     */
    public function getAttributeDefinitionId(): string
    {
        return $this->attributeDefinitionId;
    }
    /**
     * Specifies the ID of the attribute definition to be deleted from products.
     **Example:** `634c26e14cedfd0001775e9f`
     *
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
     * Specifies product IDs to remove the attribute from, enabling targeted deletion of a specified attribute from multiple products.
     *
     * @return list<string>
     */
    public function getProductIds(): array
    {
        return $this->productIds;
    }
    /**
     * Specifies product IDs to remove the attribute from, enabling targeted deletion of a specified attribute from multiple products.
     *
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
        return ['attributeDefinitionId' => ['attributeDefinitionId', 'getAttributeDefinitionId', 'setAttributeDefinitionId'], 'productIds' => ['productIds', 'getProductIds', 'setProductIds']];
    }
}