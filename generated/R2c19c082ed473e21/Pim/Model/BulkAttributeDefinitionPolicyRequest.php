<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class BulkAttributeDefinitionPolicyRequest implements AdditionalPropertiesInterface
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
    protected $attributeDefinitionIds;
    /**
     * @var string
     */
    protected $policyId;
    /**
     * @var bool
     */
    protected $readOnly;
    /**
     * @return list<string>
     */
    public function getAttributeDefinitionIds(): array
    {
        return $this->attributeDefinitionIds;
    }
    /**
     * @param list<string> $attributeDefinitionIds
     *
     * @return self
     */
    public function setAttributeDefinitionIds(array $attributeDefinitionIds): self
    {
        $this->initialized['attributeDefinitionIds'] = true;
        $this->attributeDefinitionIds = $attributeDefinitionIds;
        return $this;
    }
    /**
     * @return string
     */
    public function getPolicyId(): string
    {
        return $this->policyId;
    }
    /**
     * @param string $policyId
     *
     * @return self
     */
    public function setPolicyId(string $policyId): self
    {
        $this->initialized['policyId'] = true;
        $this->policyId = $policyId;
        return $this;
    }
    /**
     * @return bool
     */
    public function getReadOnly(): bool
    {
        return $this->readOnly;
    }
    /**
     * @param bool $readOnly
     *
     * @return self
     */
    public function setReadOnly(bool $readOnly): self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['attributeDefinitionIds' => ['attributeDefinitionIds', 'getAttributeDefinitionIds', 'setAttributeDefinitionIds'], 'policyId' => ['policyId', 'getPolicyId', 'setPolicyId'], 'readOnly' => ['readOnly', 'getReadOnly', 'setReadOnly']];
    }
}