<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ProductConnectionRequest implements AdditionalPropertiesInterface
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
     * @var float|null
     */
    protected $quantity;
    /**
     * @var string
     */
    protected $relationId;
    /**
     * @var string
     */
    protected $to;
    /**
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }
    /**
     * @param float|null $quantity
     *
     * @return self
     */
    public function setQuantity(?float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
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
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }
    /**
     * @param string $to
     *
     * @return self
     */
    public function setTo(string $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['quantity' => ['quantity', 'getQuantity', 'setQuantity'], 'relationId' => ['relationId', 'getRelationId', 'setRelationId'], 'to' => ['to', 'getTo', 'setTo']];
    }
}