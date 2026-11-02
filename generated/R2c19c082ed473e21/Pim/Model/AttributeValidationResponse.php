<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class AttributeValidationResponse implements AdditionalPropertiesInterface
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
     * Array of validation data objects, each containing details about the validation results for specific attributes.
     *
     * @var list<AttributeValidationData>
     */
    protected $data;
    /**
     * Array of validation data objects, each containing details about the validation results for specific attributes.
     *
     * @return list<AttributeValidationData>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * Array of validation data objects, each containing details about the validation results for specific attributes.
     *
     * @param list<AttributeValidationData> $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['data' => ['data', 'getData', 'setData']];
    }
}