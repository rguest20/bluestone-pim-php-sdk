<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

class SetAdditionalPropertiesRequest
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var SetAdditionalPropertiesRequestAdditionalProperties
     */
    protected $additionalProperties;
    /**
     * @return SetAdditionalPropertiesRequestAdditionalProperties
     */
    public function getAdditionalProperties(): SetAdditionalPropertiesRequestAdditionalProperties
    {
        return $this->additionalProperties;
    }
    /**
     * @param SetAdditionalPropertiesRequestAdditionalProperties $additionalProperties
     *
     * @return self
     */
    public function setAdditionalProperties(SetAdditionalPropertiesRequestAdditionalProperties $additionalProperties): self
    {
        $this->initialized['additionalProperties'] = true;
        $this->additionalProperties = $additionalProperties;
        return $this;
    }
}