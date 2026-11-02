<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class UpdateSSOProviderRequest
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
    protected $clientSecret;
    /**
     * Unix timestamp in milliseconds when the client secret expires. This is a hint field provided by the customer. It has minimal impact on the system and is primarily used to suggest potential error causes and assist Bluestone support with troubleshooting.
     *
     * @var float
     */
    protected $clientSecretExpirationDate;
    /**
     * @return string
     */
    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }
    /**
     * @param string $clientSecret
     *
     * @return self
     */
    public function setClientSecret(string $clientSecret): self
    {
        $this->initialized['clientSecret'] = true;
        $this->clientSecret = $clientSecret;
        return $this;
    }
    /**
     * Unix timestamp in milliseconds when the client secret expires. This is a hint field provided by the customer. It has minimal impact on the system and is primarily used to suggest potential error causes and assist Bluestone support with troubleshooting.
     *
     * @return float
     */
    public function getClientSecretExpirationDate(): float
    {
        return $this->clientSecretExpirationDate;
    }
    /**
     * Unix timestamp in milliseconds when the client secret expires. This is a hint field provided by the customer. It has minimal impact on the system and is primarily used to suggest potential error causes and assist Bluestone support with troubleshooting.
     *
     * @param float $clientSecretExpirationDate
     *
     * @return self
     */
    public function setClientSecretExpirationDate(float $clientSecretExpirationDate): self
    {
        $this->initialized['clientSecretExpirationDate'] = true;
        $this->clientSecretExpirationDate = $clientSecretExpirationDate;
        return $this;
    }
}