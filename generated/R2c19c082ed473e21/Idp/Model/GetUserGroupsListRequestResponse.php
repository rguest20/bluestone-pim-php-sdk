<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\AdditionalPropertiesInterface;
class GetUserGroupsListRequestResponse implements AdditionalPropertiesInterface
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
     * @var list<UserGroup>
     */
    protected $userGroups;
    /**
     * @return list<UserGroup>
     */
    public function getUserGroups(): array
    {
        return $this->userGroups;
    }
    /**
     * @param list<UserGroup> $userGroups
     *
     * @return self
     */
    public function setUserGroups(array $userGroups): self
    {
        $this->initialized['userGroups'] = true;
        $this->userGroups = $userGroups;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['userGroups' => ['userGroups', 'getUserGroups', 'setUserGroups']];
    }
}