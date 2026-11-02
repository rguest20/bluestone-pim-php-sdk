<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class AssetIdsParams implements AdditionalPropertiesInterface
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
     * @var list<string>|null
     */
    protected $ids;
    /**
     * @var string|null
     */
    protected $idsMatch;
    /**
     * @return list<string>|null
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }
    /**
     * @param list<string>|null $ids
     *
     * @return self
     */
    public function setIds(?array $ids): self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getIdsMatch(): ?string
    {
        return $this->idsMatch;
    }
    /**
     * @param string|null $idsMatch
     *
     * @return self
     */
    public function setIdsMatch(?string $idsMatch): self
    {
        $this->initialized['idsMatch'] = true;
        $this->idsMatch = $idsMatch;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['ids' => ['ids', 'getIds', 'setIds'], 'idsMatch' => ['idsMatch', 'getIdsMatch', 'setIdsMatch']];
    }
}