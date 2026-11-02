<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ProductConnectionResponse implements AdditionalPropertiesInterface
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
     * @var ProductConnectionMetadata
     */
    protected $leftProduct;
    /**
     * @var RelationResponse
     */
    protected $relation;
    /**
     * @var ProductConnectionMetadata
     */
    protected $rightProduct;
    /**
     * @return ProductConnectionMetadata
     */
    public function getLeftProduct(): ProductConnectionMetadata
    {
        return $this->leftProduct;
    }
    /**
     * @param ProductConnectionMetadata $leftProduct
     *
     * @return self
     */
    public function setLeftProduct(ProductConnectionMetadata $leftProduct): self
    {
        $this->initialized['leftProduct'] = true;
        $this->leftProduct = $leftProduct;
        return $this;
    }
    /**
     * @return RelationResponse
     */
    public function getRelation(): RelationResponse
    {
        return $this->relation;
    }
    /**
     * @param RelationResponse $relation
     *
     * @return self
     */
    public function setRelation(RelationResponse $relation): self
    {
        $this->initialized['relation'] = true;
        $this->relation = $relation;
        return $this;
    }
    /**
     * @return ProductConnectionMetadata
     */
    public function getRightProduct(): ProductConnectionMetadata
    {
        return $this->rightProduct;
    }
    /**
     * @param ProductConnectionMetadata $rightProduct
     *
     * @return self
     */
    public function setRightProduct(ProductConnectionMetadata $rightProduct): self
    {
        $this->initialized['rightProduct'] = true;
        $this->rightProduct = $rightProduct;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['leftProduct' => ['leftProduct', 'getLeftProduct', 'setLeftProduct'], 'relation' => ['relation', 'getRelation', 'setRelation'], 'rightProduct' => ['rightProduct', 'getRightProduct', 'setRightProduct']];
    }
}