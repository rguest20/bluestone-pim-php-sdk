<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class AssetIdListViewsRequestDto implements AdditionalPropertiesInterface
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
     * Specifies a list of asset IDs to retrieve products linked to those given assets. This field is mandatory.
     * 
     * 
     *  **Example:**
     *  ```
     *  assetIds: [
     *    "ff1df72b-8d79-4b32-a7e4-579caa589ade",
     *    "ff1df72b-8d79-4b32-a7e4-579caa589adf"
     * ]
     * ```
     *
     * @var list<string>
     */
    protected $assetIds;
    /**
     * A number sequence representing a block of items to return as a result set. If omitted, the default value `0`
     * will be used. This parameter is used for pagination to specify which page of the results to retrieve.
     * 
     * **Default value:** `0`
     *
     * @var int
     */
    protected $page;
    /**
     * The number of items to return in each block. If omitted, the default value `100` will be used. This parameter
     * works with the `page` parameter to paginate the result set, allowing you to control the size of each page of
     * results. The value must be between 1 and 100.
     * 
     * **Default value:** `100`
     *
     * @var int
     */
    protected $pageSize;
    /**
     * Specifies the list of entity views\* to be included in the response.
     * 
     * \*A view is a subset of product data, like `METADATA`, `ATTRIBUTES`, `ASSETS` and `CATEGORIES`, to be included
     * in the response, if no views are specified in the request, only product IDs will be returned.
     * 
     * **Example:**
     * ```
     * "views": [
     *   {
     *     "type": "ASSETS"
     *   },///   {
     *     "type": "ATTRIBUTES",
     *     "definitionIds": [
     *       "664cc90da825236207yt01a7"
     *     ]
     *   }
     * ]
     * ```
     *
     * @var list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|null
     */
    protected $views;
    /**
     * Specifies a list of asset IDs to retrieve products linked to those given assets. This field is mandatory.
     * 
     * 
     *  **Example:**
     *  ```
     *  assetIds: [
     *    "ff1df72b-8d79-4b32-a7e4-579caa589ade",
     *    "ff1df72b-8d79-4b32-a7e4-579caa589adf"
     * ]
     * ```
     *
     * @return list<string>
     */
    public function getAssetIds(): array
    {
        return $this->assetIds;
    }
    /**
    * Specifies a list of asset IDs to retrieve products linked to those given assets. This field is mandatory.
    
    
    **Example:**
    ```
    assetIds: [
      "ff1df72b-8d79-4b32-a7e4-579caa589ade",
      "ff1df72b-8d79-4b32-a7e4-579caa589adf"
    ]
    ```
    *
    * @param list<string> $assetIds
    *
    * @return self
    */
    public function setAssetIds(array $assetIds): self
    {
        $this->initialized['assetIds'] = true;
        $this->assetIds = $assetIds;
        return $this;
    }
    /**
     * A number sequence representing a block of items to return as a result set. If omitted, the default value `0`
     * will be used. This parameter is used for pagination to specify which page of the results to retrieve.
     * 
     * **Default value:** `0`
     *
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
    /**
    * A number sequence representing a block of items to return as a result set. If omitted, the default value `0`
    will be used. This parameter is used for pagination to specify which page of the results to retrieve.
    
    **Default value:** `0`
    *
    * @param int $page
    *
    * @return self
    */
    public function setPage(int $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
    /**
     * The number of items to return in each block. If omitted, the default value `100` will be used. This parameter
     * works with the `page` parameter to paginate the result set, allowing you to control the size of each page of
     * results. The value must be between 1 and 100.
     * 
     * **Default value:** `100`
     *
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }
    /**
    * The number of items to return in each block. If omitted, the default value `100` will be used. This parameter
    works with the `page` parameter to paginate the result set, allowing you to control the size of each page of
    results. The value must be between 1 and 100.
    
    **Default value:** `100`
    *
    * @param int $pageSize
    *
    * @return self
    */
    public function setPageSize(int $pageSize): self
    {
        $this->initialized['pageSize'] = true;
        $this->pageSize = $pageSize;
        return $this;
    }
    /**
     * Specifies the list of entity views\* to be included in the response.
     * 
     * \*A view is a subset of product data, like `METADATA`, `ATTRIBUTES`, `ASSETS` and `CATEGORIES`, to be included
     * in the response, if no views are specified in the request, only product IDs will be returned.
     * 
     * **Example:**
     * ```
     * "views": [
     *   {
     *     "type": "ASSETS"
     *   },///   {
     *     "type": "ATTRIBUTES",
     *     "definitionIds": [
     *       "664cc90da825236207yt01a7"
     *     ]
     *   }
     * ]
     * ```
     *
     * @return list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|null
     */
    public function getViews(): ?array
    {
        return $this->views;
    }
    /**
    * Specifies the list of entity views\* to be included in the response.
    
    \*A view is a subset of product data, like `METADATA`, `ATTRIBUTES`, `ASSETS` and `CATEGORIES`, to be included
    in the response, if no views are specified in the request, only product IDs will be returned.
    
    **Example:**
    ```
    "views": [
     {
       "type": "ASSETS"
     },///   {
       "type": "ATTRIBUTES",
       "definitionIds": [
         "664cc90da825236207yt01a7"
       ]
     }
    ]
    ```
    *
    * @param list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|null $views
    *
    * @return self
    */
    public function setViews(?array $views): self
    {
        $this->initialized['views'] = true;
        $this->views = $views;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['assetIds' => ['assetIds', 'getAssetIds', 'setAssetIds'], 'page' => ['page', 'getPage', 'setPage'], 'pageSize' => ['pageSize', 'getPageSize', 'setPageSize'], 'views' => ['views', 'getViews', 'setViews']];
    }
}