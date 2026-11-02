<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class RequirementListRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var RequirementListRequestSort|null
     */
    protected $sort;
    /**
     * @var list<string>|null
     */
    protected $ids;
    /**
     * @var list<string>|null
     */
    protected $types;
    /**
     * @var int
     */
    protected $pageSize;
    /**
     * @var int
     */
    protected $page;
    /**
     * @return RequirementListRequestSort|null
     */
    public function getSort(): ?RequirementListRequestSort
    {
        return $this->sort;
    }
    /**
     * @param RequirementListRequestSort|null $sort
     *
     * @return self
     */
    public function setSort(?RequirementListRequestSort $sort): self
    {
        $this->initialized['sort'] = true;
        $this->sort = $sort;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }
    /**
     * @param list<string>|null $ids
     *
     * @return self
     */
    public function setIds(?array $ids): self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getTypes(): ?array
    {
        return $this->types;
    }
    /**
     * @param list<string>|null $types
     *
     * @return self
     */
    public function setTypes(?array $types): self
    {
        $this->initialized['types'] = true;
        $this->types = $types;
        return $this;
    }
    /**
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }
    /**
     * @param int $pageSize
     *
     * @return self
     */
    public function setPageSize(int $pageSize): self
    {
        $this->initialized['pageSize'] = true;
        $this->pageSize = $pageSize;
        return $this;
    }
    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
    /**
     * @param int $page
     *
     * @return self
     */
    public function setPage(int $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['sort' => ['sort', 'getSort', 'setSort'], 'ids' => ['ids', 'getIds', 'setIds'], 'types' => ['types', 'getTypes', 'setTypes'], 'pageSize' => ['pageSize', 'getPageSize', 'setPageSize'], 'page' => ['page', 'getPage', 'setPage']];
    }
}