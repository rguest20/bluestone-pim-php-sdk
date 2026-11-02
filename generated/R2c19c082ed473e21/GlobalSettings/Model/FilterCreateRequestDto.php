<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\AdditionalPropertiesInterface;
class FilterCreateRequestDto implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'service' => ['service', 'getService', 'setService'], 'entity' => ['entity', 'getEntity', 'setEntity'], 'public' => ['public', 'getPublic', 'setPublic'], 'valid' => ['valid', 'getValid', 'setValid'], 'filter' => ['filter', 'getFilter', 'setFilter']];
    }
}