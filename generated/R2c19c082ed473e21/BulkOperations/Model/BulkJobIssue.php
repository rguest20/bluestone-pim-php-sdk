<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Runtime\AdditionalPropertiesInterface;
class BulkJobIssue implements AdditionalPropertiesInterface
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
    protected $index;
    /**
     * @var ErrorResponse
     */
    protected $error;
    /**
     * @return int
     */
    public function getIndex(): int
    {
        return $this->index;
    }
    /**
     * @param int $index
     *
     * @return self
     */
    public function setIndex(int $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;
        return $this;
    }
    /**
     * @return ErrorResponse
     */
    public function getError(): ErrorResponse
    {
        return $this->error;
    }
    /**
     * @param ErrorResponse $error
     *
     * @return self
     */
    public function setError(ErrorResponse $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['index' => ['index', 'getIndex', 'setIndex'], 'error' => ['error', 'getError', 'setError']];
    }
}