<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class TextRestrictionsDto implements AdditionalPropertiesInterface
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
    protected $maxLength;
    /**
     * @var string|null
     */
    protected $pattern;
    /**
     * @var bool|null
     */
    protected $whitespaces;
    /**
     * @return int|null
     */
    public function getMaxLength(): ?int
    {
        return $this->maxLength;
    }
    /**
     * @param int|null $maxLength
     *
     * @return self
     */
    public function setMaxLength(?int $maxLength): self
    {
        $this->initialized['maxLength'] = true;
        $this->maxLength = $maxLength;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getPattern(): ?string
    {
        return $this->pattern;
    }
    /**
     * @param string|null $pattern
     *
     * @return self
     */
    public function setPattern(?string $pattern): self
    {
        $this->initialized['pattern'] = true;
        $this->pattern = $pattern;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getWhitespaces(): ?bool
    {
        return $this->whitespaces;
    }
    /**
     * @param bool|null $whitespaces
     *
     * @return self
     */
    public function setWhitespaces(?bool $whitespaces): self
    {
        $this->initialized['whitespaces'] = true;
        $this->whitespaces = $whitespaces;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['maxLength' => ['maxLength', 'getMaxLength', 'setMaxLength'], 'pattern' => ['pattern', 'getPattern', 'setPattern'], 'whitespaces' => ['whitespaces', 'getWhitespaces', 'setWhitespaces']];
    }
}