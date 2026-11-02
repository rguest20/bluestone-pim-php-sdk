<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class PersistedProductQueryInsertRequest
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
     * @var MainStaticQueryGroup
     */
    protected $query;
    /**
     * @var string
     */
    protected $queryId;
    /**
     * @var bool
     */
    protected $useOnlyNewIndex;
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
     * @return MainStaticQueryGroup
     */
    public function getQuery(): MainStaticQueryGroup
    {
        return $this->query;
    }
    /**
     * @param MainStaticQueryGroup $query
     *
     * @return self
     */
    public function setQuery(MainStaticQueryGroup $query): self
    {
        $this->initialized['query'] = true;
        $this->query = $query;
        return $this;
    }
    /**
     * @return string
     */
    public function getQueryId(): string
    {
        return $this->queryId;
    }
    /**
     * @param string $queryId
     *
     * @return self
     */
    public function setQueryId(string $queryId): self
    {
        $this->initialized['queryId'] = true;
        $this->queryId = $queryId;
        return $this;
    }
    /**
     * @return bool
     */
    public function getUseOnlyNewIndex(): bool
    {
        return $this->useOnlyNewIndex;
    }
    /**
     * @param bool $useOnlyNewIndex
     *
     * @return self
     */
    public function setUseOnlyNewIndex(bool $useOnlyNewIndex): self
    {
        $this->initialized['useOnlyNewIndex'] = true;
        $this->useOnlyNewIndex = $useOnlyNewIndex;
        return $this;
    }
}