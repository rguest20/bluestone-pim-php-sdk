<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\AdditionalPropertiesInterface;
class EntityPapiError implements AdditionalPropertiesInterface
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
    protected $entityId;
    /**
     * @var float
     */
    protected $status;
    /**
     * @var string
     */
    protected $message;
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
     * @return float
     */
    public function getStatus(): float
    {
        return $this->status;
    }
    /**
     * @param float $status
     *
     * @return self
     */
    public function setStatus(float $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
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
        return ['entityId' => ['entityId', 'getEntityId', 'setEntityId'], 'status' => ['status', 'getStatus', 'setStatus'], 'message' => ['message', 'getMessage', 'setMessage']];
    }
}