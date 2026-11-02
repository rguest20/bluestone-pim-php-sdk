<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class MatrixAttributeValueDto implements AdditionalPropertiesInterface
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
     * Attribute values for product.
     *
     * @var array<string, array<string, string>>|null
     */
    protected $matrix;
    /**
     * Attribute values for product.
     *
     * @return array<string, array<string, string>>|null
     */
    public function getMatrix(): ?iterable
    {
        return $this->matrix;
    }
    /**
     * Attribute values for product.
     *
     * @param array<string, array<string, string>>|null $matrix
     *
     * @return self
     */
    public function setMatrix(?iterable $matrix): self
    {
        $this->initialized['matrix'] = true;
        $this->matrix = $matrix;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['matrix' => ['matrix', 'getMatrix', 'setMatrix']];
    }
}