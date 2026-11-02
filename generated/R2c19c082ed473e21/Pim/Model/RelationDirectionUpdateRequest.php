<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class RelationDirectionUpdateRequest implements AdditionalPropertiesInterface
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
     * Target direction of the relation (`ONE_WAY` or `TWO_WAY`).
     *
     * @var string
     */
    protected $direction;
    /**
     * Target direction of the relation (`ONE_WAY` or `TWO_WAY`).
     *
     * @return string
     */
    public function getDirection(): string
    {
        return $this->direction;
    }
    /**
     * Target direction of the relation (`ONE_WAY` or `TWO_WAY`).
     *
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
        return ['direction' => ['direction', 'getDirection', 'setDirection']];
    }
}