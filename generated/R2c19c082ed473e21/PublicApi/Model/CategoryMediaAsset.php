<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApi\Model;

class CategoryMediaAsset
{
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
    protected $id;
    /**
     * @var string
     */
    protected $downloadUri;
    /**
     * @var string
     */
    protected $previewUri;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $fileName;
    /**
     * @var string
     */
    protected $contentType;
    /**
     * @var list<string>
     */
    protected $labels;
    /**
     * @var float
     */
    protected $createdAt;
    /**
     * @var float
     */
    protected $updatedAt;
    /**
     * @var string
     */
    protected $number;
    /**
     * @var list<AssetAttribute>
     */
    protected $attributes;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getDownloadUri(): string
    {
        return $this->downloadUri;
    }
    /**
     * @param string $downloadUri
     *
     * @return self
     */
    public function setDownloadUri(string $downloadUri): self
    {
        $this->initialized['downloadUri'] = true;
        $this->downloadUri = $downloadUri;
        return $this;
    }
    /**
     * @return string
     */
    public function getPreviewUri(): string
    {
        return $this->previewUri;
    }
    /**
     * @param string $previewUri
     *
     * @return self
     */
    public function setPreviewUri(string $previewUri): self
    {
        $this->initialized['previewUri'] = true;
        $this->previewUri = $previewUri;
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
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
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
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }
    /**
     * @param string $contentType
     *
     * @return self
     */
    public function setContentType(string $contentType): self
    {
        $this->initialized['contentType'] = true;
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getLabels(): array
    {
        return $this->labels;
    }
    /**
     * @param list<string> $labels
     *
     * @return self
     */
    public function setLabels(array $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * @return float
     */
    public function getCreatedAt(): float
    {
        return $this->createdAt;
    }
    /**
     * @param float $createdAt
     *
     * @return self
     */
    public function setCreatedAt(float $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return float
     */
    public function getUpdatedAt(): float
    {
        return $this->updatedAt;
    }
    /**
     * @param float $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(float $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
    /**
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * @return list<AssetAttribute>
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }
    /**
     * @param list<AssetAttribute> $attributes
     *
     * @return self
     */
    public function setAttributes(array $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;
        return $this;
    }
}