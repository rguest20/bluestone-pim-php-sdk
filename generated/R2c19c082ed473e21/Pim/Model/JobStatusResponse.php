<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class JobStatusResponse implements AdditionalPropertiesInterface
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
     * Count of items processed in the job.
     *
     * @var int
     */
    protected $count;
    /**
     * Error message returned if the job fails.
     *
     * @var string
     */
    protected $errorMessage;
    /**
     * Status of the job.
     * 
     * **Examples**:
     * - `"WAITING"`
     * - `"COMPLETED"`
     *
     * @var string
     */
    protected $status;
    /**
     * Count of items processed in the job.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Count of items processed in the job.
     *
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
     * Error message returned if the job fails.
     *
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }
    /**
     * Error message returned if the job fails.
     *
     * @param string $errorMessage
     *
     * @return self
     */
    public function setErrorMessage(string $errorMessage): self
    {
        $this->initialized['errorMessage'] = true;
        $this->errorMessage = $errorMessage;
        return $this;
    }
    /**
     * Status of the job.
     * 
     * **Examples**:
     * - `"WAITING"`
     * - `"COMPLETED"`
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
    * Status of the job.
    
    **Examples**:
    - `"WAITING"`
    - `"COMPLETED"`
    *
    * @param string $status
    *
    * @return self
    */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['count' => ['count', 'getCount', 'setCount'], 'errorMessage' => ['errorMessage', 'getErrorMessage', 'setErrorMessage'], 'status' => ['status', 'getStatus', 'setStatus']];
    }
}