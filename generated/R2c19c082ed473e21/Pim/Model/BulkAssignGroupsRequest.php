<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class BulkAssignGroupsRequest implements AdditionalPropertiesInterface
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
    protected $familyVariantId;
    /**
     * @var list<string>
     */
    protected $productIds;
    /**
     * @return string
     */
    public function getFamilyVariantId(): string
    {
        return $this->familyVariantId;
    }
    /**
     * @param string $familyVariantId
     *
     * @return self
     */
    public function setFamilyVariantId(string $familyVariantId): self
    {
        $this->initialized['familyVariantId'] = true;
        $this->familyVariantId = $familyVariantId;
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
        return ['familyVariantId' => ['familyVariantId', 'getFamilyVariantId', 'setFamilyVariantId'], 'productIds' => ['productIds', 'getProductIds', 'setProductIds']];
    }
}