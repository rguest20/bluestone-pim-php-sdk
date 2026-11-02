<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\AdditionalPropertiesInterface;
class UserGroupsIdManagedRolesUnassignPutBody implements AdditionalPropertiesInterface
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
    protected $managedRoleId;
    /**
     * @return string
     */
    public function getManagedRoleId(): string
    {
        return $this->managedRoleId;
    }
    /**
     * @param string $managedRoleId
     *
     * @return self
     */
    public function setManagedRoleId(string $managedRoleId): self
    {
        $this->initialized['managedRoleId'] = true;
        $this->managedRoleId = $managedRoleId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['managedRoleId' => ['managedRoleId', 'getManagedRoleId', 'setManagedRoleId']];
    }
}