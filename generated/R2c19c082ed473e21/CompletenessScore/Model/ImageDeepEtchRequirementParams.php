<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class ImageDeepEtchRequirementParams implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['mediaLabelId' => ['mediaLabelId', 'getMediaLabelId', 'setMediaLabelId']];
    }
}