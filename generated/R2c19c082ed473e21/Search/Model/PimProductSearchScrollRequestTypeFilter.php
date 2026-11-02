<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class PimProductSearchScrollRequestTypeFilter implements AdditionalPropertiesInterface
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
     * @var list<string>|null
     */
    protected $groupIds;
    /**
     * @var list<string>|null
     */
    protected $familyIds;
    /**
     * @var string
     */
    protected $type;
    /**
     * @return list<string>|null
     */
    public function getGroupIds(): ?array
    {
        return $this->groupIds;
    }
    /**
     * @param list<string>|null $groupIds
     *
     * @return self
     */
    public function setGroupIds(?array $groupIds): self
    {
        $this->initialized['groupIds'] = true;
        $this->groupIds = $groupIds;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getFamilyIds(): ?array
    {
        return $this->familyIds;
    }
    /**
     * @param list<string>|null $familyIds
     *
     * @return self
     */
    public function setFamilyIds(?array $familyIds): self
    {
        $this->initialized['familyIds'] = true;
        $this->familyIds = $familyIds;
        return $this;
    }
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['groupIds' => ['groupIds', 'getGroupIds', 'setGroupIds'], 'familyIds' => ['familyIds', 'getFamilyIds', 'setFamilyIds'], 'type' => ['type', 'getType', 'setType']];
    }
}