<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class PersistedProductQueryStatusBase
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
    protected $statusType;
    /**
     * @var string
     */
    protected $message;
    /**
     * @return string
     */
    public function getStatusType(): string
    {
        return $this->statusType;
    }
    /**
     * @param string $statusType
     *
     * @return self
     */
    public function setStatusType(string $statusType): self
    {
        $this->initialized['statusType'] = true;
        $this->statusType = $statusType;
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
}