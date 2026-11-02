<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class AssignRevokeRolePermissionRequest
{
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
    protected $permissionIds;
    /**
     * @return list<string>
     */
    public function getPermissionIds(): array
    {
        return $this->permissionIds;
    }
    /**
     * @param list<string> $permissionIds
     *
     * @return self
     */
    public function setPermissionIds(array $permissionIds): self
    {
        $this->initialized['permissionIds'] = true;
        $this->permissionIds = $permissionIds;
        return $this;
    }
}