<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ProductNumberListViewsRequestDto implements AdditionalPropertiesInterface
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
     * @var list<string>
     */
    protected $numbers;
    /**
     * @var int
     */
    protected $page;
    /**
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
     *   },
     *   {
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
     * @return list<string>
     */
    public function getNumbers(): array
    {
        return $this->numbers;
    }
    /**
     * @param list<string> $numbers
     *
     * @return self
     */
    public function setNumbers(array $numbers): self
    {
        $this->initialized['numbers'] = true;
        $this->numbers = $numbers;
        return $this;
    }
    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
    /**
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
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }
    /**
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
     *   },
     *   {
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
     },
     {
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
        return ['numbers' => ['numbers', 'getNumbers', 'setNumbers'], 'page' => ['page', 'getPage', 'setPage'], 'pageSize' => ['pageSize', 'getPageSize', 'setPageSize'], 'views' => ['views', 'getViews', 'setViews']];
    }
}