<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class PersistedProductQueryListRequest
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
     * @var string
     */
    protected $queryType;
    /**
     * @var Paging
     */
    protected $paging;
    /**
     * @return string
     */
    public function getQueryType(): string
    {
        return $this->queryType;
    }
    /**
     * @param string $queryType
     *
     * @return self
     */
    public function setQueryType(string $queryType): self
    {
        $this->initialized['queryType'] = true;
        $this->queryType = $queryType;
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