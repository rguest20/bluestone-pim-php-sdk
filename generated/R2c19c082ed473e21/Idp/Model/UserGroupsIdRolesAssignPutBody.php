<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\AdditionalPropertiesInterface;
class UserGroupsIdRolesAssignPutBody implements AdditionalPropertiesInterface
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
    protected $roleId;
    /**
     * @return string
     */
    public function getRoleId(): string
    {
        return $this->roleId;
    }
    /**
     * @param string $roleId
     *
     * @return self
     */
    public function setRoleId(string $roleId): self
    {
        $this->initialized['roleId'] = true;
        $this->roleId = $roleId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['roleId' => ['roleId', 'getRoleId', 'setRoleId']];
    }
}