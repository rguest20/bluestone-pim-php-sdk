<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model;

class GroupedAttributeDefinition
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
     * @var string
     */
    protected $number;
    /**
     * @var string
     */
    protected $unit;
    /**
     * @var string
     */
    protected $dataType;
    /**
     * @var float
     */
    protected $sortingOrder;
    /**
     * @var string
     */
    protected $groupId;
    /**
     * @var string
     */
    protected $groupName;
    /**
     * @var string
     */
    protected $groupNumber;
    /**
     * @var list<ColumnAttributeDefinitionValue>
     */
    protected $columns;
    /**
     * @var list<RowAttributeDefinitionValue>
     */
    protected $rows;
    /**
     * @var bool
     */
    protected $isCompound;
    /**
     * @var list<CompoundAttributeSubDefinition>
     */
    protected $subDefinitions;
    /**
     * @var list<string>
     */
    protected $format;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $contentType;
    /**
     * @var string
     */
    protected $valueType;
    /**
     * @var bool
     */
    protected $contextAware;
    /**
     * @var float
     */
    protected $order;
    /**
     * @var float
     */
    protected $groupOrder;
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
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
    /**
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }
    /**
     * @param string $unit
     *
     * @return self
     */
    public function setUnit(string $unit): self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;
        return $this;
    }
    /**
     * @return string
     */
    public function getDataType(): string
    {
        return $this->dataType;
    }
    /**
     * @param string $dataType
     *
     * @return self
     */
    public function setDataType(string $dataType): self
    {
        $this->initialized['dataType'] = true;
        $this->dataType = $dataType;
        return $this;
    }
    /**
     * @return float
     */
    public function getSortingOrder(): float
    {
        return $this->sortingOrder;
    }
    /**
     * @param float $sortingOrder
     *
     * @return self
     */
    public function setSortingOrder(float $sortingOrder): self
    {
        $this->initialized['sortingOrder'] = true;
        $this->sortingOrder = $sortingOrder;
        return $this;
    }
    /**
     * @return string
     */
    public function getGroupId(): string
    {
        return $this->groupId;
    }
    /**
     * @param string $groupId
     *
     * @return self
     */
    public function setGroupId(string $groupId): self
    {
        $this->initialized['groupId'] = true;
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * @return string
     */
    public function getGroupName(): string
    {
        return $this->groupName;
    }
    /**
     * @param string $groupName
     *
     * @return self
     */
    public function setGroupName(string $groupName): self
    {
        $this->initialized['groupName'] = true;
        $this->groupName = $groupName;
        return $this;
    }
    /**
     * @return string
     */
    public function getGroupNumber(): string
    {
        return $this->groupNumber;
    }
    /**
     * @param string $groupNumber
     *
     * @return self
     */
    public function setGroupNumber(string $groupNumber): self
    {
        $this->initialized['groupNumber'] = true;
        $this->groupNumber = $groupNumber;
        return $this;
    }
    /**
     * @return list<ColumnAttributeDefinitionValue>
     */
    public function getColumns(): array
    {
        return $this->columns;
    }
    /**
     * @param list<ColumnAttributeDefinitionValue> $columns
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
     * @return list<RowAttributeDefinitionValue>
     */
    public function getRows(): array
    {
        return $this->rows;
    }
    /**
     * @param list<RowAttributeDefinitionValue> $rows
     *
     * @return self
     */
    public function setRows(array $rows): self
    {
        $this->initialized['rows'] = true;
        $this->rows = $rows;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsCompound(): bool
    {
        return $this->isCompound;
    }
    /**
     * @param bool $isCompound
     *
     * @return self
     */
    public function setIsCompound(bool $isCompound): self
    {
        $this->initialized['isCompound'] = true;
        $this->isCompound = $isCompound;
        return $this;
    }
    /**
     * @return list<CompoundAttributeSubDefinition>
     */
    public function getSubDefinitions(): array
    {
        return $this->subDefinitions;
    }
    /**
     * @param list<CompoundAttributeSubDefinition> $subDefinitions
     *
     * @return self
     */
    public function setSubDefinitions(array $subDefinitions): self
    {
        $this->initialized['subDefinitions'] = true;
        $this->subDefinitions = $subDefinitions;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getFormat(): array
    {
        return $this->format;
    }
    /**
     * @param list<string> $format
     *
     * @return self
     */
    public function setFormat(array $format): self
    {
        $this->initialized['format'] = true;
        $this->format = $format;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }
    /**
     * @param string $contentType
     *
     * @return self
     */
    public function setContentType(string $contentType): self
    {
        $this->initialized['contentType'] = true;
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * @return string
     */
    public function getValueType(): string
    {
        return $this->valueType;
    }
    /**
     * @param string $valueType
     *
     * @return self
     */
    public function setValueType(string $valueType): self
    {
        $this->initialized['valueType'] = true;
        $this->valueType = $valueType;
        return $this;
    }
    /**
     * @return bool
     */
    public function getContextAware(): bool
    {
        return $this->contextAware;
    }
    /**
     * @param bool $contextAware
     *
     * @return self
     */
    public function setContextAware(bool $contextAware): self
    {
        $this->initialized['contextAware'] = true;
        $this->contextAware = $contextAware;
        return $this;
    }
    /**
     * @return float
     */
    public function getOrder(): float
    {
        return $this->order;
    }
    /**
     * @param float $order
     *
     * @return self
     */
    public function setOrder(float $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
    /**
     * @return float
     */
    public function getGroupOrder(): float
    {
        return $this->groupOrder;
    }
    /**
     * @param float $groupOrder
     *
     * @return self
     */
    public function setGroupOrder(float $groupOrder): self
    {
        $this->initialized['groupOrder'] = true;
        $this->groupOrder = $groupOrder;
        return $this;
    }
}