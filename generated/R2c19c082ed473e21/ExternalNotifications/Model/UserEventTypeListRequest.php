<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalPropertiesInterface;
class UserEventTypeListRequest implements AdditionalPropertiesInterface
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
     * @var list<string>
     */
    protected $eventTypes;
    /**
     * @return list<string>
     */
    public function getEventTypes(): array
    {
        return $this->eventTypes;
    }
    /**
     * @param list<string> $eventTypes
     *
     * @return self
     */
    public function setEventTypes(array $eventTypes): self
    {
        $this->initialized['eventTypes'] = true;
        $this->eventTypes = $eventTypes;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['eventTypes' => ['eventTypes', 'getEventTypes', 'setEventTypes']];
    }
}