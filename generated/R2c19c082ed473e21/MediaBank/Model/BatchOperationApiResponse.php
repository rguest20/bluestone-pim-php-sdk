<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class BatchOperationApiResponse implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $operationStatus;
    /**
     * @var string
     */
    protected $entityId;
    /**
     * @var string
     */
    protected $message;
    /**
     * @return string
     */
    public function getOperationStatus(): string
    {
        return $this->operationStatus;
    }
    /**
     * @param string $operationStatus
     *
     * @return self
     */
    public function setOperationStatus(string $operationStatus): self
    {
        $this->initialized['operationStatus'] = true;
        $this->operationStatus = $operationStatus;
        return $this;
    }
    /**
     * @return string
     */
    public function getEntityId(): string
    {
        return $this->entityId;
    }
    /**
     * @param string $entityId
     *
     * @return self
     */
    public function setEntityId(string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['operationStatus' => ['operationStatus', 'getOperationStatus', 'setOperationStatus'], 'entityId' => ['entityId', 'getEntityId', 'setEntityId'], 'message' => ['message', 'getMessage', 'setMessage']];
    }
}