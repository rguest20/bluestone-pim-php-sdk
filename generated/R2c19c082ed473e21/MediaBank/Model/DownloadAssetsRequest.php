<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class DownloadAssetsRequest implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $expiresInMinutes;
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
     * @return int
     */
    public function getExpiresInMinutes(): int
    {
        return $this->expiresInMinutes;
    }
    /**
     * @param int $expiresInMinutes
     *
     * @return self
     */
    public function setExpiresInMinutes(int $expiresInMinutes): self
    {
        $this->initialized['expiresInMinutes'] = true;
        $this->expiresInMinutes = $expiresInMinutes;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['assetIds' => ['assetIds', 'getAssetIds', 'setAssetIds'], 'expiresInMinutes' => ['expiresInMinutes', 'getExpiresInMinutes', 'setExpiresInMinutes']];
    }
}