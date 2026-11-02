<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class DictionaryAttributeFilterDto implements AdditionalPropertiesInterface
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
     * Filter type values based on the selected filter type, either a list of dictionary attribute value IDs or a list
     * of dictionary attribute value numbers.
     *
     * @var string
     */
    protected $type;
    /**
     * Filter type for dictionary attribute values. Either `ID_IN` or `NUMBER_IN`.
     *
     * @var list<string>
     */
    protected $values;
    /**
     * Filter type values based on the selected filter type, either a list of dictionary attribute value IDs or a list
     * of dictionary attribute value numbers.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
    * Filter type values based on the selected filter type, either a list of dictionary attribute value IDs or a list
    of dictionary attribute value numbers.
    *
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
     * Filter type for dictionary attribute values. Either `ID_IN` or `NUMBER_IN`.
     *
     * @return list<string>
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
     * Filter type for dictionary attribute values. Either `ID_IN` or `NUMBER_IN`.
     *
     * @param list<string> $values
     *
     * @return self
     */
    public function setValues(array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'values' => ['values', 'getValues', 'setValues']];
    }
}