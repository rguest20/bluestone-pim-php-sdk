<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class AttributeDto implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    protected $value;
    /**
     * @var list<string>|null
     */
    protected $selectValuesIds;
    /**
     * @var list<string>|null
     */
    protected $dictionaryValuesIds;
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
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getSelectValuesIds(): ?array
    {
        return $this->selectValuesIds;
    }
    /**
     * @param list<string>|null $selectValuesIds
     *
     * @return self
     */
    public function setSelectValuesIds(?array $selectValuesIds): self
    {
        $this->initialized['selectValuesIds'] = true;
        $this->selectValuesIds = $selectValuesIds;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getDictionaryValuesIds(): ?array
    {
        return $this->dictionaryValuesIds;
    }
    /**
     * @param list<string>|null $dictionaryValuesIds
     *
     * @return self
     */
    public function setDictionaryValuesIds(?array $dictionaryValuesIds): self
    {
        $this->initialized['dictionaryValuesIds'] = true;
        $this->dictionaryValuesIds = $dictionaryValuesIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['definitionId' => ['definitionId', 'getDefinitionId', 'setDefinitionId'], 'value' => ['value', 'getValue', 'setValue'], 'selectValuesIds' => ['selectValuesIds', 'getSelectValuesIds', 'setSelectValuesIds'], 'dictionaryValuesIds' => ['dictionaryValuesIds', 'getDictionaryValuesIds', 'setDictionaryValuesIds']];
    }
}