<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class ScoreRequirementResultFilters
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
     * @var list<string>
     */
    protected $requirementIds;
    /**
     * @var string
     */
    protected $type;
    /**
     * @return list<string>
     */
    public function getRequirementIds(): array
    {
        return $this->requirementIds;
    }
    /**
     * @param list<string> $requirementIds
     *
     * @return self
     */
    public function setRequirementIds(array $requirementIds): self
    {
        $this->initialized['requirementIds'] = true;
        $this->requirementIds = $requirementIds;
        return $this;
    }
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
}