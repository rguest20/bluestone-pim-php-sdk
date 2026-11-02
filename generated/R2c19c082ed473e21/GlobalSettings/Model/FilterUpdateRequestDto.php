<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\AdditionalPropertiesInterface;
class FilterUpdateRequestDto implements AdditionalPropertiesInterface
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
     * @var bool|null
     */
    protected $valid;
    /**
     * @var array<string, array<string, mixed>>|null
     */
    protected $filter;
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
     * @return array<string, array<string, mixed>>|null
     */
    public function getFilter(): ?iterable
    {
        return $this->filter;
    }
    /**
     * @param array<string, array<string, mixed>>|null $filter
     *
     * @return self
     */
    public function setFilter(?iterable $filter): self
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