<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class MinePermissions
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
     * List of user UI permissions in simplified format that only contains accessType.
     *
     * @var list<string>
     */
    protected $uiPermissions;
    /**
     * @var MinePermissionsPluginsUIPermissions
     */
    protected $pluginsUIPermissions;
    /**
     * List of user UI permissions in simplified format that only contains accessType.
     *
     * @return list<string>
     */
    public function getUiPermissions(): array
    {
        return $this->uiPermissions;
    }
    /**
     * List of user UI permissions in simplified format that only contains accessType.
     *
     * @param list<string> $uiPermissions
     *
     * @return self
     */
    public function setUiPermissions(array $uiPermissions): self
    {
        $this->initialized['uiPermissions'] = true;
        $this->uiPermissions = $uiPermissions;
        return $this;
    }
    /**
     * @return MinePermissionsPluginsUIPermissions
     */
    public function getPluginsUIPermissions(): MinePermissionsPluginsUIPermissions
    {
        return $this->pluginsUIPermissions;
    }
    /**
     * @param MinePermissionsPluginsUIPermissions $pluginsUIPermissions
     *
     * @return self
     */
    public function setPluginsUIPermissions(MinePermissionsPluginsUIPermissions $pluginsUIPermissions): self
    {
        $this->initialized['pluginsUIPermissions'] = true;
        $this->pluginsUIPermissions = $pluginsUIPermissions;
        return $this;
    }
}