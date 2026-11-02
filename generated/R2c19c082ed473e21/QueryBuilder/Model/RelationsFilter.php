<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class RelationsFilter
{
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
     * @var bool
     */
    protected $reverse;
    /**
     * @var string
     */
    protected $relationId;
    /**
     * @var list<string>
     */
    protected $productIds;
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
     * @return bool
     */
    public function getReverse(): bool
    {
        return $this->reverse;
    }
    /**
     * @param bool $reverse
     *
     * @return self
     */
    public function setReverse(bool $reverse): self
    {
        $this->initialized['reverse'] = true;
        $this->reverse = $reverse;
        return $this;
    }
    /**
     * @return string
     */
    public function getRelationId(): string
    {
        return $this->relationId;
    }
    /**
     * @param string $relationId
     *
     * @return self
     */
    public function setRelationId(string $relationId): self
    {
        $this->initialized['relationId'] = true;
        $this->relationId = $relationId;
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
}