<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class WorkingAssetsViewsByIdsRequest implements AdditionalPropertiesInterface
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
     * @var list<string>
     */
    protected $ids;
    /**
     * @var list<FilteringViewsDto>
     */
    protected $views;
    /**
     * @return list<string>
     */
    public function getIds(): array
    {
        return $this->ids;
    }
    /**
     * @param list<string> $ids
     *
     * @return self
     */
    public function setIds(array $ids): self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;
        return $this;
    }
    /**
     * @return list<FilteringViewsDto>
     */
    public function getViews(): array
    {
        return $this->views;
    }
    /**
     * @param list<FilteringViewsDto> $views
     *
     * @return self
     */
    public function setViews(array $views): self
    {
        $this->initialized['views'] = true;
        $this->views = $views;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['ids' => ['ids', 'getIds', 'setIds'], 'views' => ['views', 'getViews', 'setViews']];
    }
}