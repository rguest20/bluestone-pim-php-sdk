<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class CategoryAttributeRequest implements AdditionalPropertiesInterface
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
     * Value to set on the Category Level Attribute (CLA), given as text - for example `Some text`, `2025-04-25` for a
     * date or `true` for a boolean. For single-select and multi-select definitions pass select value IDs instead,
     * separated by commas for multi-select. Leave it out to attach the attribute without a value.
     *
     * @var string|null
     */
    protected $value;
    /**
     * Value to set on the Category Level Attribute (CLA), given as text - for example `Some text`, `2025-04-25` for a
     * date or `true` for a boolean. For single-select and multi-select definitions pass select value IDs instead,
     * separated by commas for multi-select. Leave it out to attach the attribute without a value.
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
    * Value to set on the Category Level Attribute (CLA), given as text - for example `Some text`, `2025-04-25` for a
    date or `true` for a boolean. For single-select and multi-select definitions pass select value IDs instead,
    separated by commas for multi-select. Leave it out to attach the attribute without a value.
    *
    * @param string|null $value
    *
    * @return self
    */
    public function setValue(?string $value): self
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