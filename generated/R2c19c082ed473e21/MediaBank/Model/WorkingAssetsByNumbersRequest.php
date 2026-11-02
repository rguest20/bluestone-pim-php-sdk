<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class WorkingAssetsByNumbersRequest implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $page;
    /**
     * @var int
     */
    protected $resultsPerPage;
    /**
     * @var list<string>
     */
    protected $numbers;
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
    /**
     * @return list<string>
     */
    public function getNumbers(): array
    {
        return $this->numbers;
    }
    /**
     * @param list<string> $numbers
     *
     * @return self
     */
    public function setNumbers(array $numbers): self
    {
        $this->initialized['numbers'] = true;
        $this->numbers = $numbers;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['page' => ['page', 'getPage', 'setPage'], 'resultsPerPage' => ['resultsPerPage', 'getResultsPerPage', 'setResultsPerPage'], 'numbers' => ['numbers', 'getNumbers', 'setNumbers']];
    }
}