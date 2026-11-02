<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ValidableAttribute implements AdditionalPropertiesInterface
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
    protected $dictionaryValueIds;
    /**
     * @var list<string>|null
     */
    protected $selectValueIds;
    /**
     * @var list<string>|null
     */
    protected $values;
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
    public function getDictionaryValueIds(): ?array
    {
        return $this->dictionaryValueIds;
    }
    /**
     * @param list<string>|null $dictionaryValueIds
     *
     * @return self
     */
    public function setDictionaryValueIds(?array $dictionaryValueIds): self
    {
        $this->initialized['dictionaryValueIds'] = true;
        $this->dictionaryValueIds = $dictionaryValueIds;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getSelectValueIds(): ?array
    {
        return $this->selectValueIds;
    }
    /**
     * @param list<string>|null $selectValueIds
     *
     * @return self
     */
    public function setSelectValueIds(?array $selectValueIds): self
    {
        $this->initialized['selectValueIds'] = true;
        $this->selectValueIds = $selectValueIds;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }
    /**
     * @param list<string>|null $values
     *
     * @return self
     */
    public function setValues(?array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['definitionId' => ['definitionId', 'getDefinitionId', 'setDefinitionId'], 'dictionaryValueIds' => ['dictionaryValueIds', 'getDictionaryValueIds', 'setDictionaryValueIds'], 'selectValueIds' => ['selectValueIds', 'getSelectValueIds', 'setSelectValueIds'], 'values' => ['values', 'getValues', 'setValues']];
    }
}