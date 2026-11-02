<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\History\Runtime\AdditionalPropertiesInterface;
class ListableHistoryEntryDto implements AdditionalPropertiesInterface
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
     * @var list<HistoryEntryDto>
     */
    protected $data;
    /**
     * @return list<HistoryEntryDto>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * @param list<HistoryEntryDto> $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['data' => ['data', 'getData', 'setData']];
    }
}