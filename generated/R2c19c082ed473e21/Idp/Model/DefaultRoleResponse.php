<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class DefaultRoleResponse
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
    protected $roleId;
    /**
     * @var bool|null
     */
    protected $isStandardRole;
    /**
     * @return string
     */
    public function getRoleId(): string
    {
        return $this->roleId;
    }
    /**
     * @param string $roleId
     *
     * @return self
     */
    public function setRoleId(string $roleId): self
    {
        $this->initialized['roleId'] = true;
        $this->roleId = $roleId;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getIsStandardRole(): ?bool
    {
        return $this->isStandardRole;
    }
    /**
     * @param bool|null $isStandardRole
     *
     * @return self
     */
    public function setIsStandardRole(?bool $isStandardRole): self
    {
        $this->initialized['isStandardRole'] = true;
        $this->isStandardRole = $isStandardRole;
        return $this;
    }
}