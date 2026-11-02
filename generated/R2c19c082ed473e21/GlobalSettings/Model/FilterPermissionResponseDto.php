<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\GlobalSettings\Runtime\AdditionalPropertiesInterface;
class FilterPermissionResponseDto implements AdditionalPropertiesInterface
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
    protected $userId;
    /**
     * @var string
     */
    protected $permissionType;
    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }
    /**
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
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
        return ['userId' => ['userId', 'getUserId', 'setUserId'], 'permissionType' => ['permissionType', 'getPermissionType', 'setPermissionType']];
    }
}