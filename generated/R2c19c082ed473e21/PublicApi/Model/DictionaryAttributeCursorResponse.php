<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model;

class DictionaryAttributeCursorResponse
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
    protected $nextCursor;
    /**
     * @var list<DictionaryValueDefinition>
     */
    protected $results;
    /**
     * @return string
     */
    public function getNextCursor(): string
    {
        return $this->nextCursor;
    }
    /**
     * @param string $nextCursor
     *
     * @return self
     */
    public function setNextCursor(string $nextCursor): self
    {
        $this->initialized['nextCursor'] = true;
        $this->nextCursor = $nextCursor;
        return $this;
    }
    /**
     * @return list<DictionaryValueDefinition>
     */
    public function getResults(): array
    {
        return $this->results;
    }
    /**
     * @param list<DictionaryValueDefinition> $results
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