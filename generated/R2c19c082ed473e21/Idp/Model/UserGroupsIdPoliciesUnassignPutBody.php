<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\AdditionalPropertiesInterface;
class UserGroupsIdPoliciesUnassignPutBody implements AdditionalPropertiesInterface
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
    protected $policyId;
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
    public function definedProperties(): array
    {
        return ['policyId' => ['policyId', 'getPolicyId', 'setPolicyId']];
    }
}