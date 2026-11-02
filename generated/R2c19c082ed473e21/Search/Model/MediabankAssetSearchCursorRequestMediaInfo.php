<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class MediabankAssetSearchCursorRequestMediaInfo implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    protected $mediaType;
    /**
     * @var list<string>|null
     */
    protected $mediaTypes;
    /**
     * @var string|null
     */
    protected $dimensionsCondition;
    /**
     * @var string|null
     */
    protected $fileMinimumSize;
    /**
     * @var string|null
     */
    protected $fileMaximumSize;
    /**
     * @var string|null
     */
    protected $fileExtension;
    /**
     * @return string|null
     */
    public function getMediaType(): ?string
    {
        return $this->mediaType;
    }
    /**
     * @param string|null $mediaType
     *
     * @return self
     */
    public function setMediaType(?string $mediaType): self
    {
        $this->initialized['mediaType'] = true;
        $this->mediaType = $mediaType;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getMediaTypes(): ?array
    {
        return $this->mediaTypes;
    }
    /**
     * @param list<string>|null $mediaTypes
     *
     * @return self
     */
    public function setMediaTypes(?array $mediaTypes): self
    {
        $this->initialized['mediaTypes'] = true;
        $this->mediaTypes = $mediaTypes;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getDimensionsCondition(): ?string
    {
        return $this->dimensionsCondition;
    }
    /**
     * @param string|null $dimensionsCondition
     *
     * @return self
     */
    public function setDimensionsCondition(?string $dimensionsCondition): self
    {
        $this->initialized['dimensionsCondition'] = true;
        $this->dimensionsCondition = $dimensionsCondition;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getFileMinimumSize(): ?string
    {
        return $this->fileMinimumSize;
    }
    /**
     * @param string|null $fileMinimumSize
     *
     * @return self
     */
    public function setFileMinimumSize(?string $fileMinimumSize): self
    {
        $this->initialized['fileMinimumSize'] = true;
        $this->fileMinimumSize = $fileMinimumSize;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getFileMaximumSize(): ?string
    {
        return $this->fileMaximumSize;
    }
    /**
     * @param string|null $fileMaximumSize
     *
     * @return self
     */
    public function setFileMaximumSize(?string $fileMaximumSize): self
    {
        $this->initialized['fileMaximumSize'] = true;
        $this->fileMaximumSize = $fileMaximumSize;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getFileExtension(): ?string
    {
        return $this->fileExtension;
    }
    /**
     * @param string|null $fileExtension
     *
     * @return self
     */
    public function setFileExtension(?string $fileExtension): self
    {
        $this->initialized['fileExtension'] = true;
        $this->fileExtension = $fileExtension;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['mediaType' => ['mediaType', 'getMediaType', 'setMediaType'], 'mediaTypes' => ['mediaTypes', 'getMediaTypes', 'setMediaTypes'], 'dimensionsCondition' => ['dimensionsCondition', 'getDimensionsCondition', 'setDimensionsCondition'], 'fileMinimumSize' => ['fileMinimumSize', 'getFileMinimumSize', 'setFileMinimumSize'], 'fileMaximumSize' => ['fileMaximumSize', 'getFileMaximumSize', 'setFileMaximumSize'], 'fileExtension' => ['fileExtension', 'getFileExtension', 'setFileExtension']];
    }
}