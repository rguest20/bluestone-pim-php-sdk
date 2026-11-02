<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Runtime\AdditionalPropertiesInterface;
class HistoryEntryDto implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $language;
    /**
     * @var int|null
     */
    protected $date;
    /**
     * @var list<HistoryEntryMetadataDto>|null
     */
    protected $metadata;
    /**
     * @var string|null
     */
    protected $userId;
    /**
     * @var string|null
     */
    protected $origin;
    /**
     * @var string|null
     */
    protected $eventId;
    /**
     * @var string|null
     */
    protected $organizationId;
    /**
     * @var string|null
     */
    protected $entityType;
    /**
     * @var string|null
     */
    protected $eventType;
    /**
     * @var list<string>|null
     */
    protected $entityIds;
    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * @param string|null $language
     *
     * @return self
     */
    public function setLanguage(?string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getDate(): ?int
    {
        return $this->date;
    }
    /**
     * @param int|null $date
     *
     * @return self
     */
    public function setDate(?int $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * @return list<HistoryEntryMetadataDto>|null
     */
    public function getMetadata(): ?array
    {
        return $this->metadata;
    }
    /**
     * @param list<HistoryEntryMetadataDto>|null $metadata
     *
     * @return self
     */
    public function setMetadata(?array $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }
    /**
     * @param string|null $userId
     *
     * @return self
     */
    public function setUserId(?string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->origin;
    }
    /**
     * @param string|null $origin
     *
     * @return self
     */
    public function setOrigin(?string $origin): self
    {
        $this->initialized['origin'] = true;
        $this->origin = $origin;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getEventId(): ?string
    {
        return $this->eventId;
    }
    /**
     * @param string|null $eventId
     *
     * @return self
     */
    public function setEventId(?string $eventId): self
    {
        $this->initialized['eventId'] = true;
        $this->eventId = $eventId;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getOrganizationId(): ?string
    {
        return $this->organizationId;
    }
    /**
     * @param string|null $organizationId
     *
     * @return self
     */
    public function setOrganizationId(?string $organizationId): self
    {
        $this->initialized['organizationId'] = true;
        $this->organizationId = $organizationId;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getEntityType(): ?string
    {
        return $this->entityType;
    }
    /**
     * @param string|null $entityType
     *
     * @return self
     */
    public function setEntityType(?string $entityType): self
    {
        $this->initialized['entityType'] = true;
        $this->entityType = $entityType;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }
    /**
     * @param string|null $eventType
     *
     * @return self
     */
    public function setEventType(?string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getEntityIds(): ?array
    {
        return $this->entityIds;
    }
    /**
     * @param list<string>|null $entityIds
     *
     * @return self
     */
    public function setEntityIds(?array $entityIds): self
    {
        $this->initialized['entityIds'] = true;
        $this->entityIds = $entityIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'language' => ['language', 'getLanguage', 'setLanguage'], 'date' => ['date', 'getDate', 'setDate'], 'metadata' => ['metadata', 'getMetadata', 'setMetadata'], 'userId' => ['userId', 'getUserId', 'setUserId'], 'origin' => ['origin', 'getOrigin', 'setOrigin'], 'eventId' => ['eventId', 'getEventId', 'setEventId'], 'organizationId' => ['organizationId', 'getOrganizationId', 'setOrganizationId'], 'entityType' => ['entityType', 'getEntityType', 'setEntityType'], 'eventType' => ['eventType', 'getEventType', 'setEventType'], 'entityIds' => ['entityIds', 'getEntityIds', 'setEntityIds']];
    }
}