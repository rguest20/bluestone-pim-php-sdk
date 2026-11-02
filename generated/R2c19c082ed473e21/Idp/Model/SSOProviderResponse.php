<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class SSOProviderResponse
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
    protected $clientId;
    /**
     * Unix timestamp in milliseconds when the client secret expires. This is a hint field provided by the customer. It has minimal impact on the system and is primarily used to suggest potential error causes and assist Bluestone support with troubleshooting.
     *
     * @var float
     */
    protected $clientSecretExpirationDate;
    /**
     * @return string
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }
    /**
     * @param string $clientId
     *
     * @return self
     */
    public function setClientId(string $clientId): self
    {
        $this->initialized['clientId'] = true;
        $this->clientId = $clientId;
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