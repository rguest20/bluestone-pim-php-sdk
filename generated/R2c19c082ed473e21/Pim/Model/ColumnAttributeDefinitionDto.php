<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ColumnAttributeDefinitionDto implements AdditionalPropertiesInterface
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
     * Specifies whether the origin of the attribute is managed in an external source like an ERP system or managed by a cloud function like an AWS Lambda or Azure Function and hence the attribute should be read-only for the editors in the Bluestone PIM web application UI.
     * 
     * **Note**: The value of the attribute can still be modified via the Management API, for example by an integration or a cloud function triggered by a webhook message from Bluestone PIM.
     *
     * @var bool|null
     */
    protected $externalSource;
    /**
     * ID of the attribute group that the attribute definition belongs to.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @var string|null
     */
    protected $groupId;
    /**
     * Indicates that the attribute is for internal use only within Bluestone PIM, meaning this value is not visible in the Public API (PAPI) for systems downstream of Bluestone PIM; for example, attributes for system configuration, enrichment workflows, or internal categorization.
     *
     * @var bool|null
     */
    protected $internal;
    /**
     * Name of the attribute definition.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Number of the attribute definition.
     *
     * @var string|null
     */
    protected $number;
    /**
     * @var ColumnRestrictionDto
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
     * Specifies whether the origin of the attribute is managed in an external source like an ERP system or managed by a cloud function like an AWS Lambda or Azure Function and hence the attribute should be read-only for the editors in the Bluestone PIM web application UI.
     * 
     * **Note**: The value of the attribute can still be modified via the Management API, for example by an integration or a cloud function triggered by a webhook message from Bluestone PIM.
     *
     * @return bool|null
     */
    public function getExternalSource(): ?bool
    {
        return $this->externalSource;
    }
    /**
     * Specifies whether the origin of the attribute is managed in an external source like an ERP system or managed by a cloud function like an AWS Lambda or Azure Function and hence the attribute should be read-only for the editors in the Bluestone PIM web application UI.
     **Note**: The value of the attribute can still be modified via the Management API, for example by an integration or a cloud function triggered by a webhook message from Bluestone PIM.
     *
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
     * ID of the attribute group that the attribute definition belongs to.
     * 
     * **Example:** `634c26e14cedfd0001775e9f`
     *
     * @return string|null
     */
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }
    /**
     * ID of the attribute group that the attribute definition belongs to.
     **Example:** `634c26e14cedfd0001775e9f`
     *
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
     * Indicates that the attribute is for internal use only within Bluestone PIM, meaning this value is not visible in the Public API (PAPI) for systems downstream of Bluestone PIM; for example, attributes for system configuration, enrichment workflows, or internal categorization.
     *
     * @return bool|null
     */
    public function getInternal(): ?bool
    {
        return $this->internal;
    }
    /**
     * Indicates that the attribute is for internal use only within Bluestone PIM, meaning this value is not visible in the Public API (PAPI) for systems downstream of Bluestone PIM; for example, attributes for system configuration, enrichment workflows, or internal categorization.
     *
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
     * Name of the attribute definition.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Name of the attribute definition.
     *
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
     * Number of the attribute definition.
     *
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }
    /**
     * Number of the attribute definition.
     *
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
     * @return ColumnRestrictionDto
     */
    public function getRestrictions(): ColumnRestrictionDto
    {
        return $this->restrictions;
    }
    /**
     * @param ColumnRestrictionDto $restrictions
     *
     * @return self
     */
    public function setRestrictions(ColumnRestrictionDto $restrictions): self
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