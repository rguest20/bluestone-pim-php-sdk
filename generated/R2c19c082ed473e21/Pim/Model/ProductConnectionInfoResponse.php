<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class ProductConnectionInfoResponse implements AdditionalPropertiesInterface
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
    protected $directions;
    /**
     * @var string
     */
    protected $id;
    /**
     * @return list<string>
     */
    public function getDirections(): array
    {
        return $this->directions;
    }
    /**
     * @param list<string> $directions
     *
     * @return self
     */
    public function setDirections(array $directions): self
    {
        $this->initialized['directions'] = true;
        $this->directions = $directions;
        return $this;
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['directions' => ['directions', 'getDirections', 'setDirections'], 'id' => ['id', 'getId', 'setId']];
    }
}