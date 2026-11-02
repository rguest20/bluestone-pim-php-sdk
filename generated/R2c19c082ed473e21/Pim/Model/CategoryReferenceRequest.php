<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class CategoryReferenceRequest implements AdditionalPropertiesInterface
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
     * The internal IDs of the existing catalog categories to assign the product to. Must be non-empty.
     *
     * @var list<string>
     */
    protected $categoryIds;
    /**
     * The internal IDs of the existing catalog categories to assign the product to. Must be non-empty.
     *
     * @return list<string>
     */
    public function getCategoryIds(): array
    {
        return $this->categoryIds;
    }
    /**
     * The internal IDs of the existing catalog categories to assign the product to. Must be non-empty.
     *
     * @param list<string> $categoryIds
     *
     * @return self
     */
    public function setCategoryIds(array $categoryIds): self
    {
        $this->initialized['categoryIds'] = true;
        $this->categoryIds = $categoryIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['categoryIds' => ['categoryIds', 'getCategoryIds', 'setCategoryIds']];
    }
}