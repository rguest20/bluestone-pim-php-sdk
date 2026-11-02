<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class CategoryFilteringRequest implements AdditionalPropertiesInterface
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
     * Specifies a list of attribute definition filters.
     *
     * @var list<CategoryFilter>|null
     */
    protected $filters;
    /**
     * Specifies the page number for pagination. Default value is 0.
     *
     * @var int
     */
    protected $page;
    /**
     * Specifies the number of items to return in each page. The value must be between 1 and 1000.
     *
     * @var int
     */
    protected $pageSize;
    /**
     * Specifies a list of attribute definition filters.
     *
     * @return list<CategoryFilter>|null
     */
    public function getFilters(): ?array
    {
        return $this->filters;
    }
    /**
     * Specifies a list of attribute definition filters.
     *
     * @param list<CategoryFilter>|null $filters
     *
     * @return self
     */
    public function setFilters(?array $filters): self
    {
        $this->initialized['filters'] = true;
        $this->filters = $filters;
        return $this;
    }
    /**
     * Specifies the page number for pagination. Default value is 0.
     *
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
    /**
     * Specifies the page number for pagination. Default value is 0.
     *
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
    /**
     * Specifies the number of items to return in each page. The value must be between 1 and 1000.
     *
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }
    /**
     * Specifies the number of items to return in each page. The value must be between 1 and 1000.
     *
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
    public function definedProperties(): array
    {
        return ['filters' => ['filters', 'getFilters', 'setFilters'], 'page' => ['page', 'getPage', 'setPage'], 'pageSize' => ['pageSize', 'getPageSize', 'setPageSize']];
    }
}