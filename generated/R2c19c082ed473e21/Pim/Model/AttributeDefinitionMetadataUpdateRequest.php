<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class AttributeDefinitionMetadataUpdateRequest implements AdditionalPropertiesInterface
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
     * @var PropertyUpdateString|null
     */
    protected $description;
    /**
     * Specifies whether the origin of the attribute is managed in an external source like ERP systems and hence should
     * be read-only for the editors in the Bluestone PIM UI. Note that the value still can be modified via the
     * Management API.
     *
     * @var bool|null
     */
    protected $externalSource;
    /**
     * Indicates that the attribute is for internal use only within Bluestone PIM, meaning this value is not visible in
     * the Public API (PAPI) or accessible outside the system; for example, attributes for system configuration or
     * internal categorization.
     *
     * @var bool|null
     */
    protected $internal;
    /**
     * @var PropertyUpdateString|null
     */
    protected $name;
    /**
     * @var PropertyUpdateString|null
     */
    protected $number;
    /**
     * @return PropertyUpdateString|null
     */
    public function getDescription(): ?PropertyUpdateString
    {
        return $this->description;
    }
    /**
     * @param PropertyUpdateString|null $description
     *
     * @return self
     */
    public function setDescription(?PropertyUpdateString $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Specifies whether the origin of the attribute is managed in an external source like ERP systems and hence should
     * be read-only for the editors in the Bluestone PIM UI. Note that the value still can be modified via the
     * Management API.
     *
     * @return bool|null
     */
    public function getExternalSource(): ?bool
    {
        return $this->externalSource;
    }
    /**
    * Specifies whether the origin of the attribute is managed in an external source like ERP systems and hence should
    be read-only for the editors in the Bluestone PIM UI. Note that the value still can be modified via the
    Management API.
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
     * Indicates that the attribute is for internal use only within Bluestone PIM, meaning this value is not visible in
     * the Public API (PAPI) or accessible outside the system; for example, attributes for system configuration or
     * internal categorization.
     *
     * @return bool|null
     */
    public function getInternal(): ?bool
    {
        return $this->internal;
    }
    /**
    * Indicates that the attribute is for internal use only within Bluestone PIM, meaning this value is not visible in
    the Public API (PAPI) or accessible outside the system; for example, attributes for system configuration or
    internal categorization.
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
     * @return PropertyUpdateString|null
     */
    public function getName(): ?PropertyUpdateString
    {
        return $this->name;
    }
    /**
     * @param PropertyUpdateString|null $name
     *
     * @return self
     */
    public function setName(?PropertyUpdateString $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return PropertyUpdateString|null
     */
    public function getNumber(): ?PropertyUpdateString
    {
        return $this->number;
    }
    /**
     * @param PropertyUpdateString|null $number
     *
     * @return self
     */
    public function setNumber(?PropertyUpdateString $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['description' => ['description', 'getDescription', 'setDescription'], 'externalSource' => ['externalSource', 'getExternalSource', 'setExternalSource'], 'internal' => ['internal', 'getInternal', 'setInternal'], 'name' => ['name', 'getName', 'setName'], 'number' => ['number', 'getNumber', 'setNumber']];
    }
}