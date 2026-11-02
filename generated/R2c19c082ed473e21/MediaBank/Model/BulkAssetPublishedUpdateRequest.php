<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class BulkAssetPublishedUpdateRequest implements AdditionalPropertiesInterface
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
     * @var list<BulkAssetPublishedUpdateRequestData>
     */
    protected $data;
    /**
     * @var bool
     */
    protected $force;
    /**
     * @return list<BulkAssetPublishedUpdateRequestData>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * @param list<BulkAssetPublishedUpdateRequestData> $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * @return bool
     */
    public function getForce(): bool
    {
        return $this->force;
    }
    /**
     * @param bool $force
     *
     * @return self
     */
    public function setForce(bool $force): self
    {
        $this->initialized['force'] = true;
        $this->force = $force;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['data' => ['data', 'getData', 'setData'], 'force' => ['force', 'getForce', 'setForce']];
    }
}