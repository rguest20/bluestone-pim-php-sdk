<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalPropertiesInterface;
class UserConfigurationRequest implements AdditionalPropertiesInterface
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
     * @var PropertyUpdateString
     */
    protected $userEmail;
    /**
     * @return PropertyUpdateString
     */
    public function getUserEmail(): PropertyUpdateString
    {
        return $this->userEmail;
    }
    /**
     * @param PropertyUpdateString $userEmail
     *
     * @return self
     */
    public function setUserEmail(PropertyUpdateString $userEmail): self
    {
        $this->initialized['userEmail'] = true;
        $this->userEmail = $userEmail;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['userEmail' => ['userEmail', 'getUserEmail', 'setUserEmail']];
    }
}