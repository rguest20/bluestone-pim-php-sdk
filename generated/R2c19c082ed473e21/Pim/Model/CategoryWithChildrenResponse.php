<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class CategoryWithChildrenResponse implements AdditionalPropertiesInterface
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
     * List of catalog or category's assets IDs.
     * 
     * **Example**:
     * ```
     *   "assets": [
     *     "0a747b67-4062-480f-a438-5ee1370046e2"
     *   ]
     * ```
     *
     * @var list<string>|null
     */
    protected $assets;
    /**
     * Catalog or category's children.
     *
     * @var list<CategoryWithChildrenResponse>|null
     */
    protected $children;
    /**
     * Catalog or category's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Catalog or category's ID.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @var string
     */
    protected $id;
    /**
     * Catalog or category's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Catalog or category's number.
     *
     * @var string|null
     */
    protected $number;
    /**
     * The flag indicates whether the catalog or category is read-only for the currently logged in user in Bluestone PIM web application based on what policies are applied for the user.
     * 
     * **Note**: This flag is only relevant on calls to the endpoint performed from the Bluestone PIM web application and not for calls done to the Management API (MAPI). The endpoint will always return `readOnly: false` when calling the endpoint via the Management API (MAPI)
     *
     * @var bool|null
     */
    protected $readOnly;
    /**
     * Indicates whether the catalog/category is under an async removal (a delete or archive is in progress).
     *
     * @var bool|null
     */
    protected $toBeRemoved;
    /**
     * List of catalog or category's assets IDs.
     * 
     * **Example**:
     * ```
     *   "assets": [
     *     "0a747b67-4062-480f-a438-5ee1370046e2"
     *   ]
     * ```
     *
     * @return list<string>|null
     */
    public function getAssets(): ?array
    {
        return $this->assets;
    }
    /**
    * List of catalog or category's assets IDs.
    
    **Example**:
    ```
     "assets": [
       "0a747b67-4062-480f-a438-5ee1370046e2"
     ]
    ```
    *
    * @param list<string>|null $assets
    *
    * @return self
    */
    public function setAssets(?array $assets): self
    {
        $this->initialized['assets'] = true;
        $this->assets = $assets;
        return $this;
    }
    /**
     * Catalog or category's children.
     *
     * @return list<CategoryWithChildrenResponse>|null
     */
    public function getChildren(): ?array
    {
        return $this->children;
    }
    /**
     * Catalog or category's children.
     *
     * @param list<CategoryWithChildrenResponse>|null $children
     *
     * @return self
     */
    public function setChildren(?array $children): self
    {
        $this->initialized['children'] = true;
        $this->children = $children;
        return $this;
    }
    /**
     * Catalog or category's description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Catalog or category's description.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Catalog or category's ID.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Catalog or category's ID.
     **Example:** `634c26e14cedfd0001775e9f`
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Catalog or category's name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Catalog or category's name.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Catalog or category's number.
     *
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }
    /**
     * Catalog or category's number.
     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * The flag indicates whether the catalog or category is read-only for the currently logged in user in Bluestone PIM web application based on what policies are applied for the user.
     * 
     * **Note**: This flag is only relevant on calls to the endpoint performed from the Bluestone PIM web application and not for calls done to the Management API (MAPI). The endpoint will always return `readOnly: false` when calling the endpoint via the Management API (MAPI)
     *
     * @return bool|null
     */
    public function getReadOnly(): ?bool
    {
        return $this->readOnly;
    }
    /**
     * The flag indicates whether the catalog or category is read-only for the currently logged in user in Bluestone PIM web application based on what policies are applied for the user.
     **Note**: This flag is only relevant on calls to the endpoint performed from the Bluestone PIM web application and not for calls done to the Management API (MAPI). The endpoint will always return `readOnly: false` when calling the endpoint via the Management API (MAPI)
     *
     * @param bool|null $readOnly
     *
     * @return self
     */
    public function setReadOnly(?bool $readOnly): self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     * Indicates whether the catalog/category is under an async removal (a delete or archive is in progress).
     *
     * @return bool|null
     */
    public function getToBeRemoved(): ?bool
    {
        return $this->toBeRemoved;
    }
    /**
     * Indicates whether the catalog/category is under an async removal (a delete or archive is in progress).
     *
     * @param bool|null $toBeRemoved
     *
     * @return self
     */
    public function setToBeRemoved(?bool $toBeRemoved): self
    {
        $this->initialized['toBeRemoved'] = true;
        $this->toBeRemoved = $toBeRemoved;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['assets' => ['assets', 'getAssets', 'setAssets'], 'children' => ['children', 'getChildren', 'setChildren'], 'description' => ['description', 'getDescription', 'setDescription'], 'id' => ['id', 'getId', 'setId'], 'name' => ['name', 'getName', 'setName'], 'number' => ['number', 'getNumber', 'setNumber'], 'readOnly' => ['readOnly', 'getReadOnly', 'setReadOnly'], 'toBeRemoved' => ['toBeRemoved', 'getToBeRemoved', 'setToBeRemoved']];
    }
}