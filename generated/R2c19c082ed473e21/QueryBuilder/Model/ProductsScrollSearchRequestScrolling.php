<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class ProductsScrollSearchRequestScrolling
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
     * @var ScrollPagingScrolling
     */
    protected $paging;
    /**
     * @return ScrollPagingScrolling
     */
    public function getPaging(): ScrollPagingScrolling
    {
        return $this->paging;
    }
    /**
     * @param ScrollPagingScrolling $paging
     *
     * @return self
     */
    public function setPaging(ScrollPagingScrolling $paging): self
    {
        $this->initialized['paging'] = true;
        $this->paging = $paging;
        return $this;
    }
}