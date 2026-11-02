<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class ProductsScrollSearchResponse
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
     * @var list<ProductsScrollSearchResponseDataItem>
     */
    protected $data;
    /**
     * @var string
     */
    protected $scrollId;
    /**
     * @return list<ProductsScrollSearchResponseDataItem>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * @param list<ProductsScrollSearchResponseDataItem> $data
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
     * @return string
     */
    public function getScrollId(): string
    {
        return $this->scrollId;
    }
    /**
     * @param string $scrollId
     *
     * @return self
     */
    public function setScrollId(string $scrollId): self
    {
        $this->initialized['scrollId'] = true;
        $this->scrollId = $scrollId;
        return $this;
    }
}