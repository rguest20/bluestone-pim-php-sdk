<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class MatrixRestrictionsDto implements AdditionalPropertiesInterface
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
     * @var list<IdentifiableValueDto>|null
     */
    protected $columns;
    /**
     * @var list<IdentifiableValueDto>|null
     */
    protected $rows;
    /**
     * @return list<IdentifiableValueDto>|null
     */
    public function getColumns(): ?array
    {
        return $this->columns;
    }
    /**
     * @param list<IdentifiableValueDto>|null $columns
     *
     * @return self
     */
    public function setColumns(?array $columns): self
    {
        $this->initialized['columns'] = true;
        $this->columns = $columns;
        return $this;
    }
    /**
     * @return list<IdentifiableValueDto>|null
     */
    public function getRows(): ?array
    {
        return $this->rows;
    }
    /**
     * @param list<IdentifiableValueDto>|null $rows
     *
     * @return self
     */
    public function setRows(?array $rows): self
    {
        $this->initialized['rows'] = true;
        $this->rows = $rows;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['columns' => ['columns', 'getColumns', 'setColumns'], 'rows' => ['rows', 'getRows', 'setRows']];
    }
}