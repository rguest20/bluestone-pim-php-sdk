<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class MediabankAssetsParamsUpdated implements AdditionalPropertiesInterface
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
    protected $after;
    /**
     * @var string|null
     */
    protected $before;
    /**
     * @return string|null
     */
    public function getAfter(): ?string
    {
        return $this->after;
    }
    /**
     * @param string|null $after
     *
     * @return self
     */
    public function setAfter(?string $after): self
    {
        $this->initialized['after'] = true;
        $this->after = $after;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getBefore(): ?string
    {
        return $this->before;
    }
    /**
     * @param string|null $before
     *
     * @return self
     */
    public function setBefore(?string $before): self
    {
        $this->initialized['before'] = true;
        $this->before = $before;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['after' => ['after', 'getAfter', 'setAfter'], 'before' => ['before', 'getBefore', 'setBefore']];
    }
}