<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class MultiLanguageDto implements AdditionalPropertiesInterface
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
     * Map of multi language values.
     *
     * @var array<string, string>|null
     */
    protected $value;
    /**
     * Map of multi language values.
     *
     * @return array<string, string>|null
     */
    public function getValue(): ?iterable
    {
        return $this->value;
    }
    /**
     * Map of multi language values.
     *
     * @param array<string, string>|null $value
     *
     * @return self
     */
    public function setValue(?iterable $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['value' => ['value', 'getValue', 'setValue']];
    }
}