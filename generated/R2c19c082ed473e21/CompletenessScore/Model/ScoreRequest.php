<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class ScoreRequest implements AdditionalPropertiesInterface
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
     * @var list<string>|null
     */
    protected $contexts;
    /**
     * @var list<string>|null
     */
    protected $entityIds;
    /**
     * @var int
     */
    protected $pageSize;
    /**
     * @var int
     */
    protected $page;
    /**
     * @return list<string>|null
     */
    public function getContexts(): ?array
    {
        return $this->contexts;
    }
    /**
     * @param list<string>|null $contexts
     *
     * @return self
     */
    public function setContexts(?array $contexts): self
    {
        $this->initialized['contexts'] = true;
        $this->contexts = $contexts;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getEntityIds(): ?array
    {
        return $this->entityIds;
    }
    /**
     * @param list<string>|null $entityIds
     *
     * @return self
     */
    public function setEntityIds(?array $entityIds): self
    {
        $this->initialized['entityIds'] = true;
        $this->entityIds = $entityIds;
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
        return ['contexts' => ['contexts', 'getContexts', 'setContexts'], 'entityIds' => ['entityIds', 'getEntityIds', 'setEntityIds'], 'pageSize' => ['pageSize', 'getPageSize', 'setPageSize'], 'page' => ['page', 'getPage', 'setPage']];
    }
}