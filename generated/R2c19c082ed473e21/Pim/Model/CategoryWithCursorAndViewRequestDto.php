<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class CategoryWithCursorAndViewRequestDto implements AdditionalPropertiesInterface
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
     * \*A **view** is a subset of category data, like `METADATA`, `ASSETS` and `DESCRIPTION`, to be included in the response, if no views are specified in the request, only category IDs will be returned.
     * 
     * **Note**: The `METADATA` view includes these properties in the response:
     * ```json
     *     "metadata": {
     *         "name": {
     *           "value": {
     *             "en": "Category 11"
     *           }
     *         },
     *         "number": "11",
     *         "parentId": "69cbbb0eddb0f6ae88c55e47",
     *         "readOnly": false
     *       }
     * ```
     *
     * @var list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|null
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
     * \*A **view** is a subset of category data, like `METADATA`, `ASSETS` and `DESCRIPTION`, to be included in the response, if no views are specified in the request, only category IDs will be returned.
     * 
     * **Note**: The `METADATA` view includes these properties in the response:
     * ```json
     *     "metadata": {
     *         "name": {
     *           "value": {
     *             "en": "Category 11"
     *           }
     *         },
     *         "number": "11",
     *         "parentId": "69cbbb0eddb0f6ae88c55e47",
     *         "readOnly": false
     *       }
     * ```
     *
     * @return list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|null
     */
    public function getViews(): ?array
    {
        return $this->views;
    }
    /**
    * Specifies the list of entities views\* to be included in the response.
    
    \*A **view** is a subset of category data, like `METADATA`, `ASSETS` and `DESCRIPTION`, to be included in the response, if no views are specified in the request, only category IDs will be returned.
    
    **Note**: The `METADATA` view includes these properties in the response:
    ```json
       "metadata": {
           "name": {
             "value": {
               "en": "Category 11"
             }
           },
           "number": "11",
           "parentId": "69cbbb0eddb0f6ae88c55e47",
           "readOnly": false
         }
    ```
    *
    * @param list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|null $views
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