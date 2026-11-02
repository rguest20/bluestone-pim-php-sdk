<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Runtime\AdditionalPropertiesInterface;
class JobResponse implements AdditionalPropertiesInterface
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
    protected $status;
    /**
     * @var list<BulkJobIssue>|null
     */
    protected $issues;
    /**
     * @var int
     */
    protected $createdDate;
    /**
     * @var int|null
     */
    protected $startedDate;
    /**
     * @var int|null
     */
    protected $finishedDate;
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * @return list<BulkJobIssue>|null
     */
    public function getIssues(): ?array
    {
        return $this->issues;
    }
    /**
     * @param list<BulkJobIssue>|null $issues
     *
     * @return self
     */
    public function setIssues(?array $issues): self
    {
        $this->initialized['issues'] = true;
        $this->issues = $issues;
        return $this;
    }
    /**
     * @return int
     */
    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }
    /**
     * @param int $createdDate
     *
     * @return self
     */
    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getStartedDate(): ?int
    {
        return $this->startedDate;
    }
    /**
     * @param int|null $startedDate
     *
     * @return self
     */
    public function setStartedDate(?int $startedDate): self
    {
        $this->initialized['startedDate'] = true;
        $this->startedDate = $startedDate;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getFinishedDate(): ?int
    {
        return $this->finishedDate;
    }
    /**
     * @param int|null $finishedDate
     *
     * @return self
     */
    public function setFinishedDate(?int $finishedDate): self
    {
        $this->initialized['finishedDate'] = true;
        $this->finishedDate = $finishedDate;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['status' => ['status', 'getStatus', 'setStatus'], 'issues' => ['issues', 'getIssues', 'setIssues'], 'createdDate' => ['createdDate', 'getCreatedDate', 'setCreatedDate'], 'startedDate' => ['startedDate', 'getStartedDate', 'setStartedDate'], 'finishedDate' => ['finishedDate', 'getFinishedDate', 'setFinishedDate']];
    }
}