<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class ErrorDetails implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $message;
    /**
     * @var string
     */
    protected $field;
    /**
     * @var string
     */
    protected $rejectedValue;
    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }
    /**
     * @param string $field
     *
     * @return self
     */
    public function setField(string $field): self
    {
        $this->initialized['field'] = true;
        $this->field = $field;
        return $this;
    }
    /**
     * @return string
     */
    public function getRejectedValue(): string
    {
        return $this->rejectedValue;
    }
    /**
     * @param string $rejectedValue
     *
     * @return self
     */
    public function setRejectedValue(string $rejectedValue): self
    {
        $this->initialized['rejectedValue'] = true;
        $this->rejectedValue = $rejectedValue;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['message' => ['message', 'getMessage', 'setMessage'], 'field' => ['field', 'getField', 'setField'], 'rejectedValue' => ['rejectedValue', 'getRejectedValue', 'setRejectedValue']];
    }
}