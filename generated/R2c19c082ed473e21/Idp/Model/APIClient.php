<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class APIClient
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
    protected $name;
    /**
     * List of allowed IP addresses.
     *
     * @var list<string>
     */
    protected $remoteAddresses;
    /**
     * @var string
     */
    protected $flowType;
    /**
     * @var string
     */
    protected $clientSecret;
    /**
     * List of accepted uris.
     *
     * @var list<string>
     */
    protected $redirectUris;
    /**
     * Role ids.
     *
     * @var list<string>
     */
    protected $roles;
    /**
     * Type of the api client.
     *
     * @var string
     */
    protected $clientType;
    /**
     * Policy ids, used only for RESTRICTED client.
     *
     * @var list<string>
     */
    protected $policies;
    /**
     * @var string
     */
    protected $organization;
    /**
     * @var string
     */
    protected $id;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
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
     * List of allowed IP addresses.
     *
     * @return list<string>
     */
    public function getRemoteAddresses(): array
    {
        return $this->remoteAddresses;
    }
    /**
     * List of allowed IP addresses.
     *
     * @param list<string> $remoteAddresses
     *
     * @return self
     */
    public function setRemoteAddresses(array $remoteAddresses): self
    {
        $this->initialized['remoteAddresses'] = true;
        $this->remoteAddresses = $remoteAddresses;
        return $this;
    }
    /**
     * @return string
     */
    public function getFlowType(): string
    {
        return $this->flowType;
    }
    /**
     * @param string $flowType
     *
     * @return self
     */
    public function setFlowType(string $flowType): self
    {
        $this->initialized['flowType'] = true;
        $this->flowType = $flowType;
        return $this;
    }
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
     * List of accepted uris.
     *
     * @return list<string>
     */
    public function getRedirectUris(): array
    {
        return $this->redirectUris;
    }
    /**
     * List of accepted uris.
     *
     * @param list<string> $redirectUris
     *
     * @return self
     */
    public function setRedirectUris(array $redirectUris): self
    {
        $this->initialized['redirectUris'] = true;
        $this->redirectUris = $redirectUris;
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
     * Type of the api client.
     *
     * @return string
     */
    public function getClientType(): string
    {
        return $this->clientType;
    }
    /**
     * Type of the api client.
     *
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
     * Policy ids, used only for RESTRICTED client.
     *
     * @return list<string>
     */
    public function getPolicies(): array
    {
        return $this->policies;
    }
    /**
     * Policy ids, used only for RESTRICTED client.
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
    public function getOrganization(): string
    {
        return $this->organization;
    }
    /**
     * @param string $organization
     *
     * @return self
     */
    public function setOrganization(string $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;
        return $this;
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
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
}