<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalPropertiesInterface;
class CreateTaskRequest implements AdditionalPropertiesInterface
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
    protected $title;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $assignee;
    /**
     * @var string
     */
    protected $assigneeType;
    /**
     * @var string
     */
    protected $dueDate;
    /**
     * @var string
     */
    protected $context;
    /**
     * @var bool
     */
    protected $isPrivate;
    /**
     * @var int
     */
    protected $assigneeReminderTime;
    /**
     * @var int
     */
    protected $creatorReminderTime;
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
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
    /**
     * @return string
     */
    public function getDueDate(): string
    {
        return $this->dueDate;
    }
    /**
     * @param string $dueDate
     *
     * @return self
     */
    public function setDueDate(string $dueDate): self
    {
        $this->initialized['dueDate'] = true;
        $this->dueDate = $dueDate;
        return $this;
    }
    /**
     * @return string
     */
    public function getContext(): string
    {
        return $this->context;
    }
    /**
     * @param string $context
     *
     * @return self
     */
    public function setContext(string $context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsPrivate(): bool
    {
        return $this->isPrivate;
    }
    /**
     * @param bool $isPrivate
     *
     * @return self
     */
    public function setIsPrivate(bool $isPrivate): self
    {
        $this->initialized['isPrivate'] = true;
        $this->isPrivate = $isPrivate;
        return $this;
    }
    /**
     * @return int
     */
    public function getAssigneeReminderTime(): int
    {
        return $this->assigneeReminderTime;
    }
    /**
     * @param int $assigneeReminderTime
     *
     * @return self
     */
    public function setAssigneeReminderTime(int $assigneeReminderTime): self
    {
        $this->initialized['assigneeReminderTime'] = true;
        $this->assigneeReminderTime = $assigneeReminderTime;
        return $this;
    }
    /**
     * @return int
     */
    public function getCreatorReminderTime(): int
    {
        return $this->creatorReminderTime;
    }
    /**
     * @param int $creatorReminderTime
     *
     * @return self
     */
    public function setCreatorReminderTime(int $creatorReminderTime): self
    {
        $this->initialized['creatorReminderTime'] = true;
        $this->creatorReminderTime = $creatorReminderTime;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['title' => ['title', 'getTitle', 'setTitle'], 'description' => ['description', 'getDescription', 'setDescription'], 'assignee' => ['assignee', 'getAssignee', 'setAssignee'], 'assigneeType' => ['assigneeType', 'getAssigneeType', 'setAssigneeType'], 'dueDate' => ['dueDate', 'getDueDate', 'setDueDate'], 'context' => ['context', 'getContext', 'setContext'], 'isPrivate' => ['isPrivate', 'getIsPrivate', 'setIsPrivate'], 'assigneeReminderTime' => ['assigneeReminderTime', 'getAssigneeReminderTime', 'setAssigneeReminderTime'], 'creatorReminderTime' => ['creatorReminderTime', 'getCreatorReminderTime', 'setCreatorReminderTime']];
    }
}