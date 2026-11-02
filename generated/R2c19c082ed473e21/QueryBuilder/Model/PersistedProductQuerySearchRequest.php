<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class PersistedProductQuerySearchRequest
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
     * @var string
     */
    protected $productId;
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
     * @return string
     */
    public function getProductId(): string
    {
        return $this->productId;
    }
    /**
     * @param string $productId
     *
     * @return self
     */
    public function setProductId(string $productId): self
    {
        $this->initialized['productId'] = true;
        $this->productId = $productId;
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