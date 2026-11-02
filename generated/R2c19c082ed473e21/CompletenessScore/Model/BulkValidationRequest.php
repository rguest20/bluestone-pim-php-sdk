<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class BulkValidationRequest implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $context;
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
    public function definedProperties(): array
    {
        return ['entityIds' => ['entityIds', 'getEntityIds', 'setEntityIds'], 'context' => ['context', 'getContext', 'setContext']];
    }
}