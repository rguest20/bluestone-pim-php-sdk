<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class DependentPermissionPlugins
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
     * @return list<string>
     */
    public function getDependentPermissionIds(): array
    {
        return $this->dependentPermissionIds;
    }
    /**
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