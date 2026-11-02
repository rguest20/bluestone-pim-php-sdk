<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Search\Runtime\AdditionalPropertiesInterface;
class AssetsFileParams implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    protected $fileName;
    /**
     * @var string|null
     */
    protected $fileNameMatch;
    /**
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }
    /**
     * @param string|null $fileName
     *
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getFileNameMatch(): ?string
    {
        return $this->fileNameMatch;
    }
    /**
     * @param string|null $fileNameMatch
     *
     * @return self
     */
    public function setFileNameMatch(?string $fileNameMatch): self
    {
        $this->initialized['fileNameMatch'] = true;
        $this->fileNameMatch = $fileNameMatch;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['fileName' => ['fileName', 'getFileName', 'setFileName'], 'fileNameMatch' => ['fileNameMatch', 'getFileNameMatch', 'setFileNameMatch']];
    }
}