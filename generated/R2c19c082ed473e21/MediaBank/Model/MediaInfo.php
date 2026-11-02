<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class MediaInfo implements AdditionalPropertiesInterface
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
    protected $container;
    /**
     * @var string
     */
    protected $versionId;
    /**
     * @var string
     */
    protected $mediaType;
    /**
     * @var string
     */
    protected $fileKey;
    /**
     * @var string
     */
    protected $contentType;
    /**
     * @var int
     */
    protected $length;
    /**
     * @var int
     */
    protected $height;
    /**
     * @var int
     */
    protected $fileSize;
    /**
     * @var int
     */
    protected $width;
    /**
     * @var int
     */
    protected $xdpi;
    /**
     * @var int
     */
    protected $ydpi;
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
    public function getXdpi(): int
    {
        return $this->xdpi;
    }
    /**
     * @param int $xdpi
     *
     * @return self
     */
    public function setXdpi(int $xdpi): self
    {
        $this->initialized['xdpi'] = true;
        $this->xdpi = $xdpi;
        return $this;
    }
    /**
     * @return int
     */
    public function getYdpi(): int
    {
        return $this->ydpi;
    }
    /**
     * @param int $ydpi
     *
     * @return self
     */
    public function setYdpi(int $ydpi): self
    {
        $this->initialized['ydpi'] = true;
        $this->ydpi = $ydpi;
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
        return ['container' => ['container', 'getContainer', 'setContainer'], 'versionId' => ['versionId', 'getVersionId', 'setVersionId'], 'mediaType' => ['mediaType', 'getMediaType', 'setMediaType'], 'fileKey' => ['fileKey', 'getFileKey', 'setFileKey'], 'contentType' => ['contentType', 'getContentType', 'setContentType'], 'length' => ['length', 'getLength', 'setLength'], 'height' => ['height', 'getHeight', 'setHeight'], 'fileSize' => ['fileSize', 'getFileSize', 'setFileSize'], 'width' => ['width', 'getWidth', 'setWidth'], 'xdpi' => ['xdpi', 'getXdpi', 'setXdpi'], 'ydpi' => ['ydpi', 'getYdpi', 'setYdpi'], 'alphaChannel' => ['alphaChannel', 'getAlphaChannel', 'setAlphaChannel'], 'clippingPath' => ['clippingPath', 'getClippingPath', 'setClippingPath']];
    }
}