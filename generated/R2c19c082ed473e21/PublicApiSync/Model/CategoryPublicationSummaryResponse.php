<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\PublicApiSync\Runtime\AdditionalPropertiesInterface;
class CategoryPublicationSummaryResponse implements AdditionalPropertiesInterface
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
    protected $context;
    /**
     * @var string|null
     */
    protected $papiSessionId;
    /**
     * @var int|null
     */
    protected $addedCategories;
    /**
     * @var int|null
     */
    protected $modifiedCategories;
    /**
     * @var int|null
     */
    protected $unpublishedCategories;
    /**
     * @return string
     */
    public function getContext(): string
    {
        return $this->context;
    }
    /**
     * @param string $context
     *
     * @return self
     */
    public function setContext(string $context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getPapiSessionId(): ?string
    {
        return $this->papiSessionId;
    }
    /**
     * @param string|null $papiSessionId
     *
     * @return self
     */
    public function setPapiSessionId(?string $papiSessionId): self
    {
        $this->initialized['papiSessionId'] = true;
        $this->papiSessionId = $papiSessionId;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getAddedCategories(): ?int
    {
        return $this->addedCategories;
    }
    /**
     * @param int|null $addedCategories
     *
     * @return self
     */
    public function setAddedCategories(?int $addedCategories): self
    {
        $this->initialized['addedCategories'] = true;
        $this->addedCategories = $addedCategories;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getModifiedCategories(): ?int
    {
        return $this->modifiedCategories;
    }
    /**
     * @param int|null $modifiedCategories
     *
     * @return self
     */
    public function setModifiedCategories(?int $modifiedCategories): self
    {
        $this->initialized['modifiedCategories'] = true;
        $this->modifiedCategories = $modifiedCategories;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getUnpublishedCategories(): ?int
    {
        return $this->unpublishedCategories;
    }
    /**
     * @param int|null $unpublishedCategories
     *
     * @return self
     */
    public function setUnpublishedCategories(?int $unpublishedCategories): self
    {
        $this->initialized['unpublishedCategories'] = true;
        $this->unpublishedCategories = $unpublishedCategories;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['context' => ['context', 'getContext', 'setContext'], 'papiSessionId' => ['papiSessionId', 'getPapiSessionId', 'setPapiSessionId'], 'addedCategories' => ['addedCategories', 'getAddedCategories', 'setAddedCategories'], 'modifiedCategories' => ['modifiedCategories', 'getModifiedCategories', 'setModifiedCategories'], 'unpublishedCategories' => ['unpublishedCategories', 'getUnpublishedCategories', 'setUnpublishedCategories']];
    }
}