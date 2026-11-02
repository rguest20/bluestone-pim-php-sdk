<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class BulkAssetPublishedUpdateResponseData implements AdditionalPropertiesInterface
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
    protected $assetId;
    /**
     * @var string
     */
    protected $status;
    /**
     * @return string
     */
    public function getAssetId(): string
    {
        return $this->assetId;
    }
    /**
     * @param string $assetId
     *
     * @return self
     */
    public function setAssetId(string $assetId): self
    {
        $this->initialized['assetId'] = true;
        $this->assetId = $assetId;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
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
        return ['assetId' => ['assetId', 'getAssetId', 'setAssetId'], 'status' => ['status', 'getStatus', 'setStatus']];
    }
}