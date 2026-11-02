<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class AttributeValidationIssue implements AdditionalPropertiesInterface
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
     * Code representing the type of validation issue. Possible values: `DUPLICATED_SELECT_VALUE` and `NOT_FOUND`
     *
     * @var string
     */
    protected $code;
    /**
     * @var AttributeValidationIssueDetails|null
     */
    protected $details;
    /**
     * Simple text to describe the issue found during validation.
     *
     * @var string
     */
    protected $message;
    /**
     * Code representing the type of validation issue. Possible values: `DUPLICATED_SELECT_VALUE` and `NOT_FOUND`
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Code representing the type of validation issue. Possible values: `DUPLICATED_SELECT_VALUE` and `NOT_FOUND`
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * @return AttributeValidationIssueDetails|null
     */
    public function getDetails(): ?AttributeValidationIssueDetails
    {
        return $this->details;
    }
    /**
     * @param AttributeValidationIssueDetails|null $details
     *
     * @return self
     */
    public function setDetails(?AttributeValidationIssueDetails $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;
        return $this;
    }
    /**
     * Simple text to describe the issue found during validation.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Simple text to describe the issue found during validation.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['code' => ['code', 'getCode', 'setCode'], 'details' => ['details', 'getDetails', 'setDetails'], 'message' => ['message', 'getMessage', 'setMessage']];
    }
}