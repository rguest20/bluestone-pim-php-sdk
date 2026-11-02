<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model;

class CursorQuery
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
    protected $cursor;
    /**
     * @var float
     */
    protected $limit = '10';
    /**
     * @return string
     */
    public function getCursor(): string
    {
        return $this->cursor;
    }
    /**
     * @param string $cursor
     *
     * @return self
     */
    public function setCursor(string $cursor): self
    {
        $this->initialized['cursor'] = true;
        $this->cursor = $cursor;
        return $this;
    }
    /**
     * @return float
     */
    public function getLimit(): float
    {
        return $this->limit;
    }
    /**
     * @param float $limit
     *
     * @return self
     */
    public function setLimit(float $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
}