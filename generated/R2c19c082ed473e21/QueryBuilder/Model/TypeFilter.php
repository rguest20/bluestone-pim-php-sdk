<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class TypeFilter
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
    protected $groupIds;
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
    public function getGroupIds(): array
    {
        return $this->groupIds;
    }
    /**
     * @param list<string> $groupIds
     *
     * @return self
     */
    public function setGroupIds(array $groupIds): self
    {
        $this->initialized['groupIds'] = true;
        $this->groupIds = $groupIds;
        return $this;
    }
}