<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class WorkingAssetPaginatedResponse implements AdditionalPropertiesInterface
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
     * @var list<WorkingAssetResponse>
     */
    protected $results;
    /**
     * @var int
     */
    protected $currentPage;
    /**
     * @var int
     */
    protected $resultsPerPage;
    /**
     * @return list<WorkingAssetResponse>
     */
    public function getResults(): array
    {
        return $this->results;
    }
    /**
     * @param list<WorkingAssetResponse> $results
     *
     * @return self
     */
    public function setResults(array $results): self
    {
        $this->initialized['results'] = true;
        $this->results = $results;
        return $this;
    }
    /**
     * @return int
     */
    public function getCurrentPage(): int
    {
        return $this->currentPage;
    }
    /**
     * @param int $currentPage
     *
     * @return self
     */
    public function setCurrentPage(int $currentPage): self
    {
        $this->initialized['currentPage'] = true;
        $this->currentPage = $currentPage;
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
        return ['results' => ['results', 'getResults', 'setResults'], 'currentPage' => ['currentPage', 'getCurrentPage', 'setCurrentPage'], 'resultsPerPage' => ['resultsPerPage', 'getResultsPerPage', 'setResultsPerPage']];
    }
}