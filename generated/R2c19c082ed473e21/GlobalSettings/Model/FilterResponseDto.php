<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\AdditionalPropertiesInterface;
class FilterResponseDto implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $ownerId;
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
     * @var bool
     */
    protected $public;
    /**
     * @var bool|null
     */
    protected $valid;
    /**
     * @var array<string, array<string, mixed>>
     */
    protected $filter;
    /**
     * @var int
     */
    protected $updatedAt;
    /**
     * @var bool
     */
    protected $readonly;
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
    public function getOwnerId(): string
    {
        return $this->ownerId;
    }
    /**
     * @param string $ownerId
     *
     * @return self
     */
    public function setOwnerId(string $ownerId): self
    {
        $this->initialized['ownerId'] = true;
        $this->ownerId = $ownerId;
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
     * @return bool
     */
    public function getPublic(): bool
    {
        return $this->public;
    }
    /**
     * @param bool $public
     *
     * @return self
     */
    public function setPublic(bool $public): self
    {
        $this->initialized['public'] = true;
        $this->public = $public;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getValid(): ?bool
    {
        return $this->valid;
    }
    /**
     * @param bool|null $valid
     *
     * @return self
     */
    public function setValid(?bool $valid): self
    {
        $this->initialized['valid'] = true;
        $this->valid = $valid;
        return $this;
    }
    /**
     * @return array<string, array<string, mixed>>
     */
    public function getFilter(): iterable
    {
        return $this->filter;
    }
    /**
     * @param array<string, array<string, mixed>> $filter
     *
     * @return self
     */
    public function setFilter(iterable $filter): self
    {
        $this->initialized['filter'] = true;
        $this->filter = $filter;
        return $this;
    }
    /**
     * @return int
     */
    public function getUpdatedAt(): int
    {
        return $this->updatedAt;
    }
    /**
     * @param int $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(int $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * @return bool
     */
    public function getReadonly(): bool
    {
        return $this->readonly;
    }
    /**
     * @param bool $readonly
     *
     * @return self
     */
    public function setReadonly(bool $readonly): self
    {
        $this->initialized['readonly'] = true;
        $this->readonly = $readonly;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'ownerId' => ['ownerId', 'getOwnerId', 'setOwnerId'], 'name' => ['name', 'getName', 'setName'], 'service' => ['service', 'getService', 'setService'], 'entity' => ['entity', 'getEntity', 'setEntity'], 'public' => ['public', 'getPublic', 'setPublic'], 'valid' => ['valid', 'getValid', 'setValid'], 'filter' => ['filter', 'getFilter', 'setFilter'], 'updatedAt' => ['updatedAt', 'getUpdatedAt', 'setUpdatedAt'], 'readonly' => ['readonly', 'getReadonly', 'setReadonly']];
    }
}