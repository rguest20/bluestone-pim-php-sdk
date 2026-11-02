<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class RecalculateScoreForEntityRequest implements AdditionalPropertiesInterface
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
    protected $context;
    /**
     * EntityId is deprecated. Please use entityIds field.
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $entityId;
    /**
     * @var list<string>|null
     */
    protected $entityIds;
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
     * EntityId is deprecated. Please use entityIds field.
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getEntityId(): ?string
    {
        return $this->entityId;
    }
    /**
     * EntityId is deprecated. Please use entityIds field.
     *
     * @param string|null $entityId
     *
     * @deprecated
     *
     * @return self
     */
    public function setEntityId(?string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getEntityIds(): ?array
    {
        return $this->entityIds;
    }
    /**
     * @param list<string>|null $entityIds
     *
     * @return self
     */
    public function setEntityIds(?array $entityIds): self
    {
        $this->initialized['entityIds'] = true;
        $this->entityIds = $entityIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['context' => ['context', 'getContext', 'setContext'], 'entityId' => ['entityId', 'getEntityId', 'setEntityId'], 'entityIds' => ['entityIds', 'getEntityIds', 'setEntityIds']];
    }
}