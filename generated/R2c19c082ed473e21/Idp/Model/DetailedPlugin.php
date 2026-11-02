<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class DetailedPlugin
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
     * @var list<PermissionDefinitionPlugins>
     */
    protected $permissionDefinitions;
    /**
     * @var list<DependentPermissionPlugins>
     */
    protected $dependentPermissions;
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
     * @return list<PermissionDefinitionPlugins>
     */
    public function getPermissionDefinitions(): array
    {
        return $this->permissionDefinitions;
    }
    /**
     * @param list<PermissionDefinitionPlugins> $permissionDefinitions
     *
     * @return self
     */
    public function setPermissionDefinitions(array $permissionDefinitions): self
    {
        $this->initialized['permissionDefinitions'] = true;
        $this->permissionDefinitions = $permissionDefinitions;
        return $this;
    }
    /**
     * @return list<DependentPermissionPlugins>
     */
    public function getDependentPermissions(): array
    {
        return $this->dependentPermissions;
    }
    /**
     * @param list<DependentPermissionPlugins> $dependentPermissions
     *
     * @return self
     */
    public function setDependentPermissions(array $dependentPermissions): self
    {
        $this->initialized['dependentPermissions'] = true;
        $this->dependentPermissions = $dependentPermissions;
        return $this;
    }
}