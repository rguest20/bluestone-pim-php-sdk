<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model;

class ColumnsSetup
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
    protected $name;
    /**
     * @var bool
     */
    protected $isDefault;
    /**
     * @var bool
     */
    protected $isPublic;
    /**
     * @var list<ColumnsSet>
     */
    protected $columns;
    /**
     * @var string
     */
    protected $organizationId;
    /**
     * @var float
     */
    protected $updatedAt;
    /**
     * @var string
     */
    protected $owner;
    /**
     * @var string
     */
    protected $service;
    /**
     * @var string
     */
    protected $entity;
    /**
     * @var ColumnsSetupSortConfig
     */
    protected $sortConfig;
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
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }
    /**
     * @param bool $isDefault
     *
     * @return self
     */
    public function setIsDefault(bool $isDefault): self
    {
        $this->initialized['isDefault'] = true;
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }
    /**
     * @param bool $isPublic
     *
     * @return self
     */
    public function setIsPublic(bool $isPublic): self
    {
        $this->initialized['isPublic'] = true;
        $this->isPublic = $isPublic;
        return $this;
    }
    /**
     * @return list<ColumnsSet>
     */
    public function getColumns(): array
    {
        return $this->columns;
    }
    /**
     * @param list<ColumnsSet> $columns
     *
     * @return self
     */
    public function setColumns(array $columns): self
    {
        $this->initialized['columns'] = true;
        $this->columns = $columns;
        return $this;
    }
    /**
     * @return string
     */
    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }
    /**
     * @param string $organizationId
     *
     * @return self
     */
    public function setOrganizationId(string $organizationId): self
    {
        $this->initialized['organizationId'] = true;
        $this->organizationId = $organizationId;
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
     * @return string
     */
    public function getOwner(): string
    {
        return $this->owner;
    }
    /**
     * @param string $owner
     *
     * @return self
     */
    public function setOwner(string $owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;
        return $this;
    }
    /**
     * @return string
     */
    public function getService(): string
    {
        return $this->service;
    }
    /**
     * @param string $service
     *
     * @return self
     */
    public function setService(string $service): self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
     * @return string
     */
    public function getEntity(): string
    {
        return $this->entity;
    }
    /**
     * @param string $entity
     *
     * @return self
     */
    public function setEntity(string $entity): self
    {
        $this->initialized['entity'] = true;
        $this->entity = $entity;
        return $this;
    }
    /**
     * @return ColumnsSetupSortConfig
     */
    public function getSortConfig(): ColumnsSetupSortConfig
    {
        return $this->sortConfig;
    }
    /**
     * @param ColumnsSetupSortConfig $sortConfig
     *
     * @return self
     */
    public function setSortConfig(ColumnsSetupSortConfig $sortConfig): self
    {
        $this->initialized['sortConfig'] = true;
        $this->sortConfig = $sortConfig;
        return $this;
    }
}