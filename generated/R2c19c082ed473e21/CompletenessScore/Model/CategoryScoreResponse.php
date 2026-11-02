<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class CategoryScoreResponse implements AdditionalPropertiesInterface
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
     * @var float|null
     */
    protected $score;
    /**
     * @var string|null
     */
    protected $categoryId;
    /**
     * @var string
     */
    protected $context;
    /**
     * @return float|null
     */
    public function getScore(): ?float
    {
        return $this->score;
    }
    /**
     * @param float|null $score
     *
     * @return self
     */
    public function setScore(?float $score): self
    {
        $this->initialized['score'] = true;
        $this->score = $score;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getCategoryId(): ?string
    {
        return $this->categoryId;
    }
    /**
     * @param string|null $categoryId
     *
     * @return self
     */
    public function setCategoryId(?string $categoryId): self
    {
        $this->initialized['categoryId'] = true;
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * @return string
     */
    public function getContext(): string
    {
        return $this->context;
    }
    /**
     * @param string $context
     *
     * @return self
     */
    public function setContext(string $context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['score' => ['score', 'getScore', 'setScore'], 'categoryId' => ['categoryId', 'getCategoryId', 'setCategoryId'], 'context' => ['context', 'getContext', 'setContext']];
    }
}