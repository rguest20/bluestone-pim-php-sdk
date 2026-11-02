<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class ProductAddedToCategoryRequirementParams implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $categoryId;
    /**
     * @var bool|null
     */
    protected $includeSubcategories;
    /**
     * @return string
     */
    public function getCategoryId(): string
    {
        return $this->categoryId;
    }
    /**
     * @param string $categoryId
     *
     * @return self
     */
    public function setCategoryId(string $categoryId): self
    {
        $this->initialized['categoryId'] = true;
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getIncludeSubcategories(): ?bool
    {
        return $this->includeSubcategories;
    }
    /**
     * @param bool|null $includeSubcategories
     *
     * @return self
     */
    public function setIncludeSubcategories(?bool $includeSubcategories): self
    {
        $this->initialized['includeSubcategories'] = true;
        $this->includeSubcategories = $includeSubcategories;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['categoryId' => ['categoryId', 'getCategoryId', 'setCategoryId'], 'includeSubcategories' => ['includeSubcategories', 'getIncludeSubcategories', 'setIncludeSubcategories']];
    }
}