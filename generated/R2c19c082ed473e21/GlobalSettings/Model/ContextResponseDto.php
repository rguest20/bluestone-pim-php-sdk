<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\AdditionalPropertiesInterface;
class ContextResponseDto implements AdditionalPropertiesInterface
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
    protected $name;
    /**
     * @var string
     */
    protected $locale;
    /**
     * @var string|null
     */
    protected $fallback;
    /**
     * @var bool|null
     */
    protected $initial;
    /**
     * @var string
     */
    protected $internalId;
    /**
     * @var bool
     */
    protected $archived;
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
    public function getLocale(): string
    {
        return $this->locale;
    }
    /**
     * @param string $locale
     *
     * @return self
     */
    public function setLocale(string $locale): self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getFallback(): ?string
    {
        return $this->fallback;
    }
    /**
     * @param string|null $fallback
     *
     * @return self
     */
    public function setFallback(?string $fallback): self
    {
        $this->initialized['fallback'] = true;
        $this->fallback = $fallback;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getInitial(): ?bool
    {
        return $this->initial;
    }
    /**
     * @param bool|null $initial
     *
     * @return self
     */
    public function setInitial(?bool $initial): self
    {
        $this->initialized['initial'] = true;
        $this->initial = $initial;
        return $this;
    }
    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }
    /**
     * @param string $internalId
     *
     * @return self
     */
    public function setInternalId(string $internalId): self
    {
        $this->initialized['internalId'] = true;
        $this->internalId = $internalId;
        return $this;
    }
    /**
     * @return bool
     */
    public function getArchived(): bool
    {
        return $this->archived;
    }
    /**
     * @param bool $archived
     *
     * @return self
     */
    public function setArchived(bool $archived): self
    {
        $this->initialized['archived'] = true;
        $this->archived = $archived;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'name' => ['name', 'getName', 'setName'], 'locale' => ['locale', 'getLocale', 'setLocale'], 'fallback' => ['fallback', 'getFallback', 'setFallback'], 'initial' => ['initial', 'getInitial', 'setInitial'], 'internalId' => ['internalId', 'getInternalId', 'setInternalId'], 'archived' => ['archived', 'getArchived', 'setArchived']];
    }
}