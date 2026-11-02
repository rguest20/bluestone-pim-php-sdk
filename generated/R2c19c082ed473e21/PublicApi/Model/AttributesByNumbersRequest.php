<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model;

class AttributesByNumbersRequest
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Attributes numbers to be returned.
     *
     * @var list<string>
     */
    protected $numbers;
    /**
     * Attributes numbers to be returned.
     *
     * @return list<string>
     */
    public function getNumbers(): array
    {
        return $this->numbers;
    }
    /**
     * Attributes numbers to be returned.
     *
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
}