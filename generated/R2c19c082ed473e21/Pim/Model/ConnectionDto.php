<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ConnectionDto implements AdditionalPropertiesInterface
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
     * The quantity value for a related product.
     * - In a **two-way relation**, each side of the relation can have its own separate quantity.
     * - In a **one-way relation**, the quantity is set only on the related product’s side, since there’s no reverse link.
     * 
     * **Note**: To retrieve quantities of related products, you can use endpoint `GET /products/{id}` to fetch the product, the response will contain information about any related products and their quantities if set.
     * 
     * **Note**: This property is obsolete and should not be used.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * ID of related product.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @var string
     */
    protected $relatedId;
    /**
     * ID of relation definition.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @var string
     */
    protected $relationId;
    /**
     * Specifies whether the direction of the relationship between two products should be interpreted in reverse.
     * 
     * When `true`, the relation is viewed from the target product back to the source, effectively flipping the usual source → target orientation.
     * 
     * This is useful for defining inverse or complementary product relationships (e.g., if Product A is an "accessory of" Product B, the value `reverse: true` would represent that Product B "has accessory" Product A).
     *
     * @var bool
     */
    protected $reverse;
    /**
     * The quantity value for a related product.
     * - In a **two-way relation**, each side of the relation can have its own separate quantity.
     * - In a **one-way relation**, the quantity is set only on the related product’s side, since there’s no reverse link.
     * 
     * **Note**: To retrieve quantities of related products, you can use endpoint `GET /products/{id}` to fetch the product, the response will contain information about any related products and their quantities if set.
     * 
     * **Note**: This property is obsolete and should not be used.
     *
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }
    /**
    * The quantity value for a related product.
    - In a **two-way relation**, each side of the relation can have its own separate quantity.
    - In a **one-way relation**, the quantity is set only on the related product’s side, since there’s no reverse link.
    
    **Note**: To retrieve quantities of related products, you can use endpoint `GET /products/{id}` to fetch the product, the response will contain information about any related products and their quantities if set.
    
    **Note**: This property is obsolete and should not be used.
    *
    * @param float|null $quantity
    *
    * @return self
    */
    public function setQuantity(?float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * ID of related product.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @return string
     */
    public function getRelatedId(): string
    {
        return $this->relatedId;
    }
    /**
     * ID of related product.
     **Example:** `634c26e14cedfd0001775e9f`
     *
     * @param string $relatedId
     *
     * @return self
     */
    public function setRelatedId(string $relatedId): self
    {
        $this->initialized['relatedId'] = true;
        $this->relatedId = $relatedId;
        return $this;
    }
    /**
     * ID of relation definition.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @return string
     */
    public function getRelationId(): string
    {
        return $this->relationId;
    }
    /**
     * ID of relation definition.
     **Example:** `634c26e14cedfd0001775e9f`
     *
     * @param string $relationId
     *
     * @return self
     */
    public function setRelationId(string $relationId): self
    {
        $this->initialized['relationId'] = true;
        $this->relationId = $relationId;
        return $this;
    }
    /**
     * Specifies whether the direction of the relationship between two products should be interpreted in reverse.
     * 
     * When `true`, the relation is viewed from the target product back to the source, effectively flipping the usual source → target orientation.
     * 
     * This is useful for defining inverse or complementary product relationships (e.g., if Product A is an "accessory of" Product B, the value `reverse: true` would represent that Product B "has accessory" Product A).
     *
     * @return bool
     */
    public function getReverse(): bool
    {
        return $this->reverse;
    }
    /**
    * Specifies whether the direction of the relationship between two products should be interpreted in reverse.
    
    When `true`, the relation is viewed from the target product back to the source, effectively flipping the usual source → target orientation.
    
    This is useful for defining inverse or complementary product relationships (e.g., if Product A is an "accessory of" Product B, the value `reverse: true` would represent that Product B "has accessory" Product A).
    *
    * @param bool $reverse
    *
    * @return self
    */
    public function setReverse(bool $reverse): self
    {
        $this->initialized['reverse'] = true;
        $this->reverse = $reverse;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['quantity' => ['quantity', 'getQuantity', 'setQuantity'], 'relatedId' => ['relatedId', 'getRelatedId', 'setRelatedId'], 'relationId' => ['relationId', 'getRelationId', 'setRelationId'], 'reverse' => ['reverse', 'getReverse', 'setReverse']];
    }
}