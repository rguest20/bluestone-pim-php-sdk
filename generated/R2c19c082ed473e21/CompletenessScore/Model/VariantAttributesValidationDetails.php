<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class VariantAttributesValidationDetails implements AdditionalPropertiesInterface
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
    protected $definitionId;
    /**
     * @var string
     */
    protected $variantParentId;
    /**
     * @return string
     */
    public function getDefinitionId(): string
    {
        return $this->definitionId;
    }
    /**
     * @param string $definitionId
     *
     * @return self
     */
    public function setDefinitionId(string $definitionId): self
    {
        $this->initialized['definitionId'] = true;
        $this->definitionId = $definitionId;
        return $this;
    }
    /**
     * @return string
     */
    public function getVariantParentId(): string
    {
        return $this->variantParentId;
    }
    /**
     * @param string $variantParentId
     *
     * @return self
     */
    public function setVariantParentId(string $variantParentId): self
    {
        $this->initialized['variantParentId'] = true;
        $this->variantParentId = $variantParentId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['definitionId' => ['definitionId', 'getDefinitionId', 'setDefinitionId'], 'variantParentId' => ['variantParentId', 'getVariantParentId', 'setVariantParentId']];
    }
}