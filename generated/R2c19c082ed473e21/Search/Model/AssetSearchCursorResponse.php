<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class AssetSearchCursorResponse implements AdditionalPropertiesInterface
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
     * List of assets, sorted by create date descending.
     *
     * @var list<MatchedAsset>
     */
    protected $data;
    /**
     * Cursor for next page. Null if no more results.
     *
     * @var string|null
     */
    protected $cursor;
    /**
     * List of assets, sorted by create date descending.
     *
     * @return list<MatchedAsset>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * List of assets, sorted by create date descending.
     *
     * @param list<MatchedAsset> $data
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
     * Cursor for next page. Null if no more results.
     *
     * @return string|null
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }
    /**
     * Cursor for next page. Null if no more results.
     *
     * @param string|null $cursor
     *
     * @return self
     */
    public function setCursor(?string $cursor): self
    {
        $this->initialized['cursor'] = true;
        $this->cursor = $cursor;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['data' => ['data', 'getData', 'setData'], 'cursor' => ['cursor', 'getCursor', 'setCursor']];
    }
}