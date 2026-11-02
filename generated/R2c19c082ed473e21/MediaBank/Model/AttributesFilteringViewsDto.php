<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class AttributesFilteringViewsDto implements AdditionalPropertiesInterface
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
    protected $type;
    /**
     * @var list<string>
     */
    protected $definitionIds;
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getDefinitionIds(): array
    {
        return $this->definitionIds;
    }
    /**
     * @param list<string> $definitionIds
     *
     * @return self
     */
    public function setDefinitionIds(array $definitionIds): self
    {
        $this->initialized['definitionIds'] = true;
        $this->definitionIds = $definitionIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'definitionIds' => ['definitionIds', 'getDefinitionIds', 'setDefinitionIds']];
    }
}