<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class SetDictionaryValuesRequest implements AdditionalPropertiesInterface
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
     * @var list<string>
     */
    protected $valueIds;
    /**
     * @return list<string>
     */
    public function getValueIds(): array
    {
        return $this->valueIds;
    }
    /**
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
        return ['valueIds' => ['valueIds', 'getValueIds', 'setValueIds']];
    }
}