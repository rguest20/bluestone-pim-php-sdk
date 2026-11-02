<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\CompletenessScore\Runtime\AdditionalPropertiesInterface;
class DefinitionValueValidationIssuesResponse implements AdditionalPropertiesInterface
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
     * @var array<string, mixed>
     */
    protected $validationDetails;
    /**
     * @return array<string, mixed>
     */
    public function getValidationDetails()
    {
        return $this->validationDetails;
    }
    /**
     * @param array<string, mixed> $validationDetails
     *
     * @return self
     */
    public function setValidationDetails($validationDetails): self
    {
        $this->initialized['validationDetails'] = true;
        $this->validationDetails = $validationDetails;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['validationDetails' => ['validationDetails', 'getValidationDetails', 'setValidationDetails']];
    }
}