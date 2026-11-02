<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class CompoundAttributeDefinitionRequest implements AdditionalPropertiesInterface
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
     * **Note**: A `Compound` attribute does not have an editable value since its value is generated dynamically on request, so in the case of `Compound` attributes, this flag only controls whether the editors in Bluestone PIM web application UI are able to add or remove the `Compound` attribute to/from a product.
     *
     * @var bool|null
     */
    protected $externalSource;
    /**
     * Specifies a set of strings that, together with the subattribute values, will be concatenated to form a compound value.
     * 
     * **Example**:
     * Given I have a `Compound` attribute definition with only one subattribute added.
     * 
     * Subattribute value: "RED"
     * 
     * Format contains two strings, the string to use before the value from the subattribute the string to use after the value of the subattribute:
     * ```json
     *  "format": [
     *     "This is the value of my subattribute: '",
     *     "', and this is the end of the compound."
     *   ]
     * ```
     * This would generate this dynamically generated compound attribute value when requested:
     * `This is the value of my subattribute: 'RED', and this is the end of the compound.`
     *
     * @var list<string>|null
     */
    protected $format;
    /**
     * Specifies the group ID to which the attribute definition belongs.
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
     * Specifies the name of the attribute definition.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Specifies the number of the attribute definition.
     *
     * @var string|null
     */
    protected $number;
    /**
     * Specifies the ordered list of subattribute definitions in format: `id`, `compound`.
     *
     * @var list<CompoundAttributeSubDefinitionDto>
     */
    protected $subDefinitions;
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
     * **Note**: A `Compound` attribute does not have an editable value since its value is generated dynamically on request, so in the case of `Compound` attributes, this flag only controls whether the editors in Bluestone PIM web application UI are able to add or remove the `Compound` attribute to/from a product.
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
     **Note**: A `Compound` attribute does not have an editable value since its value is generated dynamically on request, so in the case of `Compound` attributes, this flag only controls whether the editors in Bluestone PIM web application UI are able to add or remove the `Compound` attribute to/from a product.
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
     * Specifies a set of strings that, together with the subattribute values, will be concatenated to form a compound value.
     * 
     * **Example**:
     * Given I have a `Compound` attribute definition with only one subattribute added.
     * 
     * Subattribute value: "RED"
     * 
     * Format contains two strings, the string to use before the value from the subattribute the string to use after the value of the subattribute:
     * ```json
     *  "format": [
     *     "This is the value of my subattribute: '",
     *     "', and this is the end of the compound."
     *   ]
     * ```
     * This would generate this dynamically generated compound attribute value when requested:
     * `This is the value of my subattribute: 'RED', and this is the end of the compound.`
     *
     * @return list<string>|null
     */
    public function getFormat(): ?array
    {
        return $this->format;
    }
    /**
    * Specifies a set of strings that, together with the subattribute values, will be concatenated to form a compound value.
    
    **Example**:
    Given I have a `Compound` attribute definition with only one subattribute added.
    
    Subattribute value: "RED"
    
    Format contains two strings, the string to use before the value from the subattribute the string to use after the value of the subattribute:
    ```json
    "format": [
       "This is the value of my subattribute: '",
       "', and this is the end of the compound."
     ]
    ```
    This would generate this dynamically generated compound attribute value when requested:
    `This is the value of my subattribute: 'RED', and this is the end of the compound.`
    *
    * @param list<string>|null $format
    *
    * @return self
    */
    public function setFormat(?array $format): self
    {
        $this->initialized['format'] = true;
        $this->format = $format;
        return $this;
    }
    /**
     * Specifies the group ID to which the attribute definition belongs.
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
     * Specifies the group ID to which the attribute definition belongs.
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
     * Specifies the name of the attribute definition.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Specifies the name of the attribute definition.
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
     * Specifies the number of the attribute definition.
     *
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }
    /**
     * Specifies the number of the attribute definition.
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
     * Specifies the ordered list of subattribute definitions in format: `id`, `compound`.
     *
     * @return list<CompoundAttributeSubDefinitionDto>
     */
    public function getSubDefinitions(): array
    {
        return $this->subDefinitions;
    }
    /**
     * Specifies the ordered list of subattribute definitions in format: `id`, `compound`.
     *
     * @param list<CompoundAttributeSubDefinitionDto> $subDefinitions
     *
     * @return self
     */
    public function setSubDefinitions(array $subDefinitions): self
    {
        $this->initialized['subDefinitions'] = true;
        $this->subDefinitions = $subDefinitions;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['contextAware' => ['contextAware', 'getContextAware', 'setContextAware'], 'description' => ['description', 'getDescription', 'setDescription'], 'externalSource' => ['externalSource', 'getExternalSource', 'setExternalSource'], 'format' => ['format', 'getFormat', 'setFormat'], 'groupId' => ['groupId', 'getGroupId', 'setGroupId'], 'internal' => ['internal', 'getInternal', 'setInternal'], 'name' => ['name', 'getName', 'setName'], 'number' => ['number', 'getNumber', 'setNumber'], 'subDefinitions' => ['subDefinitions', 'getSubDefinitions', 'setSubDefinitions']];
    }
}