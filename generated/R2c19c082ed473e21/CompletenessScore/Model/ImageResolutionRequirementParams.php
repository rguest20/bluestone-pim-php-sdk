<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class ImageResolutionRequirementParams implements AdditionalPropertiesInterface
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
    protected $mediaLabelId;
    /**
     * @var int
     */
    protected $width;
    /**
     * @var int
     */
    protected $height;
    /**
     * @return string
     */
    public function getMediaLabelId(): string
    {
        return $this->mediaLabelId;
    }
    /**
     * @param string $mediaLabelId
     *
     * @return self
     */
    public function setMediaLabelId(string $mediaLabelId): self
    {
        $this->initialized['mediaLabelId'] = true;
        $this->mediaLabelId = $mediaLabelId;
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
    public function definedProperties(): array
    {
        return ['mediaLabelId' => ['mediaLabelId', 'getMediaLabelId', 'setMediaLabelId'], 'width' => ['width', 'getWidth', 'setWidth'], 'height' => ['height', 'getHeight', 'setHeight']];
    }
}