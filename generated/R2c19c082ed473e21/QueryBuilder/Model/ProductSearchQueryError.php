<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class ProductSearchQueryError
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
    protected $errorType;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var string
     */
    protected $location;
    /**
     * @return string
     */
    public function getErrorType(): string
    {
        return $this->errorType;
    }
    /**
     * @param string $errorType
     *
     * @return self
     */
    public function setErrorType(string $errorType): self
    {
        $this->initialized['errorType'] = true;
        $this->errorType = $errorType;
        return $this;
    }
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
    public function getLocation(): string
    {
        return $this->location;
    }
    /**
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
}