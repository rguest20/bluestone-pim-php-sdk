<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class SaveAttributeToAssetsByIdsRequest implements AdditionalPropertiesInterface
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
    protected $assetIds;
    /**
     * @var string
     */
    protected $attributeDefinitionId;
    /**
     * @var list<string>
     */
    protected $attributeValues;
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
    public function getAttributeValues(): array
    {
        return $this->attributeValues;
    }
    /**
     * @param list<string> $attributeValues
     *
     * @return self
     */
    public function setAttributeValues(array $attributeValues): self
    {
        $this->initialized['attributeValues'] = true;
        $this->attributeValues = $attributeValues;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['assetIds' => ['assetIds', 'getAssetIds', 'setAssetIds'], 'attributeDefinitionId' => ['attributeDefinitionId', 'getAttributeDefinitionId', 'setAttributeDefinitionId'], 'attributeValues' => ['attributeValues', 'getAttributeValues', 'setAttributeValues']];
    }
}