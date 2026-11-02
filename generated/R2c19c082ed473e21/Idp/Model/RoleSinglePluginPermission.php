<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class RoleSinglePluginPermission
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
    protected $module;
    /**
     * @var string
     */
    protected $actionName;
    /**
     * @return string
     */
    public function getModule(): string
    {
        return $this->module;
    }
    /**
     * @param string $module
     *
     * @return self
     */
    public function setModule(string $module): self
    {
        $this->initialized['module'] = true;
        $this->module = $module;
        return $this;
    }
    /**
     * @return string
     */
    public function getActionName(): string
    {
        return $this->actionName;
    }
    /**
     * @param string $actionName
     *
     * @return self
     */
    public function setActionName(string $actionName): self
    {
        $this->initialized['actionName'] = true;
        $this->actionName = $actionName;
        return $this;
    }
}