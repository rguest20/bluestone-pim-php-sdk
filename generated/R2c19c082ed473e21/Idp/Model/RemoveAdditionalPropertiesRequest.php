<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class RemoveAdditionalPropertiesRequest
{
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
    protected $propertiesToRemove;
    /**
     * @return list<string>
     */
    public function getPropertiesToRemove(): array
    {
        return $this->propertiesToRemove;
    }
    /**
     * @param list<string> $propertiesToRemove
     *
     * @return self
     */
    public function setPropertiesToRemove(array $propertiesToRemove): self
    {
        $this->initialized['propertiesToRemove'] = true;
        $this->propertiesToRemove = $propertiesToRemove;
        return $this;
    }
}