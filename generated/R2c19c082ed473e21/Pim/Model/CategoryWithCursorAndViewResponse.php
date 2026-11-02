<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class CategoryWithCursorAndViewResponse implements AdditionalPropertiesInterface
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
     * List of Category's assets IDs.
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
     * @var MultiLanguageDto|null
     */
    protected $description;
    /**
     * Category's ID.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @var string
     */
    protected $id;
    /**
     * @var CategoryWithCursorViewMetadata|null
     */
    protected $metadata;
    /**
     * List of Category's assets IDs.
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
    * List of Category's assets IDs.
    
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
     * @return MultiLanguageDto|null
     */
    public function getDescription(): ?MultiLanguageDto
    {
        return $this->description;
    }
    /**
     * @param MultiLanguageDto|null $description
     *
     * @return self
     */
    public function setDescription(?MultiLanguageDto $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Category's ID.
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
     * Category's ID.
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
     * @return CategoryWithCursorViewMetadata|null
     */
    public function getMetadata(): ?CategoryWithCursorViewMetadata
    {
        return $this->metadata;
    }
    /**
     * @param CategoryWithCursorViewMetadata|null $metadata
     *
     * @return self
     */
    public function setMetadata(?CategoryWithCursorViewMetadata $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['assets' => ['assets', 'getAssets', 'setAssets'], 'description' => ['description', 'getDescription', 'setDescription'], 'id' => ['id', 'getId', 'setId'], 'metadata' => ['metadata', 'getMetadata', 'setMetadata']];
    }
}