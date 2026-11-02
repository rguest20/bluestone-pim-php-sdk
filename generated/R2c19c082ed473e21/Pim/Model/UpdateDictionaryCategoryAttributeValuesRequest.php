<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class UpdateDictionaryCategoryAttributeValuesRequest implements AdditionalPropertiesInterface
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
    protected $dictionaryIds;
    /**
     * @return list<string>
     */
    public function getDictionaryIds(): array
    {
        return $this->dictionaryIds;
    }
    /**
     * @param list<string> $dictionaryIds
     *
     * @return self
     */
    public function setDictionaryIds(array $dictionaryIds): self
    {
        $this->initialized['dictionaryIds'] = true;
        $this->dictionaryIds = $dictionaryIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['dictionaryIds' => ['dictionaryIds', 'getDictionaryIds', 'setDictionaryIds']];
    }
}