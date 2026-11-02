<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

class DeleteReport
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
     * @var bool
     */
    protected $dryrun;
    /**
     * @var list<DeleteReportResultItem>
     */
    protected $result;
    /**
     * @return bool
     */
    public function getDryrun(): bool
    {
        return $this->dryrun;
    }
    /**
     * @param bool $dryrun
     *
     * @return self
     */
    public function setDryrun(bool $dryrun): self
    {
        $this->initialized['dryrun'] = true;
        $this->dryrun = $dryrun;
        return $this;
    }
    /**
     * @return list<DeleteReportResultItem>
     */
    public function getResult(): array
    {
        return $this->result;
    }
    /**
     * @param list<DeleteReportResultItem> $result
     *
     * @return self
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}