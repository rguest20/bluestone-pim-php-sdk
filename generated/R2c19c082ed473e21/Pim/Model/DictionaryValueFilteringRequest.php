<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class DictionaryValueFilteringRequest implements AdditionalPropertiesInterface
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
     * The `filters` property allows you to retrieve the valid values/options for **either** a parent dictionary
     * or a child dictionary, depending on your current use case. This is relevant when working with
     * **filtered dictionaries**, where a child dictionary's values are dependent on selections made in a parent dictionary.
     * 
     * **Note**: The `id` property should be the ID of the child dictionary attribute definition.
     * 
     * The `filters` object has two required sub-properties:
     * 
     * - `type`: Indicates whether you are filtering by a **parent value/option** or a **child value/option**.
     *   - Allowed values:
     *     - `"PARENT_VALUE_ID_IN"` – Use this when you have selected one or more values/options in the **parent dictionary**,
     *       and want to fetch the **valid child values/options**.
     *     - `"CHILD_VALUE_ID_IN"` – Use this when you have one or more values/options in the **child dictionary**,
     *       and want to fetch the **corresponding parent values/options**.
     * - `valueIds`: An array of selected value/option IDs, depending on the `type`.
     *   - If `type` is `"PARENT_VALUE_ID_IN"`, this should be an array of parent dictionary value IDs.
     *   - If `type` is `"CHILD_VALUE_ID_IN"`, this should be an array of child dictionary value IDs.
     * 
     * ### Example Use Cases
     * 
     * 1. **Filtering Child Values by Parent Selection**
     *    Use this when you're working with a child dictionary and want to display only the values that match
     *    one or more selected values in the parent dictionary.
     * 
     * ```json
     * "filters": [
     *   {
     *     "type": "PARENT_VALUE_ID_IN",
     *     "valueIds": [
     *       "{parent_val_1_id}",
     *       "{parent_val_3_id}"
     *     ]
     *   }
     * ]
     * ```
     * 
     * The response will include the subset of value IDs in the child dictionary that are allowed when
     * `parent_val_1` and `parent_val_3` are selected.
     * 
     * 2. **Filtering Parent Values by Child Selection**
     *    Use this when you're in the context of the child dictionary and want to determine which parent
     *    values are linked to one or more selected child values.
     * 
     * ```json
     * "filters": [
     *   {
     *     "type": "CHILD_VALUE_ID_IN",
     *     "valueIds": [
     *       "{child_val_3_id}",
     *       "{child_val_7_id}"
     *     ]
     *   }
     * ]
     * ```
     * 
     * The response will include the parent dictionary value IDs that are associated with the selected
     * child values `child_val_3` and `child_val_7`.
     *
     * @var list<DictionaryValueFilterDto>
     */
    protected $filters;
    /**
     * Specifies the number of items to return in each page. The value must be between 1 and 100.
     *
     * @var int
     */
    protected $page;
    /**
     * Specifies the page number for pagination. Default value is 0.
     *
     * @var int
     */
    protected $pageSize;
    /**
     * The `filters` property allows you to retrieve the valid values/options for **either** a parent dictionary
     * or a child dictionary, depending on your current use case. This is relevant when working with
     * **filtered dictionaries**, where a child dictionary's values are dependent on selections made in a parent dictionary.
     * 
     * **Note**: The `id` property should be the ID of the child dictionary attribute definition.
     * 
     * The `filters` object has two required sub-properties:
     * 
     * - `type`: Indicates whether you are filtering by a **parent value/option** or a **child value/option**.
     *   - Allowed values:
     *     - `"PARENT_VALUE_ID_IN"` – Use this when you have selected one or more values/options in the **parent dictionary**,
     *       and want to fetch the **valid child values/options**.
     *     - `"CHILD_VALUE_ID_IN"` – Use this when you have one or more values/options in the **child dictionary**,
     *       and want to fetch the **corresponding parent values/options**.
     * - `valueIds`: An array of selected value/option IDs, depending on the `type`.
     *   - If `type` is `"PARENT_VALUE_ID_IN"`, this should be an array of parent dictionary value IDs.
     *   - If `type` is `"CHILD_VALUE_ID_IN"`, this should be an array of child dictionary value IDs.
     * 
     * ### Example Use Cases
     * 
     * 1. **Filtering Child Values by Parent Selection**
     *    Use this when you're working with a child dictionary and want to display only the values that match
     *    one or more selected values in the parent dictionary.
     * 
     * ```json
     * "filters": [
     *   {
     *     "type": "PARENT_VALUE_ID_IN",
     *     "valueIds": [
     *       "{parent_val_1_id}",
     *       "{parent_val_3_id}"
     *     ]
     *   }
     * ]
     * ```
     * 
     * The response will include the subset of value IDs in the child dictionary that are allowed when
     * `parent_val_1` and `parent_val_3` are selected.
     * 
     * 2. **Filtering Parent Values by Child Selection**
     *    Use this when you're in the context of the child dictionary and want to determine which parent
     *    values are linked to one or more selected child values.
     * 
     * ```json
     * "filters": [
     *   {
     *     "type": "CHILD_VALUE_ID_IN",
     *     "valueIds": [
     *       "{child_val_3_id}",
     *       "{child_val_7_id}"
     *     ]
     *   }
     * ]
     * ```
     * 
     * The response will include the parent dictionary value IDs that are associated with the selected
     * child values `child_val_3` and `child_val_7`.
     *
     * @return list<DictionaryValueFilterDto>
     */
    public function getFilters(): array
    {
        return $this->filters;
    }
    /**
    * The `filters` property allows you to retrieve the valid values/options for **either** a parent dictionary
    or a child dictionary, depending on your current use case. This is relevant when working with
    **filtered dictionaries**, where a child dictionary's values are dependent on selections made in a parent dictionary.
    
    **Note**: The `id` property should be the ID of the child dictionary attribute definition.
    
    The `filters` object has two required sub-properties:
    
    - `type`: Indicates whether you are filtering by a **parent value/option** or a **child value/option**.
     - Allowed values:
       - `"PARENT_VALUE_ID_IN"` – Use this when you have selected one or more values/options in the **parent dictionary**,
         and want to fetch the **valid child values/options**.
       - `"CHILD_VALUE_ID_IN"` – Use this when you have one or more values/options in the **child dictionary**,
         and want to fetch the **corresponding parent values/options**.
    - `valueIds`: An array of selected value/option IDs, depending on the `type`.
     - If `type` is `"PARENT_VALUE_ID_IN"`, this should be an array of parent dictionary value IDs.
     - If `type` is `"CHILD_VALUE_ID_IN"`, this should be an array of child dictionary value IDs.
    
    ### Example Use Cases
    
    1. **Filtering Child Values by Parent Selection**
      Use this when you're working with a child dictionary and want to display only the values that match
      one or more selected values in the parent dictionary.
    
    ```json
    "filters": [
     {
       "type": "PARENT_VALUE_ID_IN",
       "valueIds": [
         "{parent_val_1_id}",
         "{parent_val_3_id}"
       ]
     }
    ]
    ```
    
    The response will include the subset of value IDs in the child dictionary that are allowed when
    `parent_val_1` and `parent_val_3` are selected.
    
    2. **Filtering Parent Values by Child Selection**
      Use this when you're in the context of the child dictionary and want to determine which parent
      values are linked to one or more selected child values.
    
    ```json
    "filters": [
     {
       "type": "CHILD_VALUE_ID_IN",
       "valueIds": [
         "{child_val_3_id}",
         "{child_val_7_id}"
       ]
     }
    ]
    ```
    
    The response will include the parent dictionary value IDs that are associated with the selected
    child values `child_val_3` and `child_val_7`.
    *
    * @param list<DictionaryValueFilterDto> $filters
    *
    * @return self
    */
    public function setFilters(array $filters): self
    {
        $this->initialized['filters'] = true;
        $this->filters = $filters;
        return $this;
    }
    /**
     * Specifies the number of items to return in each page. The value must be between 1 and 100.
     *
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
    /**
     * Specifies the number of items to return in each page. The value must be between 1 and 100.
     *
     * @param int $page
     *
     * @return self
     */
    public function setPage(int $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
    /**
     * Specifies the page number for pagination. Default value is 0.
     *
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }
    /**
     * Specifies the page number for pagination. Default value is 0.
     *
     * @param int $pageSize
     *
     * @return self
     */
    public function setPageSize(int $pageSize): self
    {
        $this->initialized['pageSize'] = true;
        $this->pageSize = $pageSize;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['filters' => ['filters', 'getFilters', 'setFilters'], 'page' => ['page', 'getPage', 'setPage'], 'pageSize' => ['pageSize', 'getPageSize', 'setPageSize']];
    }
}