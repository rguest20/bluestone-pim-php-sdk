<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class MatrixRestrictionDto implements AdditionalPropertiesInterface
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
     * @var MatrixRestrictionsDto|null
     */
    protected $matrix;
    /**
     * @return MatrixRestrictionsDto|null
     */
    public function getMatrix(): ?MatrixRestrictionsDto
    {
        return $this->matrix;
    }
    /**
     * @param MatrixRestrictionsDto|null $matrix
     *
     * @return self
     */
    public function setMatrix(?MatrixRestrictionsDto $matrix): self
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