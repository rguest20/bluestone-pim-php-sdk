<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class ProductAttributeValidationRequest implements AdditionalPropertiesInterface
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
    protected $productId;
    /**
     * @var string
     */
    protected $context;
    /**
     * @var AttributeDto
     */
    protected $attribute;
    /**
     * @return string
     */
    public function getProductId(): string
    {
        return $this->productId;
    }
    /**
     * @param string $productId
     *
     * @return self
     */
    public function setProductId(string $productId): self
    {
        $this->initialized['productId'] = true;
        $this->productId = $productId;
        return $this;
    }
    /**
     * @return string
     */
    public function getContext(): string
    {
        return $this->context;
    }
    /**
     * @param string $context
     *
     * @return self
     */
    public function setContext(string $context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;
        return $this;
    }
    /**
     * @return AttributeDto
     */
    public function getAttribute(): AttributeDto
    {
        return $this->attribute;
    }
    /**
     * @param AttributeDto $attribute
     *
     * @return self
     */
    public function setAttribute(AttributeDto $attribute): self
    {
        $this->initialized['attribute'] = true;
        $this->attribute = $attribute;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['productId' => ['productId', 'getProductId', 'setProductId'], 'context' => ['context', 'getContext', 'setContext'], 'attribute' => ['attribute', 'getAttribute', 'setAttribute']];
    }
}