<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class AttributeValidationIssueDetails implements AdditionalPropertiesInterface
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
     * @var DuplicatedSelectValue|null
     */
    protected $duplicatedSelectValue;
    /**
     * @return DuplicatedSelectValue|null
     */
    public function getDuplicatedSelectValue(): ?DuplicatedSelectValue
    {
        return $this->duplicatedSelectValue;
    }
    /**
     * @param DuplicatedSelectValue|null $duplicatedSelectValue
     *
     * @return self
     */
    public function setDuplicatedSelectValue(?DuplicatedSelectValue $duplicatedSelectValue): self
    {
        $this->initialized['duplicatedSelectValue'] = true;
        $this->duplicatedSelectValue = $duplicatedSelectValue;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['duplicatedSelectValue' => ['duplicatedSelectValue', 'getDuplicatedSelectValue', 'setDuplicatedSelectValue']];
    }
}