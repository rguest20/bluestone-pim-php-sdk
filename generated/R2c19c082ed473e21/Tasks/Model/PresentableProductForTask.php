<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalPropertiesInterface;
class PresentableProductForTask implements AdditionalPropertiesInterface
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
     * @var bool
     */
    protected $isDone;
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
     * @return bool
     */
    public function getIsDone(): bool
    {
        return $this->isDone;
    }
    /**
     * @param bool $isDone
     *
     * @return self
     */
    public function setIsDone(bool $isDone): self
    {
        $this->initialized['isDone'] = true;
        $this->isDone = $isDone;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['productId' => ['productId', 'getProductId', 'setProductId'], 'isDone' => ['isDone', 'getIsDone', 'setIsDone']];
    }
}