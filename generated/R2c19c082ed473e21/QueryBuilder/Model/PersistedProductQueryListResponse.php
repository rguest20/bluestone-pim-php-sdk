<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class PersistedProductQueryListResponse
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
     * @var PersistedProductQueryStatusBase
     */
    protected $status;
    /**
     * @var list<PersistedProductQueryListResponseItem>
     */
    protected $data;
    /**
     * @return PersistedProductQueryStatusBase
     */
    public function getStatus(): PersistedProductQueryStatusBase
    {
        return $this->status;
    }
    /**
     * @param PersistedProductQueryStatusBase $status
     *
     * @return self
     */
    public function setStatus(PersistedProductQueryStatusBase $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * @return list<PersistedProductQueryListResponseItem>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * @param list<PersistedProductQueryListResponseItem> $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}