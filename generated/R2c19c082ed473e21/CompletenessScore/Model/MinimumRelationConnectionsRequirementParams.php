<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class MinimumRelationConnectionsRequirementParams implements AdditionalPropertiesInterface
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
    protected $connectionCount;
    /**
     * @var string
     */
    protected $relationId;
    /**
     * @var string|null
     */
    protected $direction;
    /**
     * @return int
     */
    public function getConnectionCount(): int
    {
        return $this->connectionCount;
    }
    /**
     * @param int $connectionCount
     *
     * @return self
     */
    public function setConnectionCount(int $connectionCount): self
    {
        $this->initialized['connectionCount'] = true;
        $this->connectionCount = $connectionCount;
        return $this;
    }
    /**
     * @return string
     */
    public function getRelationId(): string
    {
        return $this->relationId;
    }
    /**
     * @param string $relationId
     *
     * @return self
     */
    public function setRelationId(string $relationId): self
    {
        $this->initialized['relationId'] = true;
        $this->relationId = $relationId;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->direction;
    }
    /**
     * @param string|null $direction
     *
     * @return self
     */
    public function setDirection(?string $direction): self
    {
        $this->initialized['direction'] = true;
        $this->direction = $direction;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['connectionCount' => ['connectionCount', 'getConnectionCount', 'setConnectionCount'], 'relationId' => ['relationId', 'getRelationId', 'setRelationId'], 'direction' => ['direction', 'getDirection', 'setDirection']];
    }
}