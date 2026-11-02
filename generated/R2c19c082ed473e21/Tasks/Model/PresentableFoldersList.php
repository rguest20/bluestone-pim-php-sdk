<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalPropertiesInterface;
class PresentableFoldersList implements AdditionalPropertiesInterface
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
    protected $numberOfAllTasks;
    /**
     * @var int
     */
    protected $numberOfUserTasks;
    /**
     * @return int
     */
    public function getNumberOfAllTasks(): int
    {
        return $this->numberOfAllTasks;
    }
    /**
     * @param int $numberOfAllTasks
     *
     * @return self
     */
    public function setNumberOfAllTasks(int $numberOfAllTasks): self
    {
        $this->initialized['numberOfAllTasks'] = true;
        $this->numberOfAllTasks = $numberOfAllTasks;
        return $this;
    }
    /**
     * @return int
     */
    public function getNumberOfUserTasks(): int
    {
        return $this->numberOfUserTasks;
    }
    /**
     * @param int $numberOfUserTasks
     *
     * @return self
     */
    public function setNumberOfUserTasks(int $numberOfUserTasks): self
    {
        $this->initialized['numberOfUserTasks'] = true;
        $this->numberOfUserTasks = $numberOfUserTasks;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['numberOfAllTasks' => ['numberOfAllTasks', 'getNumberOfAllTasks', 'setNumberOfAllTasks'], 'numberOfUserTasks' => ['numberOfUserTasks', 'getNumberOfUserTasks', 'setNumberOfUserTasks']];
    }
}