<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class AssetsCreatedRelative implements AdditionalPropertiesInterface
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
     * @var int|null
     */
    protected $daysAgo;
    /**
     * @return int|null
     */
    public function getDaysAgo(): ?int
    {
        return $this->daysAgo;
    }
    /**
     * @param int|null $daysAgo
     *
     * @return self
     */
    public function setDaysAgo(?int $daysAgo): self
    {
        $this->initialized['daysAgo'] = true;
        $this->daysAgo = $daysAgo;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['daysAgo' => ['daysAgo', 'getDaysAgo', 'setDaysAgo']];
    }
}