<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalPropertiesInterface;
class CategoryStateSearchElementListResponse implements AdditionalPropertiesInterface
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
    protected $categoryId;
    /**
     * @var string
     */
    protected $context;
    /**
     * @var bool
     */
    protected $papiOutOfSync;
    /**
     * @var string
     */
    protected $papiPublishState;
    /**
     * @return string
     */
    public function getCategoryId(): string
    {
        return $this->categoryId;
    }
    /**
     * @param string $categoryId
     *
     * @return self
     */
    public function setCategoryId(string $categoryId): self
    {
        $this->initialized['categoryId'] = true;
        $this->categoryId = $categoryId;
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
    public function definedProperties(): array
    {
        return ['categoryId' => ['categoryId', 'getCategoryId', 'setCategoryId'], 'context' => ['context', 'getContext', 'setContext'], 'papiOutOfSync' => ['papiOutOfSync', 'getPapiOutOfSync', 'setPapiOutOfSync'], 'papiPublishState' => ['papiPublishState', 'getPapiPublishState', 'setPapiPublishState']];
    }
}