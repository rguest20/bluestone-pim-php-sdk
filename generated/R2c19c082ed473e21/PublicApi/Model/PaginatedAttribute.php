<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model;

class PaginatedAttribute
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
     * @var float
     */
    protected $totalCount;
    /**
     * @var list<GroupedAttributeDefinition>
     */
    protected $results;
    /**
     * @return float
     */
    public function getTotalCount(): float
    {
        return $this->totalCount;
    }
    /**
     * @param float $totalCount
     *
     * @return self
     */
    public function setTotalCount(float $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * @return list<GroupedAttributeDefinition>
     */
    public function getResults(): array
    {
        return $this->results;
    }
    /**
     * @param list<GroupedAttributeDefinition> $results
     *
     * @return self
     */
    public function setResults(array $results): self
    {
        $this->initialized['results'] = true;
        $this->results = $results;
        return $this;
    }
}