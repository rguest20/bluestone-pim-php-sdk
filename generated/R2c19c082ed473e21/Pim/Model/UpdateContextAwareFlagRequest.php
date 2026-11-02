<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class UpdateContextAwareFlagRequest implements AdditionalPropertiesInterface
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
     * @var bool
     */
    protected $contextAware;
    /**
     * @return bool
     */
    public function getContextAware(): bool
    {
        return $this->contextAware;
    }
    /**
     * @param bool $contextAware
     *
     * @return self
     */
    public function setContextAware(bool $contextAware): self
    {
        $this->initialized['contextAware'] = true;
        $this->contextAware = $contextAware;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['contextAware' => ['contextAware', 'getContextAware', 'setContextAware']];
    }
}