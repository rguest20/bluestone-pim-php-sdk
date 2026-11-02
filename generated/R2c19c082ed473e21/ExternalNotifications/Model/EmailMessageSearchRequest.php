<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalPropertiesInterface;
class EmailMessageSearchRequest implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $fromCreationDate;
    /**
     * @var list<string>
     */
    protected $ids;
    /**
     * @var int
     */
    protected $page;
    /**
     * @var int
     */
    protected $pageSize;
    /**
     * @var int
     */
    protected $toCreationDate;
    /**
     * @return int
     */
    public function getFromCreationDate(): int
    {
        return $this->fromCreationDate;
    }
    /**
     * @param int $fromCreationDate
     *
     * @return self
     */
    public function setFromCreationDate(int $fromCreationDate): self
    {
        $this->initialized['fromCreationDate'] = true;
        $this->fromCreationDate = $fromCreationDate;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getIds(): array
    {
        return $this->ids;
    }
    /**
     * @param list<string> $ids
     *
     * @return self
     */
    public function setIds(array $ids): self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;
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
    public function getToCreationDate(): int
    {
        return $this->toCreationDate;
    }
    /**
     * @param int $toCreationDate
     *
     * @return self
     */
    public function setToCreationDate(int $toCreationDate): self
    {
        $this->initialized['toCreationDate'] = true;
        $this->toCreationDate = $toCreationDate;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['fromCreationDate' => ['fromCreationDate', 'getFromCreationDate', 'setFromCreationDate'], 'ids' => ['ids', 'getIds', 'setIds'], 'page' => ['page', 'getPage', 'setPage'], 'pageSize' => ['pageSize', 'getPageSize', 'setPageSize'], 'toCreationDate' => ['toCreationDate', 'getToCreationDate', 'setToCreationDate']];
    }
}