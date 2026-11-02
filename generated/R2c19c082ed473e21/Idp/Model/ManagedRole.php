<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class ManagedRole
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
     * @var float
     */
    protected $createdAt;
    /**
     * @var float
     */
    protected $updatedAt;
    /**
     * List of ids of permissions.
     *
     * @var list<string>
     */
    protected $permissions;
    /**
     * List of plugin permissions.
     *
     * @var list<PluginPermission>
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
     * @return float
     */
    public function getCreatedAt(): float
    {
        return $this->createdAt;
    }
    /**
     * @param float $createdAt
     *
     * @return self
     */
    public function setCreatedAt(float $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return float
     */
    public function getUpdatedAt(): float
    {
        return $this->updatedAt;
    }
    /**
     * @param float $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(float $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * List of ids of permissions.
     *
     * @return list<string>
     */
    public function getPermissions(): array
    {
        return $this->permissions;
    }
    /**
     * List of ids of permissions.
     *
     * @param list<string> $permissions
     *
     * @return self
     */
    public function setPermissions(array $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * List of plugin permissions.
     *
     * @return list<PluginPermission>
     */
    public function getPluginPermissions(): array
    {
        return $this->pluginPermissions;
    }
    /**
     * List of plugin permissions.
     *
     * @param list<PluginPermission> $pluginPermissions
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