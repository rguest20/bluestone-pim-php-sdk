<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class CategoryMatrixAttributeRequest implements AdditionalPropertiesInterface
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
     * Value per cell, keyed first by the column value ID and then by the row value ID, both taken from the attribute
     * definition's restriction. IDs that do not belong to the definition are rejected; cells left out stay empty. The
     * `matrix` key itself must always be present - send an empty object `{}` to attach the attribute with every cell
     * left empty.
     *
     * @var array<string, array<string, string>>|null
     */
    protected $matrix;
    /**
     * Value per cell, keyed first by the column value ID and then by the row value ID, both taken from the attribute
     * definition's restriction. IDs that do not belong to the definition are rejected; cells left out stay empty. The
     * `matrix` key itself must always be present - send an empty object `{}` to attach the attribute with every cell
     * left empty.
     *
     * @return array<string, array<string, string>>|null
     */
    public function getMatrix(): ?iterable
    {
        return $this->matrix;
    }
    /**
    * Value per cell, keyed first by the column value ID and then by the row value ID, both taken from the attribute
    definition's restriction. IDs that do not belong to the definition are rejected; cells left out stay empty. The
    `matrix` key itself must always be present - send an empty object `{}` to attach the attribute with every cell
    left empty.
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