<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class CheckResult implements AdditionalPropertiesInterface
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
    protected $healthy;
    /**
     * @var string
     */
    protected $checkName;
    /**
     * @return bool
     */
    public function getHealthy(): bool
    {
        return $this->healthy;
    }
    /**
     * @param bool $healthy
     *
     * @return self
     */
    public function setHealthy(bool $healthy): self
    {
        $this->initialized['healthy'] = true;
        $this->healthy = $healthy;
        return $this;
    }
    /**
     * @return string
     */
    public function getCheckName(): string
    {
        return $this->checkName;
    }
    /**
     * @param string $checkName
     *
     * @return self
     */
    public function setCheckName(string $checkName): self
    {
        $this->initialized['checkName'] = true;
        $this->checkName = $checkName;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['healthy' => ['healthy', 'getHealthy', 'setHealthy'], 'checkName' => ['checkName', 'getCheckName', 'setCheckName']];
    }
}