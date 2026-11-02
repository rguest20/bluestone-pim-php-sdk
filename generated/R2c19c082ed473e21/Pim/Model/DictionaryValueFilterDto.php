<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class DictionaryValueFilterDto implements AdditionalPropertiesInterface
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
     * Filter type for dictionary attribute values for parent or child dictionaries. Either `PARENT_VALUE_ID_IN` or
     * `CHILD_VALUE_ID_IN`.
     *
     * @var string
     */
    protected $type;
    /**
     * Filter type values based on the selected filter type, either a list of parent dictionary attribute value IDs or
     * a list of child dictionary attribute value IDs.
     *
     * @var list<string>
     */
    protected $valueIds;
    /**
     * Filter type for dictionary attribute values for parent or child dictionaries. Either `PARENT_VALUE_ID_IN` or
     * `CHILD_VALUE_ID_IN`.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
    * Filter type for dictionary attribute values for parent or child dictionaries. Either `PARENT_VALUE_ID_IN` or
    `CHILD_VALUE_ID_IN`.
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
     * Filter type values based on the selected filter type, either a list of parent dictionary attribute value IDs or
     * a list of child dictionary attribute value IDs.
     *
     * @return list<string>
     */
    public function getValueIds(): array
    {
        return $this->valueIds;
    }
    /**
    * Filter type values based on the selected filter type, either a list of parent dictionary attribute value IDs or
    a list of child dictionary attribute value IDs.
    *
    * @param list<string> $valueIds
    *
    * @return self
    */
    public function setValueIds(array $valueIds): self
    {
        $this->initialized['valueIds'] = true;
        $this->valueIds = $valueIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'valueIds' => ['valueIds', 'getValueIds', 'setValueIds']];
    }
}