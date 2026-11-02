<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class AssignRevokeRolePluginPermissionRequest
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
     * @var list<RoleSinglePluginPermission>
     */
    protected $pluginPermissions;
    /**
     * @return list<RoleSinglePluginPermission>
     */
    public function getPluginPermissions(): array
    {
        return $this->pluginPermissions;
    }
    /**
     * @param list<RoleSinglePluginPermission> $pluginPermissions
     *
     * @return self
     */
    public function setPluginPermissions(array $pluginPermissions): self
    {
        $this->initialized['pluginPermissions'] = true;
        $this->pluginPermissions = $pluginPermissions;
        return $this;
    }
}