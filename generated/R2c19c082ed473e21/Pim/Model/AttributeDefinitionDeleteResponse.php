<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class AttributeDefinitionDeleteResponse implements AdditionalPropertiesInterface
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
     * Number of altered compound attribute definitions.
     *
     * @var int
     */
    protected $numberOfAlteredCompoundAttributeDefinitions;
    /**
     * Number of deleted category level attributes (CLA).
     *
     * @var int
     */
    protected $numberOfDeletedCategoryLevelAttributes;
    /**
     * Number of deleted product attributes.
     *
     * @var int
     */
    protected $numberOfDeletedProductAttributes;
    /**
     * Number of altered compound attribute definitions.
     *
     * @return int
     */
    public function getNumberOfAlteredCompoundAttributeDefinitions(): int
    {
        return $this->numberOfAlteredCompoundAttributeDefinitions;
    }
    /**
     * Number of altered compound attribute definitions.
     *
     * @param int $numberOfAlteredCompoundAttributeDefinitions
     *
     * @return self
     */
    public function setNumberOfAlteredCompoundAttributeDefinitions(int $numberOfAlteredCompoundAttributeDefinitions): self
    {
        $this->initialized['numberOfAlteredCompoundAttributeDefinitions'] = true;
        $this->numberOfAlteredCompoundAttributeDefinitions = $numberOfAlteredCompoundAttributeDefinitions;
        return $this;
    }
    /**
     * Number of deleted category level attributes (CLA).
     *
     * @return int
     */
    public function getNumberOfDeletedCategoryLevelAttributes(): int
    {
        return $this->numberOfDeletedCategoryLevelAttributes;
    }
    /**
     * Number of deleted category level attributes (CLA).
     *
     * @param int $numberOfDeletedCategoryLevelAttributes
     *
     * @return self
     */
    public function setNumberOfDeletedCategoryLevelAttributes(int $numberOfDeletedCategoryLevelAttributes): self
    {
        $this->initialized['numberOfDeletedCategoryLevelAttributes'] = true;
        $this->numberOfDeletedCategoryLevelAttributes = $numberOfDeletedCategoryLevelAttributes;
        return $this;
    }
    /**
     * Number of deleted product attributes.
     *
     * @return int
     */
    public function getNumberOfDeletedProductAttributes(): int
    {
        return $this->numberOfDeletedProductAttributes;
    }
    /**
     * Number of deleted product attributes.
     *
     * @param int $numberOfDeletedProductAttributes
     *
     * @return self
     */
    public function setNumberOfDeletedProductAttributes(int $numberOfDeletedProductAttributes): self
    {
        $this->initialized['numberOfDeletedProductAttributes'] = true;
        $this->numberOfDeletedProductAttributes = $numberOfDeletedProductAttributes;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['numberOfAlteredCompoundAttributeDefinitions' => ['numberOfAlteredCompoundAttributeDefinitions', 'getNumberOfAlteredCompoundAttributeDefinitions', 'setNumberOfAlteredCompoundAttributeDefinitions'], 'numberOfDeletedCategoryLevelAttributes' => ['numberOfDeletedCategoryLevelAttributes', 'getNumberOfDeletedCategoryLevelAttributes', 'setNumberOfDeletedCategoryLevelAttributes'], 'numberOfDeletedProductAttributes' => ['numberOfDeletedProductAttributes', 'getNumberOfDeletedProductAttributes', 'setNumberOfDeletedProductAttributes']];
    }
}