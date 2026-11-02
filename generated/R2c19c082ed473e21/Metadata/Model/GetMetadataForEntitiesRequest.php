<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Runtime\AdditionalPropertiesInterface;
class GetMetadataForEntitiesRequest implements AdditionalPropertiesInterface
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
    protected $entitiesIds;
    /**
     * @var string
     */
    protected $contextId;
    /**
     * @return list<string>
     */
    public function getEntitiesIds(): array
    {
        return $this->entitiesIds;
    }
    /**
     * @param list<string> $entitiesIds
     *
     * @return self
     */
    public function setEntitiesIds(array $entitiesIds): self
    {
        $this->initialized['entitiesIds'] = true;
        $this->entitiesIds = $entitiesIds;
        return $this;
    }
    /**
     * @return string
     */
    public function getContextId(): string
    {
        return $this->contextId;
    }
    /**
     * @param string $contextId
     *
     * @return self
     */
    public function setContextId(string $contextId): self
    {
        $this->initialized['contextId'] = true;
        $this->contextId = $contextId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['entitiesIds' => ['entitiesIds', 'getEntitiesIds', 'setEntitiesIds'], 'contextId' => ['contextId', 'getContextId', 'setContextId']];
    }
}