<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class DependentPermissions
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
     * @var string
     */
    protected $permissionId;
    /**
     * List of permission ids, that are required for given permission.
     *
     * @var list<string>
     */
    protected $dependentPermissionIds;
    /**
     * @return string
     */
    public function getPermissionId(): string
    {
        return $this->permissionId;
    }
    /**
     * @param string $permissionId
     *
     * @return self
     */
    public function setPermissionId(string $permissionId): self
    {
        $this->initialized['permissionId'] = true;
        $this->permissionId = $permissionId;
        return $this;
    }
    /**
     * List of permission ids, that are required for given permission.
     *
     * @return list<string>
     */
    public function getDependentPermissionIds(): array
    {
        return $this->dependentPermissionIds;
    }
    /**
     * List of permission ids, that are required for given permission.
     *
     * @param list<string> $dependentPermissionIds
     *
     * @return self
     */
    public function setDependentPermissionIds(array $dependentPermissionIds): self
    {
        $this->initialized['dependentPermissionIds'] = true;
        $this->dependentPermissionIds = $dependentPermissionIds;
        return $this;
    }
}