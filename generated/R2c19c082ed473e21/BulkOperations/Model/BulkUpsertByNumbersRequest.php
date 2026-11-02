<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\BulkOperations\Runtime\AdditionalPropertiesInterface;
class BulkUpsertByNumbersRequest implements AdditionalPropertiesInterface
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
     * @var list<UpsertAttributeByNumbersOperation>
     */
    protected $operations;
    /**
     * @return list<UpsertAttributeByNumbersOperation>
     */
    public function getOperations(): array
    {
        return $this->operations;
    }
    /**
     * @param list<UpsertAttributeByNumbersOperation> $operations
     *
     * @return self
     */
    public function setOperations(array $operations): self
    {
        $this->initialized['operations'] = true;
        $this->operations = $operations;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['operations' => ['operations', 'getOperations', 'setOperations']];
    }
}