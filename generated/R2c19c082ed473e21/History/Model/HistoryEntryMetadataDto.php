<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Runtime\AdditionalPropertiesInterface;
class HistoryEntryMetadataDto implements AdditionalPropertiesInterface
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
    protected $value;
    /**
     * @var string|null
     */
    protected $field;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var EntityDto|null
     */
    protected $entity;
    /**
     * @var string|null
     */
    protected $oldValue;
    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getField(): ?string
    {
        return $this->field;
    }
    /**
     * @param string|null $field
     *
     * @return self
     */
    public function setField(?string $field): self
    {
        $this->initialized['field'] = true;
        $this->field = $field;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return EntityDto|null
     */
    public function getEntity(): ?EntityDto
    {
        return $this->entity;
    }
    /**
     * @param EntityDto|null $entity
     *
     * @return self
     */
    public function setEntity(?EntityDto $entity): self
    {
        $this->initialized['entity'] = true;
        $this->entity = $entity;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getOldValue(): ?string
    {
        return $this->oldValue;
    }
    /**
     * @param string|null $oldValue
     *
     * @return self
     */
    public function setOldValue(?string $oldValue): self
    {
        $this->initialized['oldValue'] = true;
        $this->oldValue = $oldValue;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['value' => ['value', 'getValue', 'setValue'], 'field' => ['field', 'getField', 'setField'], 'type' => ['type', 'getType', 'setType'], 'entity' => ['entity', 'getEntity', 'setEntity'], 'oldValue' => ['oldValue', 'getOldValue', 'setOldValue']];
    }
}