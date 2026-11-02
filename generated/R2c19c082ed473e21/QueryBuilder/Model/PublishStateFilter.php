<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class PublishStateFilter
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
     * @var string
     */
    protected $type;
    /**
     * @var list<string>
     */
    protected $publishStates;
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
    /**
     * @return list<string>
     */
    public function getPublishStates(): array
    {
        return $this->publishStates;
    }
    /**
     * @param list<string> $publishStates
     *
     * @return self
     */
    public function setPublishStates(array $publishStates): self
    {
        $this->initialized['publishStates'] = true;
        $this->publishStates = $publishStates;
        return $this;
    }
}