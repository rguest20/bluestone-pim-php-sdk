<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class APIClientV2
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
     * Used as client_id property for token purposes.
     *
     * @var string
     */
    protected $id;
    /**
     * Used as client_secret property for token purposes.
     *
     * @var string
     */
    protected $clientSecret;
    /**
     * Serves only as a helper when identifying created api clients.
     *
     * @var string
     */
    protected $name;
    /**
     * Role ids.
     *
     * @var list<string>
     */
    protected $roles;
    /**
     * @var string
     */
    protected $clientType;
    /**
     * Policy ids, empty for a STANDARD client.
     *
     * @var list<string>
     */
    protected $policies;
    /**
     * @var string
     */
    protected $organizationId;
    /**
     * User/service id.
     *
     * @var string
     */
    protected $createdBy;
    /**
     * Date timestamp for creation date. Formatted in milliseconds.
     *
     * @var float
     */
    protected $createdDate;
    /**
     * User/service id.
     *
     * @var string
     */
    protected $lastModifiedBy;
    /**
     * Date timestamp for last modification date. Formatted in milliseconds.
     *
     * @var float
     */
    protected $lastModifiedDate;
    /**
     * Used as client_id property for token purposes.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Used as client_id property for token purposes.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Used as client_secret property for token purposes.
     *
     * @return string
     */
    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }
    /**
     * Used as client_secret property for token purposes.
     *
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
     * Serves only as a helper when identifying created api clients.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Serves only as a helper when identifying created api clients.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Role ids.
     *
     * @return list<string>
     */
    public function getRoles(): array
    {
        return $this->roles;
    }
    /**
     * Role ids.
     *
     * @param list<string> $roles
     *
     * @return self
     */
    public function setRoles(array $roles): self
    {
        $this->initialized['roles'] = true;
        $this->roles = $roles;
        return $this;
    }
    /**
     * @return string
     */
    public function getClientType(): string
    {
        return $this->clientType;
    }
    /**
     * @param string $clientType
     *
     * @return self
     */
    public function setClientType(string $clientType): self
    {
        $this->initialized['clientType'] = true;
        $this->clientType = $clientType;
        return $this;
    }
    /**
     * Policy ids, empty for a STANDARD client.
     *
     * @return list<string>
     */
    public function getPolicies(): array
    {
        return $this->policies;
    }
    /**
     * Policy ids, empty for a STANDARD client.
     *
     * @param list<string> $policies
     *
     * @return self
     */
    public function setPolicies(array $policies): self
    {
        $this->initialized['policies'] = true;
        $this->policies = $policies;
        return $this;
    }
    /**
     * @return string
     */
    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }
    /**
     * @param string $organizationId
     *
     * @return self
     */
    public function setOrganizationId(string $organizationId): self
    {
        $this->initialized['organizationId'] = true;
        $this->organizationId = $organizationId;
        return $this;
    }
    /**
     * User/service id.
     *
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }
    /**
     * User/service id.
     *
     * @param string $createdBy
     *
     * @return self
     */
    public function setCreatedBy(string $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * Date timestamp for creation date. Formatted in milliseconds.
     *
     * @return float
     */
    public function getCreatedDate(): float
    {
        return $this->createdDate;
    }
    /**
     * Date timestamp for creation date. Formatted in milliseconds.
     *
     * @param float $createdDate
     *
     * @return self
     */
    public function setCreatedDate(float $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * User/service id.
     *
     * @return string
     */
    public function getLastModifiedBy(): string
    {
        return $this->lastModifiedBy;
    }
    /**
     * User/service id.
     *
     * @param string $lastModifiedBy
     *
     * @return self
     */
    public function setLastModifiedBy(string $lastModifiedBy): self
    {
        $this->initialized['lastModifiedBy'] = true;
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }
    /**
     * Date timestamp for last modification date. Formatted in milliseconds.
     *
     * @return float
     */
    public function getLastModifiedDate(): float
    {
        return $this->lastModifiedDate;
    }
    /**
     * Date timestamp for last modification date. Formatted in milliseconds.
     *
     * @param float $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(float $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
}