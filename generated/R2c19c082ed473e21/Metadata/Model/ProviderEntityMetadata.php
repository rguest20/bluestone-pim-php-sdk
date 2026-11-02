<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Runtime\AdditionalPropertiesInterface;
class ProviderEntityMetadata implements AdditionalPropertiesInterface
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
    protected $entityId;
    /**
     * @var string
     */
    protected $providerName;
    /**
     * @var mixed
     */
    protected $metadata;
    /**
     * @var string
     */
    protected $contextId;
    /**
     * @return string
     */
    public function getEntityId(): string
    {
        return $this->entityId;
    }
    /**
     * @param string $entityId
     *
     * @return self
     */
    public function setEntityId(string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * @return string
     */
    public function getProviderName(): string
    {
        return $this->providerName;
    }
    /**
     * @param string $providerName
     *
     * @return self
     */
    public function setProviderName(string $providerName): self
    {
        $this->initialized['providerName'] = true;
        $this->providerName = $providerName;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
    /**
     * @param mixed $metadata
     *
     * @return self
     */
    public function setMetadata($metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
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
        return ['entityId' => ['entityId', 'getEntityId', 'setEntityId'], 'providerName' => ['providerName', 'getProviderName', 'setProviderName'], 'metadata' => ['metadata', 'getMetadata', 'setMetadata'], 'contextId' => ['contextId', 'getContextId', 'setContextId']];
    }
}