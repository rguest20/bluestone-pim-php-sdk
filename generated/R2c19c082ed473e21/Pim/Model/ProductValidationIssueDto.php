<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ProductValidationIssueDto implements AdditionalPropertiesInterface
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
    protected $categoryId;
    /**
     * @var string|null
     */
    protected $definitionId;
    /**
     * @var string|null
     */
    protected $message;
    /**
     * @var string|null
     */
    protected $missingAttributeDefinitionId;
    /**
     * @var string
     */
    protected $statusCode;
    /**
     * @return string|null
     */
    public function getCategoryId(): ?string
    {
        return $this->categoryId;
    }
    /**
     * @param string|null $categoryId
     *
     * @return self
     */
    public function setCategoryId(?string $categoryId): self
    {
        $this->initialized['categoryId'] = true;
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getDefinitionId(): ?string
    {
        return $this->definitionId;
    }
    /**
     * @param string|null $definitionId
     *
     * @return self
     */
    public function setDefinitionId(?string $definitionId): self
    {
        $this->initialized['definitionId'] = true;
        $this->definitionId = $definitionId;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getMissingAttributeDefinitionId(): ?string
    {
        return $this->missingAttributeDefinitionId;
    }
    /**
     * @param string|null $missingAttributeDefinitionId
     *
     * @return self
     */
    public function setMissingAttributeDefinitionId(?string $missingAttributeDefinitionId): self
    {
        $this->initialized['missingAttributeDefinitionId'] = true;
        $this->missingAttributeDefinitionId = $missingAttributeDefinitionId;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatusCode(): string
    {
        return $this->statusCode;
    }
    /**
     * @param string $statusCode
     *
     * @return self
     */
    public function setStatusCode(string $statusCode): self
    {
        $this->initialized['statusCode'] = true;
        $this->statusCode = $statusCode;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['categoryId' => ['categoryId', 'getCategoryId', 'setCategoryId'], 'definitionId' => ['definitionId', 'getDefinitionId', 'setDefinitionId'], 'message' => ['message', 'getMessage', 'setMessage'], 'missingAttributeDefinitionId' => ['missingAttributeDefinitionId', 'getMissingAttributeDefinitionId', 'setMissingAttributeDefinitionId'], 'statusCode' => ['statusCode', 'getStatusCode', 'setStatusCode']];
    }
}