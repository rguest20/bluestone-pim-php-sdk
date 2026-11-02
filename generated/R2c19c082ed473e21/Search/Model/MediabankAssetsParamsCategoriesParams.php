<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class MediabankAssetsParamsCategoriesParams implements AdditionalPropertiesInterface
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
     * @var list<string>|null
     */
    protected $categories;
    /**
     * @var string|null
     */
    protected $categoriesMatch;
    /**
     * @return list<string>|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }
    /**
     * @param list<string>|null $categories
     *
     * @return self
     */
    public function setCategories(?array $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getCategoriesMatch(): ?string
    {
        return $this->categoriesMatch;
    }
    /**
     * @param string|null $categoriesMatch
     *
     * @return self
     */
    public function setCategoriesMatch(?string $categoriesMatch): self
    {
        $this->initialized['categoriesMatch'] = true;
        $this->categoriesMatch = $categoriesMatch;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['categories' => ['categories', 'getCategories', 'setCategories'], 'categoriesMatch' => ['categoriesMatch', 'getCategoriesMatch', 'setCategoriesMatch']];
    }
}