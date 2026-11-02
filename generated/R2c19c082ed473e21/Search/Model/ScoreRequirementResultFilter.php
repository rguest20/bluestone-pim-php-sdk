<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class ScoreRequirementResultFilter implements AdditionalPropertiesInterface
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
    protected $type;
    /**
     * @var list<string>|null
     */
    protected $requirementIds;
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getRequirementIds(): ?array
    {
        return $this->requirementIds;
    }
    /**
     * @param list<string>|null $requirementIds
     *
     * @return self
     */
    public function setRequirementIds(?array $requirementIds): self
    {
        $this->initialized['requirementIds'] = true;
        $this->requirementIds = $requirementIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'requirementIds' => ['requirementIds', 'getRequirementIds', 'setRequirementIds']];
    }
}