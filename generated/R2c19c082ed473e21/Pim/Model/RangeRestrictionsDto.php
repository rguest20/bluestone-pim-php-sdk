<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class RangeRestrictionsDto implements AdditionalPropertiesInterface
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
    protected $max;
    /**
     * @var string|null
     */
    protected $min;
    /**
     * @var string|null
     */
    protected $step;
    /**
     * @return string|null
     */
    public function getMax(): ?string
    {
        return $this->max;
    }
    /**
     * @param string|null $max
     *
     * @return self
     */
    public function setMax(?string $max): self
    {
        $this->initialized['max'] = true;
        $this->max = $max;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getMin(): ?string
    {
        return $this->min;
    }
    /**
     * @param string|null $min
     *
     * @return self
     */
    public function setMin(?string $min): self
    {
        $this->initialized['min'] = true;
        $this->min = $min;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getStep(): ?string
    {
        return $this->step;
    }
    /**
     * @param string|null $step
     *
     * @return self
     */
    public function setStep(?string $step): self
    {
        $this->initialized['step'] = true;
        $this->step = $step;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['max' => ['max', 'getMax', 'setMax'], 'min' => ['min', 'getMin', 'setMin'], 'step' => ['step', 'getStep', 'setStep']];
    }
}