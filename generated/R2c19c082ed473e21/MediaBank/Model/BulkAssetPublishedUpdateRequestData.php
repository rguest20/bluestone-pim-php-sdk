<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class BulkAssetPublishedUpdateRequestData implements AdditionalPropertiesInterface
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
     * @var bool
     */
    protected $published;
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
     * @return bool
     */
    public function getPublished(): bool
    {
        return $this->published;
    }
    /**
     * @param bool $published
     *
     * @return self
     */
    public function setPublished(bool $published): self
    {
        $this->initialized['published'] = true;
        $this->published = $published;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['assetId' => ['assetId', 'getAssetId', 'setAssetId'], 'published' => ['published', 'getPublished', 'setPublished']];
    }
}