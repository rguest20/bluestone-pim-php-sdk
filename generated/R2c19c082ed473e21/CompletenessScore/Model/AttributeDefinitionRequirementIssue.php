<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class AttributeDefinitionRequirementIssue implements AdditionalPropertiesInterface
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
    protected $restrictionType;
    /**
     * @return string
     */
    public function getRestrictionType(): string
    {
        return $this->restrictionType;
    }
    /**
     * @param string $restrictionType
     *
     * @return self
     */
    public function setRestrictionType(string $restrictionType): self
    {
        $this->initialized['restrictionType'] = true;
        $this->restrictionType = $restrictionType;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['restrictionType' => ['restrictionType', 'getRestrictionType', 'setRestrictionType']];
    }
}