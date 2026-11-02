<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Labels\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Labels\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Labels\Runtime\AdditionalPropertiesInterface;
class LabelRequest implements AdditionalPropertiesInterface
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
     * Text for the label in the context given by the context header, or your default context if omitted. Must be 3-1000 characters and unique among labels in that context.
     *
     * @var string
     */
    protected $name;
    /**
     * Text for the label in the context given by the context header, or your default context if omitted. Must be 3-1000 characters and unique among labels in that context.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Text for the label in the context given by the context header, or your default context if omitted. Must be 3-1000 characters and unique among labels in that context.
     *
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
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName']];
    }
}