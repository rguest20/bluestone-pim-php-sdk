<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Runtime\AdditionalPropertiesInterface;
class DeleteMetadataRequest implements AdditionalPropertiesInterface
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
    protected $entityIds;
    /**
     * @return list<string>
     */
    public function getEntityIds(): array
    {
        return $this->entityIds;
    }
    /**
     * @param list<string> $entityIds
     *
     * @return self
     */
    public function setEntityIds(array $entityIds): self
    {
        $this->initialized['entityIds'] = true;
        $this->entityIds = $entityIds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['entityIds' => ['entityIds', 'getEntityIds', 'setEntityIds']];
    }
}