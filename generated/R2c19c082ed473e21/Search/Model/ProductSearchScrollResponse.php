<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class ProductSearchScrollResponse implements AdditionalPropertiesInterface
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
     * @var list<MatchedProduct>
     */
    protected $data;
    /**
     * @var string|null
     */
    protected $scrollId;
    /**
     * @return list<MatchedProduct>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * @param list<MatchedProduct> $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getScrollId(): ?string
    {
        return $this->scrollId;
    }
    /**
     * @param string|null $scrollId
     *
     * @return self
     */
    public function setScrollId(?string $scrollId): self
    {
        $this->initialized['scrollId'] = true;
        $this->scrollId = $scrollId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['data' => ['data', 'getData', 'setData'], 'scrollId' => ['scrollId', 'getScrollId', 'setScrollId']];
    }
}