<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class User
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
    protected $id;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $picture;
    /**
     * @var list<string>
     */
    protected $policies;
    /**
     * @var list<string>
     */
    protected $roles;
    /**
     * @var list<string>
     */
    protected $managedRoles;
    /**
     * @var bool
     */
    protected $canSendEmail;
    /**
     * @var bool
     */
    protected $isInitial;
    /**
     * @var list<string>|null
     */
    protected $userGroups;
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
    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
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
     * @return string|null
     */
    public function getPicture(): ?string
    {
        return $this->picture;
    }
    /**
     * @param string|null $picture
     *
     * @return self
     */
    public function setPicture(?string $picture): self
    {
        $this->initialized['picture'] = true;
        $this->picture = $picture;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getPolicies(): array
    {
        return $this->policies;
    }
    /**
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
     * @return list<string>
     */
    public function getRoles(): array
    {
        return $this->roles;
    }
    /**
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
     * @return list<string>
     */
    public function getManagedRoles(): array
    {
        return $this->managedRoles;
    }
    /**
     * @param list<string> $managedRoles
     *
     * @return self
     */
    public function setManagedRoles(array $managedRoles): self
    {
        $this->initialized['managedRoles'] = true;
        $this->managedRoles = $managedRoles;
        return $this;
    }
    /**
     * @return bool
     */
    public function getCanSendEmail(): bool
    {
        return $this->canSendEmail;
    }
    /**
     * @param bool $canSendEmail
     *
     * @return self
     */
    public function setCanSendEmail(bool $canSendEmail): self
    {
        $this->initialized['canSendEmail'] = true;
        $this->canSendEmail = $canSendEmail;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsInitial(): bool
    {
        return $this->isInitial;
    }
    /**
     * @param bool $isInitial
     *
     * @return self
     */
    public function setIsInitial(bool $isInitial): self
    {
        $this->initialized['isInitial'] = true;
        $this->isInitial = $isInitial;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getUserGroups(): ?array
    {
        return $this->userGroups;
    }
    /**
     * @param list<string>|null $userGroups
     *
     * @return self
     */
    public function setUserGroups(?array $userGroups): self
    {
        $this->initialized['userGroups'] = true;
        $this->userGroups = $userGroups;
        return $this;
    }
}