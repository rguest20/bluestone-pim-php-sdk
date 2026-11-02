<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\AdditionalPropertiesInterface;
class Paging implements AdditionalPropertiesInterface
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
     * @var float
     */
    protected $pageSize;
    /**
     * @var float
     */
    protected $page;
    /**
     * @return float
     */
    public function getPageSize(): float
    {
        return $this->pageSize;
    }
    /**
     * @param float $pageSize
     *
     * @return self
     */
    public function setPageSize(float $pageSize): self
    {
        $this->initialized['pageSize'] = true;
        $this->pageSize = $pageSize;
        return $this;
    }
    /**
     * @return float
     */
    public function getPage(): float
    {
        return $this->page;
    }
    /**
     * @param float $page
     *
     * @return self
     */
    public function setPage(float $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['pageSize' => ['pageSize', 'getPageSize', 'setPageSize'], 'page' => ['page', 'getPage', 'setPage']];
    }
}