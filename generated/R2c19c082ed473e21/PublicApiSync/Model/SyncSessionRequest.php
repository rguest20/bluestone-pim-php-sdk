<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalPropertiesInterface;
class SyncSessionRequest implements AdditionalPropertiesInterface
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
    protected $contexts;
    /**
     * @return list<string>
     */
    public function getContexts(): array
    {
        return $this->contexts;
    }
    /**
     * @param list<string> $contexts
     *
     * @return self
     */
    public function setContexts(array $contexts): self
    {
        $this->initialized['contexts'] = true;
        $this->contexts = $contexts;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['contexts' => ['contexts', 'getContexts', 'setContexts']];
    }
}