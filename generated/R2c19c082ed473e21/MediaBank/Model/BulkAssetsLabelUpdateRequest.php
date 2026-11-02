<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class BulkAssetsLabelUpdateRequest implements AdditionalPropertiesInterface
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
    protected $assetIds;
    /**
     * @var string
     */
    protected $labelId;
    /**
     * @return list<string>
     */
    public function getAssetIds(): array
    {
        return $this->assetIds;
    }
    /**
     * @param list<string> $assetIds
     *
     * @return self
     */
    public function setAssetIds(array $assetIds): self
    {
        $this->initialized['assetIds'] = true;
        $this->assetIds = $assetIds;
        return $this;
    }
    /**
     * @return string
     */
    public function getLabelId(): string
    {
        return $this->labelId;
    }
    /**
     * @param string $labelId
     *
     * @return self
     */
    public function setLabelId(string $labelId): self
    {
        $this->initialized['labelId'] = true;
        $this->labelId = $labelId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['assetIds' => ['assetIds', 'getAssetIds', 'setAssetIds'], 'labelId' => ['labelId', 'getLabelId', 'setLabelId']];
    }
}