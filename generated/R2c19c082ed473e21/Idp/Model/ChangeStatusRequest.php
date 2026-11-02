<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class ChangeStatusRequest
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
    protected $userStatus;
    /**
     * @return string
     */
    public function getUserStatus(): string
    {
        return $this->userStatus;
    }
    /**
     * @param string $userStatus
     *
     * @return self
     */
    public function setUserStatus(string $userStatus): self
    {
        $this->initialized['userStatus'] = true;
        $this->userStatus = $userStatus;
        return $this;
    }
}