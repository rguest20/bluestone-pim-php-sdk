<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class DescribeUploadAssetResponse implements AdditionalPropertiesInterface
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
     * @var DescribeMediaInfoUploadAssetResponse
     */
    protected $mediaInfo;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $number;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var list<string>
     */
    protected $labels;
    /**
     * @var bool
     */
    protected $internal;
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
     * @return DescribeMediaInfoUploadAssetResponse
     */
    public function getMediaInfo(): DescribeMediaInfoUploadAssetResponse
    {
        return $this->mediaInfo;
    }
    /**
     * @param DescribeMediaInfoUploadAssetResponse $mediaInfo
     *
     * @return self
     */
    public function setMediaInfo(DescribeMediaInfoUploadAssetResponse $mediaInfo): self
    {
        $this->initialized['mediaInfo'] = true;
        $this->mediaInfo = $mediaInfo;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
    /**
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
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
     * @return bool
     */
    public function getInternal(): bool
    {
        return $this->internal;
    }
    /**
     * @param bool $internal
     *
     * @return self
     */
    public function setInternal(bool $internal): self
    {
        $this->initialized['internal'] = true;
        $this->internal = $internal;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'mediaInfo' => ['mediaInfo', 'getMediaInfo', 'setMediaInfo'], 'name' => ['name', 'getName', 'setName'], 'number' => ['number', 'getNumber', 'setNumber'], 'description' => ['description', 'getDescription', 'setDescription'], 'labels' => ['labels', 'getLabels', 'setLabels'], 'internal' => ['internal', 'getInternal', 'setInternal']];
    }
}