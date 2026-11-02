<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalPropertiesInterface;
class ErrorMessage implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $errorCode;
    /**
     * @var string
     */
    protected $errorMsg;
    /**
     * @return int
     */
    public function getErrorCode(): int
    {
        return $this->errorCode;
    }
    /**
     * @param int $errorCode
     *
     * @return self
     */
    public function setErrorCode(int $errorCode): self
    {
        $this->initialized['errorCode'] = true;
        $this->errorCode = $errorCode;
        return $this;
    }
    /**
     * @return string
     */
    public function getErrorMsg(): string
    {
        return $this->errorMsg;
    }
    /**
     * @param string $errorMsg
     *
     * @return self
     */
    public function setErrorMsg(string $errorMsg): self
    {
        $this->initialized['errorMsg'] = true;
        $this->errorMsg = $errorMsg;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['errorCode' => ['errorCode', 'getErrorCode', 'setErrorCode'], 'errorMsg' => ['errorMsg', 'getErrorMsg', 'setErrorMsg']];
    }
}