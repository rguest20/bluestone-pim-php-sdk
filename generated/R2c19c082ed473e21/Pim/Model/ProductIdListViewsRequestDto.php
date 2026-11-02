<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ProductIdListViewsRequestDto implements AdditionalPropertiesInterface
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
    protected $ids;
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
    public function getIds(): array
    {
        return $this->ids;
    }
    /**
     * @param list<string> $ids
     *
     * @return self
     */
    public function setIds(array $ids): self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;
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
        return ['ids' => ['ids', 'getIds', 'setIds'], 'views' => ['views', 'getViews', 'setViews']];
    }
}