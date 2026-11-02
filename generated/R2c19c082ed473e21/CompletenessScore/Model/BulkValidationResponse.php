<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class BulkValidationResponse implements AdditionalPropertiesInterface
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
    protected $entityId;
    /**
     * @var list<ProductValidationIssuesResponse>
     */
    protected $validations;
    /**
     * @return string
     */
    public function getEntityId(): string
    {
        return $this->entityId;
    }
    /**
     * @param string $entityId
     *
     * @return self
     */
    public function setEntityId(string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * @return list<ProductValidationIssuesResponse>
     */
    public function getValidations(): array
    {
        return $this->validations;
    }
    /**
     * @param list<ProductValidationIssuesResponse> $validations
     *
     * @return self
     */
    public function setValidations(array $validations): self
    {
        $this->initialized['validations'] = true;
        $this->validations = $validations;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['entityId' => ['entityId', 'getEntityId', 'setEntityId'], 'validations' => ['validations', 'getValidations', 'setValidations']];
    }
}