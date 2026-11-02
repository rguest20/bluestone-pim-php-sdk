<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class ScoreCompletenessStateResponse implements AdditionalPropertiesInterface
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
    protected $calculationStatus;
    /**
     * @var bool
     */
    protected $recalculationRequired;
    /**
     * @return string
     */
    public function getCalculationStatus(): string
    {
        return $this->calculationStatus;
    }
    /**
     * @param string $calculationStatus
     *
     * @return self
     */
    public function setCalculationStatus(string $calculationStatus): self
    {
        $this->initialized['calculationStatus'] = true;
        $this->calculationStatus = $calculationStatus;
        return $this;
    }
    /**
     * @return bool
     */
    public function getRecalculationRequired(): bool
    {
        return $this->recalculationRequired;
    }
    /**
     * @param bool $recalculationRequired
     *
     * @return self
     */
    public function setRecalculationRequired(bool $recalculationRequired): self
    {
        $this->initialized['recalculationRequired'] = true;
        $this->recalculationRequired = $recalculationRequired;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['calculationStatus' => ['calculationStatus', 'getCalculationStatus', 'setCalculationStatus'], 'recalculationRequired' => ['recalculationRequired', 'getRecalculationRequired', 'setRecalculationRequired']];
    }
}