<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class ChangePasswordRequest
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
    protected $currentPassword;
    /**
     * @var string
     */
    protected $newPassword;
    /**
     * @var string
     */
    protected $confirmPassword;
    /**
     * @return string
     */
    public function getCurrentPassword(): string
    {
        return $this->currentPassword;
    }
    /**
     * @param string $currentPassword
     *
     * @return self
     */
    public function setCurrentPassword(string $currentPassword): self
    {
        $this->initialized['currentPassword'] = true;
        $this->currentPassword = $currentPassword;
        return $this;
    }
    /**
     * @return string
     */
    public function getNewPassword(): string
    {
        return $this->newPassword;
    }
    /**
     * @param string $newPassword
     *
     * @return self
     */
    public function setNewPassword(string $newPassword): self
    {
        $this->initialized['newPassword'] = true;
        $this->newPassword = $newPassword;
        return $this;
    }
    /**
     * @return string
     */
    public function getConfirmPassword(): string
    {
        return $this->confirmPassword;
    }
    /**
     * @param string $confirmPassword
     *
     * @return self
     */
    public function setConfirmPassword(string $confirmPassword): self
    {
        $this->initialized['confirmPassword'] = true;
        $this->confirmPassword = $confirmPassword;
        return $this;
    }
}