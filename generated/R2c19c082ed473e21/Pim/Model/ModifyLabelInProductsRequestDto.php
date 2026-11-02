<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ModifyLabelInProductsRequestDto implements AdditionalPropertiesInterface
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
    protected $labelId;
    /**
     * @var list<string>
     */
    protected $productIds;
    /**
     * @return string
     */
    public function getLabelId(): string
    {
        return $this->labelId;
    }
    /**
     * @param string $labelId
     *
     * @return self
     */
    public function setLabelId(string $labelId): self
    {
        $this->initialized['labelId'] = true;
        $this->labelId = $labelId;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getProductIds(): array
    {
        return $this->productIds;
    }
    /**
     * @param list<string> $productIds
     *
     * @return self
     */
    public function setProductIds(array $productIds): self
    {
        $this->initialized['productIds'] = true;
        $this->productIds = $productIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['labelId' => ['labelId', 'getLabelId', 'setLabelId'], 'productIds' => ['productIds', 'getProductIds', 'setProductIds']];
    }
}