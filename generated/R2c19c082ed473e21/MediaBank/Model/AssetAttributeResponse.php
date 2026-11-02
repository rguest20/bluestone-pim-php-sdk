<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class AssetAttributeResponse implements AdditionalPropertiesInterface
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
    protected $definitionId;
    /**
     * @var string
     */
    protected $value;
    /**
     * @var list<string>
     */
    protected $selectValueIds;
    /**
     * @var list<string>
     */
    protected $dictionaryValueIds;
    /**
     * @return string
     */
    public function getDefinitionId(): string
    {
        return $this->definitionId;
    }
    /**
     * @param string $definitionId
     *
     * @return self
     */
    public function setDefinitionId(string $definitionId): self
    {
        $this->initialized['definitionId'] = true;
        $this->definitionId = $definitionId;
        return $this;
    }
    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getSelectValueIds(): array
    {
        return $this->selectValueIds;
    }
    /**
     * @param list<string> $selectValueIds
     *
     * @return self
     */
    public function setSelectValueIds(array $selectValueIds): self
    {
        $this->initialized['selectValueIds'] = true;
        $this->selectValueIds = $selectValueIds;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getDictionaryValueIds(): array
    {
        return $this->dictionaryValueIds;
    }
    /**
     * @param list<string> $dictionaryValueIds
     *
     * @return self
     */
    public function setDictionaryValueIds(array $dictionaryValueIds): self
    {
        $this->initialized['dictionaryValueIds'] = true;
        $this->dictionaryValueIds = $dictionaryValueIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['definitionId' => ['definitionId', 'getDefinitionId', 'setDefinitionId'], 'value' => ['value', 'getValue', 'setValue'], 'selectValueIds' => ['selectValueIds', 'getSelectValueIds', 'setSelectValueIds'], 'dictionaryValueIds' => ['dictionaryValueIds', 'getDictionaryValueIds', 'setDictionaryValueIds']];
    }
}