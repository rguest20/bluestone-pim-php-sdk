<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class AttributeDefinitionFilteringRequestDto implements AdditionalPropertiesInterface
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
     * Specifies the list of attribute definition filters. This field is used for filtering attribute definitions based
     * on various criteria.
     *
     * @var list<AttributeDefinitionFilterDto>|null
     */
    protected $filters;
    /**
     * The number of items to return in each block. If omitted, the default value `1000` will be used. This parameter
     * works with the `page` parameter to paginate the result set, allowing you to control the size of each page of
     * results. The value must be between 1 and 1000.
     * 
     * **Default value:** `1000`
     *
     * @var int
     */
    protected $page;
    /**
     * A number sequence representing a block of items to return as a result set. If omitted, the default value `0`
     * will be used. This parameter is used for pagination to specify which page of the results to retrieve.
     * 
     * **Default value:** `0`
     *
     * @var int
     */
    protected $pageSize;
    /**
     * Specifies the list of attribute definition filters. This field is used for filtering attribute definitions based
     * on various criteria.
     *
     * @return list<AttributeDefinitionFilterDto>|null
     */
    public function getFilters(): ?array
    {
        return $this->filters;
    }
    /**
    * Specifies the list of attribute definition filters. This field is used for filtering attribute definitions based
    on various criteria.
    *
    * @param list<AttributeDefinitionFilterDto>|null $filters
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
     * The number of items to return in each block. If omitted, the default value `1000` will be used. This parameter
     * works with the `page` parameter to paginate the result set, allowing you to control the size of each page of
     * results. The value must be between 1 and 1000.
     * 
     * **Default value:** `1000`
     *
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
    /**
    * The number of items to return in each block. If omitted, the default value `1000` will be used. This parameter
    works with the `page` parameter to paginate the result set, allowing you to control the size of each page of
    results. The value must be between 1 and 1000.
    
    **Default value:** `1000`
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
     * A number sequence representing a block of items to return as a result set. If omitted, the default value `0`
     * will be used. This parameter is used for pagination to specify which page of the results to retrieve.
     * 
     * **Default value:** `0`
     *
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }
    /**
    * A number sequence representing a block of items to return as a result set. If omitted, the default value `0`
    will be used. This parameter is used for pagination to specify which page of the results to retrieve.
    
    **Default value:** `0`
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