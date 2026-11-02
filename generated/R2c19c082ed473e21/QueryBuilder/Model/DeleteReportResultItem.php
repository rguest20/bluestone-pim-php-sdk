<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\QueryBuilder\Runtime\AdditionalPropertiesInterface;
class DeleteReportResultItem implements AdditionalPropertiesInterface
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
     * @var float
     */
    protected $deleteCount;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $name;
    /**
     * @return float
     */
    public function getDeleteCount(): float
    {
        return $this->deleteCount;
    }
    /**
     * @param float $deleteCount
     *
     * @return self
     */
    public function setDeleteCount(float $deleteCount): self
    {
        $this->initialized['deleteCount'] = true;
        $this->deleteCount = $deleteCount;
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
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['deleteCount' => ['deleteCount', 'getDeleteCount', 'setDeleteCount'], 'type' => ['type', 'getType', 'setType'], 'name' => ['name', 'getName', 'setName']];
    }
}