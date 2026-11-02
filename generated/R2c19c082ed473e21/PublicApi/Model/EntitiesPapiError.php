<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Runtime\AdditionalPropertiesInterface;
class EntitiesPapiError implements AdditionalPropertiesInterface
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
    protected $entityIds;
    /**
     * @var float
     */
    protected $status;
    /**
     * @var string
     */
    protected $message;
    /**
     * @return list<string>
     */
    public function getEntityIds(): array
    {
        return $this->entityIds;
    }
    /**
     * @param list<string> $entityIds
     *
     * @return self
     */
    public function setEntityIds(array $entityIds): self
    {
        $this->initialized['entityIds'] = true;
        $this->entityIds = $entityIds;
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
        return ['entityIds' => ['entityIds', 'getEntityIds', 'setEntityIds'], 'status' => ['status', 'getStatus', 'setStatus'], 'message' => ['message', 'getMessage', 'setMessage']];
    }
}