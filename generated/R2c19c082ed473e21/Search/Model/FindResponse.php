<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class FindResponse implements AdditionalPropertiesInterface
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
    protected $id;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $archiveState;
    /**
     * @var list<HighlightResponse>|null
     */
    protected $highlights;
    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
    public function getArchiveState(): ?string
    {
        return $this->archiveState;
    }
    /**
     * @param string|null $archiveState
     *
     * @return self
     */
    public function setArchiveState(?string $archiveState): self
    {
        $this->initialized['archiveState'] = true;
        $this->archiveState = $archiveState;
        return $this;
    }
    /**
     * @return list<HighlightResponse>|null
     */
    public function getHighlights(): ?array
    {
        return $this->highlights;
    }
    /**
     * @param list<HighlightResponse>|null $highlights
     *
     * @return self
     */
    public function setHighlights(?array $highlights): self
    {
        $this->initialized['highlights'] = true;
        $this->highlights = $highlights;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'name' => ['name', 'getName', 'setName'], 'archiveState' => ['archiveState', 'getArchiveState', 'setArchiveState'], 'highlights' => ['highlights', 'getHighlights', 'setHighlights']];
    }
}