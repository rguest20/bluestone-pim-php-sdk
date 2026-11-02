<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ProductViewsByTypeRequest implements AdditionalPropertiesInterface
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
     * The number of products returned.
     *
     * @var int
     */
    protected $count;
    /**
     * The unique string of the cursor.
     *
     * @var string|null
     */
    protected $cursor;
    /**
     * Types of products that will be returned.
     *
     * @var list<string>
     */
    protected $types;
    /**
     * Specifies the list of entity views\* to be included in the response.
     * 
     *  \*A view is a subset of product data, like `METADATA`, `ATTRIBUTES`, `ASSETS` and `CATEGORIES`, to be included
     *  in the response, if no views are specified in the request, only product IDs will be returned.
     * 
     *  **Example:**
     *  ```
     *  "views": [
     * {
     *      "type": "ASSETS"
     * },
     * {
     *      "type": "ATTRIBUTES",
     *      "definitionIds": [
     *        "664cc90da825236207yt01a7"
     * ]
     * }
     * ]
     * ```
     *
     * @var list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|list<array<string, mixed>>|null
     */
    protected $views;
    /**
     * The number of products returned.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * The number of products returned.
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
     * The unique string of the cursor.
     *
     * @return string|null
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }
    /**
     * The unique string of the cursor.
     *
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
     * Types of products that will be returned.
     *
     * @return list<string>
     */
    public function getTypes(): array
    {
        return $this->types;
    }
    /**
     * Types of products that will be returned.
     *
     * @param list<string> $types
     *
     * @return self
     */
    public function setTypes(array $types): self
    {
        $this->initialized['types'] = true;
        $this->types = $types;
        return $this;
    }
    /**
     * Specifies the list of entity views\* to be included in the response.
     * 
     *  \*A view is a subset of product data, like `METADATA`, `ATTRIBUTES`, `ASSETS` and `CATEGORIES`, to be included
     *  in the response, if no views are specified in the request, only product IDs will be returned.
     * 
     *  **Example:**
     *  ```
     *  "views": [
     * {
     *      "type": "ASSETS"
     * },
     * {
     *      "type": "ATTRIBUTES",
     *      "definitionIds": [
     *        "664cc90da825236207yt01a7"
     * ]
     * }
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
        return ['count' => ['count', 'getCount', 'setCount'], 'cursor' => ['cursor', 'getCursor', 'setCursor'], 'types' => ['types', 'getTypes', 'setTypes'], 'views' => ['views', 'getViews', 'setViews']];
    }
}