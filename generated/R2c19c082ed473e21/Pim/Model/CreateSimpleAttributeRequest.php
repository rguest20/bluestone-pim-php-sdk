<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class CreateSimpleAttributeRequest implements AdditionalPropertiesInterface
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
     * Specifies the ID of the attribute definition to be added to the product.
     * 
     * **Note**: Only simple attribute types are supported by this endpoint, not `dictionary`, `column` or `matrix`.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @var string
     */
    protected $definitionId;
    /**
     * Specifies value(s) of the attribute for the product.
     * 
     * **Example for a decimal attribute**:
     * ```json
     *   "values": [
     *     "1.5"
     *   ]
     * ```
     * **Example for a boolean attribute**:
     * ```json
     *   "values": [
     *     "true"
     *   ]
     * ```
     * **Example for a multi-select attribute with two selected options**:
     * ```json
     *   "values": [
     *     "660fdaf0e0dad11667037a0d",
     *     "660fdaf0e0dad11667037a0e"
     *   ]
     * ```
     *
     * @var list<string>|null
     */
    protected $values;
    /**
     * Specifies the ID of the attribute definition to be added to the product.
     * 
     * **Note**: Only simple attribute types are supported by this endpoint, not `dictionary`, `column` or `matrix`.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @return string
     */
    public function getDefinitionId(): string
    {
        return $this->definitionId;
    }
    /**
     * Specifies the ID of the attribute definition to be added to the product.
     **Note**: Only simple attribute types are supported by this endpoint, not `dictionary`, `column` or `matrix`.
     **Example:** `634c26e14cedfd0001775e9f`
     *
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
     * Specifies value(s) of the attribute for the product.
     * 
     * **Example for a decimal attribute**:
     * ```json
     *   "values": [
     *     "1.5"
     *   ]
     * ```
     * **Example for a boolean attribute**:
     * ```json
     *   "values": [
     *     "true"
     *   ]
     * ```
     * **Example for a multi-select attribute with two selected options**:
     * ```json
     *   "values": [
     *     "660fdaf0e0dad11667037a0d",
     *     "660fdaf0e0dad11667037a0e"
     *   ]
     * ```
     *
     * @return list<string>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }
    /**
    * Specifies value(s) of the attribute for the product.
    
    **Example for a decimal attribute**:
    ```json
     "values": [
       "1.5"
     ]
    ```
    **Example for a boolean attribute**:
    ```json
     "values": [
       "true"
     ]
    ```
    **Example for a multi-select attribute with two selected options**:
    ```json
     "values": [
       "660fdaf0e0dad11667037a0d",
       "660fdaf0e0dad11667037a0e"
     ]
    ```
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
        return ['definitionId' => ['definitionId', 'getDefinitionId', 'setDefinitionId'], 'values' => ['values', 'getValues', 'setValues']];
    }
}