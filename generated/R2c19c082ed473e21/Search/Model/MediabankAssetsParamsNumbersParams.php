<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class MediabankAssetsParamsNumbersParams implements AdditionalPropertiesInterface
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
     * @var list<string>|null
     */
    protected $numbers;
    /**
     * @var string|null
     */
    protected $numbersMatch;
    /**
     * @return list<string>|null
     */
    public function getNumbers(): ?array
    {
        return $this->numbers;
    }
    /**
     * @param list<string>|null $numbers
     *
     * @return self
     */
    public function setNumbers(?array $numbers): self
    {
        $this->initialized['numbers'] = true;
        $this->numbers = $numbers;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getNumbersMatch(): ?string
    {
        return $this->numbersMatch;
    }
    /**
     * @param string|null $numbersMatch
     *
     * @return self
     */
    public function setNumbersMatch(?string $numbersMatch): self
    {
        $this->initialized['numbersMatch'] = true;
        $this->numbersMatch = $numbersMatch;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['numbers' => ['numbers', 'getNumbers', 'setNumbers'], 'numbersMatch' => ['numbersMatch', 'getNumbersMatch', 'setNumbersMatch']];
    }
}