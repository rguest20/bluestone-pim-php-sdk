<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class RequirementCreateRequest implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $requirementType;
    /**
     * <p>Subtypes mapping</p><table><tr><th>Requirement type</th><th>Params model</th></tr><tr><td>ATTRIBUTE_HAS_VALUE</td><td>AttributeHasValueRequirementParams</td></tr><tr><td>MINIMUM_MEDIA_WITH_LABEL</td><td>NumberOfMediaWithLabelRequirementParams</td></tr><tr><td>PERCENTAGE_OF_ATTRIBUTES_IN_GROUP_HAVE_VALUE</td><td>AttributesInGroupHaveValuesRequirementParams</td></tr><tr><td>IMAGE_WITH_LABEL_HAS_MINIMUM_RESOLUTION</td><td>ImageResolutionRequirementParams</td></tr><tr><td>PERCENTAGE_OF_ATTRIBUTES_HAVE_VALUE</td><td>AttributePercentageRequirementParams</td></tr><tr><td>MINIMUM_RELATION_CONNECTIONS</td><td>MinimumRelationConnectionsRequirementParams</td></tr><tr><td>IMAGE_WITH_LABEL_HAS_MINIMUM_DENSITY</td><td>ImageDensityRequirementParams</td></tr><tr><td>IMAGE_WITH_LABEL_HAS_DEEP_ETCH</td><td>ImageDeepEtchRequirementParams</td></tr><tr><td>PRODUCT_ADDED_TO_CATEGORY</td><td>ProductAddedToCategoryRequirementParams</td></tr></table>
     *
     * @var array<string, mixed>
     */
    protected $params;
    /**
     * @var float
     */
    protected $weight;
    /**
     * @var list<string>
     */
    protected $includedProductTypes;
    /**
     * @return string
     */
    public function getRequirementType(): string
    {
        return $this->requirementType;
    }
    /**
     * @param string $requirementType
     *
     * @return self
     */
    public function setRequirementType(string $requirementType): self
    {
        $this->initialized['requirementType'] = true;
        $this->requirementType = $requirementType;
        return $this;
    }
    /**
     * <p>Subtypes mapping</p><table><tr><th>Requirement type</th><th>Params model</th></tr><tr><td>ATTRIBUTE_HAS_VALUE</td><td>AttributeHasValueRequirementParams</td></tr><tr><td>MINIMUM_MEDIA_WITH_LABEL</td><td>NumberOfMediaWithLabelRequirementParams</td></tr><tr><td>PERCENTAGE_OF_ATTRIBUTES_IN_GROUP_HAVE_VALUE</td><td>AttributesInGroupHaveValuesRequirementParams</td></tr><tr><td>IMAGE_WITH_LABEL_HAS_MINIMUM_RESOLUTION</td><td>ImageResolutionRequirementParams</td></tr><tr><td>PERCENTAGE_OF_ATTRIBUTES_HAVE_VALUE</td><td>AttributePercentageRequirementParams</td></tr><tr><td>MINIMUM_RELATION_CONNECTIONS</td><td>MinimumRelationConnectionsRequirementParams</td></tr><tr><td>IMAGE_WITH_LABEL_HAS_MINIMUM_DENSITY</td><td>ImageDensityRequirementParams</td></tr><tr><td>IMAGE_WITH_LABEL_HAS_DEEP_ETCH</td><td>ImageDeepEtchRequirementParams</td></tr><tr><td>PRODUCT_ADDED_TO_CATEGORY</td><td>ProductAddedToCategoryRequirementParams</td></tr></table>
     *
     * @return array<string, mixed>
     */
    public function getParams(): iterable
    {
        return $this->params;
    }
    /**
     * <p>Subtypes mapping</p><table><tr><th>Requirement type</th><th>Params model</th></tr><tr><td>ATTRIBUTE_HAS_VALUE</td><td>AttributeHasValueRequirementParams</td></tr><tr><td>MINIMUM_MEDIA_WITH_LABEL</td><td>NumberOfMediaWithLabelRequirementParams</td></tr><tr><td>PERCENTAGE_OF_ATTRIBUTES_IN_GROUP_HAVE_VALUE</td><td>AttributesInGroupHaveValuesRequirementParams</td></tr><tr><td>IMAGE_WITH_LABEL_HAS_MINIMUM_RESOLUTION</td><td>ImageResolutionRequirementParams</td></tr><tr><td>PERCENTAGE_OF_ATTRIBUTES_HAVE_VALUE</td><td>AttributePercentageRequirementParams</td></tr><tr><td>MINIMUM_RELATION_CONNECTIONS</td><td>MinimumRelationConnectionsRequirementParams</td></tr><tr><td>IMAGE_WITH_LABEL_HAS_MINIMUM_DENSITY</td><td>ImageDensityRequirementParams</td></tr><tr><td>IMAGE_WITH_LABEL_HAS_DEEP_ETCH</td><td>ImageDeepEtchRequirementParams</td></tr><tr><td>PRODUCT_ADDED_TO_CATEGORY</td><td>ProductAddedToCategoryRequirementParams</td></tr></table>
     *
     * @param array<string, mixed> $params
     *
     * @return self
     */
    public function setParams(iterable $params): self
    {
        $this->initialized['params'] = true;
        $this->params = $params;
        return $this;
    }
    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }
    /**
     * @param float $weight
     *
     * @return self
     */
    public function setWeight(float $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getIncludedProductTypes(): array
    {
        return $this->includedProductTypes;
    }
    /**
     * @param list<string> $includedProductTypes
     *
     * @return self
     */
    public function setIncludedProductTypes(array $includedProductTypes): self
    {
        $this->initialized['includedProductTypes'] = true;
        $this->includedProductTypes = $includedProductTypes;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['requirementType' => ['requirementType', 'getRequirementType', 'setRequirementType'], 'params' => ['params', 'getParams', 'setParams'], 'weight' => ['weight', 'getWeight', 'setWeight'], 'includedProductTypes' => ['includedProductTypes', 'getIncludedProductTypes', 'setIncludedProductTypes']];
    }
}