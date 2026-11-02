<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class ValidationStatusFilter
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
     * @var string
     */
    protected $type;
    /**
     * @var list<string>
     */
    protected $validationStatus;
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getValidationStatus(): array
    {
        return $this->validationStatus;
    }
    /**
     * @param list<string> $validationStatus
     *
     * @return self
     */
    public function setValidationStatus(array $validationStatus): self
    {
        $this->initialized['validationStatus'] = true;
        $this->validationStatus = $validationStatus;
        return $this;
    }
}