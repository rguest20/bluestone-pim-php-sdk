<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class AddProductVariantsRequest implements AdditionalPropertiesInterface
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
     * Specifies the set of product IDs to be assigned to the specified variant group.
     * 
     * 
     *  **Example:**
     *  ```
     *  "productIds": [
     *    "667a6c664d59943c1504c738",
     *    "67958a6c664d59943c1504c7"
     * ]
     * ```
     *
     * @var list<string>
     */
    protected $productIds;
    /**
     * Specifies the ID of the variant group to which products will be assigned.
     * 
     * 
     *  **Example:**
     *  ```
     *  "variantGroupId": "667a6c664d59943c1504c738"
     * ```
     *
     * @var string
     */
    protected $variantGroupId;
    /**
     * Specifies the set of product IDs to be assigned to the specified variant group.
     * 
     * 
     *  **Example:**
     *  ```
     *  "productIds": [
     *    "667a6c664d59943c1504c738",
     *    "67958a6c664d59943c1504c7"
     * ]
     * ```
     *
     * @return list<string>
     */
    public function getProductIds(): array
    {
        return $this->productIds;
    }
    /**
    * Specifies the set of product IDs to be assigned to the specified variant group.
    
    
    **Example:**
    ```
    "productIds": [
      "667a6c664d59943c1504c738",
      "67958a6c664d59943c1504c7"
    ]
    ```
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
    /**
     * Specifies the ID of the variant group to which products will be assigned.
     * 
     * 
     *  **Example:**
     *  ```
     *  "variantGroupId": "667a6c664d59943c1504c738"
     * ```
     *
     * @return string
     */
    public function getVariantGroupId(): string
    {
        return $this->variantGroupId;
    }
    /**
    * Specifies the ID of the variant group to which products will be assigned.
    
    
    **Example:**
    ```
    "variantGroupId": "667a6c664d59943c1504c738"
    ```
    *
    * @param string $variantGroupId
    *
    * @return self
    */
    public function setVariantGroupId(string $variantGroupId): self
    {
        $this->initialized['variantGroupId'] = true;
        $this->variantGroupId = $variantGroupId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['productIds' => ['productIds', 'getProductIds', 'setProductIds'], 'variantGroupId' => ['variantGroupId', 'getVariantGroupId', 'setVariantGroupId']];
    }
}