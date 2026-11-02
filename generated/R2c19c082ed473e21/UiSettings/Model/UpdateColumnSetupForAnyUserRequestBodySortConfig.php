<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Runtime\AdditionalPropertiesInterface;
class UpdateColumnSetupForAnyUserRequestBodySortConfig implements AdditionalPropertiesInterface
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
    protected $columnId;
    /**
     * @var string
     */
    protected $direction;
    /**
     * @return string
     */
    public function getColumnId(): string
    {
        return $this->columnId;
    }
    /**
     * @param string $columnId
     *
     * @return self
     */
    public function setColumnId(string $columnId): self
    {
        $this->initialized['columnId'] = true;
        $this->columnId = $columnId;
        return $this;
    }
    /**
     * @return string
     */
    public function getDirection(): string
    {
        return $this->direction;
    }
    /**
     * @param string $direction
     *
     * @return self
     */
    public function setDirection(string $direction): self
    {
        $this->initialized['direction'] = true;
        $this->direction = $direction;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['columnId' => ['columnId', 'getColumnId', 'setColumnId'], 'direction' => ['direction', 'getDirection', 'setDirection']];
    }
}