<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class CompoundAttributeSubDefinitionDto implements AdditionalPropertiesInterface
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
     * Flag defining if the attribute is a `compound` attribute definition type.
     *
     * @var bool|null
     */
    protected $compound;
    /**
     * Attribute definition ID.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @var string
     */
    protected $id;
    /**
     * Flag defining if the attribute is a `compound` attribute definition type.
     *
     * @return bool|null
     */
    public function getCompound(): ?bool
    {
        return $this->compound;
    }
    /**
     * Flag defining if the attribute is a `compound` attribute definition type.
     *
     * @param bool|null $compound
     *
     * @return self
     */
    public function setCompound(?bool $compound): self
    {
        $this->initialized['compound'] = true;
        $this->compound = $compound;
        return $this;
    }
    /**
     * Attribute definition ID.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Attribute definition ID.
     **Example:** `634c26e14cedfd0001775e9f`
     *
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
    public function definedProperties(): array
    {
        return ['compound' => ['compound', 'getCompound', 'setCompound'], 'id' => ['id', 'getId', 'setId']];
    }
}