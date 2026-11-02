<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class HighlightResponse implements AdditionalPropertiesInterface
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
    protected $field;
    /**
     * @var string|null
     */
    protected $fragment;
    /**
     * @return string|null
     */
    public function getField(): ?string
    {
        return $this->field;
    }
    /**
     * @param string|null $field
     *
     * @return self
     */
    public function setField(?string $field): self
    {
        $this->initialized['field'] = true;
        $this->field = $field;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getFragment(): ?string
    {
        return $this->fragment;
    }
    /**
     * @param string|null $fragment
     *
     * @return self
     */
    public function setFragment(?string $fragment): self
    {
        $this->initialized['fragment'] = true;
        $this->fragment = $fragment;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['field' => ['field', 'getField', 'setField'], 'fragment' => ['fragment', 'getFragment', 'setFragment']];
    }
}