<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class DescribeMediaInfoWorkingAssetResponse implements AdditionalPropertiesInterface
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
    protected $mediaType;
    /**
     * @var string
     */
    protected $contentType;
    /**
     * @var string
     */
    protected $fileKey;
    /**
     * @var string
     */
    protected $versionId;
    /**
     * @var string
     */
    protected $container;
    /**
     * @var int
     */
    protected $fileSize;
    /**
     * @var int
     */
    protected $height;
    /**
     * @var int
     */
    protected $width;
    /**
     * @var int
     */
    protected $xDpi;
    /**
     * @var int
     */
    protected $yDpi;
    /**
     * @var int
     */
    protected $length;
    /**
     * @var bool
     */
    protected $alphaChannel;
    /**
     * @var bool
     */
    protected $clippingPath;
    /**
     * @return string
     */
    public function getMediaType(): string
    {
        return $this->mediaType;
    }
    /**
     * @param string $mediaType
     *
     * @return self
     */
    public function setMediaType(string $mediaType): self
    {
        $this->initialized['mediaType'] = true;
        $this->mediaType = $mediaType;
        return $this;
    }
    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }
    /**
     * @param string $contentType
     *
     * @return self
     */
    public function setContentType(string $contentType): self
    {
        $this->initialized['contentType'] = true;
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * @return string
     */
    public function getFileKey(): string
    {
        return $this->fileKey;
    }
    /**
     * @param string $fileKey
     *
     * @return self
     */
    public function setFileKey(string $fileKey): self
    {
        $this->initialized['fileKey'] = true;
        $this->fileKey = $fileKey;
        return $this;
    }
    /**
     * @return string
     */
    public function getVersionId(): string
    {
        return $this->versionId;
    }
    /**
     * @param string $versionId
     *
     * @return self
     */
    public function setVersionId(string $versionId): self
    {
        $this->initialized['versionId'] = true;
        $this->versionId = $versionId;
        return $this;
    }
    /**
     * @return string
     */
    public function getContainer(): string
    {
        return $this->container;
    }
    /**
     * @param string $container
     *
     * @return self
     */
    public function setContainer(string $container): self
    {
        $this->initialized['container'] = true;
        $this->container = $container;
        return $this;
    }
    /**
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->fileSize;
    }
    /**
     * @param int $fileSize
     *
     * @return self
     */
    public function setFileSize(int $fileSize): self
    {
        $this->initialized['fileSize'] = true;
        $this->fileSize = $fileSize;
        return $this;
    }
    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }
    /**
     * @param int $height
     *
     * @return self
     */
    public function setHeight(int $height): self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }
    /**
     * @param int $width
     *
     * @return self
     */
    public function setWidth(int $width): self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
    /**
     * @return int
     */
    public function getXDpi(): int
    {
        return $this->xDpi;
    }
    /**
     * @param int $xDpi
     *
     * @return self
     */
    public function setXDpi(int $xDpi): self
    {
        $this->initialized['xDpi'] = true;
        $this->xDpi = $xDpi;
        return $this;
    }
    /**
     * @return int
     */
    public function getYDpi(): int
    {
        return $this->yDpi;
    }
    /**
     * @param int $yDpi
     *
     * @return self
     */
    public function setYDpi(int $yDpi): self
    {
        $this->initialized['yDpi'] = true;
        $this->yDpi = $yDpi;
        return $this;
    }
    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }
    /**
     * @param int $length
     *
     * @return self
     */
    public function setLength(int $length): self
    {
        $this->initialized['length'] = true;
        $this->length = $length;
        return $this;
    }
    /**
     * @return bool
     */
    public function getAlphaChannel(): bool
    {
        return $this->alphaChannel;
    }
    /**
     * @param bool $alphaChannel
     *
     * @return self
     */
    public function setAlphaChannel(bool $alphaChannel): self
    {
        $this->initialized['alphaChannel'] = true;
        $this->alphaChannel = $alphaChannel;
        return $this;
    }
    /**
     * @return bool
     */
    public function getClippingPath(): bool
    {
        return $this->clippingPath;
    }
    /**
     * @param bool $clippingPath
     *
     * @return self
     */
    public function setClippingPath(bool $clippingPath): self
    {
        $this->initialized['clippingPath'] = true;
        $this->clippingPath = $clippingPath;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['mediaType' => ['mediaType', 'getMediaType', 'setMediaType'], 'contentType' => ['contentType', 'getContentType', 'setContentType'], 'fileKey' => ['fileKey', 'getFileKey', 'setFileKey'], 'versionId' => ['versionId', 'getVersionId', 'setVersionId'], 'container' => ['container', 'getContainer', 'setContainer'], 'fileSize' => ['fileSize', 'getFileSize', 'setFileSize'], 'height' => ['height', 'getHeight', 'setHeight'], 'width' => ['width', 'getWidth', 'setWidth'], 'xDpi' => ['xDpi', 'getXDpi', 'setXDpi'], 'yDpi' => ['yDpi', 'getYDpi', 'setYDpi'], 'length' => ['length', 'getLength', 'setLength'], 'alphaChannel' => ['alphaChannel', 'getAlphaChannel', 'setAlphaChannel'], 'clippingPath' => ['clippingPath', 'getClippingPath', 'setClippingPath']];
    }
}