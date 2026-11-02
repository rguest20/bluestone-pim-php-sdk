<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class RequirementResult implements AdditionalPropertiesInterface
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
    protected $requirementId;
    /**
     * @var float
     */
    protected $weight;
    /**
     * @var string
     */
    protected $requirementStatus;
    /**
     * @return string
     */
    public function getRequirementId(): string
    {
        return $this->requirementId;
    }
    /**
     * @param string $requirementId
     *
     * @return self
     */
    public function setRequirementId(string $requirementId): self
    {
        $this->initialized['requirementId'] = true;
        $this->requirementId = $requirementId;
        return $this;
    }
    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }
    /**
     * @param float $weight
     *
     * @return self
     */
    public function setWeight(float $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * @return string
     */
    public function getRequirementStatus(): string
    {
        return $this->requirementStatus;
    }
    /**
     * @param string $requirementStatus
     *
     * @return self
     */
    public function setRequirementStatus(string $requirementStatus): self
    {
        $this->initialized['requirementStatus'] = true;
        $this->requirementStatus = $requirementStatus;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['requirementId' => ['requirementId', 'getRequirementId', 'setRequirementId'], 'weight' => ['weight', 'getWeight', 'setWeight'], 'requirementStatus' => ['requirementStatus', 'getRequirementStatus', 'setRequirementStatus']];
    }
}