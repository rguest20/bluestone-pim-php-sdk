<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class WorkingAssetCursorResponse implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $cursor;
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
        return ['results' => ['results', 'getResults', 'setResults'], 'cursor' => ['cursor', 'getCursor', 'setCursor']];
    }
}