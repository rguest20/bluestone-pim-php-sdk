<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalPropertiesInterface;
class UserConfigurationResponse implements AdditionalPropertiesInterface
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
    protected $userEmail;
    /**
     * @return string
     */
    public function getUserEmail(): string
    {
        return $this->userEmail;
    }
    /**
     * @param string $userEmail
     *
     * @return self
     */
    public function setUserEmail(string $userEmail): self
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