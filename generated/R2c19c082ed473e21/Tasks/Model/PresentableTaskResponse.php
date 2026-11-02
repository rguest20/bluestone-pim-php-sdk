<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalPropertiesInterface;
class PresentableTaskResponse implements AdditionalPropertiesInterface
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
     * @var PresentableTask
     */
    protected $data;
    /**
     * @var list<ErrorMessage>
     */
    protected $errors;
    /**
     * @var int
     */
    protected $code;
    /**
     * @return PresentableTask
     */
    public function getData(): PresentableTask
    {
        return $this->data;
    }
    /**
     * @param PresentableTask $data
     *
     * @return self
     */
    public function setData(PresentableTask $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * @return list<ErrorMessage>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * @param list<ErrorMessage> $errors
     *
     * @return self
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }
    /**
     * @param int $code
     *
     * @return self
     */
    public function setCode(int $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['data' => ['data', 'getData', 'setData'], 'errors' => ['errors', 'getErrors', 'setErrors'], 'code' => ['code', 'getCode', 'setCode']];
    }
}