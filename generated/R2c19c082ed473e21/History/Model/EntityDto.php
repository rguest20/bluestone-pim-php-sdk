<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Runtime\AdditionalPropertiesInterface;
class EntityDto implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var EntityDto|null
     */
    protected $subEntity;
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
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return EntityDto|null
     */
    public function getSubEntity(): ?EntityDto
    {
        return $this->subEntity;
    }
    /**
     * @param EntityDto|null $subEntity
     *
     * @return self
     */
    public function setSubEntity(?EntityDto $subEntity): self
    {
        $this->initialized['subEntity'] = true;
        $this->subEntity = $subEntity;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'id' => ['id', 'getId', 'setId'], 'type' => ['type', 'getType', 'setType'], 'subEntity' => ['subEntity', 'getSubEntity', 'setSubEntity']];
    }
}