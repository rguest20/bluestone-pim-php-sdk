<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class GroupedAttributeValuesDto implements AdditionalPropertiesInterface
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
     * List of attributes within the specified attribute group.
     *
     * @var list<AttributeValueFull>|null
     */
    protected $attributes;
    /**
     * The internal ID of the attribute group that the listed attributes belongs to.
     *
     * @var string
     */
    protected $groupId;
    /**
     * List of attributes within the specified attribute group.
     *
     * @return list<AttributeValueFull>|null
     */
    public function getAttributes(): ?array
    {
        return $this->attributes;
    }
    /**
     * List of attributes within the specified attribute group.
     *
     * @param list<AttributeValueFull>|null $attributes
     *
     * @return self
     */
    public function setAttributes(?array $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;
        return $this;
    }
    /**
     * The internal ID of the attribute group that the listed attributes belongs to.
     *
     * @return string
     */
    public function getGroupId(): string
    {
        return $this->groupId;
    }
    /**
     * The internal ID of the attribute group that the listed attributes belongs to.
     *
     * @param string $groupId
     *
     * @return self
     */
    public function setGroupId(string $groupId): self
    {
        $this->initialized['groupId'] = true;
        $this->groupId = $groupId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['attributes' => ['attributes', 'getAttributes', 'setAttributes'], 'groupId' => ['groupId', 'getGroupId', 'setGroupId']];
    }
}