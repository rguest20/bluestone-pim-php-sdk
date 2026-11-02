<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\AdditionalPropertiesInterface;
class AdditionalUserPropertiesGetResponse200 implements AdditionalPropertiesInterface
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
    protected $additionalProperties;
    /**
     * @return list<string>
     */
    public function getAdditionalProperties(): array
    {
        return $this->additionalProperties;
    }
    /**
     * @param list<string> $additionalProperties
     *
     * @return self
     */
    public function setAdditionalProperties(array $additionalProperties): self
    {
        $this->initialized['additionalProperties'] = true;
        $this->additionalProperties = $additionalProperties;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['additionalProperties' => ['additionalProperties', 'getAdditionalProperties', 'setAdditionalProperties']];
    }
}