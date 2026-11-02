<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalPropertiesInterface;
class CategoryStateSearchListRequest implements AdditionalPropertiesInterface
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
    protected $categoryIds;
    /**
     * @var string
     */
    protected $contextId;
    /**
     * @return list<string>
     */
    public function getCategoryIds(): array
    {
        return $this->categoryIds;
    }
    /**
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
    /**
     * @return string
     */
    public function getContextId(): string
    {
        return $this->contextId;
    }
    /**
     * @param string $contextId
     *
     * @return self
     */
    public function setContextId(string $contextId): self
    {
        $this->initialized['contextId'] = true;
        $this->contextId = $contextId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['categoryIds' => ['categoryIds', 'getCategoryIds', 'setCategoryIds'], 'contextId' => ['contextId', 'getContextId', 'setContextId']];
    }
}