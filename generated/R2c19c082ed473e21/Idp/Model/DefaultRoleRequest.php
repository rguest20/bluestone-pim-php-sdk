<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class DefaultRoleRequest
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
     * Role id - can be either normal role or managed role id.
     *
     * @var string
     */
    protected $roleId;
    /**
     * Role id - can be either normal role or managed role id.
     *
     * @return string
     */
    public function getRoleId(): string
    {
        return $this->roleId;
    }
    /**
     * Role id - can be either normal role or managed role id.
     *
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
}