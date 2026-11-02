<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class MediabankAssetsParamsDescriptionParams implements AdditionalPropertiesInterface
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
    protected $description;
    /**
     * @var string|null
     */
    protected $descriptionMatch;
    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getDescriptionMatch(): ?string
    {
        return $this->descriptionMatch;
    }
    /**
     * @param string|null $descriptionMatch
     *
     * @return self
     */
    public function setDescriptionMatch(?string $descriptionMatch): self
    {
        $this->initialized['descriptionMatch'] = true;
        $this->descriptionMatch = $descriptionMatch;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['description' => ['description', 'getDescription', 'setDescription'], 'descriptionMatch' => ['descriptionMatch', 'getDescriptionMatch', 'setDescriptionMatch']];
    }
}