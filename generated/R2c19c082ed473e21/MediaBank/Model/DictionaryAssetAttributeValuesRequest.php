<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class DictionaryAssetAttributeValuesRequest implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $attributeDefinitionId;
    /**
     * @var list<string>
     */
    protected $assetIds;
    /**
     * @var list<string>
     */
    protected $dictionaryValueIds;
    /**
     * @return string
     */
    public function getAttributeDefinitionId(): string
    {
        return $this->attributeDefinitionId;
    }
    /**
     * @param string $attributeDefinitionId
     *
     * @return self
     */
    public function setAttributeDefinitionId(string $attributeDefinitionId): self
    {
        $this->initialized['attributeDefinitionId'] = true;
        $this->attributeDefinitionId = $attributeDefinitionId;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getAssetIds(): array
    {
        return $this->assetIds;
    }
    /**
     * @param list<string> $assetIds
     *
     * @return self
     */
    public function setAssetIds(array $assetIds): self
    {
        $this->initialized['assetIds'] = true;
        $this->assetIds = $assetIds;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getDictionaryValueIds(): array
    {
        return $this->dictionaryValueIds;
    }
    /**
     * @param list<string> $dictionaryValueIds
     *
     * @return self
     */
    public function setDictionaryValueIds(array $dictionaryValueIds): self
    {
        $this->initialized['dictionaryValueIds'] = true;
        $this->dictionaryValueIds = $dictionaryValueIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['attributeDefinitionId' => ['attributeDefinitionId', 'getAttributeDefinitionId', 'setAttributeDefinitionId'], 'assetIds' => ['assetIds', 'getAssetIds', 'setAssetIds'], 'dictionaryValueIds' => ['dictionaryValueIds', 'getDictionaryValueIds', 'setDictionaryValueIds']];
    }
}