<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class AssignProductsToCategoryRequest implements AdditionalPropertiesInterface
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
     * Specifies the ID of the category to which products will be assigned.
     * 
     * 
     *  **Example:**
     *  ```
     *  "categoryId": "667a6c664d59943c1504c738"
     * ```
     *
     * @var string|null
     */
    protected $categoryId;
    /**
     * Specifies the set of product IDs to be assigned to the specified category.
     * 
     * 
     * **Example:**
     * ```
     * "productIds": [
     *   "667a6c664d59943c1504c738",
     *   "67958a6c664d59943c1504c7"
     * ]
     * ```
     *
     * @var list<string>|null
     */
    protected $productIds;
    /**
     * Specifies the ID of the category to which products will be assigned.
     * 
     * 
     *  **Example:**
     *  ```
     *  "categoryId": "667a6c664d59943c1504c738"
     * ```
     *
     * @return string|null
     */
    public function getCategoryId(): ?string
    {
        return $this->categoryId;
    }
    /**
    * Specifies the ID of the category to which products will be assigned.
    
    
    **Example:**
    ```
    "categoryId": "667a6c664d59943c1504c738"
    ```
    *
    * @param string|null $categoryId
    *
    * @return self
    */
    public function setCategoryId(?string $categoryId): self
    {
        $this->initialized['categoryId'] = true;
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * Specifies the set of product IDs to be assigned to the specified category.
     * 
     * 
     * **Example:**
     * ```
     * "productIds": [
     *   "667a6c664d59943c1504c738",
     *   "67958a6c664d59943c1504c7"
     * ]
     * ```
     *
     * @return list<string>|null
     */
    public function getProductIds(): ?array
    {
        return $this->productIds;
    }
    /**
    * Specifies the set of product IDs to be assigned to the specified category.
    
    
    **Example:**
    ```
    "productIds": [
     "667a6c664d59943c1504c738",
     "67958a6c664d59943c1504c7"
    ]
    ```
    *
    * @param list<string>|null $productIds
    *
    * @return self
    */
    public function setProductIds(?array $productIds): self
    {
        $this->initialized['productIds'] = true;
        $this->productIds = $productIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['categoryId' => ['categoryId', 'getCategoryId', 'setCategoryId'], 'productIds' => ['productIds', 'getProductIds', 'setProductIds']];
    }
}