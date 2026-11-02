<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalPropertiesInterface;
class PresentableGridTask implements AdditionalPropertiesInterface
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
    protected $id;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $assignee;
    /**
     * @var string
     */
    protected $assigneeType;
    /**
     * @var string
     */
    protected $context;
    /**
     * @var string
     */
    protected $creator;
    /**
     * @var string
     */
    protected $dueDate;
    /**
     * @var bool
     */
    protected $isPrivate;
    /**
     * @var int
     */
    protected $numberOfProducts;
    /**
     * @var int
     */
    protected $numberOfDoneProducts;
    /**
     * @var bool
     */
    protected $importantForCurrentUser;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
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
     * @return string
     */
    public function getAssignee(): string
    {
        return $this->assignee;
    }
    /**
     * @param string $assignee
     *
     * @return self
     */
    public function setAssignee(string $assignee): self
    {
        $this->initialized['assignee'] = true;
        $this->assignee = $assignee;
        return $this;
    }
    /**
     * @return string
     */
    public function getAssigneeType(): string
    {
        return $this->assigneeType;
    }
    /**
     * @param string $assigneeType
     *
     * @return self
     */
    public function setAssigneeType(string $assigneeType): self
    {
        $this->initialized['assigneeType'] = true;
        $this->assigneeType = $assigneeType;
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
     * @return string
     */
    public function getCreator(): string
    {
        return $this->creator;
    }
    /**
     * @param string $creator
     *
     * @return self
     */
    public function setCreator(string $creator): self
    {
        $this->initialized['creator'] = true;
        $this->creator = $creator;
        return $this;
    }
    /**
     * @return string
     */
    public function getDueDate(): string
    {
        return $this->dueDate;
    }
    /**
     * @param string $dueDate
     *
     * @return self
     */
    public function setDueDate(string $dueDate): self
    {
        $this->initialized['dueDate'] = true;
        $this->dueDate = $dueDate;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsPrivate(): bool
    {
        return $this->isPrivate;
    }
    /**
     * @param bool $isPrivate
     *
     * @return self
     */
    public function setIsPrivate(bool $isPrivate): self
    {
        $this->initialized['isPrivate'] = true;
        $this->isPrivate = $isPrivate;
        return $this;
    }
    /**
     * @return int
     */
    public function getNumberOfProducts(): int
    {
        return $this->numberOfProducts;
    }
    /**
     * @param int $numberOfProducts
     *
     * @return self
     */
    public function setNumberOfProducts(int $numberOfProducts): self
    {
        $this->initialized['numberOfProducts'] = true;
        $this->numberOfProducts = $numberOfProducts;
        return $this;
    }
    /**
     * @return int
     */
    public function getNumberOfDoneProducts(): int
    {
        return $this->numberOfDoneProducts;
    }
    /**
     * @param int $numberOfDoneProducts
     *
     * @return self
     */
    public function setNumberOfDoneProducts(int $numberOfDoneProducts): self
    {
        $this->initialized['numberOfDoneProducts'] = true;
        $this->numberOfDoneProducts = $numberOfDoneProducts;
        return $this;
    }
    /**
     * @return bool
     */
    public function getImportantForCurrentUser(): bool
    {
        return $this->importantForCurrentUser;
    }
    /**
     * @param bool $importantForCurrentUser
     *
     * @return self
     */
    public function setImportantForCurrentUser(bool $importantForCurrentUser): self
    {
        $this->initialized['importantForCurrentUser'] = true;
        $this->importantForCurrentUser = $importantForCurrentUser;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'title' => ['title', 'getTitle', 'setTitle'], 'status' => ['status', 'getStatus', 'setStatus'], 'assignee' => ['assignee', 'getAssignee', 'setAssignee'], 'assigneeType' => ['assigneeType', 'getAssigneeType', 'setAssigneeType'], 'context' => ['context', 'getContext', 'setContext'], 'creator' => ['creator', 'getCreator', 'setCreator'], 'dueDate' => ['dueDate', 'getDueDate', 'setDueDate'], 'isPrivate' => ['isPrivate', 'getIsPrivate', 'setIsPrivate'], 'numberOfProducts' => ['numberOfProducts', 'getNumberOfProducts', 'setNumberOfProducts'], 'numberOfDoneProducts' => ['numberOfDoneProducts', 'getNumberOfDoneProducts', 'setNumberOfDoneProducts'], 'importantForCurrentUser' => ['importantForCurrentUser', 'getImportantForCurrentUser', 'setImportantForCurrentUser']];
    }
}