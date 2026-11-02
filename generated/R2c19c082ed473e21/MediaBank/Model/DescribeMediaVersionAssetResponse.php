<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class DescribeMediaVersionAssetResponse implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $timestamp;
    /**
     * @var string
     */
    protected $fileName;
    /**
     * @var DescribeMediaInfoWorkingAssetResponse
     */
    protected $mediaInfo;
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
    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }
    /**
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName(string $fileName): self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;
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
    public function definedProperties(): array
    {
        return ['timestamp' => ['timestamp', 'getTimestamp', 'setTimestamp'], 'fileName' => ['fileName', 'getFileName', 'setFileName'], 'mediaInfo' => ['mediaInfo', 'getMediaInfo', 'setMediaInfo']];
    }
}