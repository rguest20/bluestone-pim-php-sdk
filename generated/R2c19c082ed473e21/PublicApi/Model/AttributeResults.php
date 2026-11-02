<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model;

class AttributeResults
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
     * @var list<GroupedAttributeDefinition>
     */
    protected $results;
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