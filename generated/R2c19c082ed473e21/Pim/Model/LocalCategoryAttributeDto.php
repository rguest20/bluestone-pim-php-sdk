<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class LocalCategoryAttributeDto implements AdditionalPropertiesInterface
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
     * @var list<string>|null
     */
    protected $dictionaryIds;
    /**
     * @var bool
     */
    protected $readOnly;
    /**
     * @var list<string>|null
     */
    protected $selectIds;
    /**
     * @var string|null
     */
    protected $value;
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
     * @return list<string>|null
     */
    public function getDictionaryIds(): ?array
    {
        return $this->dictionaryIds;
    }
    /**
     * @param list<string>|null $dictionaryIds
     *
     * @return self
     */
    public function setDictionaryIds(?array $dictionaryIds): self
    {
        $this->initialized['dictionaryIds'] = true;
        $this->dictionaryIds = $dictionaryIds;
        return $this;
    }
    /**
     * @return bool
     */
    public function getReadOnly(): bool
    {
        return $this->readOnly;
    }
    /**
     * @param bool $readOnly
     *
     * @return self
     */
    public function setReadOnly(bool $readOnly): self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getSelectIds(): ?array
    {
        return $this->selectIds;
    }
    /**
     * @param list<string>|null $selectIds
     *
     * @return self
     */
    public function setSelectIds(?array $selectIds): self
    {
        $this->initialized['selectIds'] = true;
        $this->selectIds = $selectIds;
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
    public function definedProperties(): array
    {
        return ['definitionId' => ['definitionId', 'getDefinitionId', 'setDefinitionId'], 'dictionaryIds' => ['dictionaryIds', 'getDictionaryIds', 'setDictionaryIds'], 'readOnly' => ['readOnly', 'getReadOnly', 'setReadOnly'], 'selectIds' => ['selectIds', 'getSelectIds', 'setSelectIds'], 'value' => ['value', 'getValue', 'setValue']];
    }
}