<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class Role
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
     * @var string
     */
    protected $name;
    /**
     * List of permissions.
     *
     * @var list<string>
     */
    protected $permissions;
    /**
     * @var list<string>
     */
    protected $dependentPermissions;
    /**
     * @var RolePluginPermissions
     */
    protected $pluginPermissions;
    /**
     * @var float
     */
    protected $createdAt;
    /**
     * @var float
     */
    protected $updatedAt;
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * List of permissions.
     *
     * @return list<string>
     */
    public function getPermissions(): array
    {
        return $this->permissions;
    }
    /**
     * List of permissions.
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
     * @return list<string>
     */
    public function getDependentPermissions(): array
    {
        return $this->dependentPermissions;
    }
    /**
     * @param list<string> $dependentPermissions
     *
     * @return self
     */
    public function setDependentPermissions(array $dependentPermissions): self
    {
        $this->initialized['dependentPermissions'] = true;
        $this->dependentPermissions = $dependentPermissions;
        return $this;
    }
    /**
     * @return RolePluginPermissions
     */
    public function getPluginPermissions(): RolePluginPermissions
    {
        return $this->pluginPermissions;
    }
    /**
     * @param RolePluginPermissions $pluginPermissions
     *
     * @return self
     */
    public function setPluginPermissions(RolePluginPermissions $pluginPermissions): self
    {
        $this->initialized['pluginPermissions'] = true;
        $this->pluginPermissions = $pluginPermissions;
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
}