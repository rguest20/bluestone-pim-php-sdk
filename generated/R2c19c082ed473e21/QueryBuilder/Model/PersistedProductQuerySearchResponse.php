<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class PersistedProductQuerySearchResponse
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
     * @var list<PersistedProductQuerySearchResponseItem>
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
     * @return list<PersistedProductQuerySearchResponseItem>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * @param list<PersistedProductQuerySearchResponseItem> $data
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