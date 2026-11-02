<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalPropertiesInterface;
class FrequencyConfigRequest implements AdditionalPropertiesInterface
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
     * @var bool
     */
    protected $aggregated;
    /**
     * @var AggregationFrequencyRequest
     */
    protected $aggregationFrequency;
    /**
     * @var bool
     */
    protected $immediately;
    /**
     * @return bool
     */
    public function getAggregated(): bool
    {
        return $this->aggregated;
    }
    /**
     * @param bool $aggregated
     *
     * @return self
     */
    public function setAggregated(bool $aggregated): self
    {
        $this->initialized['aggregated'] = true;
        $this->aggregated = $aggregated;
        return $this;
    }
    /**
     * @return AggregationFrequencyRequest
     */
    public function getAggregationFrequency(): AggregationFrequencyRequest
    {
        return $this->aggregationFrequency;
    }
    /**
     * @param AggregationFrequencyRequest $aggregationFrequency
     *
     * @return self
     */
    public function setAggregationFrequency(AggregationFrequencyRequest $aggregationFrequency): self
    {
        $this->initialized['aggregationFrequency'] = true;
        $this->aggregationFrequency = $aggregationFrequency;
        return $this;
    }
    /**
     * @return bool
     */
    public function getImmediately(): bool
    {
        return $this->immediately;
    }
    /**
     * @param bool $immediately
     *
     * @return self
     */
    public function setImmediately(bool $immediately): self
    {
        $this->initialized['immediately'] = true;
        $this->immediately = $immediately;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['aggregated' => ['aggregated', 'getAggregated', 'setAggregated'], 'aggregationFrequency' => ['aggregationFrequency', 'getAggregationFrequency', 'setAggregationFrequency'], 'immediately' => ['immediately', 'getImmediately', 'setImmediately']];
    }
}