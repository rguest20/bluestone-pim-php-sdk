<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Runtime\AdditionalPropertiesInterface;
class UpsertAttributeByNumbersOperation implements AdditionalPropertiesInterface
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
    protected $productNumber;
    /**
     * @var string
     */
    protected $definitionNumber;
    /**
     * @var string
     */
    protected $contextId;
    /**
     * @var string|null
     */
    protected $value;
    /**
     * @var list<string>|null
     */
    protected $selectValueNumbers;
    /**
     * @var list<string>|null
     */
    protected $dictionaryValueNumbers;
    /**
     * @return string
     */
    public function getProductNumber(): string
    {
        return $this->productNumber;
    }
    /**
     * @param string $productNumber
     *
     * @return self
     */
    public function setProductNumber(string $productNumber): self
    {
        $this->initialized['productNumber'] = true;
        $this->productNumber = $productNumber;
        return $this;
    }
    /**
     * @return string
     */
    public function getDefinitionNumber(): string
    {
        return $this->definitionNumber;
    }
    /**
     * @param string $definitionNumber
     *
     * @return self
     */
    public function setDefinitionNumber(string $definitionNumber): self
    {
        $this->initialized['definitionNumber'] = true;
        $this->definitionNumber = $definitionNumber;
        return $this;
    }
    /**
     * @return string
     */
    public function getContextId(): string
    {
        return $this->contextId;
    }
    /**
     * @param string $contextId
     *
     * @return self
     */
    public function setContextId(string $contextId): self
    {
        $this->initialized['contextId'] = true;
        $this->contextId = $contextId;
        return $this;
    }
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
     * @return list<string>|null
     */
    public function getSelectValueNumbers(): ?array
    {
        return $this->selectValueNumbers;
    }
    /**
     * @param list<string>|null $selectValueNumbers
     *
     * @return self
     */
    public function setSelectValueNumbers(?array $selectValueNumbers): self
    {
        $this->initialized['selectValueNumbers'] = true;
        $this->selectValueNumbers = $selectValueNumbers;
        return $this;
    }
    /**
     * @return list<string>|null
     */
    public function getDictionaryValueNumbers(): ?array
    {
        return $this->dictionaryValueNumbers;
    }
    /**
     * @param list<string>|null $dictionaryValueNumbers
     *
     * @return self
     */
    public function setDictionaryValueNumbers(?array $dictionaryValueNumbers): self
    {
        $this->initialized['dictionaryValueNumbers'] = true;
        $this->dictionaryValueNumbers = $dictionaryValueNumbers;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['productNumber' => ['productNumber', 'getProductNumber', 'setProductNumber'], 'definitionNumber' => ['definitionNumber', 'getDefinitionNumber', 'setDefinitionNumber'], 'contextId' => ['contextId', 'getContextId', 'setContextId'], 'value' => ['value', 'getValue', 'setValue'], 'selectValueNumbers' => ['selectValueNumbers', 'getSelectValueNumbers', 'setSelectValueNumbers'], 'dictionaryValueNumbers' => ['dictionaryValueNumbers', 'getDictionaryValueNumbers', 'setDictionaryValueNumbers']];
    }
}