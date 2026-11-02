<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\UiSettings\Model;

class UpdateColumnSetupForAnyUserRequestBody
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
     * @var UpdateColumnSetupForAnyUserRequestBodySortConfig
     */
    protected $sortConfig;
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
     * @return UpdateColumnSetupForAnyUserRequestBodySortConfig
     */
    public function getSortConfig(): UpdateColumnSetupForAnyUserRequestBodySortConfig
    {
        return $this->sortConfig;
    }
    /**
     * @param UpdateColumnSetupForAnyUserRequestBodySortConfig $sortConfig
     *
     * @return self
     */
    public function setSortConfig(UpdateColumnSetupForAnyUserRequestBodySortConfig $sortConfig): self
    {
        $this->initialized['sortConfig'] = true;
        $this->sortConfig = $sortConfig;
        return $this;
    }
}