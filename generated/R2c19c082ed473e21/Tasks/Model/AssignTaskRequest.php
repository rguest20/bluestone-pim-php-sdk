<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalPropertiesInterface;
class AssignTaskRequest implements AdditionalPropertiesInterface
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
    protected $assignee;
    /**
     * @var string
     */
    protected $assigneeType;
    /**
     * @return string
     */
    public function getAssignee(): string
    {
        return $this->assignee;
    }
    /**
     * @param string $assignee
     *
     * @return self
     */
    public function setAssignee(string $assignee): self
    {
        $this->initialized['assignee'] = true;
        $this->assignee = $assignee;
        return $this;
    }
    /**
     * @return string
     */
    public function getAssigneeType(): string
    {
        return $this->assigneeType;
    }
    /**
     * @param string $assigneeType
     *
     * @return self
     */
    public function setAssigneeType(string $assigneeType): self
    {
        $this->initialized['assigneeType'] = true;
        $this->assigneeType = $assigneeType;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['assignee' => ['assignee', 'getAssignee', 'setAssignee'], 'assigneeType' => ['assigneeType', 'getAssigneeType', 'setAssigneeType']];
    }
}