<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class DownloadAssetPresignedUrlResponse implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $assetId;
    /**
     * @var string
     */
    protected $presignedUrl;
    /**
     * @var string
     */
    protected $fileName;
    /**
     * @var \DateTime
     */
    protected $expiresAt;
    /**
     * @return string
     */
    public function getAssetId(): string
    {
        return $this->assetId;
    }
    /**
     * @param string $assetId
     *
     * @return self
     */
    public function setAssetId(string $assetId): self
    {
        $this->initialized['assetId'] = true;
        $this->assetId = $assetId;
        return $this;
    }
    /**
     * @return string
     */
    public function getPresignedUrl(): string
    {
        return $this->presignedUrl;
    }
    /**
     * @param string $presignedUrl
     *
     * @return self
     */
    public function setPresignedUrl(string $presignedUrl): self
    {
        $this->initialized['presignedUrl'] = true;
        $this->presignedUrl = $presignedUrl;
        return $this;
    }
    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }
    /**
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName(string $fileName): self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getExpiresAt(): \DateTime
    {
        return $this->expiresAt;
    }
    /**
     * @param \DateTime $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(\DateTime $expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['assetId' => ['assetId', 'getAssetId', 'setAssetId'], 'presignedUrl' => ['presignedUrl', 'getPresignedUrl', 'setPresignedUrl'], 'fileName' => ['fileName', 'getFileName', 'setFileName'], 'expiresAt' => ['expiresAt', 'getExpiresAt', 'setExpiresAt']];
    }
}