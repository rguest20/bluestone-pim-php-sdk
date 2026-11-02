<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class RelationsFilter implements AdditionalPropertiesInterface
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
    protected $type;
    /**
     * @var string|null
     */
    protected $relationId;
    /**
     * @var list<string>|null
     */
    protected $productIds;
    /**
     * @var bool|null
     */
    protected $reverse;
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getRelationId(): ?string
    {
        return $this->relationId;
    }
    /**
     * @param string|null $relationId
     *
     * @return self
     */
    public function setRelationId(?string $relationId): self
    {
        $this->initialized['relationId'] = true;
        $this->relationId = $relationId;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getProductIds(): ?array
    {
        return $this->productIds;
    }
    /**
     * @param list<string>|null $productIds
     *
     * @return self
     */
    public function setProductIds(?array $productIds): self
    {
        $this->initialized['productIds'] = true;
        $this->productIds = $productIds;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getReverse(): ?bool
    {
        return $this->reverse;
    }
    /**
     * @param bool|null $reverse
     *
     * @return self
     */
    public function setReverse(?bool $reverse): self
    {
        $this->initialized['reverse'] = true;
        $this->reverse = $reverse;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'relationId' => ['relationId', 'getRelationId', 'setRelationId'], 'productIds' => ['productIds', 'getProductIds', 'setProductIds'], 'reverse' => ['reverse', 'getReverse', 'setReverse']];
    }
}