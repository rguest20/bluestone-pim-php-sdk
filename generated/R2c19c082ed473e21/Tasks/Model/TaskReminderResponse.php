<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalPropertiesInterface;
class TaskReminderResponse implements AdditionalPropertiesInterface
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
    protected $id;
    /**
     * @var string
     */
    protected $taskId;
    /**
     * @var int
     */
    protected $reminderTime;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getTaskId(): string
    {
        return $this->taskId;
    }
    /**
     * @param string $taskId
     *
     * @return self
     */
    public function setTaskId(string $taskId): self
    {
        $this->initialized['taskId'] = true;
        $this->taskId = $taskId;
        return $this;
    }
    /**
     * @return int
     */
    public function getReminderTime(): int
    {
        return $this->reminderTime;
    }
    /**
     * @param int $reminderTime
     *
     * @return self
     */
    public function setReminderTime(int $reminderTime): self
    {
        $this->initialized['reminderTime'] = true;
        $this->reminderTime = $reminderTime;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'taskId' => ['taskId', 'getTaskId', 'setTaskId'], 'reminderTime' => ['reminderTime', 'getReminderTime', 'setReminderTime']];
    }
}