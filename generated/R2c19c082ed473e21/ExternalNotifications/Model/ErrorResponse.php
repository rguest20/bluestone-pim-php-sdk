<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalPropertiesInterface;
class ErrorResponse implements AdditionalPropertiesInterface
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
     * @var list<ConflictingEntity>
     */
    protected $conflictingEntities;
    /**
     * @var string
     */
    protected $error;
    /**
     * @var list<ErrorDetails>
     */
    protected $errorDetails;
    /**
     * @var list<LimitExceededDetails>
     */
    protected $quotaLimitExceededDetails;
    /**
     * @var string
     */
    protected $requestId;
    /**
     * @var int
     */
    protected $status;
    /**
     * @var int
     */
    protected $timestamp;
    /**
     * @return list<ConflictingEntity>
     */
    public function getConflictingEntities(): array
    {
        return $this->conflictingEntities;
    }
    /**
     * @param list<ConflictingEntity> $conflictingEntities
     *
     * @return self
     */
    public function setConflictingEntities(array $conflictingEntities): self
    {
        $this->initialized['conflictingEntities'] = true;
        $this->conflictingEntities = $conflictingEntities;
        return $this;
    }
    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }
    /**
     * @param string $error
     *
     * @return self
     */
    public function setError(string $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
    /**
     * @return list<ErrorDetails>
     */
    public function getErrorDetails(): array
    {
        return $this->errorDetails;
    }
    /**
     * @param list<ErrorDetails> $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(array $errorDetails): self
    {
        $this->initialized['errorDetails'] = true;
        $this->errorDetails = $errorDetails;
        return $this;
    }
    /**
     * @return list<LimitExceededDetails>
     */
    public function getQuotaLimitExceededDetails(): array
    {
        return $this->quotaLimitExceededDetails;
    }
    /**
     * @param list<LimitExceededDetails> $quotaLimitExceededDetails
     *
     * @return self
     */
    public function setQuotaLimitExceededDetails(array $quotaLimitExceededDetails): self
    {
        $this->initialized['quotaLimitExceededDetails'] = true;
        $this->quotaLimitExceededDetails = $quotaLimitExceededDetails;
        return $this;
    }
    /**
     * @return string
     */
    public function getRequestId(): string
    {
        return $this->requestId;
    }
    /**
     * @param string $requestId
     *
     * @return self
     */
    public function setRequestId(string $requestId): self
    {
        $this->initialized['requestId'] = true;
        $this->requestId = $requestId;
        return $this;
    }
    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }
    /**
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }
    /**
     * @param int $timestamp
     *
     * @return self
     */
    public function setTimestamp(int $timestamp): self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['conflictingEntities' => ['conflictingEntities', 'getConflictingEntities', 'setConflictingEntities'], 'error' => ['error', 'getError', 'setError'], 'errorDetails' => ['errorDetails', 'getErrorDetails', 'setErrorDetails'], 'quotaLimitExceededDetails' => ['quotaLimitExceededDetails', 'getQuotaLimitExceededDetails', 'setQuotaLimitExceededDetails'], 'requestId' => ['requestId', 'getRequestId', 'setRequestId'], 'status' => ['status', 'getStatus', 'setStatus'], 'timestamp' => ['timestamp', 'getTimestamp', 'setTimestamp']];
    }
}