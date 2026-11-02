<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class RemoveLabelsFromProductRequest implements AdditionalPropertiesInterface
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
     * @var list<string>
     */
    protected $labelIds;
    /**
     * @return list<string>
     */
    public function getLabelIds(): array
    {
        return $this->labelIds;
    }
    /**
     * @param list<string> $labelIds
     *
     * @return self
     */
    public function setLabelIds(array $labelIds): self
    {
        $this->initialized['labelIds'] = true;
        $this->labelIds = $labelIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['labelIds' => ['labelIds', 'getLabelIds', 'setLabelIds']];
    }
}