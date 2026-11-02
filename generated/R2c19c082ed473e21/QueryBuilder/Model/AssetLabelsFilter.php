<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class AssetLabelsFilter
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
     * @var list<string>
     */
    protected $labelsIds;
    /**
     * @var string
     */
    protected $type;
    /**
     * @return list<string>
     */
    public function getLabelsIds(): array
    {
        return $this->labelsIds;
    }
    /**
     * @param list<string> $labelsIds
     *
     * @return self
     */
    public function setLabelsIds(array $labelsIds): self
    {
        $this->initialized['labelsIds'] = true;
        $this->labelsIds = $labelsIds;
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