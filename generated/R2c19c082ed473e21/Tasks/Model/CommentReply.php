<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Tasks\Runtime\AdditionalPropertiesInterface;
class CommentReply implements AdditionalPropertiesInterface
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
    protected $message;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $userId;
    /**
     * @var int
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $parentId;
    /**
     * @var int
     */
    protected $updatedAt;
    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
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
    public function getUserId(): string
    {
        return $this->userId;
    }
    /**
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * @return int
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }
    /**
     * @param int $createdAt
     *
     * @return self
     */
    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getParentId(): string
    {
        return $this->parentId;
    }
    /**
     * @param string $parentId
     *
     * @return self
     */
    public function setParentId(string $parentId): self
    {
        $this->initialized['parentId'] = true;
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * @return int
     */
    public function getUpdatedAt(): int
    {
        return $this->updatedAt;
    }
    /**
     * @param int $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(int $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['message' => ['message', 'getMessage', 'setMessage'], 'id' => ['id', 'getId', 'setId'], 'userId' => ['userId', 'getUserId', 'setUserId'], 'createdAt' => ['createdAt', 'getCreatedAt', 'setCreatedAt'], 'parentId' => ['parentId', 'getParentId', 'setParentId'], 'updatedAt' => ['updatedAt', 'getUpdatedAt', 'setUpdatedAt']];
    }
}