<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ColumnAttributeValueDto implements AdditionalPropertiesInterface
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
     * Column attribute values for the product.
     * 
     * A column attribute have a number of pre-defined columns and only one attribute value per column. One can think of it as a table with pre-defined columns but only one row.
     * 
     * Expected input format:
     * ```json
     * "column": {
     *   "<column ID>": "<column value>",
     *   "<column ID>": "<column value>",
     *   ...
     * }
     * ```
     * 
     * **Example**:
     * 
     * Let us say that I have these columns pre-defined in the column attribute definition:
     * "Column 1", with ID: 6356b491590801000124ef2d
     * "Column 2", with ID: 6356b491590801000124ef2e
     * "Column 3", with ID: 6356b491590801000124ef2f
     * 
     * I would like to store these values ("A", "B" and "C") in the columns:
     * 
     * |                | "Column 1" | "Column 2" | "Column 3" |
     * | -------------- | ---------- | ---------- | ---------- |
     * | Value (row 1): | "A"        | "B"        | "C"        |
     * 
     * Then that would correspond to this json structure:
     * ```json
     * "column": {
     *   "6356b491590801000124ef2d": "A",
     *   "6356b491590801000124ef2e": "B",
     *   "6356b491590801000124ef2f": "C"
     * }
     * ```
     *
     * @var array<string, string>|null
     */
    protected $column;
    /**
     * Column attribute values for the product.
     * 
     * A column attribute have a number of pre-defined columns and only one attribute value per column. One can think of it as a table with pre-defined columns but only one row.
     * 
     * Expected input format:
     * ```json
     * "column": {
     *   "<column ID>": "<column value>",
     *   "<column ID>": "<column value>",
     *   ...
     * }
     * ```
     * 
     * **Example**:
     * 
     * Let us say that I have these columns pre-defined in the column attribute definition:
     * "Column 1", with ID: 6356b491590801000124ef2d
     * "Column 2", with ID: 6356b491590801000124ef2e
     * "Column 3", with ID: 6356b491590801000124ef2f
     * 
     * I would like to store these values ("A", "B" and "C") in the columns:
     * 
     * |                | "Column 1" | "Column 2" | "Column 3" |
     * | -------------- | ---------- | ---------- | ---------- |
     * | Value (row 1): | "A"        | "B"        | "C"        |
     * 
     * Then that would correspond to this json structure:
     * ```json
     * "column": {
     *   "6356b491590801000124ef2d": "A",
     *   "6356b491590801000124ef2e": "B",
     *   "6356b491590801000124ef2f": "C"
     * }
     * ```
     *
     * @return array<string, string>|null
     */
    public function getColumn(): ?iterable
    {
        return $this->column;
    }
    /**
    * Column attribute values for the product.
    
    A column attribute have a number of pre-defined columns and only one attribute value per column. One can think of it as a table with pre-defined columns but only one row.
    
    Expected input format:
    ```json
    "column": {
     "<column ID>": "<column value>",
     "<column ID>": "<column value>",
     ...
    }
    ```
    
    **Example**:
    
    Let us say that I have these columns pre-defined in the column attribute definition:
    "Column 1", with ID: 6356b491590801000124ef2d
    "Column 2", with ID: 6356b491590801000124ef2e
    "Column 3", with ID: 6356b491590801000124ef2f
    
    I would like to store these values ("A", "B" and "C") in the columns:
    
    |                | "Column 1" | "Column 2" | "Column 3" |
    | -------------- | ---------- | ---------- | ---------- |
    | Value (row 1): | "A"        | "B"        | "C"        |
    
    Then that would correspond to this json structure:
    ```json
    "column": {
     "6356b491590801000124ef2d": "A",
     "6356b491590801000124ef2e": "B",
     "6356b491590801000124ef2f": "C"
    }
    ```
    *
    * @param array<string, string>|null $column
    *
    * @return self
    */
    public function setColumn(?iterable $column): self
    {
        $this->initialized['column'] = true;
        $this->column = $column;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['column' => ['column', 'getColumn', 'setColumn']];
    }
}