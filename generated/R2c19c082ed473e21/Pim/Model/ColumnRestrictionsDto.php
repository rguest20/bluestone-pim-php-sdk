<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ColumnRestrictionsDto implements AdditionalPropertiesInterface
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
     * Column attribute definition restrictions.
     * 
     * **Examples**:
     * 
     * Example for a new column attribute definition with three columns:
     * ```json
     * "columns": [
     *   { "value": "Column 1" },
     *   { "value": "Column 2" },
     *   { "value": "Column 3" }
     * ]
     * ```
     * 
     * Example for updating an existing column attribute definition (adding a fourth column):
     * ```json
     * "columns": [
     *   { "id": "67f5579936016948acd8da8f", "value": "Column 1" },
     *   { "id": "67f5579936016948acd8da90", "value": "Column 2" },
     *   { "id": "67f5579936016948acd8da91", "value": "Column 3" },
     *   { "value": "Column 4" }
     * ]
     * ```
     *
     * @var list<IdentifiableValueDto>|null
     */
    protected $columns;
    /**
     * Column attribute definition restrictions.
     * 
     * **Examples**:
     * 
     * Example for a new column attribute definition with three columns:
     * ```json
     * "columns": [
     *   { "value": "Column 1" },
     *   { "value": "Column 2" },
     *   { "value": "Column 3" }
     * ]
     * ```
     * 
     * Example for updating an existing column attribute definition (adding a fourth column):
     * ```json
     * "columns": [
     *   { "id": "67f5579936016948acd8da8f", "value": "Column 1" },
     *   { "id": "67f5579936016948acd8da90", "value": "Column 2" },
     *   { "id": "67f5579936016948acd8da91", "value": "Column 3" },
     *   { "value": "Column 4" }
     * ]
     * ```
     *
     * @return list<IdentifiableValueDto>|null
     */
    public function getColumns(): ?array
    {
        return $this->columns;
    }
    /**
    * Column attribute definition restrictions.
    
    **Examples**:
    
    Example for a new column attribute definition with three columns:
    ```json
    "columns": [
     { "value": "Column 1" },
     { "value": "Column 2" },
     { "value": "Column 3" }
    ]
    ```
    
    Example for updating an existing column attribute definition (adding a fourth column):
    ```json
    "columns": [
     { "id": "67f5579936016948acd8da8f", "value": "Column 1" },
     { "id": "67f5579936016948acd8da90", "value": "Column 2" },
     { "id": "67f5579936016948acd8da91", "value": "Column 3" },
     { "value": "Column 4" }
    ]
    ```
    *
    * @param list<IdentifiableValueDto>|null $columns
    *
    * @return self
    */
    public function setColumns(?array $columns): self
    {
        $this->initialized['columns'] = true;
        $this->columns = $columns;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['columns' => ['columns', 'getColumns', 'setColumns']];
    }
}