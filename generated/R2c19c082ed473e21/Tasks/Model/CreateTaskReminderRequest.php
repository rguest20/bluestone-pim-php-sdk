<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalPropertiesInterface;
class CreateTaskReminderRequest implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $remindBeforeTime;
    /**
     * @return int
     */
    public function getRemindBeforeTime(): int
    {
        return $this->remindBeforeTime;
    }
    /**
     * @param int $remindBeforeTime
     *
     * @return self
     */
    public function setRemindBeforeTime(int $remindBeforeTime): self
    {
        $this->initialized['remindBeforeTime'] = true;
        $this->remindBeforeTime = $remindBeforeTime;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['remindBeforeTime' => ['remindBeforeTime', 'getRemindBeforeTime', 'setRemindBeforeTime']];
    }
}