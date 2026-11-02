<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class UpdateSelectAssetAttributeValuesRequest implements AdditionalPropertiesInterface
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
    protected $selectIds;
    /**
     * @return list<string>
     */
    public function getSelectIds(): array
    {
        return $this->selectIds;
    }
    /**
     * @param list<string> $selectIds
     *
     * @return self
     */
    public function setSelectIds(array $selectIds): self
    {
        $this->initialized['selectIds'] = true;
        $this->selectIds = $selectIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['selectIds' => ['selectIds', 'getSelectIds', 'setSelectIds']];
    }
}