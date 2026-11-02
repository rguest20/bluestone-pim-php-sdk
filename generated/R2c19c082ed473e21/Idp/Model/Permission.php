<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class Permission
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
    protected $id;
    /**
     * @var string
     */
    protected $module;
    /**
     * @var string
     */
    protected $accessType;
    /**
     * @var string
     */
    protected $moduleDisplayName;
    /**
     * @var string
     */
    protected $accessTypeDisplayName;
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
    public function getAccessType(): string
    {
        return $this->accessType;
    }
    /**
     * @param string $accessType
     *
     * @return self
     */
    public function setAccessType(string $accessType): self
    {
        $this->initialized['accessType'] = true;
        $this->accessType = $accessType;
        return $this;
    }
    /**
     * @return string
     */
    public function getModuleDisplayName(): string
    {
        return $this->moduleDisplayName;
    }
    /**
     * @param string $moduleDisplayName
     *
     * @return self
     */
    public function setModuleDisplayName(string $moduleDisplayName): self
    {
        $this->initialized['moduleDisplayName'] = true;
        $this->moduleDisplayName = $moduleDisplayName;
        return $this;
    }
    /**
     * @return string
     */
    public function getAccessTypeDisplayName(): string
    {
        return $this->accessTypeDisplayName;
    }
    /**
     * @param string $accessTypeDisplayName
     *
     * @return self
     */
    public function setAccessTypeDisplayName(string $accessTypeDisplayName): self
    {
        $this->initialized['accessTypeDisplayName'] = true;
        $this->accessTypeDisplayName = $accessTypeDisplayName;
        return $this;
    }
}