<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class WorkingAssetViewResponse implements AdditionalPropertiesInterface
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
    protected $id;
    /**
     * @var WorkingAssetMetadataDto
     */
    protected $metadata;
    /**
     * @var DescribeMediaInfoWorkingAssetResponse
     */
    protected $mediaInfo;
    /**
     * @var list<string>
     */
    protected $labels;
    /**
     * @var list<AssetAttribute>
     */
    protected $attributes;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return WorkingAssetMetadataDto
     */
    public function getMetadata(): WorkingAssetMetadataDto
    {
        return $this->metadata;
    }
    /**
     * @param WorkingAssetMetadataDto $metadata
     *
     * @return self
     */
    public function setMetadata(WorkingAssetMetadataDto $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * @return DescribeMediaInfoWorkingAssetResponse
     */
    public function getMediaInfo(): DescribeMediaInfoWorkingAssetResponse
    {
        return $this->mediaInfo;
    }
    /**
     * @param DescribeMediaInfoWorkingAssetResponse $mediaInfo
     *
     * @return self
     */
    public function setMediaInfo(DescribeMediaInfoWorkingAssetResponse $mediaInfo): self
    {
        $this->initialized['mediaInfo'] = true;
        $this->mediaInfo = $mediaInfo;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getLabels(): array
    {
        return $this->labels;
    }
    /**
     * @param list<string> $labels
     *
     * @return self
     */
    public function setLabels(array $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * @return list<AssetAttribute>
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }
    /**
     * @param list<AssetAttribute> $attributes
     *
     * @return self
     */
    public function setAttributes(array $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'metadata' => ['metadata', 'getMetadata', 'setMetadata'], 'mediaInfo' => ['mediaInfo', 'getMediaInfo', 'setMediaInfo'], 'labels' => ['labels', 'getLabels', 'setLabels'], 'attributes' => ['attributes', 'getAttributes', 'setAttributes']];
    }
}