<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class ImageDensityRequirementParams implements AdditionalPropertiesInterface
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
    protected $dpi;
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
    public function getDpi(): int
    {
        return $this->dpi;
    }
    /**
     * @param int $dpi
     *
     * @return self
     */
    public function setDpi(int $dpi): self
    {
        $this->initialized['dpi'] = true;
        $this->dpi = $dpi;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['mediaLabelId' => ['mediaLabelId', 'getMediaLabelId', 'setMediaLabelId'], 'dpi' => ['dpi', 'getDpi', 'setDpi']];
    }
}