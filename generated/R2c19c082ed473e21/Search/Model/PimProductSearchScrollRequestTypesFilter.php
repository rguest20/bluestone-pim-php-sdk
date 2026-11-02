<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class PimProductSearchScrollRequestTypesFilter implements AdditionalPropertiesInterface
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
    protected $productTypes;
    /**
     * @var string
     */
    protected $type;
    /**
     * @return list<string>
     */
    public function getProductTypes(): array
    {
        return $this->productTypes;
    }
    /**
     * @param list<string> $productTypes
     *
     * @return self
     */
    public function setProductTypes(array $productTypes): self
    {
        $this->initialized['productTypes'] = true;
        $this->productTypes = $productTypes;
        return $this;
    }
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['productTypes' => ['productTypes', 'getProductTypes', 'setProductTypes'], 'type' => ['type', 'getType', 'setType']];
    }
}