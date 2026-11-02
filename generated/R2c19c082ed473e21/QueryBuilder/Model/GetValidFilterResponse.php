<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class GetValidFilterResponse
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
     * @var PureProductFilters|MainQueryGroup
     */
    protected $filter;
    /**
     * @var bool
     */
    protected $isOriginalValid;
    /**
     * @return PureProductFilters|MainQueryGroup
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * @param PureProductFilters|MainQueryGroup $filter
     *
     * @return self
     */
    public function setFilter($filter): self
    {
        $this->initialized['filter'] = true;
        $this->filter = $filter;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsOriginalValid(): bool
    {
        return $this->isOriginalValid;
    }
    /**
     * @param bool $isOriginalValid
     *
     * @return self
     */
    public function setIsOriginalValid(bool $isOriginalValid): self
    {
        $this->initialized['isOriginalValid'] = true;
        $this->isOriginalValid = $isOriginalValid;
        return $this;
    }
}