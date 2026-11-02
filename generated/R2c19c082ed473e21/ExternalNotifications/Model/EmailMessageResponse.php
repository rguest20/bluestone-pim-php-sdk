<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\ExternalNotifications\Runtime\AdditionalPropertiesInterface;
class EmailMessageResponse implements AdditionalPropertiesInterface
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
    protected $content;
    /**
     * @var string
     */
    protected $contentType;
    /**
     * @var int
     */
    protected $createDate;
    /**
     * @var string
     */
    protected $deliveryStatus;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var list<EmailRecipient>
     */
    protected $recipient;
    /**
     * @var string
     */
    protected $subject;
    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    /**
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }
    /**
     * @param string $contentType
     *
     * @return self
     */
    public function setContentType(string $contentType): self
    {
        $this->initialized['contentType'] = true;
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * @return int
     */
    public function getCreateDate(): int
    {
        return $this->createDate;
    }
    /**
     * @param int $createDate
     *
     * @return self
     */
    public function setCreateDate(int $createDate): self
    {
        $this->initialized['createDate'] = true;
        $this->createDate = $createDate;
        return $this;
    }
    /**
     * @return string
     */
    public function getDeliveryStatus(): string
    {
        return $this->deliveryStatus;
    }
    /**
     * @param string $deliveryStatus
     *
     * @return self
     */
    public function setDeliveryStatus(string $deliveryStatus): self
    {
        $this->initialized['deliveryStatus'] = true;
        $this->deliveryStatus = $deliveryStatus;
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
     * @return list<EmailRecipient>
     */
    public function getRecipient(): array
    {
        return $this->recipient;
    }
    /**
     * @param list<EmailRecipient> $recipient
     *
     * @return self
     */
    public function setRecipient(array $recipient): self
    {
        $this->initialized['recipient'] = true;
        $this->recipient = $recipient;
        return $this;
    }
    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }
    /**
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['content' => ['content', 'getContent', 'setContent'], 'contentType' => ['contentType', 'getContentType', 'setContentType'], 'createDate' => ['createDate', 'getCreateDate', 'setCreateDate'], 'deliveryStatus' => ['deliveryStatus', 'getDeliveryStatus', 'setDeliveryStatus'], 'id' => ['id', 'getId', 'setId'], 'recipient' => ['recipient', 'getRecipient', 'setRecipient'], 'subject' => ['subject', 'getSubject', 'setSubject']];
    }
}