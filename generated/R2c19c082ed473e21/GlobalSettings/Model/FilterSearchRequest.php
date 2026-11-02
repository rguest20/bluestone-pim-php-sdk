<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\AdditionalPropertiesInterface;
class FilterSearchRequest implements AdditionalPropertiesInterface
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
    protected $ids;
    /**
     * @var string|null
     */
    protected $ownerId;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $service;
    /**
     * @var string|null
     */
    protected $entity;
    /**
     * @var bool|null
     */
    protected $public;
    /**
     * @var int
     */
    protected $page = 0;
    /**
     * @var int
     */
    protected $pageSize = 10;
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
     * @return string|null
     */
    public function getOwnerId(): ?string
    {
        return $this->ownerId;
    }
    /**
     * @param string|null $ownerId
     *
     * @return self
     */
    public function setOwnerId(?string $ownerId): self
    {
        $this->initialized['ownerId'] = true;
        $this->ownerId = $ownerId;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getService(): ?string
    {
        return $this->service;
    }
    /**
     * @param string|null $service
     *
     * @return self
     */
    public function setService(?string $service): self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getEntity(): ?string
    {
        return $this->entity;
    }
    /**
     * @param string|null $entity
     *
     * @return self
     */
    public function setEntity(?string $entity): self
    {
        $this->initialized['entity'] = true;
        $this->entity = $entity;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getPublic(): ?bool
    {
        return $this->public;
    }
    /**
     * @param bool|null $public
     *
     * @return self
     */
    public function setPublic(?bool $public): self
    {
        $this->initialized['public'] = true;
        $this->public = $public;
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
    public function definedProperties(): array
    {
        return ['ids' => ['ids', 'getIds', 'setIds'], 'ownerId' => ['ownerId', 'getOwnerId', 'setOwnerId'], 'name' => ['name', 'getName', 'setName'], 'service' => ['service', 'getService', 'setService'], 'entity' => ['entity', 'getEntity', 'setEntity'], 'public' => ['public', 'getPublic', 'setPublic'], 'page' => ['page', 'getPage', 'setPage'], 'pageSize' => ['pageSize', 'getPageSize', 'setPageSize']];
    }
}