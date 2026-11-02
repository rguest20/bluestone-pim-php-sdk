<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class PersistedProductQueryDeleteRequest
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
    protected $queryId;
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
}