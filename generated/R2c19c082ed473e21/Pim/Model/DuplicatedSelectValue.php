<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class DuplicatedSelectValue implements AdditionalPropertiesInterface
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
     * A list of duplicated select attribute values (sometimes referred to as select attribute options).
     *
     * @var list<SelectValueIdDto>
     */
    protected $values;
    /**
     * A list of duplicated select attribute values (sometimes referred to as select attribute options).
     *
     * @return list<SelectValueIdDto>
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
     * A list of duplicated select attribute values (sometimes referred to as select attribute options).
     *
     * @param list<SelectValueIdDto> $values
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
        return ['values' => ['values', 'getValues', 'setValues']];
    }
}