<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalPropertiesInterface;
class ProductStateSearchElementListResponse implements AdditionalPropertiesInterface
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
    protected $productId;
    /**
     * @var string
     */
    protected $papiPublishState;
    /**
     * @var string
     */
    protected $context;
    /**
     * @var bool
     */
    protected $papiOutOfSync;
    /**
     * @var string|null
     */
    protected $lastSyncState;
    /**
     * @return string
     */
    public function getProductId(): string
    {
        return $this->productId;
    }
    /**
     * @param string $productId
     *
     * @return self
     */
    public function setProductId(string $productId): self
    {
        $this->initialized['productId'] = true;
        $this->productId = $productId;
        return $this;
    }
    /**
     * @return string
     */
    public function getPapiPublishState(): string
    {
        return $this->papiPublishState;
    }
    /**
     * @param string $papiPublishState
     *
     * @return self
     */
    public function setPapiPublishState(string $papiPublishState): self
    {
        $this->initialized['papiPublishState'] = true;
        $this->papiPublishState = $papiPublishState;
        return $this;
    }
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
     * @return bool
     */
    public function getPapiOutOfSync(): bool
    {
        return $this->papiOutOfSync;
    }
    /**
     * @param bool $papiOutOfSync
     *
     * @return self
     */
    public function setPapiOutOfSync(bool $papiOutOfSync): self
    {
        $this->initialized['papiOutOfSync'] = true;
        $this->papiOutOfSync = $papiOutOfSync;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getLastSyncState(): ?string
    {
        return $this->lastSyncState;
    }
    /**
     * @param string|null $lastSyncState
     *
     * @return self
     */
    public function setLastSyncState(?string $lastSyncState): self
    {
        $this->initialized['lastSyncState'] = true;
        $this->lastSyncState = $lastSyncState;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['productId' => ['productId', 'getProductId', 'setProductId'], 'papiPublishState' => ['papiPublishState', 'getPapiPublishState', 'setPapiPublishState'], 'context' => ['context', 'getContext', 'setContext'], 'papiOutOfSync' => ['papiOutOfSync', 'getPapiOutOfSync', 'setPapiOutOfSync'], 'lastSyncState' => ['lastSyncState', 'getLastSyncState', 'setLastSyncState']];
    }
}