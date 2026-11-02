<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class CursorWithViewsRequestDto implements AdditionalPropertiesInterface
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
     * Specifies the number of products to return in the result set. Used together with a cursor ID to fetch the next batch of results.
     *
     * @var int
     */
    protected $count;
    /**
     * @var string|null
     */
    protected $cursor;
    /**
     * Specifies the list of entities views\* to be included in the response.
     * 
     * \*A **view** is a subset of product data, like `METADATA`, `ATTRIBUTES`, `ASSETS` and `CATEGORIES`, to be included in the response, if no views are specified in the request, only product IDs will be returned.
     * 
     * **Note**: The `METADATA` view includes these properties in the response:
     * ```json
     *       "metadata": {
     *         "name": {
     *           "value": {
     *             "en": "My Product"
     *           }
     *         },
     *         "number": "my-product",
     *         "description": {
     *           "value": {
     *             "en": "A description for my product"
     *           }
     *         },
     *         "archived": false,
     *         "lastUpdate": 1744386096497,
     *         "createDate": 1744386039893,
     *         "type": "SINGLE",
     *         "readOnly": false,
     *         "relatedProductsRelationSortingOrderSource": "RELATION_DEFINITION"
     *       }
     * ```
     * **Note**: The `ATTRIBUTES` view takes an optional list of attribute definition IDs to include, if omitted all attribute definitions will be included in the response.
     * 
     * **Example:**
     * ```json
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
     * Specifies the number of products to return in the result set. Used together with a cursor ID to fetch the next batch of results.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Specifies the number of products to return in the result set. Used together with a cursor ID to fetch the next batch of results.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }
    /**
     * @param string|null $cursor
     *
     * @return self
     */
    public function setCursor(?string $cursor): self
    {
        $this->initialized['cursor'] = true;
        $this->cursor = $cursor;
        return $this;
    }
    /**
     * Specifies the list of entities views\* to be included in the response.
     * 
     * \*A **view** is a subset of product data, like `METADATA`, `ATTRIBUTES`, `ASSETS` and `CATEGORIES`, to be included in the response, if no views are specified in the request, only product IDs will be returned.
     * 
     * **Note**: The `METADATA` view includes these properties in the response:
     * ```json
     *       "metadata": {
     *         "name": {
     *           "value": {
     *             "en": "My Product"
     *           }
     *         },
     *         "number": "my-product",
     *         "description": {
     *           "value": {
     *             "en": "A description for my product"
     *           }
     *         },
     *         "archived": false,
     *         "lastUpdate": 1744386096497,
     *         "createDate": 1744386039893,
     *         "type": "SINGLE",
     *         "readOnly": false,
     *         "relatedProductsRelationSortingOrderSource": "RELATION_DEFINITION"
     *       }
     * ```
     * **Note**: The `ATTRIBUTES` view takes an optional list of attribute definition IDs to include, if omitted all attribute definitions will be included in the response.
     * 
     * **Example:**
     * ```json
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
    * Specifies the list of entities views\* to be included in the response.
    
    \*A **view** is a subset of product data, like `METADATA`, `ATTRIBUTES`, `ASSETS` and `CATEGORIES`, to be included in the response, if no views are specified in the request, only product IDs will be returned.
    
    **Note**: The `METADATA` view includes these properties in the response:
    ```json
         "metadata": {
           "name": {
             "value": {
               "en": "My Product"
             }
           },
           "number": "my-product",
           "description": {
             "value": {
               "en": "A description for my product"
             }
           },
           "archived": false,
           "lastUpdate": 1744386096497,
           "createDate": 1744386039893,
           "type": "SINGLE",
           "readOnly": false,
           "relatedProductsRelationSortingOrderSource": "RELATION_DEFINITION"
         }
    ```
    **Note**: The `ATTRIBUTES` view takes an optional list of attribute definition IDs to include, if omitted all attribute definitions will be included in the response.
    
    **Example:**
    ```json
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
        return ['count' => ['count', 'getCount', 'setCount'], 'cursor' => ['cursor', 'getCursor', 'setCursor'], 'views' => ['views', 'getViews', 'setViews']];
    }
}