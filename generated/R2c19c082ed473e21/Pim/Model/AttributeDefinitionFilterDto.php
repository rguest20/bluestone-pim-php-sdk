<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class AttributeDefinitionFilterDto implements AdditionalPropertiesInterface
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
     * Specifies the type of attribute definition filter. Available values are `NUMBER_IN`, `ID_IN`.
     *
     * @var string
     */
    protected $type;
    /**
     * Specifies the set of values. The input of this field is used for filtering attribute definitions based on the
     * selected filter type.
     *
     * @var list<string>
     */
    protected $values;
    /**
     * Specifies the type of attribute definition filter. Available values are `NUMBER_IN`, `ID_IN`.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Specifies the type of attribute definition filter. Available values are `NUMBER_IN`, `ID_IN`.
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
     * Specifies the set of values. The input of this field is used for filtering attribute definitions based on the
     * selected filter type.
     *
     * @return list<string>
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
    * Specifies the set of values. The input of this field is used for filtering attribute definitions based on the
    selected filter type.
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