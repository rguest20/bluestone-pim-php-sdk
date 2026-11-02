<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class RequirementUpdateRequest implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    protected $requirementType;
    /**
     * @var RequirementUpdateRequestParams|null
     */
    protected $params;
    /**
     * @var float|null
     */
    protected $weight;
    /**
     * @return string|null
     */
    public function getRequirementType(): ?string
    {
        return $this->requirementType;
    }
    /**
     * @param string|null $requirementType
     *
     * @return self
     */
    public function setRequirementType(?string $requirementType): self
    {
        $this->initialized['requirementType'] = true;
        $this->requirementType = $requirementType;
        return $this;
    }
    /**
     * @return RequirementUpdateRequestParams|null
     */
    public function getParams(): ?RequirementUpdateRequestParams
    {
        return $this->params;
    }
    /**
     * @param RequirementUpdateRequestParams|null $params
     *
     * @return self
     */
    public function setParams(?RequirementUpdateRequestParams $params): self
    {
        $this->initialized['params'] = true;
        $this->params = $params;
        return $this;
    }
    /**
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }
    /**
     * @param float|null $weight
     *
     * @return self
     */
    public function setWeight(?float $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['requirementType' => ['requirementType', 'getRequirementType', 'setRequirementType'], 'params' => ['params', 'getParams', 'setParams'], 'weight' => ['weight', 'getWeight', 'setWeight']];
    }
}