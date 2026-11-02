<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class MediabankAssetsParamsLabelsParams implements AdditionalPropertiesInterface
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
     * @var list<string>|null
     */
    protected $labels;
    /**
     * @var string|null
     */
    protected $labelsMatch;
    /**
     * @return list<string>|null
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }
    /**
     * @param list<string>|null $labels
     *
     * @return self
     */
    public function setLabels(?array $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getLabelsMatch(): ?string
    {
        return $this->labelsMatch;
    }
    /**
     * @param string|null $labelsMatch
     *
     * @return self
     */
    public function setLabelsMatch(?string $labelsMatch): self
    {
        $this->initialized['labelsMatch'] = true;
        $this->labelsMatch = $labelsMatch;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['labels' => ['labels', 'getLabels', 'setLabels'], 'labelsMatch' => ['labelsMatch', 'getLabelsMatch', 'setLabelsMatch']];
    }
}