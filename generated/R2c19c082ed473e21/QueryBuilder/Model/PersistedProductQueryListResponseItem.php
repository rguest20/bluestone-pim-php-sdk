<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class PersistedProductQueryListResponseItem
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
    protected $id;
    /**
     * @var MainStaticQueryGroup
     */
    protected $query;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
}