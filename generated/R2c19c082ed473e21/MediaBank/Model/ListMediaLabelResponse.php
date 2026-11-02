<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class ListMediaLabelResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<DescribeMediaLabelResponse>
     */
    protected $results;
    /**
     * @return list<DescribeMediaLabelResponse>
     */
    public function getResults(): array
    {
        return $this->results;
    }
    /**
     * @param list<DescribeMediaLabelResponse> $results
     *
     * @return self
     */
    public function setResults(array $results): self
    {
        $this->initialized['results'] = true;
        $this->results = $results;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['results' => ['results', 'getResults', 'setResults']];
    }
}