<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Labels\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Labels\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Labels\Runtime\AdditionalPropertiesInterface;
class ListableLabelResponse implements AdditionalPropertiesInterface
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
     * @var list<LabelResponse>
     */
    protected $data;
    /**
     * @return list<LabelResponse>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * @param list<LabelResponse> $data
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