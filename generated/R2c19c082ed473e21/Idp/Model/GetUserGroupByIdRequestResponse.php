<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\AdditionalPropertiesInterface;
class GetUserGroupByIdRequestResponse implements AdditionalPropertiesInterface
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
     * @var UserGroup
     */
    protected $userGroup;
    /**
     * @return UserGroup
     */
    public function getUserGroup(): UserGroup
    {
        return $this->userGroup;
    }
    /**
     * @param UserGroup $userGroup
     *
     * @return self
     */
    public function setUserGroup(UserGroup $userGroup): self
    {
        $this->initialized['userGroup'] = true;
        $this->userGroup = $userGroup;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['userGroup' => ['userGroup', 'getUserGroup', 'setUserGroup']];
    }
}