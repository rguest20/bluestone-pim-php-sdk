<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\MediaBank\Runtime\AdditionalPropertiesInterface;
class ListMediaLabelRequest implements AdditionalPropertiesInterface
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
    protected $labelTypes;
    /**
     * @var list<string>
     */
    protected $mediaTypes;
    /**
     * @var int
     */
    protected $page;
    /**
     * @var int
     */
    protected $pageSize;
    /**
     * @return list<string>
     */
    public function getLabelTypes(): array
    {
        return $this->labelTypes;
    }
    /**
     * @param list<string> $labelTypes
     *
     * @return self
     */
    public function setLabelTypes(array $labelTypes): self
    {
        $this->initialized['labelTypes'] = true;
        $this->labelTypes = $labelTypes;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getMediaTypes(): array
    {
        return $this->mediaTypes;
    }
    /**
     * @param list<string> $mediaTypes
     *
     * @return self
     */
    public function setMediaTypes(array $mediaTypes): self
    {
        $this->initialized['mediaTypes'] = true;
        $this->mediaTypes = $mediaTypes;
        return $this;
    }
    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
    /**
     * @param int $page
     *
     * @return self
     */
    public function setPage(int $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
    /**
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }
    /**
     * @param int $pageSize
     *
     * @return self
     */
    public function setPageSize(int $pageSize): self
    {
        $this->initialized['pageSize'] = true;
        $this->pageSize = $pageSize;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['labelTypes' => ['labelTypes', 'getLabelTypes', 'setLabelTypes'], 'mediaTypes' => ['mediaTypes', 'getMediaTypes', 'setMediaTypes'], 'page' => ['page', 'getPage', 'setPage'], 'pageSize' => ['pageSize', 'getPageSize', 'setPageSize']];
    }
}