<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\AdditionalPropertiesInterface;
class FilterPermissionUpdateRequestDto implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $permissionType;
    /**
     * @return string
     */
    public function getPermissionType(): string
    {
        return $this->permissionType;
    }
    /**
     * @param string $permissionType
     *
     * @return self
     */
    public function setPermissionType(string $permissionType): self
    {
        $this->initialized['permissionType'] = true;
        $this->permissionType = $permissionType;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['permissionType' => ['permissionType', 'getPermissionType', 'setPermissionType']];
    }
}