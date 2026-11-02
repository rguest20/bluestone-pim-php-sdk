<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class CategoryScoreRequest implements AdditionalPropertiesInterface
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
    protected $contexts;
    /**
     * @var list<string>|null
     */
    protected $categoryIds;
    /**
     * @var bool
     */
    protected $includeUnassigned;
    /**
     * @var int
     */
    protected $pageSize;
    /**
     * @var int
     */
    protected $page;
    /**
     * @return list<string>|null
     */
    public function getContexts(): ?array
    {
        return $this->contexts;
    }
    /**
     * @param list<string>|null $contexts
     *
     * @return self
     */
    public function setContexts(?array $contexts): self
    {
        $this->initialized['contexts'] = true;
        $this->contexts = $contexts;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getCategoryIds(): ?array
    {
        return $this->categoryIds;
    }
    /**
     * @param list<string>|null $categoryIds
     *
     * @return self
     */
    public function setCategoryIds(?array $categoryIds): self
    {
        $this->initialized['categoryIds'] = true;
        $this->categoryIds = $categoryIds;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIncludeUnassigned(): bool
    {
        return $this->includeUnassigned;
    }
    /**
     * @param bool $includeUnassigned
     *
     * @return self
     */
    public function setIncludeUnassigned(bool $includeUnassigned): self
    {
        $this->initialized['includeUnassigned'] = true;
        $this->includeUnassigned = $includeUnassigned;
        return $this;
    }
    /**
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }
    /**
     * @param int $pageSize
     *
     * @return self
     */
    public function setPageSize(int $pageSize): self
    {
        $this->initialized['pageSize'] = true;
        $this->pageSize = $pageSize;
        return $this;
    }
    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
    /**
     * @param int $page
     *
     * @return self
     */
    public function setPage(int $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['contexts' => ['contexts', 'getContexts', 'setContexts'], 'categoryIds' => ['categoryIds', 'getCategoryIds', 'setCategoryIds'], 'includeUnassigned' => ['includeUnassigned', 'getIncludeUnassigned', 'setIncludeUnassigned'], 'pageSize' => ['pageSize', 'getPageSize', 'setPageSize'], 'page' => ['page', 'getPage', 'setPage']];
    }
}