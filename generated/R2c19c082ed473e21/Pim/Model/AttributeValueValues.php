<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class AttributeValueValues implements AdditionalPropertiesInterface
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
     * List of attribute values associated with the product.
     * 
     * **Note**: For a simple attribute type like `text` that only have one value, only the first string in the list will be used to set the new value.
     *
     * @var list<string>|null
     */
    protected $values;
    /**
     * List of attribute values associated with the product.
     * 
     * **Note**: For a simple attribute type like `text` that only have one value, only the first string in the list will be used to set the new value.
     *
     * @return list<string>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }
    /**
     * List of attribute values associated with the product.
     **Note**: For a simple attribute type like `text` that only have one value, only the first string in the list will be used to set the new value.
     *
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
        return ['values' => ['values', 'getValues', 'setValues']];
    }
}