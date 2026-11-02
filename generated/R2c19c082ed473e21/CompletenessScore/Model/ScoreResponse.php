<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class ScoreResponse implements AdditionalPropertiesInterface
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
    protected $entityId;
    /**
     * @var float|null
     */
    protected $score;
    /**
     * @var string
     */
    protected $context;
    /**
     * @var int
     */
    protected $date;
    /**
     * @var string|null
     */
    protected $sourceEventId;
    /**
     * @var string|null
     */
    protected $validationStatus;
    /**
     * @var int|null
     */
    protected $entityLastUpdate;
    /**
     * @return string
     */
    public function getEntityId(): string
    {
        return $this->entityId;
    }
    /**
     * @param string $entityId
     *
     * @return self
     */
    public function setEntityId(string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
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
    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }
    /**
     * @param int $date
     *
     * @return self
     */
    public function setDate(int $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getSourceEventId(): ?string
    {
        return $this->sourceEventId;
    }
    /**
     * @param string|null $sourceEventId
     *
     * @return self
     */
    public function setSourceEventId(?string $sourceEventId): self
    {
        $this->initialized['sourceEventId'] = true;
        $this->sourceEventId = $sourceEventId;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getValidationStatus(): ?string
    {
        return $this->validationStatus;
    }
    /**
     * @param string|null $validationStatus
     *
     * @return self
     */
    public function setValidationStatus(?string $validationStatus): self
    {
        $this->initialized['validationStatus'] = true;
        $this->validationStatus = $validationStatus;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getEntityLastUpdate(): ?int
    {
        return $this->entityLastUpdate;
    }
    /**
     * @param int|null $entityLastUpdate
     *
     * @return self
     */
    public function setEntityLastUpdate(?int $entityLastUpdate): self
    {
        $this->initialized['entityLastUpdate'] = true;
        $this->entityLastUpdate = $entityLastUpdate;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['entityId' => ['entityId', 'getEntityId', 'setEntityId'], 'score' => ['score', 'getScore', 'setScore'], 'context' => ['context', 'getContext', 'setContext'], 'date' => ['date', 'getDate', 'setDate'], 'sourceEventId' => ['sourceEventId', 'getSourceEventId', 'setSourceEventId'], 'validationStatus' => ['validationStatus', 'getValidationStatus', 'setValidationStatus'], 'entityLastUpdate' => ['entityLastUpdate', 'getEntityLastUpdate', 'setEntityLastUpdate']];
    }
}