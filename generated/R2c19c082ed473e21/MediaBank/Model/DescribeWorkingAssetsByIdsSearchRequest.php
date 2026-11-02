<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class DescribeWorkingAssetsByIdsSearchRequest implements AdditionalPropertiesInterface
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
    protected $assetIds;
    /**
     * @var string
     */
    protected $order;
    /**
     * @var int
     */
    protected $page;
    /**
     * @var int
     */
    protected $resultsPerPage;
    /**
     * @return list<string>
     */
    public function getAssetIds(): array
    {
        return $this->assetIds;
    }
    /**
     * @param list<string> $assetIds
     *
     * @return self
     */
    public function setAssetIds(array $assetIds): self
    {
        $this->initialized['assetIds'] = true;
        $this->assetIds = $assetIds;
        return $this;
    }
    /**
     * @return string
     */
    public function getOrder(): string
    {
        return $this->order;
    }
    /**
     * @param string $order
     *
     * @return self
     */
    public function setOrder(string $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
    /**
     * @param int $page
     *
     * @return self
     */
    public function setPage(int $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
    /**
     * @return int
     */
    public function getResultsPerPage(): int
    {
        return $this->resultsPerPage;
    }
    /**
     * @param int $resultsPerPage
     *
     * @return self
     */
    public function setResultsPerPage(int $resultsPerPage): self
    {
        $this->initialized['resultsPerPage'] = true;
        $this->resultsPerPage = $resultsPerPage;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['assetIds' => ['assetIds', 'getAssetIds', 'setAssetIds'], 'order' => ['order', 'getOrder', 'setOrder'], 'page' => ['page', 'getPage', 'setPage'], 'resultsPerPage' => ['resultsPerPage', 'getResultsPerPage', 'setResultsPerPage']];
    }
}