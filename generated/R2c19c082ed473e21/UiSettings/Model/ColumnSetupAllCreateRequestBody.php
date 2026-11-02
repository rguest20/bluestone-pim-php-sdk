<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model;

class ColumnSetupAllCreateRequestBody
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
     * @var list<ColumnsSet>
     */
    protected $columns;
    /**
     * @var bool
     */
    protected $isPublic;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $service;
    /**
     * @var string
     */
    protected $entity;
    /**
     * @var ColumnSetupAllCreateRequestBodySortConfig
     */
    protected $sortConfig;
    /**
     * User email
     *
     * @var string
     */
    protected $owner;
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
     * @return ColumnSetupAllCreateRequestBodySortConfig
     */
    public function getSortConfig(): ColumnSetupAllCreateRequestBodySortConfig
    {
        return $this->sortConfig;
    }
    /**
     * @param ColumnSetupAllCreateRequestBodySortConfig $sortConfig
     *
     * @return self
     */
    public function setSortConfig(ColumnSetupAllCreateRequestBodySortConfig $sortConfig): self
    {
        $this->initialized['sortConfig'] = true;
        $this->sortConfig = $sortConfig;
        return $this;
    }
    /**
     * User email
     *
     * @return string
     */
    public function getOwner(): string
    {
        return $this->owner;
    }
    /**
     * User email
     *
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
}