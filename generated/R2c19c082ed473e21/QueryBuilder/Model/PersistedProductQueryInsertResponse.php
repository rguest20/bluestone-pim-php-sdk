<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class PersistedProductQueryInsertResponse
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
     * @var PersistedProductQueryInsertResponseData
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
     * @return PersistedProductQueryInsertResponseData
     */
    public function getData(): PersistedProductQueryInsertResponseData
    {
        return $this->data;
    }
    /**
     * @param PersistedProductQueryInsertResponseData $data
     *
     * @return self
     */
    public function setData(PersistedProductQueryInsertResponseData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}