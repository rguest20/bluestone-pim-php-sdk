<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class MatrixAttributeDefinitionDto implements AdditionalPropertiesInterface
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
     * @var bool|null
     */
    protected $contextAware;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var bool|null
     */
    protected $externalSource;
    /**
     * @var string|null
     */
    protected $groupId;
    /**
     * @var bool|null
     */
    protected $internal;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $number;
    /**
     * @var MatrixRestrictionDto
     */
    protected $restrictions;
    /**
     * @return bool|null
     */
    public function getContextAware(): ?bool
    {
        return $this->contextAware;
    }
    /**
     * @param bool|null $contextAware
     *
     * @return self
     */
    public function setContextAware(?bool $contextAware): self
    {
        $this->initialized['contextAware'] = true;
        $this->contextAware = $contextAware;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getExternalSource(): ?bool
    {
        return $this->externalSource;
    }
    /**
     * @param bool|null $externalSource
     *
     * @return self
     */
    public function setExternalSource(?bool $externalSource): self
    {
        $this->initialized['externalSource'] = true;
        $this->externalSource = $externalSource;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }
    /**
     * @param string|null $groupId
     *
     * @return self
     */
    public function setGroupId(?string $groupId): self
    {
        $this->initialized['groupId'] = true;
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getInternal(): ?bool
    {
        return $this->internal;
    }
    /**
     * @param bool|null $internal
     *
     * @return self
     */
    public function setInternal(?bool $internal): self
    {
        $this->initialized['internal'] = true;
        $this->internal = $internal;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }
    /**
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * @return MatrixRestrictionDto
     */
    public function getRestrictions(): MatrixRestrictionDto
    {
        return $this->restrictions;
    }
    /**
     * @param MatrixRestrictionDto $restrictions
     *
     * @return self
     */
    public function setRestrictions(MatrixRestrictionDto $restrictions): self
    {
        $this->initialized['restrictions'] = true;
        $this->restrictions = $restrictions;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['contextAware' => ['contextAware', 'getContextAware', 'setContextAware'], 'description' => ['description', 'getDescription', 'setDescription'], 'externalSource' => ['externalSource', 'getExternalSource', 'setExternalSource'], 'groupId' => ['groupId', 'getGroupId', 'setGroupId'], 'internal' => ['internal', 'getInternal', 'setInternal'], 'name' => ['name', 'getName', 'setName'], 'number' => ['number', 'getNumber', 'setNumber'], 'restrictions' => ['restrictions', 'getRestrictions', 'setRestrictions']];
    }
}