<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\AdditionalPropertiesInterface;
class ScrollPagingScrolling implements AdditionalPropertiesInterface
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
    protected $scrollId;
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
    public function definedProperties(): array
    {
        return ['scrollId' => ['scrollId', 'getScrollId', 'setScrollId']];
    }
}