<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class ScoreFilter
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<float>
     */
    protected $scores;
    /**
     * @var string
     */
    protected $type;
    /**
     * @return list<float>
     */
    public function getScores(): array
    {
        return $this->scores;
    }
    /**
     * @param list<float> $scores
     *
     * @return self
     */
    public function setScores(array $scores): self
    {
        $this->initialized['scores'] = true;
        $this->scores = $scores;
        return $this;
    }
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}