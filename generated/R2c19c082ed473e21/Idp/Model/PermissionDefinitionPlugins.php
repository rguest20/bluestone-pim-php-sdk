<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class PermissionDefinitionPlugins
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
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $id;
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
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}