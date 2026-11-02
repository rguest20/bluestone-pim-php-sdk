<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalPropertiesInterface;
class AggregationFrequencyResponse implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $dayOfWeek;
    /**
     * @var string
     */
    protected $frequencyType;
    /**
     * @var int
     */
    protected $hour;
    /**
     * @var string
     */
    protected $timeZoneId;
    /**
     * @return string
     */
    public function getDayOfWeek(): string
    {
        return $this->dayOfWeek;
    }
    /**
     * @param string $dayOfWeek
     *
     * @return self
     */
    public function setDayOfWeek(string $dayOfWeek): self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * @return string
     */
    public function getFrequencyType(): string
    {
        return $this->frequencyType;
    }
    /**
     * @param string $frequencyType
     *
     * @return self
     */
    public function setFrequencyType(string $frequencyType): self
    {
        $this->initialized['frequencyType'] = true;
        $this->frequencyType = $frequencyType;
        return $this;
    }
    /**
     * @return int
     */
    public function getHour(): int
    {
        return $this->hour;
    }
    /**
     * @param int $hour
     *
     * @return self
     */
    public function setHour(int $hour): self
    {
        $this->initialized['hour'] = true;
        $this->hour = $hour;
        return $this;
    }
    /**
     * @return string
     */
    public function getTimeZoneId(): string
    {
        return $this->timeZoneId;
    }
    /**
     * @param string $timeZoneId
     *
     * @return self
     */
    public function setTimeZoneId(string $timeZoneId): self
    {
        $this->initialized['timeZoneId'] = true;
        $this->timeZoneId = $timeZoneId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['dayOfWeek' => ['dayOfWeek', 'getDayOfWeek', 'setDayOfWeek'], 'frequencyType' => ['frequencyType', 'getFrequencyType', 'setFrequencyType'], 'hour' => ['hour', 'getHour', 'setHour'], 'timeZoneId' => ['timeZoneId', 'getTimeZoneId', 'setTimeZoneId']];
    }
}