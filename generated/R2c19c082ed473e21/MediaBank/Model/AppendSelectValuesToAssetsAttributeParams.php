<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class AppendSelectValuesToAssetsAttributeParams implements AdditionalPropertiesInterface
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
    protected $assetsIds;
    /**
     * @var list<string>
     */
    protected $selectValueIds;
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
    public function getAssetsIds(): array
    {
        return $this->assetsIds;
    }
    /**
     * @param list<string> $assetsIds
     *
     * @return self
     */
    public function setAssetsIds(array $assetsIds): self
    {
        $this->initialized['assetsIds'] = true;
        $this->assetsIds = $assetsIds;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getSelectValueIds(): array
    {
        return $this->selectValueIds;
    }
    /**
     * @param list<string> $selectValueIds
     *
     * @return self
     */
    public function setSelectValueIds(array $selectValueIds): self
    {
        $this->initialized['selectValueIds'] = true;
        $this->selectValueIds = $selectValueIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['attributeDefinitionId' => ['attributeDefinitionId', 'getAttributeDefinitionId', 'setAttributeDefinitionId'], 'assetsIds' => ['assetsIds', 'getAssetsIds', 'setAssetsIds'], 'selectValueIds' => ['selectValueIds', 'getSelectValueIds', 'setSelectValueIds']];
    }
}