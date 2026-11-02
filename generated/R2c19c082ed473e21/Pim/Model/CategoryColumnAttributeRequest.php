<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class CategoryColumnAttributeRequest implements AdditionalPropertiesInterface
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
     * Value per column, keyed by the column value ID taken from the attribute definition's restriction. Keys that are
     * not columns of the definition are rejected; columns left out stay empty. The `column` key itself must always be
     * present - send an empty object `{}` to attach the attribute with every column left empty.
     *
     * @var array<string, string>|null
     */
    protected $column;
    /**
     * Value per column, keyed by the column value ID taken from the attribute definition's restriction. Keys that are
     * not columns of the definition are rejected; columns left out stay empty. The `column` key itself must always be
     * present - send an empty object `{}` to attach the attribute with every column left empty.
     *
     * @return array<string, string>|null
     */
    public function getColumn(): ?iterable
    {
        return $this->column;
    }
    /**
    * Value per column, keyed by the column value ID taken from the attribute definition's restriction. Keys that are
    not columns of the definition are rejected; columns left out stay empty. The `column` key itself must always be
    present - send an empty object `{}` to attach the attribute with every column left empty.
    *
    * @param array<string, string>|null $column
    *
    * @return self
    */
    public function setColumn(?iterable $column): self
    {
        $this->initialized['column'] = true;
        $this->column = $column;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['column' => ['column', 'getColumn', 'setColumn']];
    }
}