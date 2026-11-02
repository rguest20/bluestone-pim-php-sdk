<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class RolePluginPermissions
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
    protected $id;
    /**
     * @var list<RoleSinglePluginPermission>
     */
    protected $pluginPermissions;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
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