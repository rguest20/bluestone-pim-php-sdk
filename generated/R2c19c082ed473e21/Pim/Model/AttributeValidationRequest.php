<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class AttributeValidationRequest implements AdditionalPropertiesInterface
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
     * Specifies a list of the unique ID for attribute definition that are subject to validation. The minimum number
     * of definition IDs is 1, and the maximum allowed is 100.
     * 
     * **Example:**
     * ```
     * definitions: [
     *   {
     *     "id": "5be16d624cedfd000b2e75ff"
     *   },
     *   {
     *     "id": "5be16d624cedfd000b2e7599"
     *   }
     *
     * @var list<AttributeDefinitionIdDto>
     */
    protected $definitions;
    /**
     * Specifies a list of the unique ID for attribute definition that are subject to validation. The minimum number
     * of definition IDs is 1, and the maximum allowed is 100.
     * 
     * **Example:**
     * ```
     * definitions: [
     *   {
     *     "id": "5be16d624cedfd000b2e75ff"
     *   },
     *   {
     *     "id": "5be16d624cedfd000b2e7599"
     *   }
     *
     * @return list<AttributeDefinitionIdDto>
     */
    public function getDefinitions(): array
    {
        return $this->definitions;
    }
    /**
    * Specifies a list of the unique ID for attribute definition that are subject to validation. The minimum number
    of definition IDs is 1, and the maximum allowed is 100.
    
    **Example:**
    ```
    definitions: [
     {
       "id": "5be16d624cedfd000b2e75ff"
     },
     {
       "id": "5be16d624cedfd000b2e7599"
     }
    *
    * @param list<AttributeDefinitionIdDto> $definitions
    *
    * @return self
    */
    public function setDefinitions(array $definitions): self
    {
        $this->initialized['definitions'] = true;
        $this->definitions = $definitions;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['definitions' => ['definitions', 'getDefinitions', 'setDefinitions']];
    }
}