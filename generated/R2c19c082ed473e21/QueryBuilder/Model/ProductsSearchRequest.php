<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class ProductsSearchRequest
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var MainQueryGroup
     */
    protected $query;
    /**
     * @var SortingAttribute|SortingBasicFields
     */
    protected $sorting;
    /**
     * @var Paging
     */
    protected $paging;
    /**
     * @return MainQueryGroup
     */
    public function getQuery(): MainQueryGroup
    {
        return $this->query;
    }
    /**
     * @param MainQueryGroup $query
     *
     * @return self
     */
    public function setQuery(MainQueryGroup $query): self
    {
        $this->initialized['query'] = true;
        $this->query = $query;
        return $this;
    }
    /**
     * @return SortingAttribute|SortingBasicFields
     */
    public function getSorting()
    {
        return $this->sorting;
    }
    /**
     * @param SortingAttribute|SortingBasicFields $sorting
     *
     * @return self
     */
    public function setSorting($sorting): self
    {
        $this->initialized['sorting'] = true;
        $this->sorting = $sorting;
        return $this;
    }
    /**
     * @return Paging
     */
    public function getPaging(): Paging
    {
        return $this->paging;
    }
    /**
     * @param Paging $paging
     *
     * @return self
     */
    public function setPaging(Paging $paging): self
    {
        $this->initialized['paging'] = true;
        $this->paging = $paging;
        return $this;
    }
}