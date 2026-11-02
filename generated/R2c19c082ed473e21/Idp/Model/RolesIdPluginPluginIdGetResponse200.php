<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\AdditionalPropertiesInterface;
class RolesIdPluginPluginIdGetResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<string>
     */
    protected $pluginPermissions;
    /**
     * @return list<string>
     */
    public function getPluginPermissions(): array
    {
        return $this->pluginPermissions;
    }
    /**
     * @param list<string> $pluginPermissions
     *
     * @return self
     */
    public function setPluginPermissions(array $pluginPermissions): self
    {
        $this->initialized['pluginPermissions'] = true;
        $this->pluginPermissions = $pluginPermissions;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['pluginPermissions' => ['pluginPermissions', 'getPluginPermissions', 'setPluginPermissions']];
    }
}