<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class SimpleAttributeDefinitionRequest implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    protected $charset;
    /**
     * @var string|null
     */
    protected $contentType;
    /**
     * @var bool|null
     */
    protected $contextAware;
    /**
     * @var string|null
     */
    protected $dataType;
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
     * @var RestrictionsDto|null
     */
    protected $restrictions;
    /**
     * @var string|null
     */
    protected $unit;
    /**
     * @return string|null
     */
    public function getCharset(): ?string
    {
        return $this->charset;
    }
    /**
     * @param string|null $charset
     *
     * @return self
     */
    public function setCharset(?string $charset): self
    {
        $this->initialized['charset'] = true;
        $this->charset = $charset;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getContentType(): ?string
    {
        return $this->contentType;
    }
    /**
     * @param string|null $contentType
     *
     * @return self
     */
    public function setContentType(?string $contentType): self
    {
        $this->initialized['contentType'] = true;
        $this->contentType = $contentType;
        return $this;
    }
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
    public function getDataType(): ?string
    {
        return $this->dataType;
    }
    /**
     * @param string|null $dataType
     *
     * @return self
     */
    public function setDataType(?string $dataType): self
    {
        $this->initialized['dataType'] = true;
        $this->dataType = $dataType;
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
     * @return RestrictionsDto|null
     */
    public function getRestrictions(): ?RestrictionsDto
    {
        return $this->restrictions;
    }
    /**
     * @param RestrictionsDto|null $restrictions
     *
     * @return self
     */
    public function setRestrictions(?RestrictionsDto $restrictions): self
    {
        $this->initialized['restrictions'] = true;
        $this->restrictions = $restrictions;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }
    /**
     * @param string|null $unit
     *
     * @return self
     */
    public function setUnit(?string $unit): self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['charset' => ['charset', 'getCharset', 'setCharset'], 'contentType' => ['contentType', 'getContentType', 'setContentType'], 'contextAware' => ['contextAware', 'getContextAware', 'setContextAware'], 'dataType' => ['dataType', 'getDataType', 'setDataType'], 'description' => ['description', 'getDescription', 'setDescription'], 'externalSource' => ['externalSource', 'getExternalSource', 'setExternalSource'], 'groupId' => ['groupId', 'getGroupId', 'setGroupId'], 'internal' => ['internal', 'getInternal', 'setInternal'], 'name' => ['name', 'getName', 'setName'], 'number' => ['number', 'getNumber', 'setNumber'], 'restrictions' => ['restrictions', 'getRestrictions', 'setRestrictions'], 'unit' => ['unit', 'getUnit', 'setUnit']];
    }
}