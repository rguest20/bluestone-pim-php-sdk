<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class AttributesInGroupHaveValuesRequirementParams implements AdditionalPropertiesInterface
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
    protected $groupId;
    /**
     * @var int
     */
    protected $percentage;
    /**
     * @return string
     */
    public function getGroupId(): string
    {
        return $this->groupId;
    }
    /**
     * @param string $groupId
     *
     * @return self
     */
    public function setGroupId(string $groupId): self
    {
        $this->initialized['groupId'] = true;
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * @return int
     */
    public function getPercentage(): int
    {
        return $this->percentage;
    }
    /**
     * @param int $percentage
     *
     * @return self
     */
    public function setPercentage(int $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['groupId' => ['groupId', 'getGroupId', 'setGroupId'], 'percentage' => ['percentage', 'getPercentage', 'setPercentage']];
    }
}