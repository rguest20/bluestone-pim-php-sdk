<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class CategoryFilter implements AdditionalPropertiesInterface
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
     * Filter type for category searches.
     * 
     * Use `NUMBER_IN` to send in a list of category (catalog node) numbers, or use `ID_IN` to send in a list of category (catalog node) IDs.
     *
     * @var string
     */
    protected $type;
    /**
     * List of filter values for category searches.
     * 
     * Depending on the `type` property, this should be a list of category (catalog node) numbers, or a list of category (catalog node) IDs.
     *
     * @var list<string>
     */
    protected $values;
    /**
     * Filter type for category searches.
     * 
     * Use `NUMBER_IN` to send in a list of category (catalog node) numbers, or use `ID_IN` to send in a list of category (catalog node) IDs.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
    * Filter type for category searches.
    
    Use `NUMBER_IN` to send in a list of category (catalog node) numbers, or use `ID_IN` to send in a list of category (catalog node) IDs.
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
     * List of filter values for category searches.
     * 
     * Depending on the `type` property, this should be a list of category (catalog node) numbers, or a list of category (catalog node) IDs.
     *
     * @return list<string>
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
    * List of filter values for category searches.
    
    Depending on the `type` property, this should be a list of category (catalog node) numbers, or a list of category (catalog node) IDs.
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