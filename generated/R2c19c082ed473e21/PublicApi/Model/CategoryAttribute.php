<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model;

class CategoryAttribute
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
    protected $groupName;
    /**
     * @var string
     */
    protected $groupNumber;
    /**
     * @var string
     */
    protected $dataType;
    /**
     * @var string
     */
    protected $contentType;
    /**
     * @var string
     */
    protected $valueType;
    /**
     * @var list<string>
     */
    protected $values;
    /**
     * @var list<SelectValue>
     */
    protected $select;
    /**
     * @var list<DictionaryValue>
     */
    protected $dictionary;
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
     * @return list<string>
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
     * @param list<string> $values
     *
     * @return self
     */
    public function setValues(array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
    /**
     * @return list<SelectValue>
     */
    public function getSelect(): array
    {
        return $this->select;
    }
    /**
     * @param list<SelectValue> $select
     *
     * @return self
     */
    public function setSelect(array $select): self
    {
        $this->initialized['select'] = true;
        $this->select = $select;
        return $this;
    }
    /**
     * @return list<DictionaryValue>
     */
    public function getDictionary(): array
    {
        return $this->dictionary;
    }
    /**
     * @param list<DictionaryValue> $dictionary
     *
     * @return self
     */
    public function setDictionary(array $dictionary): self
    {
        $this->initialized['dictionary'] = true;
        $this->dictionary = $dictionary;
        return $this;
    }
}