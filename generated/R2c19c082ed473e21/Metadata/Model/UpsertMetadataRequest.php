<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Metadata\Runtime\AdditionalPropertiesInterface;
class UpsertMetadataRequest implements AdditionalPropertiesInterface
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
     * @var list<UpsertMetadataDto>
     */
    protected $data;
    /**
     * @return list<UpsertMetadataDto>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * @param list<UpsertMetadataDto> $data
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