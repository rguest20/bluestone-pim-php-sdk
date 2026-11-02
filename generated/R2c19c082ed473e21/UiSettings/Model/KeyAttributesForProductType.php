<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model;

class KeyAttributesForProductType
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
    protected $attributeDefinitionIds;
    /**
     * @return list<string>
     */
    public function getAttributeDefinitionIds(): array
    {
        return $this->attributeDefinitionIds;
    }
    /**
     * @param list<string> $attributeDefinitionIds
     *
     * @return self
     */
    public function setAttributeDefinitionIds(array $attributeDefinitionIds): self
    {
        $this->initialized['attributeDefinitionIds'] = true;
        $this->attributeDefinitionIds = $attributeDefinitionIds;
        return $this;
    }
}