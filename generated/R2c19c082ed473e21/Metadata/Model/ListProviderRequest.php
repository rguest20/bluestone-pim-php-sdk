<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Runtime\AdditionalPropertiesInterface;
class ListProviderRequest implements AdditionalPropertiesInterface
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
     * @var list<string>
     */
    protected $numbers;
    /**
     * @return list<string>
     */
    public function getNumbers(): array
    {
        return $this->numbers;
    }
    /**
     * @param list<string> $numbers
     *
     * @return self
     */
    public function setNumbers(array $numbers): self
    {
        $this->initialized['numbers'] = true;
        $this->numbers = $numbers;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['numbers' => ['numbers', 'getNumbers', 'setNumbers']];
    }
}