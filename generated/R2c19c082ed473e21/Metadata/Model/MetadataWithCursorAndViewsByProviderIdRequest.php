<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Runtime\AdditionalPropertiesInterface;
class MetadataWithCursorAndViewsByProviderIdRequest implements AdditionalPropertiesInterface
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
     * @var list<MetadataViewTypeRequest>
     */
    protected $views;
    /**
     * @var int
     */
    protected $count;
    /**
     * @var string
     */
    protected $cursor;
    /**
     * @return list<MetadataViewTypeRequest>
     */
    public function getViews(): array
    {
        return $this->views;
    }
    /**
     * @param list<MetadataViewTypeRequest> $views
     *
     * @return self
     */
    public function setViews(array $views): self
    {
        $this->initialized['views'] = true;
        $this->views = $views;
        return $this;
    }
    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
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
    public function definedProperties(): array
    {
        return ['views' => ['views', 'getViews', 'setViews'], 'count' => ['count', 'getCount', 'setCount'], 'cursor' => ['cursor', 'getCursor', 'setCursor']];
    }
}