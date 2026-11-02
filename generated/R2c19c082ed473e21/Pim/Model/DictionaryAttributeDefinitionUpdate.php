<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class DictionaryAttributeDefinitionUpdate implements AdditionalPropertiesInterface
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
     * @var PropertyUpdateString|null
     */
    protected $dictionaryValuesMetadataType;
    /**
     * @var PropertyUpdateInteger|null
     */
    protected $selectedValuesLimit;
    /**
     * @return PropertyUpdateString|null
     */
    public function getDictionaryValuesMetadataType(): ?PropertyUpdateString
    {
        return $this->dictionaryValuesMetadataType;
    }
    /**
     * @param PropertyUpdateString|null $dictionaryValuesMetadataType
     *
     * @return self
     */
    public function setDictionaryValuesMetadataType(?PropertyUpdateString $dictionaryValuesMetadataType): self
    {
        $this->initialized['dictionaryValuesMetadataType'] = true;
        $this->dictionaryValuesMetadataType = $dictionaryValuesMetadataType;
        return $this;
    }
    /**
     * @return PropertyUpdateInteger|null
     */
    public function getSelectedValuesLimit(): ?PropertyUpdateInteger
    {
        return $this->selectedValuesLimit;
    }
    /**
     * @param PropertyUpdateInteger|null $selectedValuesLimit
     *
     * @return self
     */
    public function setSelectedValuesLimit(?PropertyUpdateInteger $selectedValuesLimit): self
    {
        $this->initialized['selectedValuesLimit'] = true;
        $this->selectedValuesLimit = $selectedValuesLimit;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['dictionaryValuesMetadataType' => ['dictionaryValuesMetadataType', 'getDictionaryValuesMetadataType', 'setDictionaryValuesMetadataType'], 'selectedValuesLimit' => ['selectedValuesLimit', 'getSelectedValuesLimit', 'setSelectedValuesLimit']];
    }
}