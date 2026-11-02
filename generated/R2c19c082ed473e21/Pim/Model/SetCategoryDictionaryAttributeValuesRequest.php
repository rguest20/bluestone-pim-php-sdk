<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class SetCategoryDictionaryAttributeValuesRequest implements AdditionalPropertiesInterface
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
     * IDs of the dictionary values to select. This is the complete set to keep - values not listed are unselected
     * and an empty list clears the selection. Every ID must be a value of this attribute definition, and the
     * definition's limit on the number of selected values applies.
     *
     * @var list<string>|null
     */
    protected $valueIds;
    /**
     * IDs of the dictionary values to select. This is the complete set to keep - values not listed are unselected
     * and an empty list clears the selection. Every ID must be a value of this attribute definition, and the
     * definition's limit on the number of selected values applies.
     *
     * @return list<string>|null
     */
    public function getValueIds(): ?array
    {
        return $this->valueIds;
    }
    /**
    * IDs of the dictionary values to select. This is the complete set to keep - values not listed are unselected
    and an empty list clears the selection. Every ID must be a value of this attribute definition, and the
    definition's limit on the number of selected values applies.
    *
    * @param list<string>|null $valueIds
    *
    * @return self
    */
    public function setValueIds(?array $valueIds): self
    {
        $this->initialized['valueIds'] = true;
        $this->valueIds = $valueIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['valueIds' => ['valueIds', 'getValueIds', 'setValueIds']];
    }
}